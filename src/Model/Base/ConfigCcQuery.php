<?php

namespace Base;

use \ConfigCc as ChildConfigCc;
use \ConfigCcQuery as ChildConfigCcQuery;
use \Exception;
use \PDO;
use Map\ConfigCcTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'cc_config' table.
 *
 *
 *
 * @method     ChildConfigCcQuery orderByCctbconfkey($order = Criteria::ASC) Order by the CctbConfKey column
 * @method     ChildConfigCcQuery orderByCctbconfcredline($order = Criteria::ASC) Order by the CctbConfCredLine column
 * @method     ChildConfigCcQuery orderByCctbconfcredcols($order = Criteria::ASC) Order by the CctbConfCredCols column
 * @method     ChildConfigCcQuery orderByCctbconfnotestoredays($order = Criteria::ASC) Order by the CctbConfNoteStoreDays column
 * @method     ChildConfigCcQuery orderByCctbconfavgmonths($order = Criteria::ASC) Order by the CctbConfAvgMonths column
 * @method     ChildConfigCcQuery orderByCctbconfavgfinchrg($order = Criteria::ASC) Order by the CctbConfAvgFinChrg column
 * @method     ChildConfigCcQuery orderByCctbconfallterms($order = Criteria::ASC) Order by the CctbConfAllTerms column
 * @method     ChildConfigCcQuery orderByCctbconfterms01($order = Criteria::ASC) Order by the CctbConfTerms01 column
 * @method     ChildConfigCcQuery orderByCctbconfterms02($order = Criteria::ASC) Order by the CctbConfTerms02 column
 * @method     ChildConfigCcQuery orderByCctbconfterms03($order = Criteria::ASC) Order by the CctbConfTerms03 column
 * @method     ChildConfigCcQuery orderByCctbconfterms04($order = Criteria::ASC) Order by the CctbConfTerms04 column
 * @method     ChildConfigCcQuery orderByCctbconfterms05($order = Criteria::ASC) Order by the CctbConfTerms05 column
 * @method     ChildConfigCcQuery orderByCctbconfterms06($order = Criteria::ASC) Order by the CctbConfTerms06 column
 * @method     ChildConfigCcQuery orderByCctbconfterms07($order = Criteria::ASC) Order by the CctbConfTerms07 column
 * @method     ChildConfigCcQuery orderByCctbconfterms08($order = Criteria::ASC) Order by the CctbConfTerms08 column
 * @method     ChildConfigCcQuery orderByCctbconfterms09($order = Criteria::ASC) Order by the CctbConfTerms09 column
 * @method     ChildConfigCcQuery orderByCctbconfterms10($order = Criteria::ASC) Order by the CctbConfTerms10 column
 * @method     ChildConfigCcQuery orderByCctbconfterms11($order = Criteria::ASC) Order by the CctbConfTerms11 column
 * @method     ChildConfigCcQuery orderByCctbconfterms12($order = Criteria::ASC) Order by the CctbConfTerms12 column
 * @method     ChildConfigCcQuery orderByCctbconffutordrs($order = Criteria::ASC) Order by the CctbConfFutOrdrs column
 * @method     ChildConfigCcQuery orderByCctbconfpickticket($order = Criteria::ASC) Order by the CctbConfPickTicket column
 * @method     ChildConfigCcQuery orderByCctbconfpickalt($order = Criteria::ASC) Order by the CctbConfPickAlt column
 * @method     ChildConfigCcQuery orderByCctbconfpickrel($order = Criteria::ASC) Order by the CctbConfPickRel column
 * @method     ChildConfigCcQuery orderByCctbconfuseodue($order = Criteria::ASC) Order by the CctbConfUseOdue column
 * @method     ChildConfigCcQuery orderByCctbconfagelevlhold($order = Criteria::ASC) Order by the CctbConfAgeLevlHold column
 * @method     ChildConfigCcQuery orderByCctbconflevlamt($order = Criteria::ASC) Order by the CctbConfLevlAmt column
 * @method     ChildConfigCcQuery orderByCctbconfusecredlmt($order = Criteria::ASC) Order by the CctbConfUseCredLmt column
 * @method     ChildConfigCcQuery orderByCctbconfpcttohold($order = Criteria::ASC) Order by the CctbConfPctToHold column
 * @method     ChildConfigCcQuery orderByCctbconfaddcurr($order = Criteria::ASC) Order by the CctbConfAddCurr column
 * @method     ChildConfigCcQuery orderByCctbconfminmarghold($order = Criteria::ASC) Order by the CctbConfMinMargHold column
 * @method     ChildConfigCcQuery orderByCctbconfminmargbase($order = Criteria::ASC) Order by the CctbConfMinMargBase column
 * @method     ChildConfigCcQuery orderByCctbconfhighlevlhold($order = Criteria::ASC) Order by the CctbConfHighLevlHold column
 * @method     ChildConfigCcQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigCcQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigCcQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigCcQuery groupByCctbconfkey() Group by the CctbConfKey column
 * @method     ChildConfigCcQuery groupByCctbconfcredline() Group by the CctbConfCredLine column
 * @method     ChildConfigCcQuery groupByCctbconfcredcols() Group by the CctbConfCredCols column
 * @method     ChildConfigCcQuery groupByCctbconfnotestoredays() Group by the CctbConfNoteStoreDays column
 * @method     ChildConfigCcQuery groupByCctbconfavgmonths() Group by the CctbConfAvgMonths column
 * @method     ChildConfigCcQuery groupByCctbconfavgfinchrg() Group by the CctbConfAvgFinChrg column
 * @method     ChildConfigCcQuery groupByCctbconfallterms() Group by the CctbConfAllTerms column
 * @method     ChildConfigCcQuery groupByCctbconfterms01() Group by the CctbConfTerms01 column
 * @method     ChildConfigCcQuery groupByCctbconfterms02() Group by the CctbConfTerms02 column
 * @method     ChildConfigCcQuery groupByCctbconfterms03() Group by the CctbConfTerms03 column
 * @method     ChildConfigCcQuery groupByCctbconfterms04() Group by the CctbConfTerms04 column
 * @method     ChildConfigCcQuery groupByCctbconfterms05() Group by the CctbConfTerms05 column
 * @method     ChildConfigCcQuery groupByCctbconfterms06() Group by the CctbConfTerms06 column
 * @method     ChildConfigCcQuery groupByCctbconfterms07() Group by the CctbConfTerms07 column
 * @method     ChildConfigCcQuery groupByCctbconfterms08() Group by the CctbConfTerms08 column
 * @method     ChildConfigCcQuery groupByCctbconfterms09() Group by the CctbConfTerms09 column
 * @method     ChildConfigCcQuery groupByCctbconfterms10() Group by the CctbConfTerms10 column
 * @method     ChildConfigCcQuery groupByCctbconfterms11() Group by the CctbConfTerms11 column
 * @method     ChildConfigCcQuery groupByCctbconfterms12() Group by the CctbConfTerms12 column
 * @method     ChildConfigCcQuery groupByCctbconffutordrs() Group by the CctbConfFutOrdrs column
 * @method     ChildConfigCcQuery groupByCctbconfpickticket() Group by the CctbConfPickTicket column
 * @method     ChildConfigCcQuery groupByCctbconfpickalt() Group by the CctbConfPickAlt column
 * @method     ChildConfigCcQuery groupByCctbconfpickrel() Group by the CctbConfPickRel column
 * @method     ChildConfigCcQuery groupByCctbconfuseodue() Group by the CctbConfUseOdue column
 * @method     ChildConfigCcQuery groupByCctbconfagelevlhold() Group by the CctbConfAgeLevlHold column
 * @method     ChildConfigCcQuery groupByCctbconflevlamt() Group by the CctbConfLevlAmt column
 * @method     ChildConfigCcQuery groupByCctbconfusecredlmt() Group by the CctbConfUseCredLmt column
 * @method     ChildConfigCcQuery groupByCctbconfpcttohold() Group by the CctbConfPctToHold column
 * @method     ChildConfigCcQuery groupByCctbconfaddcurr() Group by the CctbConfAddCurr column
 * @method     ChildConfigCcQuery groupByCctbconfminmarghold() Group by the CctbConfMinMargHold column
 * @method     ChildConfigCcQuery groupByCctbconfminmargbase() Group by the CctbConfMinMargBase column
 * @method     ChildConfigCcQuery groupByCctbconfhighlevlhold() Group by the CctbConfHighLevlHold column
 * @method     ChildConfigCcQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigCcQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigCcQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigCcQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigCcQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigCcQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigCcQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigCcQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigCcQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigCc findOne(ConnectionInterface $con = null) Return the first ChildConfigCc matching the query
 * @method     ChildConfigCc findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigCc matching the query, or a new ChildConfigCc object populated from the query conditions when no match is found
 *
 * @method     ChildConfigCc findOneByCctbconfkey(int $CctbConfKey) Return the first ChildConfigCc filtered by the CctbConfKey column
 * @method     ChildConfigCc findOneByCctbconfcredline(int $CctbConfCredLine) Return the first ChildConfigCc filtered by the CctbConfCredLine column
 * @method     ChildConfigCc findOneByCctbconfcredcols(int $CctbConfCredCols) Return the first ChildConfigCc filtered by the CctbConfCredCols column
 * @method     ChildConfigCc findOneByCctbconfnotestoredays(int $CctbConfNoteStoreDays) Return the first ChildConfigCc filtered by the CctbConfNoteStoreDays column
 * @method     ChildConfigCc findOneByCctbconfavgmonths(int $CctbConfAvgMonths) Return the first ChildConfigCc filtered by the CctbConfAvgMonths column
 * @method     ChildConfigCc findOneByCctbconfavgfinchrg(string $CctbConfAvgFinChrg) Return the first ChildConfigCc filtered by the CctbConfAvgFinChrg column
 * @method     ChildConfigCc findOneByCctbconfallterms(string $CctbConfAllTerms) Return the first ChildConfigCc filtered by the CctbConfAllTerms column
 * @method     ChildConfigCc findOneByCctbconfterms01(string $CctbConfTerms01) Return the first ChildConfigCc filtered by the CctbConfTerms01 column
 * @method     ChildConfigCc findOneByCctbconfterms02(string $CctbConfTerms02) Return the first ChildConfigCc filtered by the CctbConfTerms02 column
 * @method     ChildConfigCc findOneByCctbconfterms03(string $CctbConfTerms03) Return the first ChildConfigCc filtered by the CctbConfTerms03 column
 * @method     ChildConfigCc findOneByCctbconfterms04(string $CctbConfTerms04) Return the first ChildConfigCc filtered by the CctbConfTerms04 column
 * @method     ChildConfigCc findOneByCctbconfterms05(string $CctbConfTerms05) Return the first ChildConfigCc filtered by the CctbConfTerms05 column
 * @method     ChildConfigCc findOneByCctbconfterms06(string $CctbConfTerms06) Return the first ChildConfigCc filtered by the CctbConfTerms06 column
 * @method     ChildConfigCc findOneByCctbconfterms07(string $CctbConfTerms07) Return the first ChildConfigCc filtered by the CctbConfTerms07 column
 * @method     ChildConfigCc findOneByCctbconfterms08(string $CctbConfTerms08) Return the first ChildConfigCc filtered by the CctbConfTerms08 column
 * @method     ChildConfigCc findOneByCctbconfterms09(string $CctbConfTerms09) Return the first ChildConfigCc filtered by the CctbConfTerms09 column
 * @method     ChildConfigCc findOneByCctbconfterms10(string $CctbConfTerms10) Return the first ChildConfigCc filtered by the CctbConfTerms10 column
 * @method     ChildConfigCc findOneByCctbconfterms11(string $CctbConfTerms11) Return the first ChildConfigCc filtered by the CctbConfTerms11 column
 * @method     ChildConfigCc findOneByCctbconfterms12(string $CctbConfTerms12) Return the first ChildConfigCc filtered by the CctbConfTerms12 column
 * @method     ChildConfigCc findOneByCctbconffutordrs(string $CctbConfFutOrdrs) Return the first ChildConfigCc filtered by the CctbConfFutOrdrs column
 * @method     ChildConfigCc findOneByCctbconfpickticket(string $CctbConfPickTicket) Return the first ChildConfigCc filtered by the CctbConfPickTicket column
 * @method     ChildConfigCc findOneByCctbconfpickalt(string $CctbConfPickAlt) Return the first ChildConfigCc filtered by the CctbConfPickAlt column
 * @method     ChildConfigCc findOneByCctbconfpickrel(string $CctbConfPickRel) Return the first ChildConfigCc filtered by the CctbConfPickRel column
 * @method     ChildConfigCc findOneByCctbconfuseodue(string $CctbConfUseOdue) Return the first ChildConfigCc filtered by the CctbConfUseOdue column
 * @method     ChildConfigCc findOneByCctbconfagelevlhold(int $CctbConfAgeLevlHold) Return the first ChildConfigCc filtered by the CctbConfAgeLevlHold column
 * @method     ChildConfigCc findOneByCctbconflevlamt(int $CctbConfLevlAmt) Return the first ChildConfigCc filtered by the CctbConfLevlAmt column
 * @method     ChildConfigCc findOneByCctbconfusecredlmt(string $CctbConfUseCredLmt) Return the first ChildConfigCc filtered by the CctbConfUseCredLmt column
 * @method     ChildConfigCc findOneByCctbconfpcttohold(string $CctbConfPctToHold) Return the first ChildConfigCc filtered by the CctbConfPctToHold column
 * @method     ChildConfigCc findOneByCctbconfaddcurr(string $CctbConfAddCurr) Return the first ChildConfigCc filtered by the CctbConfAddCurr column
 * @method     ChildConfigCc findOneByCctbconfminmarghold(string $CctbConfMinMargHold) Return the first ChildConfigCc filtered by the CctbConfMinMargHold column
 * @method     ChildConfigCc findOneByCctbconfminmargbase(string $CctbConfMinMargBase) Return the first ChildConfigCc filtered by the CctbConfMinMargBase column
 * @method     ChildConfigCc findOneByCctbconfhighlevlhold(string $CctbConfHighLevlHold) Return the first ChildConfigCc filtered by the CctbConfHighLevlHold column
 * @method     ChildConfigCc findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigCc filtered by the DateUpdtd column
 * @method     ChildConfigCc findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigCc filtered by the TimeUpdtd column
 * @method     ChildConfigCc findOneByDummy(string $dummy) Return the first ChildConfigCc filtered by the dummy column *

 * @method     ChildConfigCc requirePk($key, ConnectionInterface $con = null) Return the ChildConfigCc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOne(ConnectionInterface $con = null) Return the first ChildConfigCc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigCc requireOneByCctbconfkey(int $CctbConfKey) Return the first ChildConfigCc filtered by the CctbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfcredline(int $CctbConfCredLine) Return the first ChildConfigCc filtered by the CctbConfCredLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfcredcols(int $CctbConfCredCols) Return the first ChildConfigCc filtered by the CctbConfCredCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfnotestoredays(int $CctbConfNoteStoreDays) Return the first ChildConfigCc filtered by the CctbConfNoteStoreDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfavgmonths(int $CctbConfAvgMonths) Return the first ChildConfigCc filtered by the CctbConfAvgMonths column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfavgfinchrg(string $CctbConfAvgFinChrg) Return the first ChildConfigCc filtered by the CctbConfAvgFinChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfallterms(string $CctbConfAllTerms) Return the first ChildConfigCc filtered by the CctbConfAllTerms column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms01(string $CctbConfTerms01) Return the first ChildConfigCc filtered by the CctbConfTerms01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms02(string $CctbConfTerms02) Return the first ChildConfigCc filtered by the CctbConfTerms02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms03(string $CctbConfTerms03) Return the first ChildConfigCc filtered by the CctbConfTerms03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms04(string $CctbConfTerms04) Return the first ChildConfigCc filtered by the CctbConfTerms04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms05(string $CctbConfTerms05) Return the first ChildConfigCc filtered by the CctbConfTerms05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms06(string $CctbConfTerms06) Return the first ChildConfigCc filtered by the CctbConfTerms06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms07(string $CctbConfTerms07) Return the first ChildConfigCc filtered by the CctbConfTerms07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms08(string $CctbConfTerms08) Return the first ChildConfigCc filtered by the CctbConfTerms08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms09(string $CctbConfTerms09) Return the first ChildConfigCc filtered by the CctbConfTerms09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms10(string $CctbConfTerms10) Return the first ChildConfigCc filtered by the CctbConfTerms10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms11(string $CctbConfTerms11) Return the first ChildConfigCc filtered by the CctbConfTerms11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfterms12(string $CctbConfTerms12) Return the first ChildConfigCc filtered by the CctbConfTerms12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconffutordrs(string $CctbConfFutOrdrs) Return the first ChildConfigCc filtered by the CctbConfFutOrdrs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfpickticket(string $CctbConfPickTicket) Return the first ChildConfigCc filtered by the CctbConfPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfpickalt(string $CctbConfPickAlt) Return the first ChildConfigCc filtered by the CctbConfPickAlt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfpickrel(string $CctbConfPickRel) Return the first ChildConfigCc filtered by the CctbConfPickRel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfuseodue(string $CctbConfUseOdue) Return the first ChildConfigCc filtered by the CctbConfUseOdue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfagelevlhold(int $CctbConfAgeLevlHold) Return the first ChildConfigCc filtered by the CctbConfAgeLevlHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconflevlamt(int $CctbConfLevlAmt) Return the first ChildConfigCc filtered by the CctbConfLevlAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfusecredlmt(string $CctbConfUseCredLmt) Return the first ChildConfigCc filtered by the CctbConfUseCredLmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfpcttohold(string $CctbConfPctToHold) Return the first ChildConfigCc filtered by the CctbConfPctToHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfaddcurr(string $CctbConfAddCurr) Return the first ChildConfigCc filtered by the CctbConfAddCurr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfminmarghold(string $CctbConfMinMargHold) Return the first ChildConfigCc filtered by the CctbConfMinMargHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfminmargbase(string $CctbConfMinMargBase) Return the first ChildConfigCc filtered by the CctbConfMinMargBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByCctbconfhighlevlhold(string $CctbConfHighLevlHold) Return the first ChildConfigCc filtered by the CctbConfHighLevlHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigCc filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigCc filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOneByDummy(string $dummy) Return the first ChildConfigCc filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigCc[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigCc objects based on current ModelCriteria
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfkey(int $CctbConfKey) Return ChildConfigCc objects filtered by the CctbConfKey column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfcredline(int $CctbConfCredLine) Return ChildConfigCc objects filtered by the CctbConfCredLine column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfcredcols(int $CctbConfCredCols) Return ChildConfigCc objects filtered by the CctbConfCredCols column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfnotestoredays(int $CctbConfNoteStoreDays) Return ChildConfigCc objects filtered by the CctbConfNoteStoreDays column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfavgmonths(int $CctbConfAvgMonths) Return ChildConfigCc objects filtered by the CctbConfAvgMonths column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfavgfinchrg(string $CctbConfAvgFinChrg) Return ChildConfigCc objects filtered by the CctbConfAvgFinChrg column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfallterms(string $CctbConfAllTerms) Return ChildConfigCc objects filtered by the CctbConfAllTerms column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms01(string $CctbConfTerms01) Return ChildConfigCc objects filtered by the CctbConfTerms01 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms02(string $CctbConfTerms02) Return ChildConfigCc objects filtered by the CctbConfTerms02 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms03(string $CctbConfTerms03) Return ChildConfigCc objects filtered by the CctbConfTerms03 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms04(string $CctbConfTerms04) Return ChildConfigCc objects filtered by the CctbConfTerms04 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms05(string $CctbConfTerms05) Return ChildConfigCc objects filtered by the CctbConfTerms05 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms06(string $CctbConfTerms06) Return ChildConfigCc objects filtered by the CctbConfTerms06 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms07(string $CctbConfTerms07) Return ChildConfigCc objects filtered by the CctbConfTerms07 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms08(string $CctbConfTerms08) Return ChildConfigCc objects filtered by the CctbConfTerms08 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms09(string $CctbConfTerms09) Return ChildConfigCc objects filtered by the CctbConfTerms09 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms10(string $CctbConfTerms10) Return ChildConfigCc objects filtered by the CctbConfTerms10 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms11(string $CctbConfTerms11) Return ChildConfigCc objects filtered by the CctbConfTerms11 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfterms12(string $CctbConfTerms12) Return ChildConfigCc objects filtered by the CctbConfTerms12 column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconffutordrs(string $CctbConfFutOrdrs) Return ChildConfigCc objects filtered by the CctbConfFutOrdrs column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfpickticket(string $CctbConfPickTicket) Return ChildConfigCc objects filtered by the CctbConfPickTicket column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfpickalt(string $CctbConfPickAlt) Return ChildConfigCc objects filtered by the CctbConfPickAlt column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfpickrel(string $CctbConfPickRel) Return ChildConfigCc objects filtered by the CctbConfPickRel column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfuseodue(string $CctbConfUseOdue) Return ChildConfigCc objects filtered by the CctbConfUseOdue column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfagelevlhold(int $CctbConfAgeLevlHold) Return ChildConfigCc objects filtered by the CctbConfAgeLevlHold column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconflevlamt(int $CctbConfLevlAmt) Return ChildConfigCc objects filtered by the CctbConfLevlAmt column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfusecredlmt(string $CctbConfUseCredLmt) Return ChildConfigCc objects filtered by the CctbConfUseCredLmt column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfpcttohold(string $CctbConfPctToHold) Return ChildConfigCc objects filtered by the CctbConfPctToHold column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfaddcurr(string $CctbConfAddCurr) Return ChildConfigCc objects filtered by the CctbConfAddCurr column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfminmarghold(string $CctbConfMinMargHold) Return ChildConfigCc objects filtered by the CctbConfMinMargHold column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfminmargbase(string $CctbConfMinMargBase) Return ChildConfigCc objects filtered by the CctbConfMinMargBase column
 * @method     ChildConfigCc[]|ObjectCollection findByCctbconfhighlevlhold(string $CctbConfHighLevlHold) Return ChildConfigCc objects filtered by the CctbConfHighLevlHold column
 * @method     ChildConfigCc[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigCc objects filtered by the DateUpdtd column
 * @method     ChildConfigCc[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigCc objects filtered by the TimeUpdtd column
 * @method     ChildConfigCc[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigCc objects filtered by the dummy column
 * @method     ChildConfigCc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigCcQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigCcQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigCc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigCcQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigCcQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigCcQuery) {
            return $criteria;
        }
        $query = new ChildConfigCcQuery();
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
     * @return ChildConfigCc|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigCcTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigCc A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT CctbConfKey, CctbConfCredLine, CctbConfCredCols, CctbConfNoteStoreDays, CctbConfAvgMonths, CctbConfAvgFinChrg, CctbConfAllTerms, CctbConfTerms01, CctbConfTerms02, CctbConfTerms03, CctbConfTerms04, CctbConfTerms05, CctbConfTerms06, CctbConfTerms07, CctbConfTerms08, CctbConfTerms09, CctbConfTerms10, CctbConfTerms11, CctbConfTerms12, CctbConfFutOrdrs, CctbConfPickTicket, CctbConfPickAlt, CctbConfPickRel, CctbConfUseOdue, CctbConfAgeLevlHold, CctbConfLevlAmt, CctbConfUseCredLmt, CctbConfPctToHold, CctbConfAddCurr, CctbConfMinMargHold, CctbConfMinMargBase, CctbConfHighLevlHold, DateUpdtd, TimeUpdtd, dummy FROM cc_config WHERE CctbConfKey = :p0';
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
            /** @var ChildConfigCc $obj */
            $obj = new ChildConfigCc();
            $obj->hydrate($row);
            ConfigCcTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigCc|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CctbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfkey(1234); // WHERE CctbConfKey = 1234
     * $query->filterByCctbconfkey(array(12, 34)); // WHERE CctbConfKey IN (12, 34)
     * $query->filterByCctbconfkey(array('min' => 12)); // WHERE CctbConfKey > 12
     * </code>
     *
     * @param     mixed $cctbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfkey($cctbconfkey = null, $comparison = null)
    {
        if (is_array($cctbconfkey)) {
            $useMinMax = false;
            if (isset($cctbconfkey['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $cctbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfkey['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $cctbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $cctbconfkey, $comparison);
    }

    /**
     * Filter the query on the CctbConfCredLine column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfcredline(1234); // WHERE CctbConfCredLine = 1234
     * $query->filterByCctbconfcredline(array(12, 34)); // WHERE CctbConfCredLine IN (12, 34)
     * $query->filterByCctbconfcredline(array('min' => 12)); // WHERE CctbConfCredLine > 12
     * </code>
     *
     * @param     mixed $cctbconfcredline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfcredline($cctbconfcredline = null, $comparison = null)
    {
        if (is_array($cctbconfcredline)) {
            $useMinMax = false;
            if (isset($cctbconfcredline['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDLINE, $cctbconfcredline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfcredline['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDLINE, $cctbconfcredline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDLINE, $cctbconfcredline, $comparison);
    }

    /**
     * Filter the query on the CctbConfCredCols column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfcredcols(1234); // WHERE CctbConfCredCols = 1234
     * $query->filterByCctbconfcredcols(array(12, 34)); // WHERE CctbConfCredCols IN (12, 34)
     * $query->filterByCctbconfcredcols(array('min' => 12)); // WHERE CctbConfCredCols > 12
     * </code>
     *
     * @param     mixed $cctbconfcredcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfcredcols($cctbconfcredcols = null, $comparison = null)
    {
        if (is_array($cctbconfcredcols)) {
            $useMinMax = false;
            if (isset($cctbconfcredcols['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDCOLS, $cctbconfcredcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfcredcols['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDCOLS, $cctbconfcredcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDCOLS, $cctbconfcredcols, $comparison);
    }

    /**
     * Filter the query on the CctbConfNoteStoreDays column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfnotestoredays(1234); // WHERE CctbConfNoteStoreDays = 1234
     * $query->filterByCctbconfnotestoredays(array(12, 34)); // WHERE CctbConfNoteStoreDays IN (12, 34)
     * $query->filterByCctbconfnotestoredays(array('min' => 12)); // WHERE CctbConfNoteStoreDays > 12
     * </code>
     *
     * @param     mixed $cctbconfnotestoredays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfnotestoredays($cctbconfnotestoredays = null, $comparison = null)
    {
        if (is_array($cctbconfnotestoredays)) {
            $useMinMax = false;
            if (isset($cctbconfnotestoredays['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, $cctbconfnotestoredays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfnotestoredays['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, $cctbconfnotestoredays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, $cctbconfnotestoredays, $comparison);
    }

    /**
     * Filter the query on the CctbConfAvgMonths column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfavgmonths(1234); // WHERE CctbConfAvgMonths = 1234
     * $query->filterByCctbconfavgmonths(array(12, 34)); // WHERE CctbConfAvgMonths IN (12, 34)
     * $query->filterByCctbconfavgmonths(array('min' => 12)); // WHERE CctbConfAvgMonths > 12
     * </code>
     *
     * @param     mixed $cctbconfavgmonths The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfavgmonths($cctbconfavgmonths = null, $comparison = null)
    {
        if (is_array($cctbconfavgmonths)) {
            $useMinMax = false;
            if (isset($cctbconfavgmonths['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, $cctbconfavgmonths['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfavgmonths['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, $cctbconfavgmonths['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, $cctbconfavgmonths, $comparison);
    }

    /**
     * Filter the query on the CctbConfAvgFinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfavgfinchrg('fooValue');   // WHERE CctbConfAvgFinChrg = 'fooValue'
     * $query->filterByCctbconfavgfinchrg('%fooValue%', Criteria::LIKE); // WHERE CctbConfAvgFinChrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfavgfinchrg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfavgfinchrg($cctbconfavgfinchrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfavgfinchrg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG, $cctbconfavgfinchrg, $comparison);
    }

    /**
     * Filter the query on the CctbConfAllTerms column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfallterms('fooValue');   // WHERE CctbConfAllTerms = 'fooValue'
     * $query->filterByCctbconfallterms('%fooValue%', Criteria::LIKE); // WHERE CctbConfAllTerms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfallterms The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfallterms($cctbconfallterms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfallterms)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFALLTERMS, $cctbconfallterms, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms01 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms01('fooValue');   // WHERE CctbConfTerms01 = 'fooValue'
     * $query->filterByCctbconfterms01('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms01 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms01 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms01($cctbconfterms01 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms01)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS01, $cctbconfterms01, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms02 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms02('fooValue');   // WHERE CctbConfTerms02 = 'fooValue'
     * $query->filterByCctbconfterms02('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms02 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms02 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms02($cctbconfterms02 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms02)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS02, $cctbconfterms02, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms03 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms03('fooValue');   // WHERE CctbConfTerms03 = 'fooValue'
     * $query->filterByCctbconfterms03('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms03 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms03 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms03($cctbconfterms03 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms03)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS03, $cctbconfterms03, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms04 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms04('fooValue');   // WHERE CctbConfTerms04 = 'fooValue'
     * $query->filterByCctbconfterms04('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms04 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms04 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms04($cctbconfterms04 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms04)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS04, $cctbconfterms04, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms05 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms05('fooValue');   // WHERE CctbConfTerms05 = 'fooValue'
     * $query->filterByCctbconfterms05('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms05 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms05 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms05($cctbconfterms05 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms05)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS05, $cctbconfterms05, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms06 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms06('fooValue');   // WHERE CctbConfTerms06 = 'fooValue'
     * $query->filterByCctbconfterms06('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms06 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms06 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms06($cctbconfterms06 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms06)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS06, $cctbconfterms06, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms07 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms07('fooValue');   // WHERE CctbConfTerms07 = 'fooValue'
     * $query->filterByCctbconfterms07('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms07 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms07 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms07($cctbconfterms07 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms07)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS07, $cctbconfterms07, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms08 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms08('fooValue');   // WHERE CctbConfTerms08 = 'fooValue'
     * $query->filterByCctbconfterms08('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms08 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms08 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms08($cctbconfterms08 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms08)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS08, $cctbconfterms08, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms09 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms09('fooValue');   // WHERE CctbConfTerms09 = 'fooValue'
     * $query->filterByCctbconfterms09('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms09 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms09 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms09($cctbconfterms09 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms09)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS09, $cctbconfterms09, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms10 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms10('fooValue');   // WHERE CctbConfTerms10 = 'fooValue'
     * $query->filterByCctbconfterms10('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms10($cctbconfterms10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS10, $cctbconfterms10, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms11 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms11('fooValue');   // WHERE CctbConfTerms11 = 'fooValue'
     * $query->filterByCctbconfterms11('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms11 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms11 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms11($cctbconfterms11 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms11)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS11, $cctbconfterms11, $comparison);
    }

    /**
     * Filter the query on the CctbConfTerms12 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms12('fooValue');   // WHERE CctbConfTerms12 = 'fooValue'
     * $query->filterByCctbconfterms12('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms12 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfterms12 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfterms12($cctbconfterms12 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms12)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS12, $cctbconfterms12, $comparison);
    }

    /**
     * Filter the query on the CctbConfFutOrdrs column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconffutordrs('fooValue');   // WHERE CctbConfFutOrdrs = 'fooValue'
     * $query->filterByCctbconffutordrs('%fooValue%', Criteria::LIKE); // WHERE CctbConfFutOrdrs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconffutordrs The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconffutordrs($cctbconffutordrs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconffutordrs)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFFUTORDRS, $cctbconffutordrs, $comparison);
    }

    /**
     * Filter the query on the CctbConfPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickticket('fooValue');   // WHERE CctbConfPickTicket = 'fooValue'
     * $query->filterByCctbconfpickticket('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfpickticket($cctbconfpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKTICKET, $cctbconfpickticket, $comparison);
    }

    /**
     * Filter the query on the CctbConfPickAlt column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickalt('fooValue');   // WHERE CctbConfPickAlt = 'fooValue'
     * $query->filterByCctbconfpickalt('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickAlt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfpickalt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfpickalt($cctbconfpickalt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickalt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKALT, $cctbconfpickalt, $comparison);
    }

    /**
     * Filter the query on the CctbConfPickRel column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickrel('fooValue');   // WHERE CctbConfPickRel = 'fooValue'
     * $query->filterByCctbconfpickrel('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickRel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfpickrel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfpickrel($cctbconfpickrel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickrel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKREL, $cctbconfpickrel, $comparison);
    }

    /**
     * Filter the query on the CctbConfUseOdue column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfuseodue('fooValue');   // WHERE CctbConfUseOdue = 'fooValue'
     * $query->filterByCctbconfuseodue('%fooValue%', Criteria::LIKE); // WHERE CctbConfUseOdue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfuseodue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfuseodue($cctbconfuseodue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfuseodue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFUSEODUE, $cctbconfuseodue, $comparison);
    }

    /**
     * Filter the query on the CctbConfAgeLevlHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfagelevlhold(1234); // WHERE CctbConfAgeLevlHold = 1234
     * $query->filterByCctbconfagelevlhold(array(12, 34)); // WHERE CctbConfAgeLevlHold IN (12, 34)
     * $query->filterByCctbconfagelevlhold(array('min' => 12)); // WHERE CctbConfAgeLevlHold > 12
     * </code>
     *
     * @param     mixed $cctbconfagelevlhold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfagelevlhold($cctbconfagelevlhold = null, $comparison = null)
    {
        if (is_array($cctbconfagelevlhold)) {
            $useMinMax = false;
            if (isset($cctbconfagelevlhold['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, $cctbconfagelevlhold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfagelevlhold['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, $cctbconfagelevlhold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, $cctbconfagelevlhold, $comparison);
    }

    /**
     * Filter the query on the CctbConfLevlAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconflevlamt(1234); // WHERE CctbConfLevlAmt = 1234
     * $query->filterByCctbconflevlamt(array(12, 34)); // WHERE CctbConfLevlAmt IN (12, 34)
     * $query->filterByCctbconflevlamt(array('min' => 12)); // WHERE CctbConfLevlAmt > 12
     * </code>
     *
     * @param     mixed $cctbconflevlamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconflevlamt($cctbconflevlamt = null, $comparison = null)
    {
        if (is_array($cctbconflevlamt)) {
            $useMinMax = false;
            if (isset($cctbconflevlamt['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFLEVLAMT, $cctbconflevlamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconflevlamt['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFLEVLAMT, $cctbconflevlamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFLEVLAMT, $cctbconflevlamt, $comparison);
    }

    /**
     * Filter the query on the CctbConfUseCredLmt column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfusecredlmt('fooValue');   // WHERE CctbConfUseCredLmt = 'fooValue'
     * $query->filterByCctbconfusecredlmt('%fooValue%', Criteria::LIKE); // WHERE CctbConfUseCredLmt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfusecredlmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfusecredlmt($cctbconfusecredlmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfusecredlmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT, $cctbconfusecredlmt, $comparison);
    }

    /**
     * Filter the query on the CctbConfPctToHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpcttohold(1234); // WHERE CctbConfPctToHold = 1234
     * $query->filterByCctbconfpcttohold(array(12, 34)); // WHERE CctbConfPctToHold IN (12, 34)
     * $query->filterByCctbconfpcttohold(array('min' => 12)); // WHERE CctbConfPctToHold > 12
     * </code>
     *
     * @param     mixed $cctbconfpcttohold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfpcttohold($cctbconfpcttohold = null, $comparison = null)
    {
        if (is_array($cctbconfpcttohold)) {
            $useMinMax = false;
            if (isset($cctbconfpcttohold['min'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, $cctbconfpcttohold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cctbconfpcttohold['max'])) {
                $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, $cctbconfpcttohold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, $cctbconfpcttohold, $comparison);
    }

    /**
     * Filter the query on the CctbConfAddCurr column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfaddcurr('fooValue');   // WHERE CctbConfAddCurr = 'fooValue'
     * $query->filterByCctbconfaddcurr('%fooValue%', Criteria::LIKE); // WHERE CctbConfAddCurr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfaddcurr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfaddcurr($cctbconfaddcurr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfaddcurr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFADDCURR, $cctbconfaddcurr, $comparison);
    }

    /**
     * Filter the query on the CctbConfMinMargHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfminmarghold('fooValue');   // WHERE CctbConfMinMargHold = 'fooValue'
     * $query->filterByCctbconfminmarghold('%fooValue%', Criteria::LIKE); // WHERE CctbConfMinMargHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfminmarghold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfminmarghold($cctbconfminmarghold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfminmarghold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD, $cctbconfminmarghold, $comparison);
    }

    /**
     * Filter the query on the CctbConfMinMargBase column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfminmargbase('fooValue');   // WHERE CctbConfMinMargBase = 'fooValue'
     * $query->filterByCctbconfminmargbase('%fooValue%', Criteria::LIKE); // WHERE CctbConfMinMargBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfminmargbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfminmargbase($cctbconfminmargbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfminmargbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE, $cctbconfminmargbase, $comparison);
    }

    /**
     * Filter the query on the CctbConfHighLevlHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfhighlevlhold('fooValue');   // WHERE CctbConfHighLevlHold = 'fooValue'
     * $query->filterByCctbconfhighlevlhold('%fooValue%', Criteria::LIKE); // WHERE CctbConfHighLevlHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cctbconfhighlevlhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByCctbconfhighlevlhold($cctbconfhighlevlhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfhighlevlhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD, $cctbconfhighlevlhold, $comparison);
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
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigCcTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigCc $configCc Object to remove from the list of results
     *
     * @return $this|ChildConfigCcQuery The current query, for fluid interface
     */
    public function prune($configCc = null)
    {
        if ($configCc) {
            $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $configCc->getCctbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cc_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigCcTableMap::clearInstancePool();
            ConfigCcTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCcTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigCcTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigCcTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigCcTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigCcQuery
