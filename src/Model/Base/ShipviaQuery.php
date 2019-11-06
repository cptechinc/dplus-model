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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_svia' table.
 *
 *
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
 * @method     ChildShipviaQuery orderByArtbsviashipcomplt($order = Criteria::ASC) Order by the ArtbSviaShipComplt column
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
 * @method     ChildShipviaQuery groupByArtbsviashipcomplt() Group by the ArtbSviaShipComplt column
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
 * @method     \VendorShipfromQuery|\VendorQuery|\PurchaseOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildShipvia findOne(ConnectionInterface $con = null) Return the first ChildShipvia matching the query
 * @method     ChildShipvia findOneOrCreate(ConnectionInterface $con = null) Return the first ChildShipvia matching the query, or a new ChildShipvia object populated from the query conditions when no match is found
 *
 * @method     ChildShipvia findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildShipvia filtered by the ArtbShipVia column
 * @method     ChildShipvia findOneByArtbsviadesc(string $ArtbSviaDesc) Return the first ChildShipvia filtered by the ArtbSviaDesc column
 * @method     ChildShipvia findOneByArtbsviaprio(string $ArtbSviaPrio) Return the first ChildShipvia filtered by the ArtbSviaPrio column
 * @method     ChildShipvia findOneByArtbsviaweb(string $ArtbSviaWeb) Return the first ChildShipvia filtered by the ArtbSviaWeb column
 * @method     ChildShipvia findOneByArtbsviaair(string $ArtbSviaAir) Return the first ChildShipvia filtered by the ArtbSviaAir column
 * @method     ChildShipvia findOneByArtbsviaupsserv(string $ArtbSviaUpsServ) Return the first ChildShipvia filtered by the ArtbSviaUpsServ column
 * @method     ChildShipvia findOneByArtbsviaupsbilling(string $ArtbSviaUpsBilling) Return the first ChildShipvia filtered by the ArtbSviaUpsBilling column
 * @method     ChildShipvia findOneByArtbsviascaccd(string $ArtbSviaScacCd) Return the first ChildShipvia filtered by the ArtbSviaScacCd column
 * @method     ChildShipvia findOneByArtbsviaedimethcd(string $ArtbSviaEdiMethCd) Return the first ChildShipvia filtered by the ArtbSviaEdiMethCd column
 * @method     ChildShipvia findOneByArtbsviaupsresidential(string $ArtbSviaUpsResidential) Return the first ChildShipvia filtered by the ArtbSviaUpsResidential column
 * @method     ChildShipvia findOneByArtbsviachrgfrt(string $ArtbSviaChrgFrt) Return the first ChildShipvia filtered by the ArtbSviaChrgFrt column
 * @method     ChildShipvia findOneByArtbsviauseroute(string $ArtbSviaUseRoute) Return the first ChildShipvia filtered by the ArtbSviaUseRoute column
 * @method     ChildShipvia findOneByArtbsviacommfrght(string $ArtbSviaCommFrght) Return the first ChildShipvia filtered by the ArtbSviaCommFrght column
 * @method     ChildShipvia findOneByArtbsviashiparea(string $ArtbSviaShipArea) Return the first ChildShipvia filtered by the ArtbSviaShipArea column
 * @method     ChildShipvia findOneByArtbsviausesurchg(string $ArtbSviaUseSurchg) Return the first ChildShipvia filtered by the ArtbSviaUseSurchg column
 * @method     ChildShipvia findOneByArtbsviasurchgpct(string $ArtbSviaSurchgPct) Return the first ChildShipvia filtered by the ArtbSviaSurchgPct column
 * @method     ChildShipvia findOneByArtbsviataxcode(string $ArtbSviaTaxCode) Return the first ChildShipvia filtered by the ArtbSviaTaxCode column
 * @method     ChildShipvia findOneByArtbsviashipcomplt(string $ArtbSviaShipComplt) Return the first ChildShipvia filtered by the ArtbSviaShipComplt column
 * @method     ChildShipvia findOneByDateupdtd(string $DateUpdtd) Return the first ChildShipvia filtered by the DateUpdtd column
 * @method     ChildShipvia findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShipvia filtered by the TimeUpdtd column
 * @method     ChildShipvia findOneByDummy(string $dummy) Return the first ChildShipvia filtered by the dummy column *

 * @method     ChildShipvia requirePk($key, ConnectionInterface $con = null) Return the ChildShipvia by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOne(ConnectionInterface $con = null) Return the first ChildShipvia matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildShipvia requireOneByArtbsviashipcomplt(string $ArtbSviaShipComplt) Return the first ChildShipvia filtered by the ArtbSviaShipComplt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByDateupdtd(string $DateUpdtd) Return the first ChildShipvia filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShipvia filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShipvia requireOneByDummy(string $dummy) Return the first ChildShipvia filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildShipvia[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildShipvia objects based on current ModelCriteria
 * @method     ChildShipvia[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildShipvia objects filtered by the ArtbShipVia column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviadesc(string $ArtbSviaDesc) Return ChildShipvia objects filtered by the ArtbSviaDesc column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaprio(string $ArtbSviaPrio) Return ChildShipvia objects filtered by the ArtbSviaPrio column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaweb(string $ArtbSviaWeb) Return ChildShipvia objects filtered by the ArtbSviaWeb column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaair(string $ArtbSviaAir) Return ChildShipvia objects filtered by the ArtbSviaAir column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaupsserv(string $ArtbSviaUpsServ) Return ChildShipvia objects filtered by the ArtbSviaUpsServ column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaupsbilling(string $ArtbSviaUpsBilling) Return ChildShipvia objects filtered by the ArtbSviaUpsBilling column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviascaccd(string $ArtbSviaScacCd) Return ChildShipvia objects filtered by the ArtbSviaScacCd column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaedimethcd(string $ArtbSviaEdiMethCd) Return ChildShipvia objects filtered by the ArtbSviaEdiMethCd column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviaupsresidential(string $ArtbSviaUpsResidential) Return ChildShipvia objects filtered by the ArtbSviaUpsResidential column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviachrgfrt(string $ArtbSviaChrgFrt) Return ChildShipvia objects filtered by the ArtbSviaChrgFrt column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviauseroute(string $ArtbSviaUseRoute) Return ChildShipvia objects filtered by the ArtbSviaUseRoute column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviacommfrght(string $ArtbSviaCommFrght) Return ChildShipvia objects filtered by the ArtbSviaCommFrght column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviashiparea(string $ArtbSviaShipArea) Return ChildShipvia objects filtered by the ArtbSviaShipArea column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviausesurchg(string $ArtbSviaUseSurchg) Return ChildShipvia objects filtered by the ArtbSviaUseSurchg column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviasurchgpct(string $ArtbSviaSurchgPct) Return ChildShipvia objects filtered by the ArtbSviaSurchgPct column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviataxcode(string $ArtbSviaTaxCode) Return ChildShipvia objects filtered by the ArtbSviaTaxCode column
 * @method     ChildShipvia[]|ObjectCollection findByArtbsviashipcomplt(string $ArtbSviaShipComplt) Return ChildShipvia objects filtered by the ArtbSviaShipComplt column
 * @method     ChildShipvia[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildShipvia objects filtered by the DateUpdtd column
 * @method     ChildShipvia[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildShipvia objects filtered by the TimeUpdtd column
 * @method     ChildShipvia[]|ObjectCollection findByDummy(string $dummy) Return ChildShipvia objects filtered by the dummy column
 * @method     ChildShipvia[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ShipviaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ShipviaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Shipvia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildShipviaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildShipviaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildShipvia A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbShipVia, ArtbSviaDesc, ArtbSviaPrio, ArtbSviaWeb, ArtbSviaAir, ArtbSviaUpsServ, ArtbSviaUpsBilling, ArtbSviaScacCd, ArtbSviaEdiMethCd, ArtbSviaUpsResidential, ArtbSviaChrgFrt, ArtbSviaUseRoute, ArtbSviaCommFrght, ArtbSviaShipArea, ArtbSviaUseSurchg, ArtbSviaSurchgPct, ArtbSviaTaxCode, ArtbSviaShipComplt, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_svia WHERE ArtbShipVia = :p0';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $keys, Criteria::IN);
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviadesc('fooValue');   // WHERE ArtbSviaDesc = 'fooValue'
     * $query->filterByArtbsviadesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviadesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviadesc($artbsviadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIADESC, $artbsviadesc, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaPrio column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaprio('fooValue');   // WHERE ArtbSviaPrio = 'fooValue'
     * $query->filterByArtbsviaprio('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaPrio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaprio The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaprio($artbsviaprio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaprio)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAPRIO, $artbsviaprio, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaWeb column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaweb('fooValue');   // WHERE ArtbSviaWeb = 'fooValue'
     * $query->filterByArtbsviaweb('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaWeb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaweb The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaweb($artbsviaweb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaweb)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAWEB, $artbsviaweb, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaAir column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaair('fooValue');   // WHERE ArtbSviaAir = 'fooValue'
     * $query->filterByArtbsviaair('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaAir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaair The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaair($artbsviaair = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaair)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAAIR, $artbsviaair, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaUpsServ column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsserv('fooValue');   // WHERE ArtbSviaUpsServ = 'fooValue'
     * $query->filterByArtbsviaupsserv('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsServ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaupsserv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaupsserv($artbsviaupsserv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsserv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSSERV, $artbsviaupsserv, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaUpsBilling column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsbilling('fooValue');   // WHERE ArtbSviaUpsBilling = 'fooValue'
     * $query->filterByArtbsviaupsbilling('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsBilling LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaupsbilling The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaupsbilling($artbsviaupsbilling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsbilling)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSBILLING, $artbsviaupsbilling, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaScacCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviascaccd('fooValue');   // WHERE ArtbSviaScacCd = 'fooValue'
     * $query->filterByArtbsviascaccd('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaScacCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviascaccd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviascaccd($artbsviascaccd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviascaccd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASCACCD, $artbsviascaccd, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaEdiMethCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaedimethcd('fooValue');   // WHERE ArtbSviaEdiMethCd = 'fooValue'
     * $query->filterByArtbsviaedimethcd('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaEdiMethCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaedimethcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaedimethcd($artbsviaedimethcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaedimethcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAEDIMETHCD, $artbsviaedimethcd, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaUpsResidential column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviaupsresidential('fooValue');   // WHERE ArtbSviaUpsResidential = 'fooValue'
     * $query->filterByArtbsviaupsresidential('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUpsResidential LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviaupsresidential The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviaupsresidential($artbsviaupsresidential = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviaupsresidential)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUPSRESIDENTIAL, $artbsviaupsresidential, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviachrgfrt('fooValue');   // WHERE ArtbSviaChrgFrt = 'fooValue'
     * $query->filterByArtbsviachrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaChrgFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviachrgfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviachrgfrt($artbsviachrgfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviachrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIACHRGFRT, $artbsviachrgfrt, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaUseRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviauseroute('fooValue');   // WHERE ArtbSviaUseRoute = 'fooValue'
     * $query->filterByArtbsviauseroute('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUseRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviauseroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviauseroute($artbsviauseroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviauseroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUSEROUTE, $artbsviauseroute, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaCommFrght column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviacommfrght('fooValue');   // WHERE ArtbSviaCommFrght = 'fooValue'
     * $query->filterByArtbsviacommfrght('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaCommFrght LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviacommfrght The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviacommfrght($artbsviacommfrght = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviacommfrght)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIACOMMFRGHT, $artbsviacommfrght, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaShipArea column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviashiparea('fooValue');   // WHERE ArtbSviaShipArea = 'fooValue'
     * $query->filterByArtbsviashiparea('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaShipArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviashiparea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviashiparea($artbsviashiparea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviashiparea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASHIPAREA, $artbsviashiparea, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaUseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviausesurchg('fooValue');   // WHERE ArtbSviaUseSurchg = 'fooValue'
     * $query->filterByArtbsviausesurchg('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaUseSurchg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviausesurchg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviausesurchg($artbsviausesurchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviausesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIAUSESURCHG, $artbsviausesurchg, $comparison);
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
     * @param     mixed $artbsviasurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviasurchgpct($artbsviasurchgpct = null, $comparison = null)
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

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASURCHGPCT, $artbsviasurchgpct, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviataxcode('fooValue');   // WHERE ArtbSviaTaxCode = 'fooValue'
     * $query->filterByArtbsviataxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviataxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviataxcode($artbsviataxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviataxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIATAXCODE, $artbsviataxcode, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaShipComplt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviashipcomplt('fooValue');   // WHERE ArtbSviaShipComplt = 'fooValue'
     * $query->filterByArtbsviashipcomplt('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaShipComplt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviashipcomplt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByArtbsviashipcomplt($artbsviashipcomplt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviashipcomplt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_ARTBSVIASHIPCOMPLT, $artbsviashipcomplt, $comparison);
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShipviaTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \VendorShipfrom object
     *
     * @param \VendorShipfrom|ObjectCollection $vendorShipfrom the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByVendorShipfrom($vendorShipfrom, $comparison = null)
    {
        if ($vendorShipfrom instanceof \VendorShipfrom) {
            return $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $vendorShipfrom->getArtbsviacode(), $comparison);
        } elseif ($vendorShipfrom instanceof ObjectCollection) {
            return $this
                ->useVendorShipfromQuery()
                ->filterByPrimaryKeys($vendorShipfrom->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVendorShipfrom() only accepts arguments of type \VendorShipfrom or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VendorShipfrom relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
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
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $vendor->getApvesviacode(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            return $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildShipviaQuery The current query, for fluid interface
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
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildShipviaQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(ShipviaTableMap::COL_ARTBSHIPVIA, $purchaseOrder->getArtbsviacode(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            return $this
                ->usePurchaseOrderQuery()
                ->filterByPrimaryKeys($purchaseOrder->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPurchaseOrder() only accepts arguments of type \PurchaseOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
     */
    public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildShipvia $shipvia Object to remove from the list of results
     *
     * @return $this|ChildShipviaQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // ShipviaQuery
