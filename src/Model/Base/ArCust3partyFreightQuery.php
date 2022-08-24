<?php

namespace Base;

use \ArCust3partyFreight as ChildArCust3partyFreight;
use \ArCust3partyFreightQuery as ChildArCust3partyFreightQuery;
use \Exception;
use \PDO;
use Map\ArCust3partyFreightTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_3party' table.
 *
 *
 *
 * @method     ChildArCust3partyFreightQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArCust3partyFreightQuery orderByAr3pacctnbr($order = Criteria::ASC) Order by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pname($order = Criteria::ASC) Order by the Ar3pName column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr1($order = Criteria::ASC) Order by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr2($order = Criteria::ASC) Order by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr3($order = Criteria::ASC) Order by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreightQuery orderByAr3pctry($order = Criteria::ASC) Order by the Ar3pCtry column
 * @method     ChildArCust3partyFreightQuery orderByAr3pcity($order = Criteria::ASC) Order by the Ar3pCity column
 * @method     ChildArCust3partyFreightQuery orderByAr3pstat($order = Criteria::ASC) Order by the Ar3pStat column
 * @method     ChildArCust3partyFreightQuery orderByAr3pzipcode($order = Criteria::ASC) Order by the Ar3pZipCode column
 * @method     ChildArCust3partyFreightQuery orderByAr3pintl($order = Criteria::ASC) Order by the Ar3pIntl column
 * @method     ChildArCust3partyFreightQuery orderByAr3ptelenbr($order = Criteria::ASC) Order by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pteleext($order = Criteria::ASC) Order by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreightQuery orderByAr3pitelnbr($order = Criteria::ASC) Order by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pitelext($order = Criteria::ASC) Order by the Ar3pItelExt column
 * @method     ChildArCust3partyFreightQuery orderByAr3pfaxnbr($order = Criteria::ASC) Order by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pifaxnbr($order = Criteria::ASC) Order by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreightQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCust3partyFreightQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCust3partyFreightQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCust3partyFreightQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArCust3partyFreightQuery groupByAr3pacctnbr() Group by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pname() Group by the Ar3pName column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr1() Group by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr2() Group by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr3() Group by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreightQuery groupByAr3pctry() Group by the Ar3pCtry column
 * @method     ChildArCust3partyFreightQuery groupByAr3pcity() Group by the Ar3pCity column
 * @method     ChildArCust3partyFreightQuery groupByAr3pstat() Group by the Ar3pStat column
 * @method     ChildArCust3partyFreightQuery groupByAr3pzipcode() Group by the Ar3pZipCode column
 * @method     ChildArCust3partyFreightQuery groupByAr3pintl() Group by the Ar3pIntl column
 * @method     ChildArCust3partyFreightQuery groupByAr3ptelenbr() Group by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pteleext() Group by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreightQuery groupByAr3pitelnbr() Group by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pitelext() Group by the Ar3pItelExt column
 * @method     ChildArCust3partyFreightQuery groupByAr3pfaxnbr() Group by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pifaxnbr() Group by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreightQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCust3partyFreightQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCust3partyFreightQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCust3partyFreightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCust3partyFreightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCust3partyFreightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCust3partyFreightQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCust3partyFreightQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCust3partyFreightQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCust3partyFreightQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArCust3partyFreightQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArCust3partyFreightQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArCust3partyFreight findOne(ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query
 * @method     ChildArCust3partyFreight findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query, or a new ChildArCust3partyFreight object populated from the query conditions when no match is found
 *
 * @method     ChildArCust3partyFreight findOneByArcucustid(string $ArcuCustId) Return the first ChildArCust3partyFreight filtered by the ArcuCustId column
 * @method     ChildArCust3partyFreight findOneByAr3pacctnbr(string $Ar3pAcctNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreight findOneByAr3pname(string $Ar3pName) Return the first ChildArCust3partyFreight filtered by the Ar3pName column
 * @method     ChildArCust3partyFreight findOneByAr3padr1(string $Ar3pAdr1) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreight findOneByAr3padr2(string $Ar3pAdr2) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreight findOneByAr3padr3(string $Ar3pAdr3) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreight findOneByAr3pctry(string $Ar3pCtry) Return the first ChildArCust3partyFreight filtered by the Ar3pCtry column
 * @method     ChildArCust3partyFreight findOneByAr3pcity(string $Ar3pCity) Return the first ChildArCust3partyFreight filtered by the Ar3pCity column
 * @method     ChildArCust3partyFreight findOneByAr3pstat(string $Ar3pStat) Return the first ChildArCust3partyFreight filtered by the Ar3pStat column
 * @method     ChildArCust3partyFreight findOneByAr3pzipcode(string $Ar3pZipCode) Return the first ChildArCust3partyFreight filtered by the Ar3pZipCode column
 * @method     ChildArCust3partyFreight findOneByAr3pintl(string $Ar3pIntl) Return the first ChildArCust3partyFreight filtered by the Ar3pIntl column
 * @method     ChildArCust3partyFreight findOneByAr3ptelenbr(string $Ar3pTeleNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreight findOneByAr3pteleext(string $Ar3pTeleExt) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreight findOneByAr3pitelnbr(string $Ar3pItelNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreight findOneByAr3pitelext(string $Ar3pItelExt) Return the first ChildArCust3partyFreight filtered by the Ar3pItelExt column
 * @method     ChildArCust3partyFreight findOneByAr3pfaxnbr(string $Ar3pFaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreight findOneByAr3pifaxnbr(string $Ar3pIfaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreight findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCust3partyFreight filtered by the DateUpdtd column
 * @method     ChildArCust3partyFreight findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCust3partyFreight filtered by the TimeUpdtd column
 * @method     ChildArCust3partyFreight findOneByDummy(string $dummy) Return the first ChildArCust3partyFreight filtered by the dummy column *

 * @method     ChildArCust3partyFreight requirePk($key, ConnectionInterface $con = null) Return the ChildArCust3partyFreight by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOne(ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCust3partyFreight requireOneByArcucustid(string $ArcuCustId) Return the first ChildArCust3partyFreight filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pacctnbr(string $Ar3pAcctNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pname(string $Ar3pName) Return the first ChildArCust3partyFreight filtered by the Ar3pName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr1(string $Ar3pAdr1) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr2(string $Ar3pAdr2) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr3(string $Ar3pAdr3) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pctry(string $Ar3pCtry) Return the first ChildArCust3partyFreight filtered by the Ar3pCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pcity(string $Ar3pCity) Return the first ChildArCust3partyFreight filtered by the Ar3pCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pstat(string $Ar3pStat) Return the first ChildArCust3partyFreight filtered by the Ar3pStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pzipcode(string $Ar3pZipCode) Return the first ChildArCust3partyFreight filtered by the Ar3pZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pintl(string $Ar3pIntl) Return the first ChildArCust3partyFreight filtered by the Ar3pIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3ptelenbr(string $Ar3pTeleNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pteleext(string $Ar3pTeleExt) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pitelnbr(string $Ar3pItelNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pItelNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pitelext(string $Ar3pItelExt) Return the first ChildArCust3partyFreight filtered by the Ar3pItelExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pfaxnbr(string $Ar3pFaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pifaxnbr(string $Ar3pIfaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pIfaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCust3partyFreight filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCust3partyFreight filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByDummy(string $dummy) Return the first ChildArCust3partyFreight filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCust3partyFreight[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArCust3partyFreight objects based on current ModelCriteria
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArCust3partyFreight objects filtered by the ArcuCustId column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pacctnbr(string $Ar3pAcctNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pname(string $Ar3pName) Return ChildArCust3partyFreight objects filtered by the Ar3pName column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3padr1(string $Ar3pAdr1) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3padr2(string $Ar3pAdr2) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3padr3(string $Ar3pAdr3) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pctry(string $Ar3pCtry) Return ChildArCust3partyFreight objects filtered by the Ar3pCtry column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pcity(string $Ar3pCity) Return ChildArCust3partyFreight objects filtered by the Ar3pCity column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pstat(string $Ar3pStat) Return ChildArCust3partyFreight objects filtered by the Ar3pStat column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pzipcode(string $Ar3pZipCode) Return ChildArCust3partyFreight objects filtered by the Ar3pZipCode column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pintl(string $Ar3pIntl) Return ChildArCust3partyFreight objects filtered by the Ar3pIntl column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3ptelenbr(string $Ar3pTeleNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pteleext(string $Ar3pTeleExt) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pitelnbr(string $Ar3pItelNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pitelext(string $Ar3pItelExt) Return ChildArCust3partyFreight objects filtered by the Ar3pItelExt column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pfaxnbr(string $Ar3pFaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByAr3pifaxnbr(string $Ar3pIfaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArCust3partyFreight objects filtered by the DateUpdtd column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArCust3partyFreight objects filtered by the TimeUpdtd column
 * @method     ChildArCust3partyFreight[]|ObjectCollection findByDummy(string $dummy) Return ChildArCust3partyFreight objects filtered by the dummy column
 * @method     ChildArCust3partyFreight[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArCust3partyFreightQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCust3partyFreightQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCust3partyFreight', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCust3partyFreightQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCust3partyFreightQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArCust3partyFreightQuery) {
            return $criteria;
        }
        $query = new ChildArCust3partyFreightQuery();
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
     * @param array[$ArcuCustId, $Ar3pAcctNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArCust3partyFreight|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCust3partyFreightTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildArCust3partyFreight A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, Ar3pAcctNbr, Ar3pName, Ar3pAdr1, Ar3pAdr2, Ar3pAdr3, Ar3pCtry, Ar3pCity, Ar3pStat, Ar3pZipCode, Ar3pIntl, Ar3pTeleNbr, Ar3pTeleExt, Ar3pItelNbr, Ar3pItelExt, Ar3pFaxNbr, Ar3pIfaxNbr, DateUpdtd, TimeUpdtd, dummy FROM ar_3party WHERE ArcuCustId = :p0 AND Ar3pAcctNbr = :p1';
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
            /** @var ChildArCust3partyFreight $obj */
            $obj = new ChildArCust3partyFreight();
            $obj->hydrate($row);
            ArCust3partyFreightTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildArCust3partyFreight|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the Ar3pAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pacctnbr('fooValue');   // WHERE Ar3pAcctNbr = 'fooValue'
     * $query->filterByAr3pacctnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pAcctNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pacctnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pacctnbr($ar3pacctnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $ar3pacctnbr, $comparison);
    }

    /**
     * Filter the query on the Ar3pName column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pname('fooValue');   // WHERE Ar3pName = 'fooValue'
     * $query->filterByAr3pname('%fooValue%', Criteria::LIKE); // WHERE Ar3pName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pname($ar3pname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PNAME, $ar3pname, $comparison);
    }

    /**
     * Filter the query on the Ar3pAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr1('fooValue');   // WHERE Ar3pAdr1 = 'fooValue'
     * $query->filterByAr3padr1('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3padr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3padr1($ar3padr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR1, $ar3padr1, $comparison);
    }

    /**
     * Filter the query on the Ar3pAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr2('fooValue');   // WHERE Ar3pAdr2 = 'fooValue'
     * $query->filterByAr3padr2('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3padr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3padr2($ar3padr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR2, $ar3padr2, $comparison);
    }

    /**
     * Filter the query on the Ar3pAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr3('fooValue');   // WHERE Ar3pAdr3 = 'fooValue'
     * $query->filterByAr3padr3('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3padr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3padr3($ar3padr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR3, $ar3padr3, $comparison);
    }

    /**
     * Filter the query on the Ar3pCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pctry('fooValue');   // WHERE Ar3pCtry = 'fooValue'
     * $query->filterByAr3pctry('%fooValue%', Criteria::LIKE); // WHERE Ar3pCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pctry($ar3pctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PCTRY, $ar3pctry, $comparison);
    }

    /**
     * Filter the query on the Ar3pCity column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pcity('fooValue');   // WHERE Ar3pCity = 'fooValue'
     * $query->filterByAr3pcity('%fooValue%', Criteria::LIKE); // WHERE Ar3pCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pcity($ar3pcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PCITY, $ar3pcity, $comparison);
    }

    /**
     * Filter the query on the Ar3pStat column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pstat('fooValue');   // WHERE Ar3pStat = 'fooValue'
     * $query->filterByAr3pstat('%fooValue%', Criteria::LIKE); // WHERE Ar3pStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pstat($ar3pstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PSTAT, $ar3pstat, $comparison);
    }

    /**
     * Filter the query on the Ar3pZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pzipcode('fooValue');   // WHERE Ar3pZipCode = 'fooValue'
     * $query->filterByAr3pzipcode('%fooValue%', Criteria::LIKE); // WHERE Ar3pZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pzipcode($ar3pzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PZIPCODE, $ar3pzipcode, $comparison);
    }

    /**
     * Filter the query on the Ar3pIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pintl('fooValue');   // WHERE Ar3pIntl = 'fooValue'
     * $query->filterByAr3pintl('%fooValue%', Criteria::LIKE); // WHERE Ar3pIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pintl($ar3pintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PINTL, $ar3pintl, $comparison);
    }

    /**
     * Filter the query on the Ar3pTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3ptelenbr('fooValue');   // WHERE Ar3pTeleNbr = 'fooValue'
     * $query->filterByAr3ptelenbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3ptelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3ptelenbr($ar3ptelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3ptelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PTELENBR, $ar3ptelenbr, $comparison);
    }

    /**
     * Filter the query on the Ar3pTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pteleext('fooValue');   // WHERE Ar3pTeleExt = 'fooValue'
     * $query->filterByAr3pteleext('%fooValue%', Criteria::LIKE); // WHERE Ar3pTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pteleext($ar3pteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PTELEEXT, $ar3pteleext, $comparison);
    }

    /**
     * Filter the query on the Ar3pItelNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pitelnbr('fooValue');   // WHERE Ar3pItelNbr = 'fooValue'
     * $query->filterByAr3pitelnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pItelNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pitelnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pitelnbr($ar3pitelnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pitelnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PITELNBR, $ar3pitelnbr, $comparison);
    }

    /**
     * Filter the query on the Ar3pItelExt column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pitelext('fooValue');   // WHERE Ar3pItelExt = 'fooValue'
     * $query->filterByAr3pitelext('%fooValue%', Criteria::LIKE); // WHERE Ar3pItelExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pitelext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pitelext($ar3pitelext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pitelext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PITELEXT, $ar3pitelext, $comparison);
    }

    /**
     * Filter the query on the Ar3pFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pfaxnbr('fooValue');   // WHERE Ar3pFaxNbr = 'fooValue'
     * $query->filterByAr3pfaxnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pfaxnbr($ar3pfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PFAXNBR, $ar3pfaxnbr, $comparison);
    }

    /**
     * Filter the query on the Ar3pIfaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pifaxnbr('fooValue');   // WHERE Ar3pIfaxNbr = 'fooValue'
     * $query->filterByAr3pifaxnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pIfaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar3pifaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByAr3pifaxnbr($ar3pifaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pifaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR, $ar3pifaxnbr, $comparison);
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
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCust3partyFreightTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArCust3partyFreight $arCust3partyFreight Object to remove from the list of results
     *
     * @return $this|ChildArCust3partyFreightQuery The current query, for fluid interface
     */
    public function prune($arCust3partyFreight = null)
    {
        if ($arCust3partyFreight) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArCust3partyFreightTableMap::COL_ARCUCUSTID), $arCust3partyFreight->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArCust3partyFreightTableMap::COL_AR3PACCTNBR), $arCust3partyFreight->getAr3pacctnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_3party table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCust3partyFreightTableMap::clearInstancePool();
            ArCust3partyFreightTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCust3partyFreightTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCust3partyFreightTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCust3partyFreightTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArCust3partyFreightQuery
