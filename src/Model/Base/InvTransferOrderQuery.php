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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_trans_head` table.
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
 * @method     \WarehouseQuery|\WarehouseQuery|\CustomerQuery|\CustomerShiptoQuery|\VendorQuery|\InvTransferDetailQuery|\InvTransferLotserialQuery|\InvTransferPreAllocatedLotserialQuery|\InvTransferPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferOrder|null findOne(?ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query
 * @method     ChildInvTransferOrder findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query, or a new ChildInvTransferOrder object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferOrder|null findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferOrder filtered by the InhdNbr column
 * @method     ChildInvTransferOrder|null findOneByInhdstat(string $InhdStat) Return the first ChildInvTransferOrder filtered by the InhdStat column
 * @method     ChildInvTransferOrder|null findOneByIntbwhsefrom(string $IntbWhseFrom) Return the first ChildInvTransferOrder filtered by the IntbWhseFrom column
 * @method     ChildInvTransferOrder|null findOneByIntbwhseto(string $IntbWhseTo) Return the first ChildInvTransferOrder filtered by the IntbWhseTo column
 * @method     ChildInvTransferOrder|null findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildInvTransferOrder filtered by the ArtbShipVia column
 * @method     ChildInvTransferOrder|null findOneByInhdentdate(string $InhdEntDate) Return the first ChildInvTransferOrder filtered by the InhdEntDate column
 * @method     ChildInvTransferOrder|null findOneByInhdref(string $InhdRef) Return the first ChildInvTransferOrder filtered by the InhdRef column
 * @method     ChildInvTransferOrder|null findOneByInhdpickdate(string $InhdPickDate) Return the first ChildInvTransferOrder filtered by the InhdPickDate column
 * @method     ChildInvTransferOrder|null findOneByInhdpicktime(string $InhdPickTime) Return the first ChildInvTransferOrder filtered by the InhdPickTime column
 * @method     ChildInvTransferOrder|null findOneByInhdtimespick(int $InhdTimesPick) Return the first ChildInvTransferOrder filtered by the InhdTimesPick column
 * @method     ChildInvTransferOrder|null findOneByInhdcrntuser(string $InhdCrntUser) Return the first ChildInvTransferOrder filtered by the InhdCrntUser column
 * @method     ChildInvTransferOrder|null findOneByArcucustid(string $ArcuCustId) Return the first ChildInvTransferOrder filtered by the ArcuCustId column
 * @method     ChildInvTransferOrder|null findOneByArstshipid(string $ArstShipId) Return the first ChildInvTransferOrder filtered by the ArstShipId column
 * @method     ChildInvTransferOrder|null findOneByInhddept(string $InhdDept) Return the first ChildInvTransferOrder filtered by the InhdDept column
 * @method     ChildInvTransferOrder|null findOneByInhdpllt(string $InhdPllt) Return the first ChildInvTransferOrder filtered by the InhdPllt column
 * @method     ChildInvTransferOrder|null findOneByInhdcntrqty(int $InhdCntrQty) Return the first ChildInvTransferOrder filtered by the InhdCntrQty column
 * @method     ChildInvTransferOrder|null findOneByInhdwghttot(int $InhdWghtTot) Return the first ChildInvTransferOrder filtered by the InhdWghtTot column
 * @method     ChildInvTransferOrder|null findOneByInhdtracknbr(string $InhdTrackNbr) Return the first ChildInvTransferOrder filtered by the InhdTrackNbr column
 * @method     ChildInvTransferOrder|null findOneByInhdpickqueue(string $InhdPickQueue) Return the first ChildInvTransferOrder filtered by the InhdPickQueue column
 * @method     ChildInvTransferOrder|null findOneByInhdshipqueue(string $InhdShipQueue) Return the first ChildInvTransferOrder filtered by the InhdShipQueue column
 * @method     ChildInvTransferOrder|null findOneByApvevendid(string $ApveVendId) Return the first ChildInvTransferOrder filtered by the ApveVendId column
 * @method     ChildInvTransferOrder|null findOneByInhdftvend(string $InhdFTVend) Return the first ChildInvTransferOrder filtered by the InhdFTVend column
 * @method     ChildInvTransferOrder|null findOneByInhdtrantype(string $InhdTranType) Return the first ChildInvTransferOrder filtered by the InhdTranType column
 * @method     ChildInvTransferOrder|null findOneByInhdfrtcost(string $InhdFrtCost) Return the first ChildInvTransferOrder filtered by the InhdFrtCost column
 * @method     ChildInvTransferOrder|null findOneByInhdpickcode(string $InhdPickCode) Return the first ChildInvTransferOrder filtered by the InhdPickCode column
 * @method     ChildInvTransferOrder|null findOneByInhdpackcode(string $InhdPackCode) Return the first ChildInvTransferOrder filtered by the InhdPackCode column
 * @method     ChildInvTransferOrder|null findOneByInhdhold(string $InhdHold) Return the first ChildInvTransferOrder filtered by the InhdHold column
 * @method     ChildInvTransferOrder|null findOneByInhdlabel1prtfmt(string $InhdLabel1PrtFmt) Return the first ChildInvTransferOrder filtered by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrder|null findOneByInhdenteredby(string $InhdEnteredBy) Return the first ChildInvTransferOrder filtered by the InhdEnteredBy column
 * @method     ChildInvTransferOrder|null findOneByInhdentereddate(string $InhdEnteredDate) Return the first ChildInvTransferOrder filtered by the InhdEnteredDate column
 * @method     ChildInvTransferOrder|null findOneByInhdenteredtime(string $InhdEnteredTime) Return the first ChildInvTransferOrder filtered by the InhdEnteredTime column
 * @method     ChildInvTransferOrder|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferOrder filtered by the DateUpdtd column
 * @method     ChildInvTransferOrder|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferOrder filtered by the TimeUpdtd column
 * @method     ChildInvTransferOrder|null findOneByDummy(string $dummy) Return the first ChildInvTransferOrder filtered by the dummy column
 *
 * @method     ChildInvTransferOrder requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvTransferOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferOrder requireOne(?ConnectionInterface $con = null) Return the first ChildInvTransferOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildInvTransferOrder[]|Collection find(?ConnectionInterface $con = null) Return ChildInvTransferOrder objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> find(?ConnectionInterface $con = null) Return ChildInvTransferOrder objects based on current ModelCriteria
 *
 * @method     ChildInvTransferOrder[]|Collection findByInhdnbr(int|array<int> $InhdNbr) Return ChildInvTransferOrder objects filtered by the InhdNbr column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdnbr(int|array<int> $InhdNbr) Return ChildInvTransferOrder objects filtered by the InhdNbr column
 * @method     ChildInvTransferOrder[]|Collection findByInhdstat(string|array<string> $InhdStat) Return ChildInvTransferOrder objects filtered by the InhdStat column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdstat(string|array<string> $InhdStat) Return ChildInvTransferOrder objects filtered by the InhdStat column
 * @method     ChildInvTransferOrder[]|Collection findByIntbwhsefrom(string|array<string> $IntbWhseFrom) Return ChildInvTransferOrder objects filtered by the IntbWhseFrom column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByIntbwhsefrom(string|array<string> $IntbWhseFrom) Return ChildInvTransferOrder objects filtered by the IntbWhseFrom column
 * @method     ChildInvTransferOrder[]|Collection findByIntbwhseto(string|array<string> $IntbWhseTo) Return ChildInvTransferOrder objects filtered by the IntbWhseTo column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByIntbwhseto(string|array<string> $IntbWhseTo) Return ChildInvTransferOrder objects filtered by the IntbWhseTo column
 * @method     ChildInvTransferOrder[]|Collection findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildInvTransferOrder objects filtered by the ArtbShipVia column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildInvTransferOrder objects filtered by the ArtbShipVia column
 * @method     ChildInvTransferOrder[]|Collection findByInhdentdate(string|array<string> $InhdEntDate) Return ChildInvTransferOrder objects filtered by the InhdEntDate column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdentdate(string|array<string> $InhdEntDate) Return ChildInvTransferOrder objects filtered by the InhdEntDate column
 * @method     ChildInvTransferOrder[]|Collection findByInhdref(string|array<string> $InhdRef) Return ChildInvTransferOrder objects filtered by the InhdRef column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdref(string|array<string> $InhdRef) Return ChildInvTransferOrder objects filtered by the InhdRef column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpickdate(string|array<string> $InhdPickDate) Return ChildInvTransferOrder objects filtered by the InhdPickDate column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpickdate(string|array<string> $InhdPickDate) Return ChildInvTransferOrder objects filtered by the InhdPickDate column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpicktime(string|array<string> $InhdPickTime) Return ChildInvTransferOrder objects filtered by the InhdPickTime column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpicktime(string|array<string> $InhdPickTime) Return ChildInvTransferOrder objects filtered by the InhdPickTime column
 * @method     ChildInvTransferOrder[]|Collection findByInhdtimespick(int|array<int> $InhdTimesPick) Return ChildInvTransferOrder objects filtered by the InhdTimesPick column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdtimespick(int|array<int> $InhdTimesPick) Return ChildInvTransferOrder objects filtered by the InhdTimesPick column
 * @method     ChildInvTransferOrder[]|Collection findByInhdcrntuser(string|array<string> $InhdCrntUser) Return ChildInvTransferOrder objects filtered by the InhdCrntUser column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdcrntuser(string|array<string> $InhdCrntUser) Return ChildInvTransferOrder objects filtered by the InhdCrntUser column
 * @method     ChildInvTransferOrder[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildInvTransferOrder objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByArcucustid(string|array<string> $ArcuCustId) Return ChildInvTransferOrder objects filtered by the ArcuCustId column
 * @method     ChildInvTransferOrder[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildInvTransferOrder objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByArstshipid(string|array<string> $ArstShipId) Return ChildInvTransferOrder objects filtered by the ArstShipId column
 * @method     ChildInvTransferOrder[]|Collection findByInhddept(string|array<string> $InhdDept) Return ChildInvTransferOrder objects filtered by the InhdDept column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhddept(string|array<string> $InhdDept) Return ChildInvTransferOrder objects filtered by the InhdDept column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpllt(string|array<string> $InhdPllt) Return ChildInvTransferOrder objects filtered by the InhdPllt column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpllt(string|array<string> $InhdPllt) Return ChildInvTransferOrder objects filtered by the InhdPllt column
 * @method     ChildInvTransferOrder[]|Collection findByInhdcntrqty(int|array<int> $InhdCntrQty) Return ChildInvTransferOrder objects filtered by the InhdCntrQty column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdcntrqty(int|array<int> $InhdCntrQty) Return ChildInvTransferOrder objects filtered by the InhdCntrQty column
 * @method     ChildInvTransferOrder[]|Collection findByInhdwghttot(int|array<int> $InhdWghtTot) Return ChildInvTransferOrder objects filtered by the InhdWghtTot column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdwghttot(int|array<int> $InhdWghtTot) Return ChildInvTransferOrder objects filtered by the InhdWghtTot column
 * @method     ChildInvTransferOrder[]|Collection findByInhdtracknbr(string|array<string> $InhdTrackNbr) Return ChildInvTransferOrder objects filtered by the InhdTrackNbr column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdtracknbr(string|array<string> $InhdTrackNbr) Return ChildInvTransferOrder objects filtered by the InhdTrackNbr column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpickqueue(string|array<string> $InhdPickQueue) Return ChildInvTransferOrder objects filtered by the InhdPickQueue column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpickqueue(string|array<string> $InhdPickQueue) Return ChildInvTransferOrder objects filtered by the InhdPickQueue column
 * @method     ChildInvTransferOrder[]|Collection findByInhdshipqueue(string|array<string> $InhdShipQueue) Return ChildInvTransferOrder objects filtered by the InhdShipQueue column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdshipqueue(string|array<string> $InhdShipQueue) Return ChildInvTransferOrder objects filtered by the InhdShipQueue column
 * @method     ChildInvTransferOrder[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildInvTransferOrder objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByApvevendid(string|array<string> $ApveVendId) Return ChildInvTransferOrder objects filtered by the ApveVendId column
 * @method     ChildInvTransferOrder[]|Collection findByInhdftvend(string|array<string> $InhdFTVend) Return ChildInvTransferOrder objects filtered by the InhdFTVend column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdftvend(string|array<string> $InhdFTVend) Return ChildInvTransferOrder objects filtered by the InhdFTVend column
 * @method     ChildInvTransferOrder[]|Collection findByInhdtrantype(string|array<string> $InhdTranType) Return ChildInvTransferOrder objects filtered by the InhdTranType column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdtrantype(string|array<string> $InhdTranType) Return ChildInvTransferOrder objects filtered by the InhdTranType column
 * @method     ChildInvTransferOrder[]|Collection findByInhdfrtcost(string|array<string> $InhdFrtCost) Return ChildInvTransferOrder objects filtered by the InhdFrtCost column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdfrtcost(string|array<string> $InhdFrtCost) Return ChildInvTransferOrder objects filtered by the InhdFrtCost column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpickcode(string|array<string> $InhdPickCode) Return ChildInvTransferOrder objects filtered by the InhdPickCode column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpickcode(string|array<string> $InhdPickCode) Return ChildInvTransferOrder objects filtered by the InhdPickCode column
 * @method     ChildInvTransferOrder[]|Collection findByInhdpackcode(string|array<string> $InhdPackCode) Return ChildInvTransferOrder objects filtered by the InhdPackCode column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdpackcode(string|array<string> $InhdPackCode) Return ChildInvTransferOrder objects filtered by the InhdPackCode column
 * @method     ChildInvTransferOrder[]|Collection findByInhdhold(string|array<string> $InhdHold) Return ChildInvTransferOrder objects filtered by the InhdHold column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdhold(string|array<string> $InhdHold) Return ChildInvTransferOrder objects filtered by the InhdHold column
 * @method     ChildInvTransferOrder[]|Collection findByInhdlabel1prtfmt(string|array<string> $InhdLabel1PrtFmt) Return ChildInvTransferOrder objects filtered by the InhdLabel1PrtFmt column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdlabel1prtfmt(string|array<string> $InhdLabel1PrtFmt) Return ChildInvTransferOrder objects filtered by the InhdLabel1PrtFmt column
 * @method     ChildInvTransferOrder[]|Collection findByInhdenteredby(string|array<string> $InhdEnteredBy) Return ChildInvTransferOrder objects filtered by the InhdEnteredBy column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdenteredby(string|array<string> $InhdEnteredBy) Return ChildInvTransferOrder objects filtered by the InhdEnteredBy column
 * @method     ChildInvTransferOrder[]|Collection findByInhdentereddate(string|array<string> $InhdEnteredDate) Return ChildInvTransferOrder objects filtered by the InhdEnteredDate column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdentereddate(string|array<string> $InhdEnteredDate) Return ChildInvTransferOrder objects filtered by the InhdEnteredDate column
 * @method     ChildInvTransferOrder[]|Collection findByInhdenteredtime(string|array<string> $InhdEnteredTime) Return ChildInvTransferOrder objects filtered by the InhdEnteredTime column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByInhdenteredtime(string|array<string> $InhdEnteredTime) Return ChildInvTransferOrder objects filtered by the InhdEnteredTime column
 * @method     ChildInvTransferOrder[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvTransferOrder objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvTransferOrder objects filtered by the DateUpdtd column
 * @method     ChildInvTransferOrder[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvTransferOrder objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvTransferOrder objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferOrder[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvTransferOrder objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvTransferOrder> findByDummy(string|array<string> $dummy) Return ChildInvTransferOrder objects filtered by the dummy column
 *
 * @method     ChildInvTransferOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvTransferOrder> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvTransferOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferOrderQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferOrderQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferOrderQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $keys, Criteria::IN);

        return $this;
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
     * @param mixed $inhdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $inhdnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdstat('fooValue');   // WHERE InhdStat = 'fooValue'
     * $query->filterByInhdstat('%fooValue%', Criteria::LIKE); // WHERE InhdStat LIKE '%fooValue%'
     * $query->filterByInhdstat(['foo', 'bar']); // WHERE InhdStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdstat($inhdstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDSTAT, $inhdstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefrom('fooValue');   // WHERE IntbWhseFrom = 'fooValue'
     * $query->filterByIntbwhsefrom('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFrom LIKE '%fooValue%'
     * $query->filterByIntbwhsefrom(['foo', 'bar']); // WHERE IntbWhseFrom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsefrom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsefrom($intbwhsefrom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefrom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $intbwhsefrom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseTo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseto('fooValue');   // WHERE IntbWhseTo = 'fooValue'
     * $query->filterByIntbwhseto('%fooValue%', Criteria::LIKE); // WHERE IntbWhseTo LIKE '%fooValue%'
     * $query->filterByIntbwhseto(['foo', 'bar']); // WHERE IntbWhseTo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseto The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseto($intbwhseto = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseto)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $intbwhseto, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * $query->filterByArtbshipvia(['foo', 'bar']); // WHERE ArtbShipVia IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbshipvia The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdEntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdentdate('fooValue');   // WHERE InhdEntDate = 'fooValue'
     * $query->filterByInhdentdate('%fooValue%', Criteria::LIKE); // WHERE InhdEntDate LIKE '%fooValue%'
     * $query->filterByInhdentdate(['foo', 'bar']); // WHERE InhdEntDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdentdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdentdate($inhdentdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdentdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTDATE, $inhdentdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdref('fooValue');   // WHERE InhdRef = 'fooValue'
     * $query->filterByInhdref('%fooValue%', Criteria::LIKE); // WHERE InhdRef LIKE '%fooValue%'
     * $query->filterByInhdref(['foo', 'bar']); // WHERE InhdRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdref($inhdref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDREF, $inhdref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPickDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickdate('fooValue');   // WHERE InhdPickDate = 'fooValue'
     * $query->filterByInhdpickdate('%fooValue%', Criteria::LIKE); // WHERE InhdPickDate LIKE '%fooValue%'
     * $query->filterByInhdpickdate(['foo', 'bar']); // WHERE InhdPickDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpickdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpickdate($inhdpickdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKDATE, $inhdpickdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPickTime column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpicktime('fooValue');   // WHERE InhdPickTime = 'fooValue'
     * $query->filterByInhdpicktime('%fooValue%', Criteria::LIKE); // WHERE InhdPickTime LIKE '%fooValue%'
     * $query->filterByInhdpicktime(['foo', 'bar']); // WHERE InhdPickTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpicktime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpicktime($inhdpicktime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpicktime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKTIME, $inhdpicktime, $comparison);

        return $this;
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
     * @param mixed $inhdtimespick The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdtimespick($inhdtimespick = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTIMESPICK, $inhdtimespick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdCrntUser column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdcrntuser('fooValue');   // WHERE InhdCrntUser = 'fooValue'
     * $query->filterByInhdcrntuser('%fooValue%', Criteria::LIKE); // WHERE InhdCrntUser LIKE '%fooValue%'
     * $query->filterByInhdcrntuser(['foo', 'bar']); // WHERE InhdCrntUser IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdcrntuser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdcrntuser($inhdcrntuser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdcrntuser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCRNTUSER, $inhdcrntuser, $comparison);

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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdDept column
     *
     * Example usage:
     * <code>
     * $query->filterByInhddept('fooValue');   // WHERE InhdDept = 'fooValue'
     * $query->filterByInhddept('%fooValue%', Criteria::LIKE); // WHERE InhdDept LIKE '%fooValue%'
     * $query->filterByInhddept(['foo', 'bar']); // WHERE InhdDept IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhddept The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhddept($inhddept = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhddept)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDDEPT, $inhddept, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPllt column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpllt('fooValue');   // WHERE InhdPllt = 'fooValue'
     * $query->filterByInhdpllt('%fooValue%', Criteria::LIKE); // WHERE InhdPllt LIKE '%fooValue%'
     * $query->filterByInhdpllt(['foo', 'bar']); // WHERE InhdPllt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpllt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpllt($inhdpllt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpllt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPLLT, $inhdpllt, $comparison);

        return $this;
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
     * @param mixed $inhdcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdcntrqty($inhdcntrqty = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDCNTRQTY, $inhdcntrqty, $comparison);

        return $this;
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
     * @param mixed $inhdwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdwghttot($inhdwghttot = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDWGHTTOT, $inhdwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdTrackNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdtracknbr('fooValue');   // WHERE InhdTrackNbr = 'fooValue'
     * $query->filterByInhdtracknbr('%fooValue%', Criteria::LIKE); // WHERE InhdTrackNbr LIKE '%fooValue%'
     * $query->filterByInhdtracknbr(['foo', 'bar']); // WHERE InhdTrackNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdtracknbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdtracknbr($inhdtracknbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdtracknbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTRACKNBR, $inhdtracknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickqueue('fooValue');   // WHERE InhdPickQueue = 'fooValue'
     * $query->filterByInhdpickqueue('%fooValue%', Criteria::LIKE); // WHERE InhdPickQueue LIKE '%fooValue%'
     * $query->filterByInhdpickqueue(['foo', 'bar']); // WHERE InhdPickQueue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpickqueue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpickqueue($inhdpickqueue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKQUEUE, $inhdpickqueue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdShipQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdshipqueue('fooValue');   // WHERE InhdShipQueue = 'fooValue'
     * $query->filterByInhdshipqueue('%fooValue%', Criteria::LIKE); // WHERE InhdShipQueue LIKE '%fooValue%'
     * $query->filterByInhdshipqueue(['foo', 'bar']); // WHERE InhdShipQueue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdshipqueue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdshipqueue($inhdshipqueue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdshipqueue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDSHIPQUEUE, $inhdshipqueue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * $query->filterByApvevendid(['foo', 'bar']); // WHERE ApveVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apvevendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdFTVend column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdftvend('fooValue');   // WHERE InhdFTVend = 'fooValue'
     * $query->filterByInhdftvend('%fooValue%', Criteria::LIKE); // WHERE InhdFTVend LIKE '%fooValue%'
     * $query->filterByInhdftvend(['foo', 'bar']); // WHERE InhdFTVend IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdftvend The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdftvend($inhdftvend = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdftvend)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFTVEND, $inhdftvend, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdTranType column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdtrantype('fooValue');   // WHERE InhdTranType = 'fooValue'
     * $query->filterByInhdtrantype('%fooValue%', Criteria::LIKE); // WHERE InhdTranType LIKE '%fooValue%'
     * $query->filterByInhdtrantype(['foo', 'bar']); // WHERE InhdTranType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdtrantype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdtrantype($inhdtrantype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdtrantype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDTRANTYPE, $inhdtrantype, $comparison);

        return $this;
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
     * @param mixed $inhdfrtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdfrtcost($inhdfrtcost = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDFRTCOST, $inhdfrtcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPickCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpickcode('fooValue');   // WHERE InhdPickCode = 'fooValue'
     * $query->filterByInhdpickcode('%fooValue%', Criteria::LIKE); // WHERE InhdPickCode LIKE '%fooValue%'
     * $query->filterByInhdpickcode(['foo', 'bar']); // WHERE InhdPickCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpickcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpickcode($inhdpickcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpickcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPICKCODE, $inhdpickcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdpackcode('fooValue');   // WHERE InhdPackCode = 'fooValue'
     * $query->filterByInhdpackcode('%fooValue%', Criteria::LIKE); // WHERE InhdPackCode LIKE '%fooValue%'
     * $query->filterByInhdpackcode(['foo', 'bar']); // WHERE InhdPackCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdpackcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdpackcode($inhdpackcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDPACKCODE, $inhdpackcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdHold column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdhold('fooValue');   // WHERE InhdHold = 'fooValue'
     * $query->filterByInhdhold('%fooValue%', Criteria::LIKE); // WHERE InhdHold LIKE '%fooValue%'
     * $query->filterByInhdhold(['foo', 'bar']); // WHERE InhdHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdhold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdhold($inhdhold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdhold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDHOLD, $inhdhold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdLabel1PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdlabel1prtfmt('fooValue');   // WHERE InhdLabel1PrtFmt = 'fooValue'
     * $query->filterByInhdlabel1prtfmt('%fooValue%', Criteria::LIKE); // WHERE InhdLabel1PrtFmt LIKE '%fooValue%'
     * $query->filterByInhdlabel1prtfmt(['foo', 'bar']); // WHERE InhdLabel1PrtFmt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdlabel1prtfmt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdlabel1prtfmt($inhdlabel1prtfmt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdlabel1prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDLABEL1PRTFMT, $inhdlabel1prtfmt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdEnteredBy column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdenteredby('fooValue');   // WHERE InhdEnteredBy = 'fooValue'
     * $query->filterByInhdenteredby('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredBy LIKE '%fooValue%'
     * $query->filterByInhdenteredby(['foo', 'bar']); // WHERE InhdEnteredBy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdenteredby The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdenteredby($inhdenteredby = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdenteredby)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDBY, $inhdenteredby, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdEnteredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdentereddate('fooValue');   // WHERE InhdEnteredDate = 'fooValue'
     * $query->filterByInhdentereddate('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredDate LIKE '%fooValue%'
     * $query->filterByInhdentereddate(['foo', 'bar']); // WHERE InhdEnteredDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdentereddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdentereddate($inhdentereddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdentereddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDDATE, $inhdentereddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InhdEnteredTime column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdenteredtime('fooValue');   // WHERE InhdEnteredTime = 'fooValue'
     * $query->filterByInhdenteredtime('%fooValue%', Criteria::LIKE); // WHERE InhdEnteredTime LIKE '%fooValue%'
     * $query->filterByInhdenteredtime(['foo', 'bar']); // WHERE InhdEnteredTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inhdenteredtime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInhdenteredtime($inhdenteredtime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdenteredtime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvTransferOrderTableMap::COL_INHDENTEREDTIME, $inhdenteredtime, $comparison);

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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvTransferOrderTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseRelatedByIntbwhsefrom($warehouse, ?string $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSEFROM, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByWarehouseRelatedByIntbwhsefrom() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseRelatedByIntbwhsefrom relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseRelatedByIntbwhsefrom(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the WarehouseRelatedByIntbwhsefrom relation Warehouse object
     *
     * @param callable(\WarehouseQuery):\WarehouseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseRelatedByIntbwhsefromQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseRelatedByIntbwhsefromQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the WarehouseRelatedByIntbwhsefrom relation to the Warehouse table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseRelatedByIntbwhsefromExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('WarehouseRelatedByIntbwhsefrom', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhsefrom relation to the Warehouse table for a NOT EXISTS query.
     *
     * @see useWarehouseRelatedByIntbwhsefromExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseRelatedByIntbwhsefromNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('WarehouseRelatedByIntbwhsefrom', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhsefrom relation to the Warehouse table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseQuery The inner query object of the IN statement
     */
    public function useInWarehouseRelatedByIntbwhsefromQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('WarehouseRelatedByIntbwhsefrom', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhsefrom relation to the Warehouse table for a NOT IN query.
     *
     * @see useWarehouseRelatedByIntbwhsefromInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseRelatedByIntbwhsefromQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('WarehouseRelatedByIntbwhsefrom', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseRelatedByIntbwhseto($warehouse, ?string $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INTBWHSETO, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByWarehouseRelatedByIntbwhseto() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseRelatedByIntbwhseto relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseRelatedByIntbwhseto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the WarehouseRelatedByIntbwhseto relation Warehouse object
     *
     * @param callable(\WarehouseQuery):\WarehouseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseRelatedByIntbwhsetoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseRelatedByIntbwhsetoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the WarehouseRelatedByIntbwhseto relation to the Warehouse table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseRelatedByIntbwhsetoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('WarehouseRelatedByIntbwhseto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhseto relation to the Warehouse table for a NOT EXISTS query.
     *
     * @see useWarehouseRelatedByIntbwhsetoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseRelatedByIntbwhsetoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('WarehouseRelatedByIntbwhseto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhseto relation to the Warehouse table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseQuery The inner query object of the IN statement
     */
    public function useInWarehouseRelatedByIntbwhsetoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('WarehouseRelatedByIntbwhseto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the WarehouseRelatedByIntbwhseto relation to the Warehouse table for a NOT IN query.
     *
     * @see useWarehouseRelatedByIntbwhsetoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseRelatedByIntbwhsetoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('WarehouseRelatedByIntbwhseto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
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
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, ?string $comparison = null)
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
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomerShipto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @param callable(\CustomerShiptoQuery):\CustomerShiptoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerShiptoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerShiptoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CustomerShipto table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerShiptoQuery The inner query object of the EXISTS statement
     */
    public function useCustomerShiptoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT EXISTS query.
     *
     * @see useCustomerShiptoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerShiptoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerShiptoQuery The inner query object of the IN statement
     */
    public function useInCustomerShiptoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT IN query.
     *
     * @see useCustomerShiptoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerShiptoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Vendor relation Vendor object
     *
     * @param callable(\VendorQuery):\VendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Vendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorQuery The inner query object of the EXISTS statement
     */
    public function useVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT EXISTS query.
     *
     * @see useVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Vendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorQuery The inner query object of the IN statement
     */
    public function useInVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT IN query.
     *
     * @see useVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferDetail object
     *
     * @param \InvTransferDetail|ObjectCollection $invTransferDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, ?string $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferDetail->getInhdnbr(), $comparison);

            return $this;
        } elseif ($invTransferDetail instanceof ObjectCollection) {
            $this
                ->useInvTransferDetailQuery()
                ->filterByPrimaryKeys($invTransferDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferDetail() only accepts arguments of type \InvTransferDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferDetail relation InvTransferDetail object
     *
     * @param callable(\InvTransferDetailQuery):\InvTransferDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferDetailQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useExistsQuery('InvTransferDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for a NOT EXISTS query.
     *
     * @see useInvTransferDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useExistsQuery('InvTransferDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferDetailQuery The inner query object of the IN statement
     */
    public function useInInvTransferDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useInQuery('InvTransferDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for a NOT IN query.
     *
     * @see useInvTransferDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useInQuery('InvTransferDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, ?string $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferLotserial->getInhdnbr(), $comparison);

            return $this;
        } elseif ($invTransferLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferLotserialQuery()
                ->filterByPrimaryKeys($invTransferLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @param callable(\InvTransferLotserialQuery):\InvTransferLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT IN query.
     *
     * @see useInvTransferLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPreAllocatedLotserial object
     *
     * @param \InvTransferPreAllocatedLotserial|ObjectCollection $invTransferPreAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial, ?string $comparison = null)
    {
        if ($invTransferPreAllocatedLotserial instanceof \InvTransferPreAllocatedLotserial) {
            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferPreAllocatedLotserial->getInhdnbr(), $comparison);

            return $this;
        } elseif ($invTransferPreAllocatedLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferPreAllocatedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPreAllocatedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPreAllocatedLotserial() only accepts arguments of type \InvTransferPreAllocatedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPreAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @param callable(\InvTransferPreAllocatedLotserialQuery):\InvTransferPreAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPreAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPreAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPreAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPreAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, ?string $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            $this
                ->addUsingAlias(InvTransferOrderTableMap::COL_INHDNBR, $invTransferPickedLotserial->getInhdnbr(), $comparison);

            return $this;
        } elseif ($invTransferPickedLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferPickedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPickedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @param callable(\InvTransferPickedLotserialQuery):\InvTransferPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvTransferOrder $invTransferOrder Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
