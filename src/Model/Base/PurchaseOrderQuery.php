<?php

namespace Base;

use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_head' table.
 *
 *
 *
 * @method     ChildPurchaseOrderQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderQuery orderByPohdstat($order = Criteria::ASC) Order by the PohdStat column
 * @method     ChildPurchaseOrderQuery orderByPohdref($order = Criteria::ASC) Order by the PohdRef column
 * @method     ChildPurchaseOrderQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildPurchaseOrderQuery orderByApfmshipid($order = Criteria::ASC) Order by the ApfmShipId column
 * @method     ChildPurchaseOrderQuery orderByPohdtoname($order = Criteria::ASC) Order by the PohdToName column
 * @method     ChildPurchaseOrderQuery orderByPohdtoadr1($order = Criteria::ASC) Order by the PohdToAdr1 column
 * @method     ChildPurchaseOrderQuery orderByPohdtoadr2($order = Criteria::ASC) Order by the PohdToAdr2 column
 * @method     ChildPurchaseOrderQuery orderByPohdtoadr3($order = Criteria::ASC) Order by the PohdToAdr3 column
 * @method     ChildPurchaseOrderQuery orderByPohdtoctry($order = Criteria::ASC) Order by the PohdToCtry column
 * @method     ChildPurchaseOrderQuery orderByPohdtocity($order = Criteria::ASC) Order by the PohdToCity column
 * @method     ChildPurchaseOrderQuery orderByPohdtostat($order = Criteria::ASC) Order by the PohdToStat column
 * @method     ChildPurchaseOrderQuery orderByPohdtozipcode($order = Criteria::ASC) Order by the PohdToZipCode column
 * @method     ChildPurchaseOrderQuery orderByPohdptname($order = Criteria::ASC) Order by the PohdPtName column
 * @method     ChildPurchaseOrderQuery orderByPohdptadr1($order = Criteria::ASC) Order by the PohdPtAdr1 column
 * @method     ChildPurchaseOrderQuery orderByPohdptadr2($order = Criteria::ASC) Order by the PohdPtAdr2 column
 * @method     ChildPurchaseOrderQuery orderByPohdptadr3($order = Criteria::ASC) Order by the PohdPtAdr3 column
 * @method     ChildPurchaseOrderQuery orderByPohdptctry($order = Criteria::ASC) Order by the PohdPtCtry column
 * @method     ChildPurchaseOrderQuery orderByPohdptcity($order = Criteria::ASC) Order by the PohdPtCity column
 * @method     ChildPurchaseOrderQuery orderByPohdptstat($order = Criteria::ASC) Order by the PohdPtStat column
 * @method     ChildPurchaseOrderQuery orderByPohdptzipcode($order = Criteria::ASC) Order by the PohdPtZipCode column
 * @method     ChildPurchaseOrderQuery orderByPohdcont($order = Criteria::ASC) Order by the PohdCont column
 * @method     ChildPurchaseOrderQuery orderByPohdordrdate($order = Criteria::ASC) Order by the PohdOrdrDate column
 * @method     ChildPurchaseOrderQuery orderByAptmtermcode($order = Criteria::ASC) Order by the AptmTermCode column
 * @method     ChildPurchaseOrderQuery orderByArtbsviacode($order = Criteria::ASC) Order by the ArtbSviaCode column
 * @method     ChildPurchaseOrderQuery orderByPohdoldfob($order = Criteria::ASC) Order by the PohdOldFob column
 * @method     ChildPurchaseOrderQuery orderByAptbbuyrcode($order = Criteria::ASC) Order by the AptbBuyrCode column
 * @method     ChildPurchaseOrderQuery orderByPohdcolppd($order = Criteria::ASC) Order by the PohdColPpd column
 * @method     ChildPurchaseOrderQuery orderByPohdteleintl($order = Criteria::ASC) Order by the PohdTeleIntl column
 * @method     ChildPurchaseOrderQuery orderByPohdtelenbr($order = Criteria::ASC) Order by the PohdTeleNbr column
 * @method     ChildPurchaseOrderQuery orderByPohdteleext($order = Criteria::ASC) Order by the PohdTeleExt column
 * @method     ChildPurchaseOrderQuery orderByPohdfaxintl($order = Criteria::ASC) Order by the PohdFaxIntl column
 * @method     ChildPurchaseOrderQuery orderByPohdfaxnbr($order = Criteria::ASC) Order by the PohdFaxNbr column
 * @method     ChildPurchaseOrderQuery orderByPohdrcnt($order = Criteria::ASC) Order by the PohdRCnt column
 * @method     ChildPurchaseOrderQuery orderByPohdtaxexem($order = Criteria::ASC) Order by the PohdTaxExem column
 * @method     ChildPurchaseOrderQuery orderByPohdexchctry($order = Criteria::ASC) Order by the PohdExchCtry column
 * @method     ChildPurchaseOrderQuery orderByPohdexchrate($order = Criteria::ASC) Order by the PohdExchRate column
 * @method     ChildPurchaseOrderQuery orderByPohdexptdate($order = Criteria::ASC) Order by the PohdExptDate column
 * @method     ChildPurchaseOrderQuery orderByPohdcancdate($order = Criteria::ASC) Order by the PohdCancDate column
 * @method     ChildPurchaseOrderQuery orderByPohdicnt($order = Criteria::ASC) Order by the PohdICnt column
 * @method     ChildPurchaseOrderQuery orderByPohdfob($order = Criteria::ASC) Order by the PohdFob column
 * @method     ChildPurchaseOrderQuery orderByPohdpickqueue($order = Criteria::ASC) Order by the PohdPickQueue column
 * @method     ChildPurchaseOrderQuery orderByPohdpackedby($order = Criteria::ASC) Order by the PohdPackedBy column
 * @method     ChildPurchaseOrderQuery orderByPohdpackdate($order = Criteria::ASC) Order by the PohdPackDate column
 * @method     ChildPurchaseOrderQuery orderByPohdpacktime($order = Criteria::ASC) Order by the PohdPackTime column
 * @method     ChildPurchaseOrderQuery orderByPohdlandcost($order = Criteria::ASC) Order by the PohdLandCost column
 * @method     ChildPurchaseOrderQuery orderByPohdedipodate($order = Criteria::ASC) Order by the PohdEdiPoDate column
 * @method     ChildPurchaseOrderQuery orderByPohdfuturebuy($order = Criteria::ASC) Order by the PohdFutureBuy column
 * @method     ChildPurchaseOrderQuery orderByPohdemailaddr($order = Criteria::ASC) Order by the PohdEmailAddr column
 * @method     ChildPurchaseOrderQuery orderByPohdshipdate($order = Criteria::ASC) Order by the PohdShipDate column
 * @method     ChildPurchaseOrderQuery orderByPohdackdate($order = Criteria::ASC) Order by the PohdAckDate column
 * @method     ChildPurchaseOrderQuery orderByPohdreleasenbr($order = Criteria::ASC) Order by the PohdReleaseNbr column
 * @method     ChildPurchaseOrderQuery orderByPohdreturnspo($order = Criteria::ASC) Order by the PohdReturnsPo column
 * @method     ChildPurchaseOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderQuery groupByPohdstat() Group by the PohdStat column
 * @method     ChildPurchaseOrderQuery groupByPohdref() Group by the PohdRef column
 * @method     ChildPurchaseOrderQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildPurchaseOrderQuery groupByApfmshipid() Group by the ApfmShipId column
 * @method     ChildPurchaseOrderQuery groupByPohdtoname() Group by the PohdToName column
 * @method     ChildPurchaseOrderQuery groupByPohdtoadr1() Group by the PohdToAdr1 column
 * @method     ChildPurchaseOrderQuery groupByPohdtoadr2() Group by the PohdToAdr2 column
 * @method     ChildPurchaseOrderQuery groupByPohdtoadr3() Group by the PohdToAdr3 column
 * @method     ChildPurchaseOrderQuery groupByPohdtoctry() Group by the PohdToCtry column
 * @method     ChildPurchaseOrderQuery groupByPohdtocity() Group by the PohdToCity column
 * @method     ChildPurchaseOrderQuery groupByPohdtostat() Group by the PohdToStat column
 * @method     ChildPurchaseOrderQuery groupByPohdtozipcode() Group by the PohdToZipCode column
 * @method     ChildPurchaseOrderQuery groupByPohdptname() Group by the PohdPtName column
 * @method     ChildPurchaseOrderQuery groupByPohdptadr1() Group by the PohdPtAdr1 column
 * @method     ChildPurchaseOrderQuery groupByPohdptadr2() Group by the PohdPtAdr2 column
 * @method     ChildPurchaseOrderQuery groupByPohdptadr3() Group by the PohdPtAdr3 column
 * @method     ChildPurchaseOrderQuery groupByPohdptctry() Group by the PohdPtCtry column
 * @method     ChildPurchaseOrderQuery groupByPohdptcity() Group by the PohdPtCity column
 * @method     ChildPurchaseOrderQuery groupByPohdptstat() Group by the PohdPtStat column
 * @method     ChildPurchaseOrderQuery groupByPohdptzipcode() Group by the PohdPtZipCode column
 * @method     ChildPurchaseOrderQuery groupByPohdcont() Group by the PohdCont column
 * @method     ChildPurchaseOrderQuery groupByPohdordrdate() Group by the PohdOrdrDate column
 * @method     ChildPurchaseOrderQuery groupByAptmtermcode() Group by the AptmTermCode column
 * @method     ChildPurchaseOrderQuery groupByArtbsviacode() Group by the ArtbSviaCode column
 * @method     ChildPurchaseOrderQuery groupByPohdoldfob() Group by the PohdOldFob column
 * @method     ChildPurchaseOrderQuery groupByAptbbuyrcode() Group by the AptbBuyrCode column
 * @method     ChildPurchaseOrderQuery groupByPohdcolppd() Group by the PohdColPpd column
 * @method     ChildPurchaseOrderQuery groupByPohdteleintl() Group by the PohdTeleIntl column
 * @method     ChildPurchaseOrderQuery groupByPohdtelenbr() Group by the PohdTeleNbr column
 * @method     ChildPurchaseOrderQuery groupByPohdteleext() Group by the PohdTeleExt column
 * @method     ChildPurchaseOrderQuery groupByPohdfaxintl() Group by the PohdFaxIntl column
 * @method     ChildPurchaseOrderQuery groupByPohdfaxnbr() Group by the PohdFaxNbr column
 * @method     ChildPurchaseOrderQuery groupByPohdrcnt() Group by the PohdRCnt column
 * @method     ChildPurchaseOrderQuery groupByPohdtaxexem() Group by the PohdTaxExem column
 * @method     ChildPurchaseOrderQuery groupByPohdexchctry() Group by the PohdExchCtry column
 * @method     ChildPurchaseOrderQuery groupByPohdexchrate() Group by the PohdExchRate column
 * @method     ChildPurchaseOrderQuery groupByPohdexptdate() Group by the PohdExptDate column
 * @method     ChildPurchaseOrderQuery groupByPohdcancdate() Group by the PohdCancDate column
 * @method     ChildPurchaseOrderQuery groupByPohdicnt() Group by the PohdICnt column
 * @method     ChildPurchaseOrderQuery groupByPohdfob() Group by the PohdFob column
 * @method     ChildPurchaseOrderQuery groupByPohdpickqueue() Group by the PohdPickQueue column
 * @method     ChildPurchaseOrderQuery groupByPohdpackedby() Group by the PohdPackedBy column
 * @method     ChildPurchaseOrderQuery groupByPohdpackdate() Group by the PohdPackDate column
 * @method     ChildPurchaseOrderQuery groupByPohdpacktime() Group by the PohdPackTime column
 * @method     ChildPurchaseOrderQuery groupByPohdlandcost() Group by the PohdLandCost column
 * @method     ChildPurchaseOrderQuery groupByPohdedipodate() Group by the PohdEdiPoDate column
 * @method     ChildPurchaseOrderQuery groupByPohdfuturebuy() Group by the PohdFutureBuy column
 * @method     ChildPurchaseOrderQuery groupByPohdemailaddr() Group by the PohdEmailAddr column
 * @method     ChildPurchaseOrderQuery groupByPohdshipdate() Group by the PohdShipDate column
 * @method     ChildPurchaseOrderQuery groupByPohdackdate() Group by the PohdAckDate column
 * @method     ChildPurchaseOrderQuery groupByPohdreleasenbr() Group by the PohdReleaseNbr column
 * @method     ChildPurchaseOrderQuery groupByPohdreturnspo() Group by the PohdReturnsPo column
 * @method     ChildPurchaseOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildPurchaseOrderQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildPurchaseOrderQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildPurchaseOrderQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildPurchaseOrderQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildPurchaseOrderQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinVendorShipfrom($relationAlias = null) Adds a LEFT JOIN clause to the query using the VendorShipfrom relation
 * @method     ChildPurchaseOrderQuery rightJoinVendorShipfrom($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VendorShipfrom relation
 * @method     ChildPurchaseOrderQuery innerJoinVendorShipfrom($relationAlias = null) Adds a INNER JOIN clause to the query using the VendorShipfrom relation
 *
 * @method     ChildPurchaseOrderQuery joinWithVendorShipfrom($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the VendorShipfrom relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinWithVendorShipfrom() Adds a LEFT JOIN clause and with to the query using the VendorShipfrom relation
 * @method     ChildPurchaseOrderQuery rightJoinWithVendorShipfrom() Adds a RIGHT JOIN clause and with to the query using the VendorShipfrom relation
 * @method     ChildPurchaseOrderQuery innerJoinWithVendorShipfrom() Adds a INNER JOIN clause and with to the query using the VendorShipfrom relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinShipvia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Shipvia relation
 * @method     ChildPurchaseOrderQuery rightJoinShipvia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Shipvia relation
 * @method     ChildPurchaseOrderQuery innerJoinShipvia($relationAlias = null) Adds a INNER JOIN clause to the query using the Shipvia relation
 *
 * @method     ChildPurchaseOrderQuery joinWithShipvia($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Shipvia relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinWithShipvia() Adds a LEFT JOIN clause and with to the query using the Shipvia relation
 * @method     ChildPurchaseOrderQuery rightJoinWithShipvia() Adds a RIGHT JOIN clause and with to the query using the Shipvia relation
 * @method     ChildPurchaseOrderQuery innerJoinWithShipvia() Adds a INNER JOIN clause and with to the query using the Shipvia relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinApInvoice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ApInvoice relation
 * @method     ChildPurchaseOrderQuery rightJoinApInvoice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ApInvoice relation
 * @method     ChildPurchaseOrderQuery innerJoinApInvoice($relationAlias = null) Adds a INNER JOIN clause to the query using the ApInvoice relation
 *
 * @method     ChildPurchaseOrderQuery joinWithApInvoice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ApInvoice relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinWithApInvoice() Adds a LEFT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildPurchaseOrderQuery rightJoinWithApInvoice() Adds a RIGHT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildPurchaseOrderQuery innerJoinWithApInvoice() Adds a INNER JOIN clause and with to the query using the ApInvoice relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinPurchaseOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderQuery rightJoinPurchaseOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderQuery innerJoinPurchaseOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderQuery joinWithPurchaseOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderQuery leftJoinWithPurchaseOrderDetail() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderQuery rightJoinWithPurchaseOrderDetail() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderQuery innerJoinWithPurchaseOrderDetail() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     \VendorQuery|\VendorShipfromQuery|\ShipviaQuery|\ApInvoiceQuery|\PurchaseOrderDetailQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrder findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrder matching the query
 * @method     ChildPurchaseOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrder matching the query, or a new ChildPurchaseOrder object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrder findOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrder filtered by the PohdNbr column
 * @method     ChildPurchaseOrder findOneByPohdstat(string $PohdStat) Return the first ChildPurchaseOrder filtered by the PohdStat column
 * @method     ChildPurchaseOrder findOneByPohdref(string $PohdRef) Return the first ChildPurchaseOrder filtered by the PohdRef column
 * @method     ChildPurchaseOrder findOneByApvevendid(string $ApveVendId) Return the first ChildPurchaseOrder filtered by the ApveVendId column
 * @method     ChildPurchaseOrder findOneByApfmshipid(string $ApfmShipId) Return the first ChildPurchaseOrder filtered by the ApfmShipId column
 * @method     ChildPurchaseOrder findOneByPohdtoname(string $PohdToName) Return the first ChildPurchaseOrder filtered by the PohdToName column
 * @method     ChildPurchaseOrder findOneByPohdtoadr1(string $PohdToAdr1) Return the first ChildPurchaseOrder filtered by the PohdToAdr1 column
 * @method     ChildPurchaseOrder findOneByPohdtoadr2(string $PohdToAdr2) Return the first ChildPurchaseOrder filtered by the PohdToAdr2 column
 * @method     ChildPurchaseOrder findOneByPohdtoadr3(string $PohdToAdr3) Return the first ChildPurchaseOrder filtered by the PohdToAdr3 column
 * @method     ChildPurchaseOrder findOneByPohdtoctry(string $PohdToCtry) Return the first ChildPurchaseOrder filtered by the PohdToCtry column
 * @method     ChildPurchaseOrder findOneByPohdtocity(string $PohdToCity) Return the first ChildPurchaseOrder filtered by the PohdToCity column
 * @method     ChildPurchaseOrder findOneByPohdtostat(string $PohdToStat) Return the first ChildPurchaseOrder filtered by the PohdToStat column
 * @method     ChildPurchaseOrder findOneByPohdtozipcode(string $PohdToZipCode) Return the first ChildPurchaseOrder filtered by the PohdToZipCode column
 * @method     ChildPurchaseOrder findOneByPohdptname(string $PohdPtName) Return the first ChildPurchaseOrder filtered by the PohdPtName column
 * @method     ChildPurchaseOrder findOneByPohdptadr1(string $PohdPtAdr1) Return the first ChildPurchaseOrder filtered by the PohdPtAdr1 column
 * @method     ChildPurchaseOrder findOneByPohdptadr2(string $PohdPtAdr2) Return the first ChildPurchaseOrder filtered by the PohdPtAdr2 column
 * @method     ChildPurchaseOrder findOneByPohdptadr3(string $PohdPtAdr3) Return the first ChildPurchaseOrder filtered by the PohdPtAdr3 column
 * @method     ChildPurchaseOrder findOneByPohdptctry(string $PohdPtCtry) Return the first ChildPurchaseOrder filtered by the PohdPtCtry column
 * @method     ChildPurchaseOrder findOneByPohdptcity(string $PohdPtCity) Return the first ChildPurchaseOrder filtered by the PohdPtCity column
 * @method     ChildPurchaseOrder findOneByPohdptstat(string $PohdPtStat) Return the first ChildPurchaseOrder filtered by the PohdPtStat column
 * @method     ChildPurchaseOrder findOneByPohdptzipcode(string $PohdPtZipCode) Return the first ChildPurchaseOrder filtered by the PohdPtZipCode column
 * @method     ChildPurchaseOrder findOneByPohdcont(string $PohdCont) Return the first ChildPurchaseOrder filtered by the PohdCont column
 * @method     ChildPurchaseOrder findOneByPohdordrdate(string $PohdOrdrDate) Return the first ChildPurchaseOrder filtered by the PohdOrdrDate column
 * @method     ChildPurchaseOrder findOneByAptmtermcode(string $AptmTermCode) Return the first ChildPurchaseOrder filtered by the AptmTermCode column
 * @method     ChildPurchaseOrder findOneByArtbsviacode(string $ArtbSviaCode) Return the first ChildPurchaseOrder filtered by the ArtbSviaCode column
 * @method     ChildPurchaseOrder findOneByPohdoldfob(string $PohdOldFob) Return the first ChildPurchaseOrder filtered by the PohdOldFob column
 * @method     ChildPurchaseOrder findOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildPurchaseOrder filtered by the AptbBuyrCode column
 * @method     ChildPurchaseOrder findOneByPohdcolppd(string $PohdColPpd) Return the first ChildPurchaseOrder filtered by the PohdColPpd column
 * @method     ChildPurchaseOrder findOneByPohdteleintl(string $PohdTeleIntl) Return the first ChildPurchaseOrder filtered by the PohdTeleIntl column
 * @method     ChildPurchaseOrder findOneByPohdtelenbr(string $PohdTeleNbr) Return the first ChildPurchaseOrder filtered by the PohdTeleNbr column
 * @method     ChildPurchaseOrder findOneByPohdteleext(string $PohdTeleExt) Return the first ChildPurchaseOrder filtered by the PohdTeleExt column
 * @method     ChildPurchaseOrder findOneByPohdfaxintl(string $PohdFaxIntl) Return the first ChildPurchaseOrder filtered by the PohdFaxIntl column
 * @method     ChildPurchaseOrder findOneByPohdfaxnbr(string $PohdFaxNbr) Return the first ChildPurchaseOrder filtered by the PohdFaxNbr column
 * @method     ChildPurchaseOrder findOneByPohdrcnt(string $PohdRCnt) Return the first ChildPurchaseOrder filtered by the PohdRCnt column
 * @method     ChildPurchaseOrder findOneByPohdtaxexem(string $PohdTaxExem) Return the first ChildPurchaseOrder filtered by the PohdTaxExem column
 * @method     ChildPurchaseOrder findOneByPohdexchctry(string $PohdExchCtry) Return the first ChildPurchaseOrder filtered by the PohdExchCtry column
 * @method     ChildPurchaseOrder findOneByPohdexchrate(string $PohdExchRate) Return the first ChildPurchaseOrder filtered by the PohdExchRate column
 * @method     ChildPurchaseOrder findOneByPohdexptdate(string $PohdExptDate) Return the first ChildPurchaseOrder filtered by the PohdExptDate column
 * @method     ChildPurchaseOrder findOneByPohdcancdate(string $PohdCancDate) Return the first ChildPurchaseOrder filtered by the PohdCancDate column
 * @method     ChildPurchaseOrder findOneByPohdicnt(string $PohdICnt) Return the first ChildPurchaseOrder filtered by the PohdICnt column
 * @method     ChildPurchaseOrder findOneByPohdfob(string $PohdFob) Return the first ChildPurchaseOrder filtered by the PohdFob column
 * @method     ChildPurchaseOrder findOneByPohdpickqueue(string $PohdPickQueue) Return the first ChildPurchaseOrder filtered by the PohdPickQueue column
 * @method     ChildPurchaseOrder findOneByPohdpackedby(string $PohdPackedBy) Return the first ChildPurchaseOrder filtered by the PohdPackedBy column
 * @method     ChildPurchaseOrder findOneByPohdpackdate(string $PohdPackDate) Return the first ChildPurchaseOrder filtered by the PohdPackDate column
 * @method     ChildPurchaseOrder findOneByPohdpacktime(string $PohdPackTime) Return the first ChildPurchaseOrder filtered by the PohdPackTime column
 * @method     ChildPurchaseOrder findOneByPohdlandcost(string $PohdLandCost) Return the first ChildPurchaseOrder filtered by the PohdLandCost column
 * @method     ChildPurchaseOrder findOneByPohdedipodate(string $PohdEdiPoDate) Return the first ChildPurchaseOrder filtered by the PohdEdiPoDate column
 * @method     ChildPurchaseOrder findOneByPohdfuturebuy(string $PohdFutureBuy) Return the first ChildPurchaseOrder filtered by the PohdFutureBuy column
 * @method     ChildPurchaseOrder findOneByPohdemailaddr(string $PohdEmailAddr) Return the first ChildPurchaseOrder filtered by the PohdEmailAddr column
 * @method     ChildPurchaseOrder findOneByPohdshipdate(string $PohdShipDate) Return the first ChildPurchaseOrder filtered by the PohdShipDate column
 * @method     ChildPurchaseOrder findOneByPohdackdate(string $PohdAckDate) Return the first ChildPurchaseOrder filtered by the PohdAckDate column
 * @method     ChildPurchaseOrder findOneByPohdreleasenbr(int $PohdReleaseNbr) Return the first ChildPurchaseOrder filtered by the PohdReleaseNbr column
 * @method     ChildPurchaseOrder findOneByPohdreturnspo(string $PohdReturnsPo) Return the first ChildPurchaseOrder filtered by the PohdReturnsPo column
 * @method     ChildPurchaseOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrder filtered by the DateUpdtd column
 * @method     ChildPurchaseOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrder filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrder findOneByDummy(string $dummy) Return the first ChildPurchaseOrder filtered by the dummy column *

 * @method     ChildPurchaseOrder requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrder requireOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrder filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdstat(string $PohdStat) Return the first ChildPurchaseOrder filtered by the PohdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdref(string $PohdRef) Return the first ChildPurchaseOrder filtered by the PohdRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByApvevendid(string $ApveVendId) Return the first ChildPurchaseOrder filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByApfmshipid(string $ApfmShipId) Return the first ChildPurchaseOrder filtered by the ApfmShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtoname(string $PohdToName) Return the first ChildPurchaseOrder filtered by the PohdToName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtoadr1(string $PohdToAdr1) Return the first ChildPurchaseOrder filtered by the PohdToAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtoadr2(string $PohdToAdr2) Return the first ChildPurchaseOrder filtered by the PohdToAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtoadr3(string $PohdToAdr3) Return the first ChildPurchaseOrder filtered by the PohdToAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtoctry(string $PohdToCtry) Return the first ChildPurchaseOrder filtered by the PohdToCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtocity(string $PohdToCity) Return the first ChildPurchaseOrder filtered by the PohdToCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtostat(string $PohdToStat) Return the first ChildPurchaseOrder filtered by the PohdToStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtozipcode(string $PohdToZipCode) Return the first ChildPurchaseOrder filtered by the PohdToZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptname(string $PohdPtName) Return the first ChildPurchaseOrder filtered by the PohdPtName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptadr1(string $PohdPtAdr1) Return the first ChildPurchaseOrder filtered by the PohdPtAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptadr2(string $PohdPtAdr2) Return the first ChildPurchaseOrder filtered by the PohdPtAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptadr3(string $PohdPtAdr3) Return the first ChildPurchaseOrder filtered by the PohdPtAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptctry(string $PohdPtCtry) Return the first ChildPurchaseOrder filtered by the PohdPtCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptcity(string $PohdPtCity) Return the first ChildPurchaseOrder filtered by the PohdPtCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptstat(string $PohdPtStat) Return the first ChildPurchaseOrder filtered by the PohdPtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdptzipcode(string $PohdPtZipCode) Return the first ChildPurchaseOrder filtered by the PohdPtZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdcont(string $PohdCont) Return the first ChildPurchaseOrder filtered by the PohdCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdordrdate(string $PohdOrdrDate) Return the first ChildPurchaseOrder filtered by the PohdOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByAptmtermcode(string $AptmTermCode) Return the first ChildPurchaseOrder filtered by the AptmTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByArtbsviacode(string $ArtbSviaCode) Return the first ChildPurchaseOrder filtered by the ArtbSviaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdoldfob(string $PohdOldFob) Return the first ChildPurchaseOrder filtered by the PohdOldFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildPurchaseOrder filtered by the AptbBuyrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdcolppd(string $PohdColPpd) Return the first ChildPurchaseOrder filtered by the PohdColPpd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdteleintl(string $PohdTeleIntl) Return the first ChildPurchaseOrder filtered by the PohdTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtelenbr(string $PohdTeleNbr) Return the first ChildPurchaseOrder filtered by the PohdTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdteleext(string $PohdTeleExt) Return the first ChildPurchaseOrder filtered by the PohdTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdfaxintl(string $PohdFaxIntl) Return the first ChildPurchaseOrder filtered by the PohdFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdfaxnbr(string $PohdFaxNbr) Return the first ChildPurchaseOrder filtered by the PohdFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdrcnt(string $PohdRCnt) Return the first ChildPurchaseOrder filtered by the PohdRCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdtaxexem(string $PohdTaxExem) Return the first ChildPurchaseOrder filtered by the PohdTaxExem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdexchctry(string $PohdExchCtry) Return the first ChildPurchaseOrder filtered by the PohdExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdexchrate(string $PohdExchRate) Return the first ChildPurchaseOrder filtered by the PohdExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdexptdate(string $PohdExptDate) Return the first ChildPurchaseOrder filtered by the PohdExptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdcancdate(string $PohdCancDate) Return the first ChildPurchaseOrder filtered by the PohdCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdicnt(string $PohdICnt) Return the first ChildPurchaseOrder filtered by the PohdICnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdfob(string $PohdFob) Return the first ChildPurchaseOrder filtered by the PohdFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdpickqueue(string $PohdPickQueue) Return the first ChildPurchaseOrder filtered by the PohdPickQueue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdpackedby(string $PohdPackedBy) Return the first ChildPurchaseOrder filtered by the PohdPackedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdpackdate(string $PohdPackDate) Return the first ChildPurchaseOrder filtered by the PohdPackDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdpacktime(string $PohdPackTime) Return the first ChildPurchaseOrder filtered by the PohdPackTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdlandcost(string $PohdLandCost) Return the first ChildPurchaseOrder filtered by the PohdLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdedipodate(string $PohdEdiPoDate) Return the first ChildPurchaseOrder filtered by the PohdEdiPoDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdfuturebuy(string $PohdFutureBuy) Return the first ChildPurchaseOrder filtered by the PohdFutureBuy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdemailaddr(string $PohdEmailAddr) Return the first ChildPurchaseOrder filtered by the PohdEmailAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdshipdate(string $PohdShipDate) Return the first ChildPurchaseOrder filtered by the PohdShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdackdate(string $PohdAckDate) Return the first ChildPurchaseOrder filtered by the PohdAckDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdreleasenbr(int $PohdReleaseNbr) Return the first ChildPurchaseOrder filtered by the PohdReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByPohdreturnspo(string $PohdReturnsPo) Return the first ChildPurchaseOrder filtered by the PohdReturnsPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrder requireOneByDummy(string $dummy) Return the first ChildPurchaseOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrder objects based on current ModelCriteria
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdnbr(string $PohdNbr) Return ChildPurchaseOrder objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdstat(string $PohdStat) Return ChildPurchaseOrder objects filtered by the PohdStat column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdref(string $PohdRef) Return ChildPurchaseOrder objects filtered by the PohdRef column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildPurchaseOrder objects filtered by the ApveVendId column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByApfmshipid(string $ApfmShipId) Return ChildPurchaseOrder objects filtered by the ApfmShipId column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtoname(string $PohdToName) Return ChildPurchaseOrder objects filtered by the PohdToName column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtoadr1(string $PohdToAdr1) Return ChildPurchaseOrder objects filtered by the PohdToAdr1 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtoadr2(string $PohdToAdr2) Return ChildPurchaseOrder objects filtered by the PohdToAdr2 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtoadr3(string $PohdToAdr3) Return ChildPurchaseOrder objects filtered by the PohdToAdr3 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtoctry(string $PohdToCtry) Return ChildPurchaseOrder objects filtered by the PohdToCtry column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtocity(string $PohdToCity) Return ChildPurchaseOrder objects filtered by the PohdToCity column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtostat(string $PohdToStat) Return ChildPurchaseOrder objects filtered by the PohdToStat column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtozipcode(string $PohdToZipCode) Return ChildPurchaseOrder objects filtered by the PohdToZipCode column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptname(string $PohdPtName) Return ChildPurchaseOrder objects filtered by the PohdPtName column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptadr1(string $PohdPtAdr1) Return ChildPurchaseOrder objects filtered by the PohdPtAdr1 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptadr2(string $PohdPtAdr2) Return ChildPurchaseOrder objects filtered by the PohdPtAdr2 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptadr3(string $PohdPtAdr3) Return ChildPurchaseOrder objects filtered by the PohdPtAdr3 column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptctry(string $PohdPtCtry) Return ChildPurchaseOrder objects filtered by the PohdPtCtry column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptcity(string $PohdPtCity) Return ChildPurchaseOrder objects filtered by the PohdPtCity column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptstat(string $PohdPtStat) Return ChildPurchaseOrder objects filtered by the PohdPtStat column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdptzipcode(string $PohdPtZipCode) Return ChildPurchaseOrder objects filtered by the PohdPtZipCode column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdcont(string $PohdCont) Return ChildPurchaseOrder objects filtered by the PohdCont column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdordrdate(string $PohdOrdrDate) Return ChildPurchaseOrder objects filtered by the PohdOrdrDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByAptmtermcode(string $AptmTermCode) Return ChildPurchaseOrder objects filtered by the AptmTermCode column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByArtbsviacode(string $ArtbSviaCode) Return ChildPurchaseOrder objects filtered by the ArtbSviaCode column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdoldfob(string $PohdOldFob) Return ChildPurchaseOrder objects filtered by the PohdOldFob column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByAptbbuyrcode(string $AptbBuyrCode) Return ChildPurchaseOrder objects filtered by the AptbBuyrCode column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdcolppd(string $PohdColPpd) Return ChildPurchaseOrder objects filtered by the PohdColPpd column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdteleintl(string $PohdTeleIntl) Return ChildPurchaseOrder objects filtered by the PohdTeleIntl column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtelenbr(string $PohdTeleNbr) Return ChildPurchaseOrder objects filtered by the PohdTeleNbr column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdteleext(string $PohdTeleExt) Return ChildPurchaseOrder objects filtered by the PohdTeleExt column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdfaxintl(string $PohdFaxIntl) Return ChildPurchaseOrder objects filtered by the PohdFaxIntl column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdfaxnbr(string $PohdFaxNbr) Return ChildPurchaseOrder objects filtered by the PohdFaxNbr column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdrcnt(string $PohdRCnt) Return ChildPurchaseOrder objects filtered by the PohdRCnt column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdtaxexem(string $PohdTaxExem) Return ChildPurchaseOrder objects filtered by the PohdTaxExem column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdexchctry(string $PohdExchCtry) Return ChildPurchaseOrder objects filtered by the PohdExchCtry column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdexchrate(string $PohdExchRate) Return ChildPurchaseOrder objects filtered by the PohdExchRate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdexptdate(string $PohdExptDate) Return ChildPurchaseOrder objects filtered by the PohdExptDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdcancdate(string $PohdCancDate) Return ChildPurchaseOrder objects filtered by the PohdCancDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdicnt(string $PohdICnt) Return ChildPurchaseOrder objects filtered by the PohdICnt column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdfob(string $PohdFob) Return ChildPurchaseOrder objects filtered by the PohdFob column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdpickqueue(string $PohdPickQueue) Return ChildPurchaseOrder objects filtered by the PohdPickQueue column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdpackedby(string $PohdPackedBy) Return ChildPurchaseOrder objects filtered by the PohdPackedBy column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdpackdate(string $PohdPackDate) Return ChildPurchaseOrder objects filtered by the PohdPackDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdpacktime(string $PohdPackTime) Return ChildPurchaseOrder objects filtered by the PohdPackTime column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdlandcost(string $PohdLandCost) Return ChildPurchaseOrder objects filtered by the PohdLandCost column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdedipodate(string $PohdEdiPoDate) Return ChildPurchaseOrder objects filtered by the PohdEdiPoDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdfuturebuy(string $PohdFutureBuy) Return ChildPurchaseOrder objects filtered by the PohdFutureBuy column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdemailaddr(string $PohdEmailAddr) Return ChildPurchaseOrder objects filtered by the PohdEmailAddr column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdshipdate(string $PohdShipDate) Return ChildPurchaseOrder objects filtered by the PohdShipDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdackdate(string $PohdAckDate) Return ChildPurchaseOrder objects filtered by the PohdAckDate column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdreleasenbr(int $PohdReleaseNbr) Return ChildPurchaseOrder objects filtered by the PohdReleaseNbr column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByPohdreturnspo(string $PohdReturnsPo) Return ChildPurchaseOrder objects filtered by the PohdReturnsPo column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrder objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrder objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrder objects filtered by the dummy column
 * @method     ChildPurchaseOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderQuery();
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
     * @return ChildPurchaseOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPurchaseOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PohdNbr, PohdStat, PohdRef, ApveVendId, ApfmShipId, PohdToName, PohdToAdr1, PohdToAdr2, PohdToAdr3, PohdToCtry, PohdToCity, PohdToStat, PohdToZipCode, PohdPtName, PohdPtAdr1, PohdPtAdr2, PohdPtAdr3, PohdPtCtry, PohdPtCity, PohdPtStat, PohdPtZipCode, PohdCont, PohdOrdrDate, AptmTermCode, ArtbSviaCode, PohdOldFob, AptbBuyrCode, PohdColPpd, PohdTeleIntl, PohdTeleNbr, PohdTeleExt, PohdFaxIntl, PohdFaxNbr, PohdRCnt, PohdTaxExem, PohdExchCtry, PohdExchRate, PohdExptDate, PohdCancDate, PohdICnt, PohdFob, PohdPickQueue, PohdPackedBy, PohdPackDate, PohdPackTime, PohdLandCost, PohdEdiPoDate, PohdFutureBuy, PohdEmailAddr, PohdShipDate, PohdAckDate, PohdReleaseNbr, PohdReturnsPo, DateUpdtd, TimeUpdtd, dummy FROM po_head WHERE PohdNbr = :p0';
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
            /** @var ChildPurchaseOrder $obj */
            $obj = new ChildPurchaseOrder();
            $obj->hydrate($row);
            PurchaseOrderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPurchaseOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PohdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdnbr('fooValue');   // WHERE PohdNbr = 'fooValue'
     * $query->filterByPohdnbr('%fooValue%', Criteria::LIKE); // WHERE PohdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $pohdnbr, $comparison);
    }

    /**
     * Filter the query on the PohdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdstat('fooValue');   // WHERE PohdStat = 'fooValue'
     * $query->filterByPohdstat('%fooValue%', Criteria::LIKE); // WHERE PohdStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdstat($pohdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDSTAT, $pohdstat, $comparison);
    }

    /**
     * Filter the query on the PohdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdref('fooValue');   // WHERE PohdRef = 'fooValue'
     * $query->filterByPohdref('%fooValue%', Criteria::LIKE); // WHERE PohdRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdref($pohdref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDREF, $pohdref, $comparison);
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApfmShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmshipid('fooValue');   // WHERE ApfmShipId = 'fooValue'
     * $query->filterByApfmshipid('%fooValue%', Criteria::LIKE); // WHERE ApfmShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByApfmshipid($apfmshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_APFMSHIPID, $apfmshipid, $comparison);
    }

    /**
     * Filter the query on the PohdToName column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtoname('fooValue');   // WHERE PohdToName = 'fooValue'
     * $query->filterByPohdtoname('%fooValue%', Criteria::LIKE); // WHERE PohdToName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtoname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtoname($pohdtoname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtoname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTONAME, $pohdtoname, $comparison);
    }

    /**
     * Filter the query on the PohdToAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtoadr1('fooValue');   // WHERE PohdToAdr1 = 'fooValue'
     * $query->filterByPohdtoadr1('%fooValue%', Criteria::LIKE); // WHERE PohdToAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtoadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtoadr1($pohdtoadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtoadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOADR1, $pohdtoadr1, $comparison);
    }

    /**
     * Filter the query on the PohdToAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtoadr2('fooValue');   // WHERE PohdToAdr2 = 'fooValue'
     * $query->filterByPohdtoadr2('%fooValue%', Criteria::LIKE); // WHERE PohdToAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtoadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtoadr2($pohdtoadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtoadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOADR2, $pohdtoadr2, $comparison);
    }

    /**
     * Filter the query on the PohdToAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtoadr3('fooValue');   // WHERE PohdToAdr3 = 'fooValue'
     * $query->filterByPohdtoadr3('%fooValue%', Criteria::LIKE); // WHERE PohdToAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtoadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtoadr3($pohdtoadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtoadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOADR3, $pohdtoadr3, $comparison);
    }

    /**
     * Filter the query on the PohdToCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtoctry('fooValue');   // WHERE PohdToCtry = 'fooValue'
     * $query->filterByPohdtoctry('%fooValue%', Criteria::LIKE); // WHERE PohdToCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtoctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtoctry($pohdtoctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtoctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOCTRY, $pohdtoctry, $comparison);
    }

    /**
     * Filter the query on the PohdToCity column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtocity('fooValue');   // WHERE PohdToCity = 'fooValue'
     * $query->filterByPohdtocity('%fooValue%', Criteria::LIKE); // WHERE PohdToCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtocity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtocity($pohdtocity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtocity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOCITY, $pohdtocity, $comparison);
    }

    /**
     * Filter the query on the PohdToStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtostat('fooValue');   // WHERE PohdToStat = 'fooValue'
     * $query->filterByPohdtostat('%fooValue%', Criteria::LIKE); // WHERE PohdToStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtostat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtostat($pohdtostat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtostat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOSTAT, $pohdtostat, $comparison);
    }

    /**
     * Filter the query on the PohdToZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtozipcode('fooValue');   // WHERE PohdToZipCode = 'fooValue'
     * $query->filterByPohdtozipcode('%fooValue%', Criteria::LIKE); // WHERE PohdToZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtozipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtozipcode($pohdtozipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtozipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTOZIPCODE, $pohdtozipcode, $comparison);
    }

    /**
     * Filter the query on the PohdPtName column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptname('fooValue');   // WHERE PohdPtName = 'fooValue'
     * $query->filterByPohdptname('%fooValue%', Criteria::LIKE); // WHERE PohdPtName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptname($pohdptname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTNAME, $pohdptname, $comparison);
    }

    /**
     * Filter the query on the PohdPtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptadr1('fooValue');   // WHERE PohdPtAdr1 = 'fooValue'
     * $query->filterByPohdptadr1('%fooValue%', Criteria::LIKE); // WHERE PohdPtAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptadr1($pohdptadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTADR1, $pohdptadr1, $comparison);
    }

    /**
     * Filter the query on the PohdPtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptadr2('fooValue');   // WHERE PohdPtAdr2 = 'fooValue'
     * $query->filterByPohdptadr2('%fooValue%', Criteria::LIKE); // WHERE PohdPtAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptadr2($pohdptadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTADR2, $pohdptadr2, $comparison);
    }

    /**
     * Filter the query on the PohdPtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptadr3('fooValue');   // WHERE PohdPtAdr3 = 'fooValue'
     * $query->filterByPohdptadr3('%fooValue%', Criteria::LIKE); // WHERE PohdPtAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptadr3($pohdptadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTADR3, $pohdptadr3, $comparison);
    }

    /**
     * Filter the query on the PohdPtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptctry('fooValue');   // WHERE PohdPtCtry = 'fooValue'
     * $query->filterByPohdptctry('%fooValue%', Criteria::LIKE); // WHERE PohdPtCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptctry($pohdptctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTCTRY, $pohdptctry, $comparison);
    }

    /**
     * Filter the query on the PohdPtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptcity('fooValue');   // WHERE PohdPtCity = 'fooValue'
     * $query->filterByPohdptcity('%fooValue%', Criteria::LIKE); // WHERE PohdPtCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptcity($pohdptcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTCITY, $pohdptcity, $comparison);
    }

    /**
     * Filter the query on the PohdPtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptstat('fooValue');   // WHERE PohdPtStat = 'fooValue'
     * $query->filterByPohdptstat('%fooValue%', Criteria::LIKE); // WHERE PohdPtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptstat($pohdptstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTSTAT, $pohdptstat, $comparison);
    }

    /**
     * Filter the query on the PohdPtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdptzipcode('fooValue');   // WHERE PohdPtZipCode = 'fooValue'
     * $query->filterByPohdptzipcode('%fooValue%', Criteria::LIKE); // WHERE PohdPtZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdptzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdptzipcode($pohdptzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdptzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPTZIPCODE, $pohdptzipcode, $comparison);
    }

    /**
     * Filter the query on the PohdCont column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdcont('fooValue');   // WHERE PohdCont = 'fooValue'
     * $query->filterByPohdcont('%fooValue%', Criteria::LIKE); // WHERE PohdCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdcont($pohdcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDCONT, $pohdcont, $comparison);
    }

    /**
     * Filter the query on the PohdOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdordrdate('fooValue');   // WHERE PohdOrdrDate = 'fooValue'
     * $query->filterByPohdordrdate('%fooValue%', Criteria::LIKE); // WHERE PohdOrdrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdordrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdordrdate($pohdordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDORDRDATE, $pohdordrdate, $comparison);
    }

    /**
     * Filter the query on the AptmTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmtermcode('fooValue');   // WHERE AptmTermCode = 'fooValue'
     * $query->filterByAptmtermcode('%fooValue%', Criteria::LIKE); // WHERE AptmTermCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptmtermcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByAptmtermcode($aptmtermcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_APTMTERMCODE, $aptmtermcode, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviacode('fooValue');   // WHERE ArtbSviaCode = 'fooValue'
     * $query->filterByArtbsviacode('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByArtbsviacode($artbsviacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_ARTBSVIACODE, $artbsviacode, $comparison);
    }

    /**
     * Filter the query on the PohdOldFob column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdoldfob('fooValue');   // WHERE PohdOldFob = 'fooValue'
     * $query->filterByPohdoldfob('%fooValue%', Criteria::LIKE); // WHERE PohdOldFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdoldfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdoldfob($pohdoldfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdoldfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDOLDFOB, $pohdoldfob, $comparison);
    }

    /**
     * Filter the query on the AptbBuyrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyrcode('fooValue');   // WHERE AptbBuyrCode = 'fooValue'
     * $query->filterByAptbbuyrcode('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbbuyrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByAptbbuyrcode($aptbbuyrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_APTBBUYRCODE, $aptbbuyrcode, $comparison);
    }

    /**
     * Filter the query on the PohdColPpd column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdcolppd('fooValue');   // WHERE PohdColPpd = 'fooValue'
     * $query->filterByPohdcolppd('%fooValue%', Criteria::LIKE); // WHERE PohdColPpd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdcolppd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdcolppd($pohdcolppd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdcolppd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDCOLPPD, $pohdcolppd, $comparison);
    }

    /**
     * Filter the query on the PohdTeleIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdteleintl('fooValue');   // WHERE PohdTeleIntl = 'fooValue'
     * $query->filterByPohdteleintl('%fooValue%', Criteria::LIKE); // WHERE PohdTeleIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdteleintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdteleintl($pohdteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTELEINTL, $pohdteleintl, $comparison);
    }

    /**
     * Filter the query on the PohdTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtelenbr('fooValue');   // WHERE PohdTeleNbr = 'fooValue'
     * $query->filterByPohdtelenbr('%fooValue%', Criteria::LIKE); // WHERE PohdTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtelenbr($pohdtelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTELENBR, $pohdtelenbr, $comparison);
    }

    /**
     * Filter the query on the PohdTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdteleext('fooValue');   // WHERE PohdTeleExt = 'fooValue'
     * $query->filterByPohdteleext('%fooValue%', Criteria::LIKE); // WHERE PohdTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdteleext($pohdteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTELEEXT, $pohdteleext, $comparison);
    }

    /**
     * Filter the query on the PohdFaxIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdfaxintl('fooValue');   // WHERE PohdFaxIntl = 'fooValue'
     * $query->filterByPohdfaxintl('%fooValue%', Criteria::LIKE); // WHERE PohdFaxIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdfaxintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdfaxintl($pohdfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDFAXINTL, $pohdfaxintl, $comparison);
    }

    /**
     * Filter the query on the PohdFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdfaxnbr('fooValue');   // WHERE PohdFaxNbr = 'fooValue'
     * $query->filterByPohdfaxnbr('%fooValue%', Criteria::LIKE); // WHERE PohdFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdfaxnbr($pohdfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDFAXNBR, $pohdfaxnbr, $comparison);
    }

    /**
     * Filter the query on the PohdRCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdrcnt('fooValue');   // WHERE PohdRCnt = 'fooValue'
     * $query->filterByPohdrcnt('%fooValue%', Criteria::LIKE); // WHERE PohdRCnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdrcnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdrcnt($pohdrcnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdrcnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDRCNT, $pohdrcnt, $comparison);
    }

    /**
     * Filter the query on the PohdTaxExem column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdtaxexem('fooValue');   // WHERE PohdTaxExem = 'fooValue'
     * $query->filterByPohdtaxexem('%fooValue%', Criteria::LIKE); // WHERE PohdTaxExem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdtaxexem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdtaxexem($pohdtaxexem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdtaxexem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDTAXEXEM, $pohdtaxexem, $comparison);
    }

    /**
     * Filter the query on the PohdExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdexchctry('fooValue');   // WHERE PohdExchCtry = 'fooValue'
     * $query->filterByPohdexchctry('%fooValue%', Criteria::LIKE); // WHERE PohdExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdexchctry($pohdexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEXCHCTRY, $pohdexchctry, $comparison);
    }

    /**
     * Filter the query on the PohdExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdexchrate(1234); // WHERE PohdExchRate = 1234
     * $query->filterByPohdexchrate(array(12, 34)); // WHERE PohdExchRate IN (12, 34)
     * $query->filterByPohdexchrate(array('min' => 12)); // WHERE PohdExchRate > 12
     * </code>
     *
     * @param     mixed $pohdexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdexchrate($pohdexchrate = null, $comparison = null)
    {
        if (is_array($pohdexchrate)) {
            $useMinMax = false;
            if (isset($pohdexchrate['min'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEXCHRATE, $pohdexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pohdexchrate['max'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEXCHRATE, $pohdexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEXCHRATE, $pohdexchrate, $comparison);
    }

    /**
     * Filter the query on the PohdExptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdexptdate('fooValue');   // WHERE PohdExptDate = 'fooValue'
     * $query->filterByPohdexptdate('%fooValue%', Criteria::LIKE); // WHERE PohdExptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdexptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdexptdate($pohdexptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdexptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEXPTDATE, $pohdexptdate, $comparison);
    }

    /**
     * Filter the query on the PohdCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdcancdate('fooValue');   // WHERE PohdCancDate = 'fooValue'
     * $query->filterByPohdcancdate('%fooValue%', Criteria::LIKE); // WHERE PohdCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdcancdate($pohdcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDCANCDATE, $pohdcancdate, $comparison);
    }

    /**
     * Filter the query on the PohdICnt column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdicnt('fooValue');   // WHERE PohdICnt = 'fooValue'
     * $query->filterByPohdicnt('%fooValue%', Criteria::LIKE); // WHERE PohdICnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdicnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdicnt($pohdicnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdicnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDICNT, $pohdicnt, $comparison);
    }

    /**
     * Filter the query on the PohdFob column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdfob('fooValue');   // WHERE PohdFob = 'fooValue'
     * $query->filterByPohdfob('%fooValue%', Criteria::LIKE); // WHERE PohdFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdfob($pohdfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDFOB, $pohdfob, $comparison);
    }

    /**
     * Filter the query on the PohdPickQueue column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdpickqueue('fooValue');   // WHERE PohdPickQueue = 'fooValue'
     * $query->filterByPohdpickqueue('%fooValue%', Criteria::LIKE); // WHERE PohdPickQueue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdpickqueue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdpickqueue($pohdpickqueue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdpickqueue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPICKQUEUE, $pohdpickqueue, $comparison);
    }

    /**
     * Filter the query on the PohdPackedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdpackedby('fooValue');   // WHERE PohdPackedBy = 'fooValue'
     * $query->filterByPohdpackedby('%fooValue%', Criteria::LIKE); // WHERE PohdPackedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdpackedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdpackedby($pohdpackedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdpackedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPACKEDBY, $pohdpackedby, $comparison);
    }

    /**
     * Filter the query on the PohdPackDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdpackdate('fooValue');   // WHERE PohdPackDate = 'fooValue'
     * $query->filterByPohdpackdate('%fooValue%', Criteria::LIKE); // WHERE PohdPackDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdpackdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdpackdate($pohdpackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdpackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPACKDATE, $pohdpackdate, $comparison);
    }

    /**
     * Filter the query on the PohdPackTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdpacktime('fooValue');   // WHERE PohdPackTime = 'fooValue'
     * $query->filterByPohdpacktime('%fooValue%', Criteria::LIKE); // WHERE PohdPackTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdpacktime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdpacktime($pohdpacktime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdpacktime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDPACKTIME, $pohdpacktime, $comparison);
    }

    /**
     * Filter the query on the PohdLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdlandcost(1234); // WHERE PohdLandCost = 1234
     * $query->filterByPohdlandcost(array(12, 34)); // WHERE PohdLandCost IN (12, 34)
     * $query->filterByPohdlandcost(array('min' => 12)); // WHERE PohdLandCost > 12
     * </code>
     *
     * @param     mixed $pohdlandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdlandcost($pohdlandcost = null, $comparison = null)
    {
        if (is_array($pohdlandcost)) {
            $useMinMax = false;
            if (isset($pohdlandcost['min'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDLANDCOST, $pohdlandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pohdlandcost['max'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDLANDCOST, $pohdlandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDLANDCOST, $pohdlandcost, $comparison);
    }

    /**
     * Filter the query on the PohdEdiPoDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdedipodate('fooValue');   // WHERE PohdEdiPoDate = 'fooValue'
     * $query->filterByPohdedipodate('%fooValue%', Criteria::LIKE); // WHERE PohdEdiPoDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdedipodate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdedipodate($pohdedipodate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdedipodate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEDIPODATE, $pohdedipodate, $comparison);
    }

    /**
     * Filter the query on the PohdFutureBuy column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdfuturebuy('fooValue');   // WHERE PohdFutureBuy = 'fooValue'
     * $query->filterByPohdfuturebuy('%fooValue%', Criteria::LIKE); // WHERE PohdFutureBuy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdfuturebuy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdfuturebuy($pohdfuturebuy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdfuturebuy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDFUTUREBUY, $pohdfuturebuy, $comparison);
    }

    /**
     * Filter the query on the PohdEmailAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdemailaddr('fooValue');   // WHERE PohdEmailAddr = 'fooValue'
     * $query->filterByPohdemailaddr('%fooValue%', Criteria::LIKE); // WHERE PohdEmailAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdemailaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdemailaddr($pohdemailaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdemailaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDEMAILADDR, $pohdemailaddr, $comparison);
    }

    /**
     * Filter the query on the PohdShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdshipdate('fooValue');   // WHERE PohdShipDate = 'fooValue'
     * $query->filterByPohdshipdate('%fooValue%', Criteria::LIKE); // WHERE PohdShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdshipdate($pohdshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDSHIPDATE, $pohdshipdate, $comparison);
    }

    /**
     * Filter the query on the PohdAckDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdackdate('fooValue');   // WHERE PohdAckDate = 'fooValue'
     * $query->filterByPohdackdate('%fooValue%', Criteria::LIKE); // WHERE PohdAckDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdackdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdackdate($pohdackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDACKDATE, $pohdackdate, $comparison);
    }

    /**
     * Filter the query on the PohdReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdreleasenbr(1234); // WHERE PohdReleaseNbr = 1234
     * $query->filterByPohdreleasenbr(array(12, 34)); // WHERE PohdReleaseNbr IN (12, 34)
     * $query->filterByPohdreleasenbr(array('min' => 12)); // WHERE PohdReleaseNbr > 12
     * </code>
     *
     * @param     mixed $pohdreleasenbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdreleasenbr($pohdreleasenbr = null, $comparison = null)
    {
        if (is_array($pohdreleasenbr)) {
            $useMinMax = false;
            if (isset($pohdreleasenbr['min'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDRELEASENBR, $pohdreleasenbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pohdreleasenbr['max'])) {
                $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDRELEASENBR, $pohdreleasenbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDRELEASENBR, $pohdreleasenbr, $comparison);
    }

    /**
     * Filter the query on the PohdReturnsPo column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdreturnspo('fooValue');   // WHERE PohdReturnsPo = 'fooValue'
     * $query->filterByPohdreturnspo('%fooValue%', Criteria::LIKE); // WHERE PohdReturnsPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdreturnspo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPohdreturnspo($pohdreturnspo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdreturnspo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDRETURNSPO, $pohdreturnspo, $comparison);
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
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
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Filter the query by a related \VendorShipfrom object
     *
     * @param \VendorShipfrom $vendorShipfrom The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByVendorShipfrom($vendorShipfrom, $comparison = null)
    {
        if ($vendorShipfrom instanceof \VendorShipfrom) {
            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_APVEVENDID, $vendorShipfrom->getApvevendid(), $comparison)
                ->addUsingAlias(PurchaseOrderTableMap::COL_APFMSHIPID, $vendorShipfrom->getApfmshipid(), $comparison);
        } else {
            throw new PropelException('filterByVendorShipfrom() only accepts arguments of type \VendorShipfrom');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VendorShipfrom relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function joinVendorShipfrom($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VendorShipfrom');

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
            $this->addJoinObject($join, 'VendorShipfrom');
        }

        return $this;
    }

    /**
     * Use the VendorShipfrom relation VendorShipfrom object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorShipfromQuery A secondary query class using the current class as primary query
     */
    public function useVendorShipfromQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVendorShipfrom($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VendorShipfrom', '\VendorShipfromQuery');
    }

    /**
     * Filter the query by a related \Shipvia object
     *
     * @param \Shipvia|ObjectCollection $shipvia The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByShipvia($shipvia, $comparison = null)
    {
        if ($shipvia instanceof \Shipvia) {
            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_ARTBSVIACODE, $shipvia->getArtbshipvia(), $comparison);
        } elseif ($shipvia instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_ARTBSVIACODE, $shipvia->toKeyValue('PrimaryKey', 'Artbshipvia'), $comparison);
        } else {
            throw new PropelException('filterByShipvia() only accepts arguments of type \Shipvia or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Shipvia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function joinShipvia($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Shipvia');

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
            $this->addJoinObject($join, 'Shipvia');
        }

        return $this;
    }

    /**
     * Use the Shipvia relation Shipvia object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ShipviaQuery A secondary query class using the current class as primary query
     */
    public function useShipviaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinShipvia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Shipvia', '\ShipviaQuery');
    }

    /**
     * Filter the query by a related \ApInvoice object
     *
     * @param \ApInvoice|ObjectCollection $apInvoice the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByApInvoice($apInvoice, $comparison = null)
    {
        if ($apInvoice instanceof \ApInvoice) {
            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $apInvoice->getApihponbr(), $comparison);
        } elseif ($apInvoice instanceof ObjectCollection) {
            return $this
                ->useApInvoiceQuery()
                ->filterByPrimaryKeys($apInvoice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByApInvoice() only accepts arguments of type \ApInvoice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ApInvoice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function joinApInvoice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ApInvoice');

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
            $this->addJoinObject($join, 'ApInvoice');
        }

        return $this;
    }

    /**
     * Use the ApInvoice relation ApInvoice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ApInvoiceQuery A secondary query class using the current class as primary query
     */
    public function useApInvoiceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinApInvoice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ApInvoice', '\ApInvoiceQuery');
    }

    /**
     * Filter the query by a related \PurchaseOrderDetail object
     *
     * @param \PurchaseOrderDetail|ObjectCollection $purchaseOrderDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetail($purchaseOrderDetail, $comparison = null)
    {
        if ($purchaseOrderDetail instanceof \PurchaseOrderDetail) {
            return $this
                ->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $purchaseOrderDetail->getPohdnbr(), $comparison);
        } elseif ($purchaseOrderDetail instanceof ObjectCollection) {
            return $this
                ->usePurchaseOrderDetailQuery()
                ->filterByPrimaryKeys($purchaseOrderDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPurchaseOrderDetail() only accepts arguments of type \PurchaseOrderDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function joinPurchaseOrderDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetail');

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
            $this->addJoinObject($join, 'PurchaseOrderDetail');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetail', '\PurchaseOrderDetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrder $purchaseOrder Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderQuery The current query, for fluid interface
     */
    public function prune($purchaseOrder = null)
    {
        if ($purchaseOrder) {
            $this->addUsingAlias(PurchaseOrderTableMap::COL_POHDNBR, $purchaseOrder->getPohdnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderTableMap::clearInstancePool();
            PurchaseOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderQuery
