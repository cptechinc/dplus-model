<?php

namespace Base;

use \GlCode as ChildGlCode;
use \GlCodeQuery as ChildGlCodeQuery;
use \Exception;
use \PDO;
use Map\GlCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `gl_master` table.
 *
 * @method     ChildGlCodeQuery orderByGlmaacct($order = Criteria::ASC) Order by the GlmaAcct column
 * @method     ChildGlCodeQuery orderByGlmadesc($order = Criteria::ASC) Order by the GlmaDesc column
 * @method     ChildGlCodeQuery orderByGlmadrcr($order = Criteria::ASC) Order by the GlmaDrCr column
 * @method     ChildGlCodeQuery orderByGlmaclosacct($order = Criteria::ASC) Order by the GlmaClosAcct column
 * @method     ChildGlCodeQuery orderByGlmapackpost($order = Criteria::ASC) Order by the GlmaPackPost column
 * @method     ChildGlCodeQuery orderByGlmavald($order = Criteria::ASC) Order by the GlmaVald column
 * @method     ChildGlCodeQuery orderByGlmaco01($order = Criteria::ASC) Order by the GlmaCo01 column
 * @method     ChildGlCodeQuery orderByGlmaco02($order = Criteria::ASC) Order by the GlmaCo02 column
 * @method     ChildGlCodeQuery orderByGlmaco03($order = Criteria::ASC) Order by the GlmaCo03 column
 * @method     ChildGlCodeQuery orderByGlmaco04($order = Criteria::ASC) Order by the GlmaCo04 column
 * @method     ChildGlCodeQuery orderByGlmaco05($order = Criteria::ASC) Order by the GlmaCo05 column
 * @method     ChildGlCodeQuery orderByGlmaco06($order = Criteria::ASC) Order by the GlmaCo06 column
 * @method     ChildGlCodeQuery orderByGlmaco07($order = Criteria::ASC) Order by the GlmaCo07 column
 * @method     ChildGlCodeQuery orderByGlmaco08($order = Criteria::ASC) Order by the GlmaCo08 column
 * @method     ChildGlCodeQuery orderByGlmaco09($order = Criteria::ASC) Order by the GlmaCo09 column
 * @method     ChildGlCodeQuery orderByGlmaco10($order = Criteria::ASC) Order by the GlmaCo10 column
 * @method     ChildGlCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildGlCodeQuery orderByGlmaAcWhseAppendPos($order = Criteria::ASC) Order by the GlmaAcWhseAppendPos column
 * @method     ChildGlCodeQuery orderByGlmaAchAcct($order = Criteria::ASC) Order by the GlmaAchAcct column
 * @method     ChildGlCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildGlCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildGlCodeQuery groupByGlmaacct() Group by the GlmaAcct column
 * @method     ChildGlCodeQuery groupByGlmadesc() Group by the GlmaDesc column
 * @method     ChildGlCodeQuery groupByGlmadrcr() Group by the GlmaDrCr column
 * @method     ChildGlCodeQuery groupByGlmaclosacct() Group by the GlmaClosAcct column
 * @method     ChildGlCodeQuery groupByGlmapackpost() Group by the GlmaPackPost column
 * @method     ChildGlCodeQuery groupByGlmavald() Group by the GlmaVald column
 * @method     ChildGlCodeQuery groupByGlmaco01() Group by the GlmaCo01 column
 * @method     ChildGlCodeQuery groupByGlmaco02() Group by the GlmaCo02 column
 * @method     ChildGlCodeQuery groupByGlmaco03() Group by the GlmaCo03 column
 * @method     ChildGlCodeQuery groupByGlmaco04() Group by the GlmaCo04 column
 * @method     ChildGlCodeQuery groupByGlmaco05() Group by the GlmaCo05 column
 * @method     ChildGlCodeQuery groupByGlmaco06() Group by the GlmaCo06 column
 * @method     ChildGlCodeQuery groupByGlmaco07() Group by the GlmaCo07 column
 * @method     ChildGlCodeQuery groupByGlmaco08() Group by the GlmaCo08 column
 * @method     ChildGlCodeQuery groupByGlmaco09() Group by the GlmaCo09 column
 * @method     ChildGlCodeQuery groupByGlmaco10() Group by the GlmaCo10 column
 * @method     ChildGlCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildGlCodeQuery groupByGlmaAcWhseAppendPos() Group by the GlmaAcWhseAppendPos column
 * @method     ChildGlCodeQuery groupByGlmaAchAcct() Group by the GlmaAchAcct column
 * @method     ChildGlCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildGlCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildGlCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildGlCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildGlCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildGlCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildGlCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildGlCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildGlCode|null findOne(?ConnectionInterface $con = null) Return the first ChildGlCode matching the query
 * @method     ChildGlCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildGlCode matching the query, or a new ChildGlCode object populated from the query conditions when no match is found
 *
 * @method     ChildGlCode|null findOneByGlmaacct(string $GlmaAcct) Return the first ChildGlCode filtered by the GlmaAcct column
 * @method     ChildGlCode|null findOneByGlmadesc(string $GlmaDesc) Return the first ChildGlCode filtered by the GlmaDesc column
 * @method     ChildGlCode|null findOneByGlmadrcr(string $GlmaDrCr) Return the first ChildGlCode filtered by the GlmaDrCr column
 * @method     ChildGlCode|null findOneByGlmaclosacct(string $GlmaClosAcct) Return the first ChildGlCode filtered by the GlmaClosAcct column
 * @method     ChildGlCode|null findOneByGlmapackpost(string $GlmaPackPost) Return the first ChildGlCode filtered by the GlmaPackPost column
 * @method     ChildGlCode|null findOneByGlmavald(string $GlmaVald) Return the first ChildGlCode filtered by the GlmaVald column
 * @method     ChildGlCode|null findOneByGlmaco01(string $GlmaCo01) Return the first ChildGlCode filtered by the GlmaCo01 column
 * @method     ChildGlCode|null findOneByGlmaco02(string $GlmaCo02) Return the first ChildGlCode filtered by the GlmaCo02 column
 * @method     ChildGlCode|null findOneByGlmaco03(string $GlmaCo03) Return the first ChildGlCode filtered by the GlmaCo03 column
 * @method     ChildGlCode|null findOneByGlmaco04(string $GlmaCo04) Return the first ChildGlCode filtered by the GlmaCo04 column
 * @method     ChildGlCode|null findOneByGlmaco05(string $GlmaCo05) Return the first ChildGlCode filtered by the GlmaCo05 column
 * @method     ChildGlCode|null findOneByGlmaco06(string $GlmaCo06) Return the first ChildGlCode filtered by the GlmaCo06 column
 * @method     ChildGlCode|null findOneByGlmaco07(string $GlmaCo07) Return the first ChildGlCode filtered by the GlmaCo07 column
 * @method     ChildGlCode|null findOneByGlmaco08(string $GlmaCo08) Return the first ChildGlCode filtered by the GlmaCo08 column
 * @method     ChildGlCode|null findOneByGlmaco09(string $GlmaCo09) Return the first ChildGlCode filtered by the GlmaCo09 column
 * @method     ChildGlCode|null findOneByGlmaco10(string $GlmaCo10) Return the first ChildGlCode filtered by the GlmaCo10 column
 * @method     ChildGlCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildGlCode filtered by the DateUpdtd column
 * @method     ChildGlCode|null findOneByGlmaAcWhseAppendPos(int $GlmaAcWhseAppendPos) Return the first ChildGlCode filtered by the GlmaAcWhseAppendPos column
 * @method     ChildGlCode|null findOneByGlmaAchAcct(string $GlmaAchAcct) Return the first ChildGlCode filtered by the GlmaAchAcct column
 * @method     ChildGlCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlCode filtered by the TimeUpdtd column
 * @method     ChildGlCode|null findOneByDummy(string $dummy) Return the first ChildGlCode filtered by the dummy column
 *
 * @method     ChildGlCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildGlCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOne(?ConnectionInterface $con = null) Return the first ChildGlCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlCode requireOneByGlmaacct(string $GlmaAcct) Return the first ChildGlCode filtered by the GlmaAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmadesc(string $GlmaDesc) Return the first ChildGlCode filtered by the GlmaDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmadrcr(string $GlmaDrCr) Return the first ChildGlCode filtered by the GlmaDrCr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaclosacct(string $GlmaClosAcct) Return the first ChildGlCode filtered by the GlmaClosAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmapackpost(string $GlmaPackPost) Return the first ChildGlCode filtered by the GlmaPackPost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmavald(string $GlmaVald) Return the first ChildGlCode filtered by the GlmaVald column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco01(string $GlmaCo01) Return the first ChildGlCode filtered by the GlmaCo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco02(string $GlmaCo02) Return the first ChildGlCode filtered by the GlmaCo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco03(string $GlmaCo03) Return the first ChildGlCode filtered by the GlmaCo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco04(string $GlmaCo04) Return the first ChildGlCode filtered by the GlmaCo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco05(string $GlmaCo05) Return the first ChildGlCode filtered by the GlmaCo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco06(string $GlmaCo06) Return the first ChildGlCode filtered by the GlmaCo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco07(string $GlmaCo07) Return the first ChildGlCode filtered by the GlmaCo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco08(string $GlmaCo08) Return the first ChildGlCode filtered by the GlmaCo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco09(string $GlmaCo09) Return the first ChildGlCode filtered by the GlmaCo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco10(string $GlmaCo10) Return the first ChildGlCode filtered by the GlmaCo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildGlCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaAcWhseAppendPos(int $GlmaAcWhseAppendPos) Return the first ChildGlCode filtered by the GlmaAcWhseAppendPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaAchAcct(string $GlmaAchAcct) Return the first ChildGlCode filtered by the GlmaAchAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByDummy(string $dummy) Return the first ChildGlCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlCode[]|Collection find(?ConnectionInterface $con = null) Return ChildGlCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildGlCode> find(?ConnectionInterface $con = null) Return ChildGlCode objects based on current ModelCriteria
 *
 * @method     ChildGlCode[]|Collection findByGlmaacct(string|array<string> $GlmaAcct) Return ChildGlCode objects filtered by the GlmaAcct column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaacct(string|array<string> $GlmaAcct) Return ChildGlCode objects filtered by the GlmaAcct column
 * @method     ChildGlCode[]|Collection findByGlmadesc(string|array<string> $GlmaDesc) Return ChildGlCode objects filtered by the GlmaDesc column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmadesc(string|array<string> $GlmaDesc) Return ChildGlCode objects filtered by the GlmaDesc column
 * @method     ChildGlCode[]|Collection findByGlmadrcr(string|array<string> $GlmaDrCr) Return ChildGlCode objects filtered by the GlmaDrCr column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmadrcr(string|array<string> $GlmaDrCr) Return ChildGlCode objects filtered by the GlmaDrCr column
 * @method     ChildGlCode[]|Collection findByGlmaclosacct(string|array<string> $GlmaClosAcct) Return ChildGlCode objects filtered by the GlmaClosAcct column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaclosacct(string|array<string> $GlmaClosAcct) Return ChildGlCode objects filtered by the GlmaClosAcct column
 * @method     ChildGlCode[]|Collection findByGlmapackpost(string|array<string> $GlmaPackPost) Return ChildGlCode objects filtered by the GlmaPackPost column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmapackpost(string|array<string> $GlmaPackPost) Return ChildGlCode objects filtered by the GlmaPackPost column
 * @method     ChildGlCode[]|Collection findByGlmavald(string|array<string> $GlmaVald) Return ChildGlCode objects filtered by the GlmaVald column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmavald(string|array<string> $GlmaVald) Return ChildGlCode objects filtered by the GlmaVald column
 * @method     ChildGlCode[]|Collection findByGlmaco01(string|array<string> $GlmaCo01) Return ChildGlCode objects filtered by the GlmaCo01 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco01(string|array<string> $GlmaCo01) Return ChildGlCode objects filtered by the GlmaCo01 column
 * @method     ChildGlCode[]|Collection findByGlmaco02(string|array<string> $GlmaCo02) Return ChildGlCode objects filtered by the GlmaCo02 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco02(string|array<string> $GlmaCo02) Return ChildGlCode objects filtered by the GlmaCo02 column
 * @method     ChildGlCode[]|Collection findByGlmaco03(string|array<string> $GlmaCo03) Return ChildGlCode objects filtered by the GlmaCo03 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco03(string|array<string> $GlmaCo03) Return ChildGlCode objects filtered by the GlmaCo03 column
 * @method     ChildGlCode[]|Collection findByGlmaco04(string|array<string> $GlmaCo04) Return ChildGlCode objects filtered by the GlmaCo04 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco04(string|array<string> $GlmaCo04) Return ChildGlCode objects filtered by the GlmaCo04 column
 * @method     ChildGlCode[]|Collection findByGlmaco05(string|array<string> $GlmaCo05) Return ChildGlCode objects filtered by the GlmaCo05 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco05(string|array<string> $GlmaCo05) Return ChildGlCode objects filtered by the GlmaCo05 column
 * @method     ChildGlCode[]|Collection findByGlmaco06(string|array<string> $GlmaCo06) Return ChildGlCode objects filtered by the GlmaCo06 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco06(string|array<string> $GlmaCo06) Return ChildGlCode objects filtered by the GlmaCo06 column
 * @method     ChildGlCode[]|Collection findByGlmaco07(string|array<string> $GlmaCo07) Return ChildGlCode objects filtered by the GlmaCo07 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco07(string|array<string> $GlmaCo07) Return ChildGlCode objects filtered by the GlmaCo07 column
 * @method     ChildGlCode[]|Collection findByGlmaco08(string|array<string> $GlmaCo08) Return ChildGlCode objects filtered by the GlmaCo08 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco08(string|array<string> $GlmaCo08) Return ChildGlCode objects filtered by the GlmaCo08 column
 * @method     ChildGlCode[]|Collection findByGlmaco09(string|array<string> $GlmaCo09) Return ChildGlCode objects filtered by the GlmaCo09 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco09(string|array<string> $GlmaCo09) Return ChildGlCode objects filtered by the GlmaCo09 column
 * @method     ChildGlCode[]|Collection findByGlmaco10(string|array<string> $GlmaCo10) Return ChildGlCode objects filtered by the GlmaCo10 column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaco10(string|array<string> $GlmaCo10) Return ChildGlCode objects filtered by the GlmaCo10 column
 * @method     ChildGlCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildGlCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildGlCode objects filtered by the DateUpdtd column
 * @method     ChildGlCode[]|Collection findByGlmaAcWhseAppendPos(int|array<int> $GlmaAcWhseAppendPos) Return ChildGlCode objects filtered by the GlmaAcWhseAppendPos column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaAcWhseAppendPos(int|array<int> $GlmaAcWhseAppendPos) Return ChildGlCode objects filtered by the GlmaAcWhseAppendPos column
 * @method     ChildGlCode[]|Collection findByGlmaAchAcct(string|array<string> $GlmaAchAcct) Return ChildGlCode objects filtered by the GlmaAchAcct column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByGlmaAchAcct(string|array<string> $GlmaAchAcct) Return ChildGlCode objects filtered by the GlmaAchAcct column
 * @method     ChildGlCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildGlCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildGlCode objects filtered by the TimeUpdtd column
 * @method     ChildGlCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildGlCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildGlCode> findByDummy(string|array<string> $dummy) Return ChildGlCode objects filtered by the dummy column
 *
 * @method     ChildGlCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildGlCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class GlCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\GlCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\GlCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildGlCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildGlCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildGlCodeQuery) {
            return $criteria;
        }
        $query = new ChildGlCodeQuery();
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
     * @return ChildGlCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(GlCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = GlCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildGlCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GlmaAcct, GlmaDesc, GlmaDrCr, GlmaClosAcct, GlmaPackPost, GlmaVald, GlmaCo01, GlmaCo02, GlmaCo03, GlmaCo04, GlmaCo05, GlmaCo06, GlmaCo07, GlmaCo08, GlmaCo09, GlmaCo10, DateUpdtd, GlmaAcWhseAppendPos, GlmaAchAcct, TimeUpdtd, dummy FROM gl_master WHERE GlmaAcct = :p0';
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
            /** @var ChildGlCode $obj */
            $obj = new ChildGlCode();
            $obj->hydrate($row);
            GlCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildGlCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the GlmaAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaacct('fooValue');   // WHERE GlmaAcct = 'fooValue'
     * $query->filterByGlmaacct('%fooValue%', Criteria::LIKE); // WHERE GlmaAcct LIKE '%fooValue%'
     * $query->filterByGlmaacct(['foo', 'bar']); // WHERE GlmaAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaacct($glmaacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $glmaacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmadesc('fooValue');   // WHERE GlmaDesc = 'fooValue'
     * $query->filterByGlmadesc('%fooValue%', Criteria::LIKE); // WHERE GlmaDesc LIKE '%fooValue%'
     * $query->filterByGlmadesc(['foo', 'bar']); // WHERE GlmaDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmadesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmadesc($glmadesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmadesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMADESC, $glmadesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaDrCr column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmadrcr('fooValue');   // WHERE GlmaDrCr = 'fooValue'
     * $query->filterByGlmadrcr('%fooValue%', Criteria::LIKE); // WHERE GlmaDrCr LIKE '%fooValue%'
     * $query->filterByGlmadrcr(['foo', 'bar']); // WHERE GlmaDrCr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmadrcr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmadrcr($glmadrcr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmadrcr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMADRCR, $glmadrcr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaClosAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaclosacct('fooValue');   // WHERE GlmaClosAcct = 'fooValue'
     * $query->filterByGlmaclosacct('%fooValue%', Criteria::LIKE); // WHERE GlmaClosAcct LIKE '%fooValue%'
     * $query->filterByGlmaclosacct(['foo', 'bar']); // WHERE GlmaClosAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaclosacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaclosacct($glmaclosacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaclosacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACLOSACCT, $glmaclosacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaPackPost column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmapackpost('fooValue');   // WHERE GlmaPackPost = 'fooValue'
     * $query->filterByGlmapackpost('%fooValue%', Criteria::LIKE); // WHERE GlmaPackPost LIKE '%fooValue%'
     * $query->filterByGlmapackpost(['foo', 'bar']); // WHERE GlmaPackPost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmapackpost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmapackpost($glmapackpost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmapackpost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAPACKPOST, $glmapackpost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaVald column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmavald('fooValue');   // WHERE GlmaVald = 'fooValue'
     * $query->filterByGlmavald('%fooValue%', Criteria::LIKE); // WHERE GlmaVald LIKE '%fooValue%'
     * $query->filterByGlmavald(['foo', 'bar']); // WHERE GlmaVald IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmavald The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmavald($glmavald = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmavald)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAVALD, $glmavald, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco01('fooValue');   // WHERE GlmaCo01 = 'fooValue'
     * $query->filterByGlmaco01('%fooValue%', Criteria::LIKE); // WHERE GlmaCo01 LIKE '%fooValue%'
     * $query->filterByGlmaco01(['foo', 'bar']); // WHERE GlmaCo01 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco01 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco01($glmaco01 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco01)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO01, $glmaco01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco02('fooValue');   // WHERE GlmaCo02 = 'fooValue'
     * $query->filterByGlmaco02('%fooValue%', Criteria::LIKE); // WHERE GlmaCo02 LIKE '%fooValue%'
     * $query->filterByGlmaco02(['foo', 'bar']); // WHERE GlmaCo02 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco02 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco02($glmaco02 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco02)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO02, $glmaco02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco03('fooValue');   // WHERE GlmaCo03 = 'fooValue'
     * $query->filterByGlmaco03('%fooValue%', Criteria::LIKE); // WHERE GlmaCo03 LIKE '%fooValue%'
     * $query->filterByGlmaco03(['foo', 'bar']); // WHERE GlmaCo03 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco03 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco03($glmaco03 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco03)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO03, $glmaco03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco04('fooValue');   // WHERE GlmaCo04 = 'fooValue'
     * $query->filterByGlmaco04('%fooValue%', Criteria::LIKE); // WHERE GlmaCo04 LIKE '%fooValue%'
     * $query->filterByGlmaco04(['foo', 'bar']); // WHERE GlmaCo04 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco04 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco04($glmaco04 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco04)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO04, $glmaco04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco05('fooValue');   // WHERE GlmaCo05 = 'fooValue'
     * $query->filterByGlmaco05('%fooValue%', Criteria::LIKE); // WHERE GlmaCo05 LIKE '%fooValue%'
     * $query->filterByGlmaco05(['foo', 'bar']); // WHERE GlmaCo05 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco05 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco05($glmaco05 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco05)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO05, $glmaco05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco06('fooValue');   // WHERE GlmaCo06 = 'fooValue'
     * $query->filterByGlmaco06('%fooValue%', Criteria::LIKE); // WHERE GlmaCo06 LIKE '%fooValue%'
     * $query->filterByGlmaco06(['foo', 'bar']); // WHERE GlmaCo06 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco06 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco06($glmaco06 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco06)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO06, $glmaco06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco07('fooValue');   // WHERE GlmaCo07 = 'fooValue'
     * $query->filterByGlmaco07('%fooValue%', Criteria::LIKE); // WHERE GlmaCo07 LIKE '%fooValue%'
     * $query->filterByGlmaco07(['foo', 'bar']); // WHERE GlmaCo07 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco07 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco07($glmaco07 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco07)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO07, $glmaco07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco08('fooValue');   // WHERE GlmaCo08 = 'fooValue'
     * $query->filterByGlmaco08('%fooValue%', Criteria::LIKE); // WHERE GlmaCo08 LIKE '%fooValue%'
     * $query->filterByGlmaco08(['foo', 'bar']); // WHERE GlmaCo08 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco08 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco08($glmaco08 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco08)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO08, $glmaco08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco09('fooValue');   // WHERE GlmaCo09 = 'fooValue'
     * $query->filterByGlmaco09('%fooValue%', Criteria::LIKE); // WHERE GlmaCo09 LIKE '%fooValue%'
     * $query->filterByGlmaco09(['foo', 'bar']); // WHERE GlmaCo09 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco09 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco09($glmaco09 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco09)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO09, $glmaco09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaCo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco10('fooValue');   // WHERE GlmaCo10 = 'fooValue'
     * $query->filterByGlmaco10('%fooValue%', Criteria::LIKE); // WHERE GlmaCo10 LIKE '%fooValue%'
     * $query->filterByGlmaco10(['foo', 'bar']); // WHERE GlmaCo10 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaco10 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaco10($glmaco10 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco10)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMACO10, $glmaco10, $comparison);

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

        $this->addUsingAlias(GlCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaAcWhseAppendPos column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaAcWhseAppendPos(1234); // WHERE GlmaAcWhseAppendPos = 1234
     * $query->filterByGlmaAcWhseAppendPos(array(12, 34)); // WHERE GlmaAcWhseAppendPos IN (12, 34)
     * $query->filterByGlmaAcWhseAppendPos(array('min' => 12)); // WHERE GlmaAcWhseAppendPos > 12
     * </code>
     *
     * @param mixed $glmaAcWhseAppendPos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaAcWhseAppendPos($glmaAcWhseAppendPos = null, ?string $comparison = null)
    {
        if (is_array($glmaAcWhseAppendPos)) {
            $useMinMax = false;
            if (isset($glmaAcWhseAppendPos['min'])) {
                $this->addUsingAlias(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS, $glmaAcWhseAppendPos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($glmaAcWhseAppendPos['max'])) {
                $this->addUsingAlias(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS, $glmaAcWhseAppendPos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAACWHSEAPPENDPOS, $glmaAcWhseAppendPos, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GlmaAchAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaAchAcct('fooValue');   // WHERE GlmaAchAcct = 'fooValue'
     * $query->filterByGlmaAchAcct('%fooValue%', Criteria::LIKE); // WHERE GlmaAchAcct LIKE '%fooValue%'
     * $query->filterByGlmaAchAcct(['foo', 'bar']); // WHERE GlmaAchAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $glmaAchAcct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlmaAchAcct($glmaAchAcct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaAchAcct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlCodeTableMap::COL_GLMAACHACCT, $glmaAchAcct, $comparison);

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

        $this->addUsingAlias(GlCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(GlCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildGlCode $glCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($glCode = null)
    {
        if ($glCode) {
            $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $glCode->getGlmaacct(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_master table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlCodeTableMap::clearInstancePool();
            GlCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(GlCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            GlCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            GlCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
