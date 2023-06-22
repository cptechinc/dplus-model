<?php

namespace Base;

use \ConfigSoFreight as ChildConfigSoFreight;
use \ConfigSoFreightQuery as ChildConfigSoFreightQuery;
use \Exception;
use \PDO;
use Map\ConfigSoFreightTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_frt_config' table.
 *
 *
 *
 * @method     ChildConfigSoFreightQuery orderByOetbconfkey($order = Criteria::ASC) Order by the OetbConfKey column
 * @method     ChildConfigSoFreightQuery orderByOetbconfusefrtcost($order = Criteria::ASC) Order by the OetbConfUseFrtCost column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frtratetabl($order = Criteria::ASC) Order by the OetbCon2FrtRateTabl column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frtzonesorz($order = Criteria::ASC) Order by the OetbCon2FrtZoneSorZ column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2chrgactfrt($order = Criteria::ASC) Order by the OetbCon2ChrgActFrt column
 * @method     ChildConfigSoFreightQuery orderByOetbcon3usefrtgrup($order = Criteria::ASC) Order by the OetbCon3UseFrtGrup column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtordramta($order = Criteria::ASC) Order by the OetbCon2FrghtOrdrAmtA column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtordramtb($order = Criteria::ASC) Order by the OetbCon2FrghtOrdrAmtB column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtordramtc($order = Criteria::ASC) Order by the OetbCon2FrghtOrdrAmtC column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtordramtd($order = Criteria::ASC) Order by the OetbCon2FrghtOrdrAmtD column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtordramte($order = Criteria::ASC) Order by the OetbCon2FrghtOrdrAmtE column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2chrgfrghtbkord($order = Criteria::ASC) Order by the OetbCon2ChrgFrghtBkord column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddmeth($order = Criteria::ASC) Order by the OetbCon2FrghtAddMeth column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtorder($order = Criteria::ASC) Order by the OetbCon2FrghtOrder column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtcntnr($order = Criteria::ASC) Order by the OetbCon2FrghtCntnr column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtadd1($order = Criteria::ASC) Order by the OetbCon2FrghtAdd1 column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddamt1($order = Criteria::ASC) Order by the OetbCon2FrghtAddAmt1 column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddper($order = Criteria::ASC) Order by the OetbCon2FrghtAddPer column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddamtper($order = Criteria::ASC) Order by the OetbCon2FrghtAddAmtPer column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddamtmax($order = Criteria::ASC) Order by the OetbCon2FrghtAddAmtMax column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtaddpct($order = Criteria::ASC) Order by the OetbCon2FrghtAddPct column
 * @method     ChildConfigSoFreightQuery orderByOetbcon2frghtminchrg($order = Criteria::ASC) Order by the OetbCon2FrghtMinChrg column
 * @method     ChildConfigSoFreightQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigSoFreightQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigSoFreightQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigSoFreightQuery groupByOetbconfkey() Group by the OetbConfKey column
 * @method     ChildConfigSoFreightQuery groupByOetbconfusefrtcost() Group by the OetbConfUseFrtCost column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frtratetabl() Group by the OetbCon2FrtRateTabl column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frtzonesorz() Group by the OetbCon2FrtZoneSorZ column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2chrgactfrt() Group by the OetbCon2ChrgActFrt column
 * @method     ChildConfigSoFreightQuery groupByOetbcon3usefrtgrup() Group by the OetbCon3UseFrtGrup column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtordramta() Group by the OetbCon2FrghtOrdrAmtA column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtordramtb() Group by the OetbCon2FrghtOrdrAmtB column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtordramtc() Group by the OetbCon2FrghtOrdrAmtC column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtordramtd() Group by the OetbCon2FrghtOrdrAmtD column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtordramte() Group by the OetbCon2FrghtOrdrAmtE column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2chrgfrghtbkord() Group by the OetbCon2ChrgFrghtBkord column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddmeth() Group by the OetbCon2FrghtAddMeth column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtorder() Group by the OetbCon2FrghtOrder column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtcntnr() Group by the OetbCon2FrghtCntnr column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtadd1() Group by the OetbCon2FrghtAdd1 column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddamt1() Group by the OetbCon2FrghtAddAmt1 column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddper() Group by the OetbCon2FrghtAddPer column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddamtper() Group by the OetbCon2FrghtAddAmtPer column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddamtmax() Group by the OetbCon2FrghtAddAmtMax column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtaddpct() Group by the OetbCon2FrghtAddPct column
 * @method     ChildConfigSoFreightQuery groupByOetbcon2frghtminchrg() Group by the OetbCon2FrghtMinChrg column
 * @method     ChildConfigSoFreightQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigSoFreightQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigSoFreightQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigSoFreightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigSoFreightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigSoFreightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigSoFreightQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigSoFreightQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigSoFreightQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigSoFreight findOne(ConnectionInterface $con = null) Return the first ChildConfigSoFreight matching the query
 * @method     ChildConfigSoFreight findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigSoFreight matching the query, or a new ChildConfigSoFreight object populated from the query conditions when no match is found
 *
 * @method     ChildConfigSoFreight findOneByOetbconfkey(int $OetbConfKey) Return the first ChildConfigSoFreight filtered by the OetbConfKey column
 * @method     ChildConfigSoFreight findOneByOetbconfusefrtcost(string $OetbConfUseFrtCost) Return the first ChildConfigSoFreight filtered by the OetbConfUseFrtCost column
 * @method     ChildConfigSoFreight findOneByOetbcon2frtratetabl(string $OetbCon2FrtRateTabl) Return the first ChildConfigSoFreight filtered by the OetbCon2FrtRateTabl column
 * @method     ChildConfigSoFreight findOneByOetbcon2frtzonesorz(string $OetbCon2FrtZoneSorZ) Return the first ChildConfigSoFreight filtered by the OetbCon2FrtZoneSorZ column
 * @method     ChildConfigSoFreight findOneByOetbcon2chrgactfrt(string $OetbCon2ChrgActFrt) Return the first ChildConfigSoFreight filtered by the OetbCon2ChrgActFrt column
 * @method     ChildConfigSoFreight findOneByOetbcon3usefrtgrup(string $OetbCon3UseFrtGrup) Return the first ChildConfigSoFreight filtered by the OetbCon3UseFrtGrup column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtordramta(string $OetbCon2FrghtOrdrAmtA) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtA column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtordramtb(string $OetbCon2FrghtOrdrAmtB) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtB column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtordramtc(string $OetbCon2FrghtOrdrAmtC) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtC column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtordramtd(string $OetbCon2FrghtOrdrAmtD) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtD column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtordramte(string $OetbCon2FrghtOrdrAmtE) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtE column
 * @method     ChildConfigSoFreight findOneByOetbcon2chrgfrghtbkord(string $OetbCon2ChrgFrghtBkord) Return the first ChildConfigSoFreight filtered by the OetbCon2ChrgFrghtBkord column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddmeth(string $OetbCon2FrghtAddMeth) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddMeth column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtorder(string $OetbCon2FrghtOrder) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrder column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtcntnr(string $OetbCon2FrghtCntnr) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtCntnr column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtadd1(string $OetbCon2FrghtAdd1) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAdd1 column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddamt1(string $OetbCon2FrghtAddAmt1) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmt1 column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddper(string $OetbCon2FrghtAddPer) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddPer column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddamtper(string $OetbCon2FrghtAddAmtPer) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmtPer column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddamtmax(string $OetbCon2FrghtAddAmtMax) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmtMax column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtaddpct(string $OetbCon2FrghtAddPct) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddPct column
 * @method     ChildConfigSoFreight findOneByOetbcon2frghtminchrg(string $OetbCon2FrghtMinChrg) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtMinChrg column
 * @method     ChildConfigSoFreight findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSoFreight filtered by the DateUpdtd column
 * @method     ChildConfigSoFreight findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSoFreight filtered by the TimeUpdtd column
 * @method     ChildConfigSoFreight findOneByDummy(string $dummy) Return the first ChildConfigSoFreight filtered by the dummy column *

 * @method     ChildConfigSoFreight requirePk($key, ConnectionInterface $con = null) Return the ChildConfigSoFreight by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOne(ConnectionInterface $con = null) Return the first ChildConfigSoFreight matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSoFreight requireOneByOetbconfkey(int $OetbConfKey) Return the first ChildConfigSoFreight filtered by the OetbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbconfusefrtcost(string $OetbConfUseFrtCost) Return the first ChildConfigSoFreight filtered by the OetbConfUseFrtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frtratetabl(string $OetbCon2FrtRateTabl) Return the first ChildConfigSoFreight filtered by the OetbCon2FrtRateTabl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frtzonesorz(string $OetbCon2FrtZoneSorZ) Return the first ChildConfigSoFreight filtered by the OetbCon2FrtZoneSorZ column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2chrgactfrt(string $OetbCon2ChrgActFrt) Return the first ChildConfigSoFreight filtered by the OetbCon2ChrgActFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon3usefrtgrup(string $OetbCon3UseFrtGrup) Return the first ChildConfigSoFreight filtered by the OetbCon3UseFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtordramta(string $OetbCon2FrghtOrdrAmtA) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtordramtb(string $OetbCon2FrghtOrdrAmtB) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtordramtc(string $OetbCon2FrghtOrdrAmtC) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtordramtd(string $OetbCon2FrghtOrdrAmtD) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtD column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtordramte(string $OetbCon2FrghtOrdrAmtE) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrdrAmtE column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2chrgfrghtbkord(string $OetbCon2ChrgFrghtBkord) Return the first ChildConfigSoFreight filtered by the OetbCon2ChrgFrghtBkord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddmeth(string $OetbCon2FrghtAddMeth) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddMeth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtorder(string $OetbCon2FrghtOrder) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtcntnr(string $OetbCon2FrghtCntnr) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtCntnr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtadd1(string $OetbCon2FrghtAdd1) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAdd1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddamt1(string $OetbCon2FrghtAddAmt1) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddper(string $OetbCon2FrghtAddPer) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddPer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddamtper(string $OetbCon2FrghtAddAmtPer) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmtPer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddamtmax(string $OetbCon2FrghtAddAmtMax) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddAmtMax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtaddpct(string $OetbCon2FrghtAddPct) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtAddPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByOetbcon2frghtminchrg(string $OetbCon2FrghtMinChrg) Return the first ChildConfigSoFreight filtered by the OetbCon2FrghtMinChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSoFreight filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSoFreight filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSoFreight requireOneByDummy(string $dummy) Return the first ChildConfigSoFreight filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSoFreight[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigSoFreight objects based on current ModelCriteria
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbconfkey(int $OetbConfKey) Return ChildConfigSoFreight objects filtered by the OetbConfKey column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbconfusefrtcost(string $OetbConfUseFrtCost) Return ChildConfigSoFreight objects filtered by the OetbConfUseFrtCost column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frtratetabl(string $OetbCon2FrtRateTabl) Return ChildConfigSoFreight objects filtered by the OetbCon2FrtRateTabl column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frtzonesorz(string $OetbCon2FrtZoneSorZ) Return ChildConfigSoFreight objects filtered by the OetbCon2FrtZoneSorZ column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2chrgactfrt(string $OetbCon2ChrgActFrt) Return ChildConfigSoFreight objects filtered by the OetbCon2ChrgActFrt column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon3usefrtgrup(string $OetbCon3UseFrtGrup) Return ChildConfigSoFreight objects filtered by the OetbCon3UseFrtGrup column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtordramta(string $OetbCon2FrghtOrdrAmtA) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrdrAmtA column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtordramtb(string $OetbCon2FrghtOrdrAmtB) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrdrAmtB column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtordramtc(string $OetbCon2FrghtOrdrAmtC) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrdrAmtC column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtordramtd(string $OetbCon2FrghtOrdrAmtD) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrdrAmtD column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtordramte(string $OetbCon2FrghtOrdrAmtE) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrdrAmtE column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2chrgfrghtbkord(string $OetbCon2ChrgFrghtBkord) Return ChildConfigSoFreight objects filtered by the OetbCon2ChrgFrghtBkord column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddmeth(string $OetbCon2FrghtAddMeth) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddMeth column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtorder(string $OetbCon2FrghtOrder) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtOrder column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtcntnr(string $OetbCon2FrghtCntnr) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtCntnr column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtadd1(string $OetbCon2FrghtAdd1) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAdd1 column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddamt1(string $OetbCon2FrghtAddAmt1) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddAmt1 column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddper(string $OetbCon2FrghtAddPer) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddPer column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddamtper(string $OetbCon2FrghtAddAmtPer) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddAmtPer column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddamtmax(string $OetbCon2FrghtAddAmtMax) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddAmtMax column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtaddpct(string $OetbCon2FrghtAddPct) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtAddPct column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByOetbcon2frghtminchrg(string $OetbCon2FrghtMinChrg) Return ChildConfigSoFreight objects filtered by the OetbCon2FrghtMinChrg column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigSoFreight objects filtered by the DateUpdtd column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigSoFreight objects filtered by the TimeUpdtd column
 * @method     ChildConfigSoFreight[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigSoFreight objects filtered by the dummy column
 * @method     ChildConfigSoFreight[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigSoFreightQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigSoFreightQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigSoFreight', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigSoFreightQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigSoFreightQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigSoFreightQuery) {
            return $criteria;
        }
        $query = new ChildConfigSoFreightQuery();
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
     * @return ChildConfigSoFreight|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigSoFreightTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigSoFreight A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbConfKey, OetbConfUseFrtCost, OetbCon2FrtRateTabl, OetbCon2FrtZoneSorZ, OetbCon2ChrgActFrt, OetbCon3UseFrtGrup, OetbCon2FrghtOrdrAmtA, OetbCon2FrghtOrdrAmtB, OetbCon2FrghtOrdrAmtC, OetbCon2FrghtOrdrAmtD, OetbCon2FrghtOrdrAmtE, OetbCon2ChrgFrghtBkord, OetbCon2FrghtAddMeth, OetbCon2FrghtOrder, OetbCon2FrghtCntnr, OetbCon2FrghtAdd1, OetbCon2FrghtAddAmt1, OetbCon2FrghtAddPer, OetbCon2FrghtAddAmtPer, OetbCon2FrghtAddAmtMax, OetbCon2FrghtAddPct, OetbCon2FrghtMinChrg, DateUpdtd, TimeUpdtd, dummy FROM so_frt_config WHERE OetbConfKey = :p0';
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
            /** @var ChildConfigSoFreight $obj */
            $obj = new ChildConfigSoFreight();
            $obj->hydrate($row);
            ConfigSoFreightTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigSoFreight|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OetbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfkey(1234); // WHERE OetbConfKey = 1234
     * $query->filterByOetbconfkey(array(12, 34)); // WHERE OetbConfKey IN (12, 34)
     * $query->filterByOetbconfkey(array('min' => 12)); // WHERE OetbConfKey > 12
     * </code>
     *
     * @param     mixed $oetbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbconfkey($oetbconfkey = null, $comparison = null)
    {
        if (is_array($oetbconfkey)) {
            $useMinMax = false;
            if (isset($oetbconfkey['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $oetbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfkey['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $oetbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $oetbconfkey, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseFrtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfusefrtcost('fooValue');   // WHERE OetbConfUseFrtCost = 'fooValue'
     * $query->filterByOetbconfusefrtcost('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseFrtCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfusefrtcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbconfusefrtcost($oetbconfusefrtcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfusefrtcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFUSEFRTCOST, $oetbconfusefrtcost, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrtRateTabl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frtratetabl('fooValue');   // WHERE OetbCon2FrtRateTabl = 'fooValue'
     * $query->filterByOetbcon2frtratetabl('%fooValue%', Criteria::LIKE); // WHERE OetbCon2FrtRateTabl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2frtratetabl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frtratetabl($oetbcon2frtratetabl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2frtratetabl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRTRATETABL, $oetbcon2frtratetabl, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrtZoneSorZ column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frtzonesorz('fooValue');   // WHERE OetbCon2FrtZoneSorZ = 'fooValue'
     * $query->filterByOetbcon2frtzonesorz('%fooValue%', Criteria::LIKE); // WHERE OetbCon2FrtZoneSorZ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2frtzonesorz The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frtzonesorz($oetbcon2frtzonesorz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2frtzonesorz)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRTZONESORZ, $oetbcon2frtzonesorz, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ChrgActFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chrgactfrt('fooValue');   // WHERE OetbCon2ChrgActFrt = 'fooValue'
     * $query->filterByOetbcon2chrgactfrt('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChrgActFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2chrgactfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2chrgactfrt($oetbcon2chrgactfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chrgactfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2CHRGACTFRT, $oetbcon2chrgactfrt, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UseFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usefrtgrup('fooValue');   // WHERE OetbCon3UseFrtGrup = 'fooValue'
     * $query->filterByOetbcon3usefrtgrup('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseFrtGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3usefrtgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon3usefrtgrup($oetbcon3usefrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usefrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON3USEFRTGRUP, $oetbcon3usefrtgrup, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrdrAmtA column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtordramta(1234); // WHERE OetbCon2FrghtOrdrAmtA = 1234
     * $query->filterByOetbcon2frghtordramta(array(12, 34)); // WHERE OetbCon2FrghtOrdrAmtA IN (12, 34)
     * $query->filterByOetbcon2frghtordramta(array('min' => 12)); // WHERE OetbCon2FrghtOrdrAmtA > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtordramta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtordramta($oetbcon2frghtordramta = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtordramta)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtordramta['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA, $oetbcon2frghtordramta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtordramta['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA, $oetbcon2frghtordramta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTA, $oetbcon2frghtordramta, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrdrAmtB column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtordramtb(1234); // WHERE OetbCon2FrghtOrdrAmtB = 1234
     * $query->filterByOetbcon2frghtordramtb(array(12, 34)); // WHERE OetbCon2FrghtOrdrAmtB IN (12, 34)
     * $query->filterByOetbcon2frghtordramtb(array('min' => 12)); // WHERE OetbCon2FrghtOrdrAmtB > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtordramtb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtordramtb($oetbcon2frghtordramtb = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtordramtb)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtordramtb['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB, $oetbcon2frghtordramtb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtordramtb['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB, $oetbcon2frghtordramtb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTB, $oetbcon2frghtordramtb, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrdrAmtC column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtordramtc(1234); // WHERE OetbCon2FrghtOrdrAmtC = 1234
     * $query->filterByOetbcon2frghtordramtc(array(12, 34)); // WHERE OetbCon2FrghtOrdrAmtC IN (12, 34)
     * $query->filterByOetbcon2frghtordramtc(array('min' => 12)); // WHERE OetbCon2FrghtOrdrAmtC > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtordramtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtordramtc($oetbcon2frghtordramtc = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtordramtc)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtordramtc['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC, $oetbcon2frghtordramtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtordramtc['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC, $oetbcon2frghtordramtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTC, $oetbcon2frghtordramtc, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrdrAmtD column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtordramtd(1234); // WHERE OetbCon2FrghtOrdrAmtD = 1234
     * $query->filterByOetbcon2frghtordramtd(array(12, 34)); // WHERE OetbCon2FrghtOrdrAmtD IN (12, 34)
     * $query->filterByOetbcon2frghtordramtd(array('min' => 12)); // WHERE OetbCon2FrghtOrdrAmtD > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtordramtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtordramtd($oetbcon2frghtordramtd = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtordramtd)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtordramtd['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD, $oetbcon2frghtordramtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtordramtd['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD, $oetbcon2frghtordramtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTD, $oetbcon2frghtordramtd, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrdrAmtE column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtordramte(1234); // WHERE OetbCon2FrghtOrdrAmtE = 1234
     * $query->filterByOetbcon2frghtordramte(array(12, 34)); // WHERE OetbCon2FrghtOrdrAmtE IN (12, 34)
     * $query->filterByOetbcon2frghtordramte(array('min' => 12)); // WHERE OetbCon2FrghtOrdrAmtE > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtordramte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtordramte($oetbcon2frghtordramte = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtordramte)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtordramte['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE, $oetbcon2frghtordramte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtordramte['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE, $oetbcon2frghtordramte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDRAMTE, $oetbcon2frghtordramte, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ChrgFrghtBkord column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chrgfrghtbkord('fooValue');   // WHERE OetbCon2ChrgFrghtBkord = 'fooValue'
     * $query->filterByOetbcon2chrgfrghtbkord('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChrgFrghtBkord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2chrgfrghtbkord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2chrgfrghtbkord($oetbcon2chrgfrghtbkord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chrgfrghtbkord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2CHRGFRGHTBKORD, $oetbcon2chrgfrghtbkord, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddMeth column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddmeth('fooValue');   // WHERE OetbCon2FrghtAddMeth = 'fooValue'
     * $query->filterByOetbcon2frghtaddmeth('%fooValue%', Criteria::LIKE); // WHERE OetbCon2FrghtAddMeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2frghtaddmeth The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddmeth($oetbcon2frghtaddmeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2frghtaddmeth)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDMETH, $oetbcon2frghtaddmeth, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtorder(1234); // WHERE OetbCon2FrghtOrder = 1234
     * $query->filterByOetbcon2frghtorder(array(12, 34)); // WHERE OetbCon2FrghtOrder IN (12, 34)
     * $query->filterByOetbcon2frghtorder(array('min' => 12)); // WHERE OetbCon2FrghtOrder > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtorder($oetbcon2frghtorder = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtorder)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtorder['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER, $oetbcon2frghtorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtorder['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER, $oetbcon2frghtorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTORDER, $oetbcon2frghtorder, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtCntnr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtcntnr(1234); // WHERE OetbCon2FrghtCntnr = 1234
     * $query->filterByOetbcon2frghtcntnr(array(12, 34)); // WHERE OetbCon2FrghtCntnr IN (12, 34)
     * $query->filterByOetbcon2frghtcntnr(array('min' => 12)); // WHERE OetbCon2FrghtCntnr > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtcntnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtcntnr($oetbcon2frghtcntnr = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtcntnr)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtcntnr['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR, $oetbcon2frghtcntnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtcntnr['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR, $oetbcon2frghtcntnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTCNTNR, $oetbcon2frghtcntnr, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAdd1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtadd1(1234); // WHERE OetbCon2FrghtAdd1 = 1234
     * $query->filterByOetbcon2frghtadd1(array(12, 34)); // WHERE OetbCon2FrghtAdd1 IN (12, 34)
     * $query->filterByOetbcon2frghtadd1(array('min' => 12)); // WHERE OetbCon2FrghtAdd1 > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtadd1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtadd1($oetbcon2frghtadd1 = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtadd1)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtadd1['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1, $oetbcon2frghtadd1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtadd1['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1, $oetbcon2frghtadd1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADD1, $oetbcon2frghtadd1, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddamt1(1234); // WHERE OetbCon2FrghtAddAmt1 = 1234
     * $query->filterByOetbcon2frghtaddamt1(array(12, 34)); // WHERE OetbCon2FrghtAddAmt1 IN (12, 34)
     * $query->filterByOetbcon2frghtaddamt1(array('min' => 12)); // WHERE OetbCon2FrghtAddAmt1 > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtaddamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddamt1($oetbcon2frghtaddamt1 = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtaddamt1)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtaddamt1['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1, $oetbcon2frghtaddamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtaddamt1['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1, $oetbcon2frghtaddamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMT1, $oetbcon2frghtaddamt1, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddPer column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddper(1234); // WHERE OetbCon2FrghtAddPer = 1234
     * $query->filterByOetbcon2frghtaddper(array(12, 34)); // WHERE OetbCon2FrghtAddPer IN (12, 34)
     * $query->filterByOetbcon2frghtaddper(array('min' => 12)); // WHERE OetbCon2FrghtAddPer > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtaddper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddper($oetbcon2frghtaddper = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtaddper)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtaddper['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER, $oetbcon2frghtaddper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtaddper['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER, $oetbcon2frghtaddper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPER, $oetbcon2frghtaddper, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddAmtPer column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddamtper(1234); // WHERE OetbCon2FrghtAddAmtPer = 1234
     * $query->filterByOetbcon2frghtaddamtper(array(12, 34)); // WHERE OetbCon2FrghtAddAmtPer IN (12, 34)
     * $query->filterByOetbcon2frghtaddamtper(array('min' => 12)); // WHERE OetbCon2FrghtAddAmtPer > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtaddamtper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddamtper($oetbcon2frghtaddamtper = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtaddamtper)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtaddamtper['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER, $oetbcon2frghtaddamtper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtaddamtper['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER, $oetbcon2frghtaddamtper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTPER, $oetbcon2frghtaddamtper, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddAmtMax column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddamtmax(1234); // WHERE OetbCon2FrghtAddAmtMax = 1234
     * $query->filterByOetbcon2frghtaddamtmax(array(12, 34)); // WHERE OetbCon2FrghtAddAmtMax IN (12, 34)
     * $query->filterByOetbcon2frghtaddamtmax(array('min' => 12)); // WHERE OetbCon2FrghtAddAmtMax > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtaddamtmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddamtmax($oetbcon2frghtaddamtmax = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtaddamtmax)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtaddamtmax['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX, $oetbcon2frghtaddamtmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtaddamtmax['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX, $oetbcon2frghtaddamtmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDAMTMAX, $oetbcon2frghtaddamtmax, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtAddPct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtaddpct(1234); // WHERE OetbCon2FrghtAddPct = 1234
     * $query->filterByOetbcon2frghtaddpct(array(12, 34)); // WHERE OetbCon2FrghtAddPct IN (12, 34)
     * $query->filterByOetbcon2frghtaddpct(array('min' => 12)); // WHERE OetbCon2FrghtAddPct > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtaddpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtaddpct($oetbcon2frghtaddpct = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtaddpct)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtaddpct['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT, $oetbcon2frghtaddpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtaddpct['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT, $oetbcon2frghtaddpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTADDPCT, $oetbcon2frghtaddpct, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrghtMinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frghtminchrg(1234); // WHERE OetbCon2FrghtMinChrg = 1234
     * $query->filterByOetbcon2frghtminchrg(array(12, 34)); // WHERE OetbCon2FrghtMinChrg IN (12, 34)
     * $query->filterByOetbcon2frghtminchrg(array('min' => 12)); // WHERE OetbCon2FrghtMinChrg > 12
     * </code>
     *
     * @param     mixed $oetbcon2frghtminchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frghtminchrg($oetbcon2frghtminchrg = null, $comparison = null)
    {
        if (is_array($oetbcon2frghtminchrg)) {
            $useMinMax = false;
            if (isset($oetbcon2frghtminchrg['min'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG, $oetbcon2frghtminchrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frghtminchrg['max'])) {
                $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG, $oetbcon2frghtminchrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCON2FRGHTMINCHRG, $oetbcon2frghtminchrg, $comparison);
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
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSoFreightTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigSoFreight $configSoFreight Object to remove from the list of results
     *
     * @return $this|ChildConfigSoFreightQuery The current query, for fluid interface
     */
    public function prune($configSoFreight = null)
    {
        if ($configSoFreight) {
            $this->addUsingAlias(ConfigSoFreightTableMap::COL_OETBCONFKEY, $configSoFreight->getOetbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_frt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigSoFreightTableMap::clearInstancePool();
            ConfigSoFreightTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSoFreightTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigSoFreightTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigSoFreightTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigSoFreightTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigSoFreightQuery
