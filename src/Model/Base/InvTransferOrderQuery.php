<?php

namespace Base;

use \InvTransferOrder as ChildInvTransferOrder;
use \InvTransferOrderQuery as ChildInvTransferOrderQuery;
use \Exception;
use \PDO;
use Map\InvTransferOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trans_head' table.
 *
 *
 *
 * @method     ChildInvTransferOrderQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildInvTransferOrderQuery orderByInhdstat($order = Criteria::ASC) Order by the InhdStat column
 * @method     ChildInvTransferOrderQuery orderByIntbwhsefrom($order = Criteria::ASC) Order by the IntbWhseFrom column
 * @method     ChildInvTransferOrderQuery orderByIntbwhseto($order = Criteria::ASC) Order by the IntbWhseTo column
 * @method     ChildInvTransferOrderQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildInvTransferOrderQuery orderByInhdentdate($order = Criteria::ASC) Order by the InhdEntDate column
 * @method     ChildInvTransferOrderQuery orderByInhdref($order = Criteria::ASC) Order by the InhdRef column
 * @method     ChildInvTransferOrderQuery orderByInhdpickdate($order = Criteria::ASC) Order by the InhdPickDate column
 * @method     ChildInvTransferOrderQuery orderByInhdpicktime($order = Criteria::ASC) Order by the InhdPickTime column
 * @method     ChildInvTransferOrderQuery orderByInhdtimespick($order = Criteria::ASC) Order by the InhdTimesPick column
 * @method     ChildInvTransferOrderQuery orderByInhdcrntuser($order = Criteria::ASC) Order by the InhdCrntUser column
 * @method     ChildInvTransferOrderQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildInvTransferOrderQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildInvTransferOrderQuery orderByInhddept($order = Criteria::ASC) Order by the InhdDept column
 * @method     ChildInvTransferOrderQuery orderByInhdpllt($order = Criteria::ASC) Order by the InhdPllt column
 * @method     ChildInvTransferOrderQuery orderByInhdcntrqty($order = Criteria::ASC) Order by the InhdCntrQty column
 * @method     ChildInvTransferOrderQuery orderByInhdwghttot($order = Criteria::ASC) Order by the InhdWghtTot column
 * @method     ChildInvTransferOrderQuery orderByInhdtracknbr($order = Criteria::ASC) Order by the InhdTrackNbr column
 * @method     ChildInvTransferOrderQuery orderByInhdpickqueue($order = Criteria::ASC) Order by the InhdPickQueue column
 * @method     ChildInvTransferOrderQuery orderByInhdshipqueue($order = Criteria::ASC) Order by the InhdShipQueue column
 * @method     ChildInvTransferOrderQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildInvTransferOrderQuery orderByInhdftvend($order = Criteria::ASC) Order by the InhdFTVend column
 * @method     ChildInvTransferOrderQuery orderByInhdtrantype($order = Criteria::ASC) Order by the InhdTranType column
 * @method     ChildInvTransferOrderQuery orderByInhdfrtcost($order = Criteria::ASC) Order by the InhdFrtCost column
 * @method     ChildInvTransferOrderQuery orderByInhdpickcode($order = Criteria::ASC) Order by the InhdPickCode column
 * @method     ChildInvTransferOrderQuery orderByInhdpackcode($order = Criteria::ASC) Order by the InhdPackCode column
 * @method     ChildInvTransferOrderQuery orderByInhdhold($order = Criteria::ASC) Order by the InhdHold column
 * @method     ChildInvTransferOrderQuery orderByInhdlabel1prtfmt($order = Criteria::ASC) Order by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrderQuery orderByInhdenteredby($order = Criteria::ASC) Order by the InhdEnteredBy column
 * @method     ChildInvTransferOrderQuery orderByInhdentereddate($order = Criteria::ASC) Order by the InhdEnteredDate column
 * @method     ChildInvTransferOrderQuery orderByInhdenteredtime($order = Criteria::ASC) Order by the InhdEnteredTime column
 * @method     ChildInvTransferOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvTransferOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvTransferOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvTransferOrderQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildInvTransferOrderQuery groupByInhdstat() Group by the InhdStat column
 * @method     ChildInvTransferOrderQuery groupByIntbwhsefrom() Group by the IntbWhseFrom column
 * @method     ChildInvTransferOrderQuery groupByIntbwhseto() Group by the IntbWhseTo column
 * @method     ChildInvTransferOrderQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildInvTransferOrderQuery groupByInhdentdate() Group by the InhdEntDate column
 * @method     ChildInvTransferOrderQuery groupByInhdref() Group by the InhdRef column
 * @method     ChildInvTransferOrderQuery groupByInhdpickdate() Group by the InhdPickDate column
 * @method     ChildInvTransferOrderQuery groupByInhdpicktime() Group by the InhdPickTime column
 * @method     ChildInvTransferOrderQuery groupByInhdtimespick() Group by the InhdTimesPick column
 * @method     ChildInvTransferOrderQuery groupByInhdcrntuser() Group by the InhdCrntUser column
 * @method     ChildInvTransferOrderQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildInvTransferOrderQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildInvTransferOrderQuery groupByInhddept() Group by the InhdDept column
 * @method     ChildInvTransferOrderQuery groupByInhdpllt() Group by the InhdPllt column
 * @method     ChildInvTransferOrderQuery groupByInhdcntrqty() Group by the InhdCntrQty column
 * @method     ChildInvTransferOrderQuery groupByInhdwghttot() Group by the InhdWghtTot column
 * @method     ChildInvTransferOrderQuery groupByInhdtracknbr() Group by the InhdTrackNbr column
 * @method     ChildInvTransferOrderQuery groupByInhdpickqueue() Group by the InhdPickQueue column
 * @method     ChildInvTransferOrderQuery groupByInhdshipqueue() Group by the InhdShipQueue column
 * @method     ChildInvTransferOrderQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildInvTransferOrderQuery groupByInhdftvend() Group by the InhdFTVend column
 * @method     ChildInvTransferOrderQuery groupByInhdtrantype() Group by the InhdTranType column
 * @method     ChildInvTransferOrderQuery groupByInhdfrtcost() Group by the InhdFrtCost column
 * @method     ChildInvTransferOrderQuery groupByInhdpickcode() Group by the InhdPickCode column
 * @method     ChildInvTransferOrderQuery groupByInhdpackcode() Group by the InhdPackCode column
 * @method     ChildInvTransferOrderQuery groupByInhdhold() Group by the InhdHold column
 * @method     ChildInvTransferOrderQuery groupByInhdlabel1prtfmt() Group by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrderQuery groupByInhdenteredby() Group by the InhdEnteredBy column
 * @method     ChildInvTransferOrderQuery groupByInhdentereddate() Group by the InhdEnteredDate column
 * @method     ChildInvTransferOrderQuery groupByInhdenteredtime() Group by the InhdEnteredTime column
 * @method     ChildInvTransferOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvTransferOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvTransferOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvTransferOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvTransferOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvTransferOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvTransferOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvTransferOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvTransferOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvTransferOrderQuery leftJoinWarehouseRelatedByIntbwhsefrom($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseRelatedByIntbwhsefrom relation
 * @method     ChildInvTransferOrderQuery rightJoinWarehouseRelatedByIntbwhsefrom($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseRelatedByIntbwhsefrom relation
 * @method     ChildInvTransferOrderQuery innerJoinWarehouseRelatedByIntbwhsefrom($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseRelatedByIntbwhsefrom relation
 *
 * @method     ChildInvTransferOrderQuery joinWithWarehouseRelatedByIntbwhsefrom($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseRelatedByIntbwhsefrom relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithWarehouseRelatedByIntbwhsefrom() Adds a LEFT JOIN clause and with to the query using the WarehouseRelatedByIntbwhsefrom relation
 * @method     ChildInvTransferOrderQuery rightJoinWithWarehouseRelatedByIntbwhsefrom() Adds a RIGHT JOIN clause and with to the query using the WarehouseRelatedByIntbwhsefrom relation
 * @method     ChildInvTransferOrderQuery innerJoinWithWarehouseRelatedByIntbwhsefrom() Adds a INNER JOIN clause and with to the query using the WarehouseRelatedByIntbwhsefrom relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWarehouseRelatedByIntbwhseto($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseRelatedByIntbwhseto relation
 * @method     ChildInvTransferOrderQuery rightJoinWarehouseRelatedByIntbwhseto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseRelatedByIntbwhseto relation
 * @method     ChildInvTransferOrderQuery innerJoinWarehouseRelatedByIntbwhseto($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseRelatedByIntbwhseto relation
 *
 * @method     ChildInvTransferOrderQuery joinWithWarehouseRelatedByIntbwhseto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseRelatedByIntbwhseto relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithWarehouseRelatedByIntbwhseto() Adds a LEFT JOIN clause and with to the query using the WarehouseRelatedByIntbwhseto relation
 * @method     ChildInvTransferOrderQuery rightJoinWithWarehouseRelatedByIntbwhseto() Adds a RIGHT JOIN clause and with to the query using the WarehouseRelatedByIntbwhseto relation
 * @method     ChildInvTransferOrderQuery innerJoinWithWarehouseRelatedByIntbwhseto() Adds a INNER JOIN clause and with to the query using the WarehouseRelatedByIntbwhseto relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildInvTransferOrderQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildInvTransferOrderQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildInvTransferOrderQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildInvTransferOrderQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildInvTransferOrderQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildInvTransferOrderQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildInvTransferOrderQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildInvTransferOrderQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildInvTransferOrderQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildInvTransferOrderQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildInvTransferOrderQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildInvTransferOrderQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildInvTransferOrderQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildInvTransferOrderQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildInvTransferOrderQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinInvTransferDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferOrderQuery rightJoinInvTransferDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferOrderQuery innerJoinInvTransferDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferOrderQuery joinWithInvTransferDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithInvTransferDetail() Adds a LEFT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferOrderQuery rightJoinWithInvTransferDetail() Adds a RIGHT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferOrderQuery innerJoinWithInvTransferDetail() Adds a INNER JOIN clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinInvTransferLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinInvTransferLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinInvTransferLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferOrderQuery joinWithInvTransferLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithInvTransferLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinWithInvTransferLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinWithInvTransferLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvTransferOrderQuery joinWithInvTransferPreAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithInvTransferPreAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinWithInvTransferPreAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinWithInvTransferPreAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinInvTransferPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinInvTransferPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinInvTransferPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvTransferOrderQuery joinWithInvTransferPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvTransferOrderQuery leftJoinWithInvTransferPickedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferOrderQuery rightJoinWithInvTransferPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferOrderQuery innerJoinWithInvTransferPickedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     \WarehouseQuery|\CustomerQuery|\CustomerShiptoQuery|\VendorQuery|\InvTransferDetailQuery|\InvTransferLotserialQuery|\InvTransferPreAllocatedLotserialQuery|\InvTransferPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferOrder findOne(ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query
 * @method     ChildInvTransferOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query, or a new ChildInvTransferOrder object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferOrder findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferOrder filtered by the InhdNbr column
 * @method     ChildInvTransferOrder findOneByInhdstat(string $InhdStat) Return the first ChildInvTransferOrder filtered by the InhdStat column
 * @method     ChildInvTransferOrder findOneByIntbwhsefrom(string $IntbWhseFrom) Return the first ChildInvTransferOrder filtered by the IntbWhseFrom column
 * @method     ChildInvTransferOrder findOneByIntbwhseto(string $IntbWhseTo) Return the first ChildInvTransferOrder filtered by the IntbWhseTo column
 * @method     ChildInvTransferOrder findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildInvTransferOrder filtered by the ArtbShipVia column
 * @method     ChildInvTransferOrder findOneByInhdentdate(string $InhdEntDate) Return the first ChildInvTransferOrder filtered by the InhdEntDate column
 * @method     ChildInvTransferOrder findOneByInhdref(string $InhdRef) Return the first ChildInvTransferOrder filtered by the InhdRef column
 * @method     ChildInvTransferOrder findOneByInhdpickdate(string $InhdPickDate) Return the first ChildInvTransferOrder filtered by the InhdPickDate column
 * @method     ChildInvTransferOrder findOneByInhdpicktime(string $InhdPickTime) Return the first ChildInvTransferOrder filtered by the InhdPickTime column
 * @method     ChildInvTransferOrder findOneByInhdtimespick(int $InhdTimesPick) Return the first ChildInvTransferOrder filtered by the InhdTimesPick column
 * @method     ChildInvTransferOrder findOneByInhdcrntuser(string $InhdCrntUser) Return the first ChildInvTransferOrder filtered by the InhdCrntUser column
 * @method     ChildInvTransferOrder findOneByArcucustid(string $ArcuCustId) Return the first ChildInvTransferOrder filtered by the ArcuCustId column
 * @method     ChildInvTransferOrder findOneByArstshipid(string $ArstShipId) Return the first ChildInvTransferOrder filtered by the ArstShipId column
 * @method     ChildInvTransferOrder findOneByInhddept(string $InhdDept) Return the first ChildInvTransferOrder filtered by the InhdDept column
 * @method     ChildInvTransferOrder findOneByInhdpllt(string $InhdPllt) Return the first ChildInvTransferOrder filtered by the InhdPllt column
 * @method     ChildInvTransferOrder findOneByInhdcntrqty(int $InhdCntrQty) Return the first ChildInvTransferOrder filtered by the InhdCntrQty column
 * @method     ChildInvTransferOrder findOneByInhdwghttot(int $InhdWghtTot) Return the first ChildInvTransferOrder filtered by the InhdWghtTot column
 * @method     ChildInvTransferOrder findOneByInhdtracknbr(string $InhdTrackNbr) Return the first ChildInvTransferOrder filtered by the InhdTrackNbr column
 * @method     ChildInvTransferOrder findOneByInhdpickqueue(string $InhdPickQueue) Return the first ChildInvTransferOrder filtered by the InhdPickQueue column
 * @method     ChildInvTransferOrder findOneByInhdshipqueue(string $InhdShipQueue) Return the first ChildInvTransferOrder filtered by the InhdShipQueue column
 * @method     ChildInvTransferOrder findOneByApvevendid(string $ApveVendId) Return the first ChildInvTransferOrder filtered by the ApveVendId column
 * @method     ChildInvTransferOrder findOneByInhdftvend(string $InhdFTVend) Return the first ChildInvTransferOrder filtered by the InhdFTVend column
 * @method     ChildInvTransferOrder findOneByInhdtrantype(string $InhdTranType) Return the first ChildInvTransferOrder filtered by the InhdTranType column
 * @method     ChildInvTransferOrder findOneByInhdfrtcost(string $InhdFrtCost) Return the first ChildInvTransferOrder filtered by the InhdFrtCost column
 * @method     ChildInvTransferOrder findOneByInhdpickcode(string $InhdPickCode) Return the first ChildInvTransferOrder filtered by the InhdPickCode column
 * @method     ChildInvTransferOrder findOneByInhdpackcode(string $InhdPackCode) Return the first ChildInvTransferOrder filtered by the InhdPackCode column
 * @method     ChildInvTransferOrder findOneByInhdhold(string $InhdHold) Return the first ChildInvTransferOrder filtered by the InhdHold column
 * @method     ChildInvTransferOrder findOneByInhdlabel1prtfmt(string $InhdLabel1PrtFmt) Return the first ChildInvTransferOrder filtered by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrder findOneByInhdenteredby(string $InhdEnteredBy) Return the first ChildInvTransferOrder filtered by the InhdEnteredBy column
 * @method     ChildInvTransferOrder findOneByInhdentereddate(string $InhdEnteredDate) Return the first ChildInvTransferOrder filtered by the InhdEnteredDate column
 * @method     ChildInvTransferOrder findOneByInhdenteredtime(string $InhdEnteredTime) Return the first ChildInvTransferOrder filtered by the InhdEnteredTime column
 * @method     ChildInvTransferOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferOrder filtered by the DateUpdtd column
 * @method     ChildInvTransferOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferOrder filtered by the TimeUpdtd column
 * @method     ChildInvTransferOrder findOneByDummy(string $dummy) Return the first ChildInvTransferOrder filtered by the dummy column *

 * @method     ChildInvTransferOrder requirePk($key, ConnectionInterface $con = null) Return the ChildInvTransferOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOne(ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferOrder requireOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferOrder filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdstat(string $InhdStat) Return the first ChildInvTransferOrder filtered by the InhdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByIntbwhsefrom(string $IntbWhseFrom) Return the first ChildInvTransferOrder filtered by the IntbWhseFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByIntbwhseto(string $IntbWhseTo) Return the first ChildInvTransferOrder filtered by the IntbWhseTo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildInvTransferOrder filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdentdate(string $InhdEntDate) Return the first ChildInvTransferOrder filtered by the InhdEntDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdref(string $InhdRef) Return the first ChildInvTransferOrder filtered by the InhdRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpickdate(string $InhdPickDate) Return the first ChildInvTransferOrder filtered by the InhdPickDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpicktime(string $InhdPickTime) Return the first ChildInvTransferOrder filtered by the InhdPickTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdtimespick(int $InhdTimesPick) Return the first ChildInvTransferOrder filtered by the InhdTimesPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdcrntuser(string $InhdCrntUser) Return the first ChildInvTransferOrder filtered by the InhdCrntUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByArcucustid(string $ArcuCustId) Return the first ChildInvTransferOrder filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByArstshipid(string $ArstShipId) Return the first ChildInvTransferOrder filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhddept(string $InhdDept) Return the first ChildInvTransferOrder filtered by the InhdDept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpllt(string $InhdPllt) Return the first ChildInvTransferOrder filtered by the InhdPllt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdcntrqty(int $InhdCntrQty) Return the first ChildInvTransferOrder filtered by the InhdCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdwghttot(int $InhdWghtTot) Return the first ChildInvTransferOrder filtered by the InhdWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdtracknbr(string $InhdTrackNbr) Return the first ChildInvTransferOrder filtered by the InhdTrackNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpickqueue(string $InhdPickQueue) Return the first ChildInvTransferOrder filtered by the InhdPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdshipqueue(string $InhdShipQueue) Return the first ChildInvTransferOrder filtered by the InhdShipQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByApvevendid(string $ApveVendId) Return the first ChildInvTransferOrder filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdftvend(string $InhdFTVend) Return the first ChildInvTransferOrder filtered by the InhdFTVend column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdtrantype(string $InhdTranType) Return the first ChildInvTransferOrder filtered by the InhdTranType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdfrtcost(string $InhdFrtCost) Return the first ChildInvTransferOrder filtered by the InhdFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpickcode(string $InhdPickCode) Return the first ChildInvTransferOrder filtered by the InhdPickCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdpackcode(string $InhdPackCode) Return the first ChildInvTransferOrder filtered by the InhdPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdhold(string $InhdHold) Return the first ChildInvTransferOrder filtered by the InhdHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdlabel1prtfmt(string $InhdLabel1PrtFmt) Return the first ChildInvTransferOrder filtered by the InhdLabel1PrtFmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdenteredby(string $InhdEnteredBy) Return the first ChildInvTransferOrder filtered by the InhdEnteredBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdentereddate(string $InhdEnteredDate) Return the first ChildInvTransferOrder filtered by the InhdEnteredDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByInhdenteredtime(string $InhdEnteredTime) Return the first ChildInvTransferOrder filtered by the InhdEnteredTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOneByDummy(string $dummy) Return the first ChildInvTransferOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvTransferOrder objects based on current ModelCriteria
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdnbr(int $InhdNbr) Return ChildInvTransferOrder objects filtered by the InhdNbr column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdstat(string $InhdStat) Return ChildInvTransferOrder objects filtered by the InhdStat column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByIntbwhsefrom(string $IntbWhseFrom) Return ChildInvTransferOrder objects filtered by the IntbWhseFrom column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByIntbwhseto(string $IntbWhseTo) Return ChildInvTransferOrder objects filtered by the IntbWhseTo column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildInvTransferOrder objects filtered by the ArtbShipVia column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdentdate(string $InhdEntDate) Return ChildInvTransferOrder objects filtered by the InhdEntDate column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdref(string $InhdRef) Return ChildInvTransferOrder objects filtered by the InhdRef column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpickdate(string $InhdPickDate) Return ChildInvTransferOrder objects filtered by the InhdPickDate column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpicktime(string $InhdPickTime) Return ChildInvTransferOrder objects filtered by the InhdPickTime column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdtimespick(int $InhdTimesPick) Return ChildInvTransferOrder objects filtered by the InhdTimesPick column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdcrntuser(string $InhdCrntUser) Return ChildInvTransferOrder objects filtered by the InhdCrntUser column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildInvTransferOrder objects filtered by the ArcuCustId column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildInvTransferOrder objects filtered by the ArstShipId column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhddept(string $InhdDept) Return ChildInvTransferOrder objects filtered by the InhdDept column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpllt(string $InhdPllt) Return ChildInvTransferOrder objects filtered by the InhdPllt column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdcntrqty(int $InhdCntrQty) Return ChildInvTransferOrder objects filtered by the InhdCntrQty column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdwghttot(int $InhdWghtTot) Return ChildInvTransferOrder objects filtered by the InhdWghtTot column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdtracknbr(string $InhdTrackNbr) Return ChildInvTransferOrder objects filtered by the InhdTrackNbr column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpickqueue(string $InhdPickQueue) Return ChildInvTransferOrder objects filtered by the InhdPickQueue column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdshipqueue(string $InhdShipQueue) Return ChildInvTransferOrder objects filtered by the InhdShipQueue column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildInvTransferOrder objects filtered by the ApveVendId column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdftvend(string $InhdFTVend) Return ChildInvTransferOrder objects filtered by the InhdFTVend column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdtrantype(string $InhdTranType) Return ChildInvTransferOrder objects filtered by the InhdTranType column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdfrtcost(string $InhdFrtCost) Return ChildInvTransferOrder objects filtered by the InhdFrtCost column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpickcode(string $InhdPickCode) Return ChildInvTransferOrder objects filtered by the InhdPickCode column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdpackcode(string $InhdPackCode) Return ChildInvTransferOrder objects filtered by the InhdPackCode column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdhold(string $InhdHold) Return ChildInvTransferOrder objects filtered by the InhdHold column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdlabel1prtfmt(string $InhdLabel1PrtFmt) Return ChildInvTransferOrder objects filtered by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdenteredby(string $InhdEnteredBy) Return ChildInvTransferOrder objects filtered by the InhdEnteredBy column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdentereddate(string $InhdEnteredDate) Return ChildInvTransferOrder objects filtered by the InhdEnteredDate column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByInhdenteredtime(string $InhdEnteredTime) Return ChildInvTransferOrder objects filtered by the InhdEnteredTime column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvTransferOrder objects filtered by the DateUpdtd column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvTransferOrder objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildInvTransferOrder objects filtered by the dummy column
 * @method     ChildInvTransferOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvTransferOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvTransferOrderQuery) {
            return $criteria;
        }
        $query = new ChildInvTransferOrderQuery();
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
     * @return ChildInvTransferOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvTransferOrderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvTransferOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InhdNbr, InhdStat, IntbWhseFrom, IntbWhseTo, ArtbShipVia, InhdEntDate, InhdRef, InhdPickDate, InhdPickTime, InhdTimesPick, InhdCrntUser, ArcuCustId, ArstShipId, InhdDept, InhdPllt, InhdCntrQty, InhdWghtTot, InhdTrackNbr, InhdPickQueue, InhdShipQueue, ApveVendId, InhdFTVend, InhdTranType, InhdFrtCost, InhdPickCode, InhdPackCode, InhdHold, InhdLabel1PrtFmt, InhdEnteredBy, InhdEnteredDate, InhdEnteredTime, DateUpdtd, TimeUpdtd, dummy FROM inv_trans_head WHERE InhdNbr = :p0';
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
            /** @var ChildInvTransferOrder $obj */
            $obj = new ChildInvTransferOrder();
            $obj->hydrate($row);
            InvTransferOrderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvTransferOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the InhdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdnbr(1234); // WHERE InhdNbr = 1234
     * $query->filterByInhdnbr(array(12, 34)); // WHERE InhdNbr IN (12, 34)
     * $query->filterByInhdnbr(array('min' => 12)); // WHERE InhdNbr > 12
     * </code>
     *
     * @param     mixed $inhdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (is_array($inhdnbr)) {
            $useMinMax = false;
            if (isset($inhdnbr['min'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $inhdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdnbr['max'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $inhdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $inhdnbr, $comparison);
    }

    /**
     * Filter the query on the InhdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdstat('fooValue');   // WHERE InhdStat = 'fooValue'
     * $query->filterByInhdstat('%fooValue%', Criteria::LIKE); // WHERE InhdStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdstat($inhdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDSTAT, $inhdstat, $comparison);
    }

    /**
     * Filter the query on the IntbWhseFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefrom('fooValue');   // WHERE IntbWhseFrom = 'fooValue'
     * $query->filterByIntbwhsefrom('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsefrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByIntbwhsefrom($intbwhsefrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $intbwhsefrom, $comparison);
    }

    /**
     * Filter the query on the IntbWhseTo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseto('fooValue');   // WHERE IntbWhseTo = 'fooValue'
     * $query->filterByIntbwhseto('%fooValue%', Criteria::LIKE); // WHERE IntbWhseTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseto The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByIntbwhseto($intbwhseto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseto)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $intbwhseto, $comparison);
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbshipvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the InhdEntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdentdate('fooValue');   // WHERE InhdEntDate = 'fooValue'
     * $query->filterByInhdentdate('%fooValue%', Criteria::LIKE); // WHERE InhdEntDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdentdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdentdate($inhdentdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdentdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTDATE, $inhdentdate, $comparison);
    }

    /**
     * Filter the query on the InhdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdref('fooValue');   // WHERE InhdRef = 'fooValue'
     * $query->filterByInhdref('%fooValue%', Criteria::LIKE); // WHERE InhdRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdref($inhdref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDREF, $inhdref, $comparison);
    }

    /**
     * Filter the query on the InhdPickDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickdate('fooValue');   // WHERE InhdPickDate = 'fooValue'
     * $query->filterByInhdpickdate('%fooValue%', Criteria::LIKE); // WHERE InhdPickDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpickdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpickdate($inhdpickdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKDATE, $inhdpickdate, $comparison);
    }

    /**
     * Filter the query on the InhdPickTime column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpicktime('fooValue');   // WHERE InhdPickTime = 'fooValue'
     * $query->filterByInhdpicktime('%fooValue%', Criteria::LIKE); // WHERE InhdPickTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpicktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpicktime($inhdpicktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKTIME, $inhdpicktime, $comparison);
    }

    /**
     * Filter the query on the InhdTimesPick column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdtimespick(1234); // WHERE InhdTimesPick = 1234
     * $query->filterByInhdtimespick(array(12, 34)); // WHERE InhdTimesPick IN (12, 34)
     * $query->filterByInhdtimespick(array('min' => 12)); // WHERE InhdTimesPick > 12
     * </code>
     *
     * @param     mixed $inhdtimespick The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdtimespick($inhdtimespick = null, $comparison = null)
    {
        if (is_array($inhdtimespick)) {
            $useMinMax = false;
            if (isset($inhdtimespick['min'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTIMESPICK, $inhdtimespick['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdtimespick['max'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTIMESPICK, $inhdtimespick['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTIMESPICK, $inhdtimespick, $comparison);
    }

    /**
     * Filter the query on the InhdCrntUser column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdcrntuser('fooValue');   // WHERE InhdCrntUser = 'fooValue'
     * $query->filterByInhdcrntuser('%fooValue%', Criteria::LIKE); // WHERE InhdCrntUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdcrntuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdcrntuser($inhdcrntuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCRNTUSER, $inhdcrntuser, $comparison);
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the InhdDept column
     *
     * Example usage:
     * <code>
     * $query->filterByInhddept('fooValue');   // WHERE InhdDept = 'fooValue'
     * $query->filterByInhddept('%fooValue%', Criteria::LIKE); // WHERE InhdDept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhddept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhddept($inhddept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhddept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDDEPT, $inhddept, $comparison);
    }

    /**
     * Filter the query on the InhdPllt column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpllt('fooValue');   // WHERE InhdPllt = 'fooValue'
     * $query->filterByInhdpllt('%fooValue%', Criteria::LIKE); // WHERE InhdPllt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpllt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpllt($inhdpllt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpllt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPLLT, $inhdpllt, $comparison);
    }

    /**
     * Filter the query on the InhdCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdcntrqty(1234); // WHERE InhdCntrQty = 1234
     * $query->filterByInhdcntrqty(array(12, 34)); // WHERE InhdCntrQty IN (12, 34)
     * $query->filterByInhdcntrqty(array('min' => 12)); // WHERE InhdCntrQty > 12
     * </code>
     *
     * @param     mixed $inhdcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdcntrqty($inhdcntrqty = null, $comparison = null)
    {
        if (is_array($inhdcntrqty)) {
            $useMinMax = false;
            if (isset($inhdcntrqty['min'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCNTRQTY, $inhdcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdcntrqty['max'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCNTRQTY, $inhdcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCNTRQTY, $inhdcntrqty, $comparison);
    }

    /**
     * Filter the query on the InhdWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdwghttot(1234); // WHERE InhdWghtTot = 1234
     * $query->filterByInhdwghttot(array(12, 34)); // WHERE InhdWghtTot IN (12, 34)
     * $query->filterByInhdwghttot(array('min' => 12)); // WHERE InhdWghtTot > 12
     * </code>
     *
     * @param     mixed $inhdwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdwghttot($inhdwghttot = null, $comparison = null)
    {
        if (is_array($inhdwghttot)) {
            $useMinMax = false;
            if (isset($inhdwghttot['min'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDWGHTTOT, $inhdwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdwghttot['max'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDWGHTTOT, $inhdwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDWGHTTOT, $inhdwghttot, $comparison);
    }

    /**
     * Filter the query on the InhdTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdtracknbr('fooValue');   // WHERE InhdTrackNbr = 'fooValue'
     * $query->filterByInhdtracknbr('%fooValue%', Criteria::LIKE); // WHERE InhdTrackNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdtracknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdtracknbr($inhdtracknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTRACKNBR, $inhdtracknbr, $comparison);
    }

    /**
     * Filter the query on the InhdPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickqueue('fooValue');   // WHERE InhdPickQueue = 'fooValue'
     * $query->filterByInhdpickqueue('%fooValue%', Criteria::LIKE); // WHERE InhdPickQueue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpickqueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpickqueue($inhdpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKQUEUE, $inhdpickqueue, $comparison);
    }

    /**
     * Filter the query on the InhdShipQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdshipqueue('fooValue');   // WHERE InhdShipQueue = 'fooValue'
     * $query->filterByInhdshipqueue('%fooValue%', Criteria::LIKE); // WHERE InhdShipQueue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdshipqueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdshipqueue($inhdshipqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdshipqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDSHIPQUEUE, $inhdshipqueue, $comparison);
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the InhdFTVend column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdftvend('fooValue');   // WHERE InhdFTVend = 'fooValue'
     * $query->filterByInhdftvend('%fooValue%', Criteria::LIKE); // WHERE InhdFTVend LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdftvend The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdftvend($inhdftvend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdftvend)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFTVEND, $inhdftvend, $comparison);
    }

    /**
     * Filter the query on the InhdTranType column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdtrantype('fooValue');   // WHERE InhdTranType = 'fooValue'
     * $query->filterByInhdtrantype('%fooValue%', Criteria::LIKE); // WHERE InhdTranType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdtrantype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdtrantype($inhdtrantype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdtrantype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTRANTYPE, $inhdtrantype, $comparison);
    }

    /**
     * Filter the query on the InhdFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdfrtcost(1234); // WHERE InhdFrtCost = 1234
     * $query->filterByInhdfrtcost(array(12, 34)); // WHERE InhdFrtCost IN (12, 34)
     * $query->filterByInhdfrtcost(array('min' => 12)); // WHERE InhdFrtCost > 12
     * </code>
     *
     * @param     mixed $inhdfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdfrtcost($inhdfrtcost = null, $comparison = null)
    {
        if (is_array($inhdfrtcost)) {
            $useMinMax = false;
            if (isset($inhdfrtcost['min'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFRTCOST, $inhdfrtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdfrtcost['max'])) {
                $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFRTCOST, $inhdfrtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFRTCOST, $inhdfrtcost, $comparison);
    }

    /**
     * Filter the query on the InhdPickCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickcode('fooValue');   // WHERE InhdPickCode = 'fooValue'
     * $query->filterByInhdpickcode('%fooValue%', Criteria::LIKE); // WHERE InhdPickCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpickcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpickcode($inhdpickcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKCODE, $inhdpickcode, $comparison);
    }

    /**
     * Filter the query on the InhdPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpackcode('fooValue');   // WHERE InhdPackCode = 'fooValue'
     * $query->filterByInhdpackcode('%fooValue%', Criteria::LIKE); // WHERE InhdPackCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdpackcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdpackcode($inhdpackcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPACKCODE, $inhdpackcode, $comparison);
    }

    /**
     * Filter the query on the InhdHold column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdhold('fooValue');   // WHERE InhdHold = 'fooValue'
     * $query->filterByInhdhold('%fooValue%', Criteria::LIKE); // WHERE InhdHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdhold($inhdhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDHOLD, $inhdhold, $comparison);
    }

    /**
     * Filter the query on the InhdLabel1PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdlabel1prtfmt('fooValue');   // WHERE InhdLabel1PrtFmt = 'fooValue'
     * $query->filterByInhdlabel1prtfmt('%fooValue%', Criteria::LIKE); // WHERE InhdLabel1PrtFmt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdlabel1prtfmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdlabel1prtfmt($inhdlabel1prtfmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdlabel1prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT, $inhdlabel1prtfmt, $comparison);
    }

    /**
     * Filter the query on the InhdEnteredBy column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdenteredby('fooValue');   // WHERE InhdEnteredBy = 'fooValue'
     * $query->filterByInhdenteredby('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdenteredby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdenteredby($inhdenteredby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdenteredby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDBY, $inhdenteredby, $comparison);
    }

    /**
     * Filter the query on the InhdEnteredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdentereddate('fooValue');   // WHERE InhdEnteredDate = 'fooValue'
     * $query->filterByInhdentereddate('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdentereddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdentereddate($inhdentereddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdentereddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDDATE, $inhdentereddate, $comparison);
    }

    /**
     * Filter the query on the InhdEnteredTime column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdenteredtime('fooValue');   // WHERE InhdEnteredTime = 'fooValue'
     * $query->filterByInhdenteredtime('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdenteredtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInhdenteredtime($inhdenteredtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdenteredtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDTIME, $inhdenteredtime, $comparison);
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByWarehouseRelatedByIntbwhsefrom($warehouse, $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);
        } else {
            throw new PropelException('filterByWarehouseRelatedByIntbwhsefrom() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseRelatedByIntbwhsefrom relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinWarehouseRelatedByIntbwhsefrom($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseRelatedByIntbwhsefrom');

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
            $this->addJoinObject($join, 'WarehouseRelatedByIntbwhsefrom');
        }

        return $this;
    }

    /**
     * Use the WarehouseRelatedByIntbwhsefrom relation Warehouse object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseRelatedByIntbwhsefromQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseRelatedByIntbwhsefrom($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseRelatedByIntbwhsefrom', '\WarehouseQuery');
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByWarehouseRelatedByIntbwhseto($warehouse, $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);
        } else {
            throw new PropelException('filterByWarehouseRelatedByIntbwhseto() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseRelatedByIntbwhseto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinWarehouseRelatedByIntbwhseto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseRelatedByIntbwhseto');

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
            $this->addJoinObject($join, 'WarehouseRelatedByIntbwhseto');
        }

        return $this;
    }

    /**
     * Use the WarehouseRelatedByIntbwhseto relation Warehouse object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseRelatedByIntbwhsetoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseRelatedByIntbwhseto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseRelatedByIntbwhseto', '\WarehouseQuery');
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Filter the query by a related \InvTransferDetail object
     *
     * @param \InvTransferDetail|ObjectCollection $invTransferDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferDetail->getInhdnbr(), $comparison);
        } elseif ($invTransferDetail instanceof ObjectCollection) {
            return $this
                ->useInvTransferDetailQuery()
                ->filterByPrimaryKeys($invTransferDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvTransferDetail() only accepts arguments of type \InvTransferDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinInvTransferDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferDetail');

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
            $this->addJoinObject($join, 'InvTransferDetail');
        }

        return $this;
    }

    /**
     * Use the InvTransferDetail relation InvTransferDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferDetailQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferDetail', '\InvTransferDetailQuery');
    }

    /**
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferLotserial->getInhdnbr(), $comparison);
        } elseif ($invTransferLotserial instanceof ObjectCollection) {
            return $this
                ->useInvTransferLotserialQuery()
                ->filterByPrimaryKeys($invTransferLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinInvTransferLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferLotserial');

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
            $this->addJoinObject($join, 'InvTransferLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferLotserial', '\InvTransferLotserialQuery');
    }

    /**
     * Filter the query by a related \InvTransferPreAllocatedLotserial object
     *
     * @param \InvTransferPreAllocatedLotserial|ObjectCollection $invTransferPreAllocatedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial, $comparison = null)
    {
        if ($invTransferPreAllocatedLotserial instanceof \InvTransferPreAllocatedLotserial) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferPreAllocatedLotserial->getInhdnbr(), $comparison);
        } elseif ($invTransferPreAllocatedLotserial instanceof ObjectCollection) {
            return $this
                ->useInvTransferPreAllocatedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPreAllocatedLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvTransferPreAllocatedLotserial() only accepts arguments of type \InvTransferPreAllocatedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinInvTransferPreAllocatedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPreAllocatedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPreAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPreAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPreAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPreAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPreAllocatedLotserial', '\InvTransferPreAllocatedLotserialQuery');
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferPickedLotserial->getInhdnbr(), $comparison);
        } elseif ($invTransferPickedLotserial instanceof ObjectCollection) {
            return $this
                ->useInvTransferPickedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPickedLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPickedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPickedLotserial', '\InvTransferPickedLotserialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvTransferOrder $invTransferOrder Object to remove from the list of results
     *
     * @return $this|ChildInvTransferOrderQuery The current query, for fluid interface
     */
    public function prune($invTransferOrder = null)
    {
        if ($invTransferOrder) {
            $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferOrder->getInhdnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trans_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvTransferOrderTableMap::clearInstancePool();
            InvTransferOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvTransferOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvTransferOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvTransferOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvTransferOrderQuery
