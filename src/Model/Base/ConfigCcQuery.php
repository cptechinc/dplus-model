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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `cc_config` table.
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
 * @method     ChildConfigCc|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigCc matching the query
 * @method     ChildConfigCc findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigCc matching the query, or a new ChildConfigCc object populated from the query conditions when no match is found
 *
 * @method     ChildConfigCc|null findOneByCctbconfkey(int $CctbConfKey) Return the first ChildConfigCc filtered by the CctbConfKey column
 * @method     ChildConfigCc|null findOneByCctbconfcredline(int $CctbConfCredLine) Return the first ChildConfigCc filtered by the CctbConfCredLine column
 * @method     ChildConfigCc|null findOneByCctbconfcredcols(int $CctbConfCredCols) Return the first ChildConfigCc filtered by the CctbConfCredCols column
 * @method     ChildConfigCc|null findOneByCctbconfnotestoredays(int $CctbConfNoteStoreDays) Return the first ChildConfigCc filtered by the CctbConfNoteStoreDays column
 * @method     ChildConfigCc|null findOneByCctbconfavgmonths(int $CctbConfAvgMonths) Return the first ChildConfigCc filtered by the CctbConfAvgMonths column
 * @method     ChildConfigCc|null findOneByCctbconfavgfinchrg(string $CctbConfAvgFinChrg) Return the first ChildConfigCc filtered by the CctbConfAvgFinChrg column
 * @method     ChildConfigCc|null findOneByCctbconfallterms(string $CctbConfAllTerms) Return the first ChildConfigCc filtered by the CctbConfAllTerms column
 * @method     ChildConfigCc|null findOneByCctbconfterms01(string $CctbConfTerms01) Return the first ChildConfigCc filtered by the CctbConfTerms01 column
 * @method     ChildConfigCc|null findOneByCctbconfterms02(string $CctbConfTerms02) Return the first ChildConfigCc filtered by the CctbConfTerms02 column
 * @method     ChildConfigCc|null findOneByCctbconfterms03(string $CctbConfTerms03) Return the first ChildConfigCc filtered by the CctbConfTerms03 column
 * @method     ChildConfigCc|null findOneByCctbconfterms04(string $CctbConfTerms04) Return the first ChildConfigCc filtered by the CctbConfTerms04 column
 * @method     ChildConfigCc|null findOneByCctbconfterms05(string $CctbConfTerms05) Return the first ChildConfigCc filtered by the CctbConfTerms05 column
 * @method     ChildConfigCc|null findOneByCctbconfterms06(string $CctbConfTerms06) Return the first ChildConfigCc filtered by the CctbConfTerms06 column
 * @method     ChildConfigCc|null findOneByCctbconfterms07(string $CctbConfTerms07) Return the first ChildConfigCc filtered by the CctbConfTerms07 column
 * @method     ChildConfigCc|null findOneByCctbconfterms08(string $CctbConfTerms08) Return the first ChildConfigCc filtered by the CctbConfTerms08 column
 * @method     ChildConfigCc|null findOneByCctbconfterms09(string $CctbConfTerms09) Return the first ChildConfigCc filtered by the CctbConfTerms09 column
 * @method     ChildConfigCc|null findOneByCctbconfterms10(string $CctbConfTerms10) Return the first ChildConfigCc filtered by the CctbConfTerms10 column
 * @method     ChildConfigCc|null findOneByCctbconfterms11(string $CctbConfTerms11) Return the first ChildConfigCc filtered by the CctbConfTerms11 column
 * @method     ChildConfigCc|null findOneByCctbconfterms12(string $CctbConfTerms12) Return the first ChildConfigCc filtered by the CctbConfTerms12 column
 * @method     ChildConfigCc|null findOneByCctbconffutordrs(string $CctbConfFutOrdrs) Return the first ChildConfigCc filtered by the CctbConfFutOrdrs column
 * @method     ChildConfigCc|null findOneByCctbconfpickticket(string $CctbConfPickTicket) Return the first ChildConfigCc filtered by the CctbConfPickTicket column
 * @method     ChildConfigCc|null findOneByCctbconfpickalt(string $CctbConfPickAlt) Return the first ChildConfigCc filtered by the CctbConfPickAlt column
 * @method     ChildConfigCc|null findOneByCctbconfpickrel(string $CctbConfPickRel) Return the first ChildConfigCc filtered by the CctbConfPickRel column
 * @method     ChildConfigCc|null findOneByCctbconfuseodue(string $CctbConfUseOdue) Return the first ChildConfigCc filtered by the CctbConfUseOdue column
 * @method     ChildConfigCc|null findOneByCctbconfagelevlhold(int $CctbConfAgeLevlHold) Return the first ChildConfigCc filtered by the CctbConfAgeLevlHold column
 * @method     ChildConfigCc|null findOneByCctbconflevlamt(int $CctbConfLevlAmt) Return the first ChildConfigCc filtered by the CctbConfLevlAmt column
 * @method     ChildConfigCc|null findOneByCctbconfusecredlmt(string $CctbConfUseCredLmt) Return the first ChildConfigCc filtered by the CctbConfUseCredLmt column
 * @method     ChildConfigCc|null findOneByCctbconfpcttohold(string $CctbConfPctToHold) Return the first ChildConfigCc filtered by the CctbConfPctToHold column
 * @method     ChildConfigCc|null findOneByCctbconfaddcurr(string $CctbConfAddCurr) Return the first ChildConfigCc filtered by the CctbConfAddCurr column
 * @method     ChildConfigCc|null findOneByCctbconfminmarghold(string $CctbConfMinMargHold) Return the first ChildConfigCc filtered by the CctbConfMinMargHold column
 * @method     ChildConfigCc|null findOneByCctbconfminmargbase(string $CctbConfMinMargBase) Return the first ChildConfigCc filtered by the CctbConfMinMargBase column
 * @method     ChildConfigCc|null findOneByCctbconfhighlevlhold(string $CctbConfHighLevlHold) Return the first ChildConfigCc filtered by the CctbConfHighLevlHold column
 * @method     ChildConfigCc|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigCc filtered by the DateUpdtd column
 * @method     ChildConfigCc|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigCc filtered by the TimeUpdtd column
 * @method     ChildConfigCc|null findOneByDummy(string $dummy) Return the first ChildConfigCc filtered by the dummy column
 *
 * @method     ChildConfigCc requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigCc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCc requireOne(?ConnectionInterface $con = null) Return the first ChildConfigCc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigCc[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigCc objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigCc> find(?ConnectionInterface $con = null) Return ChildConfigCc objects based on current ModelCriteria
 *
 * @method     ChildConfigCc[]|Collection findByCctbconfkey(int|array<int> $CctbConfKey) Return ChildConfigCc objects filtered by the CctbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfkey(int|array<int> $CctbConfKey) Return ChildConfigCc objects filtered by the CctbConfKey column
 * @method     ChildConfigCc[]|Collection findByCctbconfcredline(int|array<int> $CctbConfCredLine) Return ChildConfigCc objects filtered by the CctbConfCredLine column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfcredline(int|array<int> $CctbConfCredLine) Return ChildConfigCc objects filtered by the CctbConfCredLine column
 * @method     ChildConfigCc[]|Collection findByCctbconfcredcols(int|array<int> $CctbConfCredCols) Return ChildConfigCc objects filtered by the CctbConfCredCols column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfcredcols(int|array<int> $CctbConfCredCols) Return ChildConfigCc objects filtered by the CctbConfCredCols column
 * @method     ChildConfigCc[]|Collection findByCctbconfnotestoredays(int|array<int> $CctbConfNoteStoreDays) Return ChildConfigCc objects filtered by the CctbConfNoteStoreDays column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfnotestoredays(int|array<int> $CctbConfNoteStoreDays) Return ChildConfigCc objects filtered by the CctbConfNoteStoreDays column
 * @method     ChildConfigCc[]|Collection findByCctbconfavgmonths(int|array<int> $CctbConfAvgMonths) Return ChildConfigCc objects filtered by the CctbConfAvgMonths column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfavgmonths(int|array<int> $CctbConfAvgMonths) Return ChildConfigCc objects filtered by the CctbConfAvgMonths column
 * @method     ChildConfigCc[]|Collection findByCctbconfavgfinchrg(string|array<string> $CctbConfAvgFinChrg) Return ChildConfigCc objects filtered by the CctbConfAvgFinChrg column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfavgfinchrg(string|array<string> $CctbConfAvgFinChrg) Return ChildConfigCc objects filtered by the CctbConfAvgFinChrg column
 * @method     ChildConfigCc[]|Collection findByCctbconfallterms(string|array<string> $CctbConfAllTerms) Return ChildConfigCc objects filtered by the CctbConfAllTerms column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfallterms(string|array<string> $CctbConfAllTerms) Return ChildConfigCc objects filtered by the CctbConfAllTerms column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms01(string|array<string> $CctbConfTerms01) Return ChildConfigCc objects filtered by the CctbConfTerms01 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms01(string|array<string> $CctbConfTerms01) Return ChildConfigCc objects filtered by the CctbConfTerms01 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms02(string|array<string> $CctbConfTerms02) Return ChildConfigCc objects filtered by the CctbConfTerms02 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms02(string|array<string> $CctbConfTerms02) Return ChildConfigCc objects filtered by the CctbConfTerms02 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms03(string|array<string> $CctbConfTerms03) Return ChildConfigCc objects filtered by the CctbConfTerms03 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms03(string|array<string> $CctbConfTerms03) Return ChildConfigCc objects filtered by the CctbConfTerms03 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms04(string|array<string> $CctbConfTerms04) Return ChildConfigCc objects filtered by the CctbConfTerms04 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms04(string|array<string> $CctbConfTerms04) Return ChildConfigCc objects filtered by the CctbConfTerms04 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms05(string|array<string> $CctbConfTerms05) Return ChildConfigCc objects filtered by the CctbConfTerms05 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms05(string|array<string> $CctbConfTerms05) Return ChildConfigCc objects filtered by the CctbConfTerms05 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms06(string|array<string> $CctbConfTerms06) Return ChildConfigCc objects filtered by the CctbConfTerms06 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms06(string|array<string> $CctbConfTerms06) Return ChildConfigCc objects filtered by the CctbConfTerms06 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms07(string|array<string> $CctbConfTerms07) Return ChildConfigCc objects filtered by the CctbConfTerms07 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms07(string|array<string> $CctbConfTerms07) Return ChildConfigCc objects filtered by the CctbConfTerms07 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms08(string|array<string> $CctbConfTerms08) Return ChildConfigCc objects filtered by the CctbConfTerms08 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms08(string|array<string> $CctbConfTerms08) Return ChildConfigCc objects filtered by the CctbConfTerms08 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms09(string|array<string> $CctbConfTerms09) Return ChildConfigCc objects filtered by the CctbConfTerms09 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms09(string|array<string> $CctbConfTerms09) Return ChildConfigCc objects filtered by the CctbConfTerms09 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms10(string|array<string> $CctbConfTerms10) Return ChildConfigCc objects filtered by the CctbConfTerms10 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms10(string|array<string> $CctbConfTerms10) Return ChildConfigCc objects filtered by the CctbConfTerms10 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms11(string|array<string> $CctbConfTerms11) Return ChildConfigCc objects filtered by the CctbConfTerms11 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms11(string|array<string> $CctbConfTerms11) Return ChildConfigCc objects filtered by the CctbConfTerms11 column
 * @method     ChildConfigCc[]|Collection findByCctbconfterms12(string|array<string> $CctbConfTerms12) Return ChildConfigCc objects filtered by the CctbConfTerms12 column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfterms12(string|array<string> $CctbConfTerms12) Return ChildConfigCc objects filtered by the CctbConfTerms12 column
 * @method     ChildConfigCc[]|Collection findByCctbconffutordrs(string|array<string> $CctbConfFutOrdrs) Return ChildConfigCc objects filtered by the CctbConfFutOrdrs column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconffutordrs(string|array<string> $CctbConfFutOrdrs) Return ChildConfigCc objects filtered by the CctbConfFutOrdrs column
 * @method     ChildConfigCc[]|Collection findByCctbconfpickticket(string|array<string> $CctbConfPickTicket) Return ChildConfigCc objects filtered by the CctbConfPickTicket column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfpickticket(string|array<string> $CctbConfPickTicket) Return ChildConfigCc objects filtered by the CctbConfPickTicket column
 * @method     ChildConfigCc[]|Collection findByCctbconfpickalt(string|array<string> $CctbConfPickAlt) Return ChildConfigCc objects filtered by the CctbConfPickAlt column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfpickalt(string|array<string> $CctbConfPickAlt) Return ChildConfigCc objects filtered by the CctbConfPickAlt column
 * @method     ChildConfigCc[]|Collection findByCctbconfpickrel(string|array<string> $CctbConfPickRel) Return ChildConfigCc objects filtered by the CctbConfPickRel column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfpickrel(string|array<string> $CctbConfPickRel) Return ChildConfigCc objects filtered by the CctbConfPickRel column
 * @method     ChildConfigCc[]|Collection findByCctbconfuseodue(string|array<string> $CctbConfUseOdue) Return ChildConfigCc objects filtered by the CctbConfUseOdue column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfuseodue(string|array<string> $CctbConfUseOdue) Return ChildConfigCc objects filtered by the CctbConfUseOdue column
 * @method     ChildConfigCc[]|Collection findByCctbconfagelevlhold(int|array<int> $CctbConfAgeLevlHold) Return ChildConfigCc objects filtered by the CctbConfAgeLevlHold column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfagelevlhold(int|array<int> $CctbConfAgeLevlHold) Return ChildConfigCc objects filtered by the CctbConfAgeLevlHold column
 * @method     ChildConfigCc[]|Collection findByCctbconflevlamt(int|array<int> $CctbConfLevlAmt) Return ChildConfigCc objects filtered by the CctbConfLevlAmt column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconflevlamt(int|array<int> $CctbConfLevlAmt) Return ChildConfigCc objects filtered by the CctbConfLevlAmt column
 * @method     ChildConfigCc[]|Collection findByCctbconfusecredlmt(string|array<string> $CctbConfUseCredLmt) Return ChildConfigCc objects filtered by the CctbConfUseCredLmt column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfusecredlmt(string|array<string> $CctbConfUseCredLmt) Return ChildConfigCc objects filtered by the CctbConfUseCredLmt column
 * @method     ChildConfigCc[]|Collection findByCctbconfpcttohold(string|array<string> $CctbConfPctToHold) Return ChildConfigCc objects filtered by the CctbConfPctToHold column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfpcttohold(string|array<string> $CctbConfPctToHold) Return ChildConfigCc objects filtered by the CctbConfPctToHold column
 * @method     ChildConfigCc[]|Collection findByCctbconfaddcurr(string|array<string> $CctbConfAddCurr) Return ChildConfigCc objects filtered by the CctbConfAddCurr column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfaddcurr(string|array<string> $CctbConfAddCurr) Return ChildConfigCc objects filtered by the CctbConfAddCurr column
 * @method     ChildConfigCc[]|Collection findByCctbconfminmarghold(string|array<string> $CctbConfMinMargHold) Return ChildConfigCc objects filtered by the CctbConfMinMargHold column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfminmarghold(string|array<string> $CctbConfMinMargHold) Return ChildConfigCc objects filtered by the CctbConfMinMargHold column
 * @method     ChildConfigCc[]|Collection findByCctbconfminmargbase(string|array<string> $CctbConfMinMargBase) Return ChildConfigCc objects filtered by the CctbConfMinMargBase column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfminmargbase(string|array<string> $CctbConfMinMargBase) Return ChildConfigCc objects filtered by the CctbConfMinMargBase column
 * @method     ChildConfigCc[]|Collection findByCctbconfhighlevlhold(string|array<string> $CctbConfHighLevlHold) Return ChildConfigCc objects filtered by the CctbConfHighLevlHold column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByCctbconfhighlevlhold(string|array<string> $CctbConfHighLevlHold) Return ChildConfigCc objects filtered by the CctbConfHighLevlHold column
 * @method     ChildConfigCc[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigCc objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigCc objects filtered by the DateUpdtd column
 * @method     ChildConfigCc[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigCc objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigCc objects filtered by the TimeUpdtd column
 * @method     ChildConfigCc[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigCc objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigCc> findByDummy(string|array<string> $dummy) Return ChildConfigCc objects filtered by the dummy column
 *
 * @method     ChildConfigCc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigCc> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigCcQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigCcQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigCc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigCcQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigCcQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $keys, Criteria::IN);

        return $this;
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
     * @param mixed $cctbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfkey($cctbconfkey = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFKEY, $cctbconfkey, $comparison);

        return $this;
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
     * @param mixed $cctbconfcredline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfcredline($cctbconfcredline = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDLINE, $cctbconfcredline, $comparison);

        return $this;
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
     * @param mixed $cctbconfcredcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfcredcols($cctbconfcredcols = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFCREDCOLS, $cctbconfcredcols, $comparison);

        return $this;
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
     * @param mixed $cctbconfnotestoredays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfnotestoredays($cctbconfnotestoredays = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFNOTESTOREDAYS, $cctbconfnotestoredays, $comparison);

        return $this;
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
     * @param mixed $cctbconfavgmonths The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfavgmonths($cctbconfavgmonths = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGMONTHS, $cctbconfavgmonths, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfAvgFinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfavgfinchrg('fooValue');   // WHERE CctbConfAvgFinChrg = 'fooValue'
     * $query->filterByCctbconfavgfinchrg('%fooValue%', Criteria::LIKE); // WHERE CctbConfAvgFinChrg LIKE '%fooValue%'
     * $query->filterByCctbconfavgfinchrg(['foo', 'bar']); // WHERE CctbConfAvgFinChrg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfavgfinchrg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfavgfinchrg($cctbconfavgfinchrg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfavgfinchrg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAVGFINCHRG, $cctbconfavgfinchrg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfAllTerms column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfallterms('fooValue');   // WHERE CctbConfAllTerms = 'fooValue'
     * $query->filterByCctbconfallterms('%fooValue%', Criteria::LIKE); // WHERE CctbConfAllTerms LIKE '%fooValue%'
     * $query->filterByCctbconfallterms(['foo', 'bar']); // WHERE CctbConfAllTerms IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfallterms The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfallterms($cctbconfallterms = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfallterms)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFALLTERMS, $cctbconfallterms, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms01 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms01('fooValue');   // WHERE CctbConfTerms01 = 'fooValue'
     * $query->filterByCctbconfterms01('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms01 LIKE '%fooValue%'
     * $query->filterByCctbconfterms01(['foo', 'bar']); // WHERE CctbConfTerms01 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms01 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms01($cctbconfterms01 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms01)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS01, $cctbconfterms01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms02 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms02('fooValue');   // WHERE CctbConfTerms02 = 'fooValue'
     * $query->filterByCctbconfterms02('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms02 LIKE '%fooValue%'
     * $query->filterByCctbconfterms02(['foo', 'bar']); // WHERE CctbConfTerms02 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms02 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms02($cctbconfterms02 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms02)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS02, $cctbconfterms02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms03 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms03('fooValue');   // WHERE CctbConfTerms03 = 'fooValue'
     * $query->filterByCctbconfterms03('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms03 LIKE '%fooValue%'
     * $query->filterByCctbconfterms03(['foo', 'bar']); // WHERE CctbConfTerms03 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms03 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms03($cctbconfterms03 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms03)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS03, $cctbconfterms03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms04 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms04('fooValue');   // WHERE CctbConfTerms04 = 'fooValue'
     * $query->filterByCctbconfterms04('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms04 LIKE '%fooValue%'
     * $query->filterByCctbconfterms04(['foo', 'bar']); // WHERE CctbConfTerms04 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms04 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms04($cctbconfterms04 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms04)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS04, $cctbconfterms04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms05 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms05('fooValue');   // WHERE CctbConfTerms05 = 'fooValue'
     * $query->filterByCctbconfterms05('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms05 LIKE '%fooValue%'
     * $query->filterByCctbconfterms05(['foo', 'bar']); // WHERE CctbConfTerms05 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms05 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms05($cctbconfterms05 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms05)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS05, $cctbconfterms05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms06 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms06('fooValue');   // WHERE CctbConfTerms06 = 'fooValue'
     * $query->filterByCctbconfterms06('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms06 LIKE '%fooValue%'
     * $query->filterByCctbconfterms06(['foo', 'bar']); // WHERE CctbConfTerms06 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms06 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms06($cctbconfterms06 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms06)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS06, $cctbconfterms06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms07 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms07('fooValue');   // WHERE CctbConfTerms07 = 'fooValue'
     * $query->filterByCctbconfterms07('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms07 LIKE '%fooValue%'
     * $query->filterByCctbconfterms07(['foo', 'bar']); // WHERE CctbConfTerms07 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms07 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms07($cctbconfterms07 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms07)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS07, $cctbconfterms07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms08 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms08('fooValue');   // WHERE CctbConfTerms08 = 'fooValue'
     * $query->filterByCctbconfterms08('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms08 LIKE '%fooValue%'
     * $query->filterByCctbconfterms08(['foo', 'bar']); // WHERE CctbConfTerms08 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms08 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms08($cctbconfterms08 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms08)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS08, $cctbconfterms08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms09 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms09('fooValue');   // WHERE CctbConfTerms09 = 'fooValue'
     * $query->filterByCctbconfterms09('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms09 LIKE '%fooValue%'
     * $query->filterByCctbconfterms09(['foo', 'bar']); // WHERE CctbConfTerms09 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms09 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms09($cctbconfterms09 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms09)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS09, $cctbconfterms09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms10 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms10('fooValue');   // WHERE CctbConfTerms10 = 'fooValue'
     * $query->filterByCctbconfterms10('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms10 LIKE '%fooValue%'
     * $query->filterByCctbconfterms10(['foo', 'bar']); // WHERE CctbConfTerms10 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms10 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms10($cctbconfterms10 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms10)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS10, $cctbconfterms10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms11 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms11('fooValue');   // WHERE CctbConfTerms11 = 'fooValue'
     * $query->filterByCctbconfterms11('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms11 LIKE '%fooValue%'
     * $query->filterByCctbconfterms11(['foo', 'bar']); // WHERE CctbConfTerms11 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms11 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms11($cctbconfterms11 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms11)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS11, $cctbconfterms11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfTerms12 column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfterms12('fooValue');   // WHERE CctbConfTerms12 = 'fooValue'
     * $query->filterByCctbconfterms12('%fooValue%', Criteria::LIKE); // WHERE CctbConfTerms12 LIKE '%fooValue%'
     * $query->filterByCctbconfterms12(['foo', 'bar']); // WHERE CctbConfTerms12 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfterms12 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfterms12($cctbconfterms12 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfterms12)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFTERMS12, $cctbconfterms12, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfFutOrdrs column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconffutordrs('fooValue');   // WHERE CctbConfFutOrdrs = 'fooValue'
     * $query->filterByCctbconffutordrs('%fooValue%', Criteria::LIKE); // WHERE CctbConfFutOrdrs LIKE '%fooValue%'
     * $query->filterByCctbconffutordrs(['foo', 'bar']); // WHERE CctbConfFutOrdrs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconffutordrs The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconffutordrs($cctbconffutordrs = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconffutordrs)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFFUTORDRS, $cctbconffutordrs, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickticket('fooValue');   // WHERE CctbConfPickTicket = 'fooValue'
     * $query->filterByCctbconfpickticket('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickTicket LIKE '%fooValue%'
     * $query->filterByCctbconfpickticket(['foo', 'bar']); // WHERE CctbConfPickTicket IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfpickticket The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfpickticket($cctbconfpickticket = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKTICKET, $cctbconfpickticket, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfPickAlt column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickalt('fooValue');   // WHERE CctbConfPickAlt = 'fooValue'
     * $query->filterByCctbconfpickalt('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickAlt LIKE '%fooValue%'
     * $query->filterByCctbconfpickalt(['foo', 'bar']); // WHERE CctbConfPickAlt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfpickalt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfpickalt($cctbconfpickalt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickalt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKALT, $cctbconfpickalt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfPickRel column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfpickrel('fooValue');   // WHERE CctbConfPickRel = 'fooValue'
     * $query->filterByCctbconfpickrel('%fooValue%', Criteria::LIKE); // WHERE CctbConfPickRel LIKE '%fooValue%'
     * $query->filterByCctbconfpickrel(['foo', 'bar']); // WHERE CctbConfPickRel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfpickrel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfpickrel($cctbconfpickrel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfpickrel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPICKREL, $cctbconfpickrel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfUseOdue column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfuseodue('fooValue');   // WHERE CctbConfUseOdue = 'fooValue'
     * $query->filterByCctbconfuseodue('%fooValue%', Criteria::LIKE); // WHERE CctbConfUseOdue LIKE '%fooValue%'
     * $query->filterByCctbconfuseodue(['foo', 'bar']); // WHERE CctbConfUseOdue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfuseodue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfuseodue($cctbconfuseodue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfuseodue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFUSEODUE, $cctbconfuseodue, $comparison);

        return $this;
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
     * @param mixed $cctbconfagelevlhold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfagelevlhold($cctbconfagelevlhold = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFAGELEVLHOLD, $cctbconfagelevlhold, $comparison);

        return $this;
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
     * @param mixed $cctbconflevlamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconflevlamt($cctbconflevlamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFLEVLAMT, $cctbconflevlamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfUseCredLmt column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfusecredlmt('fooValue');   // WHERE CctbConfUseCredLmt = 'fooValue'
     * $query->filterByCctbconfusecredlmt('%fooValue%', Criteria::LIKE); // WHERE CctbConfUseCredLmt LIKE '%fooValue%'
     * $query->filterByCctbconfusecredlmt(['foo', 'bar']); // WHERE CctbConfUseCredLmt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfusecredlmt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfusecredlmt($cctbconfusecredlmt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfusecredlmt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFUSECREDLMT, $cctbconfusecredlmt, $comparison);

        return $this;
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
     * @param mixed $cctbconfpcttohold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfpcttohold($cctbconfpcttohold = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFPCTTOHOLD, $cctbconfpcttohold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfAddCurr column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfaddcurr('fooValue');   // WHERE CctbConfAddCurr = 'fooValue'
     * $query->filterByCctbconfaddcurr('%fooValue%', Criteria::LIKE); // WHERE CctbConfAddCurr LIKE '%fooValue%'
     * $query->filterByCctbconfaddcurr(['foo', 'bar']); // WHERE CctbConfAddCurr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfaddcurr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfaddcurr($cctbconfaddcurr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfaddcurr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFADDCURR, $cctbconfaddcurr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfMinMargHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfminmarghold('fooValue');   // WHERE CctbConfMinMargHold = 'fooValue'
     * $query->filterByCctbconfminmarghold('%fooValue%', Criteria::LIKE); // WHERE CctbConfMinMargHold LIKE '%fooValue%'
     * $query->filterByCctbconfminmarghold(['foo', 'bar']); // WHERE CctbConfMinMargHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfminmarghold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfminmarghold($cctbconfminmarghold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfminmarghold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFMINMARGHOLD, $cctbconfminmarghold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfMinMargBase column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfminmargbase('fooValue');   // WHERE CctbConfMinMargBase = 'fooValue'
     * $query->filterByCctbconfminmargbase('%fooValue%', Criteria::LIKE); // WHERE CctbConfMinMargBase LIKE '%fooValue%'
     * $query->filterByCctbconfminmargbase(['foo', 'bar']); // WHERE CctbConfMinMargBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfminmargbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfminmargbase($cctbconfminmargbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfminmargbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFMINMARGBASE, $cctbconfminmargbase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CctbConfHighLevlHold column
     *
     * Example usage:
     * <code>
     * $query->filterByCctbconfhighlevlhold('fooValue');   // WHERE CctbConfHighLevlHold = 'fooValue'
     * $query->filterByCctbconfhighlevlhold('%fooValue%', Criteria::LIKE); // WHERE CctbConfHighLevlHold LIKE '%fooValue%'
     * $query->filterByCctbconfhighlevlhold(['foo', 'bar']); // WHERE CctbConfHighLevlHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cctbconfhighlevlhold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCctbconfhighlevlhold($cctbconfhighlevlhold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cctbconfhighlevlhold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCcTableMap::COL_CCTBCONFHIGHLEVLHOLD, $cctbconfhighlevlhold, $comparison);

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

        $this->addUsingAlias(ConfigCcTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigCcTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigCcTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigCc $configCc Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
