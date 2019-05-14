<?php

namespace Base;

use \SalesOrderShipment as ChildSalesOrderShipment;
use \SalesOrderShipmentQuery as ChildSalesOrderShipmentQuery;
use \Exception;
use \PDO;
use Map\SalesOrderShipmentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_hist_ship' table.
 *
 *
 *
 * @method     ChildSalesOrderShipmentQuery orderByOehshnbr($order = Criteria::ASC) Order by the OehshNbr column
 * @method     ChildSalesOrderShipmentQuery orderByOehshseq($order = Criteria::ASC) Order by the OehshSeq column
 * @method     ChildSalesOrderShipmentQuery orderByOehshshiprefnbr($order = Criteria::ASC) Order by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipmentQuery orderByOehshwght($order = Criteria::ASC) Order by the OehshWght column
 * @method     ChildSalesOrderShipmentQuery orderByOehshservtype($order = Criteria::ASC) Order by the OehshServType column
 * @method     ChildSalesOrderShipmentQuery orderByOehshshipdate($order = Criteria::ASC) Order by the OehshShipDate column
 * @method     ChildSalesOrderShipmentQuery orderByOehshtracknbr($order = Criteria::ASC) Order by the OehshTrackNbr column
 * @method     ChildSalesOrderShipmentQuery orderByOehshbilloflading($order = Criteria::ASC) Order by the OehshBillOfLading column
 * @method     ChildSalesOrderShipmentQuery orderByOehshvesselname($order = Criteria::ASC) Order by the OehshVesselName column
 * @method     ChildSalesOrderShipmentQuery orderByOehshasgdcntrnbr($order = Criteria::ASC) Order by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipmentQuery orderByOehshoceancontainer($order = Criteria::ASC) Order by the OehshOceanContainer column
 * @method     ChildSalesOrderShipmentQuery orderByOehshamazonref($order = Criteria::ASC) Order by the OehshAmazonRef column
 * @method     ChildSalesOrderShipmentQuery orderByOehshsealnumber($order = Criteria::ASC) Order by the OehshSealNumber column
 * @method     ChildSalesOrderShipmentQuery orderByOehshnbrcntrs($order = Criteria::ASC) Order by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipmentQuery orderByOehshreported($order = Criteria::ASC) Order by the OehshReported column
 * @method     ChildSalesOrderShipmentQuery orderByOehshcrtnnbr($order = Criteria::ASC) Order by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipmentQuery orderByOehshfrtcost($order = Criteria::ASC) Order by the OehshFrtCost column
 * @method     ChildSalesOrderShipmentQuery orderByOehshdiscfrtcost($order = Criteria::ASC) Order by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipmentQuery orderByOehshfrtchrged($order = Criteria::ASC) Order by the OehshFrtChrged column
 * @method     ChildSalesOrderShipmentQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderShipmentQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderShipmentQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderShipmentQuery groupByOehshnbr() Group by the OehshNbr column
 * @method     ChildSalesOrderShipmentQuery groupByOehshseq() Group by the OehshSeq column
 * @method     ChildSalesOrderShipmentQuery groupByOehshshiprefnbr() Group by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipmentQuery groupByOehshwght() Group by the OehshWght column
 * @method     ChildSalesOrderShipmentQuery groupByOehshservtype() Group by the OehshServType column
 * @method     ChildSalesOrderShipmentQuery groupByOehshshipdate() Group by the OehshShipDate column
 * @method     ChildSalesOrderShipmentQuery groupByOehshtracknbr() Group by the OehshTrackNbr column
 * @method     ChildSalesOrderShipmentQuery groupByOehshbilloflading() Group by the OehshBillOfLading column
 * @method     ChildSalesOrderShipmentQuery groupByOehshvesselname() Group by the OehshVesselName column
 * @method     ChildSalesOrderShipmentQuery groupByOehshasgdcntrnbr() Group by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipmentQuery groupByOehshoceancontainer() Group by the OehshOceanContainer column
 * @method     ChildSalesOrderShipmentQuery groupByOehshamazonref() Group by the OehshAmazonRef column
 * @method     ChildSalesOrderShipmentQuery groupByOehshsealnumber() Group by the OehshSealNumber column
 * @method     ChildSalesOrderShipmentQuery groupByOehshnbrcntrs() Group by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipmentQuery groupByOehshreported() Group by the OehshReported column
 * @method     ChildSalesOrderShipmentQuery groupByOehshcrtnnbr() Group by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipmentQuery groupByOehshfrtcost() Group by the OehshFrtCost column
 * @method     ChildSalesOrderShipmentQuery groupByOehshdiscfrtcost() Group by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipmentQuery groupByOehshfrtchrged() Group by the OehshFrtChrged column
 * @method     ChildSalesOrderShipmentQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderShipmentQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderShipmentQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderShipmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderShipmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderShipmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderShipmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderShipmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderShipmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderShipment findOne(ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query
 * @method     ChildSalesOrderShipment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query, or a new ChildSalesOrderShipment object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderShipment findOneByOehshnbr(string $OehshNbr) Return the first ChildSalesOrderShipment filtered by the OehshNbr column
 * @method     ChildSalesOrderShipment findOneByOehshseq(int $OehshSeq) Return the first ChildSalesOrderShipment filtered by the OehshSeq column
 * @method     ChildSalesOrderShipment findOneByOehshshiprefnbr(int $OehshShipRefNbr) Return the first ChildSalesOrderShipment filtered by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipment findOneByOehshwght(string $OehshWght) Return the first ChildSalesOrderShipment filtered by the OehshWght column
 * @method     ChildSalesOrderShipment findOneByOehshservtype(string $OehshServType) Return the first ChildSalesOrderShipment filtered by the OehshServType column
 * @method     ChildSalesOrderShipment findOneByOehshshipdate(string $OehshShipDate) Return the first ChildSalesOrderShipment filtered by the OehshShipDate column
 * @method     ChildSalesOrderShipment findOneByOehshtracknbr(string $OehshTrackNbr) Return the first ChildSalesOrderShipment filtered by the OehshTrackNbr column
 * @method     ChildSalesOrderShipment findOneByOehshbilloflading(string $OehshBillOfLading) Return the first ChildSalesOrderShipment filtered by the OehshBillOfLading column
 * @method     ChildSalesOrderShipment findOneByOehshvesselname(string $OehshVesselName) Return the first ChildSalesOrderShipment filtered by the OehshVesselName column
 * @method     ChildSalesOrderShipment findOneByOehshasgdcntrnbr(string $OehshAsgdCntrNbr) Return the first ChildSalesOrderShipment filtered by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipment findOneByOehshoceancontainer(string $OehshOceanContainer) Return the first ChildSalesOrderShipment filtered by the OehshOceanContainer column
 * @method     ChildSalesOrderShipment findOneByOehshamazonref(string $OehshAmazonRef) Return the first ChildSalesOrderShipment filtered by the OehshAmazonRef column
 * @method     ChildSalesOrderShipment findOneByOehshsealnumber(string $OehshSealNumber) Return the first ChildSalesOrderShipment filtered by the OehshSealNumber column
 * @method     ChildSalesOrderShipment findOneByOehshnbrcntrs(int $OehshNbrCntrs) Return the first ChildSalesOrderShipment filtered by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipment findOneByOehshreported(string $OehshReported) Return the first ChildSalesOrderShipment filtered by the OehshReported column
 * @method     ChildSalesOrderShipment findOneByOehshcrtnnbr(int $OehshCrtnNbr) Return the first ChildSalesOrderShipment filtered by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipment findOneByOehshfrtcost(string $OehshFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshFrtCost column
 * @method     ChildSalesOrderShipment findOneByOehshdiscfrtcost(string $OehshDiscFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipment findOneByOehshfrtchrged(string $OehshFrtChrged) Return the first ChildSalesOrderShipment filtered by the OehshFrtChrged column
 * @method     ChildSalesOrderShipment findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderShipment filtered by the DateUpdtd column
 * @method     ChildSalesOrderShipment findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderShipment filtered by the TimeUpdtd column
 * @method     ChildSalesOrderShipment findOneByDummy(string $dummy) Return the first ChildSalesOrderShipment filtered by the dummy column *

 * @method     ChildSalesOrderShipment requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrderShipment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderShipment requireOneByOehshnbr(string $OehshNbr) Return the first ChildSalesOrderShipment filtered by the OehshNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshseq(int $OehshSeq) Return the first ChildSalesOrderShipment filtered by the OehshSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshshiprefnbr(int $OehshShipRefNbr) Return the first ChildSalesOrderShipment filtered by the OehshShipRefNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshwght(string $OehshWght) Return the first ChildSalesOrderShipment filtered by the OehshWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshservtype(string $OehshServType) Return the first ChildSalesOrderShipment filtered by the OehshServType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshshipdate(string $OehshShipDate) Return the first ChildSalesOrderShipment filtered by the OehshShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshtracknbr(string $OehshTrackNbr) Return the first ChildSalesOrderShipment filtered by the OehshTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshbilloflading(string $OehshBillOfLading) Return the first ChildSalesOrderShipment filtered by the OehshBillOfLading column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshvesselname(string $OehshVesselName) Return the first ChildSalesOrderShipment filtered by the OehshVesselName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshasgdcntrnbr(string $OehshAsgdCntrNbr) Return the first ChildSalesOrderShipment filtered by the OehshAsgdCntrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshoceancontainer(string $OehshOceanContainer) Return the first ChildSalesOrderShipment filtered by the OehshOceanContainer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshamazonref(string $OehshAmazonRef) Return the first ChildSalesOrderShipment filtered by the OehshAmazonRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshsealnumber(string $OehshSealNumber) Return the first ChildSalesOrderShipment filtered by the OehshSealNumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshnbrcntrs(int $OehshNbrCntrs) Return the first ChildSalesOrderShipment filtered by the OehshNbrCntrs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshreported(string $OehshReported) Return the first ChildSalesOrderShipment filtered by the OehshReported column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshcrtnnbr(int $OehshCrtnNbr) Return the first ChildSalesOrderShipment filtered by the OehshCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshfrtcost(string $OehshFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshdiscfrtcost(string $OehshDiscFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshDiscFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByOehshfrtchrged(string $OehshFrtChrged) Return the first ChildSalesOrderShipment filtered by the OehshFrtChrged column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderShipment filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderShipment filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOneByDummy(string $dummy) Return the first ChildSalesOrderShipment filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderShipment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrderShipment objects based on current ModelCriteria
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshnbr(string $OehshNbr) Return ChildSalesOrderShipment objects filtered by the OehshNbr column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshseq(int $OehshSeq) Return ChildSalesOrderShipment objects filtered by the OehshSeq column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshshiprefnbr(int $OehshShipRefNbr) Return ChildSalesOrderShipment objects filtered by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshwght(string $OehshWght) Return ChildSalesOrderShipment objects filtered by the OehshWght column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshservtype(string $OehshServType) Return ChildSalesOrderShipment objects filtered by the OehshServType column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshshipdate(string $OehshShipDate) Return ChildSalesOrderShipment objects filtered by the OehshShipDate column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshtracknbr(string $OehshTrackNbr) Return ChildSalesOrderShipment objects filtered by the OehshTrackNbr column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshbilloflading(string $OehshBillOfLading) Return ChildSalesOrderShipment objects filtered by the OehshBillOfLading column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshvesselname(string $OehshVesselName) Return ChildSalesOrderShipment objects filtered by the OehshVesselName column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshasgdcntrnbr(string $OehshAsgdCntrNbr) Return ChildSalesOrderShipment objects filtered by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshoceancontainer(string $OehshOceanContainer) Return ChildSalesOrderShipment objects filtered by the OehshOceanContainer column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshamazonref(string $OehshAmazonRef) Return ChildSalesOrderShipment objects filtered by the OehshAmazonRef column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshsealnumber(string $OehshSealNumber) Return ChildSalesOrderShipment objects filtered by the OehshSealNumber column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshnbrcntrs(int $OehshNbrCntrs) Return ChildSalesOrderShipment objects filtered by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshreported(string $OehshReported) Return ChildSalesOrderShipment objects filtered by the OehshReported column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshcrtnnbr(int $OehshCrtnNbr) Return ChildSalesOrderShipment objects filtered by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshfrtcost(string $OehshFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshFrtCost column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshdiscfrtcost(string $OehshDiscFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByOehshfrtchrged(string $OehshFrtChrged) Return ChildSalesOrderShipment objects filtered by the OehshFrtChrged column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesOrderShipment objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesOrderShipment objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderShipment[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrderShipment objects filtered by the dummy column
 * @method     ChildSalesOrderShipment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderShipmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderShipmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderShipment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderShipmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderShipmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderShipmentQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderShipmentQuery();
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
     * @param array[$OehshNbr, $OehshSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesOrderShipment|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderShipmentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderShipmentTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSalesOrderShipment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehshNbr, OehshSeq, OehshShipRefNbr, OehshWght, OehshServType, OehshShipDate, OehshTrackNbr, OehshBillOfLading, OehshVesselName, OehshAsgdCntrNbr, OehshOceanContainer, OehshAmazonRef, OehshSealNumber, OehshNbrCntrs, OehshReported, OehshCrtnNbr, OehshFrtCost, OehshDiscFrtCost, OehshFrtChrged, DateUpdtd, TimeUpdtd, dummy FROM so_hist_ship WHERE OehshNbr = :p0 AND OehshSeq = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesOrderShipment $obj */
            $obj = new ChildSalesOrderShipment();
            $obj->hydrate($row);
            SalesOrderShipmentTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSalesOrderShipment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SalesOrderShipmentTableMap::COL_OEHSHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehshNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshnbr('fooValue');   // WHERE OehshNbr = 'fooValue'
     * $query->filterByOehshnbr('%fooValue%', Criteria::LIKE); // WHERE OehshNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshnbr($oehshnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $oehshnbr, $comparison);
    }

    /**
     * Filter the query on the OehshSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshseq(1234); // WHERE OehshSeq = 1234
     * $query->filterByOehshseq(array(12, 34)); // WHERE OehshSeq IN (12, 34)
     * $query->filterByOehshseq(array('min' => 12)); // WHERE OehshSeq > 12
     * </code>
     *
     * @param     mixed $oehshseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshseq($oehshseq = null, $comparison = null)
    {
        if (is_array($oehshseq)) {
            $useMinMax = false;
            if (isset($oehshseq['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $oehshseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshseq['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $oehshseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $oehshseq, $comparison);
    }

    /**
     * Filter the query on the OehshShipRefNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshshiprefnbr(1234); // WHERE OehshShipRefNbr = 1234
     * $query->filterByOehshshiprefnbr(array(12, 34)); // WHERE OehshShipRefNbr IN (12, 34)
     * $query->filterByOehshshiprefnbr(array('min' => 12)); // WHERE OehshShipRefNbr > 12
     * </code>
     *
     * @param     mixed $oehshshiprefnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshshiprefnbr($oehshshiprefnbr = null, $comparison = null)
    {
        if (is_array($oehshshiprefnbr)) {
            $useMinMax = false;
            if (isset($oehshshiprefnbr['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR, $oehshshiprefnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshshiprefnbr['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR, $oehshshiprefnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR, $oehshshiprefnbr, $comparison);
    }

    /**
     * Filter the query on the OehshWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshwght(1234); // WHERE OehshWght = 1234
     * $query->filterByOehshwght(array(12, 34)); // WHERE OehshWght IN (12, 34)
     * $query->filterByOehshwght(array('min' => 12)); // WHERE OehshWght > 12
     * </code>
     *
     * @param     mixed $oehshwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshwght($oehshwght = null, $comparison = null)
    {
        if (is_array($oehshwght)) {
            $useMinMax = false;
            if (isset($oehshwght['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHWGHT, $oehshwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshwght['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHWGHT, $oehshwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHWGHT, $oehshwght, $comparison);
    }

    /**
     * Filter the query on the OehshServType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshservtype('fooValue');   // WHERE OehshServType = 'fooValue'
     * $query->filterByOehshservtype('%fooValue%', Criteria::LIKE); // WHERE OehshServType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshservtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshservtype($oehshservtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshservtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSERVTYPE, $oehshservtype, $comparison);
    }

    /**
     * Filter the query on the OehshShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshshipdate('fooValue');   // WHERE OehshShipDate = 'fooValue'
     * $query->filterByOehshshipdate('%fooValue%', Criteria::LIKE); // WHERE OehshShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshshipdate($oehshshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPDATE, $oehshshipdate, $comparison);
    }

    /**
     * Filter the query on the OehshTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshtracknbr('fooValue');   // WHERE OehshTrackNbr = 'fooValue'
     * $query->filterByOehshtracknbr('%fooValue%', Criteria::LIKE); // WHERE OehshTrackNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshtracknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshtracknbr($oehshtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHTRACKNBR, $oehshtracknbr, $comparison);
    }

    /**
     * Filter the query on the OehshBillOfLading column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshbilloflading('fooValue');   // WHERE OehshBillOfLading = 'fooValue'
     * $query->filterByOehshbilloflading('%fooValue%', Criteria::LIKE); // WHERE OehshBillOfLading LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshbilloflading The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshbilloflading($oehshbilloflading = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshbilloflading)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHBILLOFLADING, $oehshbilloflading, $comparison);
    }

    /**
     * Filter the query on the OehshVesselName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshvesselname('fooValue');   // WHERE OehshVesselName = 'fooValue'
     * $query->filterByOehshvesselname('%fooValue%', Criteria::LIKE); // WHERE OehshVesselName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshvesselname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshvesselname($oehshvesselname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshvesselname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHVESSELNAME, $oehshvesselname, $comparison);
    }

    /**
     * Filter the query on the OehshAsgdCntrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshasgdcntrnbr('fooValue');   // WHERE OehshAsgdCntrNbr = 'fooValue'
     * $query->filterByOehshasgdcntrnbr('%fooValue%', Criteria::LIKE); // WHERE OehshAsgdCntrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshasgdcntrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshasgdcntrnbr($oehshasgdcntrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshasgdcntrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHASGDCNTRNBR, $oehshasgdcntrnbr, $comparison);
    }

    /**
     * Filter the query on the OehshOceanContainer column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshoceancontainer('fooValue');   // WHERE OehshOceanContainer = 'fooValue'
     * $query->filterByOehshoceancontainer('%fooValue%', Criteria::LIKE); // WHERE OehshOceanContainer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshoceancontainer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshoceancontainer($oehshoceancontainer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshoceancontainer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHOCEANCONTAINER, $oehshoceancontainer, $comparison);
    }

    /**
     * Filter the query on the OehshAmazonRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshamazonref('fooValue');   // WHERE OehshAmazonRef = 'fooValue'
     * $query->filterByOehshamazonref('%fooValue%', Criteria::LIKE); // WHERE OehshAmazonRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshamazonref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshamazonref($oehshamazonref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshamazonref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHAMAZONREF, $oehshamazonref, $comparison);
    }

    /**
     * Filter the query on the OehshSealNumber column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshsealnumber('fooValue');   // WHERE OehshSealNumber = 'fooValue'
     * $query->filterByOehshsealnumber('%fooValue%', Criteria::LIKE); // WHERE OehshSealNumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshsealnumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshsealnumber($oehshsealnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshsealnumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEALNUMBER, $oehshsealnumber, $comparison);
    }

    /**
     * Filter the query on the OehshNbrCntrs column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshnbrcntrs(1234); // WHERE OehshNbrCntrs = 1234
     * $query->filterByOehshnbrcntrs(array(12, 34)); // WHERE OehshNbrCntrs IN (12, 34)
     * $query->filterByOehshnbrcntrs(array('min' => 12)); // WHERE OehshNbrCntrs > 12
     * </code>
     *
     * @param     mixed $oehshnbrcntrs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshnbrcntrs($oehshnbrcntrs = null, $comparison = null)
    {
        if (is_array($oehshnbrcntrs)) {
            $useMinMax = false;
            if (isset($oehshnbrcntrs['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS, $oehshnbrcntrs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshnbrcntrs['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS, $oehshnbrcntrs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS, $oehshnbrcntrs, $comparison);
    }

    /**
     * Filter the query on the OehshReported column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshreported('fooValue');   // WHERE OehshReported = 'fooValue'
     * $query->filterByOehshreported('%fooValue%', Criteria::LIKE); // WHERE OehshReported LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehshreported The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshreported($oehshreported = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshreported)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHREPORTED, $oehshreported, $comparison);
    }

    /**
     * Filter the query on the OehshCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshcrtnnbr(1234); // WHERE OehshCrtnNbr = 1234
     * $query->filterByOehshcrtnnbr(array(12, 34)); // WHERE OehshCrtnNbr IN (12, 34)
     * $query->filterByOehshcrtnnbr(array('min' => 12)); // WHERE OehshCrtnNbr > 12
     * </code>
     *
     * @param     mixed $oehshcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshcrtnnbr($oehshcrtnnbr = null, $comparison = null)
    {
        if (is_array($oehshcrtnnbr)) {
            $useMinMax = false;
            if (isset($oehshcrtnnbr['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR, $oehshcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshcrtnnbr['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR, $oehshcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR, $oehshcrtnnbr, $comparison);
    }

    /**
     * Filter the query on the OehshFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshfrtcost(1234); // WHERE OehshFrtCost = 1234
     * $query->filterByOehshfrtcost(array(12, 34)); // WHERE OehshFrtCost IN (12, 34)
     * $query->filterByOehshfrtcost(array('min' => 12)); // WHERE OehshFrtCost > 12
     * </code>
     *
     * @param     mixed $oehshfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshfrtcost($oehshfrtcost = null, $comparison = null)
    {
        if (is_array($oehshfrtcost)) {
            $useMinMax = false;
            if (isset($oehshfrtcost['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCOST, $oehshfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshfrtcost['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCOST, $oehshfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCOST, $oehshfrtcost, $comparison);
    }

    /**
     * Filter the query on the OehshDiscFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshdiscfrtcost(1234); // WHERE OehshDiscFrtCost = 1234
     * $query->filterByOehshdiscfrtcost(array(12, 34)); // WHERE OehshDiscFrtCost IN (12, 34)
     * $query->filterByOehshdiscfrtcost(array('min' => 12)); // WHERE OehshDiscFrtCost > 12
     * </code>
     *
     * @param     mixed $oehshdiscfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshdiscfrtcost($oehshdiscfrtcost = null, $comparison = null)
    {
        if (is_array($oehshdiscfrtcost)) {
            $useMinMax = false;
            if (isset($oehshdiscfrtcost['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST, $oehshdiscfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshdiscfrtcost['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST, $oehshdiscfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST, $oehshdiscfrtcost, $comparison);
    }

    /**
     * Filter the query on the OehshFrtChrged column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshfrtchrged(1234); // WHERE OehshFrtChrged = 1234
     * $query->filterByOehshfrtchrged(array(12, 34)); // WHERE OehshFrtChrged IN (12, 34)
     * $query->filterByOehshfrtchrged(array('min' => 12)); // WHERE OehshFrtChrged > 12
     * </code>
     *
     * @param     mixed $oehshfrtchrged The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByOehshfrtchrged($oehshfrtchrged = null, $comparison = null)
    {
        if (is_array($oehshfrtchrged)) {
            $useMinMax = false;
            if (isset($oehshfrtchrged['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED, $oehshfrtchrged['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshfrtchrged['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED, $oehshfrtchrged['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED, $oehshfrtchrged, $comparison);
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
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderShipmentTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrderShipment $salesOrderShipment Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderShipmentQuery The current query, for fluid interface
     */
    public function prune($salesOrderShipment = null)
    {
        if ($salesOrderShipment) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderShipmentTableMap::COL_OEHSHNBR), $salesOrderShipment->getOehshnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderShipmentTableMap::COL_OEHSHSEQ), $salesOrderShipment->getOehshseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_hist_ship table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderShipmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderShipmentTableMap::clearInstancePool();
            SalesOrderShipmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderShipmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderShipmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderShipmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderShipmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderShipmentQuery
