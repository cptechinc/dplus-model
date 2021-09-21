<?php

namespace Base;

use \ConfigIi as ChildConfigIi;
use \ConfigIiQuery as ChildConfigIiQuery;
use \Exception;
use \PDO;
use Map\ConfigIiTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ii_config' table.
 *
 *
 *
 * @method     ChildConfigIiQuery orderByIitbconfkey($order = Criteria::ASC) Order by the IitbConfKey column
 * @method     ChildConfigIiQuery orderByIitbconfonewhse($order = Criteria::ASC) Order by the IitbConfOneWhse column
 * @method     ChildConfigIiQuery orderByIitbconfdefwhse($order = Criteria::ASC) Order by the IitbConfDefWhse column
 * @method     ChildConfigIiQuery orderByIitbconfytdstrtmo($order = Criteria::ASC) Order by the IitbConfYtdStrtMo column
 * @method     ChildConfigIiQuery orderByIitbconfusecustwhse($order = Criteria::ASC) Order by the IitbConfUseCustWhse column
 * @method     ChildConfigIiQuery orderByIitbconfwuorvqw($order = Criteria::ASC) Order by the IitbConfWuOrVqw column
 * @method     ChildConfigIiQuery orderByIitbconfqorls($order = Criteria::ASC) Order by the IitbConfQOrLs column
 * @method     ChildConfigIiQuery orderByIitbconfinqcode($order = Criteria::ASC) Order by the IitbConfInqCode column
 * @method     ChildConfigIiQuery orderByIitbconfpricsect($order = Criteria::ASC) Order by the IitbConfPricSect column
 * @method     ChildConfigIiQuery orderByIitbconfsrchupcalias($order = Criteria::ASC) Order by the IitbConfSrchUpcAlias column
 * @method     ChildConfigIiQuery orderByIitbconflotbin($order = Criteria::ASC) Order by the IitbConfLotBin column
 * @method     ChildConfigIiQuery orderByIitbconfoneitem($order = Criteria::ASC) Order by the IitbConfOneItem column
 * @method     ChildConfigIiQuery orderByIitbconfitemtotals($order = Criteria::ASC) Order by the IitbConfItemTotals column
 * @method     ChildConfigIiQuery orderByIitbconfmonthsusage($order = Criteria::ASC) Order by the IitbConfMonthsUsage column
 * @method     ChildConfigIiQuery orderByIitbconftora($order = Criteria::ASC) Order by the IitbConfTOrA column
 * @method     ChildConfigIiQuery orderByIitbconfunitcost($order = Criteria::ASC) Order by the IitbConfUnitCost column
 * @method     ChildConfigIiQuery orderByIitbconfformulaoption($order = Criteria::ASC) Order by the IitbConfFormulaOption column
 * @method     ChildConfigIiQuery orderByIitbconftranssep($order = Criteria::ASC) Order by the IitbConfTransSep column
 * @method     ChildConfigIiQuery orderByIitbconfdispbindet($order = Criteria::ASC) Order by the IitbConfDispBinDet column
 * @method     ChildConfigIiQuery orderByIitbconfshdateorcust($order = Criteria::ASC) Order by the IitbConfShDateOrCust column
 * @method     ChildConfigIiQuery orderByIitbconfshzeroship($order = Criteria::ASC) Order by the IitbConfShZeroShip column
 * @method     ChildConfigIiQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigIiQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigIiQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigIiQuery groupByIitbconfkey() Group by the IitbConfKey column
 * @method     ChildConfigIiQuery groupByIitbconfonewhse() Group by the IitbConfOneWhse column
 * @method     ChildConfigIiQuery groupByIitbconfdefwhse() Group by the IitbConfDefWhse column
 * @method     ChildConfigIiQuery groupByIitbconfytdstrtmo() Group by the IitbConfYtdStrtMo column
 * @method     ChildConfigIiQuery groupByIitbconfusecustwhse() Group by the IitbConfUseCustWhse column
 * @method     ChildConfigIiQuery groupByIitbconfwuorvqw() Group by the IitbConfWuOrVqw column
 * @method     ChildConfigIiQuery groupByIitbconfqorls() Group by the IitbConfQOrLs column
 * @method     ChildConfigIiQuery groupByIitbconfinqcode() Group by the IitbConfInqCode column
 * @method     ChildConfigIiQuery groupByIitbconfpricsect() Group by the IitbConfPricSect column
 * @method     ChildConfigIiQuery groupByIitbconfsrchupcalias() Group by the IitbConfSrchUpcAlias column
 * @method     ChildConfigIiQuery groupByIitbconflotbin() Group by the IitbConfLotBin column
 * @method     ChildConfigIiQuery groupByIitbconfoneitem() Group by the IitbConfOneItem column
 * @method     ChildConfigIiQuery groupByIitbconfitemtotals() Group by the IitbConfItemTotals column
 * @method     ChildConfigIiQuery groupByIitbconfmonthsusage() Group by the IitbConfMonthsUsage column
 * @method     ChildConfigIiQuery groupByIitbconftora() Group by the IitbConfTOrA column
 * @method     ChildConfigIiQuery groupByIitbconfunitcost() Group by the IitbConfUnitCost column
 * @method     ChildConfigIiQuery groupByIitbconfformulaoption() Group by the IitbConfFormulaOption column
 * @method     ChildConfigIiQuery groupByIitbconftranssep() Group by the IitbConfTransSep column
 * @method     ChildConfigIiQuery groupByIitbconfdispbindet() Group by the IitbConfDispBinDet column
 * @method     ChildConfigIiQuery groupByIitbconfshdateorcust() Group by the IitbConfShDateOrCust column
 * @method     ChildConfigIiQuery groupByIitbconfshzeroship() Group by the IitbConfShZeroShip column
 * @method     ChildConfigIiQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigIiQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigIiQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigIiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigIiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigIiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigIiQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigIiQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigIiQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigIi findOne(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query
 * @method     ChildConfigIi findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query, or a new ChildConfigIi object populated from the query conditions when no match is found
 *
 * @method     ChildConfigIi findOneByIitbconfkey(int $IitbConfKey) Return the first ChildConfigIi filtered by the IitbConfKey column
 * @method     ChildConfigIi findOneByIitbconfonewhse(string $IitbConfOneWhse) Return the first ChildConfigIi filtered by the IitbConfOneWhse column
 * @method     ChildConfigIi findOneByIitbconfdefwhse(string $IitbConfDefWhse) Return the first ChildConfigIi filtered by the IitbConfDefWhse column
 * @method     ChildConfigIi findOneByIitbconfytdstrtmo(int $IitbConfYtdStrtMo) Return the first ChildConfigIi filtered by the IitbConfYtdStrtMo column
 * @method     ChildConfigIi findOneByIitbconfusecustwhse(string $IitbConfUseCustWhse) Return the first ChildConfigIi filtered by the IitbConfUseCustWhse column
 * @method     ChildConfigIi findOneByIitbconfwuorvqw(string $IitbConfWuOrVqw) Return the first ChildConfigIi filtered by the IitbConfWuOrVqw column
 * @method     ChildConfigIi findOneByIitbconfqorls(string $IitbConfQOrLs) Return the first ChildConfigIi filtered by the IitbConfQOrLs column
 * @method     ChildConfigIi findOneByIitbconfinqcode(string $IitbConfInqCode) Return the first ChildConfigIi filtered by the IitbConfInqCode column
 * @method     ChildConfigIi findOneByIitbconfpricsect(string $IitbConfPricSect) Return the first ChildConfigIi filtered by the IitbConfPricSect column
 * @method     ChildConfigIi findOneByIitbconfsrchupcalias(string $IitbConfSrchUpcAlias) Return the first ChildConfigIi filtered by the IitbConfSrchUpcAlias column
 * @method     ChildConfigIi findOneByIitbconflotbin(string $IitbConfLotBin) Return the first ChildConfigIi filtered by the IitbConfLotBin column
 * @method     ChildConfigIi findOneByIitbconfoneitem(string $IitbConfOneItem) Return the first ChildConfigIi filtered by the IitbConfOneItem column
 * @method     ChildConfigIi findOneByIitbconfitemtotals(string $IitbConfItemTotals) Return the first ChildConfigIi filtered by the IitbConfItemTotals column
 * @method     ChildConfigIi findOneByIitbconfmonthsusage(int $IitbConfMonthsUsage) Return the first ChildConfigIi filtered by the IitbConfMonthsUsage column
 * @method     ChildConfigIi findOneByIitbconftora(string $IitbConfTOrA) Return the first ChildConfigIi filtered by the IitbConfTOrA column
 * @method     ChildConfigIi findOneByIitbconfunitcost(string $IitbConfUnitCost) Return the first ChildConfigIi filtered by the IitbConfUnitCost column
 * @method     ChildConfigIi findOneByIitbconfformulaoption(int $IitbConfFormulaOption) Return the first ChildConfigIi filtered by the IitbConfFormulaOption column
 * @method     ChildConfigIi findOneByIitbconftranssep(string $IitbConfTransSep) Return the first ChildConfigIi filtered by the IitbConfTransSep column
 * @method     ChildConfigIi findOneByIitbconfdispbindet(string $IitbConfDispBinDet) Return the first ChildConfigIi filtered by the IitbConfDispBinDet column
 * @method     ChildConfigIi findOneByIitbconfshdateorcust(string $IitbConfShDateOrCust) Return the first ChildConfigIi filtered by the IitbConfShDateOrCust column
 * @method     ChildConfigIi findOneByIitbconfshzeroship(string $IitbConfShZeroShip) Return the first ChildConfigIi filtered by the IitbConfShZeroShip column
 * @method     ChildConfigIi findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIi filtered by the DateUpdtd column
 * @method     ChildConfigIi findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIi filtered by the TimeUpdtd column
 * @method     ChildConfigIi findOneByDummy(string $dummy) Return the first ChildConfigIi filtered by the dummy column *

 * @method     ChildConfigIi requirePk($key, ConnectionInterface $con = null) Return the ChildConfigIi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOne(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIi requireOneByIitbconfkey(int $IitbConfKey) Return the first ChildConfigIi filtered by the IitbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfonewhse(string $IitbConfOneWhse) Return the first ChildConfigIi filtered by the IitbConfOneWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfdefwhse(string $IitbConfDefWhse) Return the first ChildConfigIi filtered by the IitbConfDefWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfytdstrtmo(int $IitbConfYtdStrtMo) Return the first ChildConfigIi filtered by the IitbConfYtdStrtMo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfusecustwhse(string $IitbConfUseCustWhse) Return the first ChildConfigIi filtered by the IitbConfUseCustWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfwuorvqw(string $IitbConfWuOrVqw) Return the first ChildConfigIi filtered by the IitbConfWuOrVqw column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfqorls(string $IitbConfQOrLs) Return the first ChildConfigIi filtered by the IitbConfQOrLs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfinqcode(string $IitbConfInqCode) Return the first ChildConfigIi filtered by the IitbConfInqCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfpricsect(string $IitbConfPricSect) Return the first ChildConfigIi filtered by the IitbConfPricSect column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfsrchupcalias(string $IitbConfSrchUpcAlias) Return the first ChildConfigIi filtered by the IitbConfSrchUpcAlias column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconflotbin(string $IitbConfLotBin) Return the first ChildConfigIi filtered by the IitbConfLotBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfoneitem(string $IitbConfOneItem) Return the first ChildConfigIi filtered by the IitbConfOneItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfitemtotals(string $IitbConfItemTotals) Return the first ChildConfigIi filtered by the IitbConfItemTotals column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfmonthsusage(int $IitbConfMonthsUsage) Return the first ChildConfigIi filtered by the IitbConfMonthsUsage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconftora(string $IitbConfTOrA) Return the first ChildConfigIi filtered by the IitbConfTOrA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfunitcost(string $IitbConfUnitCost) Return the first ChildConfigIi filtered by the IitbConfUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfformulaoption(int $IitbConfFormulaOption) Return the first ChildConfigIi filtered by the IitbConfFormulaOption column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconftranssep(string $IitbConfTransSep) Return the first ChildConfigIi filtered by the IitbConfTransSep column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfdispbindet(string $IitbConfDispBinDet) Return the first ChildConfigIi filtered by the IitbConfDispBinDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfshdateorcust(string $IitbConfShDateOrCust) Return the first ChildConfigIi filtered by the IitbConfShDateOrCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitbconfshzeroship(string $IitbConfShZeroShip) Return the first ChildConfigIi filtered by the IitbConfShZeroShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByDummy(string $dummy) Return the first ChildConfigIi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIi[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigIi objects based on current ModelCriteria
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfkey(int $IitbConfKey) Return ChildConfigIi objects filtered by the IitbConfKey column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfonewhse(string $IitbConfOneWhse) Return ChildConfigIi objects filtered by the IitbConfOneWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfdefwhse(string $IitbConfDefWhse) Return ChildConfigIi objects filtered by the IitbConfDefWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfytdstrtmo(int $IitbConfYtdStrtMo) Return ChildConfigIi objects filtered by the IitbConfYtdStrtMo column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfusecustwhse(string $IitbConfUseCustWhse) Return ChildConfigIi objects filtered by the IitbConfUseCustWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfwuorvqw(string $IitbConfWuOrVqw) Return ChildConfigIi objects filtered by the IitbConfWuOrVqw column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfqorls(string $IitbConfQOrLs) Return ChildConfigIi objects filtered by the IitbConfQOrLs column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfinqcode(string $IitbConfInqCode) Return ChildConfigIi objects filtered by the IitbConfInqCode column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfpricsect(string $IitbConfPricSect) Return ChildConfigIi objects filtered by the IitbConfPricSect column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfsrchupcalias(string $IitbConfSrchUpcAlias) Return ChildConfigIi objects filtered by the IitbConfSrchUpcAlias column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconflotbin(string $IitbConfLotBin) Return ChildConfigIi objects filtered by the IitbConfLotBin column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfoneitem(string $IitbConfOneItem) Return ChildConfigIi objects filtered by the IitbConfOneItem column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfitemtotals(string $IitbConfItemTotals) Return ChildConfigIi objects filtered by the IitbConfItemTotals column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfmonthsusage(int $IitbConfMonthsUsage) Return ChildConfigIi objects filtered by the IitbConfMonthsUsage column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconftora(string $IitbConfTOrA) Return ChildConfigIi objects filtered by the IitbConfTOrA column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfunitcost(string $IitbConfUnitCost) Return ChildConfigIi objects filtered by the IitbConfUnitCost column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfformulaoption(int $IitbConfFormulaOption) Return ChildConfigIi objects filtered by the IitbConfFormulaOption column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconftranssep(string $IitbConfTransSep) Return ChildConfigIi objects filtered by the IitbConfTransSep column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfdispbindet(string $IitbConfDispBinDet) Return ChildConfigIi objects filtered by the IitbConfDispBinDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfshdateorcust(string $IitbConfShDateOrCust) Return ChildConfigIi objects filtered by the IitbConfShDateOrCust column
 * @method     ChildConfigIi[]|ObjectCollection findByIitbconfshzeroship(string $IitbConfShZeroShip) Return ChildConfigIi objects filtered by the IitbConfShZeroShip column
 * @method     ChildConfigIi[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigIi objects filtered by the DateUpdtd column
 * @method     ChildConfigIi[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigIi objects filtered by the TimeUpdtd column
 * @method     ChildConfigIi[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigIi objects filtered by the dummy column
 * @method     ChildConfigIi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigIiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigIiQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigIi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigIiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigIiQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigIiQuery) {
            return $criteria;
        }
        $query = new ChildConfigIiQuery();
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
     * @return ChildConfigIi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigIiTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigIi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IitbConfKey, IitbConfOneWhse, IitbConfDefWhse, IitbConfYtdStrtMo, IitbConfUseCustWhse, IitbConfWuOrVqw, IitbConfQOrLs, IitbConfInqCode, IitbConfPricSect, IitbConfSrchUpcAlias, IitbConfLotBin, IitbConfOneItem, IitbConfItemTotals, IitbConfMonthsUsage, IitbConfTOrA, IitbConfUnitCost, IitbConfFormulaOption, IitbConfTransSep, IitbConfDispBinDet, IitbConfShDateOrCust, IitbConfShZeroShip, DateUpdtd, TimeUpdtd, dummy FROM ii_config WHERE IitbConfKey = :p0';
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
            /** @var ChildConfigIi $obj */
            $obj = new ChildConfigIi();
            $obj->hydrate($row);
            ConfigIiTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigIi|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IitbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfkey(1234); // WHERE IitbConfKey = 1234
     * $query->filterByIitbconfkey(array(12, 34)); // WHERE IitbConfKey IN (12, 34)
     * $query->filterByIitbconfkey(array('min' => 12)); // WHERE IitbConfKey > 12
     * </code>
     *
     * @param     mixed $iitbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfkey($iitbconfkey = null, $comparison = null)
    {
        if (is_array($iitbconfkey)) {
            $useMinMax = false;
            if (isset($iitbconfkey['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $iitbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitbconfkey['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $iitbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $iitbconfkey, $comparison);
    }

    /**
     * Filter the query on the IitbConfOneWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfonewhse('fooValue');   // WHERE IitbConfOneWhse = 'fooValue'
     * $query->filterByIitbconfonewhse('%fooValue%', Criteria::LIKE); // WHERE IitbConfOneWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfonewhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfonewhse($iitbconfonewhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfonewhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFONEWHSE, $iitbconfonewhse, $comparison);
    }

    /**
     * Filter the query on the IitbConfDefWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfdefwhse('fooValue');   // WHERE IitbConfDefWhse = 'fooValue'
     * $query->filterByIitbconfdefwhse('%fooValue%', Criteria::LIKE); // WHERE IitbConfDefWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfdefwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfdefwhse($iitbconfdefwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfdefwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFDEFWHSE, $iitbconfdefwhse, $comparison);
    }

    /**
     * Filter the query on the IitbConfYtdStrtMo column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfytdstrtmo(1234); // WHERE IitbConfYtdStrtMo = 1234
     * $query->filterByIitbconfytdstrtmo(array(12, 34)); // WHERE IitbConfYtdStrtMo IN (12, 34)
     * $query->filterByIitbconfytdstrtmo(array('min' => 12)); // WHERE IitbConfYtdStrtMo > 12
     * </code>
     *
     * @param     mixed $iitbconfytdstrtmo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfytdstrtmo($iitbconfytdstrtmo = null, $comparison = null)
    {
        if (is_array($iitbconfytdstrtmo)) {
            $useMinMax = false;
            if (isset($iitbconfytdstrtmo['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO, $iitbconfytdstrtmo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitbconfytdstrtmo['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO, $iitbconfytdstrtmo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFYTDSTRTMO, $iitbconfytdstrtmo, $comparison);
    }

    /**
     * Filter the query on the IitbConfUseCustWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfusecustwhse('fooValue');   // WHERE IitbConfUseCustWhse = 'fooValue'
     * $query->filterByIitbconfusecustwhse('%fooValue%', Criteria::LIKE); // WHERE IitbConfUseCustWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfusecustwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfusecustwhse($iitbconfusecustwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfusecustwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFUSECUSTWHSE, $iitbconfusecustwhse, $comparison);
    }

    /**
     * Filter the query on the IitbConfWuOrVqw column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfwuorvqw('fooValue');   // WHERE IitbConfWuOrVqw = 'fooValue'
     * $query->filterByIitbconfwuorvqw('%fooValue%', Criteria::LIKE); // WHERE IitbConfWuOrVqw LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfwuorvqw The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfwuorvqw($iitbconfwuorvqw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfwuorvqw)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFWUORVQW, $iitbconfwuorvqw, $comparison);
    }

    /**
     * Filter the query on the IitbConfQOrLs column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfqorls('fooValue');   // WHERE IitbConfQOrLs = 'fooValue'
     * $query->filterByIitbconfqorls('%fooValue%', Criteria::LIKE); // WHERE IitbConfQOrLs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfqorls The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfqorls($iitbconfqorls = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfqorls)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFQORLS, $iitbconfqorls, $comparison);
    }

    /**
     * Filter the query on the IitbConfInqCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfinqcode('fooValue');   // WHERE IitbConfInqCode = 'fooValue'
     * $query->filterByIitbconfinqcode('%fooValue%', Criteria::LIKE); // WHERE IitbConfInqCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfinqcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfinqcode($iitbconfinqcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfinqcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFINQCODE, $iitbconfinqcode, $comparison);
    }

    /**
     * Filter the query on the IitbConfPricSect column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfpricsect('fooValue');   // WHERE IitbConfPricSect = 'fooValue'
     * $query->filterByIitbconfpricsect('%fooValue%', Criteria::LIKE); // WHERE IitbConfPricSect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfpricsect The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfpricsect($iitbconfpricsect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfpricsect)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFPRICSECT, $iitbconfpricsect, $comparison);
    }

    /**
     * Filter the query on the IitbConfSrchUpcAlias column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfsrchupcalias('fooValue');   // WHERE IitbConfSrchUpcAlias = 'fooValue'
     * $query->filterByIitbconfsrchupcalias('%fooValue%', Criteria::LIKE); // WHERE IitbConfSrchUpcAlias LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfsrchupcalias The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfsrchupcalias($iitbconfsrchupcalias = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfsrchupcalias)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFSRCHUPCALIAS, $iitbconfsrchupcalias, $comparison);
    }

    /**
     * Filter the query on the IitbConfLotBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconflotbin('fooValue');   // WHERE IitbConfLotBin = 'fooValue'
     * $query->filterByIitbconflotbin('%fooValue%', Criteria::LIKE); // WHERE IitbConfLotBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconflotbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconflotbin($iitbconflotbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconflotbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFLOTBIN, $iitbconflotbin, $comparison);
    }

    /**
     * Filter the query on the IitbConfOneItem column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfoneitem('fooValue');   // WHERE IitbConfOneItem = 'fooValue'
     * $query->filterByIitbconfoneitem('%fooValue%', Criteria::LIKE); // WHERE IitbConfOneItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfoneitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfoneitem($iitbconfoneitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfoneitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFONEITEM, $iitbconfoneitem, $comparison);
    }

    /**
     * Filter the query on the IitbConfItemTotals column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfitemtotals('fooValue');   // WHERE IitbConfItemTotals = 'fooValue'
     * $query->filterByIitbconfitemtotals('%fooValue%', Criteria::LIKE); // WHERE IitbConfItemTotals LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfitemtotals The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfitemtotals($iitbconfitemtotals = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfitemtotals)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFITEMTOTALS, $iitbconfitemtotals, $comparison);
    }

    /**
     * Filter the query on the IitbConfMonthsUsage column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfmonthsusage(1234); // WHERE IitbConfMonthsUsage = 1234
     * $query->filterByIitbconfmonthsusage(array(12, 34)); // WHERE IitbConfMonthsUsage IN (12, 34)
     * $query->filterByIitbconfmonthsusage(array('min' => 12)); // WHERE IitbConfMonthsUsage > 12
     * </code>
     *
     * @param     mixed $iitbconfmonthsusage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfmonthsusage($iitbconfmonthsusage = null, $comparison = null)
    {
        if (is_array($iitbconfmonthsusage)) {
            $useMinMax = false;
            if (isset($iitbconfmonthsusage['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE, $iitbconfmonthsusage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitbconfmonthsusage['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE, $iitbconfmonthsusage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFMONTHSUSAGE, $iitbconfmonthsusage, $comparison);
    }

    /**
     * Filter the query on the IitbConfTOrA column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconftora('fooValue');   // WHERE IitbConfTOrA = 'fooValue'
     * $query->filterByIitbconftora('%fooValue%', Criteria::LIKE); // WHERE IitbConfTOrA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconftora The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconftora($iitbconftora = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconftora)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFTORA, $iitbconftora, $comparison);
    }

    /**
     * Filter the query on the IitbConfUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfunitcost('fooValue');   // WHERE IitbConfUnitCost = 'fooValue'
     * $query->filterByIitbconfunitcost('%fooValue%', Criteria::LIKE); // WHERE IitbConfUnitCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfunitcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfunitcost($iitbconfunitcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfunitcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFUNITCOST, $iitbconfunitcost, $comparison);
    }

    /**
     * Filter the query on the IitbConfFormulaOption column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfformulaoption(1234); // WHERE IitbConfFormulaOption = 1234
     * $query->filterByIitbconfformulaoption(array(12, 34)); // WHERE IitbConfFormulaOption IN (12, 34)
     * $query->filterByIitbconfformulaoption(array('min' => 12)); // WHERE IitbConfFormulaOption > 12
     * </code>
     *
     * @param     mixed $iitbconfformulaoption The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfformulaoption($iitbconfformulaoption = null, $comparison = null)
    {
        if (is_array($iitbconfformulaoption)) {
            $useMinMax = false;
            if (isset($iitbconfformulaoption['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION, $iitbconfformulaoption['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitbconfformulaoption['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION, $iitbconfformulaoption['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFFORMULAOPTION, $iitbconfformulaoption, $comparison);
    }

    /**
     * Filter the query on the IitbConfTransSep column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconftranssep('fooValue');   // WHERE IitbConfTransSep = 'fooValue'
     * $query->filterByIitbconftranssep('%fooValue%', Criteria::LIKE); // WHERE IitbConfTransSep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconftranssep The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconftranssep($iitbconftranssep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconftranssep)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFTRANSSEP, $iitbconftranssep, $comparison);
    }

    /**
     * Filter the query on the IitbConfDispBinDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfdispbindet('fooValue');   // WHERE IitbConfDispBinDet = 'fooValue'
     * $query->filterByIitbconfdispbindet('%fooValue%', Criteria::LIKE); // WHERE IitbConfDispBinDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfdispbindet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfdispbindet($iitbconfdispbindet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfdispbindet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFDISPBINDET, $iitbconfdispbindet, $comparison);
    }

    /**
     * Filter the query on the IitbConfShDateOrCust column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfshdateorcust('fooValue');   // WHERE IitbConfShDateOrCust = 'fooValue'
     * $query->filterByIitbconfshdateorcust('%fooValue%', Criteria::LIKE); // WHERE IitbConfShDateOrCust LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfshdateorcust The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfshdateorcust($iitbconfshdateorcust = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfshdateorcust)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFSHDATEORCUST, $iitbconfshdateorcust, $comparison);
    }

    /**
     * Filter the query on the IitbConfShZeroShip column
     *
     * Example usage:
     * <code>
     * $query->filterByIitbconfshzeroship('fooValue');   // WHERE IitbConfShZeroShip = 'fooValue'
     * $query->filterByIitbconfshzeroship('%fooValue%', Criteria::LIKE); // WHERE IitbConfShZeroShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitbconfshzeroship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitbconfshzeroship($iitbconfshzeroship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitbconfshzeroship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFSHZEROSHIP, $iitbconfshzeroship, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigIi $configIi Object to remove from the list of results
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function prune($configIi = null)
    {
        if ($configIi) {
            $this->addUsingAlias(ConfigIiTableMap::COL_IITBCONFKEY, $configIi->getIitbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ii_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigIiTableMap::clearInstancePool();
            ConfigIiTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigIiTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigIiTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigIiTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigIiQuery
