<?php

namespace Base;

use \ArPaymentPending as ChildArPaymentPending;
use \ArPaymentPendingQuery as ChildArPaymentPendingQuery;
use \Exception;
use \PDO;
use Map\ArPaymentPendingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cash_det` table.
 *
 * @method     ChildArPaymentPendingQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArPaymentPendingQuery orderByArcdinvnbr($order = Criteria::ASC) Order by the ArcdInvNbr column
 * @method     ChildArPaymentPendingQuery orderByArcdinvseq($order = Criteria::ASC) Order by the ArcdInvSeq column
 * @method     ChildArPaymentPendingQuery orderByArcdpaid($order = Criteria::ASC) Order by the ArcdPaid column
 * @method     ChildArPaymentPendingQuery orderByArcdinvdate($order = Criteria::ASC) Order by the ArcdInvDate column
 * @method     ChildArPaymentPendingQuery orderByArcdduedate($order = Criteria::ASC) Order by the ArcdDueDate column
 * @method     ChildArPaymentPendingQuery orderByArcdchknbr($order = Criteria::ASC) Order by the ArcdChkNbr column
 * @method     ChildArPaymentPendingQuery orderByArcdamtdue($order = Criteria::ASC) Order by the ArcdAmtDue column
 * @method     ChildArPaymentPendingQuery orderByArcdamtpaid($order = Criteria::ASC) Order by the ArcdAmtPaid column
 * @method     ChildArPaymentPendingQuery orderByArcddiscpaid($order = Criteria::ASC) Order by the ArcdDiscPaid column
 * @method     ChildArPaymentPendingQuery orderByArcdcashacct($order = Criteria::ASC) Order by the ArcdCashAcct column
 * @method     ChildArPaymentPendingQuery orderByArcdcredacct($order = Criteria::ASC) Order by the ArcdCredAcct column
 * @method     ChildArPaymentPendingQuery orderByArcdtermcode($order = Criteria::ASC) Order by the ArcdTermCode column
 * @method     ChildArPaymentPendingQuery orderByArcdfrtallow($order = Criteria::ASC) Order by the ArcdFrtAllow column
 * @method     ChildArPaymentPendingQuery orderByArcdcustpo($order = Criteria::ASC) Order by the ArcdCustPo column
 * @method     ChildArPaymentPendingQuery orderByArcdordrnbr($order = Criteria::ASC) Order by the ArcdOrdrNbr column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode1($order = Criteria::ASC) Order by the ArcdTaxCode1 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow1($order = Criteria::ASC) Order by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode2($order = Criteria::ASC) Order by the ArcdTaxCode2 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow2($order = Criteria::ASC) Order by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode3($order = Criteria::ASC) Order by the ArcdTaxCode3 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow3($order = Criteria::ASC) Order by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode4($order = Criteria::ASC) Order by the ArcdTaxCode4 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow4($order = Criteria::ASC) Order by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode5($order = Criteria::ASC) Order by the ArcdTaxCode5 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow5($order = Criteria::ASC) Order by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode6($order = Criteria::ASC) Order by the ArcdTaxCode6 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow6($order = Criteria::ASC) Order by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode7($order = Criteria::ASC) Order by the ArcdTaxCode7 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow7($order = Criteria::ASC) Order by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode8($order = Criteria::ASC) Order by the ArcdTaxCode8 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow8($order = Criteria::ASC) Order by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxcode9($order = Criteria::ASC) Order by the ArcdTaxCode9 column
 * @method     ChildArPaymentPendingQuery orderByArcdtaxallow9($order = Criteria::ASC) Order by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPendingQuery orderByArcdwriteoff($order = Criteria::ASC) Order by the ArcdWriteOff column
 * @method     ChildArPaymentPendingQuery orderByArcdwriteoffreas($order = Criteria::ASC) Order by the ArcdWriteOffReas column
 * @method     ChildArPaymentPendingQuery orderByArcdcomrate($order = Criteria::ASC) Order by the ArcdComRate column
 * @method     ChildArPaymentPendingQuery orderByArcdsalesamt($order = Criteria::ASC) Order by the ArcdSalesAmt column
 * @method     ChildArPaymentPendingQuery orderByArcdpaydate($order = Criteria::ASC) Order by the ArcdPayDate column
 * @method     ChildArPaymentPendingQuery orderByArcdglpd($order = Criteria::ASC) Order by the ArcdGlPd column
 * @method     ChildArPaymentPendingQuery orderByArcdref($order = Criteria::ASC) Order by the ArcdRef column
 * @method     ChildArPaymentPendingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArPaymentPendingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArPaymentPendingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArPaymentPendingQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArPaymentPendingQuery groupByArcdinvnbr() Group by the ArcdInvNbr column
 * @method     ChildArPaymentPendingQuery groupByArcdinvseq() Group by the ArcdInvSeq column
 * @method     ChildArPaymentPendingQuery groupByArcdpaid() Group by the ArcdPaid column
 * @method     ChildArPaymentPendingQuery groupByArcdinvdate() Group by the ArcdInvDate column
 * @method     ChildArPaymentPendingQuery groupByArcdduedate() Group by the ArcdDueDate column
 * @method     ChildArPaymentPendingQuery groupByArcdchknbr() Group by the ArcdChkNbr column
 * @method     ChildArPaymentPendingQuery groupByArcdamtdue() Group by the ArcdAmtDue column
 * @method     ChildArPaymentPendingQuery groupByArcdamtpaid() Group by the ArcdAmtPaid column
 * @method     ChildArPaymentPendingQuery groupByArcddiscpaid() Group by the ArcdDiscPaid column
 * @method     ChildArPaymentPendingQuery groupByArcdcashacct() Group by the ArcdCashAcct column
 * @method     ChildArPaymentPendingQuery groupByArcdcredacct() Group by the ArcdCredAcct column
 * @method     ChildArPaymentPendingQuery groupByArcdtermcode() Group by the ArcdTermCode column
 * @method     ChildArPaymentPendingQuery groupByArcdfrtallow() Group by the ArcdFrtAllow column
 * @method     ChildArPaymentPendingQuery groupByArcdcustpo() Group by the ArcdCustPo column
 * @method     ChildArPaymentPendingQuery groupByArcdordrnbr() Group by the ArcdOrdrNbr column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode1() Group by the ArcdTaxCode1 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow1() Group by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode2() Group by the ArcdTaxCode2 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow2() Group by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode3() Group by the ArcdTaxCode3 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow3() Group by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode4() Group by the ArcdTaxCode4 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow4() Group by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode5() Group by the ArcdTaxCode5 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow5() Group by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode6() Group by the ArcdTaxCode6 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow6() Group by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode7() Group by the ArcdTaxCode7 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow7() Group by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode8() Group by the ArcdTaxCode8 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow8() Group by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxcode9() Group by the ArcdTaxCode9 column
 * @method     ChildArPaymentPendingQuery groupByArcdtaxallow9() Group by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPendingQuery groupByArcdwriteoff() Group by the ArcdWriteOff column
 * @method     ChildArPaymentPendingQuery groupByArcdwriteoffreas() Group by the ArcdWriteOffReas column
 * @method     ChildArPaymentPendingQuery groupByArcdcomrate() Group by the ArcdComRate column
 * @method     ChildArPaymentPendingQuery groupByArcdsalesamt() Group by the ArcdSalesAmt column
 * @method     ChildArPaymentPendingQuery groupByArcdpaydate() Group by the ArcdPayDate column
 * @method     ChildArPaymentPendingQuery groupByArcdglpd() Group by the ArcdGlPd column
 * @method     ChildArPaymentPendingQuery groupByArcdref() Group by the ArcdRef column
 * @method     ChildArPaymentPendingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArPaymentPendingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArPaymentPendingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArPaymentPendingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArPaymentPendingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArPaymentPendingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArPaymentPendingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArPaymentPendingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArPaymentPendingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArPaymentPendingQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArPaymentPendingQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArPaymentPendingQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArPaymentPendingQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArPaymentPendingQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArPaymentPendingQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArPaymentPendingQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildArPaymentPendingQuery leftJoinArCashHead($relationAlias = null) Adds a LEFT JOIN clause to the query using the ArCashHead relation
 * @method     ChildArPaymentPendingQuery rightJoinArCashHead($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ArCashHead relation
 * @method     ChildArPaymentPendingQuery innerJoinArCashHead($relationAlias = null) Adds a INNER JOIN clause to the query using the ArCashHead relation
 *
 * @method     ChildArPaymentPendingQuery joinWithArCashHead($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ArCashHead relation
 *
 * @method     ChildArPaymentPendingQuery leftJoinWithArCashHead() Adds a LEFT JOIN clause and with to the query using the ArCashHead relation
 * @method     ChildArPaymentPendingQuery rightJoinWithArCashHead() Adds a RIGHT JOIN clause and with to the query using the ArCashHead relation
 * @method     ChildArPaymentPendingQuery innerJoinWithArCashHead() Adds a INNER JOIN clause and with to the query using the ArCashHead relation
 *
 * @method     \CustomerQuery|\ArCashHeadQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArPaymentPending|null findOne(?ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query
 * @method     ChildArPaymentPending findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query, or a new ChildArPaymentPending object populated from the query conditions when no match is found
 *
 * @method     ChildArPaymentPending|null findOneByArcucustid(string $ArcuCustId) Return the first ChildArPaymentPending filtered by the ArcuCustId column
 * @method     ChildArPaymentPending|null findOneByArcdinvnbr(string $ArcdInvNbr) Return the first ChildArPaymentPending filtered by the ArcdInvNbr column
 * @method     ChildArPaymentPending|null findOneByArcdinvseq(int $ArcdInvSeq) Return the first ChildArPaymentPending filtered by the ArcdInvSeq column
 * @method     ChildArPaymentPending|null findOneByArcdpaid(string $ArcdPaid) Return the first ChildArPaymentPending filtered by the ArcdPaid column
 * @method     ChildArPaymentPending|null findOneByArcdinvdate(string $ArcdInvDate) Return the first ChildArPaymentPending filtered by the ArcdInvDate column
 * @method     ChildArPaymentPending|null findOneByArcdduedate(string $ArcdDueDate) Return the first ChildArPaymentPending filtered by the ArcdDueDate column
 * @method     ChildArPaymentPending|null findOneByArcdchknbr(string $ArcdChkNbr) Return the first ChildArPaymentPending filtered by the ArcdChkNbr column
 * @method     ChildArPaymentPending|null findOneByArcdamtdue(string $ArcdAmtDue) Return the first ChildArPaymentPending filtered by the ArcdAmtDue column
 * @method     ChildArPaymentPending|null findOneByArcdamtpaid(string $ArcdAmtPaid) Return the first ChildArPaymentPending filtered by the ArcdAmtPaid column
 * @method     ChildArPaymentPending|null findOneByArcddiscpaid(string $ArcdDiscPaid) Return the first ChildArPaymentPending filtered by the ArcdDiscPaid column
 * @method     ChildArPaymentPending|null findOneByArcdcashacct(string $ArcdCashAcct) Return the first ChildArPaymentPending filtered by the ArcdCashAcct column
 * @method     ChildArPaymentPending|null findOneByArcdcredacct(string $ArcdCredAcct) Return the first ChildArPaymentPending filtered by the ArcdCredAcct column
 * @method     ChildArPaymentPending|null findOneByArcdtermcode(string $ArcdTermCode) Return the first ChildArPaymentPending filtered by the ArcdTermCode column
 * @method     ChildArPaymentPending|null findOneByArcdfrtallow(string $ArcdFrtAllow) Return the first ChildArPaymentPending filtered by the ArcdFrtAllow column
 * @method     ChildArPaymentPending|null findOneByArcdcustpo(string $ArcdCustPo) Return the first ChildArPaymentPending filtered by the ArcdCustPo column
 * @method     ChildArPaymentPending|null findOneByArcdordrnbr(string $ArcdOrdrNbr) Return the first ChildArPaymentPending filtered by the ArcdOrdrNbr column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode1(string $ArcdTaxCode1) Return the first ChildArPaymentPending filtered by the ArcdTaxCode1 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow1(string $ArcdTaxAllow1) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode2(string $ArcdTaxCode2) Return the first ChildArPaymentPending filtered by the ArcdTaxCode2 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow2(string $ArcdTaxAllow2) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode3(string $ArcdTaxCode3) Return the first ChildArPaymentPending filtered by the ArcdTaxCode3 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow3(string $ArcdTaxAllow3) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode4(string $ArcdTaxCode4) Return the first ChildArPaymentPending filtered by the ArcdTaxCode4 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow4(string $ArcdTaxAllow4) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode5(string $ArcdTaxCode5) Return the first ChildArPaymentPending filtered by the ArcdTaxCode5 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow5(string $ArcdTaxAllow5) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode6(string $ArcdTaxCode6) Return the first ChildArPaymentPending filtered by the ArcdTaxCode6 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow6(string $ArcdTaxAllow6) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode7(string $ArcdTaxCode7) Return the first ChildArPaymentPending filtered by the ArcdTaxCode7 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow7(string $ArcdTaxAllow7) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode8(string $ArcdTaxCode8) Return the first ChildArPaymentPending filtered by the ArcdTaxCode8 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow8(string $ArcdTaxAllow8) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxcode9(string $ArcdTaxCode9) Return the first ChildArPaymentPending filtered by the ArcdTaxCode9 column
 * @method     ChildArPaymentPending|null findOneByArcdtaxallow9(string $ArcdTaxAllow9) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPending|null findOneByArcdwriteoff(string $ArcdWriteOff) Return the first ChildArPaymentPending filtered by the ArcdWriteOff column
 * @method     ChildArPaymentPending|null findOneByArcdwriteoffreas(string $ArcdWriteOffReas) Return the first ChildArPaymentPending filtered by the ArcdWriteOffReas column
 * @method     ChildArPaymentPending|null findOneByArcdcomrate(string $ArcdComRate) Return the first ChildArPaymentPending filtered by the ArcdComRate column
 * @method     ChildArPaymentPending|null findOneByArcdsalesamt(string $ArcdSalesAmt) Return the first ChildArPaymentPending filtered by the ArcdSalesAmt column
 * @method     ChildArPaymentPending|null findOneByArcdpaydate(string $ArcdPayDate) Return the first ChildArPaymentPending filtered by the ArcdPayDate column
 * @method     ChildArPaymentPending|null findOneByArcdglpd(int $ArcdGlPd) Return the first ChildArPaymentPending filtered by the ArcdGlPd column
 * @method     ChildArPaymentPending|null findOneByArcdref(string $ArcdRef) Return the first ChildArPaymentPending filtered by the ArcdRef column
 * @method     ChildArPaymentPending|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArPaymentPending filtered by the DateUpdtd column
 * @method     ChildArPaymentPending|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArPaymentPending filtered by the TimeUpdtd column
 * @method     ChildArPaymentPending|null findOneByDummy(string $dummy) Return the first ChildArPaymentPending filtered by the dummy column
 *
 * @method     ChildArPaymentPending requirePk($key, ?ConnectionInterface $con = null) Return the ChildArPaymentPending by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOne(?ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArPaymentPending requireOneByArcucustid(string $ArcuCustId) Return the first ChildArPaymentPending filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdinvnbr(string $ArcdInvNbr) Return the first ChildArPaymentPending filtered by the ArcdInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdinvseq(int $ArcdInvSeq) Return the first ChildArPaymentPending filtered by the ArcdInvSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdpaid(string $ArcdPaid) Return the first ChildArPaymentPending filtered by the ArcdPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdinvdate(string $ArcdInvDate) Return the first ChildArPaymentPending filtered by the ArcdInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdduedate(string $ArcdDueDate) Return the first ChildArPaymentPending filtered by the ArcdDueDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdchknbr(string $ArcdChkNbr) Return the first ChildArPaymentPending filtered by the ArcdChkNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdamtdue(string $ArcdAmtDue) Return the first ChildArPaymentPending filtered by the ArcdAmtDue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdamtpaid(string $ArcdAmtPaid) Return the first ChildArPaymentPending filtered by the ArcdAmtPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcddiscpaid(string $ArcdDiscPaid) Return the first ChildArPaymentPending filtered by the ArcdDiscPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdcashacct(string $ArcdCashAcct) Return the first ChildArPaymentPending filtered by the ArcdCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdcredacct(string $ArcdCredAcct) Return the first ChildArPaymentPending filtered by the ArcdCredAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtermcode(string $ArcdTermCode) Return the first ChildArPaymentPending filtered by the ArcdTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdfrtallow(string $ArcdFrtAllow) Return the first ChildArPaymentPending filtered by the ArcdFrtAllow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdcustpo(string $ArcdCustPo) Return the first ChildArPaymentPending filtered by the ArcdCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdordrnbr(string $ArcdOrdrNbr) Return the first ChildArPaymentPending filtered by the ArcdOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode1(string $ArcdTaxCode1) Return the first ChildArPaymentPending filtered by the ArcdTaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow1(string $ArcdTaxAllow1) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode2(string $ArcdTaxCode2) Return the first ChildArPaymentPending filtered by the ArcdTaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow2(string $ArcdTaxAllow2) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode3(string $ArcdTaxCode3) Return the first ChildArPaymentPending filtered by the ArcdTaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow3(string $ArcdTaxAllow3) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode4(string $ArcdTaxCode4) Return the first ChildArPaymentPending filtered by the ArcdTaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow4(string $ArcdTaxAllow4) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode5(string $ArcdTaxCode5) Return the first ChildArPaymentPending filtered by the ArcdTaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow5(string $ArcdTaxAllow5) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode6(string $ArcdTaxCode6) Return the first ChildArPaymentPending filtered by the ArcdTaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow6(string $ArcdTaxAllow6) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode7(string $ArcdTaxCode7) Return the first ChildArPaymentPending filtered by the ArcdTaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow7(string $ArcdTaxAllow7) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode8(string $ArcdTaxCode8) Return the first ChildArPaymentPending filtered by the ArcdTaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow8(string $ArcdTaxAllow8) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxcode9(string $ArcdTaxCode9) Return the first ChildArPaymentPending filtered by the ArcdTaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdtaxallow9(string $ArcdTaxAllow9) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdwriteoff(string $ArcdWriteOff) Return the first ChildArPaymentPending filtered by the ArcdWriteOff column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdwriteoffreas(string $ArcdWriteOffReas) Return the first ChildArPaymentPending filtered by the ArcdWriteOffReas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdcomrate(string $ArcdComRate) Return the first ChildArPaymentPending filtered by the ArcdComRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdsalesamt(string $ArcdSalesAmt) Return the first ChildArPaymentPending filtered by the ArcdSalesAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdpaydate(string $ArcdPayDate) Return the first ChildArPaymentPending filtered by the ArcdPayDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdglpd(int $ArcdGlPd) Return the first ChildArPaymentPending filtered by the ArcdGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByArcdref(string $ArcdRef) Return the first ChildArPaymentPending filtered by the ArcdRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArPaymentPending filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArPaymentPending filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOneByDummy(string $dummy) Return the first ChildArPaymentPending filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArPaymentPending[]|Collection find(?ConnectionInterface $con = null) Return ChildArPaymentPending objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> find(?ConnectionInterface $con = null) Return ChildArPaymentPending objects based on current ModelCriteria
 *
 * @method     ChildArPaymentPending[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildArPaymentPending objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcucustid(string|array<string> $ArcuCustId) Return ChildArPaymentPending objects filtered by the ArcuCustId column
 * @method     ChildArPaymentPending[]|Collection findByArcdinvnbr(string|array<string> $ArcdInvNbr) Return ChildArPaymentPending objects filtered by the ArcdInvNbr column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdinvnbr(string|array<string> $ArcdInvNbr) Return ChildArPaymentPending objects filtered by the ArcdInvNbr column
 * @method     ChildArPaymentPending[]|Collection findByArcdinvseq(int|array<int> $ArcdInvSeq) Return ChildArPaymentPending objects filtered by the ArcdInvSeq column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdinvseq(int|array<int> $ArcdInvSeq) Return ChildArPaymentPending objects filtered by the ArcdInvSeq column
 * @method     ChildArPaymentPending[]|Collection findByArcdpaid(string|array<string> $ArcdPaid) Return ChildArPaymentPending objects filtered by the ArcdPaid column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdpaid(string|array<string> $ArcdPaid) Return ChildArPaymentPending objects filtered by the ArcdPaid column
 * @method     ChildArPaymentPending[]|Collection findByArcdinvdate(string|array<string> $ArcdInvDate) Return ChildArPaymentPending objects filtered by the ArcdInvDate column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdinvdate(string|array<string> $ArcdInvDate) Return ChildArPaymentPending objects filtered by the ArcdInvDate column
 * @method     ChildArPaymentPending[]|Collection findByArcdduedate(string|array<string> $ArcdDueDate) Return ChildArPaymentPending objects filtered by the ArcdDueDate column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdduedate(string|array<string> $ArcdDueDate) Return ChildArPaymentPending objects filtered by the ArcdDueDate column
 * @method     ChildArPaymentPending[]|Collection findByArcdchknbr(string|array<string> $ArcdChkNbr) Return ChildArPaymentPending objects filtered by the ArcdChkNbr column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdchknbr(string|array<string> $ArcdChkNbr) Return ChildArPaymentPending objects filtered by the ArcdChkNbr column
 * @method     ChildArPaymentPending[]|Collection findByArcdamtdue(string|array<string> $ArcdAmtDue) Return ChildArPaymentPending objects filtered by the ArcdAmtDue column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdamtdue(string|array<string> $ArcdAmtDue) Return ChildArPaymentPending objects filtered by the ArcdAmtDue column
 * @method     ChildArPaymentPending[]|Collection findByArcdamtpaid(string|array<string> $ArcdAmtPaid) Return ChildArPaymentPending objects filtered by the ArcdAmtPaid column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdamtpaid(string|array<string> $ArcdAmtPaid) Return ChildArPaymentPending objects filtered by the ArcdAmtPaid column
 * @method     ChildArPaymentPending[]|Collection findByArcddiscpaid(string|array<string> $ArcdDiscPaid) Return ChildArPaymentPending objects filtered by the ArcdDiscPaid column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcddiscpaid(string|array<string> $ArcdDiscPaid) Return ChildArPaymentPending objects filtered by the ArcdDiscPaid column
 * @method     ChildArPaymentPending[]|Collection findByArcdcashacct(string|array<string> $ArcdCashAcct) Return ChildArPaymentPending objects filtered by the ArcdCashAcct column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdcashacct(string|array<string> $ArcdCashAcct) Return ChildArPaymentPending objects filtered by the ArcdCashAcct column
 * @method     ChildArPaymentPending[]|Collection findByArcdcredacct(string|array<string> $ArcdCredAcct) Return ChildArPaymentPending objects filtered by the ArcdCredAcct column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdcredacct(string|array<string> $ArcdCredAcct) Return ChildArPaymentPending objects filtered by the ArcdCredAcct column
 * @method     ChildArPaymentPending[]|Collection findByArcdtermcode(string|array<string> $ArcdTermCode) Return ChildArPaymentPending objects filtered by the ArcdTermCode column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtermcode(string|array<string> $ArcdTermCode) Return ChildArPaymentPending objects filtered by the ArcdTermCode column
 * @method     ChildArPaymentPending[]|Collection findByArcdfrtallow(string|array<string> $ArcdFrtAllow) Return ChildArPaymentPending objects filtered by the ArcdFrtAllow column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdfrtallow(string|array<string> $ArcdFrtAllow) Return ChildArPaymentPending objects filtered by the ArcdFrtAllow column
 * @method     ChildArPaymentPending[]|Collection findByArcdcustpo(string|array<string> $ArcdCustPo) Return ChildArPaymentPending objects filtered by the ArcdCustPo column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdcustpo(string|array<string> $ArcdCustPo) Return ChildArPaymentPending objects filtered by the ArcdCustPo column
 * @method     ChildArPaymentPending[]|Collection findByArcdordrnbr(string|array<string> $ArcdOrdrNbr) Return ChildArPaymentPending objects filtered by the ArcdOrdrNbr column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdordrnbr(string|array<string> $ArcdOrdrNbr) Return ChildArPaymentPending objects filtered by the ArcdOrdrNbr column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode1(string|array<string> $ArcdTaxCode1) Return ChildArPaymentPending objects filtered by the ArcdTaxCode1 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode1(string|array<string> $ArcdTaxCode1) Return ChildArPaymentPending objects filtered by the ArcdTaxCode1 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow1(string|array<string> $ArcdTaxAllow1) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow1 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow1(string|array<string> $ArcdTaxAllow1) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode2(string|array<string> $ArcdTaxCode2) Return ChildArPaymentPending objects filtered by the ArcdTaxCode2 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode2(string|array<string> $ArcdTaxCode2) Return ChildArPaymentPending objects filtered by the ArcdTaxCode2 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow2(string|array<string> $ArcdTaxAllow2) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow2 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow2(string|array<string> $ArcdTaxAllow2) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode3(string|array<string> $ArcdTaxCode3) Return ChildArPaymentPending objects filtered by the ArcdTaxCode3 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode3(string|array<string> $ArcdTaxCode3) Return ChildArPaymentPending objects filtered by the ArcdTaxCode3 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow3(string|array<string> $ArcdTaxAllow3) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow3 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow3(string|array<string> $ArcdTaxAllow3) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode4(string|array<string> $ArcdTaxCode4) Return ChildArPaymentPending objects filtered by the ArcdTaxCode4 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode4(string|array<string> $ArcdTaxCode4) Return ChildArPaymentPending objects filtered by the ArcdTaxCode4 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow4(string|array<string> $ArcdTaxAllow4) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow4 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow4(string|array<string> $ArcdTaxAllow4) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode5(string|array<string> $ArcdTaxCode5) Return ChildArPaymentPending objects filtered by the ArcdTaxCode5 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode5(string|array<string> $ArcdTaxCode5) Return ChildArPaymentPending objects filtered by the ArcdTaxCode5 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow5(string|array<string> $ArcdTaxAllow5) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow5 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow5(string|array<string> $ArcdTaxAllow5) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode6(string|array<string> $ArcdTaxCode6) Return ChildArPaymentPending objects filtered by the ArcdTaxCode6 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode6(string|array<string> $ArcdTaxCode6) Return ChildArPaymentPending objects filtered by the ArcdTaxCode6 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow6(string|array<string> $ArcdTaxAllow6) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow6 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow6(string|array<string> $ArcdTaxAllow6) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode7(string|array<string> $ArcdTaxCode7) Return ChildArPaymentPending objects filtered by the ArcdTaxCode7 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode7(string|array<string> $ArcdTaxCode7) Return ChildArPaymentPending objects filtered by the ArcdTaxCode7 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow7(string|array<string> $ArcdTaxAllow7) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow7 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow7(string|array<string> $ArcdTaxAllow7) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode8(string|array<string> $ArcdTaxCode8) Return ChildArPaymentPending objects filtered by the ArcdTaxCode8 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode8(string|array<string> $ArcdTaxCode8) Return ChildArPaymentPending objects filtered by the ArcdTaxCode8 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow8(string|array<string> $ArcdTaxAllow8) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow8 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow8(string|array<string> $ArcdTaxAllow8) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxcode9(string|array<string> $ArcdTaxCode9) Return ChildArPaymentPending objects filtered by the ArcdTaxCode9 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxcode9(string|array<string> $ArcdTaxCode9) Return ChildArPaymentPending objects filtered by the ArcdTaxCode9 column
 * @method     ChildArPaymentPending[]|Collection findByArcdtaxallow9(string|array<string> $ArcdTaxAllow9) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow9 column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdtaxallow9(string|array<string> $ArcdTaxAllow9) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPending[]|Collection findByArcdwriteoff(string|array<string> $ArcdWriteOff) Return ChildArPaymentPending objects filtered by the ArcdWriteOff column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdwriteoff(string|array<string> $ArcdWriteOff) Return ChildArPaymentPending objects filtered by the ArcdWriteOff column
 * @method     ChildArPaymentPending[]|Collection findByArcdwriteoffreas(string|array<string> $ArcdWriteOffReas) Return ChildArPaymentPending objects filtered by the ArcdWriteOffReas column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdwriteoffreas(string|array<string> $ArcdWriteOffReas) Return ChildArPaymentPending objects filtered by the ArcdWriteOffReas column
 * @method     ChildArPaymentPending[]|Collection findByArcdcomrate(string|array<string> $ArcdComRate) Return ChildArPaymentPending objects filtered by the ArcdComRate column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdcomrate(string|array<string> $ArcdComRate) Return ChildArPaymentPending objects filtered by the ArcdComRate column
 * @method     ChildArPaymentPending[]|Collection findByArcdsalesamt(string|array<string> $ArcdSalesAmt) Return ChildArPaymentPending objects filtered by the ArcdSalesAmt column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdsalesamt(string|array<string> $ArcdSalesAmt) Return ChildArPaymentPending objects filtered by the ArcdSalesAmt column
 * @method     ChildArPaymentPending[]|Collection findByArcdpaydate(string|array<string> $ArcdPayDate) Return ChildArPaymentPending objects filtered by the ArcdPayDate column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdpaydate(string|array<string> $ArcdPayDate) Return ChildArPaymentPending objects filtered by the ArcdPayDate column
 * @method     ChildArPaymentPending[]|Collection findByArcdglpd(int|array<int> $ArcdGlPd) Return ChildArPaymentPending objects filtered by the ArcdGlPd column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdglpd(int|array<int> $ArcdGlPd) Return ChildArPaymentPending objects filtered by the ArcdGlPd column
 * @method     ChildArPaymentPending[]|Collection findByArcdref(string|array<string> $ArcdRef) Return ChildArPaymentPending objects filtered by the ArcdRef column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByArcdref(string|array<string> $ArcdRef) Return ChildArPaymentPending objects filtered by the ArcdRef column
 * @method     ChildArPaymentPending[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArPaymentPending objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArPaymentPending objects filtered by the DateUpdtd column
 * @method     ChildArPaymentPending[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArPaymentPending objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArPaymentPending objects filtered by the TimeUpdtd column
 * @method     ChildArPaymentPending[]|Collection findByDummy(string|array<string> $dummy) Return ChildArPaymentPending objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArPaymentPending> findByDummy(string|array<string> $dummy) Return ChildArPaymentPending objects filtered by the dummy column
 *
 * @method     ChildArPaymentPending[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArPaymentPending> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArPaymentPendingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArPaymentPendingQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArPaymentPending', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArPaymentPendingQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArPaymentPendingQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArPaymentPendingQuery) {
            return $criteria;
        }
        $query = new ChildArPaymentPendingQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArcdInvNbr, $ArcdInvSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArPaymentPending|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArPaymentPendingTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildArPaymentPending A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArcdInvNbr, ArcdInvSeq, ArcdPaid, ArcdInvDate, ArcdDueDate, ArcdChkNbr, ArcdAmtDue, ArcdAmtPaid, ArcdDiscPaid, ArcdCashAcct, ArcdCredAcct, ArcdTermCode, ArcdFrtAllow, ArcdCustPo, ArcdOrdrNbr, ArcdTaxCode1, ArcdTaxAllow1, ArcdTaxCode2, ArcdTaxAllow2, ArcdTaxCode3, ArcdTaxAllow3, ArcdTaxCode4, ArcdTaxAllow4, ArcdTaxCode5, ArcdTaxAllow5, ArcdTaxCode6, ArcdTaxAllow6, ArcdTaxCode7, ArcdTaxAllow7, ArcdTaxCode8, ArcdTaxAllow8, ArcdTaxCode9, ArcdTaxAllow9, ArcdWriteOff, ArcdWriteOffReas, ArcdComRate, ArcdSalesAmt, ArcdPayDate, ArcdGlPd, ArcdRef, DateUpdtd, TimeUpdtd, dummy FROM ar_cash_det WHERE ArcuCustId = :p0 AND ArcdInvNbr = :p1 AND ArcdInvSeq = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildArPaymentPending $obj */
            $obj = new ChildArPaymentPending();
            $obj->hydrate($row);
            ArPaymentPendingTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildArPaymentPending|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $key[2], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ArPaymentPendingTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArPaymentPendingTableMap::COL_ARCDINVNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

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

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdinvnbr('fooValue');   // WHERE ArcdInvNbr = 'fooValue'
     * $query->filterByArcdinvnbr('%fooValue%', Criteria::LIKE); // WHERE ArcdInvNbr LIKE '%fooValue%'
     * $query->filterByArcdinvnbr(['foo', 'bar']); // WHERE ArcdInvNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdinvnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdinvnbr($arcdinvnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVNBR, $arcdinvnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdInvSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdinvseq(1234); // WHERE ArcdInvSeq = 1234
     * $query->filterByArcdinvseq(array(12, 34)); // WHERE ArcdInvSeq IN (12, 34)
     * $query->filterByArcdinvseq(array('min' => 12)); // WHERE ArcdInvSeq > 12
     * </code>
     *
     * @param mixed $arcdinvseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdinvseq($arcdinvseq = null, ?string $comparison = null)
    {
        if (is_array($arcdinvseq)) {
            $useMinMax = false;
            if (isset($arcdinvseq['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $arcdinvseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdinvseq['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $arcdinvseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $arcdinvseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdpaid('fooValue');   // WHERE ArcdPaid = 'fooValue'
     * $query->filterByArcdpaid('%fooValue%', Criteria::LIKE); // WHERE ArcdPaid LIKE '%fooValue%'
     * $query->filterByArcdpaid(['foo', 'bar']); // WHERE ArcdPaid IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdpaid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdpaid($arcdpaid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdpaid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDPAID, $arcdpaid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdinvdate('fooValue');   // WHERE ArcdInvDate = 'fooValue'
     * $query->filterByArcdinvdate('%fooValue%', Criteria::LIKE); // WHERE ArcdInvDate LIKE '%fooValue%'
     * $query->filterByArcdinvdate(['foo', 'bar']); // WHERE ArcdInvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdinvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdinvdate($arcdinvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVDATE, $arcdinvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdDueDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdduedate('fooValue');   // WHERE ArcdDueDate = 'fooValue'
     * $query->filterByArcdduedate('%fooValue%', Criteria::LIKE); // WHERE ArcdDueDate LIKE '%fooValue%'
     * $query->filterByArcdduedate(['foo', 'bar']); // WHERE ArcdDueDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdduedate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdduedate($arcdduedate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdduedate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDUEDATE, $arcdduedate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdChkNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdchknbr('fooValue');   // WHERE ArcdChkNbr = 'fooValue'
     * $query->filterByArcdchknbr('%fooValue%', Criteria::LIKE); // WHERE ArcdChkNbr LIKE '%fooValue%'
     * $query->filterByArcdchknbr(['foo', 'bar']); // WHERE ArcdChkNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdchknbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdchknbr($arcdchknbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdchknbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCHKNBR, $arcdchknbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdAmtDue column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdamtdue(1234); // WHERE ArcdAmtDue = 1234
     * $query->filterByArcdamtdue(array(12, 34)); // WHERE ArcdAmtDue IN (12, 34)
     * $query->filterByArcdamtdue(array('min' => 12)); // WHERE ArcdAmtDue > 12
     * </code>
     *
     * @param mixed $arcdamtdue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdamtdue($arcdamtdue = null, ?string $comparison = null)
    {
        if (is_array($arcdamtdue)) {
            $useMinMax = false;
            if (isset($arcdamtdue['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTDUE, $arcdamtdue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdamtdue['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTDUE, $arcdamtdue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTDUE, $arcdamtdue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdAmtPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdamtpaid(1234); // WHERE ArcdAmtPaid = 1234
     * $query->filterByArcdamtpaid(array(12, 34)); // WHERE ArcdAmtPaid IN (12, 34)
     * $query->filterByArcdamtpaid(array('min' => 12)); // WHERE ArcdAmtPaid > 12
     * </code>
     *
     * @param mixed $arcdamtpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdamtpaid($arcdamtpaid = null, ?string $comparison = null)
    {
        if (is_array($arcdamtpaid)) {
            $useMinMax = false;
            if (isset($arcdamtpaid['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTPAID, $arcdamtpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdamtpaid['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTPAID, $arcdamtpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTPAID, $arcdamtpaid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdDiscPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArcddiscpaid(1234); // WHERE ArcdDiscPaid = 1234
     * $query->filterByArcddiscpaid(array(12, 34)); // WHERE ArcdDiscPaid IN (12, 34)
     * $query->filterByArcddiscpaid(array('min' => 12)); // WHERE ArcdDiscPaid > 12
     * </code>
     *
     * @param mixed $arcddiscpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcddiscpaid($arcddiscpaid = null, ?string $comparison = null)
    {
        if (is_array($arcddiscpaid)) {
            $useMinMax = false;
            if (isset($arcddiscpaid['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDISCPAID, $arcddiscpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcddiscpaid['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDISCPAID, $arcddiscpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDISCPAID, $arcddiscpaid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcashacct('fooValue');   // WHERE ArcdCashAcct = 'fooValue'
     * $query->filterByArcdcashacct('%fooValue%', Criteria::LIKE); // WHERE ArcdCashAcct LIKE '%fooValue%'
     * $query->filterByArcdcashacct(['foo', 'bar']); // WHERE ArcdCashAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdcashacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdcashacct($arcdcashacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCASHACCT, $arcdcashacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcredacct('fooValue');   // WHERE ArcdCredAcct = 'fooValue'
     * $query->filterByArcdcredacct('%fooValue%', Criteria::LIKE); // WHERE ArcdCredAcct LIKE '%fooValue%'
     * $query->filterByArcdcredacct(['foo', 'bar']); // WHERE ArcdCredAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdcredacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdcredacct($arcdcredacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCREDACCT, $arcdcredacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtermcode('fooValue');   // WHERE ArcdTermCode = 'fooValue'
     * $query->filterByArcdtermcode('%fooValue%', Criteria::LIKE); // WHERE ArcdTermCode LIKE '%fooValue%'
     * $query->filterByArcdtermcode(['foo', 'bar']); // WHERE ArcdTermCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtermcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtermcode($arcdtermcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTERMCODE, $arcdtermcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdFrtAllow column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdfrtallow(1234); // WHERE ArcdFrtAllow = 1234
     * $query->filterByArcdfrtallow(array(12, 34)); // WHERE ArcdFrtAllow IN (12, 34)
     * $query->filterByArcdfrtallow(array('min' => 12)); // WHERE ArcdFrtAllow > 12
     * </code>
     *
     * @param mixed $arcdfrtallow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdfrtallow($arcdfrtallow = null, ?string $comparison = null)
    {
        if (is_array($arcdfrtallow)) {
            $useMinMax = false;
            if (isset($arcdfrtallow['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDFRTALLOW, $arcdfrtallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdfrtallow['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDFRTALLOW, $arcdfrtallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDFRTALLOW, $arcdfrtallow, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcustpo('fooValue');   // WHERE ArcdCustPo = 'fooValue'
     * $query->filterByArcdcustpo('%fooValue%', Criteria::LIKE); // WHERE ArcdCustPo LIKE '%fooValue%'
     * $query->filterByArcdcustpo(['foo', 'bar']); // WHERE ArcdCustPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdcustpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdcustpo($arcdcustpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCUSTPO, $arcdcustpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdordrnbr('fooValue');   // WHERE ArcdOrdrNbr = 'fooValue'
     * $query->filterByArcdordrnbr('%fooValue%', Criteria::LIKE); // WHERE ArcdOrdrNbr LIKE '%fooValue%'
     * $query->filterByArcdordrnbr(['foo', 'bar']); // WHERE ArcdOrdrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdordrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdordrnbr($arcdordrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDORDRNBR, $arcdordrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode1('fooValue');   // WHERE ArcdTaxCode1 = 'fooValue'
     * $query->filterByArcdtaxcode1('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode1 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode1(['foo', 'bar']); // WHERE ArcdTaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode1($arcdtaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE1, $arcdtaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow1(1234); // WHERE ArcdTaxAllow1 = 1234
     * $query->filterByArcdtaxallow1(array(12, 34)); // WHERE ArcdTaxAllow1 IN (12, 34)
     * $query->filterByArcdtaxallow1(array('min' => 12)); // WHERE ArcdTaxAllow1 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow1($arcdtaxallow1 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow1)) {
            $useMinMax = false;
            if (isset($arcdtaxallow1['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, $arcdtaxallow1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow1['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, $arcdtaxallow1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, $arcdtaxallow1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode2('fooValue');   // WHERE ArcdTaxCode2 = 'fooValue'
     * $query->filterByArcdtaxcode2('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode2 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode2(['foo', 'bar']); // WHERE ArcdTaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode2($arcdtaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE2, $arcdtaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow2(1234); // WHERE ArcdTaxAllow2 = 1234
     * $query->filterByArcdtaxallow2(array(12, 34)); // WHERE ArcdTaxAllow2 IN (12, 34)
     * $query->filterByArcdtaxallow2(array('min' => 12)); // WHERE ArcdTaxAllow2 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow2($arcdtaxallow2 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow2)) {
            $useMinMax = false;
            if (isset($arcdtaxallow2['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, $arcdtaxallow2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow2['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, $arcdtaxallow2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, $arcdtaxallow2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode3('fooValue');   // WHERE ArcdTaxCode3 = 'fooValue'
     * $query->filterByArcdtaxcode3('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode3 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode3(['foo', 'bar']); // WHERE ArcdTaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode3($arcdtaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE3, $arcdtaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow3(1234); // WHERE ArcdTaxAllow3 = 1234
     * $query->filterByArcdtaxallow3(array(12, 34)); // WHERE ArcdTaxAllow3 IN (12, 34)
     * $query->filterByArcdtaxallow3(array('min' => 12)); // WHERE ArcdTaxAllow3 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow3($arcdtaxallow3 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow3)) {
            $useMinMax = false;
            if (isset($arcdtaxallow3['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, $arcdtaxallow3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow3['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, $arcdtaxallow3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, $arcdtaxallow3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode4('fooValue');   // WHERE ArcdTaxCode4 = 'fooValue'
     * $query->filterByArcdtaxcode4('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode4 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode4(['foo', 'bar']); // WHERE ArcdTaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode4($arcdtaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE4, $arcdtaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow4(1234); // WHERE ArcdTaxAllow4 = 1234
     * $query->filterByArcdtaxallow4(array(12, 34)); // WHERE ArcdTaxAllow4 IN (12, 34)
     * $query->filterByArcdtaxallow4(array('min' => 12)); // WHERE ArcdTaxAllow4 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow4($arcdtaxallow4 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow4)) {
            $useMinMax = false;
            if (isset($arcdtaxallow4['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, $arcdtaxallow4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow4['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, $arcdtaxallow4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, $arcdtaxallow4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode5('fooValue');   // WHERE ArcdTaxCode5 = 'fooValue'
     * $query->filterByArcdtaxcode5('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode5 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode5(['foo', 'bar']); // WHERE ArcdTaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode5($arcdtaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE5, $arcdtaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow5(1234); // WHERE ArcdTaxAllow5 = 1234
     * $query->filterByArcdtaxallow5(array(12, 34)); // WHERE ArcdTaxAllow5 IN (12, 34)
     * $query->filterByArcdtaxallow5(array('min' => 12)); // WHERE ArcdTaxAllow5 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow5($arcdtaxallow5 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow5)) {
            $useMinMax = false;
            if (isset($arcdtaxallow5['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, $arcdtaxallow5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow5['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, $arcdtaxallow5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, $arcdtaxallow5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode6('fooValue');   // WHERE ArcdTaxCode6 = 'fooValue'
     * $query->filterByArcdtaxcode6('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode6 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode6(['foo', 'bar']); // WHERE ArcdTaxCode6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode6($arcdtaxcode6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE6, $arcdtaxcode6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow6(1234); // WHERE ArcdTaxAllow6 = 1234
     * $query->filterByArcdtaxallow6(array(12, 34)); // WHERE ArcdTaxAllow6 IN (12, 34)
     * $query->filterByArcdtaxallow6(array('min' => 12)); // WHERE ArcdTaxAllow6 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow6($arcdtaxallow6 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow6)) {
            $useMinMax = false;
            if (isset($arcdtaxallow6['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, $arcdtaxallow6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow6['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, $arcdtaxallow6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, $arcdtaxallow6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode7('fooValue');   // WHERE ArcdTaxCode7 = 'fooValue'
     * $query->filterByArcdtaxcode7('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode7 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode7(['foo', 'bar']); // WHERE ArcdTaxCode7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode7($arcdtaxcode7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE7, $arcdtaxcode7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow7(1234); // WHERE ArcdTaxAllow7 = 1234
     * $query->filterByArcdtaxallow7(array(12, 34)); // WHERE ArcdTaxAllow7 IN (12, 34)
     * $query->filterByArcdtaxallow7(array('min' => 12)); // WHERE ArcdTaxAllow7 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow7($arcdtaxallow7 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow7)) {
            $useMinMax = false;
            if (isset($arcdtaxallow7['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, $arcdtaxallow7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow7['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, $arcdtaxallow7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, $arcdtaxallow7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode8('fooValue');   // WHERE ArcdTaxCode8 = 'fooValue'
     * $query->filterByArcdtaxcode8('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode8 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode8(['foo', 'bar']); // WHERE ArcdTaxCode8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode8($arcdtaxcode8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE8, $arcdtaxcode8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow8(1234); // WHERE ArcdTaxAllow8 = 1234
     * $query->filterByArcdtaxallow8(array(12, 34)); // WHERE ArcdTaxAllow8 IN (12, 34)
     * $query->filterByArcdtaxallow8(array('min' => 12)); // WHERE ArcdTaxAllow8 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow8($arcdtaxallow8 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow8)) {
            $useMinMax = false;
            if (isset($arcdtaxallow8['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, $arcdtaxallow8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow8['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, $arcdtaxallow8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, $arcdtaxallow8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode9('fooValue');   // WHERE ArcdTaxCode9 = 'fooValue'
     * $query->filterByArcdtaxcode9('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode9 LIKE '%fooValue%'
     * $query->filterByArcdtaxcode9(['foo', 'bar']); // WHERE ArcdTaxCode9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdtaxcode9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxcode9($arcdtaxcode9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE9, $arcdtaxcode9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdTaxAllow9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxallow9(1234); // WHERE ArcdTaxAllow9 = 1234
     * $query->filterByArcdtaxallow9(array(12, 34)); // WHERE ArcdTaxAllow9 IN (12, 34)
     * $query->filterByArcdtaxallow9(array('min' => 12)); // WHERE ArcdTaxAllow9 > 12
     * </code>
     *
     * @param mixed $arcdtaxallow9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdtaxallow9($arcdtaxallow9 = null, ?string $comparison = null)
    {
        if (is_array($arcdtaxallow9)) {
            $useMinMax = false;
            if (isset($arcdtaxallow9['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, $arcdtaxallow9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdtaxallow9['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, $arcdtaxallow9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, $arcdtaxallow9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdWriteOff column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdwriteoff(1234); // WHERE ArcdWriteOff = 1234
     * $query->filterByArcdwriteoff(array(12, 34)); // WHERE ArcdWriteOff IN (12, 34)
     * $query->filterByArcdwriteoff(array('min' => 12)); // WHERE ArcdWriteOff > 12
     * </code>
     *
     * @param mixed $arcdwriteoff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdwriteoff($arcdwriteoff = null, ?string $comparison = null)
    {
        if (is_array($arcdwriteoff)) {
            $useMinMax = false;
            if (isset($arcdwriteoff['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFF, $arcdwriteoff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdwriteoff['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFF, $arcdwriteoff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFF, $arcdwriteoff, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdWriteOffReas column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdwriteoffreas('fooValue');   // WHERE ArcdWriteOffReas = 'fooValue'
     * $query->filterByArcdwriteoffreas('%fooValue%', Criteria::LIKE); // WHERE ArcdWriteOffReas LIKE '%fooValue%'
     * $query->filterByArcdwriteoffreas(['foo', 'bar']); // WHERE ArcdWriteOffReas IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdwriteoffreas The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdwriteoffreas($arcdwriteoffreas = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdwriteoffreas)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS, $arcdwriteoffreas, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdComRate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcomrate(1234); // WHERE ArcdComRate = 1234
     * $query->filterByArcdcomrate(array(12, 34)); // WHERE ArcdComRate IN (12, 34)
     * $query->filterByArcdcomrate(array('min' => 12)); // WHERE ArcdComRate > 12
     * </code>
     *
     * @param mixed $arcdcomrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdcomrate($arcdcomrate = null, ?string $comparison = null)
    {
        if (is_array($arcdcomrate)) {
            $useMinMax = false;
            if (isset($arcdcomrate['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCOMRATE, $arcdcomrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdcomrate['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCOMRATE, $arcdcomrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCOMRATE, $arcdcomrate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdSalesAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdsalesamt(1234); // WHERE ArcdSalesAmt = 1234
     * $query->filterByArcdsalesamt(array(12, 34)); // WHERE ArcdSalesAmt IN (12, 34)
     * $query->filterByArcdsalesamt(array('min' => 12)); // WHERE ArcdSalesAmt > 12
     * </code>
     *
     * @param mixed $arcdsalesamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdsalesamt($arcdsalesamt = null, ?string $comparison = null)
    {
        if (is_array($arcdsalesamt)) {
            $useMinMax = false;
            if (isset($arcdsalesamt['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDSALESAMT, $arcdsalesamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdsalesamt['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDSALESAMT, $arcdsalesamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDSALESAMT, $arcdsalesamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdPayDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdpaydate('fooValue');   // WHERE ArcdPayDate = 'fooValue'
     * $query->filterByArcdpaydate('%fooValue%', Criteria::LIKE); // WHERE ArcdPayDate LIKE '%fooValue%'
     * $query->filterByArcdpaydate(['foo', 'bar']); // WHERE ArcdPayDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdpaydate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdpaydate($arcdpaydate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdpaydate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDPAYDATE, $arcdpaydate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdGlPd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdglpd(1234); // WHERE ArcdGlPd = 1234
     * $query->filterByArcdglpd(array(12, 34)); // WHERE ArcdGlPd IN (12, 34)
     * $query->filterByArcdglpd(array('min' => 12)); // WHERE ArcdGlPd > 12
     * </code>
     *
     * @param mixed $arcdglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdglpd($arcdglpd = null, ?string $comparison = null)
    {
        if (is_array($arcdglpd)) {
            $useMinMax = false;
            if (isset($arcdglpd['min'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDGLPD, $arcdglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcdglpd['max'])) {
                $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDGLPD, $arcdglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDGLPD, $arcdglpd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdref('fooValue');   // WHERE ArcdRef = 'fooValue'
     * $query->filterByArcdref('%fooValue%', Criteria::LIKE); // WHERE ArcdRef LIKE '%fooValue%'
     * $query->filterByArcdref(['foo', 'bar']); // WHERE ArcdRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcdref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcdref($arcdref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDREF, $arcdref, $comparison);

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

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArPaymentPendingTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
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
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

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
     * Filter the query by a related \ArCashHead object
     *
     * @param \ArCashHead|ObjectCollection $arCashHead The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArCashHead($arCashHead, ?string $comparison = null)
    {
        if ($arCashHead instanceof \ArCashHead) {
            return $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arCashHead->getArcucustid(), $comparison);
        } elseif ($arCashHead instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arCashHead->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByArCashHead() only accepts arguments of type \ArCashHead or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ArCashHead relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinArCashHead(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ArCashHead');

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
            $this->addJoinObject($join, 'ArCashHead');
        }

        return $this;
    }

    /**
     * Use the ArCashHead relation ArCashHead object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ArCashHeadQuery A secondary query class using the current class as primary query
     */
    public function useArCashHeadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArCashHead($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ArCashHead', '\ArCashHeadQuery');
    }

    /**
     * Use the ArCashHead relation ArCashHead object
     *
     * @param callable(\ArCashHeadQuery):\ArCashHeadQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withArCashHeadQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useArCashHeadQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ArCashHead table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ArCashHeadQuery The inner query object of the EXISTS statement
     */
    public function useArCashHeadExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ArCashHeadQuery */
        $q = $this->useExistsQuery('ArCashHead', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ArCashHead table for a NOT EXISTS query.
     *
     * @see useArCashHeadExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ArCashHeadQuery The inner query object of the NOT EXISTS statement
     */
    public function useArCashHeadNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ArCashHeadQuery */
        $q = $this->useExistsQuery('ArCashHead', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ArCashHead table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ArCashHeadQuery The inner query object of the IN statement
     */
    public function useInArCashHeadQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ArCashHeadQuery */
        $q = $this->useInQuery('ArCashHead', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ArCashHead table for a NOT IN query.
     *
     * @see useArCashHeadInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ArCashHeadQuery The inner query object of the NOT IN statement
     */
    public function useNotInArCashHeadQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ArCashHeadQuery */
        $q = $this->useInQuery('ArCashHead', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArPaymentPending $arPaymentPending Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arPaymentPending = null)
    {
        if ($arPaymentPending) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArPaymentPendingTableMap::COL_ARCUCUSTID), $arPaymentPending->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArPaymentPendingTableMap::COL_ARCDINVNBR), $arPaymentPending->getArcdinvnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ArPaymentPendingTableMap::COL_ARCDINVSEQ), $arPaymentPending->getArcdinvseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cash_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArPaymentPendingTableMap::clearInstancePool();
            ArPaymentPendingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArPaymentPendingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArPaymentPendingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArPaymentPendingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArPaymentPendingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
