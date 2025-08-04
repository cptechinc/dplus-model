<?php

namespace Base;

use \CpnLoad as ChildCpnLoad;
use \CpnLoadQuery as ChildCpnLoadQuery;
use \Exception;
use \PDO;
use Map\CpnLoadTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `load_cpn_header` table.
 *
 * @method     ChildCpnLoadQuery orderByLchdloadnbr($order = Criteria::ASC) Order by the LchdLoadNbr column
 * @method     ChildCpnLoadQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildCpnLoadQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCpnLoadQuery orderByLchdshipidfrom($order = Criteria::ASC) Order by the LchdShipIdFrom column
 * @method     ChildCpnLoadQuery orderByLchdshipidthru($order = Criteria::ASC) Order by the LchdShipIdThru column
 * @method     ChildCpnLoadQuery orderByLchdshipidthrusel($order = Criteria::ASC) Order by the LchdShipIdThruSel column
 * @method     ChildCpnLoadQuery orderByLchdcustpofrom($order = Criteria::ASC) Order by the LchdCustPoFrom column
 * @method     ChildCpnLoadQuery orderByLchdcustpothru($order = Criteria::ASC) Order by the LchdCustPoThru column
 * @method     ChildCpnLoadQuery orderByLchdcustpothrusel($order = Criteria::ASC) Order by the LchdCustPoThruSel column
 * @method     ChildCpnLoadQuery orderByLchdrqstdatefrom($order = Criteria::ASC) Order by the LchdRqstDateFrom column
 * @method     ChildCpnLoadQuery orderByLchdrqstdatethru($order = Criteria::ASC) Order by the LchdRqstDateThru column
 * @method     ChildCpnLoadQuery orderByLchdbol($order = Criteria::ASC) Order by the LchdBol column
 * @method     ChildCpnLoadQuery orderByLchdpronbr($order = Criteria::ASC) Order by the LchdProNbr column
 * @method     ChildCpnLoadQuery orderByLchdshipdate($order = Criteria::ASC) Order by the LchdShipDate column
 * @method     ChildCpnLoadQuery orderByLchdnbrofskids($order = Criteria::ASC) Order by the LchdNbrOfSkids column
 * @method     ChildCpnLoadQuery orderByLchdnbrofboxes($order = Criteria::ASC) Order by the LchdNbrOfBoxes column
 * @method     ChildCpnLoadQuery orderByLchdtotwght($order = Criteria::ASC) Order by the LchdTotWght column
 * @method     ChildCpnLoadQuery orderByLchdslctnbrofboxes($order = Criteria::ASC) Order by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoadQuery orderByLchdslcttotwght($order = Criteria::ASC) Order by the LchdSlctTotWght column
 * @method     ChildCpnLoadQuery orderByLchdschdpickupdate($order = Criteria::ASC) Order by the LchdSchdPickupDate column
 * @method     ChildCpnLoadQuery orderByLchdschdpickuptime($order = Criteria::ASC) Order by the LchdSchdPickupTime column
 * @method     ChildCpnLoadQuery orderByLchdexportdate($order = Criteria::ASC) Order by the LchdExportDate column
 * @method     ChildCpnLoadQuery orderByLchdexporttime($order = Criteria::ASC) Order by the LchdExportTime column
 * @method     ChildCpnLoadQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCpnLoadQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCpnLoadQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCpnLoadQuery groupByLchdloadnbr() Group by the LchdLoadNbr column
 * @method     ChildCpnLoadQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildCpnLoadQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCpnLoadQuery groupByLchdshipidfrom() Group by the LchdShipIdFrom column
 * @method     ChildCpnLoadQuery groupByLchdshipidthru() Group by the LchdShipIdThru column
 * @method     ChildCpnLoadQuery groupByLchdshipidthrusel() Group by the LchdShipIdThruSel column
 * @method     ChildCpnLoadQuery groupByLchdcustpofrom() Group by the LchdCustPoFrom column
 * @method     ChildCpnLoadQuery groupByLchdcustpothru() Group by the LchdCustPoThru column
 * @method     ChildCpnLoadQuery groupByLchdcustpothrusel() Group by the LchdCustPoThruSel column
 * @method     ChildCpnLoadQuery groupByLchdrqstdatefrom() Group by the LchdRqstDateFrom column
 * @method     ChildCpnLoadQuery groupByLchdrqstdatethru() Group by the LchdRqstDateThru column
 * @method     ChildCpnLoadQuery groupByLchdbol() Group by the LchdBol column
 * @method     ChildCpnLoadQuery groupByLchdpronbr() Group by the LchdProNbr column
 * @method     ChildCpnLoadQuery groupByLchdshipdate() Group by the LchdShipDate column
 * @method     ChildCpnLoadQuery groupByLchdnbrofskids() Group by the LchdNbrOfSkids column
 * @method     ChildCpnLoadQuery groupByLchdnbrofboxes() Group by the LchdNbrOfBoxes column
 * @method     ChildCpnLoadQuery groupByLchdtotwght() Group by the LchdTotWght column
 * @method     ChildCpnLoadQuery groupByLchdslctnbrofboxes() Group by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoadQuery groupByLchdslcttotwght() Group by the LchdSlctTotWght column
 * @method     ChildCpnLoadQuery groupByLchdschdpickupdate() Group by the LchdSchdPickupDate column
 * @method     ChildCpnLoadQuery groupByLchdschdpickuptime() Group by the LchdSchdPickupTime column
 * @method     ChildCpnLoadQuery groupByLchdexportdate() Group by the LchdExportDate column
 * @method     ChildCpnLoadQuery groupByLchdexporttime() Group by the LchdExportTime column
 * @method     ChildCpnLoadQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCpnLoadQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCpnLoadQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCpnLoadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCpnLoadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCpnLoadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCpnLoadQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCpnLoadQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCpnLoadQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCpnLoadQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildCpnLoadQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildCpnLoadQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildCpnLoadQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildCpnLoadQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildCpnLoadQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildCpnLoadQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildCpnLoadQuery leftJoinCpnLoadItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the CpnLoadItem relation
 * @method     ChildCpnLoadQuery rightJoinCpnLoadItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CpnLoadItem relation
 * @method     ChildCpnLoadQuery innerJoinCpnLoadItem($relationAlias = null) Adds a INNER JOIN clause to the query using the CpnLoadItem relation
 *
 * @method     ChildCpnLoadQuery joinWithCpnLoadItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CpnLoadItem relation
 *
 * @method     ChildCpnLoadQuery leftJoinWithCpnLoadItem() Adds a LEFT JOIN clause and with to the query using the CpnLoadItem relation
 * @method     ChildCpnLoadQuery rightJoinWithCpnLoadItem() Adds a RIGHT JOIN clause and with to the query using the CpnLoadItem relation
 * @method     ChildCpnLoadQuery innerJoinWithCpnLoadItem() Adds a INNER JOIN clause and with to the query using the CpnLoadItem relation
 *
 * @method     ChildCpnLoadQuery leftJoinCpnLoadOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the CpnLoadOrder relation
 * @method     ChildCpnLoadQuery rightJoinCpnLoadOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CpnLoadOrder relation
 * @method     ChildCpnLoadQuery innerJoinCpnLoadOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the CpnLoadOrder relation
 *
 * @method     ChildCpnLoadQuery joinWithCpnLoadOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CpnLoadOrder relation
 *
 * @method     ChildCpnLoadQuery leftJoinWithCpnLoadOrder() Adds a LEFT JOIN clause and with to the query using the CpnLoadOrder relation
 * @method     ChildCpnLoadQuery rightJoinWithCpnLoadOrder() Adds a RIGHT JOIN clause and with to the query using the CpnLoadOrder relation
 * @method     ChildCpnLoadQuery innerJoinWithCpnLoadOrder() Adds a INNER JOIN clause and with to the query using the CpnLoadOrder relation
 *
 * @method     \CustomerQuery|\CpnLoadItemQuery|\CpnLoadOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCpnLoad|null findOne(?ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query
 * @method     ChildCpnLoad findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query, or a new ChildCpnLoad object populated from the query conditions when no match is found
 *
 * @method     ChildCpnLoad|null findOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoad filtered by the LchdLoadNbr column
 * @method     ChildCpnLoad|null findOneByIntbwhse(string $IntbWhse) Return the first ChildCpnLoad filtered by the IntbWhse column
 * @method     ChildCpnLoad|null findOneByArcucustid(string $ArcuCustId) Return the first ChildCpnLoad filtered by the ArcuCustId column
 * @method     ChildCpnLoad|null findOneByLchdshipidfrom(string $LchdShipIdFrom) Return the first ChildCpnLoad filtered by the LchdShipIdFrom column
 * @method     ChildCpnLoad|null findOneByLchdshipidthru(string $LchdShipIdThru) Return the first ChildCpnLoad filtered by the LchdShipIdThru column
 * @method     ChildCpnLoad|null findOneByLchdshipidthrusel(string $LchdShipIdThruSel) Return the first ChildCpnLoad filtered by the LchdShipIdThruSel column
 * @method     ChildCpnLoad|null findOneByLchdcustpofrom(string $LchdCustPoFrom) Return the first ChildCpnLoad filtered by the LchdCustPoFrom column
 * @method     ChildCpnLoad|null findOneByLchdcustpothru(string $LchdCustPoThru) Return the first ChildCpnLoad filtered by the LchdCustPoThru column
 * @method     ChildCpnLoad|null findOneByLchdcustpothrusel(string $LchdCustPoThruSel) Return the first ChildCpnLoad filtered by the LchdCustPoThruSel column
 * @method     ChildCpnLoad|null findOneByLchdrqstdatefrom(string $LchdRqstDateFrom) Return the first ChildCpnLoad filtered by the LchdRqstDateFrom column
 * @method     ChildCpnLoad|null findOneByLchdrqstdatethru(string $LchdRqstDateThru) Return the first ChildCpnLoad filtered by the LchdRqstDateThru column
 * @method     ChildCpnLoad|null findOneByLchdbol(string $LchdBol) Return the first ChildCpnLoad filtered by the LchdBol column
 * @method     ChildCpnLoad|null findOneByLchdpronbr(string $LchdProNbr) Return the first ChildCpnLoad filtered by the LchdProNbr column
 * @method     ChildCpnLoad|null findOneByLchdshipdate(string $LchdShipDate) Return the first ChildCpnLoad filtered by the LchdShipDate column
 * @method     ChildCpnLoad|null findOneByLchdnbrofskids(int $LchdNbrOfSkids) Return the first ChildCpnLoad filtered by the LchdNbrOfSkids column
 * @method     ChildCpnLoad|null findOneByLchdnbrofboxes(int $LchdNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdNbrOfBoxes column
 * @method     ChildCpnLoad|null findOneByLchdtotwght(string $LchdTotWght) Return the first ChildCpnLoad filtered by the LchdTotWght column
 * @method     ChildCpnLoad|null findOneByLchdslctnbrofboxes(int $LchdSlctNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoad|null findOneByLchdslcttotwght(string $LchdSlctTotWght) Return the first ChildCpnLoad filtered by the LchdSlctTotWght column
 * @method     ChildCpnLoad|null findOneByLchdschdpickupdate(string $LchdSchdPickupDate) Return the first ChildCpnLoad filtered by the LchdSchdPickupDate column
 * @method     ChildCpnLoad|null findOneByLchdschdpickuptime(string $LchdSchdPickupTime) Return the first ChildCpnLoad filtered by the LchdSchdPickupTime column
 * @method     ChildCpnLoad|null findOneByLchdexportdate(string $LchdExportDate) Return the first ChildCpnLoad filtered by the LchdExportDate column
 * @method     ChildCpnLoad|null findOneByLchdexporttime(string $LchdExportTime) Return the first ChildCpnLoad filtered by the LchdExportTime column
 * @method     ChildCpnLoad|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoad filtered by the DateUpdtd column
 * @method     ChildCpnLoad|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoad filtered by the TimeUpdtd column
 * @method     ChildCpnLoad|null findOneByDummy(string $dummy) Return the first ChildCpnLoad filtered by the dummy column
 *
 * @method     ChildCpnLoad requirePk($key, ?ConnectionInterface $con = null) Return the ChildCpnLoad by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOne(?ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoad requireOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoad filtered by the LchdLoadNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByIntbwhse(string $IntbWhse) Return the first ChildCpnLoad filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByArcucustid(string $ArcuCustId) Return the first ChildCpnLoad filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdshipidfrom(string $LchdShipIdFrom) Return the first ChildCpnLoad filtered by the LchdShipIdFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdshipidthru(string $LchdShipIdThru) Return the first ChildCpnLoad filtered by the LchdShipIdThru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdshipidthrusel(string $LchdShipIdThruSel) Return the first ChildCpnLoad filtered by the LchdShipIdThruSel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdcustpofrom(string $LchdCustPoFrom) Return the first ChildCpnLoad filtered by the LchdCustPoFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdcustpothru(string $LchdCustPoThru) Return the first ChildCpnLoad filtered by the LchdCustPoThru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdcustpothrusel(string $LchdCustPoThruSel) Return the first ChildCpnLoad filtered by the LchdCustPoThruSel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdrqstdatefrom(string $LchdRqstDateFrom) Return the first ChildCpnLoad filtered by the LchdRqstDateFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdrqstdatethru(string $LchdRqstDateThru) Return the first ChildCpnLoad filtered by the LchdRqstDateThru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdbol(string $LchdBol) Return the first ChildCpnLoad filtered by the LchdBol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdpronbr(string $LchdProNbr) Return the first ChildCpnLoad filtered by the LchdProNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdshipdate(string $LchdShipDate) Return the first ChildCpnLoad filtered by the LchdShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdnbrofskids(int $LchdNbrOfSkids) Return the first ChildCpnLoad filtered by the LchdNbrOfSkids column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdnbrofboxes(int $LchdNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdNbrOfBoxes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdtotwght(string $LchdTotWght) Return the first ChildCpnLoad filtered by the LchdTotWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdslctnbrofboxes(int $LchdSlctNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdSlctNbrOfBoxes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdslcttotwght(string $LchdSlctTotWght) Return the first ChildCpnLoad filtered by the LchdSlctTotWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdschdpickupdate(string $LchdSchdPickupDate) Return the first ChildCpnLoad filtered by the LchdSchdPickupDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdschdpickuptime(string $LchdSchdPickupTime) Return the first ChildCpnLoad filtered by the LchdSchdPickupTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdexportdate(string $LchdExportDate) Return the first ChildCpnLoad filtered by the LchdExportDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByLchdexporttime(string $LchdExportTime) Return the first ChildCpnLoad filtered by the LchdExportTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoad filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoad filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOneByDummy(string $dummy) Return the first ChildCpnLoad filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoad[]|Collection find(?ConnectionInterface $con = null) Return ChildCpnLoad objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildCpnLoad> find(?ConnectionInterface $con = null) Return ChildCpnLoad objects based on current ModelCriteria
 *
 * @method     ChildCpnLoad[]|Collection findByLchdloadnbr(int|array<int> $LchdLoadNbr) Return ChildCpnLoad objects filtered by the LchdLoadNbr column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdloadnbr(int|array<int> $LchdLoadNbr) Return ChildCpnLoad objects filtered by the LchdLoadNbr column
 * @method     ChildCpnLoad[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildCpnLoad objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByIntbwhse(string|array<string> $IntbWhse) Return ChildCpnLoad objects filtered by the IntbWhse column
 * @method     ChildCpnLoad[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildCpnLoad objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByArcucustid(string|array<string> $ArcuCustId) Return ChildCpnLoad objects filtered by the ArcuCustId column
 * @method     ChildCpnLoad[]|Collection findByLchdshipidfrom(string|array<string> $LchdShipIdFrom) Return ChildCpnLoad objects filtered by the LchdShipIdFrom column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdshipidfrom(string|array<string> $LchdShipIdFrom) Return ChildCpnLoad objects filtered by the LchdShipIdFrom column
 * @method     ChildCpnLoad[]|Collection findByLchdshipidthru(string|array<string> $LchdShipIdThru) Return ChildCpnLoad objects filtered by the LchdShipIdThru column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdshipidthru(string|array<string> $LchdShipIdThru) Return ChildCpnLoad objects filtered by the LchdShipIdThru column
 * @method     ChildCpnLoad[]|Collection findByLchdshipidthrusel(string|array<string> $LchdShipIdThruSel) Return ChildCpnLoad objects filtered by the LchdShipIdThruSel column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdshipidthrusel(string|array<string> $LchdShipIdThruSel) Return ChildCpnLoad objects filtered by the LchdShipIdThruSel column
 * @method     ChildCpnLoad[]|Collection findByLchdcustpofrom(string|array<string> $LchdCustPoFrom) Return ChildCpnLoad objects filtered by the LchdCustPoFrom column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdcustpofrom(string|array<string> $LchdCustPoFrom) Return ChildCpnLoad objects filtered by the LchdCustPoFrom column
 * @method     ChildCpnLoad[]|Collection findByLchdcustpothru(string|array<string> $LchdCustPoThru) Return ChildCpnLoad objects filtered by the LchdCustPoThru column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdcustpothru(string|array<string> $LchdCustPoThru) Return ChildCpnLoad objects filtered by the LchdCustPoThru column
 * @method     ChildCpnLoad[]|Collection findByLchdcustpothrusel(string|array<string> $LchdCustPoThruSel) Return ChildCpnLoad objects filtered by the LchdCustPoThruSel column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdcustpothrusel(string|array<string> $LchdCustPoThruSel) Return ChildCpnLoad objects filtered by the LchdCustPoThruSel column
 * @method     ChildCpnLoad[]|Collection findByLchdrqstdatefrom(string|array<string> $LchdRqstDateFrom) Return ChildCpnLoad objects filtered by the LchdRqstDateFrom column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdrqstdatefrom(string|array<string> $LchdRqstDateFrom) Return ChildCpnLoad objects filtered by the LchdRqstDateFrom column
 * @method     ChildCpnLoad[]|Collection findByLchdrqstdatethru(string|array<string> $LchdRqstDateThru) Return ChildCpnLoad objects filtered by the LchdRqstDateThru column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdrqstdatethru(string|array<string> $LchdRqstDateThru) Return ChildCpnLoad objects filtered by the LchdRqstDateThru column
 * @method     ChildCpnLoad[]|Collection findByLchdbol(string|array<string> $LchdBol) Return ChildCpnLoad objects filtered by the LchdBol column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdbol(string|array<string> $LchdBol) Return ChildCpnLoad objects filtered by the LchdBol column
 * @method     ChildCpnLoad[]|Collection findByLchdpronbr(string|array<string> $LchdProNbr) Return ChildCpnLoad objects filtered by the LchdProNbr column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdpronbr(string|array<string> $LchdProNbr) Return ChildCpnLoad objects filtered by the LchdProNbr column
 * @method     ChildCpnLoad[]|Collection findByLchdshipdate(string|array<string> $LchdShipDate) Return ChildCpnLoad objects filtered by the LchdShipDate column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdshipdate(string|array<string> $LchdShipDate) Return ChildCpnLoad objects filtered by the LchdShipDate column
 * @method     ChildCpnLoad[]|Collection findByLchdnbrofskids(int|array<int> $LchdNbrOfSkids) Return ChildCpnLoad objects filtered by the LchdNbrOfSkids column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdnbrofskids(int|array<int> $LchdNbrOfSkids) Return ChildCpnLoad objects filtered by the LchdNbrOfSkids column
 * @method     ChildCpnLoad[]|Collection findByLchdnbrofboxes(int|array<int> $LchdNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdNbrOfBoxes column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdnbrofboxes(int|array<int> $LchdNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdNbrOfBoxes column
 * @method     ChildCpnLoad[]|Collection findByLchdtotwght(string|array<string> $LchdTotWght) Return ChildCpnLoad objects filtered by the LchdTotWght column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdtotwght(string|array<string> $LchdTotWght) Return ChildCpnLoad objects filtered by the LchdTotWght column
 * @method     ChildCpnLoad[]|Collection findByLchdslctnbrofboxes(int|array<int> $LchdSlctNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdSlctNbrOfBoxes column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdslctnbrofboxes(int|array<int> $LchdSlctNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoad[]|Collection findByLchdslcttotwght(string|array<string> $LchdSlctTotWght) Return ChildCpnLoad objects filtered by the LchdSlctTotWght column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdslcttotwght(string|array<string> $LchdSlctTotWght) Return ChildCpnLoad objects filtered by the LchdSlctTotWght column
 * @method     ChildCpnLoad[]|Collection findByLchdschdpickupdate(string|array<string> $LchdSchdPickupDate) Return ChildCpnLoad objects filtered by the LchdSchdPickupDate column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdschdpickupdate(string|array<string> $LchdSchdPickupDate) Return ChildCpnLoad objects filtered by the LchdSchdPickupDate column
 * @method     ChildCpnLoad[]|Collection findByLchdschdpickuptime(string|array<string> $LchdSchdPickupTime) Return ChildCpnLoad objects filtered by the LchdSchdPickupTime column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdschdpickuptime(string|array<string> $LchdSchdPickupTime) Return ChildCpnLoad objects filtered by the LchdSchdPickupTime column
 * @method     ChildCpnLoad[]|Collection findByLchdexportdate(string|array<string> $LchdExportDate) Return ChildCpnLoad objects filtered by the LchdExportDate column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdexportdate(string|array<string> $LchdExportDate) Return ChildCpnLoad objects filtered by the LchdExportDate column
 * @method     ChildCpnLoad[]|Collection findByLchdexporttime(string|array<string> $LchdExportTime) Return ChildCpnLoad objects filtered by the LchdExportTime column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByLchdexporttime(string|array<string> $LchdExportTime) Return ChildCpnLoad objects filtered by the LchdExportTime column
 * @method     ChildCpnLoad[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCpnLoad objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCpnLoad objects filtered by the DateUpdtd column
 * @method     ChildCpnLoad[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCpnLoad objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCpnLoad objects filtered by the TimeUpdtd column
 * @method     ChildCpnLoad[]|Collection findByDummy(string|array<string> $dummy) Return ChildCpnLoad objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildCpnLoad> findByDummy(string|array<string> $dummy) Return ChildCpnLoad objects filtered by the dummy column
 *
 * @method     ChildCpnLoad[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildCpnLoad> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class CpnLoadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CpnLoadQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CpnLoad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCpnLoadQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCpnLoadQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildCpnLoadQuery) {
            return $criteria;
        }
        $query = new ChildCpnLoadQuery();
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
     * @return ChildCpnLoad|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CpnLoadTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCpnLoad A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT LchdLoadNbr, IntbWhse, ArcuCustId, LchdShipIdFrom, LchdShipIdThru, LchdShipIdThruSel, LchdCustPoFrom, LchdCustPoThru, LchdCustPoThruSel, LchdRqstDateFrom, LchdRqstDateThru, LchdBol, LchdProNbr, LchdShipDate, LchdNbrOfSkids, LchdNbrOfBoxes, LchdTotWght, LchdSlctNbrOfBoxes, LchdSlctTotWght, LchdSchdPickupDate, LchdSchdPickupTime, LchdExportDate, LchdExportTime, DateUpdtd, TimeUpdtd, dummy FROM load_cpn_header WHERE LchdLoadNbr = :p0';
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
            /** @var ChildCpnLoad $obj */
            $obj = new ChildCpnLoad();
            $obj->hydrate($row);
            CpnLoadTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCpnLoad|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $keys, Criteria::IN);

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
     * @param mixed $lchdloadnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdloadnbr($lchdloadnbr = null, ?string $comparison = null)
    {
        if (is_array($lchdloadnbr)) {
            $useMinMax = false;
            if (isset($lchdloadnbr['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $lchdloadnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdloadnbr['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $lchdloadnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $lchdloadnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * $query->filterByIntbwhse(['foo', 'bar']); // WHERE IntbWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdShipIdFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidfrom('fooValue');   // WHERE LchdShipIdFrom = 'fooValue'
     * $query->filterByLchdshipidfrom('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdFrom LIKE '%fooValue%'
     * $query->filterByLchdshipidfrom(['foo', 'bar']); // WHERE LchdShipIdFrom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdshipidfrom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdshipidfrom($lchdshipidfrom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidfrom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDFROM, $lchdshipidfrom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdShipIdThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidthru('fooValue');   // WHERE LchdShipIdThru = 'fooValue'
     * $query->filterByLchdshipidthru('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdThru LIKE '%fooValue%'
     * $query->filterByLchdshipidthru(['foo', 'bar']); // WHERE LchdShipIdThru IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdshipidthru The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdshipidthru($lchdshipidthru = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidthru)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDTHRU, $lchdshipidthru, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdShipIdThruSel column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidthrusel('fooValue');   // WHERE LchdShipIdThruSel = 'fooValue'
     * $query->filterByLchdshipidthrusel('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdThruSel LIKE '%fooValue%'
     * $query->filterByLchdshipidthrusel(['foo', 'bar']); // WHERE LchdShipIdThruSel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdshipidthrusel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdshipidthrusel($lchdshipidthrusel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidthrusel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL, $lchdshipidthrusel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdCustPoFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpofrom('fooValue');   // WHERE LchdCustPoFrom = 'fooValue'
     * $query->filterByLchdcustpofrom('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoFrom LIKE '%fooValue%'
     * $query->filterByLchdcustpofrom(['foo', 'bar']); // WHERE LchdCustPoFrom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdcustpofrom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdcustpofrom($lchdcustpofrom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpofrom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOFROM, $lchdcustpofrom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdCustPoThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpothru('fooValue');   // WHERE LchdCustPoThru = 'fooValue'
     * $query->filterByLchdcustpothru('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoThru LIKE '%fooValue%'
     * $query->filterByLchdcustpothru(['foo', 'bar']); // WHERE LchdCustPoThru IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdcustpothru The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdcustpothru($lchdcustpothru = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpothru)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOTHRU, $lchdcustpothru, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdCustPoThruSel column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpothrusel('fooValue');   // WHERE LchdCustPoThruSel = 'fooValue'
     * $query->filterByLchdcustpothrusel('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoThruSel LIKE '%fooValue%'
     * $query->filterByLchdcustpothrusel(['foo', 'bar']); // WHERE LchdCustPoThruSel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdcustpothrusel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdcustpothrusel($lchdcustpothrusel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpothrusel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL, $lchdcustpothrusel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdRqstDateFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdrqstdatefrom('fooValue');   // WHERE LchdRqstDateFrom = 'fooValue'
     * $query->filterByLchdrqstdatefrom('%fooValue%', Criteria::LIKE); // WHERE LchdRqstDateFrom LIKE '%fooValue%'
     * $query->filterByLchdrqstdatefrom(['foo', 'bar']); // WHERE LchdRqstDateFrom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdrqstdatefrom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdrqstdatefrom($lchdrqstdatefrom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdrqstdatefrom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDRQSTDATEFROM, $lchdrqstdatefrom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdRqstDateThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdrqstdatethru('fooValue');   // WHERE LchdRqstDateThru = 'fooValue'
     * $query->filterByLchdrqstdatethru('%fooValue%', Criteria::LIKE); // WHERE LchdRqstDateThru LIKE '%fooValue%'
     * $query->filterByLchdrqstdatethru(['foo', 'bar']); // WHERE LchdRqstDateThru IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdrqstdatethru The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdrqstdatethru($lchdrqstdatethru = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdrqstdatethru)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDRQSTDATETHRU, $lchdrqstdatethru, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdBol column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdbol('fooValue');   // WHERE LchdBol = 'fooValue'
     * $query->filterByLchdbol('%fooValue%', Criteria::LIKE); // WHERE LchdBol LIKE '%fooValue%'
     * $query->filterByLchdbol(['foo', 'bar']); // WHERE LchdBol IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdbol The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdbol($lchdbol = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdbol)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDBOL, $lchdbol, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdProNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdpronbr('fooValue');   // WHERE LchdProNbr = 'fooValue'
     * $query->filterByLchdpronbr('%fooValue%', Criteria::LIKE); // WHERE LchdProNbr LIKE '%fooValue%'
     * $query->filterByLchdpronbr(['foo', 'bar']); // WHERE LchdProNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdpronbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdpronbr($lchdpronbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdpronbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDPRONBR, $lchdpronbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipdate('fooValue');   // WHERE LchdShipDate = 'fooValue'
     * $query->filterByLchdshipdate('%fooValue%', Criteria::LIKE); // WHERE LchdShipDate LIKE '%fooValue%'
     * $query->filterByLchdshipdate(['foo', 'bar']); // WHERE LchdShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdshipdate($lchdshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPDATE, $lchdshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdNbrOfSkids column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdnbrofskids(1234); // WHERE LchdNbrOfSkids = 1234
     * $query->filterByLchdnbrofskids(array(12, 34)); // WHERE LchdNbrOfSkids IN (12, 34)
     * $query->filterByLchdnbrofskids(array('min' => 12)); // WHERE LchdNbrOfSkids > 12
     * </code>
     *
     * @param mixed $lchdnbrofskids The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdnbrofskids($lchdnbrofskids = null, ?string $comparison = null)
    {
        if (is_array($lchdnbrofskids)) {
            $useMinMax = false;
            if (isset($lchdnbrofskids['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFSKIDS, $lchdnbrofskids['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdnbrofskids['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFSKIDS, $lchdnbrofskids['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFSKIDS, $lchdnbrofskids, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdNbrOfBoxes column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdnbrofboxes(1234); // WHERE LchdNbrOfBoxes = 1234
     * $query->filterByLchdnbrofboxes(array(12, 34)); // WHERE LchdNbrOfBoxes IN (12, 34)
     * $query->filterByLchdnbrofboxes(array('min' => 12)); // WHERE LchdNbrOfBoxes > 12
     * </code>
     *
     * @param mixed $lchdnbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdnbrofboxes($lchdnbrofboxes = null, ?string $comparison = null)
    {
        if (is_array($lchdnbrofboxes)) {
            $useMinMax = false;
            if (isset($lchdnbrofboxes['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFBOXES, $lchdnbrofboxes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdnbrofboxes['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFBOXES, $lchdnbrofboxes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFBOXES, $lchdnbrofboxes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdTotWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdtotwght(1234); // WHERE LchdTotWght = 1234
     * $query->filterByLchdtotwght(array(12, 34)); // WHERE LchdTotWght IN (12, 34)
     * $query->filterByLchdtotwght(array('min' => 12)); // WHERE LchdTotWght > 12
     * </code>
     *
     * @param mixed $lchdtotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdtotwght($lchdtotwght = null, ?string $comparison = null)
    {
        if (is_array($lchdtotwght)) {
            $useMinMax = false;
            if (isset($lchdtotwght['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDTOTWGHT, $lchdtotwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdtotwght['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDTOTWGHT, $lchdtotwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDTOTWGHT, $lchdtotwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdSlctNbrOfBoxes column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdslctnbrofboxes(1234); // WHERE LchdSlctNbrOfBoxes = 1234
     * $query->filterByLchdslctnbrofboxes(array(12, 34)); // WHERE LchdSlctNbrOfBoxes IN (12, 34)
     * $query->filterByLchdslctnbrofboxes(array('min' => 12)); // WHERE LchdSlctNbrOfBoxes > 12
     * </code>
     *
     * @param mixed $lchdslctnbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdslctnbrofboxes($lchdslctnbrofboxes = null, ?string $comparison = null)
    {
        if (is_array($lchdslctnbrofboxes)) {
            $useMinMax = false;
            if (isset($lchdslctnbrofboxes['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, $lchdslctnbrofboxes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdslctnbrofboxes['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, $lchdslctnbrofboxes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, $lchdslctnbrofboxes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdSlctTotWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdslcttotwght(1234); // WHERE LchdSlctTotWght = 1234
     * $query->filterByLchdslcttotwght(array(12, 34)); // WHERE LchdSlctTotWght IN (12, 34)
     * $query->filterByLchdslcttotwght(array('min' => 12)); // WHERE LchdSlctTotWght > 12
     * </code>
     *
     * @param mixed $lchdslcttotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdslcttotwght($lchdslcttotwght = null, ?string $comparison = null)
    {
        if (is_array($lchdslcttotwght)) {
            $useMinMax = false;
            if (isset($lchdslcttotwght['min'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, $lchdslcttotwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdslcttotwght['max'])) {
                $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, $lchdslcttotwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, $lchdslcttotwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdSchdPickupDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdschdpickupdate('fooValue');   // WHERE LchdSchdPickupDate = 'fooValue'
     * $query->filterByLchdschdpickupdate('%fooValue%', Criteria::LIKE); // WHERE LchdSchdPickupDate LIKE '%fooValue%'
     * $query->filterByLchdschdpickupdate(['foo', 'bar']); // WHERE LchdSchdPickupDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdschdpickupdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdschdpickupdate($lchdschdpickupdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdschdpickupdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE, $lchdschdpickupdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdSchdPickupTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdschdpickuptime('fooValue');   // WHERE LchdSchdPickupTime = 'fooValue'
     * $query->filterByLchdschdpickuptime('%fooValue%', Criteria::LIKE); // WHERE LchdSchdPickupTime LIKE '%fooValue%'
     * $query->filterByLchdschdpickuptime(['foo', 'bar']); // WHERE LchdSchdPickupTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdschdpickuptime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdschdpickuptime($lchdschdpickuptime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdschdpickuptime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME, $lchdschdpickuptime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdExportDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdexportdate('fooValue');   // WHERE LchdExportDate = 'fooValue'
     * $query->filterByLchdexportdate('%fooValue%', Criteria::LIKE); // WHERE LchdExportDate LIKE '%fooValue%'
     * $query->filterByLchdexportdate(['foo', 'bar']); // WHERE LchdExportDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdexportdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdexportdate($lchdexportdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdexportdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDEXPORTDATE, $lchdexportdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LchdExportTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdexporttime('fooValue');   // WHERE LchdExportTime = 'fooValue'
     * $query->filterByLchdexporttime('%fooValue%', Criteria::LIKE); // WHERE LchdExportTime LIKE '%fooValue%'
     * $query->filterByLchdexporttime(['foo', 'bar']); // WHERE LchdExportTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lchdexporttime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLchdexporttime($lchdexporttime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdexporttime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CpnLoadTableMap::COL_LCHDEXPORTTIME, $lchdexporttime, $comparison);

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

        $this->addUsingAlias(CpnLoadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(CpnLoadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(CpnLoadTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CpnLoadItem object
     *
     * @param \CpnLoadItem|ObjectCollection $cpnLoadItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCpnLoadItem($cpnLoadItem, ?string $comparison = null)
    {
        if ($cpnLoadItem instanceof \CpnLoadItem) {
            $this
                ->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $cpnLoadItem->getLchdloadnbr(), $comparison);

            return $this;
        } elseif ($cpnLoadItem instanceof ObjectCollection) {
            $this
                ->useCpnLoadItemQuery()
                ->filterByPrimaryKeys($cpnLoadItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByCpnLoadItem() only accepts arguments of type \CpnLoadItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoadItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCpnLoadItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CpnLoadItem');

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
            $this->addJoinObject($join, 'CpnLoadItem');
        }

        return $this;
    }

    /**
     * Use the CpnLoadItem relation CpnLoadItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CpnLoadItemQuery A secondary query class using the current class as primary query
     */
    public function useCpnLoadItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCpnLoadItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CpnLoadItem', '\CpnLoadItemQuery');
    }

    /**
     * Use the CpnLoadItem relation CpnLoadItem object
     *
     * @param callable(\CpnLoadItemQuery):\CpnLoadItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCpnLoadItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCpnLoadItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CpnLoadItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CpnLoadItemQuery The inner query object of the EXISTS statement
     */
    public function useCpnLoadItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CpnLoadItemQuery */
        $q = $this->useExistsQuery('CpnLoadItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CpnLoadItem table for a NOT EXISTS query.
     *
     * @see useCpnLoadItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CpnLoadItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useCpnLoadItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CpnLoadItemQuery */
        $q = $this->useExistsQuery('CpnLoadItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CpnLoadItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CpnLoadItemQuery The inner query object of the IN statement
     */
    public function useInCpnLoadItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CpnLoadItemQuery */
        $q = $this->useInQuery('CpnLoadItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CpnLoadItem table for a NOT IN query.
     *
     * @see useCpnLoadItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CpnLoadItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInCpnLoadItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CpnLoadItemQuery */
        $q = $this->useInQuery('CpnLoadItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CpnLoadOrder object
     *
     * @param \CpnLoadOrder|ObjectCollection $cpnLoadOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCpnLoadOrder($cpnLoadOrder, ?string $comparison = null)
    {
        if ($cpnLoadOrder instanceof \CpnLoadOrder) {
            $this
                ->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $cpnLoadOrder->getLchdloadnbr(), $comparison);

            return $this;
        } elseif ($cpnLoadOrder instanceof ObjectCollection) {
            $this
                ->useCpnLoadOrderQuery()
                ->filterByPrimaryKeys($cpnLoadOrder->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByCpnLoadOrder() only accepts arguments of type \CpnLoadOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoadOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCpnLoadOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CpnLoadOrder');

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
            $this->addJoinObject($join, 'CpnLoadOrder');
        }

        return $this;
    }

    /**
     * Use the CpnLoadOrder relation CpnLoadOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CpnLoadOrderQuery A secondary query class using the current class as primary query
     */
    public function useCpnLoadOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCpnLoadOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CpnLoadOrder', '\CpnLoadOrderQuery');
    }

    /**
     * Use the CpnLoadOrder relation CpnLoadOrder object
     *
     * @param callable(\CpnLoadOrderQuery):\CpnLoadOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCpnLoadOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCpnLoadOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CpnLoadOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CpnLoadOrderQuery The inner query object of the EXISTS statement
     */
    public function useCpnLoadOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CpnLoadOrderQuery */
        $q = $this->useExistsQuery('CpnLoadOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CpnLoadOrder table for a NOT EXISTS query.
     *
     * @see useCpnLoadOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CpnLoadOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useCpnLoadOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CpnLoadOrderQuery */
        $q = $this->useExistsQuery('CpnLoadOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CpnLoadOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CpnLoadOrderQuery The inner query object of the IN statement
     */
    public function useInCpnLoadOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CpnLoadOrderQuery */
        $q = $this->useInQuery('CpnLoadOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CpnLoadOrder table for a NOT IN query.
     *
     * @see useCpnLoadOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CpnLoadOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInCpnLoadOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CpnLoadOrderQuery */
        $q = $this->useInQuery('CpnLoadOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildCpnLoad $cpnLoad Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($cpnLoad = null)
    {
        if ($cpnLoad) {
            $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $cpnLoad->getLchdloadnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the load_cpn_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CpnLoadTableMap::clearInstancePool();
            CpnLoadTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CpnLoadTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CpnLoadTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CpnLoadTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
