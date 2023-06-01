<?php

namespace Base;

use \InvSerialWarranty as ChildInvSerialWarranty;
use \InvSerialWarrantyQuery as ChildInvSerialWarrantyQuery;
use \Exception;
use \PDO;
use Map\InvSerialWarrantyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_war_mast' table.
 *
 *
 *
 * @method     ChildInvSerialWarrantyQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvSerialWarrantyQuery orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildInvSerialWarrantyQuery orderByWarmsaledate($order = Criteria::ASC) Order by the WarmSaleDate column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownfname($order = Criteria::ASC) Order by the WarmOwnFName column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownmname($order = Criteria::ASC) Order by the WarmOwnMName column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownlname($order = Criteria::ASC) Order by the WarmOwnLName column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownadr1($order = Criteria::ASC) Order by the WarmOwnAdr1 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownadr2($order = Criteria::ASC) Order by the WarmOwnAdr2 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownadr3($order = Criteria::ASC) Order by the WarmOwnAdr3 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmowncity($order = Criteria::ASC) Order by the WarmOwnCity column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownstat($order = Criteria::ASC) Order by the WarmOwnStat column
 * @method     ChildInvSerialWarrantyQuery orderByWarmownzip($order = Criteria::ASC) Order by the WarmOwnZip column
 * @method     ChildInvSerialWarrantyQuery orderByWarmsordnbr($order = Criteria::ASC) Order by the WarmSordNbr column
 * @method     ChildInvSerialWarrantyQuery orderByWarminvcdate($order = Criteria::ASC) Order by the WarmInvcDate column
 * @method     ChildInvSerialWarrantyQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildInvSerialWarrantyQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmentrydate($order = Criteria::ASC) Order by the WarmEntryDate column
 * @method     ChildInvSerialWarrantyQuery orderByWarmengsernbr($order = Criteria::ASC) Order by the WarmEngSerNbr column
 * @method     ChildInvSerialWarrantyQuery orderByWarmenghorse($order = Criteria::ASC) Order by the WarmEngHorse column
 * @method     ChildInvSerialWarrantyQuery orderByWarmengmodelyear($order = Criteria::ASC) Order by the WarmEngModelYear column
 * @method     ChildInvSerialWarrantyQuery orderByWarmengdesc($order = Criteria::ASC) Order by the WarmEngDesc column
 * @method     ChildInvSerialWarrantyQuery orderByWarmphone1($order = Criteria::ASC) Order by the WarmPhone1 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmphone2($order = Criteria::ASC) Order by the WarmPhone2 column
 * @method     ChildInvSerialWarrantyQuery orderByWarmemail($order = Criteria::ASC) Order by the WarmEmail column
 * @method     ChildInvSerialWarrantyQuery orderByWarmacorigwarrdate($order = Criteria::ASC) Order by the WarmAcOrigWarrDate column
 * @method     ChildInvSerialWarrantyQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvSerialWarrantyQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvSerialWarrantyQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvSerialWarrantyQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvSerialWarrantyQuery groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildInvSerialWarrantyQuery groupByWarmsaledate() Group by the WarmSaleDate column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownfname() Group by the WarmOwnFName column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownmname() Group by the WarmOwnMName column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownlname() Group by the WarmOwnLName column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownadr1() Group by the WarmOwnAdr1 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownadr2() Group by the WarmOwnAdr2 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownadr3() Group by the WarmOwnAdr3 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmowncity() Group by the WarmOwnCity column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownstat() Group by the WarmOwnStat column
 * @method     ChildInvSerialWarrantyQuery groupByWarmownzip() Group by the WarmOwnZip column
 * @method     ChildInvSerialWarrantyQuery groupByWarmsordnbr() Group by the WarmSordNbr column
 * @method     ChildInvSerialWarrantyQuery groupByWarminvcdate() Group by the WarmInvcDate column
 * @method     ChildInvSerialWarrantyQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildInvSerialWarrantyQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmentrydate() Group by the WarmEntryDate column
 * @method     ChildInvSerialWarrantyQuery groupByWarmengsernbr() Group by the WarmEngSerNbr column
 * @method     ChildInvSerialWarrantyQuery groupByWarmenghorse() Group by the WarmEngHorse column
 * @method     ChildInvSerialWarrantyQuery groupByWarmengmodelyear() Group by the WarmEngModelYear column
 * @method     ChildInvSerialWarrantyQuery groupByWarmengdesc() Group by the WarmEngDesc column
 * @method     ChildInvSerialWarrantyQuery groupByWarmphone1() Group by the WarmPhone1 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmphone2() Group by the WarmPhone2 column
 * @method     ChildInvSerialWarrantyQuery groupByWarmemail() Group by the WarmEmail column
 * @method     ChildInvSerialWarrantyQuery groupByWarmacorigwarrdate() Group by the WarmAcOrigWarrDate column
 * @method     ChildInvSerialWarrantyQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvSerialWarrantyQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvSerialWarrantyQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvSerialWarrantyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvSerialWarrantyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvSerialWarrantyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvSerialWarrantyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvSerialWarrantyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialWarrantyQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialWarrantyQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialWarrantyQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialWarrantyQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialWarrantyQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvSerialWarrantyQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvSerialWarrantyQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildInvSerialWarrantyQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvSerialWarrantyQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvSerialWarrantyQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildInvSerialWarrantyQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildInvSerialWarrantyQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildInvSerialWarrantyQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildInvSerialWarrantyQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildInvSerialWarrantyQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildInvSerialWarrantyQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \ItemMasterItemQuery|\InvSerialMasterQuery|\CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvSerialWarranty findOne(ConnectionInterface $con = null) Return the first ChildInvSerialWarranty matching the query
 * @method     ChildInvSerialWarranty findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvSerialWarranty matching the query, or a new ChildInvSerialWarranty object populated from the query conditions when no match is found
 *
 * @method     ChildInvSerialWarranty findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialWarranty filtered by the InitItemNbr column
 * @method     ChildInvSerialWarranty findOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialWarranty filtered by the SermSerNbr column
 * @method     ChildInvSerialWarranty findOneByWarmsaledate(string $WarmSaleDate) Return the first ChildInvSerialWarranty filtered by the WarmSaleDate column
 * @method     ChildInvSerialWarranty findOneByWarmownfname(string $WarmOwnFName) Return the first ChildInvSerialWarranty filtered by the WarmOwnFName column
 * @method     ChildInvSerialWarranty findOneByWarmownmname(string $WarmOwnMName) Return the first ChildInvSerialWarranty filtered by the WarmOwnMName column
 * @method     ChildInvSerialWarranty findOneByWarmownlname(string $WarmOwnLName) Return the first ChildInvSerialWarranty filtered by the WarmOwnLName column
 * @method     ChildInvSerialWarranty findOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr1 column
 * @method     ChildInvSerialWarranty findOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr2 column
 * @method     ChildInvSerialWarranty findOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr3 column
 * @method     ChildInvSerialWarranty findOneByWarmowncity(string $WarmOwnCity) Return the first ChildInvSerialWarranty filtered by the WarmOwnCity column
 * @method     ChildInvSerialWarranty findOneByWarmownstat(string $WarmOwnStat) Return the first ChildInvSerialWarranty filtered by the WarmOwnStat column
 * @method     ChildInvSerialWarranty findOneByWarmownzip(string $WarmOwnZip) Return the first ChildInvSerialWarranty filtered by the WarmOwnZip column
 * @method     ChildInvSerialWarranty findOneByWarmsordnbr(string $WarmSordNbr) Return the first ChildInvSerialWarranty filtered by the WarmSordNbr column
 * @method     ChildInvSerialWarranty findOneByWarminvcdate(string $WarmInvcDate) Return the first ChildInvSerialWarranty filtered by the WarmInvcDate column
 * @method     ChildInvSerialWarranty findOneByArcucustid(string $ArcuCustId) Return the first ChildInvSerialWarranty filtered by the ArcuCustId column
 * @method     ChildInvSerialWarranty findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildInvSerialWarranty filtered by the ArspSalePer1 column
 * @method     ChildInvSerialWarranty findOneByWarmentrydate(string $WarmEntryDate) Return the first ChildInvSerialWarranty filtered by the WarmEntryDate column
 * @method     ChildInvSerialWarranty findOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildInvSerialWarranty filtered by the WarmEngSerNbr column
 * @method     ChildInvSerialWarranty findOneByWarmenghorse(string $WarmEngHorse) Return the first ChildInvSerialWarranty filtered by the WarmEngHorse column
 * @method     ChildInvSerialWarranty findOneByWarmengmodelyear(string $WarmEngModelYear) Return the first ChildInvSerialWarranty filtered by the WarmEngModelYear column
 * @method     ChildInvSerialWarranty findOneByWarmengdesc(string $WarmEngDesc) Return the first ChildInvSerialWarranty filtered by the WarmEngDesc column
 * @method     ChildInvSerialWarranty findOneByWarmphone1(string $WarmPhone1) Return the first ChildInvSerialWarranty filtered by the WarmPhone1 column
 * @method     ChildInvSerialWarranty findOneByWarmphone2(string $WarmPhone2) Return the first ChildInvSerialWarranty filtered by the WarmPhone2 column
 * @method     ChildInvSerialWarranty findOneByWarmemail(string $WarmEmail) Return the first ChildInvSerialWarranty filtered by the WarmEmail column
 * @method     ChildInvSerialWarranty findOneByWarmacorigwarrdate(string $WarmAcOrigWarrDate) Return the first ChildInvSerialWarranty filtered by the WarmAcOrigWarrDate column
 * @method     ChildInvSerialWarranty findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialWarranty filtered by the DateUpdtd column
 * @method     ChildInvSerialWarranty findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialWarranty filtered by the TimeUpdtd column
 * @method     ChildInvSerialWarranty findOneByDummy(string $dummy) Return the first ChildInvSerialWarranty filtered by the dummy column *

 * @method     ChildInvSerialWarranty requirePk($key, ConnectionInterface $con = null) Return the ChildInvSerialWarranty by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOne(ConnectionInterface $con = null) Return the first ChildInvSerialWarranty matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialWarranty requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialWarranty filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialWarranty filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmsaledate(string $WarmSaleDate) Return the first ChildInvSerialWarranty filtered by the WarmSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownfname(string $WarmOwnFName) Return the first ChildInvSerialWarranty filtered by the WarmOwnFName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownmname(string $WarmOwnMName) Return the first ChildInvSerialWarranty filtered by the WarmOwnMName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownlname(string $WarmOwnLName) Return the first ChildInvSerialWarranty filtered by the WarmOwnLName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownadr1(string $WarmOwnAdr1) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownadr2(string $WarmOwnAdr2) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownadr3(string $WarmOwnAdr3) Return the first ChildInvSerialWarranty filtered by the WarmOwnAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmowncity(string $WarmOwnCity) Return the first ChildInvSerialWarranty filtered by the WarmOwnCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownstat(string $WarmOwnStat) Return the first ChildInvSerialWarranty filtered by the WarmOwnStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmownzip(string $WarmOwnZip) Return the first ChildInvSerialWarranty filtered by the WarmOwnZip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmsordnbr(string $WarmSordNbr) Return the first ChildInvSerialWarranty filtered by the WarmSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarminvcdate(string $WarmInvcDate) Return the first ChildInvSerialWarranty filtered by the WarmInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByArcucustid(string $ArcuCustId) Return the first ChildInvSerialWarranty filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildInvSerialWarranty filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmentrydate(string $WarmEntryDate) Return the first ChildInvSerialWarranty filtered by the WarmEntryDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmengsernbr(string $WarmEngSerNbr) Return the first ChildInvSerialWarranty filtered by the WarmEngSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmenghorse(string $WarmEngHorse) Return the first ChildInvSerialWarranty filtered by the WarmEngHorse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmengmodelyear(string $WarmEngModelYear) Return the first ChildInvSerialWarranty filtered by the WarmEngModelYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmengdesc(string $WarmEngDesc) Return the first ChildInvSerialWarranty filtered by the WarmEngDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmphone1(string $WarmPhone1) Return the first ChildInvSerialWarranty filtered by the WarmPhone1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmphone2(string $WarmPhone2) Return the first ChildInvSerialWarranty filtered by the WarmPhone2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmemail(string $WarmEmail) Return the first ChildInvSerialWarranty filtered by the WarmEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByWarmacorigwarrdate(string $WarmAcOrigWarrDate) Return the first ChildInvSerialWarranty filtered by the WarmAcOrigWarrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialWarranty filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialWarranty filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialWarranty requireOneByDummy(string $dummy) Return the first ChildInvSerialWarranty filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialWarranty[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvSerialWarranty objects based on current ModelCriteria
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvSerialWarranty objects filtered by the InitItemNbr column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findBySermsernbr(string $SermSerNbr) Return ChildInvSerialWarranty objects filtered by the SermSerNbr column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmsaledate(string $WarmSaleDate) Return ChildInvSerialWarranty objects filtered by the WarmSaleDate column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownfname(string $WarmOwnFName) Return ChildInvSerialWarranty objects filtered by the WarmOwnFName column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownmname(string $WarmOwnMName) Return ChildInvSerialWarranty objects filtered by the WarmOwnMName column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownlname(string $WarmOwnLName) Return ChildInvSerialWarranty objects filtered by the WarmOwnLName column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownadr1(string $WarmOwnAdr1) Return ChildInvSerialWarranty objects filtered by the WarmOwnAdr1 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownadr2(string $WarmOwnAdr2) Return ChildInvSerialWarranty objects filtered by the WarmOwnAdr2 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownadr3(string $WarmOwnAdr3) Return ChildInvSerialWarranty objects filtered by the WarmOwnAdr3 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmowncity(string $WarmOwnCity) Return ChildInvSerialWarranty objects filtered by the WarmOwnCity column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownstat(string $WarmOwnStat) Return ChildInvSerialWarranty objects filtered by the WarmOwnStat column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmownzip(string $WarmOwnZip) Return ChildInvSerialWarranty objects filtered by the WarmOwnZip column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmsordnbr(string $WarmSordNbr) Return ChildInvSerialWarranty objects filtered by the WarmSordNbr column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarminvcdate(string $WarmInvcDate) Return ChildInvSerialWarranty objects filtered by the WarmInvcDate column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildInvSerialWarranty objects filtered by the ArcuCustId column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildInvSerialWarranty objects filtered by the ArspSalePer1 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmentrydate(string $WarmEntryDate) Return ChildInvSerialWarranty objects filtered by the WarmEntryDate column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmengsernbr(string $WarmEngSerNbr) Return ChildInvSerialWarranty objects filtered by the WarmEngSerNbr column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmenghorse(string $WarmEngHorse) Return ChildInvSerialWarranty objects filtered by the WarmEngHorse column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmengmodelyear(string $WarmEngModelYear) Return ChildInvSerialWarranty objects filtered by the WarmEngModelYear column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmengdesc(string $WarmEngDesc) Return ChildInvSerialWarranty objects filtered by the WarmEngDesc column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmphone1(string $WarmPhone1) Return ChildInvSerialWarranty objects filtered by the WarmPhone1 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmphone2(string $WarmPhone2) Return ChildInvSerialWarranty objects filtered by the WarmPhone2 column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmemail(string $WarmEmail) Return ChildInvSerialWarranty objects filtered by the WarmEmail column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByWarmacorigwarrdate(string $WarmAcOrigWarrDate) Return ChildInvSerialWarranty objects filtered by the WarmAcOrigWarrDate column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvSerialWarranty objects filtered by the DateUpdtd column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvSerialWarranty objects filtered by the TimeUpdtd column
 * @method     ChildInvSerialWarranty[]|ObjectCollection findByDummy(string $dummy) Return ChildInvSerialWarranty objects filtered by the dummy column
 * @method     ChildInvSerialWarranty[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvSerialWarrantyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvSerialWarrantyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvSerialWarranty', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvSerialWarrantyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvSerialWarrantyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvSerialWarrantyQuery) {
            return $criteria;
        }
        $query = new ChildInvSerialWarrantyQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $SermSerNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvSerialWarranty|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvSerialWarrantyTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvSerialWarranty A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, SermSerNbr, WarmSaleDate, WarmOwnFName, WarmOwnMName, WarmOwnLName, WarmOwnAdr1, WarmOwnAdr2, WarmOwnAdr3, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, ArcuCustId, ArspSalePer1, WarmEntryDate, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmPhone2, WarmEmail, WarmAcOrigWarrDate, DateUpdtd, TimeUpdtd, dummy FROM inv_war_mast WHERE InitItemNbr = :p0 AND SermSerNbr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvSerialWarranty $obj */
            $obj = new ChildInvSerialWarranty();
            $obj->hydrate($row);
            InvSerialWarrantyTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvSerialWarranty|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvSerialWarrantyTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvSerialWarrantyTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvSerialWarrantyTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvSerialWarrantyTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the SermSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsernbr('fooValue');   // WHERE SermSerNbr = 'fooValue'
     * $query->filterBySermsernbr('%fooValue%', Criteria::LIKE); // WHERE SermSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_SERMSERNBR, $sermsernbr, $comparison);
    }

    /**
     * Filter the query on the WarmSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmsaledate('fooValue');   // WHERE WarmSaleDate = 'fooValue'
     * $query->filterByWarmsaledate('%fooValue%', Criteria::LIKE); // WHERE WarmSaleDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmsaledate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmsaledate($warmsaledate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmsaledate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMSALEDATE, $warmsaledate, $comparison);
    }

    /**
     * Filter the query on the WarmOwnFName column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownfname('fooValue');   // WHERE WarmOwnFName = 'fooValue'
     * $query->filterByWarmownfname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnFName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownfname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownfname($warmownfname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownfname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNFNAME, $warmownfname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnMName column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownmname('fooValue');   // WHERE WarmOwnMName = 'fooValue'
     * $query->filterByWarmownmname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnMName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownmname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownmname($warmownmname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownmname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNMNAME, $warmownmname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnLName column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownlname('fooValue');   // WHERE WarmOwnLName = 'fooValue'
     * $query->filterByWarmownlname('%fooValue%', Criteria::LIKE); // WHERE WarmOwnLName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownlname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownlname($warmownlname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownlname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNLNAME, $warmownlname, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr1('fooValue');   // WHERE WarmOwnAdr1 = 'fooValue'
     * $query->filterByWarmownadr1('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr1($warmownadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNADR1, $warmownadr1, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr2('fooValue');   // WHERE WarmOwnAdr2 = 'fooValue'
     * $query->filterByWarmownadr2('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr2($warmownadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNADR2, $warmownadr2, $comparison);
    }

    /**
     * Filter the query on the WarmOwnAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownadr3('fooValue');   // WHERE WarmOwnAdr3 = 'fooValue'
     * $query->filterByWarmownadr3('%fooValue%', Criteria::LIKE); // WHERE WarmOwnAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownadr3($warmownadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNADR3, $warmownadr3, $comparison);
    }

    /**
     * Filter the query on the WarmOwnCity column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmowncity('fooValue');   // WHERE WarmOwnCity = 'fooValue'
     * $query->filterByWarmowncity('%fooValue%', Criteria::LIKE); // WHERE WarmOwnCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmowncity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmowncity($warmowncity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmowncity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNCITY, $warmowncity, $comparison);
    }

    /**
     * Filter the query on the WarmOwnStat column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownstat('fooValue');   // WHERE WarmOwnStat = 'fooValue'
     * $query->filterByWarmownstat('%fooValue%', Criteria::LIKE); // WHERE WarmOwnStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownstat($warmownstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNSTAT, $warmownstat, $comparison);
    }

    /**
     * Filter the query on the WarmOwnZip column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmownzip('fooValue');   // WHERE WarmOwnZip = 'fooValue'
     * $query->filterByWarmownzip('%fooValue%', Criteria::LIKE); // WHERE WarmOwnZip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmownzip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmownzip($warmownzip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmownzip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMOWNZIP, $warmownzip, $comparison);
    }

    /**
     * Filter the query on the WarmSordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmsordnbr('fooValue');   // WHERE WarmSordNbr = 'fooValue'
     * $query->filterByWarmsordnbr('%fooValue%', Criteria::LIKE); // WHERE WarmSordNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmsordnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmsordnbr($warmsordnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmsordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMSORDNBR, $warmsordnbr, $comparison);
    }

    /**
     * Filter the query on the WarmInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarminvcdate('fooValue');   // WHERE WarmInvcDate = 'fooValue'
     * $query->filterByWarminvcdate('%fooValue%', Criteria::LIKE); // WHERE WarmInvcDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warminvcdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarminvcdate($warminvcdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warminvcdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMINVCDATE, $warminvcdate, $comparison);
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the WarmEntryDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmentrydate('fooValue');   // WHERE WarmEntryDate = 'fooValue'
     * $query->filterByWarmentrydate('%fooValue%', Criteria::LIKE); // WHERE WarmEntryDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmentrydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmentrydate($warmentrydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmentrydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENTRYDATE, $warmentrydate, $comparison);
    }

    /**
     * Filter the query on the WarmEngSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengsernbr('fooValue');   // WHERE WarmEngSerNbr = 'fooValue'
     * $query->filterByWarmengsernbr('%fooValue%', Criteria::LIKE); // WHERE WarmEngSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmengsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengsernbr($warmengsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGSERNBR, $warmengsernbr, $comparison);
    }

    /**
     * Filter the query on the WarmEngHorse column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmenghorse(1234); // WHERE WarmEngHorse = 1234
     * $query->filterByWarmenghorse(array(12, 34)); // WHERE WarmEngHorse IN (12, 34)
     * $query->filterByWarmenghorse(array('min' => 12)); // WHERE WarmEngHorse > 12
     * </code>
     *
     * @param     mixed $warmenghorse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmenghorse($warmenghorse = null, $comparison = null)
    {
        if (is_array($warmenghorse)) {
            $useMinMax = false;
            if (isset($warmenghorse['min'])) {
                $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGHORSE, $warmenghorse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warmenghorse['max'])) {
                $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGHORSE, $warmenghorse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGHORSE, $warmenghorse, $comparison);
    }

    /**
     * Filter the query on the WarmEngModelYear column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengmodelyear('fooValue');   // WHERE WarmEngModelYear = 'fooValue'
     * $query->filterByWarmengmodelyear('%fooValue%', Criteria::LIKE); // WHERE WarmEngModelYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmengmodelyear The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengmodelyear($warmengmodelyear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengmodelyear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGMODELYEAR, $warmengmodelyear, $comparison);
    }

    /**
     * Filter the query on the WarmEngDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmengdesc('fooValue');   // WHERE WarmEngDesc = 'fooValue'
     * $query->filterByWarmengdesc('%fooValue%', Criteria::LIKE); // WHERE WarmEngDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmengdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmengdesc($warmengdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmengdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMENGDESC, $warmengdesc, $comparison);
    }

    /**
     * Filter the query on the WarmPhone1 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmphone1('fooValue');   // WHERE WarmPhone1 = 'fooValue'
     * $query->filterByWarmphone1('%fooValue%', Criteria::LIKE); // WHERE WarmPhone1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmphone1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmphone1($warmphone1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMPHONE1, $warmphone1, $comparison);
    }

    /**
     * Filter the query on the WarmPhone2 column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmphone2('fooValue');   // WHERE WarmPhone2 = 'fooValue'
     * $query->filterByWarmphone2('%fooValue%', Criteria::LIKE); // WHERE WarmPhone2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmphone2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmphone2($warmphone2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmphone2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMPHONE2, $warmphone2, $comparison);
    }

    /**
     * Filter the query on the WarmEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmemail('fooValue');   // WHERE WarmEmail = 'fooValue'
     * $query->filterByWarmemail('%fooValue%', Criteria::LIKE); // WHERE WarmEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmemail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmemail($warmemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMEMAIL, $warmemail, $comparison);
    }

    /**
     * Filter the query on the WarmAcOrigWarrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByWarmacorigwarrdate('fooValue');   // WHERE WarmAcOrigWarrDate = 'fooValue'
     * $query->filterByWarmacorigwarrdate('%fooValue%', Criteria::LIKE); // WHERE WarmAcOrigWarrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $warmacorigwarrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByWarmacorigwarrdate($warmacorigwarrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($warmacorigwarrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_WARMACORIGWARRDATE, $warmacorigwarrdate, $comparison);
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialWarrantyTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

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
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \InvSerialMaster object
     *
     * @param \InvSerialMaster $invSerialMaster The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            return $this
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_SERMSERNBR, $invSerialMaster->getSermsernbr(), $comparison);
        } else {
            throw new PropelException('filterByInvSerialMaster() only accepts arguments of type \InvSerialMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvSerialMaster relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function joinInvSerialMaster($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvSerialMaster');

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
            $this->addJoinObject($join, 'InvSerialMaster');
        }

        return $this;
    }

    /**
     * Use the InvSerialMaster relation InvSerialMaster object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvSerialMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvSerialMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvSerialMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvSerialMaster', '\InvSerialMasterQuery');
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvSerialWarrantyTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildInvSerialWarranty $invSerialWarranty Object to remove from the list of results
     *
     * @return $this|ChildInvSerialWarrantyQuery The current query, for fluid interface
     */
    public function prune($invSerialWarranty = null)
    {
        if ($invSerialWarranty) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvSerialWarrantyTableMap::COL_INITITEMNBR), $invSerialWarranty->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvSerialWarrantyTableMap::COL_SERMSERNBR), $invSerialWarranty->getSermsernbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_war_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvSerialWarrantyTableMap::clearInstancePool();
            InvSerialWarrantyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialWarrantyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvSerialWarrantyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvSerialWarrantyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvSerialWarrantyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvSerialWarrantyQuery
