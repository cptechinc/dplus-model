<?php

namespace Base;

use \InvTransferLotserial as ChildInvTransferLotserial;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \Exception;
use \PDO;
use Map\InvTransferLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trans_lotser' table.
 *
 *
 *
 * @method     ChildInvTransferLotserialQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildInvTransferLotserialQuery orderByIndtline($order = Criteria::ASC) Order by the IndtLine column
 * @method     ChildInvTransferLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvTransferLotserialQuery orderByInsdlotser($order = Criteria::ASC) Order by the InsdLotSer column
 * @method     ChildInvTransferLotserialQuery orderByInsdbin($order = Criteria::ASC) Order by the InsdBin column
 * @method     ChildInvTransferLotserialQuery orderByInsdplltnbr($order = Criteria::ASC) Order by the InsdPlltNbr column
 * @method     ChildInvTransferLotserialQuery orderByInsdcrtnnbr($order = Criteria::ASC) Order by the InsdCrtnNbr column
 * @method     ChildInvTransferLotserialQuery orderByInsdqtyresv($order = Criteria::ASC) Order by the InsdQtyResv column
 * @method     ChildInvTransferLotserialQuery orderByInsdqtyship($order = Criteria::ASC) Order by the InsdQtyShip column
 * @method     ChildInvTransferLotserialQuery orderByInsdqtynotpost($order = Criteria::ASC) Order by the InsdQtyNotPost column
 * @method     ChildInvTransferLotserialQuery orderByInsdunitcost($order = Criteria::ASC) Order by the InsdUnitCost column
 * @method     ChildInvTransferLotserialQuery orderByInsdlotserfrom($order = Criteria::ASC) Order by the InsdLotSerFrom column
 * @method     ChildInvTransferLotserialQuery orderByInsdbinfrom($order = Criteria::ASC) Order by the InsdBinFrom column
 * @method     ChildInvTransferLotserialQuery orderByInsdcases($order = Criteria::ASC) Order by the InsdCases column
 * @method     ChildInvTransferLotserialQuery orderByInsdtag($order = Criteria::ASC) Order by the InsdTag column
 * @method     ChildInvTransferLotserialQuery orderByInsdinspctlvl($order = Criteria::ASC) Order by the InsdInspctLvl column
 * @method     ChildInvTransferLotserialQuery orderByInsdlotref($order = Criteria::ASC) Order by the InsdLotRef column
 * @method     ChildInvTransferLotserialQuery orderByInsdcrtnqty($order = Criteria::ASC) Order by the InsdCrtnQty column
 * @method     ChildInvTransferLotserialQuery orderByInsddateshipped($order = Criteria::ASC) Order by the InsdDateShipped column
 * @method     ChildInvTransferLotserialQuery orderByInsdtowhsebin($order = Criteria::ASC) Order by the InsdToWhseBin column
 * @method     ChildInvTransferLotserialQuery orderByInsdlblprtd($order = Criteria::ASC) Order by the InsdLblPrtd column
 * @method     ChildInvTransferLotserialQuery orderByInsdbatch($order = Criteria::ASC) Order by the InsdBatch column
 * @method     ChildInvTransferLotserialQuery orderByInsdcuredate($order = Criteria::ASC) Order by the InsdCureDate column
 * @method     ChildInvTransferLotserialQuery orderByInsdbinto($order = Criteria::ASC) Order by the InsdBinTo column
 * @method     ChildInvTransferLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvTransferLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvTransferLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvTransferLotserialQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildInvTransferLotserialQuery groupByIndtline() Group by the IndtLine column
 * @method     ChildInvTransferLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvTransferLotserialQuery groupByInsdlotser() Group by the InsdLotSer column
 * @method     ChildInvTransferLotserialQuery groupByInsdbin() Group by the InsdBin column
 * @method     ChildInvTransferLotserialQuery groupByInsdplltnbr() Group by the InsdPlltNbr column
 * @method     ChildInvTransferLotserialQuery groupByInsdcrtnnbr() Group by the InsdCrtnNbr column
 * @method     ChildInvTransferLotserialQuery groupByInsdqtyresv() Group by the InsdQtyResv column
 * @method     ChildInvTransferLotserialQuery groupByInsdqtyship() Group by the InsdQtyShip column
 * @method     ChildInvTransferLotserialQuery groupByInsdqtynotpost() Group by the InsdQtyNotPost column
 * @method     ChildInvTransferLotserialQuery groupByInsdunitcost() Group by the InsdUnitCost column
 * @method     ChildInvTransferLotserialQuery groupByInsdlotserfrom() Group by the InsdLotSerFrom column
 * @method     ChildInvTransferLotserialQuery groupByInsdbinfrom() Group by the InsdBinFrom column
 * @method     ChildInvTransferLotserialQuery groupByInsdcases() Group by the InsdCases column
 * @method     ChildInvTransferLotserialQuery groupByInsdtag() Group by the InsdTag column
 * @method     ChildInvTransferLotserialQuery groupByInsdinspctlvl() Group by the InsdInspctLvl column
 * @method     ChildInvTransferLotserialQuery groupByInsdlotref() Group by the InsdLotRef column
 * @method     ChildInvTransferLotserialQuery groupByInsdcrtnqty() Group by the InsdCrtnQty column
 * @method     ChildInvTransferLotserialQuery groupByInsddateshipped() Group by the InsdDateShipped column
 * @method     ChildInvTransferLotserialQuery groupByInsdtowhsebin() Group by the InsdToWhseBin column
 * @method     ChildInvTransferLotserialQuery groupByInsdlblprtd() Group by the InsdLblPrtd column
 * @method     ChildInvTransferLotserialQuery groupByInsdbatch() Group by the InsdBatch column
 * @method     ChildInvTransferLotserialQuery groupByInsdcuredate() Group by the InsdCureDate column
 * @method     ChildInvTransferLotserialQuery groupByInsdbinto() Group by the InsdBinTo column
 * @method     ChildInvTransferLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvTransferLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvTransferLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvTransferLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvTransferLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvTransferLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvTransferLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvTransferLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvTransferLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinInvTransferOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferLotserialQuery rightJoinInvTransferOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferLotserialQuery innerJoinInvTransferOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferLotserialQuery joinWithInvTransferOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWithInvTransferOrder() Adds a LEFT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferLotserialQuery rightJoinWithInvTransferOrder() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferLotserialQuery innerJoinWithInvTransferOrder() Adds a INNER JOIN clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinInvTransferDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferLotserialQuery rightJoinInvTransferDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferLotserialQuery innerJoinInvTransferDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferLotserialQuery joinWithInvTransferDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWithInvTransferDetail() Adds a LEFT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferLotserialQuery rightJoinWithInvTransferDetail() Adds a RIGHT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferLotserialQuery innerJoinWithInvTransferDetail() Adds a INNER JOIN clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferLotserialQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferLotserialQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferLotserialQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferLotserialQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferLotserialQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferLotserialQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferLotserialQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferLotserialQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferLotserialQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferLotserialQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferLotserialQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     \ItemMasterItemQuery|\InvTransferOrderQuery|\InvTransferDetailQuery|\InvLotMasterQuery|\InvSerialMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferLotserial findOne(ConnectionInterface $con = null) Return the first ChildInvTransferLotserial matching the query
 * @method     ChildInvTransferLotserial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvTransferLotserial matching the query, or a new ChildInvTransferLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferLotserial findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferLotserial filtered by the InhdNbr column
 * @method     ChildInvTransferLotserial findOneByIndtline(int $IndtLine) Return the first ChildInvTransferLotserial filtered by the IndtLine column
 * @method     ChildInvTransferLotserial findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferLotserial filtered by the InitItemNbr column
 * @method     ChildInvTransferLotserial findOneByInsdlotser(string $InsdLotSer) Return the first ChildInvTransferLotserial filtered by the InsdLotSer column
 * @method     ChildInvTransferLotserial findOneByInsdbin(string $InsdBin) Return the first ChildInvTransferLotserial filtered by the InsdBin column
 * @method     ChildInvTransferLotserial findOneByInsdplltnbr(int $InsdPlltNbr) Return the first ChildInvTransferLotserial filtered by the InsdPlltNbr column
 * @method     ChildInvTransferLotserial findOneByInsdcrtnnbr(int $InsdCrtnNbr) Return the first ChildInvTransferLotserial filtered by the InsdCrtnNbr column
 * @method     ChildInvTransferLotserial findOneByInsdqtyresv(string $InsdQtyResv) Return the first ChildInvTransferLotserial filtered by the InsdQtyResv column
 * @method     ChildInvTransferLotserial findOneByInsdqtyship(string $InsdQtyShip) Return the first ChildInvTransferLotserial filtered by the InsdQtyShip column
 * @method     ChildInvTransferLotserial findOneByInsdqtynotpost(string $InsdQtyNotPost) Return the first ChildInvTransferLotserial filtered by the InsdQtyNotPost column
 * @method     ChildInvTransferLotserial findOneByInsdunitcost(string $InsdUnitCost) Return the first ChildInvTransferLotserial filtered by the InsdUnitCost column
 * @method     ChildInvTransferLotserial findOneByInsdlotserfrom(string $InsdLotSerFrom) Return the first ChildInvTransferLotserial filtered by the InsdLotSerFrom column
 * @method     ChildInvTransferLotserial findOneByInsdbinfrom(string $InsdBinFrom) Return the first ChildInvTransferLotserial filtered by the InsdBinFrom column
 * @method     ChildInvTransferLotserial findOneByInsdcases(int $InsdCases) Return the first ChildInvTransferLotserial filtered by the InsdCases column
 * @method     ChildInvTransferLotserial findOneByInsdtag(int $InsdTag) Return the first ChildInvTransferLotserial filtered by the InsdTag column
 * @method     ChildInvTransferLotserial findOneByInsdinspctlvl(string $InsdInspctLvl) Return the first ChildInvTransferLotserial filtered by the InsdInspctLvl column
 * @method     ChildInvTransferLotserial findOneByInsdlotref(string $InsdLotRef) Return the first ChildInvTransferLotserial filtered by the InsdLotRef column
 * @method     ChildInvTransferLotserial findOneByInsdcrtnqty(string $InsdCrtnQty) Return the first ChildInvTransferLotserial filtered by the InsdCrtnQty column
 * @method     ChildInvTransferLotserial findOneByInsddateshipped(string $InsdDateShipped) Return the first ChildInvTransferLotserial filtered by the InsdDateShipped column
 * @method     ChildInvTransferLotserial findOneByInsdtowhsebin(string $InsdToWhseBin) Return the first ChildInvTransferLotserial filtered by the InsdToWhseBin column
 * @method     ChildInvTransferLotserial findOneByInsdlblprtd(string $InsdLblPrtd) Return the first ChildInvTransferLotserial filtered by the InsdLblPrtd column
 * @method     ChildInvTransferLotserial findOneByInsdbatch(string $InsdBatch) Return the first ChildInvTransferLotserial filtered by the InsdBatch column
 * @method     ChildInvTransferLotserial findOneByInsdcuredate(string $InsdCureDate) Return the first ChildInvTransferLotserial filtered by the InsdCureDate column
 * @method     ChildInvTransferLotserial findOneByInsdbinto(string $InsdBinTo) Return the first ChildInvTransferLotserial filtered by the InsdBinTo column
 * @method     ChildInvTransferLotserial findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferLotserial filtered by the DateUpdtd column
 * @method     ChildInvTransferLotserial findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferLotserial filtered by the TimeUpdtd column
 * @method     ChildInvTransferLotserial findOneByDummy(string $dummy) Return the first ChildInvTransferLotserial filtered by the dummy column *

 * @method     ChildInvTransferLotserial requirePk($key, ConnectionInterface $con = null) Return the ChildInvTransferLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOne(ConnectionInterface $con = null) Return the first ChildInvTransferLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferLotserial requireOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferLotserial filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByIndtline(int $IndtLine) Return the first ChildInvTransferLotserial filtered by the IndtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdlotser(string $InsdLotSer) Return the first ChildInvTransferLotserial filtered by the InsdLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdbin(string $InsdBin) Return the first ChildInvTransferLotserial filtered by the InsdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdplltnbr(int $InsdPlltNbr) Return the first ChildInvTransferLotserial filtered by the InsdPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdcrtnnbr(int $InsdCrtnNbr) Return the first ChildInvTransferLotserial filtered by the InsdCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdqtyresv(string $InsdQtyResv) Return the first ChildInvTransferLotserial filtered by the InsdQtyResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdqtyship(string $InsdQtyShip) Return the first ChildInvTransferLotserial filtered by the InsdQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdqtynotpost(string $InsdQtyNotPost) Return the first ChildInvTransferLotserial filtered by the InsdQtyNotPost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdunitcost(string $InsdUnitCost) Return the first ChildInvTransferLotserial filtered by the InsdUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdlotserfrom(string $InsdLotSerFrom) Return the first ChildInvTransferLotserial filtered by the InsdLotSerFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdbinfrom(string $InsdBinFrom) Return the first ChildInvTransferLotserial filtered by the InsdBinFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdcases(int $InsdCases) Return the first ChildInvTransferLotserial filtered by the InsdCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdtag(int $InsdTag) Return the first ChildInvTransferLotserial filtered by the InsdTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdinspctlvl(string $InsdInspctLvl) Return the first ChildInvTransferLotserial filtered by the InsdInspctLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdlotref(string $InsdLotRef) Return the first ChildInvTransferLotserial filtered by the InsdLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdcrtnqty(string $InsdCrtnQty) Return the first ChildInvTransferLotserial filtered by the InsdCrtnQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsddateshipped(string $InsdDateShipped) Return the first ChildInvTransferLotserial filtered by the InsdDateShipped column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdtowhsebin(string $InsdToWhseBin) Return the first ChildInvTransferLotserial filtered by the InsdToWhseBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdlblprtd(string $InsdLblPrtd) Return the first ChildInvTransferLotserial filtered by the InsdLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdbatch(string $InsdBatch) Return the first ChildInvTransferLotserial filtered by the InsdBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdcuredate(string $InsdCureDate) Return the first ChildInvTransferLotserial filtered by the InsdCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByInsdbinto(string $InsdBinTo) Return the first ChildInvTransferLotserial filtered by the InsdBinTo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferLotserial requireOneByDummy(string $dummy) Return the first ChildInvTransferLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferLotserial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvTransferLotserial objects based on current ModelCriteria
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInhdnbr(int $InhdNbr) Return ChildInvTransferLotserial objects filtered by the InhdNbr column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByIndtline(int $IndtLine) Return ChildInvTransferLotserial objects filtered by the IndtLine column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvTransferLotserial objects filtered by the InitItemNbr column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdlotser(string $InsdLotSer) Return ChildInvTransferLotserial objects filtered by the InsdLotSer column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdbin(string $InsdBin) Return ChildInvTransferLotserial objects filtered by the InsdBin column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdplltnbr(int $InsdPlltNbr) Return ChildInvTransferLotserial objects filtered by the InsdPlltNbr column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdcrtnnbr(int $InsdCrtnNbr) Return ChildInvTransferLotserial objects filtered by the InsdCrtnNbr column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdqtyresv(string $InsdQtyResv) Return ChildInvTransferLotserial objects filtered by the InsdQtyResv column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdqtyship(string $InsdQtyShip) Return ChildInvTransferLotserial objects filtered by the InsdQtyShip column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdqtynotpost(string $InsdQtyNotPost) Return ChildInvTransferLotserial objects filtered by the InsdQtyNotPost column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdunitcost(string $InsdUnitCost) Return ChildInvTransferLotserial objects filtered by the InsdUnitCost column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdlotserfrom(string $InsdLotSerFrom) Return ChildInvTransferLotserial objects filtered by the InsdLotSerFrom column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdbinfrom(string $InsdBinFrom) Return ChildInvTransferLotserial objects filtered by the InsdBinFrom column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdcases(int $InsdCases) Return ChildInvTransferLotserial objects filtered by the InsdCases column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdtag(int $InsdTag) Return ChildInvTransferLotserial objects filtered by the InsdTag column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdinspctlvl(string $InsdInspctLvl) Return ChildInvTransferLotserial objects filtered by the InsdInspctLvl column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdlotref(string $InsdLotRef) Return ChildInvTransferLotserial objects filtered by the InsdLotRef column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdcrtnqty(string $InsdCrtnQty) Return ChildInvTransferLotserial objects filtered by the InsdCrtnQty column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsddateshipped(string $InsdDateShipped) Return ChildInvTransferLotserial objects filtered by the InsdDateShipped column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdtowhsebin(string $InsdToWhseBin) Return ChildInvTransferLotserial objects filtered by the InsdToWhseBin column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdlblprtd(string $InsdLblPrtd) Return ChildInvTransferLotserial objects filtered by the InsdLblPrtd column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdbatch(string $InsdBatch) Return ChildInvTransferLotserial objects filtered by the InsdBatch column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdcuredate(string $InsdCureDate) Return ChildInvTransferLotserial objects filtered by the InsdCureDate column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByInsdbinto(string $InsdBinTo) Return ChildInvTransferLotserial objects filtered by the InsdBinTo column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvTransferLotserial objects filtered by the DateUpdtd column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvTransferLotserial objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferLotserial[]|ObjectCollection findByDummy(string $dummy) Return ChildInvTransferLotserial objects filtered by the dummy column
 * @method     ChildInvTransferLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvTransferLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferLotserialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferLotserialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferLotserialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvTransferLotserialQuery) {
            return $criteria;
        }
        $query = new ChildInvTransferLotserialQuery();
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
     * @param array[$InhdNbr, $IndtLine, $InitItemNbr, $InsdLotSer, $InsdBin, $InsdPlltNbr, $InsdCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvTransferLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvTransferLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildInvTransferLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InhdNbr, IndtLine, InitItemNbr, InsdLotSer, InsdBin, InsdPlltNbr, InsdCrtnNbr, InsdQtyResv, InsdQtyShip, InsdQtyNotPost, InsdUnitCost, InsdLotSerFrom, InsdBinFrom, InsdCases, InsdTag, InsdInspctLvl, InsdLotRef, InsdCrtnQty, InsdDateShipped, InsdToWhseBin, InsdLblPrtd, InsdBatch, InsdCureDate, InsdBinTo, DateUpdtd, TimeUpdtd, dummy FROM inv_trans_lotser WHERE InhdNbr = :p0 AND IndtLine = :p1 AND InitItemNbr = :p2 AND InsdLotSer = :p3 AND InsdBin = :p4 AND InsdPlltNbr = :p5 AND InsdCrtnNbr = :p6';
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
            /** @var ChildInvTransferLotserial $obj */
            $obj = new ChildInvTransferLotserial();
            $obj->hydrate($row);
            InvTransferLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildInvTransferLotserial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDBIN, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INSDLOTSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INSDBIN, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $key[6], Criteria::EQUAL);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (is_array($inhdnbr)) {
            $useMinMax = false;
            if (isset($inhdnbr['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $inhdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdnbr['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $inhdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $inhdnbr, $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByIndtline($indtline = null, $comparison = null)
    {
        if (is_array($indtline)) {
            $useMinMax = false;
            if (isset($indtline['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INDTLINE, $indtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtline['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INDTLINE, $indtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INDTLINE, $indtline, $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InsdLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdlotser('fooValue');   // WHERE InsdLotSer = 'fooValue'
     * $query->filterByInsdlotser('%fooValue%', Criteria::LIKE); // WHERE InsdLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdlotser($insdlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTSER, $insdlotser, $comparison);
    }

    /**
     * Filter the query on the InsdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdbin('fooValue');   // WHERE InsdBin = 'fooValue'
     * $query->filterByInsdbin('%fooValue%', Criteria::LIKE); // WHERE InsdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdbin($insdbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDBIN, $insdbin, $comparison);
    }

    /**
     * Filter the query on the InsdPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdplltnbr(1234); // WHERE InsdPlltNbr = 1234
     * $query->filterByInsdplltnbr(array(12, 34)); // WHERE InsdPlltNbr IN (12, 34)
     * $query->filterByInsdplltnbr(array('min' => 12)); // WHERE InsdPlltNbr > 12
     * </code>
     *
     * @param     mixed $insdplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdplltnbr($insdplltnbr = null, $comparison = null)
    {
        if (is_array($insdplltnbr)) {
            $useMinMax = false;
            if (isset($insdplltnbr['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $insdplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdplltnbr['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $insdplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDPLLTNBR, $insdplltnbr, $comparison);
    }

    /**
     * Filter the query on the InsdCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdcrtnnbr(1234); // WHERE InsdCrtnNbr = 1234
     * $query->filterByInsdcrtnnbr(array(12, 34)); // WHERE InsdCrtnNbr IN (12, 34)
     * $query->filterByInsdcrtnnbr(array('min' => 12)); // WHERE InsdCrtnNbr > 12
     * </code>
     *
     * @param     mixed $insdcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdcrtnnbr($insdcrtnnbr = null, $comparison = null)
    {
        if (is_array($insdcrtnnbr)) {
            $useMinMax = false;
            if (isset($insdcrtnnbr['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $insdcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdcrtnnbr['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $insdcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNNBR, $insdcrtnnbr, $comparison);
    }

    /**
     * Filter the query on the InsdQtyResv column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdqtyresv(1234); // WHERE InsdQtyResv = 1234
     * $query->filterByInsdqtyresv(array(12, 34)); // WHERE InsdQtyResv IN (12, 34)
     * $query->filterByInsdqtyresv(array('min' => 12)); // WHERE InsdQtyResv > 12
     * </code>
     *
     * @param     mixed $insdqtyresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdqtyresv($insdqtyresv = null, $comparison = null)
    {
        if (is_array($insdqtyresv)) {
            $useMinMax = false;
            if (isset($insdqtyresv['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYRESV, $insdqtyresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdqtyresv['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYRESV, $insdqtyresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYRESV, $insdqtyresv, $comparison);
    }

    /**
     * Filter the query on the InsdQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdqtyship(1234); // WHERE InsdQtyShip = 1234
     * $query->filterByInsdqtyship(array(12, 34)); // WHERE InsdQtyShip IN (12, 34)
     * $query->filterByInsdqtyship(array('min' => 12)); // WHERE InsdQtyShip > 12
     * </code>
     *
     * @param     mixed $insdqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdqtyship($insdqtyship = null, $comparison = null)
    {
        if (is_array($insdqtyship)) {
            $useMinMax = false;
            if (isset($insdqtyship['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYSHIP, $insdqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdqtyship['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYSHIP, $insdqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYSHIP, $insdqtyship, $comparison);
    }

    /**
     * Filter the query on the InsdQtyNotPost column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdqtynotpost(1234); // WHERE InsdQtyNotPost = 1234
     * $query->filterByInsdqtynotpost(array(12, 34)); // WHERE InsdQtyNotPost IN (12, 34)
     * $query->filterByInsdqtynotpost(array('min' => 12)); // WHERE InsdQtyNotPost > 12
     * </code>
     *
     * @param     mixed $insdqtynotpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdqtynotpost($insdqtynotpost = null, $comparison = null)
    {
        if (is_array($insdqtynotpost)) {
            $useMinMax = false;
            if (isset($insdqtynotpost['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST, $insdqtynotpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdqtynotpost['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST, $insdqtynotpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDQTYNOTPOST, $insdqtynotpost, $comparison);
    }

    /**
     * Filter the query on the InsdUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdunitcost(1234); // WHERE InsdUnitCost = 1234
     * $query->filterByInsdunitcost(array(12, 34)); // WHERE InsdUnitCost IN (12, 34)
     * $query->filterByInsdunitcost(array('min' => 12)); // WHERE InsdUnitCost > 12
     * </code>
     *
     * @param     mixed $insdunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdunitcost($insdunitcost = null, $comparison = null)
    {
        if (is_array($insdunitcost)) {
            $useMinMax = false;
            if (isset($insdunitcost['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDUNITCOST, $insdunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdunitcost['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDUNITCOST, $insdunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDUNITCOST, $insdunitcost, $comparison);
    }

    /**
     * Filter the query on the InsdLotSerFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdlotserfrom('fooValue');   // WHERE InsdLotSerFrom = 'fooValue'
     * $query->filterByInsdlotserfrom('%fooValue%', Criteria::LIKE); // WHERE InsdLotSerFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdlotserfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdlotserfrom($insdlotserfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdlotserfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTSERFROM, $insdlotserfrom, $comparison);
    }

    /**
     * Filter the query on the InsdBinFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdbinfrom('fooValue');   // WHERE InsdBinFrom = 'fooValue'
     * $query->filterByInsdbinfrom('%fooValue%', Criteria::LIKE); // WHERE InsdBinFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdbinfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdbinfrom($insdbinfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdbinfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDBINFROM, $insdbinfrom, $comparison);
    }

    /**
     * Filter the query on the InsdCases column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdcases(1234); // WHERE InsdCases = 1234
     * $query->filterByInsdcases(array(12, 34)); // WHERE InsdCases IN (12, 34)
     * $query->filterByInsdcases(array('min' => 12)); // WHERE InsdCases > 12
     * </code>
     *
     * @param     mixed $insdcases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdcases($insdcases = null, $comparison = null)
    {
        if (is_array($insdcases)) {
            $useMinMax = false;
            if (isset($insdcases['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCASES, $insdcases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdcases['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCASES, $insdcases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCASES, $insdcases, $comparison);
    }

    /**
     * Filter the query on the InsdTag column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdtag(1234); // WHERE InsdTag = 1234
     * $query->filterByInsdtag(array(12, 34)); // WHERE InsdTag IN (12, 34)
     * $query->filterByInsdtag(array('min' => 12)); // WHERE InsdTag > 12
     * </code>
     *
     * @param     mixed $insdtag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdtag($insdtag = null, $comparison = null)
    {
        if (is_array($insdtag)) {
            $useMinMax = false;
            if (isset($insdtag['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDTAG, $insdtag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdtag['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDTAG, $insdtag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDTAG, $insdtag, $comparison);
    }

    /**
     * Filter the query on the InsdInspctLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdinspctlvl('fooValue');   // WHERE InsdInspctLvl = 'fooValue'
     * $query->filterByInsdinspctlvl('%fooValue%', Criteria::LIKE); // WHERE InsdInspctLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdinspctlvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdinspctlvl($insdinspctlvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdinspctlvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDINSPCTLVL, $insdinspctlvl, $comparison);
    }

    /**
     * Filter the query on the InsdLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdlotref('fooValue');   // WHERE InsdLotRef = 'fooValue'
     * $query->filterByInsdlotref('%fooValue%', Criteria::LIKE); // WHERE InsdLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdlotref($insdlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTREF, $insdlotref, $comparison);
    }

    /**
     * Filter the query on the InsdCrtnQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdcrtnqty(1234); // WHERE InsdCrtnQty = 1234
     * $query->filterByInsdcrtnqty(array(12, 34)); // WHERE InsdCrtnQty IN (12, 34)
     * $query->filterByInsdcrtnqty(array('min' => 12)); // WHERE InsdCrtnQty > 12
     * </code>
     *
     * @param     mixed $insdcrtnqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdcrtnqty($insdcrtnqty = null, $comparison = null)
    {
        if (is_array($insdcrtnqty)) {
            $useMinMax = false;
            if (isset($insdcrtnqty['min'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNQTY, $insdcrtnqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insdcrtnqty['max'])) {
                $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNQTY, $insdcrtnqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCRTNQTY, $insdcrtnqty, $comparison);
    }

    /**
     * Filter the query on the InsdDateShipped column
     *
     * Example usage:
     * <code>
     * $query->filterByInsddateshipped('fooValue');   // WHERE InsdDateShipped = 'fooValue'
     * $query->filterByInsddateshipped('%fooValue%', Criteria::LIKE); // WHERE InsdDateShipped LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insddateshipped The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsddateshipped($insddateshipped = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insddateshipped)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDDATESHIPPED, $insddateshipped, $comparison);
    }

    /**
     * Filter the query on the InsdToWhseBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdtowhsebin('fooValue');   // WHERE InsdToWhseBin = 'fooValue'
     * $query->filterByInsdtowhsebin('%fooValue%', Criteria::LIKE); // WHERE InsdToWhseBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdtowhsebin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdtowhsebin($insdtowhsebin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdtowhsebin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDTOWHSEBIN, $insdtowhsebin, $comparison);
    }

    /**
     * Filter the query on the InsdLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdlblprtd('fooValue');   // WHERE InsdLblPrtd = 'fooValue'
     * $query->filterByInsdlblprtd('%fooValue%', Criteria::LIKE); // WHERE InsdLblPrtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdlblprtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdlblprtd($insdlblprtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLBLPRTD, $insdlblprtd, $comparison);
    }

    /**
     * Filter the query on the InsdBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdbatch('fooValue');   // WHERE InsdBatch = 'fooValue'
     * $query->filterByInsdbatch('%fooValue%', Criteria::LIKE); // WHERE InsdBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdbatch($insdbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDBATCH, $insdbatch, $comparison);
    }

    /**
     * Filter the query on the InsdCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdcuredate('fooValue');   // WHERE InsdCureDate = 'fooValue'
     * $query->filterByInsdcuredate('%fooValue%', Criteria::LIKE); // WHERE InsdCureDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdcuredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdcuredate($insdcuredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDCUREDATE, $insdcuredate, $comparison);
    }

    /**
     * Filter the query on the InsdBinTo column
     *
     * Example usage:
     * <code>
     * $query->filterByInsdbinto('fooValue');   // WHERE InsdBinTo = 'fooValue'
     * $query->filterByInsdbinto('%fooValue%', Criteria::LIKE); // WHERE InsdBinTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insdbinto The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInsdbinto($insdbinto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insdbinto)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_INSDBINTO, $insdbinto, $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferLotserialTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferOrder($invTransferOrder, $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $invTransferOrder->getInhdnbr(), $comparison);
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $invTransferOrder->toKeyValue('PrimaryKey', 'Inhdnbr'), $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INHDNBR, $invTransferDetail->getInhdnbr(), $comparison)
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INDTLINE, $invTransferDetail->getIndtline(), $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            return $this
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferLotserialTableMap::COL_INSDLOTSER, $invSerialMaster->getSermsernbr(), $comparison);
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
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
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
     * @param   ChildInvTransferLotserial $invTransferLotserial Object to remove from the list of results
     *
     * @return $this|ChildInvTransferLotserialQuery The current query, for fluid interface
     */
    public function prune($invTransferLotserial = null)
    {
        if ($invTransferLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INHDNBR), $invTransferLotserial->getInhdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INDTLINE), $invTransferLotserial->getIndtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INITITEMNBR), $invTransferLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INSDLOTSER), $invTransferLotserial->getInsdlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INSDBIN), $invTransferLotserial->getInsdbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INSDPLLTNBR), $invTransferLotserial->getInsdplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(InvTransferLotserialTableMap::COL_INSDCRTNNBR), $invTransferLotserial->getInsdcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trans_lotser table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvTransferLotserialTableMap::clearInstancePool();
            InvTransferLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvTransferLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvTransferLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvTransferLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvTransferLotserialQuery
