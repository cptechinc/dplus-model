<?php

namespace Base;

use \OptionsCi as ChildOptionsCi;
use \OptionsCiQuery as ChildOptionsCiQuery;
use \Exception;
use \PDO;
use Map\OptionsCiTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ci_options' table.
 *
 *
 *
 * @method     ChildOptionsCiQuery orderByCitboptncode($order = Criteria::ASC) Order by the CitbOptnCode column
 * @method     ChildOptionsCiQuery orderByCitboptnnoteavail($order = Criteria::ASC) Order by the CitbOptnNoteAvail column
 * @method     ChildOptionsCiQuery orderByCitboptngenavail($order = Criteria::ASC) Order by the CitbOptnGenAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnpayavail($order = Criteria::ASC) Order by the CitbOptnPayAvail column
 * @method     ChildOptionsCiQuery orderByCitboptncoreavail($order = Criteria::ASC) Order by the CitbOptnCoreAvail column
 * @method     ChildOptionsCiQuery orderByCitboptncredavail($order = Criteria::ASC) Order by the CitbOptnCredAvail column
 * @method     ChildOptionsCiQuery orderByCitboptncstkavail($order = Criteria::ASC) Order by the CitbOptnCstkAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnpricavail($order = Criteria::ASC) Order by the CitbOptnPricAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnstndavail($order = Criteria::ASC) Order by the CitbOptnStndAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnsoavail($order = Criteria::ASC) Order by the CitbOptnSoAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnquotavail($order = Criteria::ASC) Order by the CitbOptnQuotAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnopenavail($order = Criteria::ASC) Order by the CitbOptnOpenAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnpoavail($order = Criteria::ASC) Order by the CitbOptnPoAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnpodaysback($order = Criteria::ASC) Order by the CitbOptnPoDaysBack column
 * @method     ChildOptionsCiQuery orderByCitboptnpostrtdate($order = Criteria::ASC) Order by the CitbOptnPoStrtDate column
 * @method     ChildOptionsCiQuery orderByCitboptnshavail($order = Criteria::ASC) Order by the CitbOptnShAvail column
 * @method     ChildOptionsCiQuery orderByCitboptnshdaysback($order = Criteria::ASC) Order by the CitbOptnShDaysBack column
 * @method     ChildOptionsCiQuery orderByCitboptnshstrtdate($order = Criteria::ASC) Order by the CitbOptnShStrtDate column
 * @method     ChildOptionsCiQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildOptionsCiQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildOptionsCiQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildOptionsCiQuery groupByCitboptncode() Group by the CitbOptnCode column
 * @method     ChildOptionsCiQuery groupByCitboptnnoteavail() Group by the CitbOptnNoteAvail column
 * @method     ChildOptionsCiQuery groupByCitboptngenavail() Group by the CitbOptnGenAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnpayavail() Group by the CitbOptnPayAvail column
 * @method     ChildOptionsCiQuery groupByCitboptncoreavail() Group by the CitbOptnCoreAvail column
 * @method     ChildOptionsCiQuery groupByCitboptncredavail() Group by the CitbOptnCredAvail column
 * @method     ChildOptionsCiQuery groupByCitboptncstkavail() Group by the CitbOptnCstkAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnpricavail() Group by the CitbOptnPricAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnstndavail() Group by the CitbOptnStndAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnsoavail() Group by the CitbOptnSoAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnquotavail() Group by the CitbOptnQuotAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnopenavail() Group by the CitbOptnOpenAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnpoavail() Group by the CitbOptnPoAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnpodaysback() Group by the CitbOptnPoDaysBack column
 * @method     ChildOptionsCiQuery groupByCitboptnpostrtdate() Group by the CitbOptnPoStrtDate column
 * @method     ChildOptionsCiQuery groupByCitboptnshavail() Group by the CitbOptnShAvail column
 * @method     ChildOptionsCiQuery groupByCitboptnshdaysback() Group by the CitbOptnShDaysBack column
 * @method     ChildOptionsCiQuery groupByCitboptnshstrtdate() Group by the CitbOptnShStrtDate column
 * @method     ChildOptionsCiQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildOptionsCiQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildOptionsCiQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildOptionsCiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildOptionsCiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildOptionsCiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildOptionsCiQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildOptionsCiQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildOptionsCiQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildOptionsCi findOne(ConnectionInterface $con = null) Return the first ChildOptionsCi matching the query
 * @method     ChildOptionsCi findOneOrCreate(ConnectionInterface $con = null) Return the first ChildOptionsCi matching the query, or a new ChildOptionsCi object populated from the query conditions when no match is found
 *
 * @method     ChildOptionsCi findOneByCitboptncode(string $CitbOptnCode) Return the first ChildOptionsCi filtered by the CitbOptnCode column
 * @method     ChildOptionsCi findOneByCitboptnnoteavail(string $CitbOptnNoteAvail) Return the first ChildOptionsCi filtered by the CitbOptnNoteAvail column
 * @method     ChildOptionsCi findOneByCitboptngenavail(string $CitbOptnGenAvail) Return the first ChildOptionsCi filtered by the CitbOptnGenAvail column
 * @method     ChildOptionsCi findOneByCitboptnpayavail(string $CitbOptnPayAvail) Return the first ChildOptionsCi filtered by the CitbOptnPayAvail column
 * @method     ChildOptionsCi findOneByCitboptncoreavail(string $CitbOptnCoreAvail) Return the first ChildOptionsCi filtered by the CitbOptnCoreAvail column
 * @method     ChildOptionsCi findOneByCitboptncredavail(string $CitbOptnCredAvail) Return the first ChildOptionsCi filtered by the CitbOptnCredAvail column
 * @method     ChildOptionsCi findOneByCitboptncstkavail(string $CitbOptnCstkAvail) Return the first ChildOptionsCi filtered by the CitbOptnCstkAvail column
 * @method     ChildOptionsCi findOneByCitboptnpricavail(string $CitbOptnPricAvail) Return the first ChildOptionsCi filtered by the CitbOptnPricAvail column
 * @method     ChildOptionsCi findOneByCitboptnstndavail(string $CitbOptnStndAvail) Return the first ChildOptionsCi filtered by the CitbOptnStndAvail column
 * @method     ChildOptionsCi findOneByCitboptnsoavail(string $CitbOptnSoAvail) Return the first ChildOptionsCi filtered by the CitbOptnSoAvail column
 * @method     ChildOptionsCi findOneByCitboptnquotavail(string $CitbOptnQuotAvail) Return the first ChildOptionsCi filtered by the CitbOptnQuotAvail column
 * @method     ChildOptionsCi findOneByCitboptnopenavail(string $CitbOptnOpenAvail) Return the first ChildOptionsCi filtered by the CitbOptnOpenAvail column
 * @method     ChildOptionsCi findOneByCitboptnpoavail(string $CitbOptnPoAvail) Return the first ChildOptionsCi filtered by the CitbOptnPoAvail column
 * @method     ChildOptionsCi findOneByCitboptnpodaysback(int $CitbOptnPoDaysBack) Return the first ChildOptionsCi filtered by the CitbOptnPoDaysBack column
 * @method     ChildOptionsCi findOneByCitboptnpostrtdate(string $CitbOptnPoStrtDate) Return the first ChildOptionsCi filtered by the CitbOptnPoStrtDate column
 * @method     ChildOptionsCi findOneByCitboptnshavail(string $CitbOptnShAvail) Return the first ChildOptionsCi filtered by the CitbOptnShAvail column
 * @method     ChildOptionsCi findOneByCitboptnshdaysback(int $CitbOptnShDaysBack) Return the first ChildOptionsCi filtered by the CitbOptnShDaysBack column
 * @method     ChildOptionsCi findOneByCitboptnshstrtdate(string $CitbOptnShStrtDate) Return the first ChildOptionsCi filtered by the CitbOptnShStrtDate column
 * @method     ChildOptionsCi findOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsCi filtered by the DateUpdtd column
 * @method     ChildOptionsCi findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsCi filtered by the TimeUpdtd column
 * @method     ChildOptionsCi findOneByDummy(string $dummy) Return the first ChildOptionsCi filtered by the dummy column *

 * @method     ChildOptionsCi requirePk($key, ConnectionInterface $con = null) Return the ChildOptionsCi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOne(ConnectionInterface $con = null) Return the first ChildOptionsCi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsCi requireOneByCitboptncode(string $CitbOptnCode) Return the first ChildOptionsCi filtered by the CitbOptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnnoteavail(string $CitbOptnNoteAvail) Return the first ChildOptionsCi filtered by the CitbOptnNoteAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptngenavail(string $CitbOptnGenAvail) Return the first ChildOptionsCi filtered by the CitbOptnGenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnpayavail(string $CitbOptnPayAvail) Return the first ChildOptionsCi filtered by the CitbOptnPayAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptncoreavail(string $CitbOptnCoreAvail) Return the first ChildOptionsCi filtered by the CitbOptnCoreAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptncredavail(string $CitbOptnCredAvail) Return the first ChildOptionsCi filtered by the CitbOptnCredAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptncstkavail(string $CitbOptnCstkAvail) Return the first ChildOptionsCi filtered by the CitbOptnCstkAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnpricavail(string $CitbOptnPricAvail) Return the first ChildOptionsCi filtered by the CitbOptnPricAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnstndavail(string $CitbOptnStndAvail) Return the first ChildOptionsCi filtered by the CitbOptnStndAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnsoavail(string $CitbOptnSoAvail) Return the first ChildOptionsCi filtered by the CitbOptnSoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnquotavail(string $CitbOptnQuotAvail) Return the first ChildOptionsCi filtered by the CitbOptnQuotAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnopenavail(string $CitbOptnOpenAvail) Return the first ChildOptionsCi filtered by the CitbOptnOpenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnpoavail(string $CitbOptnPoAvail) Return the first ChildOptionsCi filtered by the CitbOptnPoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnpodaysback(int $CitbOptnPoDaysBack) Return the first ChildOptionsCi filtered by the CitbOptnPoDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnpostrtdate(string $CitbOptnPoStrtDate) Return the first ChildOptionsCi filtered by the CitbOptnPoStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnshavail(string $CitbOptnShAvail) Return the first ChildOptionsCi filtered by the CitbOptnShAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnshdaysback(int $CitbOptnShDaysBack) Return the first ChildOptionsCi filtered by the CitbOptnShDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByCitboptnshstrtdate(string $CitbOptnShStrtDate) Return the first ChildOptionsCi filtered by the CitbOptnShStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsCi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsCi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsCi requireOneByDummy(string $dummy) Return the first ChildOptionsCi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsCi[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildOptionsCi objects based on current ModelCriteria
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptncode(string $CitbOptnCode) Return ChildOptionsCi objects filtered by the CitbOptnCode column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnnoteavail(string $CitbOptnNoteAvail) Return ChildOptionsCi objects filtered by the CitbOptnNoteAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptngenavail(string $CitbOptnGenAvail) Return ChildOptionsCi objects filtered by the CitbOptnGenAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnpayavail(string $CitbOptnPayAvail) Return ChildOptionsCi objects filtered by the CitbOptnPayAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptncoreavail(string $CitbOptnCoreAvail) Return ChildOptionsCi objects filtered by the CitbOptnCoreAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptncredavail(string $CitbOptnCredAvail) Return ChildOptionsCi objects filtered by the CitbOptnCredAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptncstkavail(string $CitbOptnCstkAvail) Return ChildOptionsCi objects filtered by the CitbOptnCstkAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnpricavail(string $CitbOptnPricAvail) Return ChildOptionsCi objects filtered by the CitbOptnPricAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnstndavail(string $CitbOptnStndAvail) Return ChildOptionsCi objects filtered by the CitbOptnStndAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnsoavail(string $CitbOptnSoAvail) Return ChildOptionsCi objects filtered by the CitbOptnSoAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnquotavail(string $CitbOptnQuotAvail) Return ChildOptionsCi objects filtered by the CitbOptnQuotAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnopenavail(string $CitbOptnOpenAvail) Return ChildOptionsCi objects filtered by the CitbOptnOpenAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnpoavail(string $CitbOptnPoAvail) Return ChildOptionsCi objects filtered by the CitbOptnPoAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnpodaysback(int $CitbOptnPoDaysBack) Return ChildOptionsCi objects filtered by the CitbOptnPoDaysBack column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnpostrtdate(string $CitbOptnPoStrtDate) Return ChildOptionsCi objects filtered by the CitbOptnPoStrtDate column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnshavail(string $CitbOptnShAvail) Return ChildOptionsCi objects filtered by the CitbOptnShAvail column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnshdaysback(int $CitbOptnShDaysBack) Return ChildOptionsCi objects filtered by the CitbOptnShDaysBack column
 * @method     ChildOptionsCi[]|ObjectCollection findByCitboptnshstrtdate(string $CitbOptnShStrtDate) Return ChildOptionsCi objects filtered by the CitbOptnShStrtDate column
 * @method     ChildOptionsCi[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildOptionsCi objects filtered by the DateUpdtd column
 * @method     ChildOptionsCi[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildOptionsCi objects filtered by the TimeUpdtd column
 * @method     ChildOptionsCi[]|ObjectCollection findByDummy(string $dummy) Return ChildOptionsCi objects filtered by the dummy column
 * @method     ChildOptionsCi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class OptionsCiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\OptionsCiQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\OptionsCi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOptionsCiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOptionsCiQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildOptionsCiQuery) {
            return $criteria;
        }
        $query = new ChildOptionsCiQuery();
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
     * @return ChildOptionsCi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = OptionsCiTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildOptionsCi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT CitbOptnCode, CitbOptnNoteAvail, CitbOptnGenAvail, CitbOptnPayAvail, CitbOptnCoreAvail, CitbOptnCredAvail, CitbOptnCstkAvail, CitbOptnPricAvail, CitbOptnStndAvail, CitbOptnSoAvail, CitbOptnQuotAvail, CitbOptnOpenAvail, CitbOptnPoAvail, CitbOptnPoDaysBack, CitbOptnPoStrtDate, CitbOptnShAvail, CitbOptnShDaysBack, CitbOptnShStrtDate, DateUpdtd, TimeUpdtd, dummy FROM ci_options WHERE CitbOptnCode = :p0';
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
            /** @var ChildOptionsCi $obj */
            $obj = new ChildOptionsCi();
            $obj->hydrate($row);
            OptionsCiTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildOptionsCi|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CitbOptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptncode('fooValue');   // WHERE CitbOptnCode = 'fooValue'
     * $query->filterByCitboptncode('%fooValue%', Criteria::LIKE); // WHERE CitbOptnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptncode($citboptncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCODE, $citboptncode, $comparison);
    }

    /**
     * Filter the query on the CitbOptnNoteAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnnoteavail('fooValue');   // WHERE CitbOptnNoteAvail = 'fooValue'
     * $query->filterByCitboptnnoteavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnNoteAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnnoteavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnnoteavail($citboptnnoteavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnnoteavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNNOTEAVAIL, $citboptnnoteavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnGenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptngenavail('fooValue');   // WHERE CitbOptnGenAvail = 'fooValue'
     * $query->filterByCitboptngenavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnGenAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptngenavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptngenavail($citboptngenavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptngenavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNGENAVAIL, $citboptngenavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnPayAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnpayavail('fooValue');   // WHERE CitbOptnPayAvail = 'fooValue'
     * $query->filterByCitboptnpayavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnPayAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnpayavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnpayavail($citboptnpayavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnpayavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPAYAVAIL, $citboptnpayavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnCoreAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptncoreavail('fooValue');   // WHERE CitbOptnCoreAvail = 'fooValue'
     * $query->filterByCitboptncoreavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnCoreAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptncoreavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptncoreavail($citboptncoreavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptncoreavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCOREAVAIL, $citboptncoreavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnCredAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptncredavail('fooValue');   // WHERE CitbOptnCredAvail = 'fooValue'
     * $query->filterByCitboptncredavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnCredAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptncredavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptncredavail($citboptncredavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptncredavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCREDAVAIL, $citboptncredavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnCstkAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptncstkavail('fooValue');   // WHERE CitbOptnCstkAvail = 'fooValue'
     * $query->filterByCitboptncstkavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnCstkAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptncstkavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptncstkavail($citboptncstkavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptncstkavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCSTKAVAIL, $citboptncstkavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnPricAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnpricavail('fooValue');   // WHERE CitbOptnPricAvail = 'fooValue'
     * $query->filterByCitboptnpricavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnPricAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnpricavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnpricavail($citboptnpricavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnpricavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPRICAVAIL, $citboptnpricavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnStndAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnstndavail('fooValue');   // WHERE CitbOptnStndAvail = 'fooValue'
     * $query->filterByCitboptnstndavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnStndAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnstndavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnstndavail($citboptnstndavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnstndavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSTNDAVAIL, $citboptnstndavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnSoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnsoavail('fooValue');   // WHERE CitbOptnSoAvail = 'fooValue'
     * $query->filterByCitboptnsoavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnSoAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnsoavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnsoavail($citboptnsoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnsoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSOAVAIL, $citboptnsoavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnQuotAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnquotavail('fooValue');   // WHERE CitbOptnQuotAvail = 'fooValue'
     * $query->filterByCitboptnquotavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnQuotAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnquotavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnquotavail($citboptnquotavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnquotavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNQUOTAVAIL, $citboptnquotavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnOpenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnopenavail('fooValue');   // WHERE CitbOptnOpenAvail = 'fooValue'
     * $query->filterByCitboptnopenavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnOpenAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnopenavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnopenavail($citboptnopenavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnopenavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNOPENAVAIL, $citboptnopenavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnPoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnpoavail('fooValue');   // WHERE CitbOptnPoAvail = 'fooValue'
     * $query->filterByCitboptnpoavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnPoAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnpoavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnpoavail($citboptnpoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnpoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPOAVAIL, $citboptnpoavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnPoDaysBack column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnpodaysback(1234); // WHERE CitbOptnPoDaysBack = 1234
     * $query->filterByCitboptnpodaysback(array(12, 34)); // WHERE CitbOptnPoDaysBack IN (12, 34)
     * $query->filterByCitboptnpodaysback(array('min' => 12)); // WHERE CitbOptnPoDaysBack > 12
     * </code>
     *
     * @param     mixed $citboptnpodaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnpodaysback($citboptnpodaysback = null, $comparison = null)
    {
        if (is_array($citboptnpodaysback)) {
            $useMinMax = false;
            if (isset($citboptnpodaysback['min'])) {
                $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, $citboptnpodaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citboptnpodaysback['max'])) {
                $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, $citboptnpodaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPODAYSBACK, $citboptnpodaysback, $comparison);
    }

    /**
     * Filter the query on the CitbOptnPoStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnpostrtdate('fooValue');   // WHERE CitbOptnPoStrtDate = 'fooValue'
     * $query->filterByCitboptnpostrtdate('%fooValue%', Criteria::LIKE); // WHERE CitbOptnPoStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnpostrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnpostrtdate($citboptnpostrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnpostrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNPOSTRTDATE, $citboptnpostrtdate, $comparison);
    }

    /**
     * Filter the query on the CitbOptnShAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnshavail('fooValue');   // WHERE CitbOptnShAvail = 'fooValue'
     * $query->filterByCitboptnshavail('%fooValue%', Criteria::LIKE); // WHERE CitbOptnShAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnshavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnshavail($citboptnshavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnshavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSHAVAIL, $citboptnshavail, $comparison);
    }

    /**
     * Filter the query on the CitbOptnShDaysBack column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnshdaysback(1234); // WHERE CitbOptnShDaysBack = 1234
     * $query->filterByCitboptnshdaysback(array(12, 34)); // WHERE CitbOptnShDaysBack IN (12, 34)
     * $query->filterByCitboptnshdaysback(array('min' => 12)); // WHERE CitbOptnShDaysBack > 12
     * </code>
     *
     * @param     mixed $citboptnshdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnshdaysback($citboptnshdaysback = null, $comparison = null)
    {
        if (is_array($citboptnshdaysback)) {
            $useMinMax = false;
            if (isset($citboptnshdaysback['min'])) {
                $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, $citboptnshdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citboptnshdaysback['max'])) {
                $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, $citboptnshdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSHDAYSBACK, $citboptnshdaysback, $comparison);
    }

    /**
     * Filter the query on the CitbOptnShStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCitboptnshstrtdate('fooValue');   // WHERE CitbOptnShStrtDate = 'fooValue'
     * $query->filterByCitboptnshstrtdate('%fooValue%', Criteria::LIKE); // WHERE CitbOptnShStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citboptnshstrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByCitboptnshstrtdate($citboptnshstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citboptnshstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNSHSTRTDATE, $citboptnshstrtdate, $comparison);
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
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsCiTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildOptionsCi $optionsCi Object to remove from the list of results
     *
     * @return $this|ChildOptionsCiQuery The current query, for fluid interface
     */
    public function prune($optionsCi = null)
    {
        if ($optionsCi) {
            $this->addUsingAlias(OptionsCiTableMap::COL_CITBOPTNCODE, $optionsCi->getCitboptncode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ci_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OptionsCiTableMap::clearInstancePool();
            OptionsCiTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsCiTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(OptionsCiTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            OptionsCiTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            OptionsCiTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // OptionsCiQuery
