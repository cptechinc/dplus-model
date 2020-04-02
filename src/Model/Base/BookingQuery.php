<?php

namespace Base;

use \Booking as ChildBooking;
use \BookingQuery as ChildBookingQuery;
use \Exception;
use \PDO;
use Map\BookingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_book_log_head' table.
 *
 *
 *
 * @method     ChildBookingQuery orderByBklhordrbase($order = Criteria::ASC) Order by the BklhOrdrBase column
 * @method     ChildBookingQuery orderByBklhseq($order = Criteria::ASC) Order by the BklhSeq column
 * @method     ChildBookingQuery orderByBklhordrnbr($order = Criteria::ASC) Order by the BklhOrdrNbr column
 * @method     ChildBookingQuery orderByBklhtrandate($order = Criteria::ASC) Order by the BklhTranDate column
 * @method     ChildBookingQuery orderByBklhtrantime($order = Criteria::ASC) Order by the BklhTranTime column
 * @method     ChildBookingQuery orderByBklhlogin($order = Criteria::ASC) Order by the BklhLogIn column
 * @method     ChildBookingQuery orderByBklhordrdate($order = Criteria::ASC) Order by the BklhOrdrDate column
 * @method     ChildBookingQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildBookingQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildBookingQuery orderByBklhshiptostat($order = Criteria::ASC) Order by the BklhShipToStat column
 * @method     ChildBookingQuery orderByBklhorigwhse($order = Criteria::ASC) Order by the BklhOrigWhse column
 * @method     ChildBookingQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildBookingQuery orderByBklhsp1pct($order = Criteria::ASC) Order by the BklhSp1Pct column
 * @method     ChildBookingQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildBookingQuery orderByBklhsp2pct($order = Criteria::ASC) Order by the BklhSp2Pct column
 * @method     ChildBookingQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildBookingQuery orderByBklhsp3pct($order = Criteria::ASC) Order by the BklhSp3Pct column
 * @method     ChildBookingQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildBookingQuery orderByBklhusercode1($order = Criteria::ASC) Order by the BklhUserCode1 column
 * @method     ChildBookingQuery orderByBklhusercode2($order = Criteria::ASC) Order by the BklhUserCode2 column
 * @method     ChildBookingQuery orderByBklhusercode3($order = Criteria::ASC) Order by the BklhUserCode3 column
 * @method     ChildBookingQuery orderByBkldusercode4($order = Criteria::ASC) Order by the BkldUserCode4 column
 * @method     ChildBookingQuery orderByBklhpgmref($order = Criteria::ASC) Order by the BklhPgmRef column
 * @method     ChildBookingQuery orderByBklhreascd($order = Criteria::ASC) Order by the BklhReasCd column
 * @method     ChildBookingQuery orderByBklhfrttot($order = Criteria::ASC) Order by the BklhFrtTot column
 * @method     ChildBookingQuery orderByBklhmisctot($order = Criteria::ASC) Order by the BklhMiscTot column
 * @method     ChildBookingQuery orderByBklhsviacode($order = Criteria::ASC) Order by the BklhSviaCode column
 * @method     ChildBookingQuery orderByBklhcreditmemo($order = Criteria::ASC) Order by the BklhCreditMemo column
 * @method     ChildBookingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingQuery groupByBklhordrbase() Group by the BklhOrdrBase column
 * @method     ChildBookingQuery groupByBklhseq() Group by the BklhSeq column
 * @method     ChildBookingQuery groupByBklhordrnbr() Group by the BklhOrdrNbr column
 * @method     ChildBookingQuery groupByBklhtrandate() Group by the BklhTranDate column
 * @method     ChildBookingQuery groupByBklhtrantime() Group by the BklhTranTime column
 * @method     ChildBookingQuery groupByBklhlogin() Group by the BklhLogIn column
 * @method     ChildBookingQuery groupByBklhordrdate() Group by the BklhOrdrDate column
 * @method     ChildBookingQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildBookingQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildBookingQuery groupByBklhshiptostat() Group by the BklhShipToStat column
 * @method     ChildBookingQuery groupByBklhorigwhse() Group by the BklhOrigWhse column
 * @method     ChildBookingQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildBookingQuery groupByBklhsp1pct() Group by the BklhSp1Pct column
 * @method     ChildBookingQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildBookingQuery groupByBklhsp2pct() Group by the BklhSp2Pct column
 * @method     ChildBookingQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildBookingQuery groupByBklhsp3pct() Group by the BklhSp3Pct column
 * @method     ChildBookingQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildBookingQuery groupByBklhusercode1() Group by the BklhUserCode1 column
 * @method     ChildBookingQuery groupByBklhusercode2() Group by the BklhUserCode2 column
 * @method     ChildBookingQuery groupByBklhusercode3() Group by the BklhUserCode3 column
 * @method     ChildBookingQuery groupByBkldusercode4() Group by the BkldUserCode4 column
 * @method     ChildBookingQuery groupByBklhpgmref() Group by the BklhPgmRef column
 * @method     ChildBookingQuery groupByBklhreascd() Group by the BklhReasCd column
 * @method     ChildBookingQuery groupByBklhfrttot() Group by the BklhFrtTot column
 * @method     ChildBookingQuery groupByBklhmisctot() Group by the BklhMiscTot column
 * @method     ChildBookingQuery groupByBklhsviacode() Group by the BklhSviaCode column
 * @method     ChildBookingQuery groupByBklhcreditmemo() Group by the BklhCreditMemo column
 * @method     ChildBookingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildBookingQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildBookingQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildBookingQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildBookingQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildBookingQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildBookingQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingQuery leftJoinSalesPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingQuery rightJoinSalesPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingQuery innerJoinSalesPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesPerson relation
 *
 * @method     ChildBookingQuery joinWithSalesPerson($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesPerson relation
 *
 * @method     ChildBookingQuery leftJoinWithSalesPerson() Adds a LEFT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingQuery rightJoinWithSalesPerson() Adds a RIGHT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingQuery innerJoinWithSalesPerson() Adds a INNER JOIN clause and with to the query using the SalesPerson relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\SalesPersonQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBooking findOne(ConnectionInterface $con = null) Return the first ChildBooking matching the query
 * @method     ChildBooking findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBooking matching the query, or a new ChildBooking object populated from the query conditions when no match is found
 *
 * @method     ChildBooking findOneByBklhordrbase(string $BklhOrdrBase) Return the first ChildBooking filtered by the BklhOrdrBase column
 * @method     ChildBooking findOneByBklhseq(int $BklhSeq) Return the first ChildBooking filtered by the BklhSeq column
 * @method     ChildBooking findOneByBklhordrnbr(string $BklhOrdrNbr) Return the first ChildBooking filtered by the BklhOrdrNbr column
 * @method     ChildBooking findOneByBklhtrandate(string $BklhTranDate) Return the first ChildBooking filtered by the BklhTranDate column
 * @method     ChildBooking findOneByBklhtrantime(string $BklhTranTime) Return the first ChildBooking filtered by the BklhTranTime column
 * @method     ChildBooking findOneByBklhlogin(string $BklhLogIn) Return the first ChildBooking filtered by the BklhLogIn column
 * @method     ChildBooking findOneByBklhordrdate(string $BklhOrdrDate) Return the first ChildBooking filtered by the BklhOrdrDate column
 * @method     ChildBooking findOneByArcucustid(string $ArcuCustId) Return the first ChildBooking filtered by the ArcuCustId column
 * @method     ChildBooking findOneByArstshipid(string $ArstShipId) Return the first ChildBooking filtered by the ArstShipId column
 * @method     ChildBooking findOneByBklhshiptostat(string $BklhShipToStat) Return the first ChildBooking filtered by the BklhShipToStat column
 * @method     ChildBooking findOneByBklhorigwhse(string $BklhOrigWhse) Return the first ChildBooking filtered by the BklhOrigWhse column
 * @method     ChildBooking findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBooking filtered by the ArspSalePer1 column
 * @method     ChildBooking findOneByBklhsp1pct(string $BklhSp1Pct) Return the first ChildBooking filtered by the BklhSp1Pct column
 * @method     ChildBooking findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildBooking filtered by the ArspSalePer2 column
 * @method     ChildBooking findOneByBklhsp2pct(string $BklhSp2Pct) Return the first ChildBooking filtered by the BklhSp2Pct column
 * @method     ChildBooking findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildBooking filtered by the ArspSalePer3 column
 * @method     ChildBooking findOneByBklhsp3pct(string $BklhSp3Pct) Return the first ChildBooking filtered by the BklhSp3Pct column
 * @method     ChildBooking findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildBooking filtered by the ArtmTermCd column
 * @method     ChildBooking findOneByBklhusercode1(string $BklhUserCode1) Return the first ChildBooking filtered by the BklhUserCode1 column
 * @method     ChildBooking findOneByBklhusercode2(string $BklhUserCode2) Return the first ChildBooking filtered by the BklhUserCode2 column
 * @method     ChildBooking findOneByBklhusercode3(string $BklhUserCode3) Return the first ChildBooking filtered by the BklhUserCode3 column
 * @method     ChildBooking findOneByBkldusercode4(string $BkldUserCode4) Return the first ChildBooking filtered by the BkldUserCode4 column
 * @method     ChildBooking findOneByBklhpgmref(string $BklhPgmRef) Return the first ChildBooking filtered by the BklhPgmRef column
 * @method     ChildBooking findOneByBklhreascd(string $BklhReasCd) Return the first ChildBooking filtered by the BklhReasCd column
 * @method     ChildBooking findOneByBklhfrttot(string $BklhFrtTot) Return the first ChildBooking filtered by the BklhFrtTot column
 * @method     ChildBooking findOneByBklhmisctot(string $BklhMiscTot) Return the first ChildBooking filtered by the BklhMiscTot column
 * @method     ChildBooking findOneByBklhsviacode(string $BklhSviaCode) Return the first ChildBooking filtered by the BklhSviaCode column
 * @method     ChildBooking findOneByBklhcreditmemo(string $BklhCreditMemo) Return the first ChildBooking filtered by the BklhCreditMemo column
 * @method     ChildBooking findOneByDateupdtd(string $DateUpdtd) Return the first ChildBooking filtered by the DateUpdtd column
 * @method     ChildBooking findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBooking filtered by the TimeUpdtd column
 * @method     ChildBooking findOneByDummy(string $dummy) Return the first ChildBooking filtered by the dummy column *

 * @method     ChildBooking requirePk($key, ConnectionInterface $con = null) Return the ChildBooking by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOne(ConnectionInterface $con = null) Return the first ChildBooking matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBooking requireOneByBklhordrbase(string $BklhOrdrBase) Return the first ChildBooking filtered by the BklhOrdrBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhseq(int $BklhSeq) Return the first ChildBooking filtered by the BklhSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhordrnbr(string $BklhOrdrNbr) Return the first ChildBooking filtered by the BklhOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhtrandate(string $BklhTranDate) Return the first ChildBooking filtered by the BklhTranDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhtrantime(string $BklhTranTime) Return the first ChildBooking filtered by the BklhTranTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhlogin(string $BklhLogIn) Return the first ChildBooking filtered by the BklhLogIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhordrdate(string $BklhOrdrDate) Return the first ChildBooking filtered by the BklhOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArcucustid(string $ArcuCustId) Return the first ChildBooking filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArstshipid(string $ArstShipId) Return the first ChildBooking filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhshiptostat(string $BklhShipToStat) Return the first ChildBooking filtered by the BklhShipToStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhorigwhse(string $BklhOrigWhse) Return the first ChildBooking filtered by the BklhOrigWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBooking filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhsp1pct(string $BklhSp1Pct) Return the first ChildBooking filtered by the BklhSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildBooking filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhsp2pct(string $BklhSp2Pct) Return the first ChildBooking filtered by the BklhSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildBooking filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhsp3pct(string $BklhSp3Pct) Return the first ChildBooking filtered by the BklhSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildBooking filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhusercode1(string $BklhUserCode1) Return the first ChildBooking filtered by the BklhUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhusercode2(string $BklhUserCode2) Return the first ChildBooking filtered by the BklhUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhusercode3(string $BklhUserCode3) Return the first ChildBooking filtered by the BklhUserCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBkldusercode4(string $BkldUserCode4) Return the first ChildBooking filtered by the BkldUserCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhpgmref(string $BklhPgmRef) Return the first ChildBooking filtered by the BklhPgmRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhreascd(string $BklhReasCd) Return the first ChildBooking filtered by the BklhReasCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhfrttot(string $BklhFrtTot) Return the first ChildBooking filtered by the BklhFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhmisctot(string $BklhMiscTot) Return the first ChildBooking filtered by the BklhMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhsviacode(string $BklhSviaCode) Return the first ChildBooking filtered by the BklhSviaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByBklhcreditmemo(string $BklhCreditMemo) Return the first ChildBooking filtered by the BklhCreditMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBooking filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBooking filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBooking requireOneByDummy(string $dummy) Return the first ChildBooking filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBooking[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBooking objects based on current ModelCriteria
 * @method     ChildBooking[]|ObjectCollection findByBklhordrbase(string $BklhOrdrBase) Return ChildBooking objects filtered by the BklhOrdrBase column
 * @method     ChildBooking[]|ObjectCollection findByBklhseq(int $BklhSeq) Return ChildBooking objects filtered by the BklhSeq column
 * @method     ChildBooking[]|ObjectCollection findByBklhordrnbr(string $BklhOrdrNbr) Return ChildBooking objects filtered by the BklhOrdrNbr column
 * @method     ChildBooking[]|ObjectCollection findByBklhtrandate(string $BklhTranDate) Return ChildBooking objects filtered by the BklhTranDate column
 * @method     ChildBooking[]|ObjectCollection findByBklhtrantime(string $BklhTranTime) Return ChildBooking objects filtered by the BklhTranTime column
 * @method     ChildBooking[]|ObjectCollection findByBklhlogin(string $BklhLogIn) Return ChildBooking objects filtered by the BklhLogIn column
 * @method     ChildBooking[]|ObjectCollection findByBklhordrdate(string $BklhOrdrDate) Return ChildBooking objects filtered by the BklhOrdrDate column
 * @method     ChildBooking[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildBooking objects filtered by the ArcuCustId column
 * @method     ChildBooking[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildBooking objects filtered by the ArstShipId column
 * @method     ChildBooking[]|ObjectCollection findByBklhshiptostat(string $BklhShipToStat) Return ChildBooking objects filtered by the BklhShipToStat column
 * @method     ChildBooking[]|ObjectCollection findByBklhorigwhse(string $BklhOrigWhse) Return ChildBooking objects filtered by the BklhOrigWhse column
 * @method     ChildBooking[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildBooking objects filtered by the ArspSalePer1 column
 * @method     ChildBooking[]|ObjectCollection findByBklhsp1pct(string $BklhSp1Pct) Return ChildBooking objects filtered by the BklhSp1Pct column
 * @method     ChildBooking[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildBooking objects filtered by the ArspSalePer2 column
 * @method     ChildBooking[]|ObjectCollection findByBklhsp2pct(string $BklhSp2Pct) Return ChildBooking objects filtered by the BklhSp2Pct column
 * @method     ChildBooking[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildBooking objects filtered by the ArspSalePer3 column
 * @method     ChildBooking[]|ObjectCollection findByBklhsp3pct(string $BklhSp3Pct) Return ChildBooking objects filtered by the BklhSp3Pct column
 * @method     ChildBooking[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildBooking objects filtered by the ArtmTermCd column
 * @method     ChildBooking[]|ObjectCollection findByBklhusercode1(string $BklhUserCode1) Return ChildBooking objects filtered by the BklhUserCode1 column
 * @method     ChildBooking[]|ObjectCollection findByBklhusercode2(string $BklhUserCode2) Return ChildBooking objects filtered by the BklhUserCode2 column
 * @method     ChildBooking[]|ObjectCollection findByBklhusercode3(string $BklhUserCode3) Return ChildBooking objects filtered by the BklhUserCode3 column
 * @method     ChildBooking[]|ObjectCollection findByBkldusercode4(string $BkldUserCode4) Return ChildBooking objects filtered by the BkldUserCode4 column
 * @method     ChildBooking[]|ObjectCollection findByBklhpgmref(string $BklhPgmRef) Return ChildBooking objects filtered by the BklhPgmRef column
 * @method     ChildBooking[]|ObjectCollection findByBklhreascd(string $BklhReasCd) Return ChildBooking objects filtered by the BklhReasCd column
 * @method     ChildBooking[]|ObjectCollection findByBklhfrttot(string $BklhFrtTot) Return ChildBooking objects filtered by the BklhFrtTot column
 * @method     ChildBooking[]|ObjectCollection findByBklhmisctot(string $BklhMiscTot) Return ChildBooking objects filtered by the BklhMiscTot column
 * @method     ChildBooking[]|ObjectCollection findByBklhsviacode(string $BklhSviaCode) Return ChildBooking objects filtered by the BklhSviaCode column
 * @method     ChildBooking[]|ObjectCollection findByBklhcreditmemo(string $BklhCreditMemo) Return ChildBooking objects filtered by the BklhCreditMemo column
 * @method     ChildBooking[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBooking objects filtered by the DateUpdtd column
 * @method     ChildBooking[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBooking objects filtered by the TimeUpdtd column
 * @method     ChildBooking[]|ObjectCollection findByDummy(string $dummy) Return ChildBooking objects filtered by the dummy column
 * @method     ChildBooking[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Booking', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBookingQuery) {
            return $criteria;
        }
        $query = new ChildBookingQuery();
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
     * @param array[$BklhOrdrBase, $BklhSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBooking|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildBooking A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT BklhOrdrBase, BklhSeq, BklhOrdrNbr, BklhTranDate, BklhTranTime, BklhLogIn, BklhOrdrDate, ArcuCustId, ArstShipId, BklhShipToStat, BklhOrigWhse, ArspSalePer1, BklhSp1Pct, ArspSalePer2, BklhSp2Pct, ArspSalePer3, BklhSp3Pct, ArtmTermCd, BklhUserCode1, BklhUserCode2, BklhUserCode3, BkldUserCode4, BklhPgmRef, BklhReasCd, BklhFrtTot, BklhMiscTot, BklhSviaCode, BklhCreditMemo, DateUpdtd, TimeUpdtd, dummy FROM so_book_log_head WHERE BklhOrdrBase = :p0 AND BklhSeq = :p1';
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
            /** @var ChildBooking $obj */
            $obj = new ChildBooking();
            $obj->hydrate($row);
            BookingTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildBooking|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BookingTableMap::COL_BKLHORDRBASE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingTableMap::COL_BKLHSEQ, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BookingTableMap::COL_BKLHORDRBASE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingTableMap::COL_BKLHSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the BklhOrdrBase column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhordrbase('fooValue');   // WHERE BklhOrdrBase = 'fooValue'
     * $query->filterByBklhordrbase('%fooValue%', Criteria::LIKE); // WHERE BklhOrdrBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhordrbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhordrbase($bklhordrbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhordrbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHORDRBASE, $bklhordrbase, $comparison);
    }

    /**
     * Filter the query on the BklhSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhseq(1234); // WHERE BklhSeq = 1234
     * $query->filterByBklhseq(array(12, 34)); // WHERE BklhSeq IN (12, 34)
     * $query->filterByBklhseq(array('min' => 12)); // WHERE BklhSeq > 12
     * </code>
     *
     * @param     mixed $bklhseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhseq($bklhseq = null, $comparison = null)
    {
        if (is_array($bklhseq)) {
            $useMinMax = false;
            if (isset($bklhseq['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSEQ, $bklhseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhseq['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSEQ, $bklhseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSEQ, $bklhseq, $comparison);
    }

    /**
     * Filter the query on the BklhOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhordrnbr('fooValue');   // WHERE BklhOrdrNbr = 'fooValue'
     * $query->filterByBklhordrnbr('%fooValue%', Criteria::LIKE); // WHERE BklhOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhordrnbr($bklhordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHORDRNBR, $bklhordrnbr, $comparison);
    }

    /**
     * Filter the query on the BklhTranDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhtrandate('fooValue');   // WHERE BklhTranDate = 'fooValue'
     * $query->filterByBklhtrandate('%fooValue%', Criteria::LIKE); // WHERE BklhTranDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhtrandate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhtrandate($bklhtrandate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhtrandate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHTRANDATE, $bklhtrandate, $comparison);
    }

    /**
     * Filter the query on the BklhTranTime column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhtrantime('fooValue');   // WHERE BklhTranTime = 'fooValue'
     * $query->filterByBklhtrantime('%fooValue%', Criteria::LIKE); // WHERE BklhTranTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhtrantime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhtrantime($bklhtrantime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhtrantime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHTRANTIME, $bklhtrantime, $comparison);
    }

    /**
     * Filter the query on the BklhLogIn column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhlogin('fooValue');   // WHERE BklhLogIn = 'fooValue'
     * $query->filterByBklhlogin('%fooValue%', Criteria::LIKE); // WHERE BklhLogIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhlogin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhlogin($bklhlogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhlogin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHLOGIN, $bklhlogin, $comparison);
    }

    /**
     * Filter the query on the BklhOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhordrdate('fooValue');   // WHERE BklhOrdrDate = 'fooValue'
     * $query->filterByBklhordrdate('%fooValue%', Criteria::LIKE); // WHERE BklhOrdrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhordrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhordrdate($bklhordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHORDRDATE, $bklhordrdate, $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the BklhShipToStat column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhshiptostat('fooValue');   // WHERE BklhShipToStat = 'fooValue'
     * $query->filterByBklhshiptostat('%fooValue%', Criteria::LIKE); // WHERE BklhShipToStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhshiptostat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhshiptostat($bklhshiptostat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhshiptostat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSHIPTOSTAT, $bklhshiptostat, $comparison);
    }

    /**
     * Filter the query on the BklhOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhorigwhse('fooValue');   // WHERE BklhOrigWhse = 'fooValue'
     * $query->filterByBklhorigwhse('%fooValue%', Criteria::LIKE); // WHERE BklhOrigWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhorigwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhorigwhse($bklhorigwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHORIGWHSE, $bklhorigwhse, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the BklhSp1Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhsp1pct(1234); // WHERE BklhSp1Pct = 1234
     * $query->filterByBklhsp1pct(array(12, 34)); // WHERE BklhSp1Pct IN (12, 34)
     * $query->filterByBklhsp1pct(array('min' => 12)); // WHERE BklhSp1Pct > 12
     * </code>
     *
     * @param     mixed $bklhsp1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhsp1pct($bklhsp1pct = null, $comparison = null)
    {
        if (is_array($bklhsp1pct)) {
            $useMinMax = false;
            if (isset($bklhsp1pct['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP1PCT, $bklhsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhsp1pct['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP1PCT, $bklhsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSP1PCT, $bklhsp1pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the BklhSp2Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhsp2pct(1234); // WHERE BklhSp2Pct = 1234
     * $query->filterByBklhsp2pct(array(12, 34)); // WHERE BklhSp2Pct IN (12, 34)
     * $query->filterByBklhsp2pct(array('min' => 12)); // WHERE BklhSp2Pct > 12
     * </code>
     *
     * @param     mixed $bklhsp2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhsp2pct($bklhsp2pct = null, $comparison = null)
    {
        if (is_array($bklhsp2pct)) {
            $useMinMax = false;
            if (isset($bklhsp2pct['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP2PCT, $bklhsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhsp2pct['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP2PCT, $bklhsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSP2PCT, $bklhsp2pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the BklhSp3Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhsp3pct(1234); // WHERE BklhSp3Pct = 1234
     * $query->filterByBklhsp3pct(array(12, 34)); // WHERE BklhSp3Pct IN (12, 34)
     * $query->filterByBklhsp3pct(array('min' => 12)); // WHERE BklhSp3Pct > 12
     * </code>
     *
     * @param     mixed $bklhsp3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhsp3pct($bklhsp3pct = null, $comparison = null)
    {
        if (is_array($bklhsp3pct)) {
            $useMinMax = false;
            if (isset($bklhsp3pct['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP3PCT, $bklhsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhsp3pct['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHSP3PCT, $bklhsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSP3PCT, $bklhsp3pct, $comparison);
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the BklhUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhusercode1('fooValue');   // WHERE BklhUserCode1 = 'fooValue'
     * $query->filterByBklhusercode1('%fooValue%', Criteria::LIKE); // WHERE BklhUserCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhusercode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhusercode1($bklhusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHUSERCODE1, $bklhusercode1, $comparison);
    }

    /**
     * Filter the query on the BklhUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhusercode2('fooValue');   // WHERE BklhUserCode2 = 'fooValue'
     * $query->filterByBklhusercode2('%fooValue%', Criteria::LIKE); // WHERE BklhUserCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhusercode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhusercode2($bklhusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHUSERCODE2, $bklhusercode2, $comparison);
    }

    /**
     * Filter the query on the BklhUserCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhusercode3('fooValue');   // WHERE BklhUserCode3 = 'fooValue'
     * $query->filterByBklhusercode3('%fooValue%', Criteria::LIKE); // WHERE BklhUserCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhusercode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhusercode3($bklhusercode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhusercode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHUSERCODE3, $bklhusercode3, $comparison);
    }

    /**
     * Filter the query on the BkldUserCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldusercode4('fooValue');   // WHERE BkldUserCode4 = 'fooValue'
     * $query->filterByBkldusercode4('%fooValue%', Criteria::LIKE); // WHERE BkldUserCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldusercode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBkldusercode4($bkldusercode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldusercode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLDUSERCODE4, $bkldusercode4, $comparison);
    }

    /**
     * Filter the query on the BklhPgmRef column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhpgmref('fooValue');   // WHERE BklhPgmRef = 'fooValue'
     * $query->filterByBklhpgmref('%fooValue%', Criteria::LIKE); // WHERE BklhPgmRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhpgmref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhpgmref($bklhpgmref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhpgmref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHPGMREF, $bklhpgmref, $comparison);
    }

    /**
     * Filter the query on the BklhReasCd column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhreascd('fooValue');   // WHERE BklhReasCd = 'fooValue'
     * $query->filterByBklhreascd('%fooValue%', Criteria::LIKE); // WHERE BklhReasCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhreascd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhreascd($bklhreascd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhreascd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHREASCD, $bklhreascd, $comparison);
    }

    /**
     * Filter the query on the BklhFrtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhfrttot(1234); // WHERE BklhFrtTot = 1234
     * $query->filterByBklhfrttot(array(12, 34)); // WHERE BklhFrtTot IN (12, 34)
     * $query->filterByBklhfrttot(array('min' => 12)); // WHERE BklhFrtTot > 12
     * </code>
     *
     * @param     mixed $bklhfrttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhfrttot($bklhfrttot = null, $comparison = null)
    {
        if (is_array($bklhfrttot)) {
            $useMinMax = false;
            if (isset($bklhfrttot['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHFRTTOT, $bklhfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhfrttot['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHFRTTOT, $bklhfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHFRTTOT, $bklhfrttot, $comparison);
    }

    /**
     * Filter the query on the BklhMiscTot column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhmisctot(1234); // WHERE BklhMiscTot = 1234
     * $query->filterByBklhmisctot(array(12, 34)); // WHERE BklhMiscTot IN (12, 34)
     * $query->filterByBklhmisctot(array('min' => 12)); // WHERE BklhMiscTot > 12
     * </code>
     *
     * @param     mixed $bklhmisctot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhmisctot($bklhmisctot = null, $comparison = null)
    {
        if (is_array($bklhmisctot)) {
            $useMinMax = false;
            if (isset($bklhmisctot['min'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHMISCTOT, $bklhmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bklhmisctot['max'])) {
                $this->addUsingAlias(BookingTableMap::COL_BKLHMISCTOT, $bklhmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHMISCTOT, $bklhmisctot, $comparison);
    }

    /**
     * Filter the query on the BklhSviaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhsviacode('fooValue');   // WHERE BklhSviaCode = 'fooValue'
     * $query->filterByBklhsviacode('%fooValue%', Criteria::LIKE); // WHERE BklhSviaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhsviacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhsviacode($bklhsviacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhsviacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHSVIACODE, $bklhsviacode, $comparison);
    }

    /**
     * Filter the query on the BklhCreditMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhcreditmemo('fooValue');   // WHERE BklhCreditMemo = 'fooValue'
     * $query->filterByBklhcreditmemo('%fooValue%', Criteria::LIKE); // WHERE BklhCreditMemo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhcreditmemo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByBklhcreditmemo($bklhcreditmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhcreditmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_BKLHCREDITMEMO, $bklhcreditmemo, $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(BookingTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return ChildBookingQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(BookingTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(BookingTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
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
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \SalesPerson object
     *
     * @param \SalesPerson|ObjectCollection $salesPerson The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingQuery The current query, for fluid interface
     */
    public function filterBySalesPerson($salesPerson, $comparison = null)
    {
        if ($salesPerson instanceof \SalesPerson) {
            return $this
                ->addUsingAlias(BookingTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), $comparison);
        } elseif ($salesPerson instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingTableMap::COL_ARSPSALEPER1, $salesPerson->toKeyValue('PrimaryKey', 'Arspsaleper1'), $comparison);
        } else {
            throw new PropelException('filterBySalesPerson() only accepts arguments of type \SalesPerson or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesPerson relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function joinSalesPerson($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesPerson');

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
            $this->addJoinObject($join, 'SalesPerson');
        }

        return $this;
    }

    /**
     * Use the SalesPerson relation SalesPerson object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesPersonQuery A secondary query class using the current class as primary query
     */
    public function useSalesPersonQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesPerson($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesPerson', '\SalesPersonQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBooking $booking Object to remove from the list of results
     *
     * @return $this|ChildBookingQuery The current query, for fluid interface
     */
    public function prune($booking = null)
    {
        if ($booking) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingTableMap::COL_BKLHORDRBASE), $booking->getBklhordrbase(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingTableMap::COL_BKLHSEQ), $booking->getBklhseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_log_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingTableMap::clearInstancePool();
            BookingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BookingQuery
