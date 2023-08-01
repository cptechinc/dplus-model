<?php

namespace Base;

use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \Exception;
use \PDO;
use Map\InvTransferDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trans_det' table.
 *
 *
 *
 * @method     ChildInvTransferDetailQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildInvTransferDetailQuery orderByIndtline($order = Criteria::ASC) Order by the IndtLine column
 * @method     ChildInvTransferDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvTransferDetailQuery orderByIndtqtyrqst($order = Criteria::ASC) Order by the IndtQtyRqst column
 * @method     ChildInvTransferDetailQuery orderByIndtqtyship($order = Criteria::ASC) Order by the IndtQtyShip column
 * @method     ChildInvTransferDetailQuery orderByIndtrqstdate($order = Criteria::ASC) Order by the IndtRqstDate column
 * @method     ChildInvTransferDetailQuery orderByIndtshipdate($order = Criteria::ASC) Order by the IndtShipDate column
 * @method     ChildInvTransferDetailQuery orderByIndtpickflag($order = Criteria::ASC) Order by the IndtPickFlag column
 * @method     ChildInvTransferDetailQuery orderByIndtbordflag($order = Criteria::ASC) Order by the IndtBordFlag column
 * @method     ChildInvTransferDetailQuery orderByIndtqtyprev($order = Criteria::ASC) Order by the IndtQtyPrev column
 * @method     ChildInvTransferDetailQuery orderByIndtqtyrcvd($order = Criteria::ASC) Order by the IndtQtyRcvd column
 * @method     ChildInvTransferDetailQuery orderByIndttobercvd($order = Criteria::ASC) Order by the IndtToBeRcvd column
 * @method     ChildInvTransferDetailQuery orderByIndtrcptdate($order = Criteria::ASC) Order by the IndtRcptDate column
 * @method     ChildInvTransferDetailQuery orderByIndtsonbr($order = Criteria::ASC) Order by the IndtSoNbr column
 * @method     ChildInvTransferDetailQuery orderByIndtkitflag($order = Criteria::ASC) Order by the IndtKitFlag column
 * @method     ChildInvTransferDetailQuery orderByIndtuseitemnbr($order = Criteria::ASC) Order by the IndtUseItemNbr column
 * @method     ChildInvTransferDetailQuery orderByIndtcustitemnbr($order = Criteria::ASC) Order by the IndtCustItemNbr column
 * @method     ChildInvTransferDetailQuery orderByIndtcntrqty($order = Criteria::ASC) Order by the IndtCntrQty column
 * @method     ChildInvTransferDetailQuery orderByIndtcases($order = Criteria::ASC) Order by the IndtCases column
 * @method     ChildInvTransferDetailQuery orderByIndtorigrqstdate($order = Criteria::ASC) Order by the IndtOrigRqstDate column
 * @method     ChildInvTransferDetailQuery orderByIndtordras($order = Criteria::ASC) Order by the IndtOrdrAs column
 * @method     ChildInvTransferDetailQuery orderByIndtfreshfrozen($order = Criteria::ASC) Order by the IndtFreshFrozen column
 * @method     ChildInvTransferDetailQuery orderByIndtprimbin($order = Criteria::ASC) Order by the IndtPrimBin column
 * @method     ChildInvTransferDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvTransferDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvTransferDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvTransferDetailQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildInvTransferDetailQuery groupByIndtline() Group by the IndtLine column
 * @method     ChildInvTransferDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvTransferDetailQuery groupByIndtqtyrqst() Group by the IndtQtyRqst column
 * @method     ChildInvTransferDetailQuery groupByIndtqtyship() Group by the IndtQtyShip column
 * @method     ChildInvTransferDetailQuery groupByIndtrqstdate() Group by the IndtRqstDate column
 * @method     ChildInvTransferDetailQuery groupByIndtshipdate() Group by the IndtShipDate column
 * @method     ChildInvTransferDetailQuery groupByIndtpickflag() Group by the IndtPickFlag column
 * @method     ChildInvTransferDetailQuery groupByIndtbordflag() Group by the IndtBordFlag column
 * @method     ChildInvTransferDetailQuery groupByIndtqtyprev() Group by the IndtQtyPrev column
 * @method     ChildInvTransferDetailQuery groupByIndtqtyrcvd() Group by the IndtQtyRcvd column
 * @method     ChildInvTransferDetailQuery groupByIndttobercvd() Group by the IndtToBeRcvd column
 * @method     ChildInvTransferDetailQuery groupByIndtrcptdate() Group by the IndtRcptDate column
 * @method     ChildInvTransferDetailQuery groupByIndtsonbr() Group by the IndtSoNbr column
 * @method     ChildInvTransferDetailQuery groupByIndtkitflag() Group by the IndtKitFlag column
 * @method     ChildInvTransferDetailQuery groupByIndtuseitemnbr() Group by the IndtUseItemNbr column
 * @method     ChildInvTransferDetailQuery groupByIndtcustitemnbr() Group by the IndtCustItemNbr column
 * @method     ChildInvTransferDetailQuery groupByIndtcntrqty() Group by the IndtCntrQty column
 * @method     ChildInvTransferDetailQuery groupByIndtcases() Group by the IndtCases column
 * @method     ChildInvTransferDetailQuery groupByIndtorigrqstdate() Group by the IndtOrigRqstDate column
 * @method     ChildInvTransferDetailQuery groupByIndtordras() Group by the IndtOrdrAs column
 * @method     ChildInvTransferDetailQuery groupByIndtfreshfrozen() Group by the IndtFreshFrozen column
 * @method     ChildInvTransferDetailQuery groupByIndtprimbin() Group by the IndtPrimBin column
 * @method     ChildInvTransferDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvTransferDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvTransferDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvTransferDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvTransferDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvTransferDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvTransferDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvTransferDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvTransferDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvTransferDetailQuery leftJoinInvTransferOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferDetailQuery rightJoinInvTransferOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildInvTransferDetailQuery innerJoinInvTransferOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferDetailQuery joinWithInvTransferOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinWithInvTransferOrder() Adds a LEFT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferDetailQuery rightJoinWithInvTransferOrder() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildInvTransferDetailQuery innerJoinWithInvTransferOrder() Adds a INNER JOIN clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvTransferDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvTransferDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinInvTransferLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferDetailQuery rightJoinInvTransferLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferDetailQuery innerJoinInvTransferLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferDetailQuery joinWithInvTransferLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinWithInvTransferLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferDetailQuery rightJoinWithInvTransferLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvTransferDetailQuery innerJoinWithInvTransferLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinInvTransferPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferDetailQuery rightJoinInvTransferPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferDetailQuery innerJoinInvTransferPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvTransferDetailQuery joinWithInvTransferPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvTransferDetailQuery leftJoinWithInvTransferPickedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferDetailQuery rightJoinWithInvTransferPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvTransferDetailQuery innerJoinWithInvTransferPickedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     \InvTransferOrderQuery|\ItemMasterItemQuery|\InvTransferLotserialQuery|\InvTransferPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvTransferDetail findOne(ConnectionInterface $con = null) Return the first ChildInvTransferDetail matching the query
 * @method     ChildInvTransferDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvTransferDetail matching the query, or a new ChildInvTransferDetail object populated from the query conditions when no match is found
 *
 * @method     ChildInvTransferDetail findOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferDetail filtered by the InhdNbr column
 * @method     ChildInvTransferDetail findOneByIndtline(int $IndtLine) Return the first ChildInvTransferDetail filtered by the IndtLine column
 * @method     ChildInvTransferDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferDetail filtered by the InitItemNbr column
 * @method     ChildInvTransferDetail findOneByIndtqtyrqst(string $IndtQtyRqst) Return the first ChildInvTransferDetail filtered by the IndtQtyRqst column
 * @method     ChildInvTransferDetail findOneByIndtqtyship(string $IndtQtyShip) Return the first ChildInvTransferDetail filtered by the IndtQtyShip column
 * @method     ChildInvTransferDetail findOneByIndtrqstdate(string $IndtRqstDate) Return the first ChildInvTransferDetail filtered by the IndtRqstDate column
 * @method     ChildInvTransferDetail findOneByIndtshipdate(string $IndtShipDate) Return the first ChildInvTransferDetail filtered by the IndtShipDate column
 * @method     ChildInvTransferDetail findOneByIndtpickflag(string $IndtPickFlag) Return the first ChildInvTransferDetail filtered by the IndtPickFlag column
 * @method     ChildInvTransferDetail findOneByIndtbordflag(string $IndtBordFlag) Return the first ChildInvTransferDetail filtered by the IndtBordFlag column
 * @method     ChildInvTransferDetail findOneByIndtqtyprev(string $IndtQtyPrev) Return the first ChildInvTransferDetail filtered by the IndtQtyPrev column
 * @method     ChildInvTransferDetail findOneByIndtqtyrcvd(string $IndtQtyRcvd) Return the first ChildInvTransferDetail filtered by the IndtQtyRcvd column
 * @method     ChildInvTransferDetail findOneByIndttobercvd(string $IndtToBeRcvd) Return the first ChildInvTransferDetail filtered by the IndtToBeRcvd column
 * @method     ChildInvTransferDetail findOneByIndtrcptdate(string $IndtRcptDate) Return the first ChildInvTransferDetail filtered by the IndtRcptDate column
 * @method     ChildInvTransferDetail findOneByIndtsonbr(int $IndtSoNbr) Return the first ChildInvTransferDetail filtered by the IndtSoNbr column
 * @method     ChildInvTransferDetail findOneByIndtkitflag(string $IndtKitFlag) Return the first ChildInvTransferDetail filtered by the IndtKitFlag column
 * @method     ChildInvTransferDetail findOneByIndtuseitemnbr(string $IndtUseItemNbr) Return the first ChildInvTransferDetail filtered by the IndtUseItemNbr column
 * @method     ChildInvTransferDetail findOneByIndtcustitemnbr(string $IndtCustItemNbr) Return the first ChildInvTransferDetail filtered by the IndtCustItemNbr column
 * @method     ChildInvTransferDetail findOneByIndtcntrqty(string $IndtCntrQty) Return the first ChildInvTransferDetail filtered by the IndtCntrQty column
 * @method     ChildInvTransferDetail findOneByIndtcases(string $IndtCases) Return the first ChildInvTransferDetail filtered by the IndtCases column
 * @method     ChildInvTransferDetail findOneByIndtorigrqstdate(string $IndtOrigRqstDate) Return the first ChildInvTransferDetail filtered by the IndtOrigRqstDate column
 * @method     ChildInvTransferDetail findOneByIndtordras(string $IndtOrdrAs) Return the first ChildInvTransferDetail filtered by the IndtOrdrAs column
 * @method     ChildInvTransferDetail findOneByIndtfreshfrozen(string $IndtFreshFrozen) Return the first ChildInvTransferDetail filtered by the IndtFreshFrozen column
 * @method     ChildInvTransferDetail findOneByIndtprimbin(string $IndtPrimBin) Return the first ChildInvTransferDetail filtered by the IndtPrimBin column
 * @method     ChildInvTransferDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferDetail filtered by the DateUpdtd column
 * @method     ChildInvTransferDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferDetail filtered by the TimeUpdtd column
 * @method     ChildInvTransferDetail findOneByDummy(string $dummy) Return the first ChildInvTransferDetail filtered by the dummy column *

 * @method     ChildInvTransferDetail requirePk($key, ConnectionInterface $con = null) Return the ChildInvTransferDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOne(ConnectionInterface $con = null) Return the first ChildInvTransferDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferDetail requireOneByInhdnbr(int $InhdNbr) Return the first ChildInvTransferDetail filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtline(int $IndtLine) Return the first ChildInvTransferDetail filtered by the IndtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvTransferDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtqtyrqst(string $IndtQtyRqst) Return the first ChildInvTransferDetail filtered by the IndtQtyRqst column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtqtyship(string $IndtQtyShip) Return the first ChildInvTransferDetail filtered by the IndtQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtrqstdate(string $IndtRqstDate) Return the first ChildInvTransferDetail filtered by the IndtRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtshipdate(string $IndtShipDate) Return the first ChildInvTransferDetail filtered by the IndtShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtpickflag(string $IndtPickFlag) Return the first ChildInvTransferDetail filtered by the IndtPickFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtbordflag(string $IndtBordFlag) Return the first ChildInvTransferDetail filtered by the IndtBordFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtqtyprev(string $IndtQtyPrev) Return the first ChildInvTransferDetail filtered by the IndtQtyPrev column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtqtyrcvd(string $IndtQtyRcvd) Return the first ChildInvTransferDetail filtered by the IndtQtyRcvd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndttobercvd(string $IndtToBeRcvd) Return the first ChildInvTransferDetail filtered by the IndtToBeRcvd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtrcptdate(string $IndtRcptDate) Return the first ChildInvTransferDetail filtered by the IndtRcptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtsonbr(int $IndtSoNbr) Return the first ChildInvTransferDetail filtered by the IndtSoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtkitflag(string $IndtKitFlag) Return the first ChildInvTransferDetail filtered by the IndtKitFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtuseitemnbr(string $IndtUseItemNbr) Return the first ChildInvTransferDetail filtered by the IndtUseItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtcustitemnbr(string $IndtCustItemNbr) Return the first ChildInvTransferDetail filtered by the IndtCustItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtcntrqty(string $IndtCntrQty) Return the first ChildInvTransferDetail filtered by the IndtCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtcases(string $IndtCases) Return the first ChildInvTransferDetail filtered by the IndtCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtorigrqstdate(string $IndtOrigRqstDate) Return the first ChildInvTransferDetail filtered by the IndtOrigRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtordras(string $IndtOrdrAs) Return the first ChildInvTransferDetail filtered by the IndtOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtfreshfrozen(string $IndtFreshFrozen) Return the first ChildInvTransferDetail filtered by the IndtFreshFrozen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByIndtprimbin(string $IndtPrimBin) Return the first ChildInvTransferDetail filtered by the IndtPrimBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvTransferDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvTransferDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvTransferDetail requireOneByDummy(string $dummy) Return the first ChildInvTransferDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvTransferDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvTransferDetail objects based on current ModelCriteria
 * @method     ChildInvTransferDetail[]|ObjectCollection findByInhdnbr(int $InhdNbr) Return ChildInvTransferDetail objects filtered by the InhdNbr column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtline(int $IndtLine) Return ChildInvTransferDetail objects filtered by the IndtLine column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvTransferDetail objects filtered by the InitItemNbr column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtqtyrqst(string $IndtQtyRqst) Return ChildInvTransferDetail objects filtered by the IndtQtyRqst column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtqtyship(string $IndtQtyShip) Return ChildInvTransferDetail objects filtered by the IndtQtyShip column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtrqstdate(string $IndtRqstDate) Return ChildInvTransferDetail objects filtered by the IndtRqstDate column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtshipdate(string $IndtShipDate) Return ChildInvTransferDetail objects filtered by the IndtShipDate column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtpickflag(string $IndtPickFlag) Return ChildInvTransferDetail objects filtered by the IndtPickFlag column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtbordflag(string $IndtBordFlag) Return ChildInvTransferDetail objects filtered by the IndtBordFlag column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtqtyprev(string $IndtQtyPrev) Return ChildInvTransferDetail objects filtered by the IndtQtyPrev column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtqtyrcvd(string $IndtQtyRcvd) Return ChildInvTransferDetail objects filtered by the IndtQtyRcvd column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndttobercvd(string $IndtToBeRcvd) Return ChildInvTransferDetail objects filtered by the IndtToBeRcvd column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtrcptdate(string $IndtRcptDate) Return ChildInvTransferDetail objects filtered by the IndtRcptDate column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtsonbr(int $IndtSoNbr) Return ChildInvTransferDetail objects filtered by the IndtSoNbr column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtkitflag(string $IndtKitFlag) Return ChildInvTransferDetail objects filtered by the IndtKitFlag column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtuseitemnbr(string $IndtUseItemNbr) Return ChildInvTransferDetail objects filtered by the IndtUseItemNbr column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtcustitemnbr(string $IndtCustItemNbr) Return ChildInvTransferDetail objects filtered by the IndtCustItemNbr column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtcntrqty(string $IndtCntrQty) Return ChildInvTransferDetail objects filtered by the IndtCntrQty column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtcases(string $IndtCases) Return ChildInvTransferDetail objects filtered by the IndtCases column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtorigrqstdate(string $IndtOrigRqstDate) Return ChildInvTransferDetail objects filtered by the IndtOrigRqstDate column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtordras(string $IndtOrdrAs) Return ChildInvTransferDetail objects filtered by the IndtOrdrAs column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtfreshfrozen(string $IndtFreshFrozen) Return ChildInvTransferDetail objects filtered by the IndtFreshFrozen column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByIndtprimbin(string $IndtPrimBin) Return ChildInvTransferDetail objects filtered by the IndtPrimBin column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvTransferDetail objects filtered by the DateUpdtd column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvTransferDetail objects filtered by the TimeUpdtd column
 * @method     ChildInvTransferDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildInvTransferDetail objects filtered by the dummy column
 * @method     ChildInvTransferDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvTransferDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvTransferDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvTransferDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvTransferDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvTransferDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvTransferDetailQuery) {
            return $criteria;
        }
        $query = new ChildInvTransferDetailQuery();
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
     * @param array[$InhdNbr, $IndtLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvTransferDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvTransferDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvTransferDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InhdNbr, IndtLine, InitItemNbr, IndtQtyRqst, IndtQtyShip, IndtRqstDate, IndtShipDate, IndtPickFlag, IndtBordFlag, IndtQtyPrev, IndtQtyRcvd, IndtToBeRcvd, IndtRcptDate, IndtSoNbr, IndtKitFlag, IndtUseItemNbr, IndtCustItemNbr, IndtCntrQty, IndtCases, IndtOrigRqstDate, IndtOrdrAs, IndtFreshFrozen, IndtPrimBin, DateUpdtd, TimeUpdtd, dummy FROM inv_trans_det WHERE InhdNbr = :p0 AND IndtLine = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvTransferDetail $obj */
            $obj = new ChildInvTransferDetail();
            $obj->hydrate($row);
            InvTransferDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvTransferDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvTransferDetailTableMap::COL_INHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvTransferDetailTableMap::COL_INDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @param     mixed $inhdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (is_array($inhdnbr)) {
            $useMinMax = false;
            if (isset($inhdnbr['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $inhdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inhdnbr['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $inhdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $inhdnbr, $comparison);
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
     * @param     mixed $indtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtline($indtline = null, $comparison = null)
    {
        if (is_array($indtline)) {
            $useMinMax = false;
            if (isset($indtline['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $indtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtline['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $indtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $indtline, $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the IndtQtyRqst column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtqtyrqst(1234); // WHERE IndtQtyRqst = 1234
     * $query->filterByIndtqtyrqst(array(12, 34)); // WHERE IndtQtyRqst IN (12, 34)
     * $query->filterByIndtqtyrqst(array('min' => 12)); // WHERE IndtQtyRqst > 12
     * </code>
     *
     * @param     mixed $indtqtyrqst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtqtyrqst($indtqtyrqst = null, $comparison = null)
    {
        if (is_array($indtqtyrqst)) {
            $useMinMax = false;
            if (isset($indtqtyrqst['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRQST, $indtqtyrqst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtqtyrqst['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRQST, $indtqtyrqst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRQST, $indtqtyrqst, $comparison);
    }

    /**
     * Filter the query on the IndtQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtqtyship(1234); // WHERE IndtQtyShip = 1234
     * $query->filterByIndtqtyship(array(12, 34)); // WHERE IndtQtyShip IN (12, 34)
     * $query->filterByIndtqtyship(array('min' => 12)); // WHERE IndtQtyShip > 12
     * </code>
     *
     * @param     mixed $indtqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtqtyship($indtqtyship = null, $comparison = null)
    {
        if (is_array($indtqtyship)) {
            $useMinMax = false;
            if (isset($indtqtyship['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYSHIP, $indtqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtqtyship['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYSHIP, $indtqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYSHIP, $indtqtyship, $comparison);
    }

    /**
     * Filter the query on the IndtRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtrqstdate('fooValue');   // WHERE IndtRqstDate = 'fooValue'
     * $query->filterByIndtrqstdate('%fooValue%', Criteria::LIKE); // WHERE IndtRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtrqstdate($indtrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTRQSTDATE, $indtrqstdate, $comparison);
    }

    /**
     * Filter the query on the IndtShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtshipdate('fooValue');   // WHERE IndtShipDate = 'fooValue'
     * $query->filterByIndtshipdate('%fooValue%', Criteria::LIKE); // WHERE IndtShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtshipdate($indtshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTSHIPDATE, $indtshipdate, $comparison);
    }

    /**
     * Filter the query on the IndtPickFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtpickflag('fooValue');   // WHERE IndtPickFlag = 'fooValue'
     * $query->filterByIndtpickflag('%fooValue%', Criteria::LIKE); // WHERE IndtPickFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtpickflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtpickflag($indtpickflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtpickflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTPICKFLAG, $indtpickflag, $comparison);
    }

    /**
     * Filter the query on the IndtBordFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtbordflag('fooValue');   // WHERE IndtBordFlag = 'fooValue'
     * $query->filterByIndtbordflag('%fooValue%', Criteria::LIKE); // WHERE IndtBordFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtbordflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtbordflag($indtbordflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtbordflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTBORDFLAG, $indtbordflag, $comparison);
    }

    /**
     * Filter the query on the IndtQtyPrev column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtqtyprev(1234); // WHERE IndtQtyPrev = 1234
     * $query->filterByIndtqtyprev(array(12, 34)); // WHERE IndtQtyPrev IN (12, 34)
     * $query->filterByIndtqtyprev(array('min' => 12)); // WHERE IndtQtyPrev > 12
     * </code>
     *
     * @param     mixed $indtqtyprev The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtqtyprev($indtqtyprev = null, $comparison = null)
    {
        if (is_array($indtqtyprev)) {
            $useMinMax = false;
            if (isset($indtqtyprev['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYPREV, $indtqtyprev['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtqtyprev['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYPREV, $indtqtyprev['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYPREV, $indtqtyprev, $comparison);
    }

    /**
     * Filter the query on the IndtQtyRcvd column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtqtyrcvd(1234); // WHERE IndtQtyRcvd = 1234
     * $query->filterByIndtqtyrcvd(array(12, 34)); // WHERE IndtQtyRcvd IN (12, 34)
     * $query->filterByIndtqtyrcvd(array('min' => 12)); // WHERE IndtQtyRcvd > 12
     * </code>
     *
     * @param     mixed $indtqtyrcvd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtqtyrcvd($indtqtyrcvd = null, $comparison = null)
    {
        if (is_array($indtqtyrcvd)) {
            $useMinMax = false;
            if (isset($indtqtyrcvd['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRCVD, $indtqtyrcvd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtqtyrcvd['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRCVD, $indtqtyrcvd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTQTYRCVD, $indtqtyrcvd, $comparison);
    }

    /**
     * Filter the query on the IndtToBeRcvd column
     *
     * Example usage:
     * <code>
     * $query->filterByIndttobercvd(1234); // WHERE IndtToBeRcvd = 1234
     * $query->filterByIndttobercvd(array(12, 34)); // WHERE IndtToBeRcvd IN (12, 34)
     * $query->filterByIndttobercvd(array('min' => 12)); // WHERE IndtToBeRcvd > 12
     * </code>
     *
     * @param     mixed $indttobercvd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndttobercvd($indttobercvd = null, $comparison = null)
    {
        if (is_array($indttobercvd)) {
            $useMinMax = false;
            if (isset($indttobercvd['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTTOBERCVD, $indttobercvd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indttobercvd['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTTOBERCVD, $indttobercvd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTTOBERCVD, $indttobercvd, $comparison);
    }

    /**
     * Filter the query on the IndtRcptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtrcptdate('fooValue');   // WHERE IndtRcptDate = 'fooValue'
     * $query->filterByIndtrcptdate('%fooValue%', Criteria::LIKE); // WHERE IndtRcptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtrcptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtrcptdate($indtrcptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtrcptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTRCPTDATE, $indtrcptdate, $comparison);
    }

    /**
     * Filter the query on the IndtSoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtsonbr(1234); // WHERE IndtSoNbr = 1234
     * $query->filterByIndtsonbr(array(12, 34)); // WHERE IndtSoNbr IN (12, 34)
     * $query->filterByIndtsonbr(array('min' => 12)); // WHERE IndtSoNbr > 12
     * </code>
     *
     * @param     mixed $indtsonbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtsonbr($indtsonbr = null, $comparison = null)
    {
        if (is_array($indtsonbr)) {
            $useMinMax = false;
            if (isset($indtsonbr['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTSONBR, $indtsonbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtsonbr['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTSONBR, $indtsonbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTSONBR, $indtsonbr, $comparison);
    }

    /**
     * Filter the query on the IndtKitFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtkitflag('fooValue');   // WHERE IndtKitFlag = 'fooValue'
     * $query->filterByIndtkitflag('%fooValue%', Criteria::LIKE); // WHERE IndtKitFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtkitflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtkitflag($indtkitflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtkitflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTKITFLAG, $indtkitflag, $comparison);
    }

    /**
     * Filter the query on the IndtUseItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtuseitemnbr('fooValue');   // WHERE IndtUseItemNbr = 'fooValue'
     * $query->filterByIndtuseitemnbr('%fooValue%', Criteria::LIKE); // WHERE IndtUseItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtuseitemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtuseitemnbr($indtuseitemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtuseitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTUSEITEMNBR, $indtuseitemnbr, $comparison);
    }

    /**
     * Filter the query on the IndtCustItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtcustitemnbr('fooValue');   // WHERE IndtCustItemNbr = 'fooValue'
     * $query->filterByIndtcustitemnbr('%fooValue%', Criteria::LIKE); // WHERE IndtCustItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtcustitemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtcustitemnbr($indtcustitemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtcustitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR, $indtcustitemnbr, $comparison);
    }

    /**
     * Filter the query on the IndtCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtcntrqty(1234); // WHERE IndtCntrQty = 1234
     * $query->filterByIndtcntrqty(array(12, 34)); // WHERE IndtCntrQty IN (12, 34)
     * $query->filterByIndtcntrqty(array('min' => 12)); // WHERE IndtCntrQty > 12
     * </code>
     *
     * @param     mixed $indtcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtcntrqty($indtcntrqty = null, $comparison = null)
    {
        if (is_array($indtcntrqty)) {
            $useMinMax = false;
            if (isset($indtcntrqty['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCNTRQTY, $indtcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtcntrqty['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCNTRQTY, $indtcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCNTRQTY, $indtcntrqty, $comparison);
    }

    /**
     * Filter the query on the IndtCases column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtcases(1234); // WHERE IndtCases = 1234
     * $query->filterByIndtcases(array(12, 34)); // WHERE IndtCases IN (12, 34)
     * $query->filterByIndtcases(array('min' => 12)); // WHERE IndtCases > 12
     * </code>
     *
     * @param     mixed $indtcases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtcases($indtcases = null, $comparison = null)
    {
        if (is_array($indtcases)) {
            $useMinMax = false;
            if (isset($indtcases['min'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCASES, $indtcases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtcases['max'])) {
                $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCASES, $indtcases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTCASES, $indtcases, $comparison);
    }

    /**
     * Filter the query on the IndtOrigRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtorigrqstdate('fooValue');   // WHERE IndtOrigRqstDate = 'fooValue'
     * $query->filterByIndtorigrqstdate('%fooValue%', Criteria::LIKE); // WHERE IndtOrigRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtorigrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtorigrqstdate($indtorigrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtorigrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE, $indtorigrqstdate, $comparison);
    }

    /**
     * Filter the query on the IndtOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtordras('fooValue');   // WHERE IndtOrdrAs = 'fooValue'
     * $query->filterByIndtordras('%fooValue%', Criteria::LIKE); // WHERE IndtOrdrAs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtordras The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtordras($indtordras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtordras)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTORDRAS, $indtordras, $comparison);
    }

    /**
     * Filter the query on the IndtFreshFrozen column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtfreshfrozen('fooValue');   // WHERE IndtFreshFrozen = 'fooValue'
     * $query->filterByIndtfreshfrozen('%fooValue%', Criteria::LIKE); // WHERE IndtFreshFrozen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtfreshfrozen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtfreshfrozen($indtfreshfrozen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtfreshfrozen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTFRESHFROZEN, $indtfreshfrozen, $comparison);
    }

    /**
     * Filter the query on the IndtPrimBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtprimbin('fooValue');   // WHERE IndtPrimBin = 'fooValue'
     * $query->filterByIndtprimbin('%fooValue%', Criteria::LIKE); // WHERE IndtPrimBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indtprimbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByIndtprimbin($indtprimbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indtprimbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_INDTPRIMBIN, $indtprimbin, $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvTransferDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \InvTransferOrder object
     *
     * @param \InvTransferOrder|ObjectCollection $invTransferOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByInvTransferOrder($invTransferOrder, $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $invTransferOrder->getInhdnbr(), $comparison);
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $invTransferOrder->toKeyValue('PrimaryKey', 'Inhdnbr'), $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
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
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
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
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $invTransferLotserial->getInhdnbr(), $comparison)
                ->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $invTransferLotserial->getIndtline(), $comparison);
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function joinInvTransferLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferLotserial');

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
            $this->addJoinObject($join, 'InvTransferLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferLotserial', '\InvTransferLotserialQuery');
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            return $this
                ->addUsingAlias(InvTransferDetailTableMap::COL_INHDNBR, $invTransferPickedLotserial->getInhdnbr(), $comparison)
                ->addUsingAlias(InvTransferDetailTableMap::COL_INDTLINE, $invTransferPickedLotserial->getIndtline(), $comparison);
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPickedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPickedLotserial', '\InvTransferPickedLotserialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvTransferDetail $invTransferDetail Object to remove from the list of results
     *
     * @return $this|ChildInvTransferDetailQuery The current query, for fluid interface
     */
    public function prune($invTransferDetail = null)
    {
        if ($invTransferDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvTransferDetailTableMap::COL_INHDNBR), $invTransferDetail->getInhdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvTransferDetailTableMap::COL_INDTLINE), $invTransferDetail->getIndtline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trans_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvTransferDetailTableMap::clearInstancePool();
            InvTransferDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvTransferDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvTransferDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvTransferDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvTransferDetailQuery
