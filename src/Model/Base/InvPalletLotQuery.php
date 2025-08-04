<?php

namespace Base;

use \InvPalletLot as ChildInvPalletLot;
use \InvPalletLotQuery as ChildInvPalletLotQuery;
use \Exception;
use \PDO;
use Map\InvPalletLotTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `pallet_detail` table.
 *
 * @method     ChildInvPalletLotQuery orderByPlthpalletid($order = Criteria::ASC) Order by the PlthPalletId column
 * @method     ChildInvPalletLotQuery orderByPltdlotnbr($order = Criteria::ASC) Order by the PltdLotNbr column
 * @method     ChildInvPalletLotQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvPalletLotQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvPalletLotQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvPalletLotQuery groupByPlthpalletid() Group by the PlthPalletId column
 * @method     ChildInvPalletLotQuery groupByPltdlotnbr() Group by the PltdLotNbr column
 * @method     ChildInvPalletLotQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvPalletLotQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvPalletLotQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvPalletLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvPalletLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvPalletLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvPalletLotQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvPalletLotQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvPalletLotQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvPalletLotQuery leftJoinInvPallet($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvPallet relation
 * @method     ChildInvPalletLotQuery rightJoinInvPallet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvPallet relation
 * @method     ChildInvPalletLotQuery innerJoinInvPallet($relationAlias = null) Adds a INNER JOIN clause to the query using the InvPallet relation
 *
 * @method     ChildInvPalletLotQuery joinWithInvPallet($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvPallet relation
 *
 * @method     ChildInvPalletLotQuery leftJoinWithInvPallet() Adds a LEFT JOIN clause and with to the query using the InvPallet relation
 * @method     ChildInvPalletLotQuery rightJoinWithInvPallet() Adds a RIGHT JOIN clause and with to the query using the InvPallet relation
 * @method     ChildInvPalletLotQuery innerJoinWithInvPallet() Adds a INNER JOIN clause and with to the query using the InvPallet relation
 *
 * @method     \InvPalletQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvPalletLot|null findOne(?ConnectionInterface $con = null) Return the first ChildInvPalletLot matching the query
 * @method     ChildInvPalletLot findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvPalletLot matching the query, or a new ChildInvPalletLot object populated from the query conditions when no match is found
 *
 * @method     ChildInvPalletLot|null findOneByPlthpalletid(string $PlthPalletId) Return the first ChildInvPalletLot filtered by the PlthPalletId column
 * @method     ChildInvPalletLot|null findOneByPltdlotnbr(string $PltdLotNbr) Return the first ChildInvPalletLot filtered by the PltdLotNbr column
 * @method     ChildInvPalletLot|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPalletLot filtered by the DateUpdtd column
 * @method     ChildInvPalletLot|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPalletLot filtered by the TimeUpdtd column
 * @method     ChildInvPalletLot|null findOneByDummy(string $dummy) Return the first ChildInvPalletLot filtered by the dummy column
 *
 * @method     ChildInvPalletLot requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvPalletLot by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPalletLot requireOne(?ConnectionInterface $con = null) Return the first ChildInvPalletLot matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPalletLot requireOneByPlthpalletid(string $PlthPalletId) Return the first ChildInvPalletLot filtered by the PlthPalletId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPalletLot requireOneByPltdlotnbr(string $PltdLotNbr) Return the first ChildInvPalletLot filtered by the PltdLotNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPalletLot requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPalletLot filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPalletLot requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPalletLot filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPalletLot requireOneByDummy(string $dummy) Return the first ChildInvPalletLot filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPalletLot[]|Collection find(?ConnectionInterface $con = null) Return ChildInvPalletLot objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> find(?ConnectionInterface $con = null) Return ChildInvPalletLot objects based on current ModelCriteria
 *
 * @method     ChildInvPalletLot[]|Collection findByPlthpalletid(string|array<string> $PlthPalletId) Return ChildInvPalletLot objects filtered by the PlthPalletId column
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> findByPlthpalletid(string|array<string> $PlthPalletId) Return ChildInvPalletLot objects filtered by the PlthPalletId column
 * @method     ChildInvPalletLot[]|Collection findByPltdlotnbr(string|array<string> $PltdLotNbr) Return ChildInvPalletLot objects filtered by the PltdLotNbr column
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> findByPltdlotnbr(string|array<string> $PltdLotNbr) Return ChildInvPalletLot objects filtered by the PltdLotNbr column
 * @method     ChildInvPalletLot[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvPalletLot objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvPalletLot objects filtered by the DateUpdtd column
 * @method     ChildInvPalletLot[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvPalletLot objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvPalletLot objects filtered by the TimeUpdtd column
 * @method     ChildInvPalletLot[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvPalletLot objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvPalletLot> findByDummy(string|array<string> $dummy) Return ChildInvPalletLot objects filtered by the dummy column
 *
 * @method     ChildInvPalletLot[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvPalletLot> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvPalletLotQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvPalletLotQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvPalletLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvPalletLotQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvPalletLotQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvPalletLotQuery) {
            return $criteria;
        }
        $query = new ChildInvPalletLotQuery();
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
     * @param array[$PlthPalletId, $PltdLotNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvPalletLot|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvPalletLotTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvPalletLotTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvPalletLot A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PlthPalletId, PltdLotNbr, DateUpdtd, TimeUpdtd, dummy FROM pallet_detail WHERE PlthPalletId = :p0 AND PltdLotNbr = :p1';
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
            /** @var ChildInvPalletLot $obj */
            $obj = new ChildInvPalletLot();
            $obj->hydrate($row);
            InvPalletLotTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvPalletLot|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvPalletLotTableMap::COL_PLTHPALLETID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvPalletLotTableMap::COL_PLTDLOTNBR, $key[1], Criteria::EQUAL);

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
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvPalletLotTableMap::COL_PLTHPALLETID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvPalletLotTableMap::COL_PLTDLOTNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PlthPalletId column
     *
     * Example usage:
     * <code>
     * $query->filterByPlthpalletid('fooValue');   // WHERE PlthPalletId = 'fooValue'
     * $query->filterByPlthpalletid('%fooValue%', Criteria::LIKE); // WHERE PlthPalletId LIKE '%fooValue%'
     * $query->filterByPlthpalletid(['foo', 'bar']); // WHERE PlthPalletId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $plthpalletid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPlthpalletid($plthpalletid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plthpalletid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPalletLotTableMap::COL_PLTHPALLETID, $plthpalletid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PltdLotNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPltdlotnbr('fooValue');   // WHERE PltdLotNbr = 'fooValue'
     * $query->filterByPltdlotnbr('%fooValue%', Criteria::LIKE); // WHERE PltdLotNbr LIKE '%fooValue%'
     * $query->filterByPltdlotnbr(['foo', 'bar']); // WHERE PltdLotNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pltdlotnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPltdlotnbr($pltdlotnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pltdlotnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPalletLotTableMap::COL_PLTDLOTNBR, $pltdlotnbr, $comparison);

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

        $this->addUsingAlias(InvPalletLotTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvPalletLotTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvPalletLotTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \InvPallet object
     *
     * @param \InvPallet|ObjectCollection $invPallet The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvPallet($invPallet, ?string $comparison = null)
    {
        if ($invPallet instanceof \InvPallet) {
            return $this
                ->addUsingAlias(InvPalletLotTableMap::COL_PLTHPALLETID, $invPallet->getPlthpalletid(), $comparison);
        } elseif ($invPallet instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvPalletLotTableMap::COL_PLTHPALLETID, $invPallet->toKeyValue('PrimaryKey', 'Plthpalletid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvPallet() only accepts arguments of type \InvPallet or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvPallet relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvPallet(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvPallet');

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
            $this->addJoinObject($join, 'InvPallet');
        }

        return $this;
    }

    /**
     * Use the InvPallet relation InvPallet object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvPalletQuery A secondary query class using the current class as primary query
     */
    public function useInvPalletQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvPallet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvPallet', '\InvPalletQuery');
    }

    /**
     * Use the InvPallet relation InvPallet object
     *
     * @param callable(\InvPalletQuery):\InvPalletQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvPalletQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvPalletQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvPallet table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvPalletQuery The inner query object of the EXISTS statement
     */
    public function useInvPalletExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useExistsQuery('InvPallet', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvPallet table for a NOT EXISTS query.
     *
     * @see useInvPalletExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvPalletQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvPalletNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useExistsQuery('InvPallet', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvPallet table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvPalletQuery The inner query object of the IN statement
     */
    public function useInInvPalletQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useInQuery('InvPallet', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvPallet table for a NOT IN query.
     *
     * @see useInvPalletInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvPalletQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvPalletQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useInQuery('InvPallet', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvPalletLot $invPalletLot Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invPalletLot = null)
    {
        if ($invPalletLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvPalletLotTableMap::COL_PLTHPALLETID), $invPalletLot->getPlthpalletid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvPalletLotTableMap::COL_PLTDLOTNBR), $invPalletLot->getPltdlotnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pallet_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletLotTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvPalletLotTableMap::clearInstancePool();
            InvPalletLotTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletLotTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvPalletLotTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvPalletLotTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvPalletLotTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
