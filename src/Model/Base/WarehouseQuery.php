<?php

namespace Base;

use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\WarehouseTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_whse_code' table.
 *
 *
 *
 * @method     ChildWarehouseQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWarehouseQuery orderByIntbwhsename($order = Criteria::ASC) Order by the IntbWhseName column
 * @method     ChildWarehouseQuery orderByIntbwhseadr1($order = Criteria::ASC) Order by the IntbWhseAdr1 column
 * @method     ChildWarehouseQuery orderByIntbwhseadr2($order = Criteria::ASC) Order by the IntbWhseAdr2 column
 * @method     ChildWarehouseQuery orderByIntbwhsecity($order = Criteria::ASC) Order by the IntbWhseCity column
 * @method     ChildWarehouseQuery orderByIntbwhsestat($order = Criteria::ASC) Order by the IntbWhseStat column
 * @method     ChildWarehouseQuery orderByIntbwhsezipcode($order = Criteria::ASC) Order by the IntbWhseZipCode column
 * @method     ChildWarehouseQuery orderByIntbwhsectry($order = Criteria::ASC) Order by the IntbWhseCtry column
 * @method     ChildWarehouseQuery orderByIntbwhseusehandheld($order = Criteria::ASC) Order by the IntbWhseUseHandheld column
 * @method     ChildWarehouseQuery orderByIntbwhsecashcust($order = Criteria::ASC) Order by the IntbWhseCashCust column
 * @method     ChildWarehouseQuery orderByIntbwhsepickdtl($order = Criteria::ASC) Order by the IntbWhsePickDtl column
 * @method     ChildWarehouseQuery orderByIntbwhseprodbin($order = Criteria::ASC) Order by the IntbWhseProdBin column
 * @method     ChildWarehouseQuery orderByIntbwhsepharea($order = Criteria::ASC) Order by the IntbWhsePhArea column
 * @method     ChildWarehouseQuery orderByIntbwhsephfrst3($order = Criteria::ASC) Order by the IntbWhsePhFrst3 column
 * @method     ChildWarehouseQuery orderByIntbwhsephlast4($order = Criteria::ASC) Order by the IntbWhsePhLast4 column
 * @method     ChildWarehouseQuery orderByIntbwhsephext($order = Criteria::ASC) Order by the IntbWhsePhExt column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxarea($order = Criteria::ASC) Order by the IntbWhseFaxArea column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxfrst3($order = Criteria::ASC) Order by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxlast4($order = Criteria::ASC) Order by the IntbWhseFaxLast4 column
 * @method     ChildWarehouseQuery orderByIntbwhseemailadr($order = Criteria::ASC) Order by the IntbWhseEmailAdr column
 * @method     ChildWarehouseQuery orderByIntbwhseqcrgabin($order = Criteria::ASC) Order by the IntbWhseQcRgaBin column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter1($order = Criteria::ASC) Order by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter2($order = Criteria::ASC) Order by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter3($order = Criteria::ASC) Order by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter4($order = Criteria::ASC) Order by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter5($order = Criteria::ASC) Order by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouseQuery orderByIntbwhseprofwhse($order = Criteria::ASC) Order by the IntbWhseProfWhse column
 * @method     ChildWarehouseQuery orderByIntbwhseasetwhse($order = Criteria::ASC) Order by the IntbWhseAsetWhse column
 * @method     ChildWarehouseQuery orderByIntbwhseconsignwhse($order = Criteria::ASC) Order by the IntbWhseConsignWhse column
 * @method     ChildWarehouseQuery orderByIntbwhsebinrangelist($order = Criteria::ASC) Order by the IntbWhseBinRangeList column
 * @method     ChildWarehouseQuery orderByIntbwhsesupplywhse($order = Criteria::ASC) Order by the IntbWhseSupplyWhse column
 * @method     ChildWarehouseQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarehouseQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarehouseQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarehouseQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWarehouseQuery groupByIntbwhsename() Group by the IntbWhseName column
 * @method     ChildWarehouseQuery groupByIntbwhseadr1() Group by the IntbWhseAdr1 column
 * @method     ChildWarehouseQuery groupByIntbwhseadr2() Group by the IntbWhseAdr2 column
 * @method     ChildWarehouseQuery groupByIntbwhsecity() Group by the IntbWhseCity column
 * @method     ChildWarehouseQuery groupByIntbwhsestat() Group by the IntbWhseStat column
 * @method     ChildWarehouseQuery groupByIntbwhsezipcode() Group by the IntbWhseZipCode column
 * @method     ChildWarehouseQuery groupByIntbwhsectry() Group by the IntbWhseCtry column
 * @method     ChildWarehouseQuery groupByIntbwhseusehandheld() Group by the IntbWhseUseHandheld column
 * @method     ChildWarehouseQuery groupByIntbwhsecashcust() Group by the IntbWhseCashCust column
 * @method     ChildWarehouseQuery groupByIntbwhsepickdtl() Group by the IntbWhsePickDtl column
 * @method     ChildWarehouseQuery groupByIntbwhseprodbin() Group by the IntbWhseProdBin column
 * @method     ChildWarehouseQuery groupByIntbwhsepharea() Group by the IntbWhsePhArea column
 * @method     ChildWarehouseQuery groupByIntbwhsephfrst3() Group by the IntbWhsePhFrst3 column
 * @method     ChildWarehouseQuery groupByIntbwhsephlast4() Group by the IntbWhsePhLast4 column
 * @method     ChildWarehouseQuery groupByIntbwhsephext() Group by the IntbWhsePhExt column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxarea() Group by the IntbWhseFaxArea column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxfrst3() Group by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxlast4() Group by the IntbWhseFaxLast4 column
 * @method     ChildWarehouseQuery groupByIntbwhseemailadr() Group by the IntbWhseEmailAdr column
 * @method     ChildWarehouseQuery groupByIntbwhseqcrgabin() Group by the IntbWhseQcRgaBin column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter1() Group by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter2() Group by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter3() Group by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter4() Group by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter5() Group by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouseQuery groupByIntbwhseprofwhse() Group by the IntbWhseProfWhse column
 * @method     ChildWarehouseQuery groupByIntbwhseasetwhse() Group by the IntbWhseAsetWhse column
 * @method     ChildWarehouseQuery groupByIntbwhseconsignwhse() Group by the IntbWhseConsignWhse column
 * @method     ChildWarehouseQuery groupByIntbwhsebinrangelist() Group by the IntbWhseBinRangeList column
 * @method     ChildWarehouseQuery groupByIntbwhsesupplywhse() Group by the IntbWhseSupplyWhse column
 * @method     ChildWarehouseQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarehouseQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarehouseQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarehouseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarehouseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarehouseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarehouseQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarehouseQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarehouseQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarehouseQuery leftJoinWhseLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the WhseLotserial relation
 * @method     ChildWarehouseQuery rightJoinWhseLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WhseLotserial relation
 * @method     ChildWarehouseQuery innerJoinWhseLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the WhseLotserial relation
 *
 * @method     ChildWarehouseQuery joinWithWhseLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WhseLotserial relation
 *
 * @method     ChildWarehouseQuery leftJoinWithWhseLotserial() Adds a LEFT JOIN clause and with to the query using the WhseLotserial relation
 * @method     ChildWarehouseQuery rightJoinWithWhseLotserial() Adds a RIGHT JOIN clause and with to the query using the WhseLotserial relation
 * @method     ChildWarehouseQuery innerJoinWithWhseLotserial() Adds a INNER JOIN clause and with to the query using the WhseLotserial relation
 *
 * @method     ChildWarehouseQuery leftJoinWarehouseNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery rightJoinWarehouseNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery innerJoinWarehouseNote($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseNote relation
 *
 * @method     ChildWarehouseQuery joinWithWarehouseNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseNote relation
 *
 * @method     ChildWarehouseQuery leftJoinWithWarehouseNote() Adds a LEFT JOIN clause and with to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery rightJoinWithWarehouseNote() Adds a RIGHT JOIN clause and with to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery innerJoinWithWarehouseNote() Adds a INNER JOIN clause and with to the query using the WarehouseNote relation
 *
 * @method     \WhseLotserialQuery|\WarehouseNoteQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWarehouse findOne(ConnectionInterface $con = null) Return the first ChildWarehouse matching the query
 * @method     ChildWarehouse findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarehouse matching the query, or a new ChildWarehouse object populated from the query conditions when no match is found
 *
 * @method     ChildWarehouse findOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouse filtered by the IntbWhse column
 * @method     ChildWarehouse findOneByIntbwhsename(string $IntbWhseName) Return the first ChildWarehouse filtered by the IntbWhseName column
 * @method     ChildWarehouse findOneByIntbwhseadr1(string $IntbWhseAdr1) Return the first ChildWarehouse filtered by the IntbWhseAdr1 column
 * @method     ChildWarehouse findOneByIntbwhseadr2(string $IntbWhseAdr2) Return the first ChildWarehouse filtered by the IntbWhseAdr2 column
 * @method     ChildWarehouse findOneByIntbwhsecity(string $IntbWhseCity) Return the first ChildWarehouse filtered by the IntbWhseCity column
 * @method     ChildWarehouse findOneByIntbwhsestat(string $IntbWhseStat) Return the first ChildWarehouse filtered by the IntbWhseStat column
 * @method     ChildWarehouse findOneByIntbwhsezipcode(string $IntbWhseZipCode) Return the first ChildWarehouse filtered by the IntbWhseZipCode column
 * @method     ChildWarehouse findOneByIntbwhsectry(string $IntbWhseCtry) Return the first ChildWarehouse filtered by the IntbWhseCtry column
 * @method     ChildWarehouse findOneByIntbwhseusehandheld(string $IntbWhseUseHandheld) Return the first ChildWarehouse filtered by the IntbWhseUseHandheld column
 * @method     ChildWarehouse findOneByIntbwhsecashcust(string $IntbWhseCashCust) Return the first ChildWarehouse filtered by the IntbWhseCashCust column
 * @method     ChildWarehouse findOneByIntbwhsepickdtl(string $IntbWhsePickDtl) Return the first ChildWarehouse filtered by the IntbWhsePickDtl column
 * @method     ChildWarehouse findOneByIntbwhseprodbin(string $IntbWhseProdBin) Return the first ChildWarehouse filtered by the IntbWhseProdBin column
 * @method     ChildWarehouse findOneByIntbwhsepharea(string $IntbWhsePhArea) Return the first ChildWarehouse filtered by the IntbWhsePhArea column
 * @method     ChildWarehouse findOneByIntbwhsephfrst3(string $IntbWhsePhFrst3) Return the first ChildWarehouse filtered by the IntbWhsePhFrst3 column
 * @method     ChildWarehouse findOneByIntbwhsephlast4(string $IntbWhsePhLast4) Return the first ChildWarehouse filtered by the IntbWhsePhLast4 column
 * @method     ChildWarehouse findOneByIntbwhsephext(string $IntbWhsePhExt) Return the first ChildWarehouse filtered by the IntbWhsePhExt column
 * @method     ChildWarehouse findOneByIntbwhsefaxarea(string $IntbWhseFaxArea) Return the first ChildWarehouse filtered by the IntbWhseFaxArea column
 * @method     ChildWarehouse findOneByIntbwhsefaxfrst3(string $IntbWhseFaxFrst3) Return the first ChildWarehouse filtered by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouse findOneByIntbwhsefaxlast4(string $IntbWhseFaxLast4) Return the first ChildWarehouse filtered by the IntbWhseFaxLast4 column
 * @method     ChildWarehouse findOneByIntbwhseemailadr(string $IntbWhseEmailAdr) Return the first ChildWarehouse filtered by the IntbWhseEmailAdr column
 * @method     ChildWarehouse findOneByIntbwhseqcrgabin(string $IntbWhseQcRgaBin) Return the first ChildWarehouse filtered by the IntbWhseQcRgaBin column
 * @method     ChildWarehouse findOneByIntbwhserfprinter1(string $IntbWhseRfPrinter1) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouse findOneByIntbwhserfprinter2(string $IntbWhseRfPrinter2) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouse findOneByIntbwhserfprinter3(string $IntbWhseRfPrinter3) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouse findOneByIntbwhserfprinter4(string $IntbWhseRfPrinter4) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouse findOneByIntbwhserfprinter5(string $IntbWhseRfPrinter5) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouse findOneByIntbwhseprofwhse(string $IntbWhseProfWhse) Return the first ChildWarehouse filtered by the IntbWhseProfWhse column
 * @method     ChildWarehouse findOneByIntbwhseasetwhse(string $IntbWhseAsetWhse) Return the first ChildWarehouse filtered by the IntbWhseAsetWhse column
 * @method     ChildWarehouse findOneByIntbwhseconsignwhse(string $IntbWhseConsignWhse) Return the first ChildWarehouse filtered by the IntbWhseConsignWhse column
 * @method     ChildWarehouse findOneByIntbwhsebinrangelist(string $IntbWhseBinRangeList) Return the first ChildWarehouse filtered by the IntbWhseBinRangeList column
 * @method     ChildWarehouse findOneByIntbwhsesupplywhse(string $IntbWhseSupplyWhse) Return the first ChildWarehouse filtered by the IntbWhseSupplyWhse column
 * @method     ChildWarehouse findOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouse filtered by the DateUpdtd column
 * @method     ChildWarehouse findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouse filtered by the TimeUpdtd column
 * @method     ChildWarehouse findOneByDummy(string $dummy) Return the first ChildWarehouse filtered by the dummy column *

 * @method     ChildWarehouse requirePk($key, ConnectionInterface $con = null) Return the ChildWarehouse by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOne(ConnectionInterface $con = null) Return the first ChildWarehouse matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouse requireOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouse filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsename(string $IntbWhseName) Return the first ChildWarehouse filtered by the IntbWhseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseadr1(string $IntbWhseAdr1) Return the first ChildWarehouse filtered by the IntbWhseAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseadr2(string $IntbWhseAdr2) Return the first ChildWarehouse filtered by the IntbWhseAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsecity(string $IntbWhseCity) Return the first ChildWarehouse filtered by the IntbWhseCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsestat(string $IntbWhseStat) Return the first ChildWarehouse filtered by the IntbWhseStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsezipcode(string $IntbWhseZipCode) Return the first ChildWarehouse filtered by the IntbWhseZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsectry(string $IntbWhseCtry) Return the first ChildWarehouse filtered by the IntbWhseCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseusehandheld(string $IntbWhseUseHandheld) Return the first ChildWarehouse filtered by the IntbWhseUseHandheld column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsecashcust(string $IntbWhseCashCust) Return the first ChildWarehouse filtered by the IntbWhseCashCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsepickdtl(string $IntbWhsePickDtl) Return the first ChildWarehouse filtered by the IntbWhsePickDtl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseprodbin(string $IntbWhseProdBin) Return the first ChildWarehouse filtered by the IntbWhseProdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsepharea(string $IntbWhsePhArea) Return the first ChildWarehouse filtered by the IntbWhsePhArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephfrst3(string $IntbWhsePhFrst3) Return the first ChildWarehouse filtered by the IntbWhsePhFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephlast4(string $IntbWhsePhLast4) Return the first ChildWarehouse filtered by the IntbWhsePhLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephext(string $IntbWhsePhExt) Return the first ChildWarehouse filtered by the IntbWhsePhExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxarea(string $IntbWhseFaxArea) Return the first ChildWarehouse filtered by the IntbWhseFaxArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxfrst3(string $IntbWhseFaxFrst3) Return the first ChildWarehouse filtered by the IntbWhseFaxFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxlast4(string $IntbWhseFaxLast4) Return the first ChildWarehouse filtered by the IntbWhseFaxLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseemailadr(string $IntbWhseEmailAdr) Return the first ChildWarehouse filtered by the IntbWhseEmailAdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseqcrgabin(string $IntbWhseQcRgaBin) Return the first ChildWarehouse filtered by the IntbWhseQcRgaBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter1(string $IntbWhseRfPrinter1) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter2(string $IntbWhseRfPrinter2) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter3(string $IntbWhseRfPrinter3) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter4(string $IntbWhseRfPrinter4) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter5(string $IntbWhseRfPrinter5) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseprofwhse(string $IntbWhseProfWhse) Return the first ChildWarehouse filtered by the IntbWhseProfWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseasetwhse(string $IntbWhseAsetWhse) Return the first ChildWarehouse filtered by the IntbWhseAsetWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseconsignwhse(string $IntbWhseConsignWhse) Return the first ChildWarehouse filtered by the IntbWhseConsignWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsebinrangelist(string $IntbWhseBinRangeList) Return the first ChildWarehouse filtered by the IntbWhseBinRangeList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsesupplywhse(string $IntbWhseSupplyWhse) Return the first ChildWarehouse filtered by the IntbWhseSupplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouse filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouse filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByDummy(string $dummy) Return the first ChildWarehouse filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouse[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarehouse objects based on current ModelCriteria
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildWarehouse objects filtered by the IntbWhse column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsename(string $IntbWhseName) Return ChildWarehouse objects filtered by the IntbWhseName column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseadr1(string $IntbWhseAdr1) Return ChildWarehouse objects filtered by the IntbWhseAdr1 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseadr2(string $IntbWhseAdr2) Return ChildWarehouse objects filtered by the IntbWhseAdr2 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsecity(string $IntbWhseCity) Return ChildWarehouse objects filtered by the IntbWhseCity column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsestat(string $IntbWhseStat) Return ChildWarehouse objects filtered by the IntbWhseStat column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsezipcode(string $IntbWhseZipCode) Return ChildWarehouse objects filtered by the IntbWhseZipCode column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsectry(string $IntbWhseCtry) Return ChildWarehouse objects filtered by the IntbWhseCtry column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseusehandheld(string $IntbWhseUseHandheld) Return ChildWarehouse objects filtered by the IntbWhseUseHandheld column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsecashcust(string $IntbWhseCashCust) Return ChildWarehouse objects filtered by the IntbWhseCashCust column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsepickdtl(string $IntbWhsePickDtl) Return ChildWarehouse objects filtered by the IntbWhsePickDtl column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseprodbin(string $IntbWhseProdBin) Return ChildWarehouse objects filtered by the IntbWhseProdBin column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsepharea(string $IntbWhsePhArea) Return ChildWarehouse objects filtered by the IntbWhsePhArea column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsephfrst3(string $IntbWhsePhFrst3) Return ChildWarehouse objects filtered by the IntbWhsePhFrst3 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsephlast4(string $IntbWhsePhLast4) Return ChildWarehouse objects filtered by the IntbWhsePhLast4 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsephext(string $IntbWhsePhExt) Return ChildWarehouse objects filtered by the IntbWhsePhExt column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsefaxarea(string $IntbWhseFaxArea) Return ChildWarehouse objects filtered by the IntbWhseFaxArea column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsefaxfrst3(string $IntbWhseFaxFrst3) Return ChildWarehouse objects filtered by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsefaxlast4(string $IntbWhseFaxLast4) Return ChildWarehouse objects filtered by the IntbWhseFaxLast4 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseemailadr(string $IntbWhseEmailAdr) Return ChildWarehouse objects filtered by the IntbWhseEmailAdr column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseqcrgabin(string $IntbWhseQcRgaBin) Return ChildWarehouse objects filtered by the IntbWhseQcRgaBin column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhserfprinter1(string $IntbWhseRfPrinter1) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhserfprinter2(string $IntbWhseRfPrinter2) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhserfprinter3(string $IntbWhseRfPrinter3) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhserfprinter4(string $IntbWhseRfPrinter4) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhserfprinter5(string $IntbWhseRfPrinter5) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseprofwhse(string $IntbWhseProfWhse) Return ChildWarehouse objects filtered by the IntbWhseProfWhse column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseasetwhse(string $IntbWhseAsetWhse) Return ChildWarehouse objects filtered by the IntbWhseAsetWhse column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhseconsignwhse(string $IntbWhseConsignWhse) Return ChildWarehouse objects filtered by the IntbWhseConsignWhse column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsebinrangelist(string $IntbWhseBinRangeList) Return ChildWarehouse objects filtered by the IntbWhseBinRangeList column
 * @method     ChildWarehouse[]|ObjectCollection findByIntbwhsesupplywhse(string $IntbWhseSupplyWhse) Return ChildWarehouse objects filtered by the IntbWhseSupplyWhse column
 * @method     ChildWarehouse[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildWarehouse objects filtered by the DateUpdtd column
 * @method     ChildWarehouse[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildWarehouse objects filtered by the TimeUpdtd column
 * @method     ChildWarehouse[]|ObjectCollection findByDummy(string $dummy) Return ChildWarehouse objects filtered by the dummy column
 * @method     ChildWarehouse[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WarehouseQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarehouseQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Warehouse', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarehouseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarehouseQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarehouseQuery) {
            return $criteria;
        }
        $query = new ChildWarehouseQuery();
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
     * @return ChildWarehouse|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarehouseTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildWarehouse A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbWhse, IntbWhseName, IntbWhseAdr1, IntbWhseAdr2, IntbWhseCity, IntbWhseStat, IntbWhseZipCode, IntbWhseCtry, IntbWhseUseHandheld, IntbWhseCashCust, IntbWhsePickDtl, IntbWhseProdBin, IntbWhsePhArea, IntbWhsePhFrst3, IntbWhsePhLast4, IntbWhsePhExt, IntbWhseFaxArea, IntbWhseFaxFrst3, IntbWhseFaxLast4, IntbWhseEmailAdr, IntbWhseQcRgaBin, IntbWhseRfPrinter1, IntbWhseRfPrinter2, IntbWhseRfPrinter3, IntbWhseRfPrinter4, IntbWhseRfPrinter5, IntbWhseProfWhse, IntbWhseAsetWhse, IntbWhseConsignWhse, IntbWhseBinRangeList, IntbWhseSupplyWhse, DateUpdtd, TimeUpdtd, dummy FROM inv_whse_code WHERE IntbWhse = :p0';
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
            /** @var ChildWarehouse $obj */
            $obj = new ChildWarehouse();
            $obj->hydrate($row);
            WarehouseTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildWarehouse|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $keys, Criteria::IN);
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
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the IntbWhseName column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsename('fooValue');   // WHERE IntbWhseName = 'fooValue'
     * $query->filterByIntbwhsename('%fooValue%', Criteria::LIKE); // WHERE IntbWhseName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsename($intbwhsename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSENAME, $intbwhsename, $comparison);
    }

    /**
     * Filter the query on the IntbWhseAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseadr1('fooValue');   // WHERE IntbWhseAdr1 = 'fooValue'
     * $query->filterByIntbwhseadr1('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseadr1($intbwhseadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEADR1, $intbwhseadr1, $comparison);
    }

    /**
     * Filter the query on the IntbWhseAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseadr2('fooValue');   // WHERE IntbWhseAdr2 = 'fooValue'
     * $query->filterByIntbwhseadr2('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseadr2($intbwhseadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEADR2, $intbwhseadr2, $comparison);
    }

    /**
     * Filter the query on the IntbWhseCity column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsecity('fooValue');   // WHERE IntbWhseCity = 'fooValue'
     * $query->filterByIntbwhsecity('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsecity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsecity($intbwhsecity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsecity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECITY, $intbwhsecity, $comparison);
    }

    /**
     * Filter the query on the IntbWhseStat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsestat('fooValue');   // WHERE IntbWhseStat = 'fooValue'
     * $query->filterByIntbwhsestat('%fooValue%', Criteria::LIKE); // WHERE IntbWhseStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsestat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsestat($intbwhsestat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsestat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSESTAT, $intbwhsestat, $comparison);
    }

    /**
     * Filter the query on the IntbWhseZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsezipcode('fooValue');   // WHERE IntbWhseZipCode = 'fooValue'
     * $query->filterByIntbwhsezipcode('%fooValue%', Criteria::LIKE); // WHERE IntbWhseZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsezipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsezipcode($intbwhsezipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsezipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEZIPCODE, $intbwhsezipcode, $comparison);
    }

    /**
     * Filter the query on the IntbWhseCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsectry('fooValue');   // WHERE IntbWhseCtry = 'fooValue'
     * $query->filterByIntbwhsectry('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsectry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsectry($intbwhsectry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsectry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECTRY, $intbwhsectry, $comparison);
    }

    /**
     * Filter the query on the IntbWhseUseHandheld column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseusehandheld('fooValue');   // WHERE IntbWhseUseHandheld = 'fooValue'
     * $query->filterByIntbwhseusehandheld('%fooValue%', Criteria::LIKE); // WHERE IntbWhseUseHandheld LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseusehandheld The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseusehandheld($intbwhseusehandheld = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseusehandheld)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD, $intbwhseusehandheld, $comparison);
    }

    /**
     * Filter the query on the IntbWhseCashCust column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsecashcust('fooValue');   // WHERE IntbWhseCashCust = 'fooValue'
     * $query->filterByIntbwhsecashcust('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCashCust LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsecashcust The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsecashcust($intbwhsecashcust = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsecashcust)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECASHCUST, $intbwhsecashcust, $comparison);
    }

    /**
     * Filter the query on the IntbWhsePickDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsepickdtl('fooValue');   // WHERE IntbWhsePickDtl = 'fooValue'
     * $query->filterByIntbwhsepickdtl('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePickDtl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsepickdtl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsepickdtl($intbwhsepickdtl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsepickdtl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPICKDTL, $intbwhsepickdtl, $comparison);
    }

    /**
     * Filter the query on the IntbWhseProdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseprodbin('fooValue');   // WHERE IntbWhseProdBin = 'fooValue'
     * $query->filterByIntbwhseprodbin('%fooValue%', Criteria::LIKE); // WHERE IntbWhseProdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseprodbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseprodbin($intbwhseprodbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseprodbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPRODBIN, $intbwhseprodbin, $comparison);
    }

    /**
     * Filter the query on the IntbWhsePhArea column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsepharea('fooValue');   // WHERE IntbWhsePhArea = 'fooValue'
     * $query->filterByIntbwhsepharea('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsepharea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsepharea($intbwhsepharea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsepharea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHAREA, $intbwhsepharea, $comparison);
    }

    /**
     * Filter the query on the IntbWhsePhFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephfrst3('fooValue');   // WHERE IntbWhsePhFrst3 = 'fooValue'
     * $query->filterByIntbwhsephfrst3('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhFrst3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsephfrst3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsephfrst3($intbwhsephfrst3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephfrst3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHFRST3, $intbwhsephfrst3, $comparison);
    }

    /**
     * Filter the query on the IntbWhsePhLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephlast4('fooValue');   // WHERE IntbWhsePhLast4 = 'fooValue'
     * $query->filterByIntbwhsephlast4('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhLast4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsephlast4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsephlast4($intbwhsephlast4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephlast4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHLAST4, $intbwhsephlast4, $comparison);
    }

    /**
     * Filter the query on the IntbWhsePhExt column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephext('fooValue');   // WHERE IntbWhsePhExt = 'fooValue'
     * $query->filterByIntbwhsephext('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsephext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsephext($intbwhsephext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHEXT, $intbwhsephext, $comparison);
    }

    /**
     * Filter the query on the IntbWhseFaxArea column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxarea('fooValue');   // WHERE IntbWhseFaxArea = 'fooValue'
     * $query->filterByIntbwhsefaxarea('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsefaxarea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsefaxarea($intbwhsefaxarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxarea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXAREA, $intbwhsefaxarea, $comparison);
    }

    /**
     * Filter the query on the IntbWhseFaxFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxfrst3('fooValue');   // WHERE IntbWhseFaxFrst3 = 'fooValue'
     * $query->filterByIntbwhsefaxfrst3('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxFrst3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsefaxfrst3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsefaxfrst3($intbwhsefaxfrst3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxfrst3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXFRST3, $intbwhsefaxfrst3, $comparison);
    }

    /**
     * Filter the query on the IntbWhseFaxLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxlast4('fooValue');   // WHERE IntbWhseFaxLast4 = 'fooValue'
     * $query->filterByIntbwhsefaxlast4('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxLast4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsefaxlast4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsefaxlast4($intbwhsefaxlast4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxlast4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXLAST4, $intbwhsefaxlast4, $comparison);
    }

    /**
     * Filter the query on the IntbWhseEmailAdr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseemailadr('fooValue');   // WHERE IntbWhseEmailAdr = 'fooValue'
     * $query->filterByIntbwhseemailadr('%fooValue%', Criteria::LIKE); // WHERE IntbWhseEmailAdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseemailadr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseemailadr($intbwhseemailadr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseemailadr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEEMAILADR, $intbwhseemailadr, $comparison);
    }

    /**
     * Filter the query on the IntbWhseQcRgaBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseqcrgabin('fooValue');   // WHERE IntbWhseQcRgaBin = 'fooValue'
     * $query->filterByIntbwhseqcrgabin('%fooValue%', Criteria::LIKE); // WHERE IntbWhseQcRgaBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseqcrgabin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseqcrgabin($intbwhseqcrgabin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseqcrgabin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEQCRGABIN, $intbwhseqcrgabin, $comparison);
    }

    /**
     * Filter the query on the IntbWhseRfPrinter1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter1('fooValue');   // WHERE IntbWhseRfPrinter1 = 'fooValue'
     * $query->filterByIntbwhserfprinter1('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhserfprinter1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter1($intbwhserfprinter1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER1, $intbwhserfprinter1, $comparison);
    }

    /**
     * Filter the query on the IntbWhseRfPrinter2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter2('fooValue');   // WHERE IntbWhseRfPrinter2 = 'fooValue'
     * $query->filterByIntbwhserfprinter2('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhserfprinter2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter2($intbwhserfprinter2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER2, $intbwhserfprinter2, $comparison);
    }

    /**
     * Filter the query on the IntbWhseRfPrinter3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter3('fooValue');   // WHERE IntbWhseRfPrinter3 = 'fooValue'
     * $query->filterByIntbwhserfprinter3('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhserfprinter3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter3($intbwhserfprinter3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER3, $intbwhserfprinter3, $comparison);
    }

    /**
     * Filter the query on the IntbWhseRfPrinter4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter4('fooValue');   // WHERE IntbWhseRfPrinter4 = 'fooValue'
     * $query->filterByIntbwhserfprinter4('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhserfprinter4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter4($intbwhserfprinter4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER4, $intbwhserfprinter4, $comparison);
    }

    /**
     * Filter the query on the IntbWhseRfPrinter5 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter5('fooValue');   // WHERE IntbWhseRfPrinter5 = 'fooValue'
     * $query->filterByIntbwhserfprinter5('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhserfprinter5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter5($intbwhserfprinter5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER5, $intbwhserfprinter5, $comparison);
    }

    /**
     * Filter the query on the IntbWhseProfWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseprofwhse('fooValue');   // WHERE IntbWhseProfWhse = 'fooValue'
     * $query->filterByIntbwhseprofwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseProfWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseprofwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseprofwhse($intbwhseprofwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseprofwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPROFWHSE, $intbwhseprofwhse, $comparison);
    }

    /**
     * Filter the query on the IntbWhseAsetWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseasetwhse('fooValue');   // WHERE IntbWhseAsetWhse = 'fooValue'
     * $query->filterByIntbwhseasetwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAsetWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseasetwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseasetwhse($intbwhseasetwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseasetwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEASETWHSE, $intbwhseasetwhse, $comparison);
    }

    /**
     * Filter the query on the IntbWhseConsignWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseconsignwhse('fooValue');   // WHERE IntbWhseConsignWhse = 'fooValue'
     * $query->filterByIntbwhseconsignwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseConsignWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseconsignwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhseconsignwhse($intbwhseconsignwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseconsignwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE, $intbwhseconsignwhse, $comparison);
    }

    /**
     * Filter the query on the IntbWhseBinRangeList column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsebinrangelist('fooValue');   // WHERE IntbWhseBinRangeList = 'fooValue'
     * $query->filterByIntbwhsebinrangelist('%fooValue%', Criteria::LIKE); // WHERE IntbWhseBinRangeList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsebinrangelist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsebinrangelist($intbwhsebinrangelist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsebinrangelist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEBINRANGELIST, $intbwhsebinrangelist, $comparison);
    }

    /**
     * Filter the query on the IntbWhseSupplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsesupplywhse('fooValue');   // WHERE IntbWhseSupplyWhse = 'fooValue'
     * $query->filterByIntbwhsesupplywhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseSupplyWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhsesupplywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByIntbwhsesupplywhse($intbwhsesupplywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsesupplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE, $intbwhsesupplywhse, $comparison);
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
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \WhseLotserial object
     *
     * @param \WhseLotserial|ObjectCollection $whseLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByWhseLotserial($whseLotserial, $comparison = null)
    {
        if ($whseLotserial instanceof \WhseLotserial) {
            return $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $whseLotserial->getIntbwhse(), $comparison);
        } elseif ($whseLotserial instanceof ObjectCollection) {
            return $this
                ->useWhseLotserialQuery()
                ->filterByPrimaryKeys($whseLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByWhseLotserial() only accepts arguments of type \WhseLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WhseLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function joinWhseLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WhseLotserial');

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
            $this->addJoinObject($join, 'WhseLotserial');
        }

        return $this;
    }

    /**
     * Use the WhseLotserial relation WhseLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WhseLotserialQuery A secondary query class using the current class as primary query
     */
    public function useWhseLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWhseLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WhseLotserial', '\WhseLotserialQuery');
    }

    /**
     * Filter the query by a related \WarehouseNote object
     *
     * @param \WarehouseNote|ObjectCollection $warehouseNote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildWarehouseQuery The current query, for fluid interface
     */
    public function filterByWarehouseNote($warehouseNote, $comparison = null)
    {
        if ($warehouseNote instanceof \WarehouseNote) {
            return $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouseNote->getIntbwhse(), $comparison);
        } elseif ($warehouseNote instanceof ObjectCollection) {
            return $this
                ->useWarehouseNoteQuery()
                ->filterByPrimaryKeys($warehouseNote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByWarehouseNote() only accepts arguments of type \WarehouseNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseNote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function joinWarehouseNote($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseNote');

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
            $this->addJoinObject($join, 'WarehouseNote');
        }

        return $this;
    }

    /**
     * Use the WarehouseNote relation WarehouseNote object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseNoteQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseNoteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinWarehouseNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseNote', '\WarehouseNoteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWarehouse $warehouse Object to remove from the list of results
     *
     * @return $this|ChildWarehouseQuery The current query, for fluid interface
     */
    public function prune($warehouse = null)
    {
        if ($warehouse) {
            $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_whse_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarehouseTableMap::clearInstancePool();
            WarehouseTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarehouseTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarehouseTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarehouseTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WarehouseQuery
