<?php

namespace Base;

use \ApInvoice as ChildApInvoice;
use \ApInvoiceQuery as ChildApInvoiceQuery;
use \Exception;
use \PDO;
use Map\ApInvoiceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_invoice_head' table.
 *
 *
 *
 * @method     ChildApInvoiceQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildApInvoiceQuery orderByApihpaytokey($order = Criteria::ASC) Order by the ApihPayToKey column
 * @method     ChildApInvoiceQuery orderByApihptname($order = Criteria::ASC) Order by the ApihPtName column
 * @method     ChildApInvoiceQuery orderByApihptadr1($order = Criteria::ASC) Order by the ApihPtAdr1 column
 * @method     ChildApInvoiceQuery orderByApihptadr2($order = Criteria::ASC) Order by the ApihPtAdr2 column
 * @method     ChildApInvoiceQuery orderByApihptadr3($order = Criteria::ASC) Order by the ApihPtAdr3 column
 * @method     ChildApInvoiceQuery orderByApihptctry($order = Criteria::ASC) Order by the ApihPtCtry column
 * @method     ChildApInvoiceQuery orderByApihptcity($order = Criteria::ASC) Order by the ApihPtCity column
 * @method     ChildApInvoiceQuery orderByApihptstat($order = Criteria::ASC) Order by the ApihPtStat column
 * @method     ChildApInvoiceQuery orderByApihptzipcode($order = Criteria::ASC) Order by the ApihPtZipCode column
 * @method     ChildApInvoiceQuery orderByApihponbr($order = Criteria::ASC) Order by the ApihPoNbr column
 * @method     ChildApInvoiceQuery orderByApihctrlnbr($order = Criteria::ASC) Order by the ApihCtrlNbr column
 * @method     ChildApInvoiceQuery orderByApihinvnbr($order = Criteria::ASC) Order by the ApihInvNbr column
 * @method     ChildApInvoiceQuery orderByApihseq($order = Criteria::ASC) Order by the ApihSeq column
 * @method     ChildApInvoiceQuery orderByApihstat($order = Criteria::ASC) Order by the ApihStat column
 * @method     ChildApInvoiceQuery orderByApihinvdate($order = Criteria::ASC) Order by the ApihInvDate column
 * @method     ChildApInvoiceQuery orderByApihdiscdate($order = Criteria::ASC) Order by the ApihDiscDate column
 * @method     ChildApInvoiceQuery orderByApihduedate($order = Criteria::ASC) Order by the ApihDueDate column
 * @method     ChildApInvoiceQuery orderByApihtotamt($order = Criteria::ASC) Order by the ApihTotAmt column
 * @method     ChildApInvoiceQuery orderByApihdiscamt($order = Criteria::ASC) Order by the ApihDiscAmt column
 * @method     ChildApInvoiceQuery orderByApihppchknbr($order = Criteria::ASC) Order by the ApihPpChkNbr column
 * @method     ChildApInvoiceQuery orderByApihglpd($order = Criteria::ASC) Order by the ApihGlPd column
 * @method     ChildApInvoiceQuery orderByApihchknbr($order = Criteria::ASC) Order by the ApihChkNbr column
 * @method     ChildApInvoiceQuery orderByApihchkdate($order = Criteria::ASC) Order by the ApihChkDate column
 * @method     ChildApInvoiceQuery orderByApihchkamt($order = Criteria::ASC) Order by the ApihChkAmt column
 * @method     ChildApInvoiceQuery orderByApihchkglacct($order = Criteria::ASC) Order by the ApihChkGlAcct column
 * @method     ChildApInvoiceQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildApInvoiceQuery orderByAptmtermcode($order = Criteria::ASC) Order by the AptmTermCode column
 * @method     ChildApInvoiceQuery orderByApihvenddisc($order = Criteria::ASC) Order by the ApihVendDisc column
 * @method     ChildApInvoiceQuery orderByApihinvref($order = Criteria::ASC) Order by the ApihInvRef column
 * @method     ChildApInvoiceQuery orderByApihcenbeeformatid($order = Criteria::ASC) Order by the ApihCenbeeFormatId column
 * @method     ChildApInvoiceQuery orderByApihcenbeeponbr($order = Criteria::ASC) Order by the ApihCenbeePoNbr column
 * @method     ChildApInvoiceQuery orderByApihtakeexpired($order = Criteria::ASC) Order by the ApihTakeExpired column
 * @method     ChildApInvoiceQuery orderByApihexchctry($order = Criteria::ASC) Order by the ApihExchCtry column
 * @method     ChildApInvoiceQuery orderByApihexchrate($order = Criteria::ASC) Order by the ApihExchRate column
 * @method     ChildApInvoiceQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApInvoiceQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApInvoiceQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApInvoiceQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildApInvoiceQuery groupByApihpaytokey() Group by the ApihPayToKey column
 * @method     ChildApInvoiceQuery groupByApihptname() Group by the ApihPtName column
 * @method     ChildApInvoiceQuery groupByApihptadr1() Group by the ApihPtAdr1 column
 * @method     ChildApInvoiceQuery groupByApihptadr2() Group by the ApihPtAdr2 column
 * @method     ChildApInvoiceQuery groupByApihptadr3() Group by the ApihPtAdr3 column
 * @method     ChildApInvoiceQuery groupByApihptctry() Group by the ApihPtCtry column
 * @method     ChildApInvoiceQuery groupByApihptcity() Group by the ApihPtCity column
 * @method     ChildApInvoiceQuery groupByApihptstat() Group by the ApihPtStat column
 * @method     ChildApInvoiceQuery groupByApihptzipcode() Group by the ApihPtZipCode column
 * @method     ChildApInvoiceQuery groupByApihponbr() Group by the ApihPoNbr column
 * @method     ChildApInvoiceQuery groupByApihctrlnbr() Group by the ApihCtrlNbr column
 * @method     ChildApInvoiceQuery groupByApihinvnbr() Group by the ApihInvNbr column
 * @method     ChildApInvoiceQuery groupByApihseq() Group by the ApihSeq column
 * @method     ChildApInvoiceQuery groupByApihstat() Group by the ApihStat column
 * @method     ChildApInvoiceQuery groupByApihinvdate() Group by the ApihInvDate column
 * @method     ChildApInvoiceQuery groupByApihdiscdate() Group by the ApihDiscDate column
 * @method     ChildApInvoiceQuery groupByApihduedate() Group by the ApihDueDate column
 * @method     ChildApInvoiceQuery groupByApihtotamt() Group by the ApihTotAmt column
 * @method     ChildApInvoiceQuery groupByApihdiscamt() Group by the ApihDiscAmt column
 * @method     ChildApInvoiceQuery groupByApihppchknbr() Group by the ApihPpChkNbr column
 * @method     ChildApInvoiceQuery groupByApihglpd() Group by the ApihGlPd column
 * @method     ChildApInvoiceQuery groupByApihchknbr() Group by the ApihChkNbr column
 * @method     ChildApInvoiceQuery groupByApihchkdate() Group by the ApihChkDate column
 * @method     ChildApInvoiceQuery groupByApihchkamt() Group by the ApihChkAmt column
 * @method     ChildApInvoiceQuery groupByApihchkglacct() Group by the ApihChkGlAcct column
 * @method     ChildApInvoiceQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildApInvoiceQuery groupByAptmtermcode() Group by the AptmTermCode column
 * @method     ChildApInvoiceQuery groupByApihvenddisc() Group by the ApihVendDisc column
 * @method     ChildApInvoiceQuery groupByApihinvref() Group by the ApihInvRef column
 * @method     ChildApInvoiceQuery groupByApihcenbeeformatid() Group by the ApihCenbeeFormatId column
 * @method     ChildApInvoiceQuery groupByApihcenbeeponbr() Group by the ApihCenbeePoNbr column
 * @method     ChildApInvoiceQuery groupByApihtakeexpired() Group by the ApihTakeExpired column
 * @method     ChildApInvoiceQuery groupByApihexchctry() Group by the ApihExchCtry column
 * @method     ChildApInvoiceQuery groupByApihexchrate() Group by the ApihExchRate column
 * @method     ChildApInvoiceQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApInvoiceQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApInvoiceQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApInvoiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApInvoiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApInvoiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApInvoiceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApInvoiceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApInvoiceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApInvoiceQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApInvoiceQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApInvoiceQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildApInvoiceQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildApInvoiceQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildApInvoiceQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildApInvoiceQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildApInvoiceQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildApInvoiceQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildApInvoiceQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildApInvoiceQuery leftJoinApInvoiceDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the ApInvoiceDetail relation
 * @method     ChildApInvoiceQuery rightJoinApInvoiceDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ApInvoiceDetail relation
 * @method     ChildApInvoiceQuery innerJoinApInvoiceDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the ApInvoiceDetail relation
 *
 * @method     ChildApInvoiceQuery joinWithApInvoiceDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ApInvoiceDetail relation
 *
 * @method     ChildApInvoiceQuery leftJoinWithApInvoiceDetail() Adds a LEFT JOIN clause and with to the query using the ApInvoiceDetail relation
 * @method     ChildApInvoiceQuery rightJoinWithApInvoiceDetail() Adds a RIGHT JOIN clause and with to the query using the ApInvoiceDetail relation
 * @method     ChildApInvoiceQuery innerJoinWithApInvoiceDetail() Adds a INNER JOIN clause and with to the query using the ApInvoiceDetail relation
 *
 * @method     \VendorQuery|\PurchaseOrderQuery|\ApInvoiceDetailQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApInvoice findOne(ConnectionInterface $con = null) Return the first ChildApInvoice matching the query
 * @method     ChildApInvoice findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApInvoice matching the query, or a new ChildApInvoice object populated from the query conditions when no match is found
 *
 * @method     ChildApInvoice findOneByApvevendid(string $ApveVendId) Return the first ChildApInvoice filtered by the ApveVendId column
 * @method     ChildApInvoice findOneByApihpaytokey(string $ApihPayToKey) Return the first ChildApInvoice filtered by the ApihPayToKey column
 * @method     ChildApInvoice findOneByApihptname(string $ApihPtName) Return the first ChildApInvoice filtered by the ApihPtName column
 * @method     ChildApInvoice findOneByApihptadr1(string $ApihPtAdr1) Return the first ChildApInvoice filtered by the ApihPtAdr1 column
 * @method     ChildApInvoice findOneByApihptadr2(string $ApihPtAdr2) Return the first ChildApInvoice filtered by the ApihPtAdr2 column
 * @method     ChildApInvoice findOneByApihptadr3(string $ApihPtAdr3) Return the first ChildApInvoice filtered by the ApihPtAdr3 column
 * @method     ChildApInvoice findOneByApihptctry(string $ApihPtCtry) Return the first ChildApInvoice filtered by the ApihPtCtry column
 * @method     ChildApInvoice findOneByApihptcity(string $ApihPtCity) Return the first ChildApInvoice filtered by the ApihPtCity column
 * @method     ChildApInvoice findOneByApihptstat(string $ApihPtStat) Return the first ChildApInvoice filtered by the ApihPtStat column
 * @method     ChildApInvoice findOneByApihptzipcode(string $ApihPtZipCode) Return the first ChildApInvoice filtered by the ApihPtZipCode column
 * @method     ChildApInvoice findOneByApihponbr(string $ApihPoNbr) Return the first ChildApInvoice filtered by the ApihPoNbr column
 * @method     ChildApInvoice findOneByApihctrlnbr(string $ApihCtrlNbr) Return the first ChildApInvoice filtered by the ApihCtrlNbr column
 * @method     ChildApInvoice findOneByApihinvnbr(string $ApihInvNbr) Return the first ChildApInvoice filtered by the ApihInvNbr column
 * @method     ChildApInvoice findOneByApihseq(int $ApihSeq) Return the first ChildApInvoice filtered by the ApihSeq column
 * @method     ChildApInvoice findOneByApihstat(string $ApihStat) Return the first ChildApInvoice filtered by the ApihStat column
 * @method     ChildApInvoice findOneByApihinvdate(string $ApihInvDate) Return the first ChildApInvoice filtered by the ApihInvDate column
 * @method     ChildApInvoice findOneByApihdiscdate(string $ApihDiscDate) Return the first ChildApInvoice filtered by the ApihDiscDate column
 * @method     ChildApInvoice findOneByApihduedate(string $ApihDueDate) Return the first ChildApInvoice filtered by the ApihDueDate column
 * @method     ChildApInvoice findOneByApihtotamt(string $ApihTotAmt) Return the first ChildApInvoice filtered by the ApihTotAmt column
 * @method     ChildApInvoice findOneByApihdiscamt(string $ApihDiscAmt) Return the first ChildApInvoice filtered by the ApihDiscAmt column
 * @method     ChildApInvoice findOneByApihppchknbr(int $ApihPpChkNbr) Return the first ChildApInvoice filtered by the ApihPpChkNbr column
 * @method     ChildApInvoice findOneByApihglpd(int $ApihGlPd) Return the first ChildApInvoice filtered by the ApihGlPd column
 * @method     ChildApInvoice findOneByApihchknbr(int $ApihChkNbr) Return the first ChildApInvoice filtered by the ApihChkNbr column
 * @method     ChildApInvoice findOneByApihchkdate(string $ApihChkDate) Return the first ChildApInvoice filtered by the ApihChkDate column
 * @method     ChildApInvoice findOneByApihchkamt(string $ApihChkAmt) Return the first ChildApInvoice filtered by the ApihChkAmt column
 * @method     ChildApInvoice findOneByApihchkglacct(string $ApihChkGlAcct) Return the first ChildApInvoice filtered by the ApihChkGlAcct column
 * @method     ChildApInvoice findOneByIntbwhse(string $IntbWhse) Return the first ChildApInvoice filtered by the IntbWhse column
 * @method     ChildApInvoice findOneByAptmtermcode(string $AptmTermCode) Return the first ChildApInvoice filtered by the AptmTermCode column
 * @method     ChildApInvoice findOneByApihvenddisc(string $ApihVendDisc) Return the first ChildApInvoice filtered by the ApihVendDisc column
 * @method     ChildApInvoice findOneByApihinvref(string $ApihInvRef) Return the first ChildApInvoice filtered by the ApihInvRef column
 * @method     ChildApInvoice findOneByApihcenbeeformatid(string $ApihCenbeeFormatId) Return the first ChildApInvoice filtered by the ApihCenbeeFormatId column
 * @method     ChildApInvoice findOneByApihcenbeeponbr(string $ApihCenbeePoNbr) Return the first ChildApInvoice filtered by the ApihCenbeePoNbr column
 * @method     ChildApInvoice findOneByApihtakeexpired(string $ApihTakeExpired) Return the first ChildApInvoice filtered by the ApihTakeExpired column
 * @method     ChildApInvoice findOneByApihexchctry(string $ApihExchCtry) Return the first ChildApInvoice filtered by the ApihExchCtry column
 * @method     ChildApInvoice findOneByApihexchrate(string $ApihExchRate) Return the first ChildApInvoice filtered by the ApihExchRate column
 * @method     ChildApInvoice findOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoice filtered by the DateUpdtd column
 * @method     ChildApInvoice findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoice filtered by the TimeUpdtd column
 * @method     ChildApInvoice findOneByDummy(string $dummy) Return the first ChildApInvoice filtered by the dummy column *

 * @method     ChildApInvoice requirePk($key, ConnectionInterface $con = null) Return the ChildApInvoice by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOne(ConnectionInterface $con = null) Return the first ChildApInvoice matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoice requireOneByApvevendid(string $ApveVendId) Return the first ChildApInvoice filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihpaytokey(string $ApihPayToKey) Return the first ChildApInvoice filtered by the ApihPayToKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptname(string $ApihPtName) Return the first ChildApInvoice filtered by the ApihPtName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptadr1(string $ApihPtAdr1) Return the first ChildApInvoice filtered by the ApihPtAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptadr2(string $ApihPtAdr2) Return the first ChildApInvoice filtered by the ApihPtAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptadr3(string $ApihPtAdr3) Return the first ChildApInvoice filtered by the ApihPtAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptctry(string $ApihPtCtry) Return the first ChildApInvoice filtered by the ApihPtCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptcity(string $ApihPtCity) Return the first ChildApInvoice filtered by the ApihPtCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptstat(string $ApihPtStat) Return the first ChildApInvoice filtered by the ApihPtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihptzipcode(string $ApihPtZipCode) Return the first ChildApInvoice filtered by the ApihPtZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihponbr(string $ApihPoNbr) Return the first ChildApInvoice filtered by the ApihPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihctrlnbr(string $ApihCtrlNbr) Return the first ChildApInvoice filtered by the ApihCtrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihinvnbr(string $ApihInvNbr) Return the first ChildApInvoice filtered by the ApihInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihseq(int $ApihSeq) Return the first ChildApInvoice filtered by the ApihSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihstat(string $ApihStat) Return the first ChildApInvoice filtered by the ApihStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihinvdate(string $ApihInvDate) Return the first ChildApInvoice filtered by the ApihInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihdiscdate(string $ApihDiscDate) Return the first ChildApInvoice filtered by the ApihDiscDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihduedate(string $ApihDueDate) Return the first ChildApInvoice filtered by the ApihDueDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihtotamt(string $ApihTotAmt) Return the first ChildApInvoice filtered by the ApihTotAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihdiscamt(string $ApihDiscAmt) Return the first ChildApInvoice filtered by the ApihDiscAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihppchknbr(int $ApihPpChkNbr) Return the first ChildApInvoice filtered by the ApihPpChkNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihglpd(int $ApihGlPd) Return the first ChildApInvoice filtered by the ApihGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihchknbr(int $ApihChkNbr) Return the first ChildApInvoice filtered by the ApihChkNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihchkdate(string $ApihChkDate) Return the first ChildApInvoice filtered by the ApihChkDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihchkamt(string $ApihChkAmt) Return the first ChildApInvoice filtered by the ApihChkAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihchkglacct(string $ApihChkGlAcct) Return the first ChildApInvoice filtered by the ApihChkGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByIntbwhse(string $IntbWhse) Return the first ChildApInvoice filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByAptmtermcode(string $AptmTermCode) Return the first ChildApInvoice filtered by the AptmTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihvenddisc(string $ApihVendDisc) Return the first ChildApInvoice filtered by the ApihVendDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihinvref(string $ApihInvRef) Return the first ChildApInvoice filtered by the ApihInvRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihcenbeeformatid(string $ApihCenbeeFormatId) Return the first ChildApInvoice filtered by the ApihCenbeeFormatId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihcenbeeponbr(string $ApihCenbeePoNbr) Return the first ChildApInvoice filtered by the ApihCenbeePoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihtakeexpired(string $ApihTakeExpired) Return the first ChildApInvoice filtered by the ApihTakeExpired column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihexchctry(string $ApihExchCtry) Return the first ChildApInvoice filtered by the ApihExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByApihexchrate(string $ApihExchRate) Return the first ChildApInvoice filtered by the ApihExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoice filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoice filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOneByDummy(string $dummy) Return the first ChildApInvoice filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoice[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApInvoice objects based on current ModelCriteria
 * @method     ChildApInvoice[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildApInvoice objects filtered by the ApveVendId column
 * @method     ChildApInvoice[]|ObjectCollection findByApihpaytokey(string $ApihPayToKey) Return ChildApInvoice objects filtered by the ApihPayToKey column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptname(string $ApihPtName) Return ChildApInvoice objects filtered by the ApihPtName column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptadr1(string $ApihPtAdr1) Return ChildApInvoice objects filtered by the ApihPtAdr1 column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptadr2(string $ApihPtAdr2) Return ChildApInvoice objects filtered by the ApihPtAdr2 column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptadr3(string $ApihPtAdr3) Return ChildApInvoice objects filtered by the ApihPtAdr3 column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptctry(string $ApihPtCtry) Return ChildApInvoice objects filtered by the ApihPtCtry column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptcity(string $ApihPtCity) Return ChildApInvoice objects filtered by the ApihPtCity column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptstat(string $ApihPtStat) Return ChildApInvoice objects filtered by the ApihPtStat column
 * @method     ChildApInvoice[]|ObjectCollection findByApihptzipcode(string $ApihPtZipCode) Return ChildApInvoice objects filtered by the ApihPtZipCode column
 * @method     ChildApInvoice[]|ObjectCollection findByApihponbr(string $ApihPoNbr) Return ChildApInvoice objects filtered by the ApihPoNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihctrlnbr(string $ApihCtrlNbr) Return ChildApInvoice objects filtered by the ApihCtrlNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihinvnbr(string $ApihInvNbr) Return ChildApInvoice objects filtered by the ApihInvNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihseq(int $ApihSeq) Return ChildApInvoice objects filtered by the ApihSeq column
 * @method     ChildApInvoice[]|ObjectCollection findByApihstat(string $ApihStat) Return ChildApInvoice objects filtered by the ApihStat column
 * @method     ChildApInvoice[]|ObjectCollection findByApihinvdate(string $ApihInvDate) Return ChildApInvoice objects filtered by the ApihInvDate column
 * @method     ChildApInvoice[]|ObjectCollection findByApihdiscdate(string $ApihDiscDate) Return ChildApInvoice objects filtered by the ApihDiscDate column
 * @method     ChildApInvoice[]|ObjectCollection findByApihduedate(string $ApihDueDate) Return ChildApInvoice objects filtered by the ApihDueDate column
 * @method     ChildApInvoice[]|ObjectCollection findByApihtotamt(string $ApihTotAmt) Return ChildApInvoice objects filtered by the ApihTotAmt column
 * @method     ChildApInvoice[]|ObjectCollection findByApihdiscamt(string $ApihDiscAmt) Return ChildApInvoice objects filtered by the ApihDiscAmt column
 * @method     ChildApInvoice[]|ObjectCollection findByApihppchknbr(int $ApihPpChkNbr) Return ChildApInvoice objects filtered by the ApihPpChkNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihglpd(int $ApihGlPd) Return ChildApInvoice objects filtered by the ApihGlPd column
 * @method     ChildApInvoice[]|ObjectCollection findByApihchknbr(int $ApihChkNbr) Return ChildApInvoice objects filtered by the ApihChkNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihchkdate(string $ApihChkDate) Return ChildApInvoice objects filtered by the ApihChkDate column
 * @method     ChildApInvoice[]|ObjectCollection findByApihchkamt(string $ApihChkAmt) Return ChildApInvoice objects filtered by the ApihChkAmt column
 * @method     ChildApInvoice[]|ObjectCollection findByApihchkglacct(string $ApihChkGlAcct) Return ChildApInvoice objects filtered by the ApihChkGlAcct column
 * @method     ChildApInvoice[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildApInvoice objects filtered by the IntbWhse column
 * @method     ChildApInvoice[]|ObjectCollection findByAptmtermcode(string $AptmTermCode) Return ChildApInvoice objects filtered by the AptmTermCode column
 * @method     ChildApInvoice[]|ObjectCollection findByApihvenddisc(string $ApihVendDisc) Return ChildApInvoice objects filtered by the ApihVendDisc column
 * @method     ChildApInvoice[]|ObjectCollection findByApihinvref(string $ApihInvRef) Return ChildApInvoice objects filtered by the ApihInvRef column
 * @method     ChildApInvoice[]|ObjectCollection findByApihcenbeeformatid(string $ApihCenbeeFormatId) Return ChildApInvoice objects filtered by the ApihCenbeeFormatId column
 * @method     ChildApInvoice[]|ObjectCollection findByApihcenbeeponbr(string $ApihCenbeePoNbr) Return ChildApInvoice objects filtered by the ApihCenbeePoNbr column
 * @method     ChildApInvoice[]|ObjectCollection findByApihtakeexpired(string $ApihTakeExpired) Return ChildApInvoice objects filtered by the ApihTakeExpired column
 * @method     ChildApInvoice[]|ObjectCollection findByApihexchctry(string $ApihExchCtry) Return ChildApInvoice objects filtered by the ApihExchCtry column
 * @method     ChildApInvoice[]|ObjectCollection findByApihexchrate(string $ApihExchRate) Return ChildApInvoice objects filtered by the ApihExchRate column
 * @method     ChildApInvoice[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildApInvoice objects filtered by the DateUpdtd column
 * @method     ChildApInvoice[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildApInvoice objects filtered by the TimeUpdtd column
 * @method     ChildApInvoice[]|ObjectCollection findByDummy(string $dummy) Return ChildApInvoice objects filtered by the dummy column
 * @method     ChildApInvoice[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApInvoiceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApInvoiceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApInvoice', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApInvoiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApInvoiceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApInvoiceQuery) {
            return $criteria;
        }
        $query = new ChildApInvoiceQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$ApveVendId, $ApihPayToKey, $ApihPoNbr, $ApihCtrlNbr, $ApihInvNbr, $ApihSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildApInvoice|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApInvoiceTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildApInvoice A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApihPayToKey, ApihPtName, ApihPtAdr1, ApihPtAdr2, ApihPtAdr3, ApihPtCtry, ApihPtCity, ApihPtStat, ApihPtZipCode, ApihPoNbr, ApihCtrlNbr, ApihInvNbr, ApihSeq, ApihStat, ApihInvDate, ApihDiscDate, ApihDueDate, ApihTotAmt, ApihDiscAmt, ApihPpChkNbr, ApihGlPd, ApihChkNbr, ApihChkDate, ApihChkAmt, ApihChkGlAcct, IntbWhse, AptmTermCode, ApihVendDisc, ApihInvRef, ApihCenbeeFormatId, ApihCenbeePoNbr, ApihTakeExpired, ApihExchCtry, ApihExchRate, DateUpdtd, TimeUpdtd, dummy FROM ap_invoice_head WHERE ApveVendId = :p0 AND ApihPayToKey = :p1 AND ApihPoNbr = :p2 AND ApihCtrlNbr = :p3 AND ApihInvNbr = :p4 AND ApihSeq = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildApInvoice $obj */
            $obj = new ChildApInvoice();
            $obj->hydrate($row);
            ApInvoiceTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildApInvoice|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPAYTOKEY, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCTRLNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVNBR, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ApInvoiceTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ApInvoiceTableMap::COL_APIHPAYTOKEY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ApInvoiceTableMap::COL_APIHPONBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ApInvoiceTableMap::COL_APIHCTRLNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ApInvoiceTableMap::COL_APIHINVNBR, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ApInvoiceTableMap::COL_APIHSEQ, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApihPayToKey column
     *
     * Example usage:
     * <code>
     * $query->filterByApihpaytokey('fooValue');   // WHERE ApihPayToKey = 'fooValue'
     * $query->filterByApihpaytokey('%fooValue%', Criteria::LIKE); // WHERE ApihPayToKey LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihpaytokey The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihpaytokey($apihpaytokey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihpaytokey)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPAYTOKEY, $apihpaytokey, $comparison);
    }

    /**
     * Filter the query on the ApihPtName column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptname('fooValue');   // WHERE ApihPtName = 'fooValue'
     * $query->filterByApihptname('%fooValue%', Criteria::LIKE); // WHERE ApihPtName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptname($apihptname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTNAME, $apihptname, $comparison);
    }

    /**
     * Filter the query on the ApihPtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr1('fooValue');   // WHERE ApihPtAdr1 = 'fooValue'
     * $query->filterByApihptadr1('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptadr1($apihptadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR1, $apihptadr1, $comparison);
    }

    /**
     * Filter the query on the ApihPtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr2('fooValue');   // WHERE ApihPtAdr2 = 'fooValue'
     * $query->filterByApihptadr2('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptadr2($apihptadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR2, $apihptadr2, $comparison);
    }

    /**
     * Filter the query on the ApihPtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr3('fooValue');   // WHERE ApihPtAdr3 = 'fooValue'
     * $query->filterByApihptadr3('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptadr3($apihptadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR3, $apihptadr3, $comparison);
    }

    /**
     * Filter the query on the ApihPtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptctry('fooValue');   // WHERE ApihPtCtry = 'fooValue'
     * $query->filterByApihptctry('%fooValue%', Criteria::LIKE); // WHERE ApihPtCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptctry($apihptctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTCTRY, $apihptctry, $comparison);
    }

    /**
     * Filter the query on the ApihPtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptcity('fooValue');   // WHERE ApihPtCity = 'fooValue'
     * $query->filterByApihptcity('%fooValue%', Criteria::LIKE); // WHERE ApihPtCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptcity($apihptcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTCITY, $apihptcity, $comparison);
    }

    /**
     * Filter the query on the ApihPtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptstat('fooValue');   // WHERE ApihPtStat = 'fooValue'
     * $query->filterByApihptstat('%fooValue%', Criteria::LIKE); // WHERE ApihPtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptstat($apihptstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTSTAT, $apihptstat, $comparison);
    }

    /**
     * Filter the query on the ApihPtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptzipcode('fooValue');   // WHERE ApihPtZipCode = 'fooValue'
     * $query->filterByApihptzipcode('%fooValue%', Criteria::LIKE); // WHERE ApihPtZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihptzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihptzipcode($apihptzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTZIPCODE, $apihptzipcode, $comparison);
    }

    /**
     * Filter the query on the ApihPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihponbr('fooValue');   // WHERE ApihPoNbr = 'fooValue'
     * $query->filterByApihponbr('%fooValue%', Criteria::LIKE); // WHERE ApihPoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihponbr($apihponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $apihponbr, $comparison);
    }

    /**
     * Filter the query on the ApihCtrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihctrlnbr('fooValue');   // WHERE ApihCtrlNbr = 'fooValue'
     * $query->filterByApihctrlnbr('%fooValue%', Criteria::LIKE); // WHERE ApihCtrlNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihctrlnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihctrlnbr($apihctrlnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihctrlnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCTRLNBR, $apihctrlnbr, $comparison);
    }

    /**
     * Filter the query on the ApihInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvnbr('fooValue');   // WHERE ApihInvNbr = 'fooValue'
     * $query->filterByApihinvnbr('%fooValue%', Criteria::LIKE); // WHERE ApihInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihinvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihinvnbr($apihinvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVNBR, $apihinvnbr, $comparison);
    }

    /**
     * Filter the query on the ApihSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByApihseq(1234); // WHERE ApihSeq = 1234
     * $query->filterByApihseq(array(12, 34)); // WHERE ApihSeq IN (12, 34)
     * $query->filterByApihseq(array('min' => 12)); // WHERE ApihSeq > 12
     * </code>
     *
     * @param     mixed $apihseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihseq($apihseq = null, $comparison = null)
    {
        if (is_array($apihseq)) {
            $useMinMax = false;
            if (isset($apihseq['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apihseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihseq['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apihseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apihseq, $comparison);
    }

    /**
     * Filter the query on the ApihStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApihstat('fooValue');   // WHERE ApihStat = 'fooValue'
     * $query->filterByApihstat('%fooValue%', Criteria::LIKE); // WHERE ApihStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihstat($apihstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSTAT, $apihstat, $comparison);
    }

    /**
     * Filter the query on the ApihInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvdate('fooValue');   // WHERE ApihInvDate = 'fooValue'
     * $query->filterByApihinvdate('%fooValue%', Criteria::LIKE); // WHERE ApihInvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihinvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihinvdate($apihinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVDATE, $apihinvdate, $comparison);
    }

    /**
     * Filter the query on the ApihDiscDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihdiscdate('fooValue');   // WHERE ApihDiscDate = 'fooValue'
     * $query->filterByApihdiscdate('%fooValue%', Criteria::LIKE); // WHERE ApihDiscDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihdiscdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihdiscdate($apihdiscdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihdiscdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCDATE, $apihdiscdate, $comparison);
    }

    /**
     * Filter the query on the ApihDueDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihduedate('fooValue');   // WHERE ApihDueDate = 'fooValue'
     * $query->filterByApihduedate('%fooValue%', Criteria::LIKE); // WHERE ApihDueDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihduedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihduedate($apihduedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihduedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDUEDATE, $apihduedate, $comparison);
    }

    /**
     * Filter the query on the ApihTotAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApihtotamt(1234); // WHERE ApihTotAmt = 1234
     * $query->filterByApihtotamt(array(12, 34)); // WHERE ApihTotAmt IN (12, 34)
     * $query->filterByApihtotamt(array('min' => 12)); // WHERE ApihTotAmt > 12
     * </code>
     *
     * @param     mixed $apihtotamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihtotamt($apihtotamt = null, $comparison = null)
    {
        if (is_array($apihtotamt)) {
            $useMinMax = false;
            if (isset($apihtotamt['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTOTAMT, $apihtotamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihtotamt['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTOTAMT, $apihtotamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTOTAMT, $apihtotamt, $comparison);
    }

    /**
     * Filter the query on the ApihDiscAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApihdiscamt(1234); // WHERE ApihDiscAmt = 1234
     * $query->filterByApihdiscamt(array(12, 34)); // WHERE ApihDiscAmt IN (12, 34)
     * $query->filterByApihdiscamt(array('min' => 12)); // WHERE ApihDiscAmt > 12
     * </code>
     *
     * @param     mixed $apihdiscamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihdiscamt($apihdiscamt = null, $comparison = null)
    {
        if (is_array($apihdiscamt)) {
            $useMinMax = false;
            if (isset($apihdiscamt['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCAMT, $apihdiscamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihdiscamt['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCAMT, $apihdiscamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCAMT, $apihdiscamt, $comparison);
    }

    /**
     * Filter the query on the ApihPpChkNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihppchknbr(1234); // WHERE ApihPpChkNbr = 1234
     * $query->filterByApihppchknbr(array(12, 34)); // WHERE ApihPpChkNbr IN (12, 34)
     * $query->filterByApihppchknbr(array('min' => 12)); // WHERE ApihPpChkNbr > 12
     * </code>
     *
     * @param     mixed $apihppchknbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihppchknbr($apihppchknbr = null, $comparison = null)
    {
        if (is_array($apihppchknbr)) {
            $useMinMax = false;
            if (isset($apihppchknbr['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPPCHKNBR, $apihppchknbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihppchknbr['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPPCHKNBR, $apihppchknbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPPCHKNBR, $apihppchknbr, $comparison);
    }

    /**
     * Filter the query on the ApihGlPd column
     *
     * Example usage:
     * <code>
     * $query->filterByApihglpd(1234); // WHERE ApihGlPd = 1234
     * $query->filterByApihglpd(array(12, 34)); // WHERE ApihGlPd IN (12, 34)
     * $query->filterByApihglpd(array('min' => 12)); // WHERE ApihGlPd > 12
     * </code>
     *
     * @param     mixed $apihglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihglpd($apihglpd = null, $comparison = null)
    {
        if (is_array($apihglpd)) {
            $useMinMax = false;
            if (isset($apihglpd['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHGLPD, $apihglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihglpd['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHGLPD, $apihglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHGLPD, $apihglpd, $comparison);
    }

    /**
     * Filter the query on the ApihChkNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchknbr(1234); // WHERE ApihChkNbr = 1234
     * $query->filterByApihchknbr(array(12, 34)); // WHERE ApihChkNbr IN (12, 34)
     * $query->filterByApihchknbr(array('min' => 12)); // WHERE ApihChkNbr > 12
     * </code>
     *
     * @param     mixed $apihchknbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihchknbr($apihchknbr = null, $comparison = null)
    {
        if (is_array($apihchknbr)) {
            $useMinMax = false;
            if (isset($apihchknbr['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKNBR, $apihchknbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihchknbr['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKNBR, $apihchknbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKNBR, $apihchknbr, $comparison);
    }

    /**
     * Filter the query on the ApihChkDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchkdate('fooValue');   // WHERE ApihChkDate = 'fooValue'
     * $query->filterByApihchkdate('%fooValue%', Criteria::LIKE); // WHERE ApihChkDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihchkdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihchkdate($apihchkdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihchkdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKDATE, $apihchkdate, $comparison);
    }

    /**
     * Filter the query on the ApihChkAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchkamt(1234); // WHERE ApihChkAmt = 1234
     * $query->filterByApihchkamt(array(12, 34)); // WHERE ApihChkAmt IN (12, 34)
     * $query->filterByApihchkamt(array('min' => 12)); // WHERE ApihChkAmt > 12
     * </code>
     *
     * @param     mixed $apihchkamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihchkamt($apihchkamt = null, $comparison = null)
    {
        if (is_array($apihchkamt)) {
            $useMinMax = false;
            if (isset($apihchkamt['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKAMT, $apihchkamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihchkamt['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKAMT, $apihchkamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKAMT, $apihchkamt, $comparison);
    }

    /**
     * Filter the query on the ApihChkGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchkglacct('fooValue');   // WHERE ApihChkGlAcct = 'fooValue'
     * $query->filterByApihchkglacct('%fooValue%', Criteria::LIKE); // WHERE ApihChkGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihchkglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihchkglacct($apihchkglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihchkglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKGLACCT, $apihchkglacct, $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByAptmtermcode($aptmtermcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APTMTERMCODE, $aptmtermcode, $comparison);
    }

    /**
     * Filter the query on the ApihVendDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByApihvenddisc(1234); // WHERE ApihVendDisc = 1234
     * $query->filterByApihvenddisc(array(12, 34)); // WHERE ApihVendDisc IN (12, 34)
     * $query->filterByApihvenddisc(array('min' => 12)); // WHERE ApihVendDisc > 12
     * </code>
     *
     * @param     mixed $apihvenddisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihvenddisc($apihvenddisc = null, $comparison = null)
    {
        if (is_array($apihvenddisc)) {
            $useMinMax = false;
            if (isset($apihvenddisc['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHVENDDISC, $apihvenddisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihvenddisc['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHVENDDISC, $apihvenddisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHVENDDISC, $apihvenddisc, $comparison);
    }

    /**
     * Filter the query on the ApihInvRef column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvref('fooValue');   // WHERE ApihInvRef = 'fooValue'
     * $query->filterByApihinvref('%fooValue%', Criteria::LIKE); // WHERE ApihInvRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihinvref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihinvref($apihinvref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVREF, $apihinvref, $comparison);
    }

    /**
     * Filter the query on the ApihCenbeeFormatId column
     *
     * Example usage:
     * <code>
     * $query->filterByApihcenbeeformatid('fooValue');   // WHERE ApihCenbeeFormatId = 'fooValue'
     * $query->filterByApihcenbeeformatid('%fooValue%', Criteria::LIKE); // WHERE ApihCenbeeFormatId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihcenbeeformatid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihcenbeeformatid($apihcenbeeformatid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihcenbeeformatid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCENBEEFORMATID, $apihcenbeeformatid, $comparison);
    }

    /**
     * Filter the query on the ApihCenbeePoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihcenbeeponbr('fooValue');   // WHERE ApihCenbeePoNbr = 'fooValue'
     * $query->filterByApihcenbeeponbr('%fooValue%', Criteria::LIKE); // WHERE ApihCenbeePoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihcenbeeponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihcenbeeponbr($apihcenbeeponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihcenbeeponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCENBEEPONBR, $apihcenbeeponbr, $comparison);
    }

    /**
     * Filter the query on the ApihTakeExpired column
     *
     * Example usage:
     * <code>
     * $query->filterByApihtakeexpired('fooValue');   // WHERE ApihTakeExpired = 'fooValue'
     * $query->filterByApihtakeexpired('%fooValue%', Criteria::LIKE); // WHERE ApihTakeExpired LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihtakeexpired The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihtakeexpired($apihtakeexpired = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihtakeexpired)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTAKEEXPIRED, $apihtakeexpired, $comparison);
    }

    /**
     * Filter the query on the ApihExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApihexchctry('fooValue');   // WHERE ApihExchCtry = 'fooValue'
     * $query->filterByApihexchctry('%fooValue%', Criteria::LIKE); // WHERE ApihExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apihexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihexchctry($apihexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHCTRY, $apihexchctry, $comparison);
    }

    /**
     * Filter the query on the ApihExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihexchrate(1234); // WHERE ApihExchRate = 1234
     * $query->filterByApihexchrate(array(12, 34)); // WHERE ApihExchRate IN (12, 34)
     * $query->filterByApihexchrate(array('min' => 12)); // WHERE ApihExchRate > 12
     * </code>
     *
     * @param     mixed $apihexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApihexchrate($apihexchrate = null, $comparison = null)
    {
        if (is_array($apihexchrate)) {
            $useMinMax = false;
            if (isset($apihexchrate['min'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHRATE, $apihexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apihexchrate['max'])) {
                $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHRATE, $apihexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHRATE, $apihexchrate, $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
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
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);
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
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', '\PurchaseOrderQuery');
    }

    /**
     * Filter the query by a related \ApInvoiceDetail object
     *
     * @param \ApInvoiceDetail|ObjectCollection $apInvoiceDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildApInvoiceQuery The current query, for fluid interface
     */
    public function filterByApInvoiceDetail($apInvoiceDetail, $comparison = null)
    {
        if ($apInvoiceDetail instanceof \ApInvoiceDetail) {
            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHINVNBR, $apInvoiceDetail->getApidinvnbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $apInvoiceDetail->getApvevendid(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPAYTOKEY, $apInvoiceDetail->getApidpaytokey(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $apInvoiceDetail->getApidponbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHCTRLNBR, $apInvoiceDetail->getApidctrlnbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apInvoiceDetail->getApidseq(), $comparison);
        } else {
            throw new PropelException('filterByApInvoiceDetail() only accepts arguments of type \ApInvoiceDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ApInvoiceDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function joinApInvoiceDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ApInvoiceDetail');

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
            $this->addJoinObject($join, 'ApInvoiceDetail');
        }

        return $this;
    }

    /**
     * Use the ApInvoiceDetail relation ApInvoiceDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ApInvoiceDetailQuery A secondary query class using the current class as primary query
     */
    public function useApInvoiceDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinApInvoiceDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ApInvoiceDetail', '\ApInvoiceDetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildApInvoice $apInvoice Object to remove from the list of results
     *
     * @return $this|ChildApInvoiceQuery The current query, for fluid interface
     */
    public function prune($apInvoice = null)
    {
        if ($apInvoice) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ApInvoiceTableMap::COL_APVEVENDID), $apInvoice->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ApInvoiceTableMap::COL_APIHPAYTOKEY), $apInvoice->getApihpaytokey(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ApInvoiceTableMap::COL_APIHPONBR), $apInvoice->getApihponbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ApInvoiceTableMap::COL_APIHCTRLNBR), $apInvoice->getApihctrlnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ApInvoiceTableMap::COL_APIHINVNBR), $apInvoice->getApihinvnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ApInvoiceTableMap::COL_APIHSEQ), $apInvoice->getApihseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_invoice_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApInvoiceTableMap::clearInstancePool();
            ApInvoiceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApInvoiceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApInvoiceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApInvoiceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApInvoiceQuery
