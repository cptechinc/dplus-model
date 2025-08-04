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
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_hist_ship` table.
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
 * @method     ChildSalesOrderShipmentQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderShipmentQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderShipmentQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderShipmentQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderShipmentQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderShipmentQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderShipmentQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderShipmentQuery leftJoinSalesHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesOrderShipmentQuery rightJoinSalesHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesOrderShipmentQuery innerJoinSalesHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistory relation
 *
 * @method     ChildSalesOrderShipmentQuery joinWithSalesHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistory relation
 *
 * @method     ChildSalesOrderShipmentQuery leftJoinWithSalesHistory() Adds a LEFT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesOrderShipmentQuery rightJoinWithSalesHistory() Adds a RIGHT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesOrderShipmentQuery innerJoinWithSalesHistory() Adds a INNER JOIN clause and with to the query using the SalesHistory relation
 *
 * @method     \SalesOrderQuery|\SalesHistoryQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesOrderShipment|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query
 * @method     ChildSalesOrderShipment findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query, or a new ChildSalesOrderShipment object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderShipment|null findOneByOehshnbr(int $OehshNbr) Return the first ChildSalesOrderShipment filtered by the OehshNbr column
 * @method     ChildSalesOrderShipment|null findOneByOehshseq(int $OehshSeq) Return the first ChildSalesOrderShipment filtered by the OehshSeq column
 * @method     ChildSalesOrderShipment|null findOneByOehshshiprefnbr(int $OehshShipRefNbr) Return the first ChildSalesOrderShipment filtered by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipment|null findOneByOehshwght(string $OehshWght) Return the first ChildSalesOrderShipment filtered by the OehshWght column
 * @method     ChildSalesOrderShipment|null findOneByOehshservtype(string $OehshServType) Return the first ChildSalesOrderShipment filtered by the OehshServType column
 * @method     ChildSalesOrderShipment|null findOneByOehshshipdate(string $OehshShipDate) Return the first ChildSalesOrderShipment filtered by the OehshShipDate column
 * @method     ChildSalesOrderShipment|null findOneByOehshtracknbr(string $OehshTrackNbr) Return the first ChildSalesOrderShipment filtered by the OehshTrackNbr column
 * @method     ChildSalesOrderShipment|null findOneByOehshbilloflading(string $OehshBillOfLading) Return the first ChildSalesOrderShipment filtered by the OehshBillOfLading column
 * @method     ChildSalesOrderShipment|null findOneByOehshvesselname(string $OehshVesselName) Return the first ChildSalesOrderShipment filtered by the OehshVesselName column
 * @method     ChildSalesOrderShipment|null findOneByOehshasgdcntrnbr(string $OehshAsgdCntrNbr) Return the first ChildSalesOrderShipment filtered by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipment|null findOneByOehshoceancontainer(string $OehshOceanContainer) Return the first ChildSalesOrderShipment filtered by the OehshOceanContainer column
 * @method     ChildSalesOrderShipment|null findOneByOehshamazonref(string $OehshAmazonRef) Return the first ChildSalesOrderShipment filtered by the OehshAmazonRef column
 * @method     ChildSalesOrderShipment|null findOneByOehshsealnumber(string $OehshSealNumber) Return the first ChildSalesOrderShipment filtered by the OehshSealNumber column
 * @method     ChildSalesOrderShipment|null findOneByOehshnbrcntrs(int $OehshNbrCntrs) Return the first ChildSalesOrderShipment filtered by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipment|null findOneByOehshreported(string $OehshReported) Return the first ChildSalesOrderShipment filtered by the OehshReported column
 * @method     ChildSalesOrderShipment|null findOneByOehshcrtnnbr(int $OehshCrtnNbr) Return the first ChildSalesOrderShipment filtered by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipment|null findOneByOehshfrtcost(string $OehshFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshFrtCost column
 * @method     ChildSalesOrderShipment|null findOneByOehshdiscfrtcost(string $OehshDiscFrtCost) Return the first ChildSalesOrderShipment filtered by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipment|null findOneByOehshfrtchrged(string $OehshFrtChrged) Return the first ChildSalesOrderShipment filtered by the OehshFrtChrged column
 * @method     ChildSalesOrderShipment|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderShipment filtered by the DateUpdtd column
 * @method     ChildSalesOrderShipment|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderShipment filtered by the TimeUpdtd column
 * @method     ChildSalesOrderShipment|null findOneByDummy(string $dummy) Return the first ChildSalesOrderShipment filtered by the dummy column
 *
 * @method     ChildSalesOrderShipment requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesOrderShipment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderShipment requireOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderShipment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderShipment requireOneByOehshnbr(int $OehshNbr) Return the first ChildSalesOrderShipment filtered by the OehshNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildSalesOrderShipment[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesOrderShipment objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> find(?ConnectionInterface $con = null) Return ChildSalesOrderShipment objects based on current ModelCriteria
 *
 * @method     ChildSalesOrderShipment[]|Collection findByOehshnbr(int|array<int> $OehshNbr) Return ChildSalesOrderShipment objects filtered by the OehshNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshnbr(int|array<int> $OehshNbr) Return ChildSalesOrderShipment objects filtered by the OehshNbr column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshseq(int|array<int> $OehshSeq) Return ChildSalesOrderShipment objects filtered by the OehshSeq column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshseq(int|array<int> $OehshSeq) Return ChildSalesOrderShipment objects filtered by the OehshSeq column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshshiprefnbr(int|array<int> $OehshShipRefNbr) Return ChildSalesOrderShipment objects filtered by the OehshShipRefNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshshiprefnbr(int|array<int> $OehshShipRefNbr) Return ChildSalesOrderShipment objects filtered by the OehshShipRefNbr column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshwght(string|array<string> $OehshWght) Return ChildSalesOrderShipment objects filtered by the OehshWght column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshwght(string|array<string> $OehshWght) Return ChildSalesOrderShipment objects filtered by the OehshWght column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshservtype(string|array<string> $OehshServType) Return ChildSalesOrderShipment objects filtered by the OehshServType column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshservtype(string|array<string> $OehshServType) Return ChildSalesOrderShipment objects filtered by the OehshServType column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshshipdate(string|array<string> $OehshShipDate) Return ChildSalesOrderShipment objects filtered by the OehshShipDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshshipdate(string|array<string> $OehshShipDate) Return ChildSalesOrderShipment objects filtered by the OehshShipDate column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshtracknbr(string|array<string> $OehshTrackNbr) Return ChildSalesOrderShipment objects filtered by the OehshTrackNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshtracknbr(string|array<string> $OehshTrackNbr) Return ChildSalesOrderShipment objects filtered by the OehshTrackNbr column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshbilloflading(string|array<string> $OehshBillOfLading) Return ChildSalesOrderShipment objects filtered by the OehshBillOfLading column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshbilloflading(string|array<string> $OehshBillOfLading) Return ChildSalesOrderShipment objects filtered by the OehshBillOfLading column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshvesselname(string|array<string> $OehshVesselName) Return ChildSalesOrderShipment objects filtered by the OehshVesselName column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshvesselname(string|array<string> $OehshVesselName) Return ChildSalesOrderShipment objects filtered by the OehshVesselName column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshasgdcntrnbr(string|array<string> $OehshAsgdCntrNbr) Return ChildSalesOrderShipment objects filtered by the OehshAsgdCntrNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshasgdcntrnbr(string|array<string> $OehshAsgdCntrNbr) Return ChildSalesOrderShipment objects filtered by the OehshAsgdCntrNbr column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshoceancontainer(string|array<string> $OehshOceanContainer) Return ChildSalesOrderShipment objects filtered by the OehshOceanContainer column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshoceancontainer(string|array<string> $OehshOceanContainer) Return ChildSalesOrderShipment objects filtered by the OehshOceanContainer column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshamazonref(string|array<string> $OehshAmazonRef) Return ChildSalesOrderShipment objects filtered by the OehshAmazonRef column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshamazonref(string|array<string> $OehshAmazonRef) Return ChildSalesOrderShipment objects filtered by the OehshAmazonRef column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshsealnumber(string|array<string> $OehshSealNumber) Return ChildSalesOrderShipment objects filtered by the OehshSealNumber column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshsealnumber(string|array<string> $OehshSealNumber) Return ChildSalesOrderShipment objects filtered by the OehshSealNumber column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshnbrcntrs(int|array<int> $OehshNbrCntrs) Return ChildSalesOrderShipment objects filtered by the OehshNbrCntrs column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshnbrcntrs(int|array<int> $OehshNbrCntrs) Return ChildSalesOrderShipment objects filtered by the OehshNbrCntrs column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshreported(string|array<string> $OehshReported) Return ChildSalesOrderShipment objects filtered by the OehshReported column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshreported(string|array<string> $OehshReported) Return ChildSalesOrderShipment objects filtered by the OehshReported column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshcrtnnbr(int|array<int> $OehshCrtnNbr) Return ChildSalesOrderShipment objects filtered by the OehshCrtnNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshcrtnnbr(int|array<int> $OehshCrtnNbr) Return ChildSalesOrderShipment objects filtered by the OehshCrtnNbr column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshfrtcost(string|array<string> $OehshFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshFrtCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshfrtcost(string|array<string> $OehshFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshFrtCost column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshdiscfrtcost(string|array<string> $OehshDiscFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshDiscFrtCost column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshdiscfrtcost(string|array<string> $OehshDiscFrtCost) Return ChildSalesOrderShipment objects filtered by the OehshDiscFrtCost column
 * @method     ChildSalesOrderShipment[]|Collection findByOehshfrtchrged(string|array<string> $OehshFrtChrged) Return ChildSalesOrderShipment objects filtered by the OehshFrtChrged column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByOehshfrtchrged(string|array<string> $OehshFrtChrged) Return ChildSalesOrderShipment objects filtered by the OehshFrtChrged column
 * @method     ChildSalesOrderShipment[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderShipment objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderShipment objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderShipment[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderShipment objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderShipment objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderShipment[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesOrderShipment objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesOrderShipment> findByDummy(string|array<string> $dummy) Return ChildSalesOrderShipment objects filtered by the dummy column
 *
 * @method     ChildSalesOrderShipment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesOrderShipment> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesOrderShipmentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderShipmentQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderShipment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderShipmentQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderShipmentQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $key[1], Criteria::EQUAL);

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
     * $query->filterByOehshnbr(1234); // WHERE OehshNbr = 1234
     * $query->filterByOehshnbr(array(12, 34)); // WHERE OehshNbr IN (12, 34)
     * $query->filterByOehshnbr(array('min' => 12)); // WHERE OehshNbr > 12
     * </code>
     *
     * @see       filterBySalesOrder()
     *
     * @see       filterBySalesHistory()
     *
     * @param mixed $oehshnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshnbr($oehshnbr = null, ?string $comparison = null)
    {
        if (is_array($oehshnbr)) {
            $useMinMax = false;
            if (isset($oehshnbr['min'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $oehshnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehshnbr['max'])) {
                $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $oehshnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $oehshnbr, $comparison);

        return $this;
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
     * @param mixed $oehshseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshseq($oehshseq = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEQ, $oehshseq, $comparison);

        return $this;
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
     * @param mixed $oehshshiprefnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshshiprefnbr($oehshshiprefnbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPREFNBR, $oehshshiprefnbr, $comparison);

        return $this;
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
     * @param mixed $oehshwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshwght($oehshwght = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHWGHT, $oehshwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshServType column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshservtype('fooValue');   // WHERE OehshServType = 'fooValue'
     * $query->filterByOehshservtype('%fooValue%', Criteria::LIKE); // WHERE OehshServType LIKE '%fooValue%'
     * $query->filterByOehshservtype(['foo', 'bar']); // WHERE OehshServType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshservtype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshservtype($oehshservtype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshservtype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSERVTYPE, $oehshservtype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshshipdate('fooValue');   // WHERE OehshShipDate = 'fooValue'
     * $query->filterByOehshshipdate('%fooValue%', Criteria::LIKE); // WHERE OehshShipDate LIKE '%fooValue%'
     * $query->filterByOehshshipdate(['foo', 'bar']); // WHERE OehshShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshshipdate($oehshshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSHIPDATE, $oehshshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshtracknbr('fooValue');   // WHERE OehshTrackNbr = 'fooValue'
     * $query->filterByOehshtracknbr('%fooValue%', Criteria::LIKE); // WHERE OehshTrackNbr LIKE '%fooValue%'
     * $query->filterByOehshtracknbr(['foo', 'bar']); // WHERE OehshTrackNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshtracknbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshtracknbr($oehshtracknbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHTRACKNBR, $oehshtracknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshBillOfLading column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshbilloflading('fooValue');   // WHERE OehshBillOfLading = 'fooValue'
     * $query->filterByOehshbilloflading('%fooValue%', Criteria::LIKE); // WHERE OehshBillOfLading LIKE '%fooValue%'
     * $query->filterByOehshbilloflading(['foo', 'bar']); // WHERE OehshBillOfLading IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshbilloflading The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshbilloflading($oehshbilloflading = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshbilloflading)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHBILLOFLADING, $oehshbilloflading, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshVesselName column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshvesselname('fooValue');   // WHERE OehshVesselName = 'fooValue'
     * $query->filterByOehshvesselname('%fooValue%', Criteria::LIKE); // WHERE OehshVesselName LIKE '%fooValue%'
     * $query->filterByOehshvesselname(['foo', 'bar']); // WHERE OehshVesselName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshvesselname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshvesselname($oehshvesselname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshvesselname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHVESSELNAME, $oehshvesselname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshAsgdCntrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshasgdcntrnbr('fooValue');   // WHERE OehshAsgdCntrNbr = 'fooValue'
     * $query->filterByOehshasgdcntrnbr('%fooValue%', Criteria::LIKE); // WHERE OehshAsgdCntrNbr LIKE '%fooValue%'
     * $query->filterByOehshasgdcntrnbr(['foo', 'bar']); // WHERE OehshAsgdCntrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshasgdcntrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshasgdcntrnbr($oehshasgdcntrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshasgdcntrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHASGDCNTRNBR, $oehshasgdcntrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshOceanContainer column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshoceancontainer('fooValue');   // WHERE OehshOceanContainer = 'fooValue'
     * $query->filterByOehshoceancontainer('%fooValue%', Criteria::LIKE); // WHERE OehshOceanContainer LIKE '%fooValue%'
     * $query->filterByOehshoceancontainer(['foo', 'bar']); // WHERE OehshOceanContainer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshoceancontainer The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshoceancontainer($oehshoceancontainer = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshoceancontainer)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHOCEANCONTAINER, $oehshoceancontainer, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshAmazonRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshamazonref('fooValue');   // WHERE OehshAmazonRef = 'fooValue'
     * $query->filterByOehshamazonref('%fooValue%', Criteria::LIKE); // WHERE OehshAmazonRef LIKE '%fooValue%'
     * $query->filterByOehshamazonref(['foo', 'bar']); // WHERE OehshAmazonRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshamazonref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshamazonref($oehshamazonref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshamazonref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHAMAZONREF, $oehshamazonref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshSealNumber column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshsealnumber('fooValue');   // WHERE OehshSealNumber = 'fooValue'
     * $query->filterByOehshsealnumber('%fooValue%', Criteria::LIKE); // WHERE OehshSealNumber LIKE '%fooValue%'
     * $query->filterByOehshsealnumber(['foo', 'bar']); // WHERE OehshSealNumber IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshsealnumber The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshsealnumber($oehshsealnumber = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshsealnumber)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHSEALNUMBER, $oehshsealnumber, $comparison);

        return $this;
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
     * @param mixed $oehshnbrcntrs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshnbrcntrs($oehshnbrcntrs = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBRCNTRS, $oehshnbrcntrs, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OehshReported column
     *
     * Example usage:
     * <code>
     * $query->filterByOehshreported('fooValue');   // WHERE OehshReported = 'fooValue'
     * $query->filterByOehshreported('%fooValue%', Criteria::LIKE); // WHERE OehshReported LIKE '%fooValue%'
     * $query->filterByOehshreported(['foo', 'bar']); // WHERE OehshReported IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oehshreported The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshreported($oehshreported = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehshreported)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHREPORTED, $oehshreported, $comparison);

        return $this;
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
     * @param mixed $oehshcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshcrtnnbr($oehshcrtnnbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHCRTNNBR, $oehshcrtnnbr, $comparison);

        return $this;
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
     * @param mixed $oehshfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshfrtcost($oehshfrtcost = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCOST, $oehshfrtcost, $comparison);

        return $this;
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
     * @param mixed $oehshdiscfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshdiscfrtcost($oehshdiscfrtcost = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHDISCFRTCOST, $oehshdiscfrtcost, $comparison);

        return $this;
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
     * @param mixed $oehshfrtchrged The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehshfrtchrged($oehshfrtchrged = null, ?string $comparison = null)
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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHFRTCHRGED, $oehshfrtchrged, $comparison);

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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderShipmentTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, ?string $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $salesOrder->getOehdnbr(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $salesOrder->toKeyValue('PrimaryKey', 'Oehdnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrder');

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
            $this->addJoinObject($join, 'SalesOrder');
        }

        return $this;
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @param callable(\SalesOrderQuery):\SalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT EXISTS query.
     *
     * @see useSalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderQuery The inner query object of the IN statement
     */
    public function useInSalesOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT IN query.
     *
     * @see useSalesOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, ?string $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $salesHistory->getOehhnbr(), $comparison);
        } elseif ($salesHistory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderShipmentTableMap::COL_OEHSHNBR, $salesHistory->toKeyValue('PrimaryKey', 'Oehhnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistory');

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
            $this->addJoinObject($join, 'SalesHistory');
        }

        return $this;
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistory', '\SalesHistoryQuery');
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @param callable(\SalesHistoryQuery):\SalesHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT EXISTS query.
     *
     * @see useSalesHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT IN query.
     *
     * @see useSalesHistoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSalesOrderShipment $salesOrderShipment Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
