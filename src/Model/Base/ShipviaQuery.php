<?php

namespace Base;

use \Shipvia as ChildShipvia;
use \ShipviaQuery as ChildShipviaQuery;
use \Exception;
use \PDO;
use Map\ShipviaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_svia` table.
 *
 * @method     ChildShipviaQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildShipviaQuery orderByArtbsviadesc($order = Criteria::ASC) Order by the ArtbSviaDesc column
 * @method     ChildShipviaQuery orderByArtbsviaprio($order = Criteria::ASC) Order by the ArtbSviaPrio column
 * @method     ChildShipviaQuery orderByArtbsviaweb($order = Criteria::ASC) Order by the ArtbSviaWeb column
 * @method     ChildShipviaQuery orderByArtbsviaair($order = Criteria::ASC) Order by the ArtbSviaAir column
 * @method     ChildShipviaQuery orderByArtbsviaupsserv($order = Criteria::ASC) Order by the ArtbSviaUpsServ column
 * @method     ChildShipviaQuery orderByArtbsviaupsbilling($order = Criteria::ASC) Order by the ArtbSviaUpsBilling column
 * @method     ChildShipviaQuery orderByArtbsviascaccd($order = Criteria::ASC) Order by the ArtbSviaScacCd column
 * @method     ChildShipviaQuery orderByArtbsviaedimethcd($order = Criteria::ASC) Order by the ArtbSviaEdiMethCd column
 * @method     ChildShipviaQuery orderByArtbsviaupsresidential($order = Criteria::ASC) Order by the ArtbSviaUpsResidential column
 * @method     ChildShipviaQuery orderByArtbsviachrgfrt($order = Criteria::ASC) Order by the ArtbSviaChrgFrt column
 * @method     ChildShipviaQuery orderByArtbsviauseroute($order = Criteria::ASC) Order by the ArtbSviaUseRoute column
 * @method     ChildShipviaQuery orderByArtbsviacommfrght($order = Criteria::ASC) Order by the ArtbSviaCommFrght column
 * @method     ChildShipviaQuery orderByArtbsviashiparea($order = Criteria::ASC) Order by the ArtbSviaShipArea column
 * @method     ChildShipviaQuery orderByArtbsviausesurchg($order = Criteria::ASC) Order by the ArtbSviaUseSurchg column
 * @method     ChildShipviaQuery orderByArtbsviasurchgpct($order = Criteria::ASC) Order by the ArtbSviaSurchgPct column
 * @method     ChildShipviaQuery orderByArtbsviataxcode($order = Criteria::ASC) Order by the ArtbSviaTaxCode column
 * @method     ChildShipviaQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildShipviaQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildShipviaQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildShipviaQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildShipviaQuery groupByArtbsviadesc() Group by the ArtbSviaDesc column
 * @method     ChildShipviaQuery groupByArtbsviaprio() Group by the ArtbSviaPrio column
 * @method     ChildShipviaQuery groupByArtbsviaweb() Group by the ArtbSviaWeb column
 * @method     ChildShipviaQuery groupByArtbsviaair() Group by the ArtbSviaAir column
 * @method     ChildShipviaQuery groupByArtbsviaupsserv() Group by the ArtbSviaUpsServ column
 * @method     ChildShipviaQuery groupByArtbsviaupsbilling() Group by the ArtbSviaUpsBilling column
 * @method     ChildShipviaQuery groupByArtbsviascaccd() Group by the ArtbSviaScacCd column
 * @method     ChildShipviaQuery groupByArtbsviaedimethcd() Group by the ArtbSviaEdiMethCd column
 * @method     ChildShipviaQuery groupByArtbsviaupsresidential() Group by the ArtbSviaUpsResidential column
 * @method     ChildShipviaQuery groupByArtbsviachrgfrt() Group by the ArtbSviaChrgFrt column
 * @method     ChildShipviaQuery groupByArtbsviauseroute() Group by the ArtbSviaUseRoute column
 * @method     ChildShipviaQuery groupByArtbsviacommfrght() Group by the ArtbSviaCommFrght column
 * @method     ChildShipviaQuery groupByArtbsviashiparea() Group by the ArtbSviaShipArea column
 * @method     ChildShipviaQuery groupByArtbsviausesurchg() Group by the ArtbSviaUseSurchg column
 * @method     ChildShipviaQuery groupByArtbsviasurchgpct() Group by the ArtbSviaSurchgPct column
 * @method     ChildShipviaQuery groupByArtbsviataxcode() Group by the ArtbSviaTaxCode column
 * @method     ChildShipviaQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildShipviaQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildShipviaQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildShipviaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildShipviaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildShipviaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildShipviaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildShipviaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildShipviaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildShipviaQuery leftJoinVendorShipfrom($relationAlias = null) Adds a LEFT JOIN clause to the query using the VendorShipfrom relation
 * @method     ChildShipviaQuery rightJoinVendorShipfrom($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VendorShipfrom relation
 * @method     ChildShipviaQuery innerJoinVendorShipfrom($relationAlias = null) Adds a INNER JOIN clause to the query using the VendorShipfrom relation
 *
 * @method     ChildShipviaQuery joinWithVendorShipfrom($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the VendorShipfrom relation
 *
 * @method     ChildShipviaQuery leftJoinWithVendorShipfrom() Adds a LEFT JOIN clause and with to the query using the VendorShipfrom relation
 * @method     ChildShipviaQuery rightJoinWithVendorShipfrom() Adds a RIGHT JOIN clause and with to the query using the VendorShipfrom relation
 * @method     ChildShipviaQuery innerJoinWithVendorShipfrom() Adds a INNER JOIN clause and with to the query using the VendorShipfrom relation
 *
 * @method     ChildShipviaQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildShipviaQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildShipviaQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildShipviaQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildShipviaQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildShipviaQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildShipviaQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildShipviaQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildShipviaQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildShipviaQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildShipviaQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildShipviaQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildShipviaQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildShipviaQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildShipviaQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildShipviaQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildShipviaQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildShipviaQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildShipviaQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildShipviaQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildShipviaQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     \VendorShipfromQuery|\VendorQuery|\CustomerQuery|\PurchaseOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildShipvia|null findOne(?ConnectionInterface $con = null) Return the first ChildShipvia matching the query
 * @method     ChildShipvia findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildShipvia matching the query, or a new ChildShipvia object populated from the query conditions when no match is found
 *
 * @method     ChildShipvia|null findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildShipvia filtered by the ArtbShipVia column
 * @method     ChildShipvia|null findOneByArtbsviadesc(string $ArtbSviaDesc) Return the first ChildShipvia filtered by the ArtbSviaDesc column
 * @method     ChildShipvia|null findOneByArtbsviaprio(string $ArtbSviaPrio) Return the first ChildShipvia filtered by the ArtbSviaPrio column
 * @method     ChildShipvia|null findOneByArtbsviaweb(string $ArtbSviaWeb) Return the first ChildShipvia filtered by the ArtbSviaWeb column
 * @method     ChildShipvia|null findOneByArtbsviaair(string $ArtbSviaAir) Return the first ChildShipvia filtered by the ArtbSviaAir column
 * @method     ChildShipvia|null findOneByArtbsviaupsserv(string $ArtbSviaUpsServ) Return the first ChildShipvia filtered by the ArtbSviaUpsServ column
 * @method     ChildShipvia|null findOneByArtbsviaupsbilling(string $ArtbSviaUpsBilling) Return the first ChildShipvia filtered by the ArtbSviaUpsBilling column
 * @method     ChildShipvia|null findOneByArtbsviascaccd(string $ArtbSviaScacCd) Return the first ChildShipvia filtered by the ArtbSviaScacCd column
 * @method     ChildShipvia|null findOneByArtbsviaedimethcd(string $ArtbSviaEdiMethCd) Return the first ChildShipvia filtered by the ArtbSviaEdiMethCd column
 * @method     ChildShipvia|null findOneByArtbsviaupsresidential(string $ArtbSviaUpsResidential) Return the first ChildShipvia filtered by the ArtbSviaUpsResidential column
 * @method     ChildShipvia|null findOneByArtbsviachrgfrt(string $ArtbSviaChrgFrt) Return the first ChildShipvia filtered by the ArtbSviaChrgFrt column
 * @method     ChildShipvia|null findOneByArtbsviauseroute(string $ArtbSviaUseRoute) Return the first ChildShipvia filtered by the ArtbSviaUseRoute column
 * @method     ChildShipvia|null findOneByArtbsviacommfrght(string $ArtbSviaCommFrght) Return the first ChildShipvia filtered by the ArtbSviaCommFrght column
 * @method     ChildShipvia|null findOneByArtbsviashiparea(string $ArtbSviaShipArea) Return the first ChildShipvia filtered by the ArtbSviaShipArea column
 * @method     ChildShipvia|null findOneByArtbsviausesurchg(string $ArtbSviaUseSurchg) Return the first ChildShipvia filtered by the ArtbSviaUseSurchg column
 * @method     ChildShipvia|null findOneByArtbsviasurchgpct(string $ArtbSviaSurchgPct) Return the first ChildShipvia filtered by the ArtbSviaSurchgPct column
 * @method     ChildShipvia|null findOneByArtbsviataxcode(string $ArtbSviaTaxCode) Return the first ChildShipvia filtered by the ArtbSviaTaxCode column
 * @method     ChildShipvia|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildShipvia filtered by the DateUpdtd column
 * @method     ChildShipvia|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShipvia filtered by the TimeUpdtd column
 * @method     ChildShipvia|null findOneByDummy(string $dummy) Return the first ChildShipvia filtered by the dummy column
 *
 * @method     ChildShipvia requirePk($key, ?ConnectionInterface $con = null) Return the ChildShipvia by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOne(?ConnectionInterface $con = null) Return the first ChildShipvia matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildShipvia requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildShipvia filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviadesc(string $ArtbSviaDesc) Return the first ChildShipvia filtered by the ArtbSviaDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaprio(string $ArtbSviaPrio) Return the first ChildShipvia filtered by the ArtbSviaPrio column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaweb(string $ArtbSviaWeb) Return the first ChildShipvia filtered by the ArtbSviaWeb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaair(string $ArtbSviaAir) Return the first ChildShipvia filtered by the ArtbSviaAir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaupsserv(string $ArtbSviaUpsServ) Return the first ChildShipvia filtered by the ArtbSviaUpsServ column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaupsbilling(string $ArtbSviaUpsBilling) Return the first ChildShipvia filtered by the ArtbSviaUpsBilling column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviascaccd(string $ArtbSviaScacCd) Return the first ChildShipvia filtered by the ArtbSviaScacCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaedimethcd(string $ArtbSviaEdiMethCd) Return the first ChildShipvia filtered by the ArtbSviaEdiMethCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviaupsresidential(string $ArtbSviaUpsResidential) Return the first ChildShipvia filtered by the ArtbSviaUpsResidential column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviachrgfrt(string $ArtbSviaChrgFrt) Return the first ChildShipvia filtered by the ArtbSviaChrgFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviauseroute(string $ArtbSviaUseRoute) Return the first ChildShipvia filtered by the ArtbSviaUseRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviacommfrght(string $ArtbSviaCommFrght) Return the first ChildShipvia filtered by the ArtbSviaCommFrght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviashiparea(string $ArtbSviaShipArea) Return the first ChildShipvia filtered by the ArtbSviaShipArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviausesurchg(string $ArtbSviaUseSurchg) Return the first ChildShipvia filtered by the ArtbSviaUseSurchg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviasurchgpct(string $ArtbSviaSurchgPct) Return the first ChildShipvia filtered by the ArtbSviaSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByArtbsviataxcode(string $ArtbSviaTaxCode) Return the first ChildShipvia filtered by the ArtbSviaTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByDateupdtd(string $DateUpdtd) Return the first ChildShipvia filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShipvia filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByDummy(string $dummy) Return the first ChildShipvia filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildShipvia[]|Collection find(?ConnectionInterface $con = null) Return ChildShipvia objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildShipvia> find(?ConnectionInterface $con = null) Return ChildShipvia objects based on current ModelCriteria
 *
 * @method     ChildShipvia[]|Collection findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildShipvia objects filtered by the ArtbShipVia column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildShipvia objects filtered by the ArtbShipVia column
 * @method     ChildShipvia[]|Collection findByArtbsviadesc(string|array<string> $ArtbSviaDesc) Return ChildShipvia objects filtered by the ArtbSviaDesc column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviadesc(string|array<string> $ArtbSviaDesc) Return ChildShipvia objects filtered by the ArtbSviaDesc column
 * @method     ChildShipvia[]|Collection findByArtbsviaprio(string|array<string> $ArtbSviaPrio) Return ChildShipvia objects filtered by the ArtbSviaPrio column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaprio(string|array<string> $ArtbSviaPrio) Return ChildShipvia objects filtered by the ArtbSviaPrio column
 * @method     ChildShipvia[]|Collection findByArtbsviaweb(string|array<string> $ArtbSviaWeb) Return ChildShipvia objects filtered by the ArtbSviaWeb column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaweb(string|array<string> $ArtbSviaWeb) Return ChildShipvia objects filtered by the ArtbSviaWeb column
 * @method     ChildShipvia[]|Collection findByArtbsviaair(string|array<string> $ArtbSviaAir) Return ChildShipvia objects filtered by the ArtbSviaAir column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaair(string|array<string> $ArtbSviaAir) Return ChildShipvia objects filtered by the ArtbSviaAir column
 * @method     ChildShipvia[]|Collection findByArtbsviaupsserv(string|array<string> $ArtbSviaUpsServ) Return ChildShipvia objects filtered by the ArtbSviaUpsServ column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaupsserv(string|array<string> $ArtbSviaUpsServ) Return ChildShipvia objects filtered by the ArtbSviaUpsServ column
 * @method     ChildShipvia[]|Collection findByArtbsviaupsbilling(string|array<string> $ArtbSviaUpsBilling) Return ChildShipvia objects filtered by the ArtbSviaUpsBilling column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaupsbilling(string|array<string> $ArtbSviaUpsBilling) Return ChildShipvia objects filtered by the ArtbSviaUpsBilling column
 * @method     ChildShipvia[]|Collection findByArtbsviascaccd(string|array<string> $ArtbSviaScacCd) Return ChildShipvia objects filtered by the ArtbSviaScacCd column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviascaccd(string|array<string> $ArtbSviaScacCd) Return ChildShipvia objects filtered by the ArtbSviaScacCd column
 * @method     ChildShipvia[]|Collection findByArtbsviaedimethcd(string|array<string> $ArtbSviaEdiMethCd) Return ChildShipvia objects filtered by the ArtbSviaEdiMethCd column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaedimethcd(string|array<string> $ArtbSviaEdiMethCd) Return ChildShipvia objects filtered by the ArtbSviaEdiMethCd column
 * @method     ChildShipvia[]|Collection findByArtbsviaupsresidential(string|array<string> $ArtbSviaUpsResidential) Return ChildShipvia objects filtered by the ArtbSviaUpsResidential column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviaupsresidential(string|array<string> $ArtbSviaUpsResidential) Return ChildShipvia objects filtered by the ArtbSviaUpsResidential column
 * @method     ChildShipvia[]|Collection findByArtbsviachrgfrt(string|array<string> $ArtbSviaChrgFrt) Return ChildShipvia objects filtered by the ArtbSviaChrgFrt column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviachrgfrt(string|array<string> $ArtbSviaChrgFrt) Return ChildShipvia objects filtered by the ArtbSviaChrgFrt column
 * @method     ChildShipvia[]|Collection findByArtbsviauseroute(string|array<string> $ArtbSviaUseRoute) Return ChildShipvia objects filtered by the ArtbSviaUseRoute column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviauseroute(string|array<string> $ArtbSviaUseRoute) Return ChildShipvia objects filtered by the ArtbSviaUseRoute column
 * @method     ChildShipvia[]|Collection findByArtbsviacommfrght(string|array<string> $ArtbSviaCommFrght) Return ChildShipvia objects filtered by the ArtbSviaCommFrght column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviacommfrght(string|array<string> $ArtbSviaCommFrght) Return ChildShipvia objects filtered by the ArtbSviaCommFrght column
 * @method     ChildShipvia[]|Collection findByArtbsviashiparea(string|array<string> $ArtbSviaShipArea) Return ChildShipvia objects filtered by the ArtbSviaShipArea column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviashiparea(string|array<string> $ArtbSviaShipArea) Return ChildShipvia objects filtered by the ArtbSviaShipArea column
 * @method     ChildShipvia[]|Collection findByArtbsviausesurchg(string|array<string> $ArtbSviaUseSurchg) Return ChildShipvia objects filtered by the ArtbSviaUseSurchg column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviausesurchg(string|array<string> $ArtbSviaUseSurchg) Return ChildShipvia objects filtered by the ArtbSviaUseSurchg column
 * @method     ChildShipvia[]|Collection findByArtbsviasurchgpct(string|array<string> $ArtbSviaSurchgPct) Return ChildShipvia objects filtered by the ArtbSviaSurchgPct column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviasurchgpct(string|array<string> $ArtbSviaSurchgPct) Return ChildShipvia objects filtered by the ArtbSviaSurchgPct column
 * @method     ChildShipvia[]|Collection findByArtbsviataxcode(string|array<string> $ArtbSviaTaxCode) Return ChildShipvia objects filtered by the ArtbSviaTaxCode column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByArtbsviataxcode(string|array<string> $ArtbSviaTaxCode) Return ChildShipvia objects filtered by the ArtbSviaTaxCode column
 * @method     ChildShipvia[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildShipvia objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildShipvia objects filtered by the DateUpdtd column
 * @method     ChildShipvia[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildShipvia objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildShipvia objects filtered by the TimeUpdtd column
 * @method     ChildShipvia[]|Collection findByDummy(string|array<string> $dummy) Return ChildShipvia objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildShipvia> findByDummy(string|array<string> $dummy) Return ChildShipvia objects filtered by the dummy column
 *
 * @method     ChildShipvia[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildShipvia> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ShipviaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ShipviaQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Shipvia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildShipviaQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildShipviaQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildShipviaQuery) {
            return $criteria;
        }
        $query = new ChildShipviaQuery();
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
     * @return ChildShipvia|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ShipviaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ShipviaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildShipvia A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbShipVia, ArtbSviaDesc, ArtbSviaPrio, ArtbSviaWeb, ArtbSviaAir, ArtbSviaUpsServ, ArtbSviaUpsBilling, ArtbSviaScacCd, ArtbSviaEdiMethCd, ArtbSviaUpsResidential, ArtbSviaChrgFrt, ArtbSviaUseRoute, ArtbSviaCommFrght, ArtbSviaShipArea, ArtbSviaUseSurchg, ArtbSviaSurchgPct, ArtbSviaTaxCode, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_svia WHERE ArtbShipVia = :p0';
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
            /** @var ChildShipvia $obj */
            $obj = new ChildShipvia();
            $obj->hydrate($row);
            ShipviaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildShipvia|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $keys, Criteria::IN);

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

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviadesc('fooValue');   // WHERE ArtbSviaDesc = 'fooValue'
     * $query->filterByArtbsviadesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaDesc LIKE '%fooValue%'
     * $query->filterByArtbsviadesc(['foo', 'bar']); // WHERE ArtbSviaDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviadesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviadesc($artbsviadesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviadesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIADESC, $artbsviadesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaPrio column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaprio('fooValue');   // WHERE ArtbSviaPrio = 'fooValue'
     * $query->filterByArtbsviaprio('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaPrio LIKE '%fooValue%'
     * $query->filterByArtbsviaprio(['foo', 'bar']); // WHERE ArtbSviaPrio IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaprio The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaprio($artbsviaprio = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaprio)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAPRIO, $artbsviaprio, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaWeb column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaweb('fooValue');   // WHERE ArtbSviaWeb = 'fooValue'
     * $query->filterByArtbsviaweb('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaWeb LIKE '%fooValue%'
     * $query->filterByArtbsviaweb(['foo', 'bar']); // WHERE ArtbSviaWeb IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaweb The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaweb($artbsviaweb = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaweb)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAWEB, $artbsviaweb, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaAir column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaair('fooValue');   // WHERE ArtbSviaAir = 'fooValue'
     * $query->filterByArtbsviaair('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaAir LIKE '%fooValue%'
     * $query->filterByArtbsviaair(['foo', 'bar']); // WHERE ArtbSviaAir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaair The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaair($artbsviaair = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaair)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAAIR, $artbsviaair, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaUpsServ column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsserv('fooValue');   // WHERE ArtbSviaUpsServ = 'fooValue'
     * $query->filterByArtbsviaupsserv('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsServ LIKE '%fooValue%'
     * $query->filterByArtbsviaupsserv(['foo', 'bar']); // WHERE ArtbSviaUpsServ IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaupsserv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaupsserv($artbsviaupsserv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsserv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSSERV, $artbsviaupsserv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaUpsBilling column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsbilling('fooValue');   // WHERE ArtbSviaUpsBilling = 'fooValue'
     * $query->filterByArtbsviaupsbilling('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsBilling LIKE '%fooValue%'
     * $query->filterByArtbsviaupsbilling(['foo', 'bar']); // WHERE ArtbSviaUpsBilling IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaupsbilling The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaupsbilling($artbsviaupsbilling = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsbilling)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSBILLING, $artbsviaupsbilling, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaScacCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviascaccd('fooValue');   // WHERE ArtbSviaScacCd = 'fooValue'
     * $query->filterByArtbsviascaccd('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaScacCd LIKE '%fooValue%'
     * $query->filterByArtbsviascaccd(['foo', 'bar']); // WHERE ArtbSviaScacCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviascaccd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviascaccd($artbsviascaccd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviascaccd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASCACCD, $artbsviascaccd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaEdiMethCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaedimethcd('fooValue');   // WHERE ArtbSviaEdiMethCd = 'fooValue'
     * $query->filterByArtbsviaedimethcd('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaEdiMethCd LIKE '%fooValue%'
     * $query->filterByArtbsviaedimethcd(['foo', 'bar']); // WHERE ArtbSviaEdiMethCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaedimethcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaedimethcd($artbsviaedimethcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaedimethcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD, $artbsviaedimethcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaUpsResidential column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsresidential('fooValue');   // WHERE ArtbSviaUpsResidential = 'fooValue'
     * $query->filterByArtbsviaupsresidential('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsResidential LIKE '%fooValue%'
     * $query->filterByArtbsviaupsresidential(['foo', 'bar']); // WHERE ArtbSviaUpsResidential IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviaupsresidential The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviaupsresidential($artbsviaupsresidential = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsresidential)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL, $artbsviaupsresidential, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviachrgfrt('fooValue');   // WHERE ArtbSviaChrgFrt = 'fooValue'
     * $query->filterByArtbsviachrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaChrgFrt LIKE '%fooValue%'
     * $query->filterByArtbsviachrgfrt(['foo', 'bar']); // WHERE ArtbSviaChrgFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviachrgfrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviachrgfrt($artbsviachrgfrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviachrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIACHRGFRT, $artbsviachrgfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaUseRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviauseroute('fooValue');   // WHERE ArtbSviaUseRoute = 'fooValue'
     * $query->filterByArtbsviauseroute('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUseRoute LIKE '%fooValue%'
     * $query->filterByArtbsviauseroute(['foo', 'bar']); // WHERE ArtbSviaUseRoute IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviauseroute The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviauseroute($artbsviauseroute = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviauseroute)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUSEROUTE, $artbsviauseroute, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaCommFrght column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviacommfrght('fooValue');   // WHERE ArtbSviaCommFrght = 'fooValue'
     * $query->filterByArtbsviacommfrght('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaCommFrght LIKE '%fooValue%'
     * $query->filterByArtbsviacommfrght(['foo', 'bar']); // WHERE ArtbSviaCommFrght IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviacommfrght The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviacommfrght($artbsviacommfrght = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviacommfrght)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT, $artbsviacommfrght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaShipArea column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviashiparea('fooValue');   // WHERE ArtbSviaShipArea = 'fooValue'
     * $query->filterByArtbsviashiparea('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaShipArea LIKE '%fooValue%'
     * $query->filterByArtbsviashiparea(['foo', 'bar']); // WHERE ArtbSviaShipArea IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviashiparea The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviashiparea($artbsviashiparea = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviashiparea)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASHIPAREA, $artbsviashiparea, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaUseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviausesurchg('fooValue');   // WHERE ArtbSviaUseSurchg = 'fooValue'
     * $query->filterByArtbsviausesurchg('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUseSurchg LIKE '%fooValue%'
     * $query->filterByArtbsviausesurchg(['foo', 'bar']); // WHERE ArtbSviaUseSurchg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviausesurchg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviausesurchg($artbsviausesurchg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviausesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUSESURCHG, $artbsviausesurchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviasurchgpct(1234); // WHERE ArtbSviaSurchgPct = 1234
     * $query->filterByArtbsviasurchgpct(array(12, 34)); // WHERE ArtbSviaSurchgPct IN (12, 34)
     * $query->filterByArtbsviasurchgpct(array('min' => 12)); // WHERE ArtbSviaSurchgPct > 12
     * </code>
     *
     * @param mixed $artbsviasurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviasurchgpct($artbsviasurchgpct = null, ?string $comparison = null)
    {
        if (is_array($artbsviasurchgpct)) {
            $useMinMax = false;
            if (isset($artbsviasurchgpct['min'])) {
                $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASURCHGPCT, $artbsviasurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbsviasurchgpct['max'])) {
                $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASURCHGPCT, $artbsviasurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASURCHGPCT, $artbsviasurchgpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSviaTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviataxcode('fooValue');   // WHERE ArtbSviaTaxCode = 'fooValue'
     * $query->filterByArtbsviataxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaTaxCode LIKE '%fooValue%'
     * $query->filterByArtbsviataxcode(['foo', 'bar']); // WHERE ArtbSviaTaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsviataxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsviataxcode($artbsviataxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviataxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIATAXCODE, $artbsviataxcode, $comparison);

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

        $this->addUsingAlias(ShipviaTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ShipviaTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ShipviaTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \VendorShipfrom object
     *
     * @param \VendorShipfrom|ObjectCollection $vendorShipfrom the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendorShipfrom($vendorShipfrom, ?string $comparison = null)
    {
        if ($vendorShipfrom instanceof \VendorShipfrom) {
            $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $vendorShipfrom->getArtbsviacode(), $comparison);

            return $this;
        } elseif ($vendorShipfrom instanceof ObjectCollection) {
            $this
                ->useVendorShipfromQuery()
                ->filterByPrimaryKeys($vendorShipfrom->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByVendorShipfrom() only accepts arguments of type \VendorShipfrom or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VendorShipfrom relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendorShipfrom(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the VendorShipfrom relation VendorShipfrom object
     *
     * @param callable(\VendorShipfromQuery):\VendorShipfromQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorShipfromQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useVendorShipfromQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to VendorShipfrom table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorShipfromQuery The inner query object of the EXISTS statement
     */
    public function useVendorShipfromExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorShipfromQuery */
        $q = $this->useExistsQuery('VendorShipfrom', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to VendorShipfrom table for a NOT EXISTS query.
     *
     * @see useVendorShipfromExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorShipfromQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorShipfromNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorShipfromQuery */
        $q = $this->useExistsQuery('VendorShipfrom', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to VendorShipfrom table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorShipfromQuery The inner query object of the IN statement
     */
    public function useInVendorShipfromQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorShipfromQuery */
        $q = $this->useInQuery('VendorShipfrom', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to VendorShipfrom table for a NOT IN query.
     *
     * @see useVendorShipfromInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorShipfromQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorShipfromQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorShipfromQuery */
        $q = $this->useInQuery('VendorShipfrom', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $vendor->getApvesviacode(), $comparison);

            return $this;
        } elseif ($vendor instanceof ObjectCollection) {
            $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();

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
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
        ?string $joinType = Criteria::LEFT_JOIN
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
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $customer->getArtbshipvia(), $comparison);

            return $this;
        } elseif ($customer instanceof ObjectCollection) {
            $this
                ->useCustomerQuery()
                ->filterByPrimaryKeys($customer->getPrimaryKeys())
                ->endUse();

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
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
        ?string $joinType = Criteria::LEFT_JOIN
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
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, ?string $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $purchaseOrder->getArtbsviacode(), $comparison);

            return $this;
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderQuery()
                ->filterByPrimaryKeys($purchaseOrder->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrder() only accepts arguments of type \PurchaseOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrder(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrder');

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
            $this->addJoinObject($join, 'PurchaseOrder');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrder relation PurchaseOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPurchaseOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', '\PurchaseOrderQuery');
    }

    /**
     * Use the PurchaseOrder relation PurchaseOrder object
     *
     * @param callable(\PurchaseOrderQuery):\PurchaseOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT IN query.
     *
     * @see usePurchaseOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildShipvia $shipvia Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($shipvia = null)
    {
        if ($shipvia) {
            $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $shipvia->getArtbshipvia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_svia table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ShipviaTableMap::clearInstancePool();
            ShipviaTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ShipviaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ShipviaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ShipviaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ShipviaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
