<?php

namespace Base;

use \CpnLoadItem as ChildCpnLoadItem;
use \CpnLoadItemQuery as ChildCpnLoadItemQuery;
use \Exception;
use \PDO;
use Map\CpnLoadItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'load_cpn_item' table.
 *
 *
 *
 * @method     ChildCpnLoadItemQuery orderByLchdloadnbr($order = Criteria::ASC) Order by the LchdLoadNbr column
 * @method     ChildCpnLoadItemQuery orderByLcorordrnbr($order = Criteria::ASC) Order by the LcorOrdrNbr column
 * @method     ChildCpnLoadItemQuery orderByLcitlinenbr($order = Criteria::ASC) Order by the LcitLineNbr column
 * @method     ChildCpnLoadItemQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildCpnLoadItemQuery orderByLcitlotser($order = Criteria::ASC) Order by the LcitLotSer column
 * @method     ChildCpnLoadItemQuery orderByLcitskidnbr($order = Criteria::ASC) Order by the LcitSkidNbr column
 * @method     ChildCpnLoadItemQuery orderByLcitqtyord($order = Criteria::ASC) Order by the LcitQtyOrd column
 * @method     ChildCpnLoadItemQuery orderByLcitrqstdate($order = Criteria::ASC) Order by the LcitRqstDate column
 * @method     ChildCpnLoadItemQuery orderByLcitqtyperbox($order = Criteria::ASC) Order by the LcitQtyPerBox column
 * @method     ChildCpnLoadItemQuery orderByLcitnbrofboxes($order = Criteria::ASC) Order by the LcitNbrOfBoxes column
 * @method     ChildCpnLoadItemQuery orderByLcittotwght($order = Criteria::ASC) Order by the LcitTotWght column
 * @method     ChildCpnLoadItemQuery orderByLcituom($order = Criteria::ASC) Order by the LcitUom column
 * @method     ChildCpnLoadItemQuery orderByLcitqtyship($order = Criteria::ASC) Order by the LcitQtyShip column
 * @method     ChildCpnLoadItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCpnLoadItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCpnLoadItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCpnLoadItemQuery groupByLchdloadnbr() Group by the LchdLoadNbr column
 * @method     ChildCpnLoadItemQuery groupByLcorordrnbr() Group by the LcorOrdrNbr column
 * @method     ChildCpnLoadItemQuery groupByLcitlinenbr() Group by the LcitLineNbr column
 * @method     ChildCpnLoadItemQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildCpnLoadItemQuery groupByLcitlotser() Group by the LcitLotSer column
 * @method     ChildCpnLoadItemQuery groupByLcitskidnbr() Group by the LcitSkidNbr column
 * @method     ChildCpnLoadItemQuery groupByLcitqtyord() Group by the LcitQtyOrd column
 * @method     ChildCpnLoadItemQuery groupByLcitrqstdate() Group by the LcitRqstDate column
 * @method     ChildCpnLoadItemQuery groupByLcitqtyperbox() Group by the LcitQtyPerBox column
 * @method     ChildCpnLoadItemQuery groupByLcitnbrofboxes() Group by the LcitNbrOfBoxes column
 * @method     ChildCpnLoadItemQuery groupByLcittotwght() Group by the LcitTotWght column
 * @method     ChildCpnLoadItemQuery groupByLcituom() Group by the LcitUom column
 * @method     ChildCpnLoadItemQuery groupByLcitqtyship() Group by the LcitQtyShip column
 * @method     ChildCpnLoadItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCpnLoadItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCpnLoadItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCpnLoadItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCpnLoadItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCpnLoadItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCpnLoadItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCpnLoadItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCpnLoadItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCpnLoadItemQuery leftJoinCpnLoad($relationAlias = null) Adds a LEFT JOIN clause to the query using the CpnLoad relation
 * @method     ChildCpnLoadItemQuery rightJoinCpnLoad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CpnLoad relation
 * @method     ChildCpnLoadItemQuery innerJoinCpnLoad($relationAlias = null) Adds a INNER JOIN clause to the query using the CpnLoad relation
 *
 * @method     ChildCpnLoadItemQuery joinWithCpnLoad($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CpnLoad relation
 *
 * @method     ChildCpnLoadItemQuery leftJoinWithCpnLoad() Adds a LEFT JOIN clause and with to the query using the CpnLoad relation
 * @method     ChildCpnLoadItemQuery rightJoinWithCpnLoad() Adds a RIGHT JOIN clause and with to the query using the CpnLoad relation
 * @method     ChildCpnLoadItemQuery innerJoinWithCpnLoad() Adds a INNER JOIN clause and with to the query using the CpnLoad relation
 *
 * @method     \CpnLoadQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCpnLoadItem findOne(ConnectionInterface $con = null) Return the first ChildCpnLoadItem matching the query
 * @method     ChildCpnLoadItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCpnLoadItem matching the query, or a new ChildCpnLoadItem object populated from the query conditions when no match is found
 *
 * @method     ChildCpnLoadItem findOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoadItem filtered by the LchdLoadNbr column
 * @method     ChildCpnLoadItem findOneByLcorordrnbr(int $LcorOrdrNbr) Return the first ChildCpnLoadItem filtered by the LcorOrdrNbr column
 * @method     ChildCpnLoadItem findOneByLcitlinenbr(int $LcitLineNbr) Return the first ChildCpnLoadItem filtered by the LcitLineNbr column
 * @method     ChildCpnLoadItem findOneByInititemnbr(string $InitItemNbr) Return the first ChildCpnLoadItem filtered by the InitItemNbr column
 * @method     ChildCpnLoadItem findOneByLcitlotser(string $LcitLotSer) Return the first ChildCpnLoadItem filtered by the LcitLotSer column
 * @method     ChildCpnLoadItem findOneByLcitskidnbr(int $LcitSkidNbr) Return the first ChildCpnLoadItem filtered by the LcitSkidNbr column
 * @method     ChildCpnLoadItem findOneByLcitqtyord(string $LcitQtyOrd) Return the first ChildCpnLoadItem filtered by the LcitQtyOrd column
 * @method     ChildCpnLoadItem findOneByLcitrqstdate(string $LcitRqstDate) Return the first ChildCpnLoadItem filtered by the LcitRqstDate column
 * @method     ChildCpnLoadItem findOneByLcitqtyperbox(int $LcitQtyPerBox) Return the first ChildCpnLoadItem filtered by the LcitQtyPerBox column
 * @method     ChildCpnLoadItem findOneByLcitnbrofboxes(int $LcitNbrOfBoxes) Return the first ChildCpnLoadItem filtered by the LcitNbrOfBoxes column
 * @method     ChildCpnLoadItem findOneByLcittotwght(string $LcitTotWght) Return the first ChildCpnLoadItem filtered by the LcitTotWght column
 * @method     ChildCpnLoadItem findOneByLcituom(string $LcitUom) Return the first ChildCpnLoadItem filtered by the LcitUom column
 * @method     ChildCpnLoadItem findOneByLcitqtyship(string $LcitQtyShip) Return the first ChildCpnLoadItem filtered by the LcitQtyShip column
 * @method     ChildCpnLoadItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoadItem filtered by the DateUpdtd column
 * @method     ChildCpnLoadItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoadItem filtered by the TimeUpdtd column
 * @method     ChildCpnLoadItem findOneByDummy(string $dummy) Return the first ChildCpnLoadItem filtered by the dummy column *

 * @method     ChildCpnLoadItem requirePk($key, ConnectionInterface $con = null) Return the ChildCpnLoadItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOne(ConnectionInterface $con = null) Return the first ChildCpnLoadItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoadItem requireOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoadItem filtered by the LchdLoadNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcorordrnbr(int $LcorOrdrNbr) Return the first ChildCpnLoadItem filtered by the LcorOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitlinenbr(int $LcitLineNbr) Return the first ChildCpnLoadItem filtered by the LcitLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByInititemnbr(string $InitItemNbr) Return the first ChildCpnLoadItem filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitlotser(string $LcitLotSer) Return the first ChildCpnLoadItem filtered by the LcitLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitskidnbr(int $LcitSkidNbr) Return the first ChildCpnLoadItem filtered by the LcitSkidNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitqtyord(string $LcitQtyOrd) Return the first ChildCpnLoadItem filtered by the LcitQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitrqstdate(string $LcitRqstDate) Return the first ChildCpnLoadItem filtered by the LcitRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitqtyperbox(int $LcitQtyPerBox) Return the first ChildCpnLoadItem filtered by the LcitQtyPerBox column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitnbrofboxes(int $LcitNbrOfBoxes) Return the first ChildCpnLoadItem filtered by the LcitNbrOfBoxes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcittotwght(string $LcitTotWght) Return the first ChildCpnLoadItem filtered by the LcitTotWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcituom(string $LcitUom) Return the first ChildCpnLoadItem filtered by the LcitUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByLcitqtyship(string $LcitQtyShip) Return the first ChildCpnLoadItem filtered by the LcitQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoadItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoadItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadItem requireOneByDummy(string $dummy) Return the first ChildCpnLoadItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoadItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCpnLoadItem objects based on current ModelCriteria
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLchdloadnbr(int $LchdLoadNbr) Return ChildCpnLoadItem objects filtered by the LchdLoadNbr column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcorordrnbr(int $LcorOrdrNbr) Return ChildCpnLoadItem objects filtered by the LcorOrdrNbr column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitlinenbr(int $LcitLineNbr) Return ChildCpnLoadItem objects filtered by the LcitLineNbr column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildCpnLoadItem objects filtered by the InitItemNbr column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitlotser(string $LcitLotSer) Return ChildCpnLoadItem objects filtered by the LcitLotSer column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitskidnbr(int $LcitSkidNbr) Return ChildCpnLoadItem objects filtered by the LcitSkidNbr column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitqtyord(string $LcitQtyOrd) Return ChildCpnLoadItem objects filtered by the LcitQtyOrd column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitrqstdate(string $LcitRqstDate) Return ChildCpnLoadItem objects filtered by the LcitRqstDate column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitqtyperbox(int $LcitQtyPerBox) Return ChildCpnLoadItem objects filtered by the LcitQtyPerBox column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitnbrofboxes(int $LcitNbrOfBoxes) Return ChildCpnLoadItem objects filtered by the LcitNbrOfBoxes column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcittotwght(string $LcitTotWght) Return ChildCpnLoadItem objects filtered by the LcitTotWght column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcituom(string $LcitUom) Return ChildCpnLoadItem objects filtered by the LcitUom column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByLcitqtyship(string $LcitQtyShip) Return ChildCpnLoadItem objects filtered by the LcitQtyShip column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCpnLoadItem objects filtered by the DateUpdtd column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCpnLoadItem objects filtered by the TimeUpdtd column
 * @method     ChildCpnLoadItem[]|ObjectCollection findByDummy(string $dummy) Return ChildCpnLoadItem objects filtered by the dummy column
 * @method     ChildCpnLoadItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CpnLoadItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CpnLoadItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CpnLoadItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCpnLoadItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCpnLoadItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCpnLoadItemQuery) {
            return $criteria;
        }
        $query = new ChildCpnLoadItemQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$LchdLoadNbr, $LcorOrdrNbr, $LcitLineNbr, $InitItemNbr, $LcitLotSer, $LcitSkidNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCpnLoadItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CpnLoadItemTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildCpnLoadItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT LchdLoadNbr, LcorOrdrNbr, LcitLineNbr, InitItemNbr, LcitLotSer, LcitSkidNbr, LcitQtyOrd, LcitRqstDate, LcitQtyPerBox, LcitNbrOfBoxes, LcitTotWght, LcitUom, LcitQtyShip, DateUpdtd, TimeUpdtd, dummy FROM load_cpn_item WHERE LchdLoadNbr = :p0 AND LcorOrdrNbr = :p1 AND LcitLineNbr = :p2 AND InitItemNbr = :p3 AND LcitLotSer = :p4 AND LcitSkidNbr = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCpnLoadItem $obj */
            $obj = new ChildCpnLoadItem();
            $obj->hydrate($row);
            CpnLoadItemTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildCpnLoadItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadItemTableMap::COL_LCORORDRNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLINENBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadItemTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLOTSER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITSKIDNBR, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CpnLoadItemTableMap::COL_LCHDLOADNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CpnLoadItemTableMap::COL_LCORORDRNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CpnLoadItemTableMap::COL_LCITLINENBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CpnLoadItemTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(CpnLoadItemTableMap::COL_LCITLOTSER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(CpnLoadItemTableMap::COL_LCITSKIDNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LchdLoadNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdloadnbr(1234); // WHERE LchdLoadNbr = 1234
     * $query->filterByLchdloadnbr(array(12, 34)); // WHERE LchdLoadNbr IN (12, 34)
     * $query->filterByLchdloadnbr(array('min' => 12)); // WHERE LchdLoadNbr > 12
     * </code>
     *
     * @see       filterByCpnLoad()
     *
     * @param     mixed $lchdloadnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLchdloadnbr($lchdloadnbr = null, $comparison = null)
    {
        if (is_array($lchdloadnbr)) {
            $useMinMax = false;
            if (isset($lchdloadnbr['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $lchdloadnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdloadnbr['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $lchdloadnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $lchdloadnbr, $comparison);
    }

    /**
     * Filter the query on the LcorOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorordrnbr(1234); // WHERE LcorOrdrNbr = 1234
     * $query->filterByLcorordrnbr(array(12, 34)); // WHERE LcorOrdrNbr IN (12, 34)
     * $query->filterByLcorordrnbr(array('min' => 12)); // WHERE LcorOrdrNbr > 12
     * </code>
     *
     * @param     mixed $lcorordrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcorordrnbr($lcorordrnbr = null, $comparison = null)
    {
        if (is_array($lcorordrnbr)) {
            $useMinMax = false;
            if (isset($lcorordrnbr['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCORORDRNBR, $lcorordrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcorordrnbr['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCORORDRNBR, $lcorordrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCORORDRNBR, $lcorordrnbr, $comparison);
    }

    /**
     * Filter the query on the LcitLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitlinenbr(1234); // WHERE LcitLineNbr = 1234
     * $query->filterByLcitlinenbr(array(12, 34)); // WHERE LcitLineNbr IN (12, 34)
     * $query->filterByLcitlinenbr(array('min' => 12)); // WHERE LcitLineNbr > 12
     * </code>
     *
     * @param     mixed $lcitlinenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitlinenbr($lcitlinenbr = null, $comparison = null)
    {
        if (is_array($lcitlinenbr)) {
            $useMinMax = false;
            if (isset($lcitlinenbr['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLINENBR, $lcitlinenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitlinenbr['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLINENBR, $lcitlinenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLINENBR, $lcitlinenbr, $comparison);
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the LcitLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitlotser('fooValue');   // WHERE LcitLotSer = 'fooValue'
     * $query->filterByLcitlotser('%fooValue%', Criteria::LIKE); // WHERE LcitLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcitlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitlotser($lcitlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcitlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITLOTSER, $lcitlotser, $comparison);
    }

    /**
     * Filter the query on the LcitSkidNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitskidnbr(1234); // WHERE LcitSkidNbr = 1234
     * $query->filterByLcitskidnbr(array(12, 34)); // WHERE LcitSkidNbr IN (12, 34)
     * $query->filterByLcitskidnbr(array('min' => 12)); // WHERE LcitSkidNbr > 12
     * </code>
     *
     * @param     mixed $lcitskidnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitskidnbr($lcitskidnbr = null, $comparison = null)
    {
        if (is_array($lcitskidnbr)) {
            $useMinMax = false;
            if (isset($lcitskidnbr['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITSKIDNBR, $lcitskidnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitskidnbr['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITSKIDNBR, $lcitskidnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITSKIDNBR, $lcitskidnbr, $comparison);
    }

    /**
     * Filter the query on the LcitQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitqtyord(1234); // WHERE LcitQtyOrd = 1234
     * $query->filterByLcitqtyord(array(12, 34)); // WHERE LcitQtyOrd IN (12, 34)
     * $query->filterByLcitqtyord(array('min' => 12)); // WHERE LcitQtyOrd > 12
     * </code>
     *
     * @param     mixed $lcitqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitqtyord($lcitqtyord = null, $comparison = null)
    {
        if (is_array($lcitqtyord)) {
            $useMinMax = false;
            if (isset($lcitqtyord['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYORD, $lcitqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitqtyord['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYORD, $lcitqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYORD, $lcitqtyord, $comparison);
    }

    /**
     * Filter the query on the LcitRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitrqstdate('fooValue');   // WHERE LcitRqstDate = 'fooValue'
     * $query->filterByLcitrqstdate('%fooValue%', Criteria::LIKE); // WHERE LcitRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcitrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitrqstdate($lcitrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcitrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITRQSTDATE, $lcitrqstdate, $comparison);
    }

    /**
     * Filter the query on the LcitQtyPerBox column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitqtyperbox(1234); // WHERE LcitQtyPerBox = 1234
     * $query->filterByLcitqtyperbox(array(12, 34)); // WHERE LcitQtyPerBox IN (12, 34)
     * $query->filterByLcitqtyperbox(array('min' => 12)); // WHERE LcitQtyPerBox > 12
     * </code>
     *
     * @param     mixed $lcitqtyperbox The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitqtyperbox($lcitqtyperbox = null, $comparison = null)
    {
        if (is_array($lcitqtyperbox)) {
            $useMinMax = false;
            if (isset($lcitqtyperbox['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYPERBOX, $lcitqtyperbox['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitqtyperbox['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYPERBOX, $lcitqtyperbox['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYPERBOX, $lcitqtyperbox, $comparison);
    }

    /**
     * Filter the query on the LcitNbrOfBoxes column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitnbrofboxes(1234); // WHERE LcitNbrOfBoxes = 1234
     * $query->filterByLcitnbrofboxes(array(12, 34)); // WHERE LcitNbrOfBoxes IN (12, 34)
     * $query->filterByLcitnbrofboxes(array('min' => 12)); // WHERE LcitNbrOfBoxes > 12
     * </code>
     *
     * @param     mixed $lcitnbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitnbrofboxes($lcitnbrofboxes = null, $comparison = null)
    {
        if (is_array($lcitnbrofboxes)) {
            $useMinMax = false;
            if (isset($lcitnbrofboxes['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITNBROFBOXES, $lcitnbrofboxes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitnbrofboxes['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITNBROFBOXES, $lcitnbrofboxes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITNBROFBOXES, $lcitnbrofboxes, $comparison);
    }

    /**
     * Filter the query on the LcitTotWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLcittotwght(1234); // WHERE LcitTotWght = 1234
     * $query->filterByLcittotwght(array(12, 34)); // WHERE LcitTotWght IN (12, 34)
     * $query->filterByLcittotwght(array('min' => 12)); // WHERE LcitTotWght > 12
     * </code>
     *
     * @param     mixed $lcittotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcittotwght($lcittotwght = null, $comparison = null)
    {
        if (is_array($lcittotwght)) {
            $useMinMax = false;
            if (isset($lcittotwght['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITTOTWGHT, $lcittotwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcittotwght['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITTOTWGHT, $lcittotwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITTOTWGHT, $lcittotwght, $comparison);
    }

    /**
     * Filter the query on the LcitUom column
     *
     * Example usage:
     * <code>
     * $query->filterByLcituom('fooValue');   // WHERE LcitUom = 'fooValue'
     * $query->filterByLcituom('%fooValue%', Criteria::LIKE); // WHERE LcitUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcituom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcituom($lcituom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcituom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITUOM, $lcituom, $comparison);
    }

    /**
     * Filter the query on the LcitQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByLcitqtyship(1234); // WHERE LcitQtyShip = 1234
     * $query->filterByLcitqtyship(array(12, 34)); // WHERE LcitQtyShip IN (12, 34)
     * $query->filterByLcitqtyship(array('min' => 12)); // WHERE LcitQtyShip > 12
     * </code>
     *
     * @param     mixed $lcitqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByLcitqtyship($lcitqtyship = null, $comparison = null)
    {
        if (is_array($lcitqtyship)) {
            $useMinMax = false;
            if (isset($lcitqtyship['min'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYSHIP, $lcitqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcitqtyship['max'])) {
                $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYSHIP, $lcitqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_LCITQTYSHIP, $lcitqtyship, $comparison);
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
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \CpnLoad object
     *
     * @param \CpnLoad|ObjectCollection $cpnLoad The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function filterByCpnLoad($cpnLoad, $comparison = null)
    {
        if ($cpnLoad instanceof \CpnLoad) {
            return $this
                ->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $cpnLoad->getLchdloadnbr(), $comparison);
        } elseif ($cpnLoad instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CpnLoadItemTableMap::COL_LCHDLOADNBR, $cpnLoad->toKeyValue('PrimaryKey', 'Lchdloadnbr'), $comparison);
        } else {
            throw new PropelException('filterByCpnLoad() only accepts arguments of type \CpnLoad or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function joinCpnLoad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CpnLoad');

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
            $this->addJoinObject($join, 'CpnLoad');
        }

        return $this;
    }

    /**
     * Use the CpnLoad relation CpnLoad object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CpnLoadQuery A secondary query class using the current class as primary query
     */
    public function useCpnLoadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCpnLoad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CpnLoad', '\CpnLoadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCpnLoadItem $cpnLoadItem Object to remove from the list of results
     *
     * @return $this|ChildCpnLoadItemQuery The current query, for fluid interface
     */
    public function prune($cpnLoadItem = null)
    {
        if ($cpnLoadItem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CpnLoadItemTableMap::COL_LCHDLOADNBR), $cpnLoadItem->getLchdloadnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CpnLoadItemTableMap::COL_LCORORDRNBR), $cpnLoadItem->getLcorordrnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CpnLoadItemTableMap::COL_LCITLINENBR), $cpnLoadItem->getLcitlinenbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CpnLoadItemTableMap::COL_INITITEMNBR), $cpnLoadItem->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(CpnLoadItemTableMap::COL_LCITLOTSER), $cpnLoadItem->getLcitlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(CpnLoadItemTableMap::COL_LCITSKIDNBR), $cpnLoadItem->getLcitskidnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the load_cpn_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CpnLoadItemTableMap::clearInstancePool();
            CpnLoadItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CpnLoadItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CpnLoadItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CpnLoadItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CpnLoadItemQuery
