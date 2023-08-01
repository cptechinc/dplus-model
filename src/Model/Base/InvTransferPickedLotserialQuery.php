<?php

namespace Base;

use \InvTransferPickedLotserial as ChildInvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \Exception;
use \PDO;
use Map\InvTransferPickedLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trans_pulled' table.
 *
 *
 *
 * @method     ChildInvTransferPickedLotserialQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildInvTransferPickedLotserialQuery orderByIndtline($order = Criteria::ASC) Order by the IndtLine column
 * @method     ChildInvTransferPickedLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdlotser($order = Criteria::ASC) Order by the InpdLotSer column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdbin($order = Criteria::ASC) Order by the InpdBin column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdplltnbr($order = Criteria::ASC) Order by the InpdPlltNbr column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdcrtnnbr($order = Criteria::ASC) Order by the InpdCrtnNbr column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdqtyresv($order = Criteria::ASC) Order by the InpdQtyResv column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdqtyship($order = Criteria::ASC) Order by the InpdQtyShip column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdqtynotpost($order = Criteria::ASC) Order by the InpdQtyNotPost column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdunitcost($order = Criteria::ASC) Order by the InpdUnitCost column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdlotserfrom($order = Criteria::ASC) Order by the InpdLotSerFrom column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdbinfrom($order = Criteria::ASC) Order by the InpdBinFrom column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdcases($order = Criteria::ASC) Order by the InpdCases column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdtag($order = Criteria::ASC) Order by the InpdTag column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdinspctlvl($order = Criteria::ASC) Order by the InpdInspctLvl column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdlotref($order = Criteria::ASC) Order by the InpdLotRef column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdcrtnqty($order = Criteria::ASC) Order by the InpdCrtnQty column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdlblprtd($order = Criteria::ASC) Order by the InpdLblPrtd column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdbatch($order = Criteria::ASC) Order by the InpdBatch column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdcuredate($order = Criteria::ASC) Order by the InpdCureDate column
 * @method     ChildInvTransferPickedLotserialQuery orderByInpdbinto($order = Criteria::ASC) Order by the InpdBinTo column
 * @method     ChildInvTransferPickedLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvTransferPickedLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvTransferPickedLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvTransferPickedLotserialQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildInvTransferPickedLotserialQuery groupByIndtline() Group by the IndtLine column
 * @method     ChildInvTransferPickedLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdlotser() Group by the InpdLotSer column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdbin() Group by the InpdBin column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdplltnbr() Group by the InpdPlltNbr column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdcrtnnbr() Group by the InpdCrtnNbr column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdqtyresv() Group by the InpdQtyResv column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdqtyship() Group by the InpdQtyShip column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdqtynotpost() Group by the InpdQtyNotPost column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdunitcost() Group by the InpdUnitCost column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdlotserfrom() Group by the InpdLotSerFrom column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdbinfrom() Group by the InpdBinFrom column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdcases() Group by the InpdCases column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdtag() Group by the InpdTag column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdinspctlvl() Group by the InpdInspctLvl column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdlotref() Group by the InpdLotRef column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdcrtnqty() Group by the InpdCrtnQty column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdlblprtd() Group by the InpdLblPrtd column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdbatch() Group by the InpdBatch column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdcuredate() Group by the InpdCureDate column
 * @method     ChildInvTransferPickedLotserialQuery groupByInpdbinto() Group by the InpdBinTo column
 * @method     ChildInvTransferPickedLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvTransferPickedLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvTransferPickedLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvTransferPickedLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvTransferPickedLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPickedLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinInvTransferOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinInvTransferOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinInvTransferOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPickedLotserialQuery joinWithInvTransferOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWithInvTransferOrder() Adds a LEFT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWithInvTransferOrder() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWithInvTransferOrder() Adds a INNER JOIN clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinInvTransferDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinInvTransferDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinInvTransferDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPickedLotserialQuery joinWithInvTransferDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWithInvTransferDetail() Adds a LEFT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWithInvTransferDetail() Adds a RIGHT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWithInvTransferDetail() Adds a INNER JOIN clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPickedLotserialQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferPickedLotserialQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvTransferPickedLotserialQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPickedLotserialQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvTransferPickedLotserialQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     \ItemMasterItemQuery|\InvTransferOrderQuery|\InvTransferDetailQuery|\InvLotMasterQuery|\InvSerialMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferPickedLotserial findOne(ConnectionInterface $con = null) Return the first ChildInvTransferPickedLotserial matching the query
 * @method     ChildInvTransferPickedLotserial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvTransferPickedLotserial matching the query, or a new ChildInvTransferPickedLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferPickedLotserial findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferPickedLotserial filtered by the InhdNbr column
 * @method     ChildInvTransferPickedLotserial findOneByIndtline(int $IndtLine) Return the first ChildInvTransferPickedLotserial filtered by the IndtLine column
 * @method     ChildInvTransferPickedLotserial findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferPickedLotserial filtered by the InitItemNbr column
 * @method     ChildInvTransferPickedLotserial findOneByInpdlotser(string $InpdLotSer) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotSer column
 * @method     ChildInvTransferPickedLotserial findOneByInpdbin(string $InpdBin) Return the first ChildInvTransferPickedLotserial filtered by the InpdBin column
 * @method     ChildInvTransferPickedLotserial findOneByInpdplltnbr(int $InpdPlltNbr) Return the first ChildInvTransferPickedLotserial filtered by the InpdPlltNbr column
 * @method     ChildInvTransferPickedLotserial findOneByInpdcrtnnbr(int $InpdCrtnNbr) Return the first ChildInvTransferPickedLotserial filtered by the InpdCrtnNbr column
 * @method     ChildInvTransferPickedLotserial findOneByInpdqtyresv(string $InpdQtyResv) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyResv column
 * @method     ChildInvTransferPickedLotserial findOneByInpdqtyship(string $InpdQtyShip) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyShip column
 * @method     ChildInvTransferPickedLotserial findOneByInpdqtynotpost(string $InpdQtyNotPost) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyNotPost column
 * @method     ChildInvTransferPickedLotserial findOneByInpdunitcost(string $InpdUnitCost) Return the first ChildInvTransferPickedLotserial filtered by the InpdUnitCost column
 * @method     ChildInvTransferPickedLotserial findOneByInpdlotserfrom(string $InpdLotSerFrom) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotSerFrom column
 * @method     ChildInvTransferPickedLotserial findOneByInpdbinfrom(string $InpdBinFrom) Return the first ChildInvTransferPickedLotserial filtered by the InpdBinFrom column
 * @method     ChildInvTransferPickedLotserial findOneByInpdcases(int $InpdCases) Return the first ChildInvTransferPickedLotserial filtered by the InpdCases column
 * @method     ChildInvTransferPickedLotserial findOneByInpdtag(int $InpdTag) Return the first ChildInvTransferPickedLotserial filtered by the InpdTag column
 * @method     ChildInvTransferPickedLotserial findOneByInpdinspctlvl(string $InpdInspctLvl) Return the first ChildInvTransferPickedLotserial filtered by the InpdInspctLvl column
 * @method     ChildInvTransferPickedLotserial findOneByInpdlotref(string $InpdLotRef) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotRef column
 * @method     ChildInvTransferPickedLotserial findOneByInpdcrtnqty(string $InpdCrtnQty) Return the first ChildInvTransferPickedLotserial filtered by the InpdCrtnQty column
 * @method     ChildInvTransferPickedLotserial findOneByInpdlblprtd(string $InpdLblPrtd) Return the first ChildInvTransferPickedLotserial filtered by the InpdLblPrtd column
 * @method     ChildInvTransferPickedLotserial findOneByInpdbatch(string $InpdBatch) Return the first ChildInvTransferPickedLotserial filtered by the InpdBatch column
 * @method     ChildInvTransferPickedLotserial findOneByInpdcuredate(string $InpdCureDate) Return the first ChildInvTransferPickedLotserial filtered by the InpdCureDate column
 * @method     ChildInvTransferPickedLotserial findOneByInpdbinto(string $InpdBinTo) Return the first ChildInvTransferPickedLotserial filtered by the InpdBinTo column
 * @method     ChildInvTransferPickedLotserial findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferPickedLotserial filtered by the DateUpdtd column
 * @method     ChildInvTransferPickedLotserial findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferPickedLotserial filtered by the TimeUpdtd column
 * @method     ChildInvTransferPickedLotserial findOneByDummy(string $dummy) Return the first ChildInvTransferPickedLotserial filtered by the dummy column *

 * @method     ChildInvTransferPickedLotserial requirePk($key, ConnectionInterface $con = null) Return the ChildInvTransferPickedLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOne(ConnectionInterface $con = null) Return the first ChildInvTransferPickedLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferPickedLotserial requireOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferPickedLotserial filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByIndtline(int $IndtLine) Return the first ChildInvTransferPickedLotserial filtered by the IndtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferPickedLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdlotser(string $InpdLotSer) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdbin(string $InpdBin) Return the first ChildInvTransferPickedLotserial filtered by the InpdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdplltnbr(int $InpdPlltNbr) Return the first ChildInvTransferPickedLotserial filtered by the InpdPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdcrtnnbr(int $InpdCrtnNbr) Return the first ChildInvTransferPickedLotserial filtered by the InpdCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdqtyresv(string $InpdQtyResv) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdqtyship(string $InpdQtyShip) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdqtynotpost(string $InpdQtyNotPost) Return the first ChildInvTransferPickedLotserial filtered by the InpdQtyNotPost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdunitcost(string $InpdUnitCost) Return the first ChildInvTransferPickedLotserial filtered by the InpdUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdlotserfrom(string $InpdLotSerFrom) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotSerFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdbinfrom(string $InpdBinFrom) Return the first ChildInvTransferPickedLotserial filtered by the InpdBinFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdcases(int $InpdCases) Return the first ChildInvTransferPickedLotserial filtered by the InpdCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdtag(int $InpdTag) Return the first ChildInvTransferPickedLotserial filtered by the InpdTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdinspctlvl(string $InpdInspctLvl) Return the first ChildInvTransferPickedLotserial filtered by the InpdInspctLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdlotref(string $InpdLotRef) Return the first ChildInvTransferPickedLotserial filtered by the InpdLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdcrtnqty(string $InpdCrtnQty) Return the first ChildInvTransferPickedLotserial filtered by the InpdCrtnQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdlblprtd(string $InpdLblPrtd) Return the first ChildInvTransferPickedLotserial filtered by the InpdLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdbatch(string $InpdBatch) Return the first ChildInvTransferPickedLotserial filtered by the InpdBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdcuredate(string $InpdCureDate) Return the first ChildInvTransferPickedLotserial filtered by the InpdCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByInpdbinto(string $InpdBinTo) Return the first ChildInvTransferPickedLotserial filtered by the InpdBinTo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferPickedLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferPickedLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferPickedLotserial requireOneByDummy(string $dummy) Return the first ChildInvTransferPickedLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvTransferPickedLotserial objects based on current ModelCriteria
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInhdnbr(int $InhdNbr) Return ChildInvTransferPickedLotserial objects filtered by the InhdNbr column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByIndtline(int $IndtLine) Return ChildInvTransferPickedLotserial objects filtered by the IndtLine column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvTransferPickedLotserial objects filtered by the InitItemNbr column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdlotser(string $InpdLotSer) Return ChildInvTransferPickedLotserial objects filtered by the InpdLotSer column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdbin(string $InpdBin) Return ChildInvTransferPickedLotserial objects filtered by the InpdBin column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdplltnbr(int $InpdPlltNbr) Return ChildInvTransferPickedLotserial objects filtered by the InpdPlltNbr column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdcrtnnbr(int $InpdCrtnNbr) Return ChildInvTransferPickedLotserial objects filtered by the InpdCrtnNbr column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdqtyresv(string $InpdQtyResv) Return ChildInvTransferPickedLotserial objects filtered by the InpdQtyResv column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdqtyship(string $InpdQtyShip) Return ChildInvTransferPickedLotserial objects filtered by the InpdQtyShip column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdqtynotpost(string $InpdQtyNotPost) Return ChildInvTransferPickedLotserial objects filtered by the InpdQtyNotPost column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdunitcost(string $InpdUnitCost) Return ChildInvTransferPickedLotserial objects filtered by the InpdUnitCost column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdlotserfrom(string $InpdLotSerFrom) Return ChildInvTransferPickedLotserial objects filtered by the InpdLotSerFrom column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdbinfrom(string $InpdBinFrom) Return ChildInvTransferPickedLotserial objects filtered by the InpdBinFrom column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdcases(int $InpdCases) Return ChildInvTransferPickedLotserial objects filtered by the InpdCases column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdtag(int $InpdTag) Return ChildInvTransferPickedLotserial objects filtered by the InpdTag column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdinspctlvl(string $InpdInspctLvl) Return ChildInvTransferPickedLotserial objects filtered by the InpdInspctLvl column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdlotref(string $InpdLotRef) Return ChildInvTransferPickedLotserial objects filtered by the InpdLotRef column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdcrtnqty(string $InpdCrtnQty) Return ChildInvTransferPickedLotserial objects filtered by the InpdCrtnQty column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdlblprtd(string $InpdLblPrtd) Return ChildInvTransferPickedLotserial objects filtered by the InpdLblPrtd column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdbatch(string $InpdBatch) Return ChildInvTransferPickedLotserial objects filtered by the InpdBatch column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdcuredate(string $InpdCureDate) Return ChildInvTransferPickedLotserial objects filtered by the InpdCureDate column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByInpdbinto(string $InpdBinTo) Return ChildInvTransferPickedLotserial objects filtered by the InpdBinTo column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvTransferPickedLotserial objects filtered by the DateUpdtd column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvTransferPickedLotserial objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferPickedLotserial[]|ObjectCollection findByDummy(string $dummy) Return ChildInvTransferPickedLotserial objects filtered by the dummy column
 * @method     ChildInvTransferPickedLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvTransferPickedLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferPickedLotserialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferPickedLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferPickedLotserialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferPickedLotserialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvTransferPickedLotserialQuery) {
            return $criteria;
        }
        $query = new ChildInvTransferPickedLotserialQuery();
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
     * @param array[$InhdNbr, $IndtLine, $InitItemNbr, $InpdLotSer, $InpdBin, $InpdPlltNbr, $InpdCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvTransferPickedLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvTransferPickedLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildInvTransferPickedLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InhdNbr, IndtLine, InitItemNbr, InpdLotSer, InpdBin, InpdPlltNbr, InpdCrtnNbr, InpdQtyResv, InpdQtyShip, InpdQtyNotPost, InpdUnitCost, InpdLotSerFrom, InpdBinFrom, InpdCases, InpdTag, InpdInspctLvl, InpdLotRef, InpdCrtnQty, InpdLblPrtd, InpdBatch, InpdCureDate, InpdBinTo, DateUpdtd, TimeUpdtd, dummy FROM inv_trans_pulled WHERE InhdNbr = :p0 AND IndtLine = :p1 AND InitItemNbr = :p2 AND InpdLotSer = :p3 AND InpdBin = :p4 AND InpdPlltNbr = :p5 AND InpdCrtnNbr = :p6';
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
            /** @var ChildInvTransferPickedLotserial $obj */
            $obj = new ChildInvTransferPickedLotserial();
            $obj->hydrate($row);
            InvTransferPickedLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildInvTransferPickedLotserial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDBIN, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDBIN, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $key[6], Criteria::EQUAL);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (is_array($inhdnbr)) {
            $useMinMax = false;
            if (isset($inhdnbr['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $inhdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdnbr['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $inhdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $inhdnbr, $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByIndtline($indtline = null, $comparison = null)
    {
        if (is_array($indtline)) {
            $useMinMax = false;
            if (isset($indtline['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INDTLINE, $indtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtline['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INDTLINE, $indtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INDTLINE, $indtline, $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InpdLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdlotser('fooValue');   // WHERE InpdLotSer = 'fooValue'
     * $query->filterByInpdlotser('%fooValue%', Criteria::LIKE); // WHERE InpdLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdlotser($inpdlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $inpdlotser, $comparison);
    }

    /**
     * Filter the query on the InpdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdbin('fooValue');   // WHERE InpdBin = 'fooValue'
     * $query->filterByInpdbin('%fooValue%', Criteria::LIKE); // WHERE InpdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdbin($inpdbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDBIN, $inpdbin, $comparison);
    }

    /**
     * Filter the query on the InpdPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdplltnbr(1234); // WHERE InpdPlltNbr = 1234
     * $query->filterByInpdplltnbr(array(12, 34)); // WHERE InpdPlltNbr IN (12, 34)
     * $query->filterByInpdplltnbr(array('min' => 12)); // WHERE InpdPlltNbr > 12
     * </code>
     *
     * @param     mixed $inpdplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdplltnbr($inpdplltnbr = null, $comparison = null)
    {
        if (is_array($inpdplltnbr)) {
            $useMinMax = false;
            if (isset($inpdplltnbr['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $inpdplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdplltnbr['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $inpdplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR, $inpdplltnbr, $comparison);
    }

    /**
     * Filter the query on the InpdCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdcrtnnbr(1234); // WHERE InpdCrtnNbr = 1234
     * $query->filterByInpdcrtnnbr(array(12, 34)); // WHERE InpdCrtnNbr IN (12, 34)
     * $query->filterByInpdcrtnnbr(array('min' => 12)); // WHERE InpdCrtnNbr > 12
     * </code>
     *
     * @param     mixed $inpdcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdcrtnnbr($inpdcrtnnbr = null, $comparison = null)
    {
        if (is_array($inpdcrtnnbr)) {
            $useMinMax = false;
            if (isset($inpdcrtnnbr['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $inpdcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdcrtnnbr['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $inpdcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR, $inpdcrtnnbr, $comparison);
    }

    /**
     * Filter the query on the InpdQtyResv column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdqtyresv(1234); // WHERE InpdQtyResv = 1234
     * $query->filterByInpdqtyresv(array(12, 34)); // WHERE InpdQtyResv IN (12, 34)
     * $query->filterByInpdqtyresv(array('min' => 12)); // WHERE InpdQtyResv > 12
     * </code>
     *
     * @param     mixed $inpdqtyresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdqtyresv($inpdqtyresv = null, $comparison = null)
    {
        if (is_array($inpdqtyresv)) {
            $useMinMax = false;
            if (isset($inpdqtyresv['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV, $inpdqtyresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdqtyresv['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV, $inpdqtyresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYRESV, $inpdqtyresv, $comparison);
    }

    /**
     * Filter the query on the InpdQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdqtyship(1234); // WHERE InpdQtyShip = 1234
     * $query->filterByInpdqtyship(array(12, 34)); // WHERE InpdQtyShip IN (12, 34)
     * $query->filterByInpdqtyship(array('min' => 12)); // WHERE InpdQtyShip > 12
     * </code>
     *
     * @param     mixed $inpdqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdqtyship($inpdqtyship = null, $comparison = null)
    {
        if (is_array($inpdqtyship)) {
            $useMinMax = false;
            if (isset($inpdqtyship['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP, $inpdqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdqtyship['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP, $inpdqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYSHIP, $inpdqtyship, $comparison);
    }

    /**
     * Filter the query on the InpdQtyNotPost column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdqtynotpost(1234); // WHERE InpdQtyNotPost = 1234
     * $query->filterByInpdqtynotpost(array(12, 34)); // WHERE InpdQtyNotPost IN (12, 34)
     * $query->filterByInpdqtynotpost(array('min' => 12)); // WHERE InpdQtyNotPost > 12
     * </code>
     *
     * @param     mixed $inpdqtynotpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdqtynotpost($inpdqtynotpost = null, $comparison = null)
    {
        if (is_array($inpdqtynotpost)) {
            $useMinMax = false;
            if (isset($inpdqtynotpost['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST, $inpdqtynotpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdqtynotpost['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST, $inpdqtynotpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDQTYNOTPOST, $inpdqtynotpost, $comparison);
    }

    /**
     * Filter the query on the InpdUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdunitcost(1234); // WHERE InpdUnitCost = 1234
     * $query->filterByInpdunitcost(array(12, 34)); // WHERE InpdUnitCost IN (12, 34)
     * $query->filterByInpdunitcost(array('min' => 12)); // WHERE InpdUnitCost > 12
     * </code>
     *
     * @param     mixed $inpdunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdunitcost($inpdunitcost = null, $comparison = null)
    {
        if (is_array($inpdunitcost)) {
            $useMinMax = false;
            if (isset($inpdunitcost['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST, $inpdunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdunitcost['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST, $inpdunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDUNITCOST, $inpdunitcost, $comparison);
    }

    /**
     * Filter the query on the InpdLotSerFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdlotserfrom('fooValue');   // WHERE InpdLotSerFrom = 'fooValue'
     * $query->filterByInpdlotserfrom('%fooValue%', Criteria::LIKE); // WHERE InpdLotSerFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdlotserfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdlotserfrom($inpdlotserfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdlotserfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTSERFROM, $inpdlotserfrom, $comparison);
    }

    /**
     * Filter the query on the InpdBinFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdbinfrom('fooValue');   // WHERE InpdBinFrom = 'fooValue'
     * $query->filterByInpdbinfrom('%fooValue%', Criteria::LIKE); // WHERE InpdBinFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdbinfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdbinfrom($inpdbinfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdbinfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDBINFROM, $inpdbinfrom, $comparison);
    }

    /**
     * Filter the query on the InpdCases column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdcases(1234); // WHERE InpdCases = 1234
     * $query->filterByInpdcases(array(12, 34)); // WHERE InpdCases IN (12, 34)
     * $query->filterByInpdcases(array('min' => 12)); // WHERE InpdCases > 12
     * </code>
     *
     * @param     mixed $inpdcases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdcases($inpdcases = null, $comparison = null)
    {
        if (is_array($inpdcases)) {
            $useMinMax = false;
            if (isset($inpdcases['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCASES, $inpdcases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdcases['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCASES, $inpdcases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCASES, $inpdcases, $comparison);
    }

    /**
     * Filter the query on the InpdTag column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdtag(1234); // WHERE InpdTag = 1234
     * $query->filterByInpdtag(array(12, 34)); // WHERE InpdTag IN (12, 34)
     * $query->filterByInpdtag(array('min' => 12)); // WHERE InpdTag > 12
     * </code>
     *
     * @param     mixed $inpdtag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdtag($inpdtag = null, $comparison = null)
    {
        if (is_array($inpdtag)) {
            $useMinMax = false;
            if (isset($inpdtag['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDTAG, $inpdtag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdtag['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDTAG, $inpdtag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDTAG, $inpdtag, $comparison);
    }

    /**
     * Filter the query on the InpdInspctLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdinspctlvl('fooValue');   // WHERE InpdInspctLvl = 'fooValue'
     * $query->filterByInpdinspctlvl('%fooValue%', Criteria::LIKE); // WHERE InpdInspctLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdinspctlvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdinspctlvl($inpdinspctlvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdinspctlvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDINSPCTLVL, $inpdinspctlvl, $comparison);
    }

    /**
     * Filter the query on the InpdLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdlotref('fooValue');   // WHERE InpdLotRef = 'fooValue'
     * $query->filterByInpdlotref('%fooValue%', Criteria::LIKE); // WHERE InpdLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdlotref($inpdlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTREF, $inpdlotref, $comparison);
    }

    /**
     * Filter the query on the InpdCrtnQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdcrtnqty(1234); // WHERE InpdCrtnQty = 1234
     * $query->filterByInpdcrtnqty(array(12, 34)); // WHERE InpdCrtnQty IN (12, 34)
     * $query->filterByInpdcrtnqty(array('min' => 12)); // WHERE InpdCrtnQty > 12
     * </code>
     *
     * @param     mixed $inpdcrtnqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdcrtnqty($inpdcrtnqty = null, $comparison = null)
    {
        if (is_array($inpdcrtnqty)) {
            $useMinMax = false;
            if (isset($inpdcrtnqty['min'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY, $inpdcrtnqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inpdcrtnqty['max'])) {
                $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY, $inpdcrtnqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCRTNQTY, $inpdcrtnqty, $comparison);
    }

    /**
     * Filter the query on the InpdLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdlblprtd('fooValue');   // WHERE InpdLblPrtd = 'fooValue'
     * $query->filterByInpdlblprtd('%fooValue%', Criteria::LIKE); // WHERE InpdLblPrtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdlblprtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdlblprtd($inpdlblprtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLBLPRTD, $inpdlblprtd, $comparison);
    }

    /**
     * Filter the query on the InpdBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdbatch('fooValue');   // WHERE InpdBatch = 'fooValue'
     * $query->filterByInpdbatch('%fooValue%', Criteria::LIKE); // WHERE InpdBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdbatch($inpdbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDBATCH, $inpdbatch, $comparison);
    }

    /**
     * Filter the query on the InpdCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdcuredate('fooValue');   // WHERE InpdCureDate = 'fooValue'
     * $query->filterByInpdcuredate('%fooValue%', Criteria::LIKE); // WHERE InpdCureDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdcuredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdcuredate($inpdcuredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDCUREDATE, $inpdcuredate, $comparison);
    }

    /**
     * Filter the query on the InpdBinTo column
     *
     * Example usage:
     * <code>
     * $query->filterByInpdbinto('fooValue');   // WHERE InpdBinTo = 'fooValue'
     * $query->filterByInpdbinto('%fooValue%', Criteria::LIKE); // WHERE InpdBinTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inpdbinto The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInpdbinto($inpdbinto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inpdbinto)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDBINTO, $inpdbinto, $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferPickedLotserialTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferOrder($invTransferOrder, $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $invTransferOrder->getInhdnbr(), $comparison);
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $invTransferOrder->toKeyValue('PrimaryKey', 'Inhdnbr'), $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INHDNBR, $invTransferDetail->getInhdnbr(), $comparison)
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INDTLINE, $invTransferDetail->getIndtline(), $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
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
     * @return ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            return $this
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvTransferPickedLotserialTableMap::COL_INPDLOTSER, $invSerialMaster->getSermsernbr(), $comparison);
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
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
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
     * @param   ChildInvTransferPickedLotserial $invTransferPickedLotserial Object to remove from the list of results
     *
     * @return $this|ChildInvTransferPickedLotserialQuery The current query, for fluid interface
     */
    public function prune($invTransferPickedLotserial = null)
    {
        if ($invTransferPickedLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INHDNBR), $invTransferPickedLotserial->getInhdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INDTLINE), $invTransferPickedLotserial->getIndtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INITITEMNBR), $invTransferPickedLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INPDLOTSER), $invTransferPickedLotserial->getInpdlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INPDBIN), $invTransferPickedLotserial->getInpdbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INPDPLLTNBR), $invTransferPickedLotserial->getInpdplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(InvTransferPickedLotserialTableMap::COL_INPDCRTNNBR), $invTransferPickedLotserial->getInpdcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trans_pulled table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvTransferPickedLotserialTableMap::clearInstancePool();
            InvTransferPickedLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferPickedLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvTransferPickedLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvTransferPickedLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvTransferPickedLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvTransferPickedLotserialQuery
