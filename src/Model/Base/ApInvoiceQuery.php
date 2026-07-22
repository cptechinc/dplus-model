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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ap_invoice_head` table.
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
 * @method     ChildApInvoice|null findOne(?ConnectionInterface $con = null) Return the first ChildApInvoice matching the query
 * @method     ChildApInvoice findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildApInvoice matching the query, or a new ChildApInvoice object populated from the query conditions when no match is found
 *
 * @method     ChildApInvoice|null findOneByApvevendid(string $ApveVendId) Return the first ChildApInvoice filtered by the ApveVendId column
 * @method     ChildApInvoice|null findOneByApihpaytokey(string $ApihPayToKey) Return the first ChildApInvoice filtered by the ApihPayToKey column
 * @method     ChildApInvoice|null findOneByApihptname(string $ApihPtName) Return the first ChildApInvoice filtered by the ApihPtName column
 * @method     ChildApInvoice|null findOneByApihptadr1(string $ApihPtAdr1) Return the first ChildApInvoice filtered by the ApihPtAdr1 column
 * @method     ChildApInvoice|null findOneByApihptadr2(string $ApihPtAdr2) Return the first ChildApInvoice filtered by the ApihPtAdr2 column
 * @method     ChildApInvoice|null findOneByApihptadr3(string $ApihPtAdr3) Return the first ChildApInvoice filtered by the ApihPtAdr3 column
 * @method     ChildApInvoice|null findOneByApihptctry(string $ApihPtCtry) Return the first ChildApInvoice filtered by the ApihPtCtry column
 * @method     ChildApInvoice|null findOneByApihptcity(string $ApihPtCity) Return the first ChildApInvoice filtered by the ApihPtCity column
 * @method     ChildApInvoice|null findOneByApihptstat(string $ApihPtStat) Return the first ChildApInvoice filtered by the ApihPtStat column
 * @method     ChildApInvoice|null findOneByApihptzipcode(string $ApihPtZipCode) Return the first ChildApInvoice filtered by the ApihPtZipCode column
 * @method     ChildApInvoice|null findOneByApihponbr(string $ApihPoNbr) Return the first ChildApInvoice filtered by the ApihPoNbr column
 * @method     ChildApInvoice|null findOneByApihctrlnbr(string $ApihCtrlNbr) Return the first ChildApInvoice filtered by the ApihCtrlNbr column
 * @method     ChildApInvoice|null findOneByApihinvnbr(string $ApihInvNbr) Return the first ChildApInvoice filtered by the ApihInvNbr column
 * @method     ChildApInvoice|null findOneByApihseq(int $ApihSeq) Return the first ChildApInvoice filtered by the ApihSeq column
 * @method     ChildApInvoice|null findOneByApihstat(string $ApihStat) Return the first ChildApInvoice filtered by the ApihStat column
 * @method     ChildApInvoice|null findOneByApihinvdate(string $ApihInvDate) Return the first ChildApInvoice filtered by the ApihInvDate column
 * @method     ChildApInvoice|null findOneByApihdiscdate(string $ApihDiscDate) Return the first ChildApInvoice filtered by the ApihDiscDate column
 * @method     ChildApInvoice|null findOneByApihduedate(string $ApihDueDate) Return the first ChildApInvoice filtered by the ApihDueDate column
 * @method     ChildApInvoice|null findOneByApihtotamt(string $ApihTotAmt) Return the first ChildApInvoice filtered by the ApihTotAmt column
 * @method     ChildApInvoice|null findOneByApihdiscamt(string $ApihDiscAmt) Return the first ChildApInvoice filtered by the ApihDiscAmt column
 * @method     ChildApInvoice|null findOneByApihppchknbr(int $ApihPpChkNbr) Return the first ChildApInvoice filtered by the ApihPpChkNbr column
 * @method     ChildApInvoice|null findOneByApihglpd(int $ApihGlPd) Return the first ChildApInvoice filtered by the ApihGlPd column
 * @method     ChildApInvoice|null findOneByApihchknbr(int $ApihChkNbr) Return the first ChildApInvoice filtered by the ApihChkNbr column
 * @method     ChildApInvoice|null findOneByApihchkdate(string $ApihChkDate) Return the first ChildApInvoice filtered by the ApihChkDate column
 * @method     ChildApInvoice|null findOneByApihchkamt(string $ApihChkAmt) Return the first ChildApInvoice filtered by the ApihChkAmt column
 * @method     ChildApInvoice|null findOneByApihchkglacct(string $ApihChkGlAcct) Return the first ChildApInvoice filtered by the ApihChkGlAcct column
 * @method     ChildApInvoice|null findOneByIntbwhse(string $IntbWhse) Return the first ChildApInvoice filtered by the IntbWhse column
 * @method     ChildApInvoice|null findOneByAptmtermcode(string $AptmTermCode) Return the first ChildApInvoice filtered by the AptmTermCode column
 * @method     ChildApInvoice|null findOneByApihvenddisc(string $ApihVendDisc) Return the first ChildApInvoice filtered by the ApihVendDisc column
 * @method     ChildApInvoice|null findOneByApihinvref(string $ApihInvRef) Return the first ChildApInvoice filtered by the ApihInvRef column
 * @method     ChildApInvoice|null findOneByApihcenbeeformatid(string $ApihCenbeeFormatId) Return the first ChildApInvoice filtered by the ApihCenbeeFormatId column
 * @method     ChildApInvoice|null findOneByApihcenbeeponbr(string $ApihCenbeePoNbr) Return the first ChildApInvoice filtered by the ApihCenbeePoNbr column
 * @method     ChildApInvoice|null findOneByApihtakeexpired(string $ApihTakeExpired) Return the first ChildApInvoice filtered by the ApihTakeExpired column
 * @method     ChildApInvoice|null findOneByApihexchctry(string $ApihExchCtry) Return the first ChildApInvoice filtered by the ApihExchCtry column
 * @method     ChildApInvoice|null findOneByApihexchrate(string $ApihExchRate) Return the first ChildApInvoice filtered by the ApihExchRate column
 * @method     ChildApInvoice|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoice filtered by the DateUpdtd column
 * @method     ChildApInvoice|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoice filtered by the TimeUpdtd column
 * @method     ChildApInvoice|null findOneByDummy(string $dummy) Return the first ChildApInvoice filtered by the dummy column
 *
 * @method     ChildApInvoice requirePk($key, ?ConnectionInterface $con = null) Return the ChildApInvoice by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoice requireOne(?ConnectionInterface $con = null) Return the first ChildApInvoice matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildApInvoice[]|Collection find(?ConnectionInterface $con = null) Return ChildApInvoice objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildApInvoice> find(?ConnectionInterface $con = null) Return ChildApInvoice objects based on current ModelCriteria
 *
 * @method     ChildApInvoice[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildApInvoice objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApvevendid(string|array<string> $ApveVendId) Return ChildApInvoice objects filtered by the ApveVendId column
 * @method     ChildApInvoice[]|Collection findByApihpaytokey(string|array<string> $ApihPayToKey) Return ChildApInvoice objects filtered by the ApihPayToKey column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihpaytokey(string|array<string> $ApihPayToKey) Return ChildApInvoice objects filtered by the ApihPayToKey column
 * @method     ChildApInvoice[]|Collection findByApihptname(string|array<string> $ApihPtName) Return ChildApInvoice objects filtered by the ApihPtName column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptname(string|array<string> $ApihPtName) Return ChildApInvoice objects filtered by the ApihPtName column
 * @method     ChildApInvoice[]|Collection findByApihptadr1(string|array<string> $ApihPtAdr1) Return ChildApInvoice objects filtered by the ApihPtAdr1 column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptadr1(string|array<string> $ApihPtAdr1) Return ChildApInvoice objects filtered by the ApihPtAdr1 column
 * @method     ChildApInvoice[]|Collection findByApihptadr2(string|array<string> $ApihPtAdr2) Return ChildApInvoice objects filtered by the ApihPtAdr2 column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptadr2(string|array<string> $ApihPtAdr2) Return ChildApInvoice objects filtered by the ApihPtAdr2 column
 * @method     ChildApInvoice[]|Collection findByApihptadr3(string|array<string> $ApihPtAdr3) Return ChildApInvoice objects filtered by the ApihPtAdr3 column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptadr3(string|array<string> $ApihPtAdr3) Return ChildApInvoice objects filtered by the ApihPtAdr3 column
 * @method     ChildApInvoice[]|Collection findByApihptctry(string|array<string> $ApihPtCtry) Return ChildApInvoice objects filtered by the ApihPtCtry column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptctry(string|array<string> $ApihPtCtry) Return ChildApInvoice objects filtered by the ApihPtCtry column
 * @method     ChildApInvoice[]|Collection findByApihptcity(string|array<string> $ApihPtCity) Return ChildApInvoice objects filtered by the ApihPtCity column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptcity(string|array<string> $ApihPtCity) Return ChildApInvoice objects filtered by the ApihPtCity column
 * @method     ChildApInvoice[]|Collection findByApihptstat(string|array<string> $ApihPtStat) Return ChildApInvoice objects filtered by the ApihPtStat column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptstat(string|array<string> $ApihPtStat) Return ChildApInvoice objects filtered by the ApihPtStat column
 * @method     ChildApInvoice[]|Collection findByApihptzipcode(string|array<string> $ApihPtZipCode) Return ChildApInvoice objects filtered by the ApihPtZipCode column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihptzipcode(string|array<string> $ApihPtZipCode) Return ChildApInvoice objects filtered by the ApihPtZipCode column
 * @method     ChildApInvoice[]|Collection findByApihponbr(string|array<string> $ApihPoNbr) Return ChildApInvoice objects filtered by the ApihPoNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihponbr(string|array<string> $ApihPoNbr) Return ChildApInvoice objects filtered by the ApihPoNbr column
 * @method     ChildApInvoice[]|Collection findByApihctrlnbr(string|array<string> $ApihCtrlNbr) Return ChildApInvoice objects filtered by the ApihCtrlNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihctrlnbr(string|array<string> $ApihCtrlNbr) Return ChildApInvoice objects filtered by the ApihCtrlNbr column
 * @method     ChildApInvoice[]|Collection findByApihinvnbr(string|array<string> $ApihInvNbr) Return ChildApInvoice objects filtered by the ApihInvNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihinvnbr(string|array<string> $ApihInvNbr) Return ChildApInvoice objects filtered by the ApihInvNbr column
 * @method     ChildApInvoice[]|Collection findByApihseq(int|array<int> $ApihSeq) Return ChildApInvoice objects filtered by the ApihSeq column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihseq(int|array<int> $ApihSeq) Return ChildApInvoice objects filtered by the ApihSeq column
 * @method     ChildApInvoice[]|Collection findByApihstat(string|array<string> $ApihStat) Return ChildApInvoice objects filtered by the ApihStat column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihstat(string|array<string> $ApihStat) Return ChildApInvoice objects filtered by the ApihStat column
 * @method     ChildApInvoice[]|Collection findByApihinvdate(string|array<string> $ApihInvDate) Return ChildApInvoice objects filtered by the ApihInvDate column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihinvdate(string|array<string> $ApihInvDate) Return ChildApInvoice objects filtered by the ApihInvDate column
 * @method     ChildApInvoice[]|Collection findByApihdiscdate(string|array<string> $ApihDiscDate) Return ChildApInvoice objects filtered by the ApihDiscDate column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihdiscdate(string|array<string> $ApihDiscDate) Return ChildApInvoice objects filtered by the ApihDiscDate column
 * @method     ChildApInvoice[]|Collection findByApihduedate(string|array<string> $ApihDueDate) Return ChildApInvoice objects filtered by the ApihDueDate column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihduedate(string|array<string> $ApihDueDate) Return ChildApInvoice objects filtered by the ApihDueDate column
 * @method     ChildApInvoice[]|Collection findByApihtotamt(string|array<string> $ApihTotAmt) Return ChildApInvoice objects filtered by the ApihTotAmt column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihtotamt(string|array<string> $ApihTotAmt) Return ChildApInvoice objects filtered by the ApihTotAmt column
 * @method     ChildApInvoice[]|Collection findByApihdiscamt(string|array<string> $ApihDiscAmt) Return ChildApInvoice objects filtered by the ApihDiscAmt column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihdiscamt(string|array<string> $ApihDiscAmt) Return ChildApInvoice objects filtered by the ApihDiscAmt column
 * @method     ChildApInvoice[]|Collection findByApihppchknbr(int|array<int> $ApihPpChkNbr) Return ChildApInvoice objects filtered by the ApihPpChkNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihppchknbr(int|array<int> $ApihPpChkNbr) Return ChildApInvoice objects filtered by the ApihPpChkNbr column
 * @method     ChildApInvoice[]|Collection findByApihglpd(int|array<int> $ApihGlPd) Return ChildApInvoice objects filtered by the ApihGlPd column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihglpd(int|array<int> $ApihGlPd) Return ChildApInvoice objects filtered by the ApihGlPd column
 * @method     ChildApInvoice[]|Collection findByApihchknbr(int|array<int> $ApihChkNbr) Return ChildApInvoice objects filtered by the ApihChkNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihchknbr(int|array<int> $ApihChkNbr) Return ChildApInvoice objects filtered by the ApihChkNbr column
 * @method     ChildApInvoice[]|Collection findByApihchkdate(string|array<string> $ApihChkDate) Return ChildApInvoice objects filtered by the ApihChkDate column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihchkdate(string|array<string> $ApihChkDate) Return ChildApInvoice objects filtered by the ApihChkDate column
 * @method     ChildApInvoice[]|Collection findByApihchkamt(string|array<string> $ApihChkAmt) Return ChildApInvoice objects filtered by the ApihChkAmt column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihchkamt(string|array<string> $ApihChkAmt) Return ChildApInvoice objects filtered by the ApihChkAmt column
 * @method     ChildApInvoice[]|Collection findByApihchkglacct(string|array<string> $ApihChkGlAcct) Return ChildApInvoice objects filtered by the ApihChkGlAcct column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihchkglacct(string|array<string> $ApihChkGlAcct) Return ChildApInvoice objects filtered by the ApihChkGlAcct column
 * @method     ChildApInvoice[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildApInvoice objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByIntbwhse(string|array<string> $IntbWhse) Return ChildApInvoice objects filtered by the IntbWhse column
 * @method     ChildApInvoice[]|Collection findByAptmtermcode(string|array<string> $AptmTermCode) Return ChildApInvoice objects filtered by the AptmTermCode column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByAptmtermcode(string|array<string> $AptmTermCode) Return ChildApInvoice objects filtered by the AptmTermCode column
 * @method     ChildApInvoice[]|Collection findByApihvenddisc(string|array<string> $ApihVendDisc) Return ChildApInvoice objects filtered by the ApihVendDisc column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihvenddisc(string|array<string> $ApihVendDisc) Return ChildApInvoice objects filtered by the ApihVendDisc column
 * @method     ChildApInvoice[]|Collection findByApihinvref(string|array<string> $ApihInvRef) Return ChildApInvoice objects filtered by the ApihInvRef column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihinvref(string|array<string> $ApihInvRef) Return ChildApInvoice objects filtered by the ApihInvRef column
 * @method     ChildApInvoice[]|Collection findByApihcenbeeformatid(string|array<string> $ApihCenbeeFormatId) Return ChildApInvoice objects filtered by the ApihCenbeeFormatId column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihcenbeeformatid(string|array<string> $ApihCenbeeFormatId) Return ChildApInvoice objects filtered by the ApihCenbeeFormatId column
 * @method     ChildApInvoice[]|Collection findByApihcenbeeponbr(string|array<string> $ApihCenbeePoNbr) Return ChildApInvoice objects filtered by the ApihCenbeePoNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihcenbeeponbr(string|array<string> $ApihCenbeePoNbr) Return ChildApInvoice objects filtered by the ApihCenbeePoNbr column
 * @method     ChildApInvoice[]|Collection findByApihtakeexpired(string|array<string> $ApihTakeExpired) Return ChildApInvoice objects filtered by the ApihTakeExpired column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihtakeexpired(string|array<string> $ApihTakeExpired) Return ChildApInvoice objects filtered by the ApihTakeExpired column
 * @method     ChildApInvoice[]|Collection findByApihexchctry(string|array<string> $ApihExchCtry) Return ChildApInvoice objects filtered by the ApihExchCtry column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihexchctry(string|array<string> $ApihExchCtry) Return ChildApInvoice objects filtered by the ApihExchCtry column
 * @method     ChildApInvoice[]|Collection findByApihexchrate(string|array<string> $ApihExchRate) Return ChildApInvoice objects filtered by the ApihExchRate column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByApihexchrate(string|array<string> $ApihExchRate) Return ChildApInvoice objects filtered by the ApihExchRate column
 * @method     ChildApInvoice[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApInvoice objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApInvoice objects filtered by the DateUpdtd column
 * @method     ChildApInvoice[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApInvoice objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApInvoice objects filtered by the TimeUpdtd column
 * @method     ChildApInvoice[]|Collection findByDummy(string|array<string> $dummy) Return ChildApInvoice objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildApInvoice> findByDummy(string|array<string> $dummy) Return ChildApInvoice objects filtered by the dummy column
 *
 * @method     ChildApInvoice[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildApInvoice> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ApInvoiceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApInvoiceQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApInvoice', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApInvoiceQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApInvoiceQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPayToKey column
     *
     * Example usage:
     * <code>
     * $query->filterByApihpaytokey('fooValue');   // WHERE ApihPayToKey = 'fooValue'
     * $query->filterByApihpaytokey('%fooValue%', Criteria::LIKE); // WHERE ApihPayToKey LIKE '%fooValue%'
     * $query->filterByApihpaytokey(['foo', 'bar']); // WHERE ApihPayToKey IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihpaytokey The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihpaytokey($apihpaytokey = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihpaytokey)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPAYTOKEY, $apihpaytokey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtName column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptname('fooValue');   // WHERE ApihPtName = 'fooValue'
     * $query->filterByApihptname('%fooValue%', Criteria::LIKE); // WHERE ApihPtName LIKE '%fooValue%'
     * $query->filterByApihptname(['foo', 'bar']); // WHERE ApihPtName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptname($apihptname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTNAME, $apihptname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr1('fooValue');   // WHERE ApihPtAdr1 = 'fooValue'
     * $query->filterByApihptadr1('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr1 LIKE '%fooValue%'
     * $query->filterByApihptadr1(['foo', 'bar']); // WHERE ApihPtAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptadr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptadr1($apihptadr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR1, $apihptadr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr2('fooValue');   // WHERE ApihPtAdr2 = 'fooValue'
     * $query->filterByApihptadr2('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr2 LIKE '%fooValue%'
     * $query->filterByApihptadr2(['foo', 'bar']); // WHERE ApihPtAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptadr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptadr2($apihptadr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR2, $apihptadr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptadr3('fooValue');   // WHERE ApihPtAdr3 = 'fooValue'
     * $query->filterByApihptadr3('%fooValue%', Criteria::LIKE); // WHERE ApihPtAdr3 LIKE '%fooValue%'
     * $query->filterByApihptadr3(['foo', 'bar']); // WHERE ApihPtAdr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptadr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptadr3($apihptadr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptadr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTADR3, $apihptadr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptctry('fooValue');   // WHERE ApihPtCtry = 'fooValue'
     * $query->filterByApihptctry('%fooValue%', Criteria::LIKE); // WHERE ApihPtCtry LIKE '%fooValue%'
     * $query->filterByApihptctry(['foo', 'bar']); // WHERE ApihPtCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptctry($apihptctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTCTRY, $apihptctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptcity('fooValue');   // WHERE ApihPtCity = 'fooValue'
     * $query->filterByApihptcity('%fooValue%', Criteria::LIKE); // WHERE ApihPtCity LIKE '%fooValue%'
     * $query->filterByApihptcity(['foo', 'bar']); // WHERE ApihPtCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptcity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptcity($apihptcity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptcity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTCITY, $apihptcity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptstat('fooValue');   // WHERE ApihPtStat = 'fooValue'
     * $query->filterByApihptstat('%fooValue%', Criteria::LIKE); // WHERE ApihPtStat LIKE '%fooValue%'
     * $query->filterByApihptstat(['foo', 'bar']); // WHERE ApihPtStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptstat($apihptstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTSTAT, $apihptstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApihptzipcode('fooValue');   // WHERE ApihPtZipCode = 'fooValue'
     * $query->filterByApihptzipcode('%fooValue%', Criteria::LIKE); // WHERE ApihPtZipCode LIKE '%fooValue%'
     * $query->filterByApihptzipcode(['foo', 'bar']); // WHERE ApihPtZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihptzipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihptzipcode($apihptzipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihptzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPTZIPCODE, $apihptzipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihponbr('fooValue');   // WHERE ApihPoNbr = 'fooValue'
     * $query->filterByApihponbr('%fooValue%', Criteria::LIKE); // WHERE ApihPoNbr LIKE '%fooValue%'
     * $query->filterByApihponbr(['foo', 'bar']); // WHERE ApihPoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihponbr($apihponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $apihponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihCtrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihctrlnbr('fooValue');   // WHERE ApihCtrlNbr = 'fooValue'
     * $query->filterByApihctrlnbr('%fooValue%', Criteria::LIKE); // WHERE ApihCtrlNbr LIKE '%fooValue%'
     * $query->filterByApihctrlnbr(['foo', 'bar']); // WHERE ApihCtrlNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihctrlnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihctrlnbr($apihctrlnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihctrlnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCTRLNBR, $apihctrlnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvnbr('fooValue');   // WHERE ApihInvNbr = 'fooValue'
     * $query->filterByApihinvnbr('%fooValue%', Criteria::LIKE); // WHERE ApihInvNbr LIKE '%fooValue%'
     * $query->filterByApihinvnbr(['foo', 'bar']); // WHERE ApihInvNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihinvnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihinvnbr($apihinvnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVNBR, $apihinvnbr, $comparison);

        return $this;
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
     * @param mixed $apihseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihseq($apihseq = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apihseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApihstat('fooValue');   // WHERE ApihStat = 'fooValue'
     * $query->filterByApihstat('%fooValue%', Criteria::LIKE); // WHERE ApihStat LIKE '%fooValue%'
     * $query->filterByApihstat(['foo', 'bar']); // WHERE ApihStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihstat($apihstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHSTAT, $apihstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvdate('fooValue');   // WHERE ApihInvDate = 'fooValue'
     * $query->filterByApihinvdate('%fooValue%', Criteria::LIKE); // WHERE ApihInvDate LIKE '%fooValue%'
     * $query->filterByApihinvdate(['foo', 'bar']); // WHERE ApihInvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihinvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihinvdate($apihinvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVDATE, $apihinvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihDiscDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihdiscdate('fooValue');   // WHERE ApihDiscDate = 'fooValue'
     * $query->filterByApihdiscdate('%fooValue%', Criteria::LIKE); // WHERE ApihDiscDate LIKE '%fooValue%'
     * $query->filterByApihdiscdate(['foo', 'bar']); // WHERE ApihDiscDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihdiscdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihdiscdate($apihdiscdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihdiscdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCDATE, $apihdiscdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihDueDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihduedate('fooValue');   // WHERE ApihDueDate = 'fooValue'
     * $query->filterByApihduedate('%fooValue%', Criteria::LIKE); // WHERE ApihDueDate LIKE '%fooValue%'
     * $query->filterByApihduedate(['foo', 'bar']); // WHERE ApihDueDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihduedate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihduedate($apihduedate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihduedate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDUEDATE, $apihduedate, $comparison);

        return $this;
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
     * @param mixed $apihtotamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihtotamt($apihtotamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTOTAMT, $apihtotamt, $comparison);

        return $this;
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
     * @param mixed $apihdiscamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihdiscamt($apihdiscamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHDISCAMT, $apihdiscamt, $comparison);

        return $this;
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
     * @param mixed $apihppchknbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihppchknbr($apihppchknbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHPPCHKNBR, $apihppchknbr, $comparison);

        return $this;
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
     * @param mixed $apihglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihglpd($apihglpd = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHGLPD, $apihglpd, $comparison);

        return $this;
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
     * @param mixed $apihchknbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihchknbr($apihchknbr = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKNBR, $apihchknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihChkDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchkdate('fooValue');   // WHERE ApihChkDate = 'fooValue'
     * $query->filterByApihchkdate('%fooValue%', Criteria::LIKE); // WHERE ApihChkDate LIKE '%fooValue%'
     * $query->filterByApihchkdate(['foo', 'bar']); // WHERE ApihChkDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihchkdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihchkdate($apihchkdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihchkdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKDATE, $apihchkdate, $comparison);

        return $this;
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
     * @param mixed $apihchkamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihchkamt($apihchkamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKAMT, $apihchkamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihChkGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApihchkglacct('fooValue');   // WHERE ApihChkGlAcct = 'fooValue'
     * $query->filterByApihchkglacct('%fooValue%', Criteria::LIKE); // WHERE ApihChkGlAcct LIKE '%fooValue%'
     * $query->filterByApihchkglacct(['foo', 'bar']); // WHERE ApihChkGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihchkglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihchkglacct($apihchkglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihchkglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCHKGLACCT, $apihchkglacct, $comparison);

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

        $this->addUsingAlias(ApInvoiceTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmtermcode('fooValue');   // WHERE AptmTermCode = 'fooValue'
     * $query->filterByAptmtermcode('%fooValue%', Criteria::LIKE); // WHERE AptmTermCode LIKE '%fooValue%'
     * $query->filterByAptmtermcode(['foo', 'bar']); // WHERE AptmTermCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmtermcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmtermcode($aptmtermcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APTMTERMCODE, $aptmtermcode, $comparison);

        return $this;
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
     * @param mixed $apihvenddisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihvenddisc($apihvenddisc = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHVENDDISC, $apihvenddisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihInvRef column
     *
     * Example usage:
     * <code>
     * $query->filterByApihinvref('fooValue');   // WHERE ApihInvRef = 'fooValue'
     * $query->filterByApihinvref('%fooValue%', Criteria::LIKE); // WHERE ApihInvRef LIKE '%fooValue%'
     * $query->filterByApihinvref(['foo', 'bar']); // WHERE ApihInvRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihinvref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihinvref($apihinvref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihinvref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHINVREF, $apihinvref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihCenbeeFormatId column
     *
     * Example usage:
     * <code>
     * $query->filterByApihcenbeeformatid('fooValue');   // WHERE ApihCenbeeFormatId = 'fooValue'
     * $query->filterByApihcenbeeformatid('%fooValue%', Criteria::LIKE); // WHERE ApihCenbeeFormatId LIKE '%fooValue%'
     * $query->filterByApihcenbeeformatid(['foo', 'bar']); // WHERE ApihCenbeeFormatId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihcenbeeformatid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihcenbeeformatid($apihcenbeeformatid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihcenbeeformatid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCENBEEFORMATID, $apihcenbeeformatid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihCenbeePoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApihcenbeeponbr('fooValue');   // WHERE ApihCenbeePoNbr = 'fooValue'
     * $query->filterByApihcenbeeponbr('%fooValue%', Criteria::LIKE); // WHERE ApihCenbeePoNbr LIKE '%fooValue%'
     * $query->filterByApihcenbeeponbr(['foo', 'bar']); // WHERE ApihCenbeePoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihcenbeeponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihcenbeeponbr($apihcenbeeponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihcenbeeponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHCENBEEPONBR, $apihcenbeeponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihTakeExpired column
     *
     * Example usage:
     * <code>
     * $query->filterByApihtakeexpired('fooValue');   // WHERE ApihTakeExpired = 'fooValue'
     * $query->filterByApihtakeexpired('%fooValue%', Criteria::LIKE); // WHERE ApihTakeExpired LIKE '%fooValue%'
     * $query->filterByApihtakeexpired(['foo', 'bar']); // WHERE ApihTakeExpired IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihtakeexpired The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihtakeexpired($apihtakeexpired = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihtakeexpired)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHTAKEEXPIRED, $apihtakeexpired, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApihExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApihexchctry('fooValue');   // WHERE ApihExchCtry = 'fooValue'
     * $query->filterByApihexchctry('%fooValue%', Criteria::LIKE); // WHERE ApihExchCtry LIKE '%fooValue%'
     * $query->filterByApihexchctry(['foo', 'bar']); // WHERE ApihExchCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apihexchctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihexchctry($apihexchctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apihexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHCTRY, $apihexchctry, $comparison);

        return $this;
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
     * @param mixed $apihexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApihexchrate($apihexchrate = null, ?string $comparison = null)
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

        $this->addUsingAlias(ApInvoiceTableMap::COL_APIHEXCHRATE, $apihexchrate, $comparison);

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

        $this->addUsingAlias(ApInvoiceTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ApInvoiceTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ApInvoiceTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
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
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

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
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, ?string $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);

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
    public function joinPurchaseOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
    public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        ?string $joinType = Criteria::INNER_JOIN
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
     * Filter the query by a related \ApInvoiceDetail object
     *
     * @param \ApInvoiceDetail|ObjectCollection $apInvoiceDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApInvoiceDetail($apInvoiceDetail, ?string $comparison = null)
    {
        if ($apInvoiceDetail instanceof \ApInvoiceDetail) {
            $this
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHINVNBR, $apInvoiceDetail->getApidinvnbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APVEVENDID, $apInvoiceDetail->getApvevendid(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPAYTOKEY, $apInvoiceDetail->getApidpaytokey(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHPONBR, $apInvoiceDetail->getApidponbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHCTRLNBR, $apInvoiceDetail->getApidctrlnbr(), $comparison)
                ->addUsingAlias(ApInvoiceTableMap::COL_APIHSEQ, $apInvoiceDetail->getApidseq(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByApInvoiceDetail() only accepts arguments of type \ApInvoiceDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ApInvoiceDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinApInvoiceDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ApInvoiceDetail relation ApInvoiceDetail object
     *
     * @param callable(\ApInvoiceDetailQuery):\ApInvoiceDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withApInvoiceDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useApInvoiceDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ApInvoiceDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ApInvoiceDetailQuery The inner query object of the EXISTS statement
     */
    public function useApInvoiceDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ApInvoiceDetailQuery */
        $q = $this->useExistsQuery('ApInvoiceDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ApInvoiceDetail table for a NOT EXISTS query.
     *
     * @see useApInvoiceDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ApInvoiceDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useApInvoiceDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ApInvoiceDetailQuery */
        $q = $this->useExistsQuery('ApInvoiceDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ApInvoiceDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ApInvoiceDetailQuery The inner query object of the IN statement
     */
    public function useInApInvoiceDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ApInvoiceDetailQuery */
        $q = $this->useInQuery('ApInvoiceDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ApInvoiceDetail table for a NOT IN query.
     *
     * @see useApInvoiceDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ApInvoiceDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInApInvoiceDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ApInvoiceDetailQuery */
        $q = $this->useInQuery('ApInvoiceDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildApInvoice $apInvoice Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
