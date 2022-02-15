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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cash_det' table.
 *
 *
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
 * @method     ChildArPaymentPending findOne(ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query
 * @method     ChildArPaymentPending findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query, or a new ChildArPaymentPending object populated from the query conditions when no match is found
 *
 * @method     ChildArPaymentPending findOneByArcucustid(string $ArcuCustId) Return the first ChildArPaymentPending filtered by the ArcuCustId column
 * @method     ChildArPaymentPending findOneByArcdinvnbr(string $ArcdInvNbr) Return the first ChildArPaymentPending filtered by the ArcdInvNbr column
 * @method     ChildArPaymentPending findOneByArcdinvseq(int $ArcdInvSeq) Return the first ChildArPaymentPending filtered by the ArcdInvSeq column
 * @method     ChildArPaymentPending findOneByArcdpaid(string $ArcdPaid) Return the first ChildArPaymentPending filtered by the ArcdPaid column
 * @method     ChildArPaymentPending findOneByArcdinvdate(string $ArcdInvDate) Return the first ChildArPaymentPending filtered by the ArcdInvDate column
 * @method     ChildArPaymentPending findOneByArcdduedate(string $ArcdDueDate) Return the first ChildArPaymentPending filtered by the ArcdDueDate column
 * @method     ChildArPaymentPending findOneByArcdchknbr(string $ArcdChkNbr) Return the first ChildArPaymentPending filtered by the ArcdChkNbr column
 * @method     ChildArPaymentPending findOneByArcdamtdue(string $ArcdAmtDue) Return the first ChildArPaymentPending filtered by the ArcdAmtDue column
 * @method     ChildArPaymentPending findOneByArcdamtpaid(string $ArcdAmtPaid) Return the first ChildArPaymentPending filtered by the ArcdAmtPaid column
 * @method     ChildArPaymentPending findOneByArcddiscpaid(string $ArcdDiscPaid) Return the first ChildArPaymentPending filtered by the ArcdDiscPaid column
 * @method     ChildArPaymentPending findOneByArcdcashacct(string $ArcdCashAcct) Return the first ChildArPaymentPending filtered by the ArcdCashAcct column
 * @method     ChildArPaymentPending findOneByArcdcredacct(string $ArcdCredAcct) Return the first ChildArPaymentPending filtered by the ArcdCredAcct column
 * @method     ChildArPaymentPending findOneByArcdtermcode(string $ArcdTermCode) Return the first ChildArPaymentPending filtered by the ArcdTermCode column
 * @method     ChildArPaymentPending findOneByArcdfrtallow(string $ArcdFrtAllow) Return the first ChildArPaymentPending filtered by the ArcdFrtAllow column
 * @method     ChildArPaymentPending findOneByArcdcustpo(string $ArcdCustPo) Return the first ChildArPaymentPending filtered by the ArcdCustPo column
 * @method     ChildArPaymentPending findOneByArcdordrnbr(string $ArcdOrdrNbr) Return the first ChildArPaymentPending filtered by the ArcdOrdrNbr column
 * @method     ChildArPaymentPending findOneByArcdtaxcode1(string $ArcdTaxCode1) Return the first ChildArPaymentPending filtered by the ArcdTaxCode1 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow1(string $ArcdTaxAllow1) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode2(string $ArcdTaxCode2) Return the first ChildArPaymentPending filtered by the ArcdTaxCode2 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow2(string $ArcdTaxAllow2) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode3(string $ArcdTaxCode3) Return the first ChildArPaymentPending filtered by the ArcdTaxCode3 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow3(string $ArcdTaxAllow3) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode4(string $ArcdTaxCode4) Return the first ChildArPaymentPending filtered by the ArcdTaxCode4 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow4(string $ArcdTaxAllow4) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode5(string $ArcdTaxCode5) Return the first ChildArPaymentPending filtered by the ArcdTaxCode5 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow5(string $ArcdTaxAllow5) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode6(string $ArcdTaxCode6) Return the first ChildArPaymentPending filtered by the ArcdTaxCode6 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow6(string $ArcdTaxAllow6) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode7(string $ArcdTaxCode7) Return the first ChildArPaymentPending filtered by the ArcdTaxCode7 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow7(string $ArcdTaxAllow7) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode8(string $ArcdTaxCode8) Return the first ChildArPaymentPending filtered by the ArcdTaxCode8 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow8(string $ArcdTaxAllow8) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPending findOneByArcdtaxcode9(string $ArcdTaxCode9) Return the first ChildArPaymentPending filtered by the ArcdTaxCode9 column
 * @method     ChildArPaymentPending findOneByArcdtaxallow9(string $ArcdTaxAllow9) Return the first ChildArPaymentPending filtered by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPending findOneByArcdwriteoff(string $ArcdWriteOff) Return the first ChildArPaymentPending filtered by the ArcdWriteOff column
 * @method     ChildArPaymentPending findOneByArcdwriteoffreas(string $ArcdWriteOffReas) Return the first ChildArPaymentPending filtered by the ArcdWriteOffReas column
 * @method     ChildArPaymentPending findOneByArcdcomrate(string $ArcdComRate) Return the first ChildArPaymentPending filtered by the ArcdComRate column
 * @method     ChildArPaymentPending findOneByArcdsalesamt(string $ArcdSalesAmt) Return the first ChildArPaymentPending filtered by the ArcdSalesAmt column
 * @method     ChildArPaymentPending findOneByArcdpaydate(string $ArcdPayDate) Return the first ChildArPaymentPending filtered by the ArcdPayDate column
 * @method     ChildArPaymentPending findOneByArcdglpd(int $ArcdGlPd) Return the first ChildArPaymentPending filtered by the ArcdGlPd column
 * @method     ChildArPaymentPending findOneByArcdref(string $ArcdRef) Return the first ChildArPaymentPending filtered by the ArcdRef column
 * @method     ChildArPaymentPending findOneByDateupdtd(string $DateUpdtd) Return the first ChildArPaymentPending filtered by the DateUpdtd column
 * @method     ChildArPaymentPending findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArPaymentPending filtered by the TimeUpdtd column
 * @method     ChildArPaymentPending findOneByDummy(string $dummy) Return the first ChildArPaymentPending filtered by the dummy column *

 * @method     ChildArPaymentPending requirePk($key, ConnectionInterface $con = null) Return the ChildArPaymentPending by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArPaymentPending requireOne(ConnectionInterface $con = null) Return the first ChildArPaymentPending matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildArPaymentPending[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArPaymentPending objects based on current ModelCriteria
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArPaymentPending objects filtered by the ArcuCustId column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdinvnbr(string $ArcdInvNbr) Return ChildArPaymentPending objects filtered by the ArcdInvNbr column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdinvseq(int $ArcdInvSeq) Return ChildArPaymentPending objects filtered by the ArcdInvSeq column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdpaid(string $ArcdPaid) Return ChildArPaymentPending objects filtered by the ArcdPaid column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdinvdate(string $ArcdInvDate) Return ChildArPaymentPending objects filtered by the ArcdInvDate column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdduedate(string $ArcdDueDate) Return ChildArPaymentPending objects filtered by the ArcdDueDate column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdchknbr(string $ArcdChkNbr) Return ChildArPaymentPending objects filtered by the ArcdChkNbr column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdamtdue(string $ArcdAmtDue) Return ChildArPaymentPending objects filtered by the ArcdAmtDue column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdamtpaid(string $ArcdAmtPaid) Return ChildArPaymentPending objects filtered by the ArcdAmtPaid column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcddiscpaid(string $ArcdDiscPaid) Return ChildArPaymentPending objects filtered by the ArcdDiscPaid column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdcashacct(string $ArcdCashAcct) Return ChildArPaymentPending objects filtered by the ArcdCashAcct column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdcredacct(string $ArcdCredAcct) Return ChildArPaymentPending objects filtered by the ArcdCredAcct column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtermcode(string $ArcdTermCode) Return ChildArPaymentPending objects filtered by the ArcdTermCode column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdfrtallow(string $ArcdFrtAllow) Return ChildArPaymentPending objects filtered by the ArcdFrtAllow column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdcustpo(string $ArcdCustPo) Return ChildArPaymentPending objects filtered by the ArcdCustPo column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdordrnbr(string $ArcdOrdrNbr) Return ChildArPaymentPending objects filtered by the ArcdOrdrNbr column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode1(string $ArcdTaxCode1) Return ChildArPaymentPending objects filtered by the ArcdTaxCode1 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow1(string $ArcdTaxAllow1) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow1 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode2(string $ArcdTaxCode2) Return ChildArPaymentPending objects filtered by the ArcdTaxCode2 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow2(string $ArcdTaxAllow2) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow2 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode3(string $ArcdTaxCode3) Return ChildArPaymentPending objects filtered by the ArcdTaxCode3 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow3(string $ArcdTaxAllow3) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow3 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode4(string $ArcdTaxCode4) Return ChildArPaymentPending objects filtered by the ArcdTaxCode4 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow4(string $ArcdTaxAllow4) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow4 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode5(string $ArcdTaxCode5) Return ChildArPaymentPending objects filtered by the ArcdTaxCode5 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow5(string $ArcdTaxAllow5) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow5 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode6(string $ArcdTaxCode6) Return ChildArPaymentPending objects filtered by the ArcdTaxCode6 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow6(string $ArcdTaxAllow6) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow6 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode7(string $ArcdTaxCode7) Return ChildArPaymentPending objects filtered by the ArcdTaxCode7 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow7(string $ArcdTaxAllow7) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow7 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode8(string $ArcdTaxCode8) Return ChildArPaymentPending objects filtered by the ArcdTaxCode8 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow8(string $ArcdTaxAllow8) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow8 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxcode9(string $ArcdTaxCode9) Return ChildArPaymentPending objects filtered by the ArcdTaxCode9 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdtaxallow9(string $ArcdTaxAllow9) Return ChildArPaymentPending objects filtered by the ArcdTaxAllow9 column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdwriteoff(string $ArcdWriteOff) Return ChildArPaymentPending objects filtered by the ArcdWriteOff column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdwriteoffreas(string $ArcdWriteOffReas) Return ChildArPaymentPending objects filtered by the ArcdWriteOffReas column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdcomrate(string $ArcdComRate) Return ChildArPaymentPending objects filtered by the ArcdComRate column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdsalesamt(string $ArcdSalesAmt) Return ChildArPaymentPending objects filtered by the ArcdSalesAmt column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdpaydate(string $ArcdPayDate) Return ChildArPaymentPending objects filtered by the ArcdPayDate column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdglpd(int $ArcdGlPd) Return ChildArPaymentPending objects filtered by the ArcdGlPd column
 * @method     ChildArPaymentPending[]|ObjectCollection findByArcdref(string $ArcdRef) Return ChildArPaymentPending objects filtered by the ArcdRef column
 * @method     ChildArPaymentPending[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArPaymentPending objects filtered by the DateUpdtd column
 * @method     ChildArPaymentPending[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArPaymentPending objects filtered by the TimeUpdtd column
 * @method     ChildArPaymentPending[]|ObjectCollection findByDummy(string $dummy) Return ChildArPaymentPending objects filtered by the dummy column
 * @method     ChildArPaymentPending[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArPaymentPendingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArPaymentPendingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArPaymentPending', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArPaymentPendingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArPaymentPendingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
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
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
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
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArcdInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdinvnbr('fooValue');   // WHERE ArcdInvNbr = 'fooValue'
     * $query->filterByArcdinvnbr('%fooValue%', Criteria::LIKE); // WHERE ArcdInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdinvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdinvnbr($arcdinvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVNBR, $arcdinvnbr, $comparison);
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
     * @param     mixed $arcdinvseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdinvseq($arcdinvseq = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVSEQ, $arcdinvseq, $comparison);
    }

    /**
     * Filter the query on the ArcdPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdpaid('fooValue');   // WHERE ArcdPaid = 'fooValue'
     * $query->filterByArcdpaid('%fooValue%', Criteria::LIKE); // WHERE ArcdPaid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdpaid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdpaid($arcdpaid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdpaid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDPAID, $arcdpaid, $comparison);
    }

    /**
     * Filter the query on the ArcdInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdinvdate('fooValue');   // WHERE ArcdInvDate = 'fooValue'
     * $query->filterByArcdinvdate('%fooValue%', Criteria::LIKE); // WHERE ArcdInvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdinvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdinvdate($arcdinvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdinvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDINVDATE, $arcdinvdate, $comparison);
    }

    /**
     * Filter the query on the ArcdDueDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdduedate('fooValue');   // WHERE ArcdDueDate = 'fooValue'
     * $query->filterByArcdduedate('%fooValue%', Criteria::LIKE); // WHERE ArcdDueDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdduedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdduedate($arcdduedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdduedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDUEDATE, $arcdduedate, $comparison);
    }

    /**
     * Filter the query on the ArcdChkNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdchknbr('fooValue');   // WHERE ArcdChkNbr = 'fooValue'
     * $query->filterByArcdchknbr('%fooValue%', Criteria::LIKE); // WHERE ArcdChkNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdchknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdchknbr($arcdchknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdchknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCHKNBR, $arcdchknbr, $comparison);
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
     * @param     mixed $arcdamtdue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdamtdue($arcdamtdue = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTDUE, $arcdamtdue, $comparison);
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
     * @param     mixed $arcdamtpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdamtpaid($arcdamtpaid = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDAMTPAID, $arcdamtpaid, $comparison);
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
     * @param     mixed $arcddiscpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcddiscpaid($arcddiscpaid = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDDISCPAID, $arcddiscpaid, $comparison);
    }

    /**
     * Filter the query on the ArcdCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcashacct('fooValue');   // WHERE ArcdCashAcct = 'fooValue'
     * $query->filterByArcdcashacct('%fooValue%', Criteria::LIKE); // WHERE ArcdCashAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdcashacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdcashacct($arcdcashacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCASHACCT, $arcdcashacct, $comparison);
    }

    /**
     * Filter the query on the ArcdCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcredacct('fooValue');   // WHERE ArcdCredAcct = 'fooValue'
     * $query->filterByArcdcredacct('%fooValue%', Criteria::LIKE); // WHERE ArcdCredAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdcredacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdcredacct($arcdcredacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCREDACCT, $arcdcredacct, $comparison);
    }

    /**
     * Filter the query on the ArcdTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtermcode('fooValue');   // WHERE ArcdTermCode = 'fooValue'
     * $query->filterByArcdtermcode('%fooValue%', Criteria::LIKE); // WHERE ArcdTermCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtermcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtermcode($arcdtermcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTERMCODE, $arcdtermcode, $comparison);
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
     * @param     mixed $arcdfrtallow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdfrtallow($arcdfrtallow = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDFRTALLOW, $arcdfrtallow, $comparison);
    }

    /**
     * Filter the query on the ArcdCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdcustpo('fooValue');   // WHERE ArcdCustPo = 'fooValue'
     * $query->filterByArcdcustpo('%fooValue%', Criteria::LIKE); // WHERE ArcdCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdcustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdcustpo($arcdcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCUSTPO, $arcdcustpo, $comparison);
    }

    /**
     * Filter the query on the ArcdOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdordrnbr('fooValue');   // WHERE ArcdOrdrNbr = 'fooValue'
     * $query->filterByArcdordrnbr('%fooValue%', Criteria::LIKE); // WHERE ArcdOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdordrnbr($arcdordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDORDRNBR, $arcdordrnbr, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode1('fooValue');   // WHERE ArcdTaxCode1 = 'fooValue'
     * $query->filterByArcdtaxcode1('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode1($arcdtaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE1, $arcdtaxcode1, $comparison);
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
     * @param     mixed $arcdtaxallow1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow1($arcdtaxallow1 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW1, $arcdtaxallow1, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode2('fooValue');   // WHERE ArcdTaxCode2 = 'fooValue'
     * $query->filterByArcdtaxcode2('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode2($arcdtaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE2, $arcdtaxcode2, $comparison);
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
     * @param     mixed $arcdtaxallow2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow2($arcdtaxallow2 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW2, $arcdtaxallow2, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode3('fooValue');   // WHERE ArcdTaxCode3 = 'fooValue'
     * $query->filterByArcdtaxcode3('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode3($arcdtaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE3, $arcdtaxcode3, $comparison);
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
     * @param     mixed $arcdtaxallow3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow3($arcdtaxallow3 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW3, $arcdtaxallow3, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode4('fooValue');   // WHERE ArcdTaxCode4 = 'fooValue'
     * $query->filterByArcdtaxcode4('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode4($arcdtaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE4, $arcdtaxcode4, $comparison);
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
     * @param     mixed $arcdtaxallow4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow4($arcdtaxallow4 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW4, $arcdtaxallow4, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode5('fooValue');   // WHERE ArcdTaxCode5 = 'fooValue'
     * $query->filterByArcdtaxcode5('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode5($arcdtaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE5, $arcdtaxcode5, $comparison);
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
     * @param     mixed $arcdtaxallow5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow5($arcdtaxallow5 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW5, $arcdtaxallow5, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode6('fooValue');   // WHERE ArcdTaxCode6 = 'fooValue'
     * $query->filterByArcdtaxcode6('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode6($arcdtaxcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE6, $arcdtaxcode6, $comparison);
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
     * @param     mixed $arcdtaxallow6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow6($arcdtaxallow6 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW6, $arcdtaxallow6, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode7('fooValue');   // WHERE ArcdTaxCode7 = 'fooValue'
     * $query->filterByArcdtaxcode7('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode7($arcdtaxcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE7, $arcdtaxcode7, $comparison);
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
     * @param     mixed $arcdtaxallow7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow7($arcdtaxallow7 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW7, $arcdtaxallow7, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode8('fooValue');   // WHERE ArcdTaxCode8 = 'fooValue'
     * $query->filterByArcdtaxcode8('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode8($arcdtaxcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE8, $arcdtaxcode8, $comparison);
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
     * @param     mixed $arcdtaxallow8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow8($arcdtaxallow8 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW8, $arcdtaxallow8, $comparison);
    }

    /**
     * Filter the query on the ArcdTaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdtaxcode9('fooValue');   // WHERE ArcdTaxCode9 = 'fooValue'
     * $query->filterByArcdtaxcode9('%fooValue%', Criteria::LIKE); // WHERE ArcdTaxCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdtaxcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxcode9($arcdtaxcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdtaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXCODE9, $arcdtaxcode9, $comparison);
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
     * @param     mixed $arcdtaxallow9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdtaxallow9($arcdtaxallow9 = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDTAXALLOW9, $arcdtaxallow9, $comparison);
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
     * @param     mixed $arcdwriteoff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdwriteoff($arcdwriteoff = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFF, $arcdwriteoff, $comparison);
    }

    /**
     * Filter the query on the ArcdWriteOffReas column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdwriteoffreas('fooValue');   // WHERE ArcdWriteOffReas = 'fooValue'
     * $query->filterByArcdwriteoffreas('%fooValue%', Criteria::LIKE); // WHERE ArcdWriteOffReas LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdwriteoffreas The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdwriteoffreas($arcdwriteoffreas = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdwriteoffreas)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDWRITEOFFREAS, $arcdwriteoffreas, $comparison);
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
     * @param     mixed $arcdcomrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdcomrate($arcdcomrate = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDCOMRATE, $arcdcomrate, $comparison);
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
     * @param     mixed $arcdsalesamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdsalesamt($arcdsalesamt = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDSALESAMT, $arcdsalesamt, $comparison);
    }

    /**
     * Filter the query on the ArcdPayDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdpaydate('fooValue');   // WHERE ArcdPayDate = 'fooValue'
     * $query->filterByArcdpaydate('%fooValue%', Criteria::LIKE); // WHERE ArcdPayDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdpaydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdpaydate($arcdpaydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdpaydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDPAYDATE, $arcdpaydate, $comparison);
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
     * @param     mixed $arcdglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdglpd($arcdglpd = null, $comparison = null)
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

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDGLPD, $arcdglpd, $comparison);
    }

    /**
     * Filter the query on the ArcdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByArcdref('fooValue');   // WHERE ArcdRef = 'fooValue'
     * $query->filterByArcdref('%fooValue%', Criteria::LIKE); // WHERE ArcdRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcdref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArcdref($arcdref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcdref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_ARCDREF, $arcdref, $comparison);
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
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArPaymentPendingTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
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
     * Filter the query by a related \ArCashHead object
     *
     * @param \ArCashHead|ObjectCollection $arCashHead The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function filterByArCashHead($arCashHead, $comparison = null)
    {
        if ($arCashHead instanceof \ArCashHead) {
            return $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arCashHead->getArcucustid(), $comparison);
        } elseif ($arCashHead instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArPaymentPendingTableMap::COL_ARCUCUSTID, $arCashHead->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByArCashHead() only accepts arguments of type \ArCashHead or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ArCashHead relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
     */
    public function joinArCashHead($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildArPaymentPending $arPaymentPending Object to remove from the list of results
     *
     * @return $this|ChildArPaymentPendingQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // ArPaymentPendingQuery
