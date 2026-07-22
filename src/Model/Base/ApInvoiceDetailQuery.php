<?php

namespace Base;

use \ApInvoiceDetail as ChildApInvoiceDetail;
use \ApInvoiceDetailQuery as ChildApInvoiceDetailQuery;
use \Exception;
use \PDO;
use Map\ApInvoiceDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ap_invoice_det` table.
 *
 * @method     ChildApInvoiceDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildApInvoiceDetailQuery orderByApidpaytokey($order = Criteria::ASC) Order by the ApidPayToKey column
 * @method     ChildApInvoiceDetailQuery orderByApidptname($order = Criteria::ASC) Order by the ApidPtName column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr1($order = Criteria::ASC) Order by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr2($order = Criteria::ASC) Order by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr3($order = Criteria::ASC) Order by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetailQuery orderByApidptctry($order = Criteria::ASC) Order by the ApidPtCtry column
 * @method     ChildApInvoiceDetailQuery orderByApidptcity($order = Criteria::ASC) Order by the ApidPtCity column
 * @method     ChildApInvoiceDetailQuery orderByApidptstat($order = Criteria::ASC) Order by the ApidPtStat column
 * @method     ChildApInvoiceDetailQuery orderByApidptzipcode($order = Criteria::ASC) Order by the ApidPtZipCode column
 * @method     ChildApInvoiceDetailQuery orderByApidponbr($order = Criteria::ASC) Order by the ApidPoNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidctrlnbr($order = Criteria::ASC) Order by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidinvnbr($order = Criteria::ASC) Order by the ApidInvNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidseq($order = Criteria::ASC) Order by the ApidSeq column
 * @method     ChildApInvoiceDetailQuery orderByApidline($order = Criteria::ASC) Order by the ApidLine column
 * @method     ChildApInvoiceDetailQuery orderByApidamt($order = Criteria::ASC) Order by the ApidAmt column
 * @method     ChildApInvoiceDetailQuery orderByApidglacct($order = Criteria::ASC) Order by the ApidGlAcct column
 * @method     ChildApInvoiceDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidqtyrec($order = Criteria::ASC) Order by the ApidQtyRec column
 * @method     ChildApInvoiceDetailQuery orderByApiddesc($order = Criteria::ASC) Order by the ApidDesc column
 * @method     ChildApInvoiceDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApInvoiceDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApInvoiceDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApInvoiceDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildApInvoiceDetailQuery groupByApidpaytokey() Group by the ApidPayToKey column
 * @method     ChildApInvoiceDetailQuery groupByApidptname() Group by the ApidPtName column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr1() Group by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr2() Group by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr3() Group by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetailQuery groupByApidptctry() Group by the ApidPtCtry column
 * @method     ChildApInvoiceDetailQuery groupByApidptcity() Group by the ApidPtCity column
 * @method     ChildApInvoiceDetailQuery groupByApidptstat() Group by the ApidPtStat column
 * @method     ChildApInvoiceDetailQuery groupByApidptzipcode() Group by the ApidPtZipCode column
 * @method     ChildApInvoiceDetailQuery groupByApidponbr() Group by the ApidPoNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidctrlnbr() Group by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidinvnbr() Group by the ApidInvNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidseq() Group by the ApidSeq column
 * @method     ChildApInvoiceDetailQuery groupByApidline() Group by the ApidLine column
 * @method     ChildApInvoiceDetailQuery groupByApidamt() Group by the ApidAmt column
 * @method     ChildApInvoiceDetailQuery groupByApidglacct() Group by the ApidGlAcct column
 * @method     ChildApInvoiceDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidqtyrec() Group by the ApidQtyRec column
 * @method     ChildApInvoiceDetailQuery groupByApiddesc() Group by the ApidDesc column
 * @method     ChildApInvoiceDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApInvoiceDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApInvoiceDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApInvoiceDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApInvoiceDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApInvoiceDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApInvoiceDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApInvoiceDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApInvoiceDetailQuery leftJoinApInvoice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery rightJoinApInvoice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery innerJoinApInvoice($relationAlias = null) Adds a INNER JOIN clause to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery joinWithApInvoice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWithApInvoice() Adds a LEFT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery rightJoinWithApInvoice() Adds a RIGHT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery innerJoinWithApInvoice() Adds a INNER JOIN clause and with to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApInvoiceDetailQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \ApInvoiceQuery|\VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApInvoiceDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query
 * @method     ChildApInvoiceDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query, or a new ChildApInvoiceDetail object populated from the query conditions when no match is found
 *
 * @method     ChildApInvoiceDetail|null findOneByApvevendid(string $ApveVendId) Return the first ChildApInvoiceDetail filtered by the ApveVendId column
 * @method     ChildApInvoiceDetail|null findOneByApidpaytokey(string $ApidPayToKey) Return the first ChildApInvoiceDetail filtered by the ApidPayToKey column
 * @method     ChildApInvoiceDetail|null findOneByApidptname(string $ApidPtName) Return the first ChildApInvoiceDetail filtered by the ApidPtName column
 * @method     ChildApInvoiceDetail|null findOneByApidptadr1(string $ApidPtAdr1) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetail|null findOneByApidptadr2(string $ApidPtAdr2) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetail|null findOneByApidptadr3(string $ApidPtAdr3) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetail|null findOneByApidptctry(string $ApidPtCtry) Return the first ChildApInvoiceDetail filtered by the ApidPtCtry column
 * @method     ChildApInvoiceDetail|null findOneByApidptcity(string $ApidPtCity) Return the first ChildApInvoiceDetail filtered by the ApidPtCity column
 * @method     ChildApInvoiceDetail|null findOneByApidptstat(string $ApidPtStat) Return the first ChildApInvoiceDetail filtered by the ApidPtStat column
 * @method     ChildApInvoiceDetail|null findOneByApidptzipcode(string $ApidPtZipCode) Return the first ChildApInvoiceDetail filtered by the ApidPtZipCode column
 * @method     ChildApInvoiceDetail|null findOneByApidponbr(string $ApidPoNbr) Return the first ChildApInvoiceDetail filtered by the ApidPoNbr column
 * @method     ChildApInvoiceDetail|null findOneByApidctrlnbr(string $ApidCtrlNbr) Return the first ChildApInvoiceDetail filtered by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetail|null findOneByApidinvnbr(string $ApidInvNbr) Return the first ChildApInvoiceDetail filtered by the ApidInvNbr column
 * @method     ChildApInvoiceDetail|null findOneByApidseq(int $ApidSeq) Return the first ChildApInvoiceDetail filtered by the ApidSeq column
 * @method     ChildApInvoiceDetail|null findOneByApidline(int $ApidLine) Return the first ChildApInvoiceDetail filtered by the ApidLine column
 * @method     ChildApInvoiceDetail|null findOneByApidamt(string $ApidAmt) Return the first ChildApInvoiceDetail filtered by the ApidAmt column
 * @method     ChildApInvoiceDetail|null findOneByApidglacct(string $ApidGlAcct) Return the first ChildApInvoiceDetail filtered by the ApidGlAcct column
 * @method     ChildApInvoiceDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildApInvoiceDetail filtered by the InitItemNbr column
 * @method     ChildApInvoiceDetail|null findOneByApidqtyrec(string $ApidQtyRec) Return the first ChildApInvoiceDetail filtered by the ApidQtyRec column
 * @method     ChildApInvoiceDetail|null findOneByApiddesc(string $ApidDesc) Return the first ChildApInvoiceDetail filtered by the ApidDesc column
 * @method     ChildApInvoiceDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoiceDetail filtered by the DateUpdtd column
 * @method     ChildApInvoiceDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoiceDetail filtered by the TimeUpdtd column
 * @method     ChildApInvoiceDetail|null findOneByDummy(string $dummy) Return the first ChildApInvoiceDetail filtered by the dummy column
 *
 * @method     ChildApInvoiceDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildApInvoiceDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOne(?ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoiceDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildApInvoiceDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidpaytokey(string $ApidPayToKey) Return the first ChildApInvoiceDetail filtered by the ApidPayToKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptname(string $ApidPtName) Return the first ChildApInvoiceDetail filtered by the ApidPtName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr1(string $ApidPtAdr1) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr2(string $ApidPtAdr2) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr3(string $ApidPtAdr3) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptctry(string $ApidPtCtry) Return the first ChildApInvoiceDetail filtered by the ApidPtCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptcity(string $ApidPtCity) Return the first ChildApInvoiceDetail filtered by the ApidPtCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptstat(string $ApidPtStat) Return the first ChildApInvoiceDetail filtered by the ApidPtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptzipcode(string $ApidPtZipCode) Return the first ChildApInvoiceDetail filtered by the ApidPtZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidponbr(string $ApidPoNbr) Return the first ChildApInvoiceDetail filtered by the ApidPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidctrlnbr(string $ApidCtrlNbr) Return the first ChildApInvoiceDetail filtered by the ApidCtrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidinvnbr(string $ApidInvNbr) Return the first ChildApInvoiceDetail filtered by the ApidInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidseq(int $ApidSeq) Return the first ChildApInvoiceDetail filtered by the ApidSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidline(int $ApidLine) Return the first ChildApInvoiceDetail filtered by the ApidLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidamt(string $ApidAmt) Return the first ChildApInvoiceDetail filtered by the ApidAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidglacct(string $ApidGlAcct) Return the first ChildApInvoiceDetail filtered by the ApidGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildApInvoiceDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidqtyrec(string $ApidQtyRec) Return the first ChildApInvoiceDetail filtered by the ApidQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApiddesc(string $ApidDesc) Return the first ChildApInvoiceDetail filtered by the ApidDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoiceDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoiceDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByDummy(string $dummy) Return the first ChildApInvoiceDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoiceDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildApInvoiceDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> find(?ConnectionInterface $con = null) Return ChildApInvoiceDetail objects based on current ModelCriteria
 *
 * @method     ChildApInvoiceDetail[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildApInvoiceDetail objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApvevendid(string|array<string> $ApveVendId) Return ChildApInvoiceDetail objects filtered by the ApveVendId column
 * @method     ChildApInvoiceDetail[]|Collection findByApidpaytokey(string|array<string> $ApidPayToKey) Return ChildApInvoiceDetail objects filtered by the ApidPayToKey column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidpaytokey(string|array<string> $ApidPayToKey) Return ChildApInvoiceDetail objects filtered by the ApidPayToKey column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptname(string|array<string> $ApidPtName) Return ChildApInvoiceDetail objects filtered by the ApidPtName column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptname(string|array<string> $ApidPtName) Return ChildApInvoiceDetail objects filtered by the ApidPtName column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptadr1(string|array<string> $ApidPtAdr1) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr1 column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptadr1(string|array<string> $ApidPtAdr1) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptadr2(string|array<string> $ApidPtAdr2) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr2 column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptadr2(string|array<string> $ApidPtAdr2) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptadr3(string|array<string> $ApidPtAdr3) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr3 column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptadr3(string|array<string> $ApidPtAdr3) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptctry(string|array<string> $ApidPtCtry) Return ChildApInvoiceDetail objects filtered by the ApidPtCtry column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptctry(string|array<string> $ApidPtCtry) Return ChildApInvoiceDetail objects filtered by the ApidPtCtry column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptcity(string|array<string> $ApidPtCity) Return ChildApInvoiceDetail objects filtered by the ApidPtCity column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptcity(string|array<string> $ApidPtCity) Return ChildApInvoiceDetail objects filtered by the ApidPtCity column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptstat(string|array<string> $ApidPtStat) Return ChildApInvoiceDetail objects filtered by the ApidPtStat column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptstat(string|array<string> $ApidPtStat) Return ChildApInvoiceDetail objects filtered by the ApidPtStat column
 * @method     ChildApInvoiceDetail[]|Collection findByApidptzipcode(string|array<string> $ApidPtZipCode) Return ChildApInvoiceDetail objects filtered by the ApidPtZipCode column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidptzipcode(string|array<string> $ApidPtZipCode) Return ChildApInvoiceDetail objects filtered by the ApidPtZipCode column
 * @method     ChildApInvoiceDetail[]|Collection findByApidponbr(string|array<string> $ApidPoNbr) Return ChildApInvoiceDetail objects filtered by the ApidPoNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidponbr(string|array<string> $ApidPoNbr) Return ChildApInvoiceDetail objects filtered by the ApidPoNbr column
 * @method     ChildApInvoiceDetail[]|Collection findByApidctrlnbr(string|array<string> $ApidCtrlNbr) Return ChildApInvoiceDetail objects filtered by the ApidCtrlNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidctrlnbr(string|array<string> $ApidCtrlNbr) Return ChildApInvoiceDetail objects filtered by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetail[]|Collection findByApidinvnbr(string|array<string> $ApidInvNbr) Return ChildApInvoiceDetail objects filtered by the ApidInvNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidinvnbr(string|array<string> $ApidInvNbr) Return ChildApInvoiceDetail objects filtered by the ApidInvNbr column
 * @method     ChildApInvoiceDetail[]|Collection findByApidseq(int|array<int> $ApidSeq) Return ChildApInvoiceDetail objects filtered by the ApidSeq column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidseq(int|array<int> $ApidSeq) Return ChildApInvoiceDetail objects filtered by the ApidSeq column
 * @method     ChildApInvoiceDetail[]|Collection findByApidline(int|array<int> $ApidLine) Return ChildApInvoiceDetail objects filtered by the ApidLine column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidline(int|array<int> $ApidLine) Return ChildApInvoiceDetail objects filtered by the ApidLine column
 * @method     ChildApInvoiceDetail[]|Collection findByApidamt(string|array<string> $ApidAmt) Return ChildApInvoiceDetail objects filtered by the ApidAmt column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidamt(string|array<string> $ApidAmt) Return ChildApInvoiceDetail objects filtered by the ApidAmt column
 * @method     ChildApInvoiceDetail[]|Collection findByApidglacct(string|array<string> $ApidGlAcct) Return ChildApInvoiceDetail objects filtered by the ApidGlAcct column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidglacct(string|array<string> $ApidGlAcct) Return ChildApInvoiceDetail objects filtered by the ApidGlAcct column
 * @method     ChildApInvoiceDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildApInvoiceDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildApInvoiceDetail objects filtered by the InitItemNbr column
 * @method     ChildApInvoiceDetail[]|Collection findByApidqtyrec(string|array<string> $ApidQtyRec) Return ChildApInvoiceDetail objects filtered by the ApidQtyRec column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApidqtyrec(string|array<string> $ApidQtyRec) Return ChildApInvoiceDetail objects filtered by the ApidQtyRec column
 * @method     ChildApInvoiceDetail[]|Collection findByApiddesc(string|array<string> $ApidDesc) Return ChildApInvoiceDetail objects filtered by the ApidDesc column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByApiddesc(string|array<string> $ApidDesc) Return ChildApInvoiceDetail objects filtered by the ApidDesc column
 * @method     ChildApInvoiceDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApInvoiceDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApInvoiceDetail objects filtered by the DateUpdtd column
 * @method     ChildApInvoiceDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApInvoiceDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApInvoiceDetail objects filtered by the TimeUpdtd column
 * @method     ChildApInvoiceDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildApInvoiceDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildApInvoiceDetail> findByDummy(string|array<string> $dummy) Return ChildApInvoiceDetail objects filtered by the dummy column
 *
 * @method     ChildApInvoiceDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildApInvoiceDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ApInvoiceDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApInvoiceDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApInvoiceDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApInvoiceDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApInvoiceDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildApInvoiceDetailQuery) {
            return $criteria;
        }
        $query = new ChildApInvoiceDetailQuery();
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
     * @param array[$ApveVendId, $ApidPayToKey, $ApidPoNbr, $ApidCtrlNbr, $ApidInvNbr, $ApidSeq, $ApidLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildApInvoiceDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApInvoiceDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildApInvoiceDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApidPayToKey, ApidPtName, ApidPtAdr1, ApidPtAdr2, ApidPtAdr3, ApidPtCtry, ApidPtCity, ApidPtStat, ApidPtZipCode, ApidPoNbr, ApidCtrlNbr, ApidInvNbr, ApidSeq, ApidLine, ApidAmt, ApidGlAcct, InitItemNbr, ApidQtyRec, ApidDesc, DateUpdtd, TimeUpdtd, dummy FROM ap_invoice_det WHERE ApveVendId = :p0 AND ApidPayToKey = :p1 AND ApidPoNbr = :p2 AND ApidCtrlNbr = :p3 AND ApidInvNbr = :p4 AND ApidSeq = :p5 AND ApidLine = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildApInvoiceDetail $obj */
            $obj = new ChildApInvoiceDetail();
            $obj->hydrate($row);
            ApInvoiceDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildApInvoiceDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $key[6], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPONBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDINVNBR, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDSEQ, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDLINE, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
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

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPayToKey column
     *
     * Example usage:
     * <code>
     * $query->filterByApidpaytokey('fooValue');   // WHERE ApidPayToKey = 'fooValue'
     * $query->filterByApidpaytokey('%fooValue%', Criteria::LIKE); // WHERE ApidPayToKey LIKE '%fooValue%'
     * $query->filterByApidpaytokey(['foo', 'bar']); // WHERE ApidPayToKey IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidpaytokey The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidpaytokey($apidpaytokey = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidpaytokey)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $apidpaytokey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtName column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptname('fooValue');   // WHERE ApidPtName = 'fooValue'
     * $query->filterByApidptname('%fooValue%', Criteria::LIKE); // WHERE ApidPtName LIKE '%fooValue%'
     * $query->filterByApidptname(['foo', 'bar']); // WHERE ApidPtName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptname($apidptname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTNAME, $apidptname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr1('fooValue');   // WHERE ApidPtAdr1 = 'fooValue'
     * $query->filterByApidptadr1('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr1 LIKE '%fooValue%'
     * $query->filterByApidptadr1(['foo', 'bar']); // WHERE ApidPtAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptadr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptadr1($apidptadr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR1, $apidptadr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr2('fooValue');   // WHERE ApidPtAdr2 = 'fooValue'
     * $query->filterByApidptadr2('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr2 LIKE '%fooValue%'
     * $query->filterByApidptadr2(['foo', 'bar']); // WHERE ApidPtAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptadr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptadr2($apidptadr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR2, $apidptadr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr3('fooValue');   // WHERE ApidPtAdr3 = 'fooValue'
     * $query->filterByApidptadr3('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr3 LIKE '%fooValue%'
     * $query->filterByApidptadr3(['foo', 'bar']); // WHERE ApidPtAdr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptadr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptadr3($apidptadr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR3, $apidptadr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptctry('fooValue');   // WHERE ApidPtCtry = 'fooValue'
     * $query->filterByApidptctry('%fooValue%', Criteria::LIKE); // WHERE ApidPtCtry LIKE '%fooValue%'
     * $query->filterByApidptctry(['foo', 'bar']); // WHERE ApidPtCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptctry($apidptctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTCTRY, $apidptctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptcity('fooValue');   // WHERE ApidPtCity = 'fooValue'
     * $query->filterByApidptcity('%fooValue%', Criteria::LIKE); // WHERE ApidPtCity LIKE '%fooValue%'
     * $query->filterByApidptcity(['foo', 'bar']); // WHERE ApidPtCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptcity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptcity($apidptcity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptcity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTCITY, $apidptcity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptstat('fooValue');   // WHERE ApidPtStat = 'fooValue'
     * $query->filterByApidptstat('%fooValue%', Criteria::LIKE); // WHERE ApidPtStat LIKE '%fooValue%'
     * $query->filterByApidptstat(['foo', 'bar']); // WHERE ApidPtStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptstat($apidptstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTSTAT, $apidptstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptzipcode('fooValue');   // WHERE ApidPtZipCode = 'fooValue'
     * $query->filterByApidptzipcode('%fooValue%', Criteria::LIKE); // WHERE ApidPtZipCode LIKE '%fooValue%'
     * $query->filterByApidptzipcode(['foo', 'bar']); // WHERE ApidPtZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidptzipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidptzipcode($apidptzipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE, $apidptzipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidponbr('fooValue');   // WHERE ApidPoNbr = 'fooValue'
     * $query->filterByApidponbr('%fooValue%', Criteria::LIKE); // WHERE ApidPoNbr LIKE '%fooValue%'
     * $query->filterByApidponbr(['foo', 'bar']); // WHERE ApidPoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidponbr($apidponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $apidponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidCtrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidctrlnbr('fooValue');   // WHERE ApidCtrlNbr = 'fooValue'
     * $query->filterByApidctrlnbr('%fooValue%', Criteria::LIKE); // WHERE ApidCtrlNbr LIKE '%fooValue%'
     * $query->filterByApidctrlnbr(['foo', 'bar']); // WHERE ApidCtrlNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidctrlnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidctrlnbr($apidctrlnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidctrlnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $apidctrlnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidinvnbr('fooValue');   // WHERE ApidInvNbr = 'fooValue'
     * $query->filterByApidinvnbr('%fooValue%', Criteria::LIKE); // WHERE ApidInvNbr LIKE '%fooValue%'
     * $query->filterByApidinvnbr(['foo', 'bar']); // WHERE ApidInvNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidinvnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidinvnbr($apidinvnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $apidinvnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByApidseq(1234); // WHERE ApidSeq = 1234
     * $query->filterByApidseq(array(12, 34)); // WHERE ApidSeq IN (12, 34)
     * $query->filterByApidseq(array('min' => 12)); // WHERE ApidSeq > 12
     * </code>
     *
     * @see       filterByApInvoice()
     *
     * @param mixed $apidseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidseq($apidseq = null, ?string $comparison = null)
    {
        if (is_array($apidseq)) {
            $useMinMax = false;
            if (isset($apidseq['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidseq['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidLine column
     *
     * Example usage:
     * <code>
     * $query->filterByApidline(1234); // WHERE ApidLine = 1234
     * $query->filterByApidline(array(12, 34)); // WHERE ApidLine IN (12, 34)
     * $query->filterByApidline(array('min' => 12)); // WHERE ApidLine > 12
     * </code>
     *
     * @param mixed $apidline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidline($apidline = null, ?string $comparison = null)
    {
        if (is_array($apidline)) {
            $useMinMax = false;
            if (isset($apidline['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidline['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApidamt(1234); // WHERE ApidAmt = 1234
     * $query->filterByApidamt(array(12, 34)); // WHERE ApidAmt IN (12, 34)
     * $query->filterByApidamt(array('min' => 12)); // WHERE ApidAmt > 12
     * </code>
     *
     * @param mixed $apidamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidamt($apidamt = null, ?string $comparison = null)
    {
        if (is_array($apidamt)) {
            $useMinMax = false;
            if (isset($apidamt['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidamt['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApidglacct('fooValue');   // WHERE ApidGlAcct = 'fooValue'
     * $query->filterByApidglacct('%fooValue%', Criteria::LIKE); // WHERE ApidGlAcct LIKE '%fooValue%'
     * $query->filterByApidglacct(['foo', 'bar']); // WHERE ApidGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apidglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidglacct($apidglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDGLACCT, $apidglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByApidqtyrec(1234); // WHERE ApidQtyRec = 1234
     * $query->filterByApidqtyrec(array(12, 34)); // WHERE ApidQtyRec IN (12, 34)
     * $query->filterByApidqtyrec(array('min' => 12)); // WHERE ApidQtyRec > 12
     * </code>
     *
     * @param mixed $apidqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApidqtyrec($apidqtyrec = null, ?string $comparison = null)
    {
        if (is_array($apidqtyrec)) {
            $useMinMax = false;
            if (isset($apidqtyrec['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidqtyrec['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApidDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByApiddesc('fooValue');   // WHERE ApidDesc = 'fooValue'
     * $query->filterByApiddesc('%fooValue%', Criteria::LIKE); // WHERE ApidDesc LIKE '%fooValue%'
     * $query->filterByApiddesc(['foo', 'bar']); // WHERE ApidDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apiddesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApiddesc($apiddesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apiddesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDDESC, $apiddesc, $comparison);

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

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ApInvoice object
     *
     * @param \ApInvoice $apInvoice The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApInvoice($apInvoice, ?string $comparison = null)
    {
        if ($apInvoice instanceof \ApInvoice) {
            return $this
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $apInvoice->getApihinvnbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $apInvoice->getApvevendid(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $apInvoice->getApihpaytokey(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $apInvoice->getApihponbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $apInvoice->getApihctrlnbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apInvoice->getApihseq(), $comparison);
        } else {
            throw new PropelException('filterByApInvoice() only accepts arguments of type \ApInvoice');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ApInvoice relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinApInvoice(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ApInvoice relation ApInvoice object
     *
     * @param callable(\ApInvoiceQuery):\ApInvoiceQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withApInvoiceQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useApInvoiceQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ApInvoice table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ApInvoiceQuery The inner query object of the EXISTS statement
     */
    public function useApInvoiceExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ApInvoiceQuery */
        $q = $this->useExistsQuery('ApInvoice', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ApInvoice table for a NOT EXISTS query.
     *
     * @see useApInvoiceExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ApInvoiceQuery The inner query object of the NOT EXISTS statement
     */
    public function useApInvoiceNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ApInvoiceQuery */
        $q = $this->useExistsQuery('ApInvoice', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ApInvoice table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ApInvoiceQuery The inner query object of the IN statement
     */
    public function useInApInvoiceQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ApInvoiceQuery */
        $q = $this->useInQuery('ApInvoice', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ApInvoice table for a NOT IN query.
     *
     * @see useApInvoiceInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ApInvoiceQuery The inner query object of the NOT IN statement
     */
    public function useNotInApInvoiceQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ApInvoiceQuery */
        $q = $this->useInQuery('ApInvoice', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

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
     * Exclude object from result
     *
     * @param ChildApInvoiceDetail $apInvoiceDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($apInvoiceDetail = null)
    {
        if ($apInvoiceDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APVEVENDID), $apInvoiceDetail->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY), $apInvoiceDetail->getApidpaytokey(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDPONBR), $apInvoiceDetail->getApidponbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDCTRLNBR), $apInvoiceDetail->getApidctrlnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDINVNBR), $apInvoiceDetail->getApidinvnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDSEQ), $apInvoiceDetail->getApidseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDLINE), $apInvoiceDetail->getApidline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_invoice_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApInvoiceDetailTableMap::clearInstancePool();
            ApInvoiceDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApInvoiceDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApInvoiceDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApInvoiceDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
