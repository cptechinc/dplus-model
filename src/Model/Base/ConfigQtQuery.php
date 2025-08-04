<?php

namespace Base;

use \ConfigQt as ChildConfigQt;
use \ConfigQtQuery as ChildConfigQtQuery;
use \Exception;
use \PDO;
use Map\ConfigQtTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `qt_config` table.
 *
 * @method     ChildConfigQtQuery orderByQttbconfkey($order = Criteria::ASC) Order by the QttbConfKey column
 * @method     ChildConfigQtQuery orderByQttbconfautogen($order = Criteria::ASC) Order by the QttbConfAutoGen column
 * @method     ChildConfigQtQuery orderByQttbconfvendline($order = Criteria::ASC) Order by the QttbConfVendLine column
 * @method     ChildConfigQtQuery orderByQttbconfvendcols($order = Criteria::ASC) Order by the QttbConfVendCols column
 * @method     ChildConfigQtQuery orderByQttbconfexpdays($order = Criteria::ASC) Order by the QttbConfExpDays column
 * @method     ChildConfigQtQuery orderByQttbconfpricwind($order = Criteria::ASC) Order by the QttbConfPricWind column
 * @method     ChildConfigQtQuery orderByQttbconfdispnotes($order = Criteria::ASC) Order by the QttbConfDispNotes column
 * @method     ChildConfigQtQuery orderByQttbconfheadgetdef($order = Criteria::ASC) Order by the QttbConfHeadGetDef column
 * @method     ChildConfigQtQuery orderByQttbconfshowmarg($order = Criteria::ASC) Order by the QttbConfShowMarg column
 * @method     ChildConfigQtQuery orderByQttbconfshowsp($order = Criteria::ASC) Order by the QttbConfShowSp column
 * @method     ChildConfigQtQuery orderByQttbconfloadpric($order = Criteria::ASC) Order by the QttbConfLoadPric column
 * @method     ChildConfigQtQuery orderByQttbconfpricfromqty($order = Criteria::ASC) Order by the QttbConfPricFromQty column
 * @method     ChildConfigQtQuery orderByQttbconfloadcost($order = Criteria::ASC) Order by the QttbConfLoadCost column
 * @method     ChildConfigQtQuery orderByQttbconfdfltcontactinfo($order = Criteria::ASC) Order by the QttbConfDfltContactInfo column
 * @method     ChildConfigQtQuery orderByQttbconfenteruom($order = Criteria::ASC) Order by the QttbConfEnterUom column
 * @method     ChildConfigQtQuery orderByQttbconfreviewdays($order = Criteria::ASC) Order by the QttbConfReviewDays column
 * @method     ChildConfigQtQuery orderByQttbconfcrteslsordr($order = Criteria::ASC) Order by the QttbConfCrteSlsOrdr column
 * @method     ChildConfigQtQuery orderByQttbconfcrteqtyzero($order = Criteria::ASC) Order by the QttbConfCrteQtyZero column
 * @method     ChildConfigQtQuery orderByQttbconfautononstock($order = Criteria::ASC) Order by the QttbConfAutoNonStock column
 * @method     ChildConfigQtQuery orderByQttbconfmarkupmargin($order = Criteria::ASC) Order by the QttbConfMarkupMargin column
 * @method     ChildConfigQtQuery orderByQttbconfuseqtybrks($order = Criteria::ASC) Order by the QttbConfUseQtyBrks column
 * @method     ChildConfigQtQuery orderByQttbconfwghtentercalc($order = Criteria::ASC) Order by the QttbConfWghtEnterCalc column
 * @method     ChildConfigQtQuery orderByQttbconfdefquot($order = Criteria::ASC) Order by the QttbConfDefQuot column
 * @method     ChildConfigQtQuery orderByQttbconfdefpick($order = Criteria::ASC) Order by the QttbConfDefPick column
 * @method     ChildConfigQtQuery orderByQttbconfdefpack($order = Criteria::ASC) Order by the QttbConfDefPack column
 * @method     ChildConfigQtQuery orderByQttbconfdefinvc($order = Criteria::ASC) Order by the QttbConfDefInvc column
 * @method     ChildConfigQtQuery orderByQttbconfdefack($order = Criteria::ASC) Order by the QttbConfDefAck column
 * @method     ChildConfigQtQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigQtQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigQtQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigQtQuery groupByQttbconfkey() Group by the QttbConfKey column
 * @method     ChildConfigQtQuery groupByQttbconfautogen() Group by the QttbConfAutoGen column
 * @method     ChildConfigQtQuery groupByQttbconfvendline() Group by the QttbConfVendLine column
 * @method     ChildConfigQtQuery groupByQttbconfvendcols() Group by the QttbConfVendCols column
 * @method     ChildConfigQtQuery groupByQttbconfexpdays() Group by the QttbConfExpDays column
 * @method     ChildConfigQtQuery groupByQttbconfpricwind() Group by the QttbConfPricWind column
 * @method     ChildConfigQtQuery groupByQttbconfdispnotes() Group by the QttbConfDispNotes column
 * @method     ChildConfigQtQuery groupByQttbconfheadgetdef() Group by the QttbConfHeadGetDef column
 * @method     ChildConfigQtQuery groupByQttbconfshowmarg() Group by the QttbConfShowMarg column
 * @method     ChildConfigQtQuery groupByQttbconfshowsp() Group by the QttbConfShowSp column
 * @method     ChildConfigQtQuery groupByQttbconfloadpric() Group by the QttbConfLoadPric column
 * @method     ChildConfigQtQuery groupByQttbconfpricfromqty() Group by the QttbConfPricFromQty column
 * @method     ChildConfigQtQuery groupByQttbconfloadcost() Group by the QttbConfLoadCost column
 * @method     ChildConfigQtQuery groupByQttbconfdfltcontactinfo() Group by the QttbConfDfltContactInfo column
 * @method     ChildConfigQtQuery groupByQttbconfenteruom() Group by the QttbConfEnterUom column
 * @method     ChildConfigQtQuery groupByQttbconfreviewdays() Group by the QttbConfReviewDays column
 * @method     ChildConfigQtQuery groupByQttbconfcrteslsordr() Group by the QttbConfCrteSlsOrdr column
 * @method     ChildConfigQtQuery groupByQttbconfcrteqtyzero() Group by the QttbConfCrteQtyZero column
 * @method     ChildConfigQtQuery groupByQttbconfautononstock() Group by the QttbConfAutoNonStock column
 * @method     ChildConfigQtQuery groupByQttbconfmarkupmargin() Group by the QttbConfMarkupMargin column
 * @method     ChildConfigQtQuery groupByQttbconfuseqtybrks() Group by the QttbConfUseQtyBrks column
 * @method     ChildConfigQtQuery groupByQttbconfwghtentercalc() Group by the QttbConfWghtEnterCalc column
 * @method     ChildConfigQtQuery groupByQttbconfdefquot() Group by the QttbConfDefQuot column
 * @method     ChildConfigQtQuery groupByQttbconfdefpick() Group by the QttbConfDefPick column
 * @method     ChildConfigQtQuery groupByQttbconfdefpack() Group by the QttbConfDefPack column
 * @method     ChildConfigQtQuery groupByQttbconfdefinvc() Group by the QttbConfDefInvc column
 * @method     ChildConfigQtQuery groupByQttbconfdefack() Group by the QttbConfDefAck column
 * @method     ChildConfigQtQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigQtQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigQtQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigQtQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigQtQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigQtQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigQtQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigQtQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigQtQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigQt|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigQt matching the query
 * @method     ChildConfigQt findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigQt matching the query, or a new ChildConfigQt object populated from the query conditions when no match is found
 *
 * @method     ChildConfigQt|null findOneByQttbconfkey(int $QttbConfKey) Return the first ChildConfigQt filtered by the QttbConfKey column
 * @method     ChildConfigQt|null findOneByQttbconfautogen(string $QttbConfAutoGen) Return the first ChildConfigQt filtered by the QttbConfAutoGen column
 * @method     ChildConfigQt|null findOneByQttbconfvendline(int $QttbConfVendLine) Return the first ChildConfigQt filtered by the QttbConfVendLine column
 * @method     ChildConfigQt|null findOneByQttbconfvendcols(int $QttbConfVendCols) Return the first ChildConfigQt filtered by the QttbConfVendCols column
 * @method     ChildConfigQt|null findOneByQttbconfexpdays(int $QttbConfExpDays) Return the first ChildConfigQt filtered by the QttbConfExpDays column
 * @method     ChildConfigQt|null findOneByQttbconfpricwind(string $QttbConfPricWind) Return the first ChildConfigQt filtered by the QttbConfPricWind column
 * @method     ChildConfigQt|null findOneByQttbconfdispnotes(string $QttbConfDispNotes) Return the first ChildConfigQt filtered by the QttbConfDispNotes column
 * @method     ChildConfigQt|null findOneByQttbconfheadgetdef(int $QttbConfHeadGetDef) Return the first ChildConfigQt filtered by the QttbConfHeadGetDef column
 * @method     ChildConfigQt|null findOneByQttbconfshowmarg(string $QttbConfShowMarg) Return the first ChildConfigQt filtered by the QttbConfShowMarg column
 * @method     ChildConfigQt|null findOneByQttbconfshowsp(string $QttbConfShowSp) Return the first ChildConfigQt filtered by the QttbConfShowSp column
 * @method     ChildConfigQt|null findOneByQttbconfloadpric(string $QttbConfLoadPric) Return the first ChildConfigQt filtered by the QttbConfLoadPric column
 * @method     ChildConfigQt|null findOneByQttbconfpricfromqty(string $QttbConfPricFromQty) Return the first ChildConfigQt filtered by the QttbConfPricFromQty column
 * @method     ChildConfigQt|null findOneByQttbconfloadcost(string $QttbConfLoadCost) Return the first ChildConfigQt filtered by the QttbConfLoadCost column
 * @method     ChildConfigQt|null findOneByQttbconfdfltcontactinfo(string $QttbConfDfltContactInfo) Return the first ChildConfigQt filtered by the QttbConfDfltContactInfo column
 * @method     ChildConfigQt|null findOneByQttbconfenteruom(string $QttbConfEnterUom) Return the first ChildConfigQt filtered by the QttbConfEnterUom column
 * @method     ChildConfigQt|null findOneByQttbconfreviewdays(int $QttbConfReviewDays) Return the first ChildConfigQt filtered by the QttbConfReviewDays column
 * @method     ChildConfigQt|null findOneByQttbconfcrteslsordr(string $QttbConfCrteSlsOrdr) Return the first ChildConfigQt filtered by the QttbConfCrteSlsOrdr column
 * @method     ChildConfigQt|null findOneByQttbconfcrteqtyzero(string $QttbConfCrteQtyZero) Return the first ChildConfigQt filtered by the QttbConfCrteQtyZero column
 * @method     ChildConfigQt|null findOneByQttbconfautononstock(string $QttbConfAutoNonStock) Return the first ChildConfigQt filtered by the QttbConfAutoNonStock column
 * @method     ChildConfigQt|null findOneByQttbconfmarkupmargin(string $QttbConfMarkupMargin) Return the first ChildConfigQt filtered by the QttbConfMarkupMargin column
 * @method     ChildConfigQt|null findOneByQttbconfuseqtybrks(string $QttbConfUseQtyBrks) Return the first ChildConfigQt filtered by the QttbConfUseQtyBrks column
 * @method     ChildConfigQt|null findOneByQttbconfwghtentercalc(string $QttbConfWghtEnterCalc) Return the first ChildConfigQt filtered by the QttbConfWghtEnterCalc column
 * @method     ChildConfigQt|null findOneByQttbconfdefquot(string $QttbConfDefQuot) Return the first ChildConfigQt filtered by the QttbConfDefQuot column
 * @method     ChildConfigQt|null findOneByQttbconfdefpick(string $QttbConfDefPick) Return the first ChildConfigQt filtered by the QttbConfDefPick column
 * @method     ChildConfigQt|null findOneByQttbconfdefpack(string $QttbConfDefPack) Return the first ChildConfigQt filtered by the QttbConfDefPack column
 * @method     ChildConfigQt|null findOneByQttbconfdefinvc(string $QttbConfDefInvc) Return the first ChildConfigQt filtered by the QttbConfDefInvc column
 * @method     ChildConfigQt|null findOneByQttbconfdefack(string $QttbConfDefAck) Return the first ChildConfigQt filtered by the QttbConfDefAck column
 * @method     ChildConfigQt|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigQt filtered by the DateUpdtd column
 * @method     ChildConfigQt|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigQt filtered by the TimeUpdtd column
 * @method     ChildConfigQt|null findOneByDummy(string $dummy) Return the first ChildConfigQt filtered by the dummy column
 *
 * @method     ChildConfigQt requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigQt by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOne(?ConnectionInterface $con = null) Return the first ChildConfigQt matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigQt requireOneByQttbconfkey(int $QttbConfKey) Return the first ChildConfigQt filtered by the QttbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfautogen(string $QttbConfAutoGen) Return the first ChildConfigQt filtered by the QttbConfAutoGen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfvendline(int $QttbConfVendLine) Return the first ChildConfigQt filtered by the QttbConfVendLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfvendcols(int $QttbConfVendCols) Return the first ChildConfigQt filtered by the QttbConfVendCols column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfexpdays(int $QttbConfExpDays) Return the first ChildConfigQt filtered by the QttbConfExpDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfpricwind(string $QttbConfPricWind) Return the first ChildConfigQt filtered by the QttbConfPricWind column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdispnotes(string $QttbConfDispNotes) Return the first ChildConfigQt filtered by the QttbConfDispNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfheadgetdef(int $QttbConfHeadGetDef) Return the first ChildConfigQt filtered by the QttbConfHeadGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfshowmarg(string $QttbConfShowMarg) Return the first ChildConfigQt filtered by the QttbConfShowMarg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfshowsp(string $QttbConfShowSp) Return the first ChildConfigQt filtered by the QttbConfShowSp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfloadpric(string $QttbConfLoadPric) Return the first ChildConfigQt filtered by the QttbConfLoadPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfpricfromqty(string $QttbConfPricFromQty) Return the first ChildConfigQt filtered by the QttbConfPricFromQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfloadcost(string $QttbConfLoadCost) Return the first ChildConfigQt filtered by the QttbConfLoadCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdfltcontactinfo(string $QttbConfDfltContactInfo) Return the first ChildConfigQt filtered by the QttbConfDfltContactInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfenteruom(string $QttbConfEnterUom) Return the first ChildConfigQt filtered by the QttbConfEnterUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfreviewdays(int $QttbConfReviewDays) Return the first ChildConfigQt filtered by the QttbConfReviewDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfcrteslsordr(string $QttbConfCrteSlsOrdr) Return the first ChildConfigQt filtered by the QttbConfCrteSlsOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfcrteqtyzero(string $QttbConfCrteQtyZero) Return the first ChildConfigQt filtered by the QttbConfCrteQtyZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfautononstock(string $QttbConfAutoNonStock) Return the first ChildConfigQt filtered by the QttbConfAutoNonStock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfmarkupmargin(string $QttbConfMarkupMargin) Return the first ChildConfigQt filtered by the QttbConfMarkupMargin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfuseqtybrks(string $QttbConfUseQtyBrks) Return the first ChildConfigQt filtered by the QttbConfUseQtyBrks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfwghtentercalc(string $QttbConfWghtEnterCalc) Return the first ChildConfigQt filtered by the QttbConfWghtEnterCalc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdefquot(string $QttbConfDefQuot) Return the first ChildConfigQt filtered by the QttbConfDefQuot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdefpick(string $QttbConfDefPick) Return the first ChildConfigQt filtered by the QttbConfDefPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdefpack(string $QttbConfDefPack) Return the first ChildConfigQt filtered by the QttbConfDefPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdefinvc(string $QttbConfDefInvc) Return the first ChildConfigQt filtered by the QttbConfDefInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByQttbconfdefack(string $QttbConfDefAck) Return the first ChildConfigQt filtered by the QttbConfDefAck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigQt filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigQt filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigQt requireOneByDummy(string $dummy) Return the first ChildConfigQt filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigQt[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigQt objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigQt> find(?ConnectionInterface $con = null) Return ChildConfigQt objects based on current ModelCriteria
 *
 * @method     ChildConfigQt[]|Collection findByQttbconfkey(int|array<int> $QttbConfKey) Return ChildConfigQt objects filtered by the QttbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfkey(int|array<int> $QttbConfKey) Return ChildConfigQt objects filtered by the QttbConfKey column
 * @method     ChildConfigQt[]|Collection findByQttbconfautogen(string|array<string> $QttbConfAutoGen) Return ChildConfigQt objects filtered by the QttbConfAutoGen column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfautogen(string|array<string> $QttbConfAutoGen) Return ChildConfigQt objects filtered by the QttbConfAutoGen column
 * @method     ChildConfigQt[]|Collection findByQttbconfvendline(int|array<int> $QttbConfVendLine) Return ChildConfigQt objects filtered by the QttbConfVendLine column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfvendline(int|array<int> $QttbConfVendLine) Return ChildConfigQt objects filtered by the QttbConfVendLine column
 * @method     ChildConfigQt[]|Collection findByQttbconfvendcols(int|array<int> $QttbConfVendCols) Return ChildConfigQt objects filtered by the QttbConfVendCols column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfvendcols(int|array<int> $QttbConfVendCols) Return ChildConfigQt objects filtered by the QttbConfVendCols column
 * @method     ChildConfigQt[]|Collection findByQttbconfexpdays(int|array<int> $QttbConfExpDays) Return ChildConfigQt objects filtered by the QttbConfExpDays column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfexpdays(int|array<int> $QttbConfExpDays) Return ChildConfigQt objects filtered by the QttbConfExpDays column
 * @method     ChildConfigQt[]|Collection findByQttbconfpricwind(string|array<string> $QttbConfPricWind) Return ChildConfigQt objects filtered by the QttbConfPricWind column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfpricwind(string|array<string> $QttbConfPricWind) Return ChildConfigQt objects filtered by the QttbConfPricWind column
 * @method     ChildConfigQt[]|Collection findByQttbconfdispnotes(string|array<string> $QttbConfDispNotes) Return ChildConfigQt objects filtered by the QttbConfDispNotes column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdispnotes(string|array<string> $QttbConfDispNotes) Return ChildConfigQt objects filtered by the QttbConfDispNotes column
 * @method     ChildConfigQt[]|Collection findByQttbconfheadgetdef(int|array<int> $QttbConfHeadGetDef) Return ChildConfigQt objects filtered by the QttbConfHeadGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfheadgetdef(int|array<int> $QttbConfHeadGetDef) Return ChildConfigQt objects filtered by the QttbConfHeadGetDef column
 * @method     ChildConfigQt[]|Collection findByQttbconfshowmarg(string|array<string> $QttbConfShowMarg) Return ChildConfigQt objects filtered by the QttbConfShowMarg column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfshowmarg(string|array<string> $QttbConfShowMarg) Return ChildConfigQt objects filtered by the QttbConfShowMarg column
 * @method     ChildConfigQt[]|Collection findByQttbconfshowsp(string|array<string> $QttbConfShowSp) Return ChildConfigQt objects filtered by the QttbConfShowSp column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfshowsp(string|array<string> $QttbConfShowSp) Return ChildConfigQt objects filtered by the QttbConfShowSp column
 * @method     ChildConfigQt[]|Collection findByQttbconfloadpric(string|array<string> $QttbConfLoadPric) Return ChildConfigQt objects filtered by the QttbConfLoadPric column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfloadpric(string|array<string> $QttbConfLoadPric) Return ChildConfigQt objects filtered by the QttbConfLoadPric column
 * @method     ChildConfigQt[]|Collection findByQttbconfpricfromqty(string|array<string> $QttbConfPricFromQty) Return ChildConfigQt objects filtered by the QttbConfPricFromQty column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfpricfromqty(string|array<string> $QttbConfPricFromQty) Return ChildConfigQt objects filtered by the QttbConfPricFromQty column
 * @method     ChildConfigQt[]|Collection findByQttbconfloadcost(string|array<string> $QttbConfLoadCost) Return ChildConfigQt objects filtered by the QttbConfLoadCost column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfloadcost(string|array<string> $QttbConfLoadCost) Return ChildConfigQt objects filtered by the QttbConfLoadCost column
 * @method     ChildConfigQt[]|Collection findByQttbconfdfltcontactinfo(string|array<string> $QttbConfDfltContactInfo) Return ChildConfigQt objects filtered by the QttbConfDfltContactInfo column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdfltcontactinfo(string|array<string> $QttbConfDfltContactInfo) Return ChildConfigQt objects filtered by the QttbConfDfltContactInfo column
 * @method     ChildConfigQt[]|Collection findByQttbconfenteruom(string|array<string> $QttbConfEnterUom) Return ChildConfigQt objects filtered by the QttbConfEnterUom column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfenteruom(string|array<string> $QttbConfEnterUom) Return ChildConfigQt objects filtered by the QttbConfEnterUom column
 * @method     ChildConfigQt[]|Collection findByQttbconfreviewdays(int|array<int> $QttbConfReviewDays) Return ChildConfigQt objects filtered by the QttbConfReviewDays column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfreviewdays(int|array<int> $QttbConfReviewDays) Return ChildConfigQt objects filtered by the QttbConfReviewDays column
 * @method     ChildConfigQt[]|Collection findByQttbconfcrteslsordr(string|array<string> $QttbConfCrteSlsOrdr) Return ChildConfigQt objects filtered by the QttbConfCrteSlsOrdr column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfcrteslsordr(string|array<string> $QttbConfCrteSlsOrdr) Return ChildConfigQt objects filtered by the QttbConfCrteSlsOrdr column
 * @method     ChildConfigQt[]|Collection findByQttbconfcrteqtyzero(string|array<string> $QttbConfCrteQtyZero) Return ChildConfigQt objects filtered by the QttbConfCrteQtyZero column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfcrteqtyzero(string|array<string> $QttbConfCrteQtyZero) Return ChildConfigQt objects filtered by the QttbConfCrteQtyZero column
 * @method     ChildConfigQt[]|Collection findByQttbconfautononstock(string|array<string> $QttbConfAutoNonStock) Return ChildConfigQt objects filtered by the QttbConfAutoNonStock column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfautononstock(string|array<string> $QttbConfAutoNonStock) Return ChildConfigQt objects filtered by the QttbConfAutoNonStock column
 * @method     ChildConfigQt[]|Collection findByQttbconfmarkupmargin(string|array<string> $QttbConfMarkupMargin) Return ChildConfigQt objects filtered by the QttbConfMarkupMargin column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfmarkupmargin(string|array<string> $QttbConfMarkupMargin) Return ChildConfigQt objects filtered by the QttbConfMarkupMargin column
 * @method     ChildConfigQt[]|Collection findByQttbconfuseqtybrks(string|array<string> $QttbConfUseQtyBrks) Return ChildConfigQt objects filtered by the QttbConfUseQtyBrks column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfuseqtybrks(string|array<string> $QttbConfUseQtyBrks) Return ChildConfigQt objects filtered by the QttbConfUseQtyBrks column
 * @method     ChildConfigQt[]|Collection findByQttbconfwghtentercalc(string|array<string> $QttbConfWghtEnterCalc) Return ChildConfigQt objects filtered by the QttbConfWghtEnterCalc column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfwghtentercalc(string|array<string> $QttbConfWghtEnterCalc) Return ChildConfigQt objects filtered by the QttbConfWghtEnterCalc column
 * @method     ChildConfigQt[]|Collection findByQttbconfdefquot(string|array<string> $QttbConfDefQuot) Return ChildConfigQt objects filtered by the QttbConfDefQuot column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdefquot(string|array<string> $QttbConfDefQuot) Return ChildConfigQt objects filtered by the QttbConfDefQuot column
 * @method     ChildConfigQt[]|Collection findByQttbconfdefpick(string|array<string> $QttbConfDefPick) Return ChildConfigQt objects filtered by the QttbConfDefPick column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdefpick(string|array<string> $QttbConfDefPick) Return ChildConfigQt objects filtered by the QttbConfDefPick column
 * @method     ChildConfigQt[]|Collection findByQttbconfdefpack(string|array<string> $QttbConfDefPack) Return ChildConfigQt objects filtered by the QttbConfDefPack column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdefpack(string|array<string> $QttbConfDefPack) Return ChildConfigQt objects filtered by the QttbConfDefPack column
 * @method     ChildConfigQt[]|Collection findByQttbconfdefinvc(string|array<string> $QttbConfDefInvc) Return ChildConfigQt objects filtered by the QttbConfDefInvc column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdefinvc(string|array<string> $QttbConfDefInvc) Return ChildConfigQt objects filtered by the QttbConfDefInvc column
 * @method     ChildConfigQt[]|Collection findByQttbconfdefack(string|array<string> $QttbConfDefAck) Return ChildConfigQt objects filtered by the QttbConfDefAck column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByQttbconfdefack(string|array<string> $QttbConfDefAck) Return ChildConfigQt objects filtered by the QttbConfDefAck column
 * @method     ChildConfigQt[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigQt objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigQt objects filtered by the DateUpdtd column
 * @method     ChildConfigQt[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigQt objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigQt objects filtered by the TimeUpdtd column
 * @method     ChildConfigQt[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigQt objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigQt> findByDummy(string|array<string> $dummy) Return ChildConfigQt objects filtered by the dummy column
 *
 * @method     ChildConfigQt[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigQt> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigQtQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigQtQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigQt', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigQtQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigQtQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigQtQuery) {
            return $criteria;
        }
        $query = new ChildConfigQtQuery();
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
     * @return ChildConfigQt|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigQtTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigQt A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QttbConfKey, QttbConfAutoGen, QttbConfVendLine, QttbConfVendCols, QttbConfExpDays, QttbConfPricWind, QttbConfDispNotes, QttbConfHeadGetDef, QttbConfShowMarg, QttbConfShowSp, QttbConfLoadPric, QttbConfPricFromQty, QttbConfLoadCost, QttbConfDfltContactInfo, QttbConfEnterUom, QttbConfReviewDays, QttbConfCrteSlsOrdr, QttbConfCrteQtyZero, QttbConfAutoNonStock, QttbConfMarkupMargin, QttbConfUseQtyBrks, QttbConfWghtEnterCalc, QttbConfDefQuot, QttbConfDefPick, QttbConfDefPack, QttbConfDefInvc, QttbConfDefAck, DateUpdtd, TimeUpdtd, dummy FROM qt_config WHERE QttbConfKey = :p0';
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
            /** @var ChildConfigQt $obj */
            $obj = new ChildConfigQt();
            $obj->hydrate($row);
            ConfigQtTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigQt|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the QttbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfkey(1234); // WHERE QttbConfKey = 1234
     * $query->filterByQttbconfkey(array(12, 34)); // WHERE QttbConfKey IN (12, 34)
     * $query->filterByQttbconfkey(array('min' => 12)); // WHERE QttbConfKey > 12
     * </code>
     *
     * @param mixed $qttbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfkey($qttbconfkey = null, ?string $comparison = null)
    {
        if (is_array($qttbconfkey)) {
            $useMinMax = false;
            if (isset($qttbconfkey['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $qttbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfkey['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $qttbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $qttbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfAutoGen column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfautogen('fooValue');   // WHERE QttbConfAutoGen = 'fooValue'
     * $query->filterByQttbconfautogen('%fooValue%', Criteria::LIKE); // WHERE QttbConfAutoGen LIKE '%fooValue%'
     * $query->filterByQttbconfautogen(['foo', 'bar']); // WHERE QttbConfAutoGen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfautogen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfautogen($qttbconfautogen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfautogen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFAUTOGEN, $qttbconfautogen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfVendLine column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfvendline(1234); // WHERE QttbConfVendLine = 1234
     * $query->filterByQttbconfvendline(array(12, 34)); // WHERE QttbConfVendLine IN (12, 34)
     * $query->filterByQttbconfvendline(array('min' => 12)); // WHERE QttbConfVendLine > 12
     * </code>
     *
     * @param mixed $qttbconfvendline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfvendline($qttbconfvendline = null, ?string $comparison = null)
    {
        if (is_array($qttbconfvendline)) {
            $useMinMax = false;
            if (isset($qttbconfvendline['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDLINE, $qttbconfvendline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfvendline['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDLINE, $qttbconfvendline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDLINE, $qttbconfvendline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfVendCols column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfvendcols(1234); // WHERE QttbConfVendCols = 1234
     * $query->filterByQttbconfvendcols(array(12, 34)); // WHERE QttbConfVendCols IN (12, 34)
     * $query->filterByQttbconfvendcols(array('min' => 12)); // WHERE QttbConfVendCols > 12
     * </code>
     *
     * @param mixed $qttbconfvendcols The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfvendcols($qttbconfvendcols = null, ?string $comparison = null)
    {
        if (is_array($qttbconfvendcols)) {
            $useMinMax = false;
            if (isset($qttbconfvendcols['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDCOLS, $qttbconfvendcols['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfvendcols['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDCOLS, $qttbconfvendcols['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFVENDCOLS, $qttbconfvendcols, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfExpDays column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfexpdays(1234); // WHERE QttbConfExpDays = 1234
     * $query->filterByQttbconfexpdays(array(12, 34)); // WHERE QttbConfExpDays IN (12, 34)
     * $query->filterByQttbconfexpdays(array('min' => 12)); // WHERE QttbConfExpDays > 12
     * </code>
     *
     * @param mixed $qttbconfexpdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfexpdays($qttbconfexpdays = null, ?string $comparison = null)
    {
        if (is_array($qttbconfexpdays)) {
            $useMinMax = false;
            if (isset($qttbconfexpdays['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFEXPDAYS, $qttbconfexpdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfexpdays['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFEXPDAYS, $qttbconfexpdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFEXPDAYS, $qttbconfexpdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfPricWind column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfpricwind('fooValue');   // WHERE QttbConfPricWind = 'fooValue'
     * $query->filterByQttbconfpricwind('%fooValue%', Criteria::LIKE); // WHERE QttbConfPricWind LIKE '%fooValue%'
     * $query->filterByQttbconfpricwind(['foo', 'bar']); // WHERE QttbConfPricWind IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfpricwind The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfpricwind($qttbconfpricwind = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfpricwind)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFPRICWIND, $qttbconfpricwind, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDispNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdispnotes('fooValue');   // WHERE QttbConfDispNotes = 'fooValue'
     * $query->filterByQttbconfdispnotes('%fooValue%', Criteria::LIKE); // WHERE QttbConfDispNotes LIKE '%fooValue%'
     * $query->filterByQttbconfdispnotes(['foo', 'bar']); // WHERE QttbConfDispNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdispnotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdispnotes($qttbconfdispnotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdispnotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDISPNOTES, $qttbconfdispnotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfHeadGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfheadgetdef(1234); // WHERE QttbConfHeadGetDef = 1234
     * $query->filterByQttbconfheadgetdef(array(12, 34)); // WHERE QttbConfHeadGetDef IN (12, 34)
     * $query->filterByQttbconfheadgetdef(array('min' => 12)); // WHERE QttbConfHeadGetDef > 12
     * </code>
     *
     * @param mixed $qttbconfheadgetdef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfheadgetdef($qttbconfheadgetdef = null, ?string $comparison = null)
    {
        if (is_array($qttbconfheadgetdef)) {
            $useMinMax = false;
            if (isset($qttbconfheadgetdef['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF, $qttbconfheadgetdef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfheadgetdef['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF, $qttbconfheadgetdef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFHEADGETDEF, $qttbconfheadgetdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfShowMarg column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfshowmarg('fooValue');   // WHERE QttbConfShowMarg = 'fooValue'
     * $query->filterByQttbconfshowmarg('%fooValue%', Criteria::LIKE); // WHERE QttbConfShowMarg LIKE '%fooValue%'
     * $query->filterByQttbconfshowmarg(['foo', 'bar']); // WHERE QttbConfShowMarg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfshowmarg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfshowmarg($qttbconfshowmarg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfshowmarg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFSHOWMARG, $qttbconfshowmarg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfShowSp column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfshowsp('fooValue');   // WHERE QttbConfShowSp = 'fooValue'
     * $query->filterByQttbconfshowsp('%fooValue%', Criteria::LIKE); // WHERE QttbConfShowSp LIKE '%fooValue%'
     * $query->filterByQttbconfshowsp(['foo', 'bar']); // WHERE QttbConfShowSp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfshowsp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfshowsp($qttbconfshowsp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfshowsp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFSHOWSP, $qttbconfshowsp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfLoadPric column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfloadpric('fooValue');   // WHERE QttbConfLoadPric = 'fooValue'
     * $query->filterByQttbconfloadpric('%fooValue%', Criteria::LIKE); // WHERE QttbConfLoadPric LIKE '%fooValue%'
     * $query->filterByQttbconfloadpric(['foo', 'bar']); // WHERE QttbConfLoadPric IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfloadpric The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfloadpric($qttbconfloadpric = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfloadpric)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFLOADPRIC, $qttbconfloadpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfPricFromQty column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfpricfromqty('fooValue');   // WHERE QttbConfPricFromQty = 'fooValue'
     * $query->filterByQttbconfpricfromqty('%fooValue%', Criteria::LIKE); // WHERE QttbConfPricFromQty LIKE '%fooValue%'
     * $query->filterByQttbconfpricfromqty(['foo', 'bar']); // WHERE QttbConfPricFromQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfpricfromqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfpricfromqty($qttbconfpricfromqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfpricfromqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFPRICFROMQTY, $qttbconfpricfromqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfLoadCost column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfloadcost('fooValue');   // WHERE QttbConfLoadCost = 'fooValue'
     * $query->filterByQttbconfloadcost('%fooValue%', Criteria::LIKE); // WHERE QttbConfLoadCost LIKE '%fooValue%'
     * $query->filterByQttbconfloadcost(['foo', 'bar']); // WHERE QttbConfLoadCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfloadcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfloadcost($qttbconfloadcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfloadcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFLOADCOST, $qttbconfloadcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDfltContactInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdfltcontactinfo('fooValue');   // WHERE QttbConfDfltContactInfo = 'fooValue'
     * $query->filterByQttbconfdfltcontactinfo('%fooValue%', Criteria::LIKE); // WHERE QttbConfDfltContactInfo LIKE '%fooValue%'
     * $query->filterByQttbconfdfltcontactinfo(['foo', 'bar']); // WHERE QttbConfDfltContactInfo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdfltcontactinfo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdfltcontactinfo($qttbconfdfltcontactinfo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdfltcontactinfo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDFLTCONTACTINFO, $qttbconfdfltcontactinfo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfEnterUom column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfenteruom('fooValue');   // WHERE QttbConfEnterUom = 'fooValue'
     * $query->filterByQttbconfenteruom('%fooValue%', Criteria::LIKE); // WHERE QttbConfEnterUom LIKE '%fooValue%'
     * $query->filterByQttbconfenteruom(['foo', 'bar']); // WHERE QttbConfEnterUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfenteruom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfenteruom($qttbconfenteruom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfenteruom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFENTERUOM, $qttbconfenteruom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfReviewDays column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfreviewdays(1234); // WHERE QttbConfReviewDays = 1234
     * $query->filterByQttbconfreviewdays(array(12, 34)); // WHERE QttbConfReviewDays IN (12, 34)
     * $query->filterByQttbconfreviewdays(array('min' => 12)); // WHERE QttbConfReviewDays > 12
     * </code>
     *
     * @param mixed $qttbconfreviewdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfreviewdays($qttbconfreviewdays = null, ?string $comparison = null)
    {
        if (is_array($qttbconfreviewdays)) {
            $useMinMax = false;
            if (isset($qttbconfreviewdays['min'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS, $qttbconfreviewdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qttbconfreviewdays['max'])) {
                $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS, $qttbconfreviewdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFREVIEWDAYS, $qttbconfreviewdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfCrteSlsOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfcrteslsordr('fooValue');   // WHERE QttbConfCrteSlsOrdr = 'fooValue'
     * $query->filterByQttbconfcrteslsordr('%fooValue%', Criteria::LIKE); // WHERE QttbConfCrteSlsOrdr LIKE '%fooValue%'
     * $query->filterByQttbconfcrteslsordr(['foo', 'bar']); // WHERE QttbConfCrteSlsOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfcrteslsordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfcrteslsordr($qttbconfcrteslsordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfcrteslsordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFCRTESLSORDR, $qttbconfcrteslsordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfCrteQtyZero column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfcrteqtyzero('fooValue');   // WHERE QttbConfCrteQtyZero = 'fooValue'
     * $query->filterByQttbconfcrteqtyzero('%fooValue%', Criteria::LIKE); // WHERE QttbConfCrteQtyZero LIKE '%fooValue%'
     * $query->filterByQttbconfcrteqtyzero(['foo', 'bar']); // WHERE QttbConfCrteQtyZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfcrteqtyzero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfcrteqtyzero($qttbconfcrteqtyzero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfcrteqtyzero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFCRTEQTYZERO, $qttbconfcrteqtyzero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfAutoNonStock column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfautononstock('fooValue');   // WHERE QttbConfAutoNonStock = 'fooValue'
     * $query->filterByQttbconfautononstock('%fooValue%', Criteria::LIKE); // WHERE QttbConfAutoNonStock LIKE '%fooValue%'
     * $query->filterByQttbconfautononstock(['foo', 'bar']); // WHERE QttbConfAutoNonStock IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfautononstock The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfautononstock($qttbconfautononstock = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfautononstock)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFAUTONONSTOCK, $qttbconfautononstock, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfMarkupMargin column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfmarkupmargin('fooValue');   // WHERE QttbConfMarkupMargin = 'fooValue'
     * $query->filterByQttbconfmarkupmargin('%fooValue%', Criteria::LIKE); // WHERE QttbConfMarkupMargin LIKE '%fooValue%'
     * $query->filterByQttbconfmarkupmargin(['foo', 'bar']); // WHERE QttbConfMarkupMargin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfmarkupmargin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfmarkupmargin($qttbconfmarkupmargin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfmarkupmargin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFMARKUPMARGIN, $qttbconfmarkupmargin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfUseQtyBrks column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfuseqtybrks('fooValue');   // WHERE QttbConfUseQtyBrks = 'fooValue'
     * $query->filterByQttbconfuseqtybrks('%fooValue%', Criteria::LIKE); // WHERE QttbConfUseQtyBrks LIKE '%fooValue%'
     * $query->filterByQttbconfuseqtybrks(['foo', 'bar']); // WHERE QttbConfUseQtyBrks IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfuseqtybrks The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfuseqtybrks($qttbconfuseqtybrks = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfuseqtybrks)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFUSEQTYBRKS, $qttbconfuseqtybrks, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfWghtEnterCalc column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfwghtentercalc('fooValue');   // WHERE QttbConfWghtEnterCalc = 'fooValue'
     * $query->filterByQttbconfwghtentercalc('%fooValue%', Criteria::LIKE); // WHERE QttbConfWghtEnterCalc LIKE '%fooValue%'
     * $query->filterByQttbconfwghtentercalc(['foo', 'bar']); // WHERE QttbConfWghtEnterCalc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfwghtentercalc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfwghtentercalc($qttbconfwghtentercalc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfwghtentercalc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFWGHTENTERCALC, $qttbconfwghtentercalc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDefQuot column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdefquot('fooValue');   // WHERE QttbConfDefQuot = 'fooValue'
     * $query->filterByQttbconfdefquot('%fooValue%', Criteria::LIKE); // WHERE QttbConfDefQuot LIKE '%fooValue%'
     * $query->filterByQttbconfdefquot(['foo', 'bar']); // WHERE QttbConfDefQuot IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdefquot The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdefquot($qttbconfdefquot = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdefquot)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDEFQUOT, $qttbconfdefquot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDefPick column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdefpick('fooValue');   // WHERE QttbConfDefPick = 'fooValue'
     * $query->filterByQttbconfdefpick('%fooValue%', Criteria::LIKE); // WHERE QttbConfDefPick LIKE '%fooValue%'
     * $query->filterByQttbconfdefpick(['foo', 'bar']); // WHERE QttbConfDefPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdefpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdefpick($qttbconfdefpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdefpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDEFPICK, $qttbconfdefpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDefPack column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdefpack('fooValue');   // WHERE QttbConfDefPack = 'fooValue'
     * $query->filterByQttbconfdefpack('%fooValue%', Criteria::LIKE); // WHERE QttbConfDefPack LIKE '%fooValue%'
     * $query->filterByQttbconfdefpack(['foo', 'bar']); // WHERE QttbConfDefPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdefpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdefpack($qttbconfdefpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdefpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDEFPACK, $qttbconfdefpack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDefInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdefinvc('fooValue');   // WHERE QttbConfDefInvc = 'fooValue'
     * $query->filterByQttbconfdefinvc('%fooValue%', Criteria::LIKE); // WHERE QttbConfDefInvc LIKE '%fooValue%'
     * $query->filterByQttbconfdefinvc(['foo', 'bar']); // WHERE QttbConfDefInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdefinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdefinvc($qttbconfdefinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdefinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDEFINVC, $qttbconfdefinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QttbConfDefAck column
     *
     * Example usage:
     * <code>
     * $query->filterByQttbconfdefack('fooValue');   // WHERE QttbConfDefAck = 'fooValue'
     * $query->filterByQttbconfdefack('%fooValue%', Criteria::LIKE); // WHERE QttbConfDefAck LIKE '%fooValue%'
     * $query->filterByQttbconfdefack(['foo', 'bar']); // WHERE QttbConfDefAck IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qttbconfdefack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQttbconfdefack($qttbconfdefack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qttbconfdefack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFDEFACK, $qttbconfdefack, $comparison);

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

        $this->addUsingAlias(ConfigQtTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigQtTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigQtTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigQt $configQt Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configQt = null)
    {
        if ($configQt) {
            $this->addUsingAlias(ConfigQtTableMap::COL_QTTBCONFKEY, $configQt->getQttbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the qt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigQtTableMap::clearInstancePool();
            ConfigQtTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigQtTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigQtTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigQtTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigQtTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
