<?php

namespace Base;

use \InvTransferPreAllocatedLotserial as ChildInvTransferPreAllocatedLotserial;
use \InvTransferPreAllocatedLotserialQuery as ChildInvTransferPreAllocatedLotserialQuery;
use \Exception;
use \PDO;
use Map\InvTransferPreAllocatedLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trans_pre_allo' table.
 *
 *
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByIndtline($order = Criteria::ASC) Order by the IndtLine column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidlotser($order = Criteria::ASC) Order by the InidLotSer column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidbin($order = Criteria::ASC) Order by the InidBin column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidplltnbr($order = Criteria::ASC) Order by the InidPlltNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidcrtnnbr($order = Criteria::ASC) Order by the InidCrtnNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidqtyresv($order = Criteria::ASC) Order by the InidQtyResv column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidqtyship($order = Criteria::ASC) Order by the InidQtyShip column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidqtynotpost($order = Criteria::ASC) Order by the InidQtyNotPost column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidunitcost($order = Criteria::ASC) Order by the InidUnitCost column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidlotserfrom($order = Criteria::ASC) Order by the InidLotSerFrom column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidbinfrom($order = Criteria::ASC) Order by the InidBinFrom column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidcases($order = Criteria::ASC) Order by the InidCases column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidtag($order = Criteria::ASC) Order by the InidTag column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidinspctlvl($order = Criteria::ASC) Order by the InidInspctLvl column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidlotref($order = Criteria::ASC) Order by the InidLotRef column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByInidcrtnqty($order = Criteria::ASC) Order by the InidCrtnQty column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByIndtline() Group by the IndtLine column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidlotser() Group by the InidLotSer column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidbin() Group by the InidBin column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidplltnbr() Group by the InidPlltNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidcrtnnbr() Group by the InidCrtnNbr column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidqtyresv() Group by the InidQtyResv column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidqtyship() Group by the InidQtyShip column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidqtynotpost() Group by the InidQtyNotPost column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidunitcost() Group by the InidUnitCost column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidlotserfrom() Group by the InidLotSerFrom column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidbinfrom() Group by the InidBinFrom column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidcases() Group by the InidCases column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidtag() Group by the InidTag column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidinspctlvl() Group by the InidInspctLvl column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidlotref() Group by the InidLotRef column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByInidcrtnqty() Group by the InidCrtnQty column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinInvTransferOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinInvTransferOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinInvTransferOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery joinWithInvTransferOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWithInvTransferOrder() Adds a LEFT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWithInvTransferOrder() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWithInvTransferOrder() Adds a INNER JOIN clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinInvTransferDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinInvTransferDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinInvTransferDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery joinWithInvTransferDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWithInvTransferDetail() Adds a LEFT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWithInvTransferDetail() Adds a RIGHT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWithInvTransferDetail() Adds a INNER JOIN clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferPreAllocatedLotserialQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPreAllocatedLotserialQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     \ItemMasterItemQuery|\InvTransferOrderQuery|\InvTransferDetailQuery|\InvLotMasterQuery|\InvSerialMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferPreAllocatedLotserial findOne(ConnectionInterface $con = null) Return the first ChildInvTransferPreAllocatedLotserial matching the query
 * @method     ChildInvTransferPreAllocatedLotserial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvTransferPreAllocatedLotserial matching the query, or a new ChildInvTransferPreAllocatedLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InhdNbr column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByIndtline(int $IndtLine) Return the first ChildInvTransferPreAllocatedLotserial filtered by the IndtLine column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InitItemNbr column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidlotser(string $InidLotSer) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotSer column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidbin(string $InidBin) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidBin column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidplltnbr(int $InidPlltNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidPlltNbr column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidcrtnnbr(int $InidCrtnNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCrtnNbr column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidqtyresv(string $InidQtyResv) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyResv column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidqtyship(string $InidQtyShip) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyShip column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidqtynotpost(string $InidQtyNotPost) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyNotPost column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidunitcost(string $InidUnitCost) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidUnitCost column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidlotserfrom(string $InidLotSerFrom) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotSerFrom column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidbinfrom(string $InidBinFrom) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidBinFrom column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidcases(int $InidCases) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCases column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidtag(int $InidTag) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidTag column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidinspctlvl(string $InidInspctLvl) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidInspctLvl column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidlotref(string $InidLotRef) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotRef column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByInidcrtnqty(string $InidCrtnQty) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCrtnQty column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferPreAllocatedLotserial filtered by the DateUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferPreAllocatedLotserial filtered by the TimeUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserial findOneByDummy(string $dummy) Return the first ChildInvTransferPreAllocatedLotserial filtered by the dummy column *

 * @method     ChildInvTransferPreAllocatedLotserial requirePk($key, ConnectionInterface $con = null) Return the ChildInvTransferPreAllocatedLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOne(ConnectionInterface $con = null) Return the first ChildInvTransferPreAllocatedLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByIndtline(int $IndtLine) Return the first ChildInvTransferPreAllocatedLotserial filtered by the IndtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidlotser(string $InidLotSer) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidbin(string $InidBin) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidplltnbr(int $InidPlltNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidcrtnnbr(int $InidCrtnNbr) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidqtyresv(string $InidQtyResv) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidqtyship(string $InidQtyShip) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidqtynotpost(string $InidQtyNotPost) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidQtyNotPost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidunitcost(string $InidUnitCost) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidlotserfrom(string $InidLotSerFrom) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotSerFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidbinfrom(string $InidBinFrom) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidBinFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidcases(int $InidCases) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidtag(int $InidTag) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidinspctlvl(string $InidInspctLvl) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidInspctLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidlotref(string $InidLotRef) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByInidcrtnqty(string $InidCrtnQty) Return the first ChildInvTransferPreAllocatedLotserial filtered by the InidCrtnQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferPreAllocatedLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferPreAllocatedLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPreAllocatedLotserial requireOneByDummy(string $dummy) Return the first ChildInvTransferPreAllocatedLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvTransferPreAllocatedLotserial objects based on current ModelCriteria
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInhdnbr(int $InhdNbr) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InhdNbr column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByIndtline(int $IndtLine) Return ChildInvTransferPreAllocatedLotserial objects filtered by the IndtLine column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InitItemNbr column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidlotser(string $InidLotSer) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidLotSer column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidbin(string $InidBin) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidBin column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidplltnbr(int $InidPlltNbr) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidPlltNbr column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidcrtnnbr(int $InidCrtnNbr) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidCrtnNbr column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidqtyresv(string $InidQtyResv) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidQtyResv column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidqtyship(string $InidQtyShip) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidQtyShip column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidqtynotpost(string $InidQtyNotPost) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidQtyNotPost column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidunitcost(string $InidUnitCost) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidUnitCost column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidlotserfrom(string $InidLotSerFrom) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidLotSerFrom column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidbinfrom(string $InidBinFrom) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidBinFrom column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidcases(int $InidCases) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidCases column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidtag(int $InidTag) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidTag column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidinspctlvl(string $InidInspctLvl) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidInspctLvl column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidlotref(string $InidLotRef) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidLotRef column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByInidcrtnqty(string $InidCrtnQty) Return ChildInvTransferPreAllocatedLotserial objects filtered by the InidCrtnQty column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvTransferPreAllocatedLotserial objects filtered by the DateUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvTransferPreAllocatedLotserial objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferPreAllocatedLotserial[]|ObjectCollection findByDummy(string $dummy) Return ChildInvTransferPreAllocatedLotserial objects filtered by the dummy column
 * @method     ChildInvTransferPreAllocatedLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvTransferPreAllocatedLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferPreAllocatedLotserialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferPreAllocatedLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferPreAllocatedLotserialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvTransferPreAllocatedLotserialQuery) {
            return $criteria;
        }
        $query = new ChildInvTransferPreAllocatedLotserialQuery();
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
     * @param array[$InhdNbr, $IndtLine, $InitItemNbr, $InidLotSer, $InidBin, $InidPlltNbr, $InidCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvTransferPreAllocatedLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvTransferPreAllocatedLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildInvTransferPreAllocatedLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InhdNbr, IndtLine, InitItemNbr, InidLotSer, InidBin, InidPlltNbr, InidCrtnNbr, InidQtyResv, InidQtyShip, InidQtyNotPost, InidUnitCost, InidLotSerFrom, InidBinFrom, InidCases, InidTag, InidInspctLvl, InidLotRef, InidCrtnQty, DateUpdtd, TimeUpdtd, dummy FROM inv_trans_pre_allo WHERE InhdNbr = :p0 AND IndtLine = :p1 AND InitItemNbr = :p2 AND InidLotSer = :p3 AND InidBin = :p4 AND InidPlltNbr = :p5 AND InidCrtnNbr = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
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
            /** @var ChildInvTransferPreAllocatedLotserial $obj */
            $obj = new ChildInvTransferPreAllocatedLotserial();
            $obj->hydrate($row);
            InvTransferPreAllocatedLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildInvTransferPreAllocatedLotserial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InhdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdnbr(1234); // WHERE InhdNbr = 1234
     * $query->filterByInhdnbr(array(12, 34)); // WHERE InhdNbr IN (12, 34)
     * $query->filterByInhdnbr(array('min' => 12)); // WHERE InhdNbr > 12
     * </code>
     *
     * @see       filterByInvTransferOrder()
     *
     * @see       filterByInvTransferDetail()
     *
     * @param     mixed $inhdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (is_array($inhdnbr)) {
            $useMinMax = false;
            if (isset($inhdnbr['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $inhdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdnbr['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $inhdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $inhdnbr, $comparison);
    }

    /**
     * Filter the query on the IndtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtline(1234); // WHERE IndtLine = 1234
     * $query->filterByIndtline(array(12, 34)); // WHERE IndtLine IN (12, 34)
     * $query->filterByIndtline(array('min' => 12)); // WHERE IndtLine > 12
     * </code>
     *
     * @see       filterByInvTransferDetail()
     *
     * @param     mixed $indtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByIndtline($indtline = null, $comparison = null)
    {
        if (is_array($indtline)) {
            $useMinMax = false;
            if (isset($indtline['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $indtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtline['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $indtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $indtline, $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InidLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInidlotser('fooValue');   // WHERE InidLotSer = 'fooValue'
     * $query->filterByInidlotser('%fooValue%', Criteria::LIKE); // WHERE InidLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidlotser($inidlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $inidlotser, $comparison);
    }

    /**
     * Filter the query on the InidBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInidbin('fooValue');   // WHERE InidBin = 'fooValue'
     * $query->filterByInidbin('%fooValue%', Criteria::LIKE); // WHERE InidBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidbin($inidbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN, $inidbin, $comparison);
    }

    /**
     * Filter the query on the InidPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInidplltnbr(1234); // WHERE InidPlltNbr = 1234
     * $query->filterByInidplltnbr(array(12, 34)); // WHERE InidPlltNbr IN (12, 34)
     * $query->filterByInidplltnbr(array('min' => 12)); // WHERE InidPlltNbr > 12
     * </code>
     *
     * @param     mixed $inidplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidplltnbr($inidplltnbr = null, $comparison = null)
    {
        if (is_array($inidplltnbr)) {
            $useMinMax = false;
            if (isset($inidplltnbr['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $inidplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidplltnbr['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $inidplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR, $inidplltnbr, $comparison);
    }

    /**
     * Filter the query on the InidCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInidcrtnnbr(1234); // WHERE InidCrtnNbr = 1234
     * $query->filterByInidcrtnnbr(array(12, 34)); // WHERE InidCrtnNbr IN (12, 34)
     * $query->filterByInidcrtnnbr(array('min' => 12)); // WHERE InidCrtnNbr > 12
     * </code>
     *
     * @param     mixed $inidcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidcrtnnbr($inidcrtnnbr = null, $comparison = null)
    {
        if (is_array($inidcrtnnbr)) {
            $useMinMax = false;
            if (isset($inidcrtnnbr['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $inidcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidcrtnnbr['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $inidcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR, $inidcrtnnbr, $comparison);
    }

    /**
     * Filter the query on the InidQtyResv column
     *
     * Example usage:
     * <code>
     * $query->filterByInidqtyresv(1234); // WHERE InidQtyResv = 1234
     * $query->filterByInidqtyresv(array(12, 34)); // WHERE InidQtyResv IN (12, 34)
     * $query->filterByInidqtyresv(array('min' => 12)); // WHERE InidQtyResv > 12
     * </code>
     *
     * @param     mixed $inidqtyresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidqtyresv($inidqtyresv = null, $comparison = null)
    {
        if (is_array($inidqtyresv)) {
            $useMinMax = false;
            if (isset($inidqtyresv['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV, $inidqtyresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidqtyresv['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV, $inidqtyresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYRESV, $inidqtyresv, $comparison);
    }

    /**
     * Filter the query on the InidQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInidqtyship(1234); // WHERE InidQtyShip = 1234
     * $query->filterByInidqtyship(array(12, 34)); // WHERE InidQtyShip IN (12, 34)
     * $query->filterByInidqtyship(array('min' => 12)); // WHERE InidQtyShip > 12
     * </code>
     *
     * @param     mixed $inidqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidqtyship($inidqtyship = null, $comparison = null)
    {
        if (is_array($inidqtyship)) {
            $useMinMax = false;
            if (isset($inidqtyship['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP, $inidqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidqtyship['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP, $inidqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYSHIP, $inidqtyship, $comparison);
    }

    /**
     * Filter the query on the InidQtyNotPost column
     *
     * Example usage:
     * <code>
     * $query->filterByInidqtynotpost(1234); // WHERE InidQtyNotPost = 1234
     * $query->filterByInidqtynotpost(array(12, 34)); // WHERE InidQtyNotPost IN (12, 34)
     * $query->filterByInidqtynotpost(array('min' => 12)); // WHERE InidQtyNotPost > 12
     * </code>
     *
     * @param     mixed $inidqtynotpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidqtynotpost($inidqtynotpost = null, $comparison = null)
    {
        if (is_array($inidqtynotpost)) {
            $useMinMax = false;
            if (isset($inidqtynotpost['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST, $inidqtynotpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidqtynotpost['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST, $inidqtynotpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDQTYNOTPOST, $inidqtynotpost, $comparison);
    }

    /**
     * Filter the query on the InidUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInidunitcost(1234); // WHERE InidUnitCost = 1234
     * $query->filterByInidunitcost(array(12, 34)); // WHERE InidUnitCost IN (12, 34)
     * $query->filterByInidunitcost(array('min' => 12)); // WHERE InidUnitCost > 12
     * </code>
     *
     * @param     mixed $inidunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidunitcost($inidunitcost = null, $comparison = null)
    {
        if (is_array($inidunitcost)) {
            $useMinMax = false;
            if (isset($inidunitcost['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST, $inidunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidunitcost['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST, $inidunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDUNITCOST, $inidunitcost, $comparison);
    }

    /**
     * Filter the query on the InidLotSerFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInidlotserfrom('fooValue');   // WHERE InidLotSerFrom = 'fooValue'
     * $query->filterByInidlotserfrom('%fooValue%', Criteria::LIKE); // WHERE InidLotSerFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidlotserfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidlotserfrom($inidlotserfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidlotserfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSERFROM, $inidlotserfrom, $comparison);
    }

    /**
     * Filter the query on the InidBinFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInidbinfrom('fooValue');   // WHERE InidBinFrom = 'fooValue'
     * $query->filterByInidbinfrom('%fooValue%', Criteria::LIKE); // WHERE InidBinFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidbinfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidbinfrom($inidbinfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidbinfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDBINFROM, $inidbinfrom, $comparison);
    }

    /**
     * Filter the query on the InidCases column
     *
     * Example usage:
     * <code>
     * $query->filterByInidcases(1234); // WHERE InidCases = 1234
     * $query->filterByInidcases(array(12, 34)); // WHERE InidCases IN (12, 34)
     * $query->filterByInidcases(array('min' => 12)); // WHERE InidCases > 12
     * </code>
     *
     * @param     mixed $inidcases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidcases($inidcases = null, $comparison = null)
    {
        if (is_array($inidcases)) {
            $useMinMax = false;
            if (isset($inidcases['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES, $inidcases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidcases['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES, $inidcases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCASES, $inidcases, $comparison);
    }

    /**
     * Filter the query on the InidTag column
     *
     * Example usage:
     * <code>
     * $query->filterByInidtag(1234); // WHERE InidTag = 1234
     * $query->filterByInidtag(array(12, 34)); // WHERE InidTag IN (12, 34)
     * $query->filterByInidtag(array('min' => 12)); // WHERE InidTag > 12
     * </code>
     *
     * @param     mixed $inidtag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidtag($inidtag = null, $comparison = null)
    {
        if (is_array($inidtag)) {
            $useMinMax = false;
            if (isset($inidtag['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG, $inidtag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidtag['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG, $inidtag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDTAG, $inidtag, $comparison);
    }

    /**
     * Filter the query on the InidInspctLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByInidinspctlvl('fooValue');   // WHERE InidInspctLvl = 'fooValue'
     * $query->filterByInidinspctlvl('%fooValue%', Criteria::LIKE); // WHERE InidInspctLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidinspctlvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidinspctlvl($inidinspctlvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidinspctlvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDINSPCTLVL, $inidinspctlvl, $comparison);
    }

    /**
     * Filter the query on the InidLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInidlotref('fooValue');   // WHERE InidLotRef = 'fooValue'
     * $query->filterByInidlotref('%fooValue%', Criteria::LIKE); // WHERE InidLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inidlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidlotref($inidlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inidlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTREF, $inidlotref, $comparison);
    }

    /**
     * Filter the query on the InidCrtnQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInidcrtnqty(1234); // WHERE InidCrtnQty = 1234
     * $query->filterByInidcrtnqty(array(12, 34)); // WHERE InidCrtnQty IN (12, 34)
     * $query->filterByInidcrtnqty(array('min' => 12)); // WHERE InidCrtnQty > 12
     * </code>
     *
     * @param     mixed $inidcrtnqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInidcrtnqty($inidcrtnqty = null, $comparison = null)
    {
        if (is_array($inidcrtnqty)) {
            $useMinMax = false;
            if (isset($inidcrtnqty['min'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY, $inidcrtnqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inidcrtnqty['max'])) {
                $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY, $inidcrtnqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNQTY, $inidcrtnqty, $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
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
     * Filter the query by a related \InvTransferOrder object
     *
     * @param \InvTransferOrder|ObjectCollection $invTransferOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferOrder($invTransferOrder, $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $invTransferOrder->getInhdnbr(), $comparison);
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $invTransferOrder->toKeyValue('PrimaryKey', 'Inhdnbr'), $comparison);
        } else {
            throw new PropelException('filterByInvTransferOrder() only accepts arguments of type \InvTransferOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinInvTransferOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferOrder');

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
            $this->addJoinObject($join, 'InvTransferOrder');
        }

        return $this;
    }

    /**
     * Use the InvTransferOrder relation InvTransferOrder object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferOrderQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferOrder', '\InvTransferOrderQuery');
    }

    /**
     * Filter the query by a related \InvTransferDetail object
     *
     * @param \InvTransferDetail $invTransferDetail The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR, $invTransferDetail->getInhdnbr(), $comparison)
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE, $invTransferDetail->getIndtline(), $comparison);
        } else {
            throw new PropelException('filterByInvTransferDetail() only accepts arguments of type \InvTransferDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinInvTransferDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferDetail');

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
            $this->addJoinObject($join, 'InvTransferDetail');
        }

        return $this;
    }

    /**
     * Use the InvTransferDetail relation InvTransferDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferDetailQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferDetail', '\InvTransferDetailQuery');
    }

    /**
     * Filter the query by a related \InvLotMaster object
     *
     * @param \InvLotMaster $invLotMaster The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
        } else {
            throw new PropelException('filterByInvLotMaster() only accepts arguments of type \InvLotMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotMaster relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinInvLotMaster($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotMaster');

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
            $this->addJoinObject($join, 'InvLotMaster');
        }

        return $this;
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvLotMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotMaster', '\InvLotMasterQuery');
    }

    /**
     * Filter the query by a related \InvSerialMaster object
     *
     * @param \InvSerialMaster $invSerialMaster The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            return $this
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER, $invSerialMaster->getSermsernbr(), $comparison);
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
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial Object to remove from the list of results
     *
     * @return $this|ChildInvTransferPreAllocatedLotserialQuery The current query, for fluid interface
     */
    public function prune($invTransferPreAllocatedLotserial = null)
    {
        if ($invTransferPreAllocatedLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INHDNBR), $invTransferPreAllocatedLotserial->getInhdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INDTLINE), $invTransferPreAllocatedLotserial->getIndtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INITITEMNBR), $invTransferPreAllocatedLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INIDLOTSER), $invTransferPreAllocatedLotserial->getInidlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INIDBIN), $invTransferPreAllocatedLotserial->getInidbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INIDPLLTNBR), $invTransferPreAllocatedLotserial->getInidplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(InvTransferPreAllocatedLotserialTableMap::COL_INIDCRTNNBR), $invTransferPreAllocatedLotserial->getInidcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trans_pre_allo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvTransferPreAllocatedLotserialTableMap::clearInstancePool();
            InvTransferPreAllocatedLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvTransferPreAllocatedLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvTransferPreAllocatedLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvTransferPreAllocatedLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvTransferPreAllocatedLotserialQuery
