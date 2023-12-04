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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'load_cpn_header' table.
 *
 *
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
 * @method     ChildCpnLoad findOne(ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query
 * @method     ChildCpnLoad findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query, or a new ChildCpnLoad object populated from the query conditions when no match is found
 *
 * @method     ChildCpnLoad findOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoad filtered by the LchdLoadNbr column
 * @method     ChildCpnLoad findOneByIntbwhse(string $IntbWhse) Return the first ChildCpnLoad filtered by the IntbWhse column
 * @method     ChildCpnLoad findOneByArcucustid(string $ArcuCustId) Return the first ChildCpnLoad filtered by the ArcuCustId column
 * @method     ChildCpnLoad findOneByLchdshipidfrom(string $LchdShipIdFrom) Return the first ChildCpnLoad filtered by the LchdShipIdFrom column
 * @method     ChildCpnLoad findOneByLchdshipidthru(string $LchdShipIdThru) Return the first ChildCpnLoad filtered by the LchdShipIdThru column
 * @method     ChildCpnLoad findOneByLchdshipidthrusel(string $LchdShipIdThruSel) Return the first ChildCpnLoad filtered by the LchdShipIdThruSel column
 * @method     ChildCpnLoad findOneByLchdcustpofrom(string $LchdCustPoFrom) Return the first ChildCpnLoad filtered by the LchdCustPoFrom column
 * @method     ChildCpnLoad findOneByLchdcustpothru(string $LchdCustPoThru) Return the first ChildCpnLoad filtered by the LchdCustPoThru column
 * @method     ChildCpnLoad findOneByLchdcustpothrusel(string $LchdCustPoThruSel) Return the first ChildCpnLoad filtered by the LchdCustPoThruSel column
 * @method     ChildCpnLoad findOneByLchdrqstdatefrom(string $LchdRqstDateFrom) Return the first ChildCpnLoad filtered by the LchdRqstDateFrom column
 * @method     ChildCpnLoad findOneByLchdrqstdatethru(string $LchdRqstDateThru) Return the first ChildCpnLoad filtered by the LchdRqstDateThru column
 * @method     ChildCpnLoad findOneByLchdbol(string $LchdBol) Return the first ChildCpnLoad filtered by the LchdBol column
 * @method     ChildCpnLoad findOneByLchdpronbr(string $LchdProNbr) Return the first ChildCpnLoad filtered by the LchdProNbr column
 * @method     ChildCpnLoad findOneByLchdshipdate(string $LchdShipDate) Return the first ChildCpnLoad filtered by the LchdShipDate column
 * @method     ChildCpnLoad findOneByLchdnbrofskids(int $LchdNbrOfSkids) Return the first ChildCpnLoad filtered by the LchdNbrOfSkids column
 * @method     ChildCpnLoad findOneByLchdnbrofboxes(int $LchdNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdNbrOfBoxes column
 * @method     ChildCpnLoad findOneByLchdtotwght(string $LchdTotWght) Return the first ChildCpnLoad filtered by the LchdTotWght column
 * @method     ChildCpnLoad findOneByLchdslctnbrofboxes(int $LchdSlctNbrOfBoxes) Return the first ChildCpnLoad filtered by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoad findOneByLchdslcttotwght(string $LchdSlctTotWght) Return the first ChildCpnLoad filtered by the LchdSlctTotWght column
 * @method     ChildCpnLoad findOneByLchdschdpickupdate(string $LchdSchdPickupDate) Return the first ChildCpnLoad filtered by the LchdSchdPickupDate column
 * @method     ChildCpnLoad findOneByLchdschdpickuptime(string $LchdSchdPickupTime) Return the first ChildCpnLoad filtered by the LchdSchdPickupTime column
 * @method     ChildCpnLoad findOneByLchdexportdate(string $LchdExportDate) Return the first ChildCpnLoad filtered by the LchdExportDate column
 * @method     ChildCpnLoad findOneByLchdexporttime(string $LchdExportTime) Return the first ChildCpnLoad filtered by the LchdExportTime column
 * @method     ChildCpnLoad findOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoad filtered by the DateUpdtd column
 * @method     ChildCpnLoad findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoad filtered by the TimeUpdtd column
 * @method     ChildCpnLoad findOneByDummy(string $dummy) Return the first ChildCpnLoad filtered by the dummy column *

 * @method     ChildCpnLoad requirePk($key, ConnectionInterface $con = null) Return the ChildCpnLoad by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoad requireOne(ConnectionInterface $con = null) Return the first ChildCpnLoad matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildCpnLoad[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCpnLoad objects based on current ModelCriteria
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdloadnbr(int $LchdLoadNbr) Return ChildCpnLoad objects filtered by the LchdLoadNbr column
 * @method     ChildCpnLoad[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildCpnLoad objects filtered by the IntbWhse column
 * @method     ChildCpnLoad[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCpnLoad objects filtered by the ArcuCustId column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdshipidfrom(string $LchdShipIdFrom) Return ChildCpnLoad objects filtered by the LchdShipIdFrom column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdshipidthru(string $LchdShipIdThru) Return ChildCpnLoad objects filtered by the LchdShipIdThru column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdshipidthrusel(string $LchdShipIdThruSel) Return ChildCpnLoad objects filtered by the LchdShipIdThruSel column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdcustpofrom(string $LchdCustPoFrom) Return ChildCpnLoad objects filtered by the LchdCustPoFrom column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdcustpothru(string $LchdCustPoThru) Return ChildCpnLoad objects filtered by the LchdCustPoThru column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdcustpothrusel(string $LchdCustPoThruSel) Return ChildCpnLoad objects filtered by the LchdCustPoThruSel column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdrqstdatefrom(string $LchdRqstDateFrom) Return ChildCpnLoad objects filtered by the LchdRqstDateFrom column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdrqstdatethru(string $LchdRqstDateThru) Return ChildCpnLoad objects filtered by the LchdRqstDateThru column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdbol(string $LchdBol) Return ChildCpnLoad objects filtered by the LchdBol column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdpronbr(string $LchdProNbr) Return ChildCpnLoad objects filtered by the LchdProNbr column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdshipdate(string $LchdShipDate) Return ChildCpnLoad objects filtered by the LchdShipDate column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdnbrofskids(int $LchdNbrOfSkids) Return ChildCpnLoad objects filtered by the LchdNbrOfSkids column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdnbrofboxes(int $LchdNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdNbrOfBoxes column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdtotwght(string $LchdTotWght) Return ChildCpnLoad objects filtered by the LchdTotWght column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdslctnbrofboxes(int $LchdSlctNbrOfBoxes) Return ChildCpnLoad objects filtered by the LchdSlctNbrOfBoxes column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdslcttotwght(string $LchdSlctTotWght) Return ChildCpnLoad objects filtered by the LchdSlctTotWght column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdschdpickupdate(string $LchdSchdPickupDate) Return ChildCpnLoad objects filtered by the LchdSchdPickupDate column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdschdpickuptime(string $LchdSchdPickupTime) Return ChildCpnLoad objects filtered by the LchdSchdPickupTime column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdexportdate(string $LchdExportDate) Return ChildCpnLoad objects filtered by the LchdExportDate column
 * @method     ChildCpnLoad[]|ObjectCollection findByLchdexporttime(string $LchdExportTime) Return ChildCpnLoad objects filtered by the LchdExportTime column
 * @method     ChildCpnLoad[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCpnLoad objects filtered by the DateUpdtd column
 * @method     ChildCpnLoad[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCpnLoad objects filtered by the TimeUpdtd column
 * @method     ChildCpnLoad[]|ObjectCollection findByDummy(string $dummy) Return ChildCpnLoad objects filtered by the dummy column
 * @method     ChildCpnLoad[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CpnLoadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CpnLoadQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CpnLoad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCpnLoadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCpnLoadQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $keys, Criteria::IN);
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
     * @param     mixed $lchdloadnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdloadnbr($lchdloadnbr = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $lchdloadnbr, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the LchdShipIdFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidfrom('fooValue');   // WHERE LchdShipIdFrom = 'fooValue'
     * $query->filterByLchdshipidfrom('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdshipidfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdshipidfrom($lchdshipidfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDFROM, $lchdshipidfrom, $comparison);
    }

    /**
     * Filter the query on the LchdShipIdThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidthru('fooValue');   // WHERE LchdShipIdThru = 'fooValue'
     * $query->filterByLchdshipidthru('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdThru LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdshipidthru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdshipidthru($lchdshipidthru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidthru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDTHRU, $lchdshipidthru, $comparison);
    }

    /**
     * Filter the query on the LchdShipIdThruSel column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipidthrusel('fooValue');   // WHERE LchdShipIdThruSel = 'fooValue'
     * $query->filterByLchdshipidthrusel('%fooValue%', Criteria::LIKE); // WHERE LchdShipIdThruSel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdshipidthrusel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdshipidthrusel($lchdshipidthrusel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipidthrusel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPIDTHRUSEL, $lchdshipidthrusel, $comparison);
    }

    /**
     * Filter the query on the LchdCustPoFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpofrom('fooValue');   // WHERE LchdCustPoFrom = 'fooValue'
     * $query->filterByLchdcustpofrom('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdcustpofrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdcustpofrom($lchdcustpofrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpofrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOFROM, $lchdcustpofrom, $comparison);
    }

    /**
     * Filter the query on the LchdCustPoThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpothru('fooValue');   // WHERE LchdCustPoThru = 'fooValue'
     * $query->filterByLchdcustpothru('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoThru LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdcustpothru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdcustpothru($lchdcustpothru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpothru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOTHRU, $lchdcustpothru, $comparison);
    }

    /**
     * Filter the query on the LchdCustPoThruSel column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdcustpothrusel('fooValue');   // WHERE LchdCustPoThruSel = 'fooValue'
     * $query->filterByLchdcustpothrusel('%fooValue%', Criteria::LIKE); // WHERE LchdCustPoThruSel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdcustpothrusel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdcustpothrusel($lchdcustpothrusel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdcustpothrusel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDCUSTPOTHRUSEL, $lchdcustpothrusel, $comparison);
    }

    /**
     * Filter the query on the LchdRqstDateFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdrqstdatefrom('fooValue');   // WHERE LchdRqstDateFrom = 'fooValue'
     * $query->filterByLchdrqstdatefrom('%fooValue%', Criteria::LIKE); // WHERE LchdRqstDateFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdrqstdatefrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdrqstdatefrom($lchdrqstdatefrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdrqstdatefrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDRQSTDATEFROM, $lchdrqstdatefrom, $comparison);
    }

    /**
     * Filter the query on the LchdRqstDateThru column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdrqstdatethru('fooValue');   // WHERE LchdRqstDateThru = 'fooValue'
     * $query->filterByLchdrqstdatethru('%fooValue%', Criteria::LIKE); // WHERE LchdRqstDateThru LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdrqstdatethru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdrqstdatethru($lchdrqstdatethru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdrqstdatethru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDRQSTDATETHRU, $lchdrqstdatethru, $comparison);
    }

    /**
     * Filter the query on the LchdBol column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdbol('fooValue');   // WHERE LchdBol = 'fooValue'
     * $query->filterByLchdbol('%fooValue%', Criteria::LIKE); // WHERE LchdBol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdbol The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdbol($lchdbol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdbol)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDBOL, $lchdbol, $comparison);
    }

    /**
     * Filter the query on the LchdProNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdpronbr('fooValue');   // WHERE LchdProNbr = 'fooValue'
     * $query->filterByLchdpronbr('%fooValue%', Criteria::LIKE); // WHERE LchdProNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdpronbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdpronbr($lchdpronbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdpronbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDPRONBR, $lchdpronbr, $comparison);
    }

    /**
     * Filter the query on the LchdShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdshipdate('fooValue');   // WHERE LchdShipDate = 'fooValue'
     * $query->filterByLchdshipdate('%fooValue%', Criteria::LIKE); // WHERE LchdShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdshipdate($lchdshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSHIPDATE, $lchdshipdate, $comparison);
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
     * @param     mixed $lchdnbrofskids The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdnbrofskids($lchdnbrofskids = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFSKIDS, $lchdnbrofskids, $comparison);
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
     * @param     mixed $lchdnbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdnbrofboxes($lchdnbrofboxes = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDNBROFBOXES, $lchdnbrofboxes, $comparison);
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
     * @param     mixed $lchdtotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdtotwght($lchdtotwght = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDTOTWGHT, $lchdtotwght, $comparison);
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
     * @param     mixed $lchdslctnbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdslctnbrofboxes($lchdslctnbrofboxes = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTNBROFBOXES, $lchdslctnbrofboxes, $comparison);
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
     * @param     mixed $lchdslcttotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdslcttotwght($lchdslcttotwght = null, $comparison = null)
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

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSLCTTOTWGHT, $lchdslcttotwght, $comparison);
    }

    /**
     * Filter the query on the LchdSchdPickupDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdschdpickupdate('fooValue');   // WHERE LchdSchdPickupDate = 'fooValue'
     * $query->filterByLchdschdpickupdate('%fooValue%', Criteria::LIKE); // WHERE LchdSchdPickupDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdschdpickupdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdschdpickupdate($lchdschdpickupdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdschdpickupdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSCHDPICKUPDATE, $lchdschdpickupdate, $comparison);
    }

    /**
     * Filter the query on the LchdSchdPickupTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdschdpickuptime('fooValue');   // WHERE LchdSchdPickupTime = 'fooValue'
     * $query->filterByLchdschdpickuptime('%fooValue%', Criteria::LIKE); // WHERE LchdSchdPickupTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdschdpickuptime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdschdpickuptime($lchdschdpickuptime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdschdpickuptime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDSCHDPICKUPTIME, $lchdschdpickuptime, $comparison);
    }

    /**
     * Filter the query on the LchdExportDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdexportdate('fooValue');   // WHERE LchdExportDate = 'fooValue'
     * $query->filterByLchdexportdate('%fooValue%', Criteria::LIKE); // WHERE LchdExportDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdexportdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdexportdate($lchdexportdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdexportdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDEXPORTDATE, $lchdexportdate, $comparison);
    }

    /**
     * Filter the query on the LchdExportTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdexporttime('fooValue');   // WHERE LchdExportTime = 'fooValue'
     * $query->filterByLchdexporttime('%fooValue%', Criteria::LIKE); // WHERE LchdExportTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lchdexporttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByLchdexporttime($lchdexporttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lchdexporttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_LCHDEXPORTTIME, $lchdexporttime, $comparison);
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CpnLoadTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
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
     * Filter the query by a related \CpnLoadItem object
     *
     * @param \CpnLoadItem|ObjectCollection $cpnLoadItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByCpnLoadItem($cpnLoadItem, $comparison = null)
    {
        if ($cpnLoadItem instanceof \CpnLoadItem) {
            return $this
                ->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $cpnLoadItem->getLchdloadnbr(), $comparison);
        } elseif ($cpnLoadItem instanceof ObjectCollection) {
            return $this
                ->useCpnLoadItemQuery()
                ->filterByPrimaryKeys($cpnLoadItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCpnLoadItem() only accepts arguments of type \CpnLoadItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoadItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function joinCpnLoadItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \CpnLoadOrder object
     *
     * @param \CpnLoadOrder|ObjectCollection $cpnLoadOrder the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCpnLoadQuery The current query, for fluid interface
     */
    public function filterByCpnLoadOrder($cpnLoadOrder, $comparison = null)
    {
        if ($cpnLoadOrder instanceof \CpnLoadOrder) {
            return $this
                ->addUsingAlias(CpnLoadTableMap::COL_LCHDLOADNBR, $cpnLoadOrder->getLchdloadnbr(), $comparison);
        } elseif ($cpnLoadOrder instanceof ObjectCollection) {
            return $this
                ->useCpnLoadOrderQuery()
                ->filterByPrimaryKeys($cpnLoadOrder->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCpnLoadOrder() only accepts arguments of type \CpnLoadOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoadOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
     */
    public function joinCpnLoadOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildCpnLoad $cpnLoad Object to remove from the list of results
     *
     * @return $this|ChildCpnLoadQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // CpnLoadQuery
