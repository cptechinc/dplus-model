<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \Exception;
use \PDO;
use Map\InvLotMasterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_lot_mast` table.
 *
 * @method     ChildInvLotMasterQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvLotMasterQuery orderByLotmlotnbr($order = Criteria::ASC) Order by the LotmLotNbr column
 * @method     ChildInvLotMasterQuery orderByLotmlotref($order = Criteria::ASC) Order by the LotmLotRef column
 * @method     ChildInvLotMasterQuery orderByLotmfrstactdate($order = Criteria::ASC) Order by the LotmFrstActDate column
 * @method     ChildInvLotMasterQuery orderByLotmimagyn($order = Criteria::ASC) Order by the LotmImagYn column
 * @method     ChildInvLotMasterQuery orderByLotmunitwght($order = Criteria::ASC) Order by the LotmUnitWght column
 * @method     ChildInvLotMasterQuery orderByLotmrevision($order = Criteria::ASC) Order by the LotmRevision column
 * @method     ChildInvLotMasterQuery orderByLotmctry($order = Criteria::ASC) Order by the LotmCtry column
 * @method     ChildInvLotMasterQuery orderByLotmcofc($order = Criteria::ASC) Order by the LotmCOfC column
 * @method     ChildInvLotMasterQuery orderByLotmcreatedate($order = Criteria::ASC) Order by the LotmCreateDate column
 * @method     ChildInvLotMasterQuery orderByLotmcreatetime($order = Criteria::ASC) Order by the LotmCreateTime column
 * @method     ChildInvLotMasterQuery orderByLotmvendid($order = Criteria::ASC) Order by the LotmVendId column
 * @method     ChildInvLotMasterQuery orderByLotmexpiredate($order = Criteria::ASC) Order by the LotmExpireDate column
 * @method     ChildInvLotMasterQuery orderByLotmunitcost($order = Criteria::ASC) Order by the LotmUnitCost column
 * @method     ChildInvLotMasterQuery orderByLotmcntrqty($order = Criteria::ASC) Order by the LotmCntrQty column
 * @method     ChildInvLotMasterQuery orderByLotmsrccd($order = Criteria::ASC) Order by the LotmSrcCd column
 * @method     ChildInvLotMasterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvLotMasterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvLotMasterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvLotMasterQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvLotMasterQuery groupByLotmlotnbr() Group by the LotmLotNbr column
 * @method     ChildInvLotMasterQuery groupByLotmlotref() Group by the LotmLotRef column
 * @method     ChildInvLotMasterQuery groupByLotmfrstactdate() Group by the LotmFrstActDate column
 * @method     ChildInvLotMasterQuery groupByLotmimagyn() Group by the LotmImagYn column
 * @method     ChildInvLotMasterQuery groupByLotmunitwght() Group by the LotmUnitWght column
 * @method     ChildInvLotMasterQuery groupByLotmrevision() Group by the LotmRevision column
 * @method     ChildInvLotMasterQuery groupByLotmctry() Group by the LotmCtry column
 * @method     ChildInvLotMasterQuery groupByLotmcofc() Group by the LotmCOfC column
 * @method     ChildInvLotMasterQuery groupByLotmcreatedate() Group by the LotmCreateDate column
 * @method     ChildInvLotMasterQuery groupByLotmcreatetime() Group by the LotmCreateTime column
 * @method     ChildInvLotMasterQuery groupByLotmvendid() Group by the LotmVendId column
 * @method     ChildInvLotMasterQuery groupByLotmexpiredate() Group by the LotmExpireDate column
 * @method     ChildInvLotMasterQuery groupByLotmunitcost() Group by the LotmUnitCost column
 * @method     ChildInvLotMasterQuery groupByLotmcntrqty() Group by the LotmCntrQty column
 * @method     ChildInvLotMasterQuery groupByLotmsrccd() Group by the LotmSrcCd column
 * @method     ChildInvLotMasterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvLotMasterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvLotMasterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvLotMasterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvLotMasterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvLotMasterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvLotMasterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvLotMasterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvLotMasterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvLotMasterQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvWhseLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery rightJoinInvWhseLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery innerJoinInvWhseLot($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvWhseLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvWhseLot() Adds a LEFT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvWhseLot() Adds a RIGHT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvWhseLot() Adds a INNER JOIN clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvLotTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotTag relation
 * @method     ChildInvLotMasterQuery rightJoinInvLotTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotTag relation
 * @method     ChildInvLotMasterQuery innerJoinInvLotTag($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotTag relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvLotTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotTag relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvLotTag() Adds a LEFT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvLotTag() Adds a RIGHT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvLotTag() Adds a INNER JOIN clause and with to the query using the InvLotTag relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvTransferLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinInvTransferLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinInvTransferLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvTransferLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvTransferLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvTransferLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvTransferLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvTransferPreAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvTransferPreAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvTransferPreAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvTransferPreAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvTransferPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinInvTransferPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinInvTransferPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvTransferPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvTransferPickedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvTransferPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvTransferPickedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinSoAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinSoAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinSoAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithSoAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithSoAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithSoAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithSoAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinSoPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinSoPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinSoPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithSoPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithSoPickedLotserial() Adds a LEFT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithSoPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithSoPickedLotserial() Adds a INNER JOIN clause and with to the query using the SoPickedLotserial relation
 *
 * @method     \ItemMasterItemQuery|\InvWhseLotQuery|\InvLotTagQuery|\InvTransferLotserialQuery|\InvTransferPreAllocatedLotserialQuery|\InvTransferPickedLotserialQuery|\SoAllocatedLotserialQuery|\SoPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvLotMaster|null findOne(?ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query
 * @method     ChildInvLotMaster findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query, or a new ChildInvLotMaster object populated from the query conditions when no match is found
 *
 * @method     ChildInvLotMaster|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotMaster filtered by the InitItemNbr column
 * @method     ChildInvLotMaster|null findOneByLotmlotnbr(string $LotmLotNbr) Return the first ChildInvLotMaster filtered by the LotmLotNbr column
 * @method     ChildInvLotMaster|null findOneByLotmlotref(string $LotmLotRef) Return the first ChildInvLotMaster filtered by the LotmLotRef column
 * @method     ChildInvLotMaster|null findOneByLotmfrstactdate(string $LotmFrstActDate) Return the first ChildInvLotMaster filtered by the LotmFrstActDate column
 * @method     ChildInvLotMaster|null findOneByLotmimagyn(string $LotmImagYn) Return the first ChildInvLotMaster filtered by the LotmImagYn column
 * @method     ChildInvLotMaster|null findOneByLotmunitwght(string $LotmUnitWght) Return the first ChildInvLotMaster filtered by the LotmUnitWght column
 * @method     ChildInvLotMaster|null findOneByLotmrevision(string $LotmRevision) Return the first ChildInvLotMaster filtered by the LotmRevision column
 * @method     ChildInvLotMaster|null findOneByLotmctry(string $LotmCtry) Return the first ChildInvLotMaster filtered by the LotmCtry column
 * @method     ChildInvLotMaster|null findOneByLotmcofc(string $LotmCOfC) Return the first ChildInvLotMaster filtered by the LotmCOfC column
 * @method     ChildInvLotMaster|null findOneByLotmcreatedate(string $LotmCreateDate) Return the first ChildInvLotMaster filtered by the LotmCreateDate column
 * @method     ChildInvLotMaster|null findOneByLotmcreatetime(string $LotmCreateTime) Return the first ChildInvLotMaster filtered by the LotmCreateTime column
 * @method     ChildInvLotMaster|null findOneByLotmvendid(string $LotmVendId) Return the first ChildInvLotMaster filtered by the LotmVendId column
 * @method     ChildInvLotMaster|null findOneByLotmexpiredate(string $LotmExpireDate) Return the first ChildInvLotMaster filtered by the LotmExpireDate column
 * @method     ChildInvLotMaster|null findOneByLotmunitcost(string $LotmUnitCost) Return the first ChildInvLotMaster filtered by the LotmUnitCost column
 * @method     ChildInvLotMaster|null findOneByLotmcntrqty(string $LotmCntrQty) Return the first ChildInvLotMaster filtered by the LotmCntrQty column
 * @method     ChildInvLotMaster|null findOneByLotmsrccd(string $LotmSrcCd) Return the first ChildInvLotMaster filtered by the LotmSrcCd column
 * @method     ChildInvLotMaster|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotMaster filtered by the DateUpdtd column
 * @method     ChildInvLotMaster|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotMaster filtered by the TimeUpdtd column
 * @method     ChildInvLotMaster|null findOneByDummy(string $dummy) Return the first ChildInvLotMaster filtered by the dummy column
 *
 * @method     ChildInvLotMaster requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvLotMaster by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOne(?ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotMaster requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotMaster filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmlotnbr(string $LotmLotNbr) Return the first ChildInvLotMaster filtered by the LotmLotNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmlotref(string $LotmLotRef) Return the first ChildInvLotMaster filtered by the LotmLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmfrstactdate(string $LotmFrstActDate) Return the first ChildInvLotMaster filtered by the LotmFrstActDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmimagyn(string $LotmImagYn) Return the first ChildInvLotMaster filtered by the LotmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmunitwght(string $LotmUnitWght) Return the first ChildInvLotMaster filtered by the LotmUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmrevision(string $LotmRevision) Return the first ChildInvLotMaster filtered by the LotmRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmctry(string $LotmCtry) Return the first ChildInvLotMaster filtered by the LotmCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcofc(string $LotmCOfC) Return the first ChildInvLotMaster filtered by the LotmCOfC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcreatedate(string $LotmCreateDate) Return the first ChildInvLotMaster filtered by the LotmCreateDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcreatetime(string $LotmCreateTime) Return the first ChildInvLotMaster filtered by the LotmCreateTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmvendid(string $LotmVendId) Return the first ChildInvLotMaster filtered by the LotmVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmexpiredate(string $LotmExpireDate) Return the first ChildInvLotMaster filtered by the LotmExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmunitcost(string $LotmUnitCost) Return the first ChildInvLotMaster filtered by the LotmUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcntrqty(string $LotmCntrQty) Return the first ChildInvLotMaster filtered by the LotmCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmsrccd(string $LotmSrcCd) Return the first ChildInvLotMaster filtered by the LotmSrcCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotMaster filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotMaster filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByDummy(string $dummy) Return the first ChildInvLotMaster filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotMaster[]|Collection find(?ConnectionInterface $con = null) Return ChildInvLotMaster objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> find(?ConnectionInterface $con = null) Return ChildInvLotMaster objects based on current ModelCriteria
 *
 * @method     ChildInvLotMaster[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvLotMaster objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvLotMaster objects filtered by the InitItemNbr column
 * @method     ChildInvLotMaster[]|Collection findByLotmlotnbr(string|array<string> $LotmLotNbr) Return ChildInvLotMaster objects filtered by the LotmLotNbr column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmlotnbr(string|array<string> $LotmLotNbr) Return ChildInvLotMaster objects filtered by the LotmLotNbr column
 * @method     ChildInvLotMaster[]|Collection findByLotmlotref(string|array<string> $LotmLotRef) Return ChildInvLotMaster objects filtered by the LotmLotRef column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmlotref(string|array<string> $LotmLotRef) Return ChildInvLotMaster objects filtered by the LotmLotRef column
 * @method     ChildInvLotMaster[]|Collection findByLotmfrstactdate(string|array<string> $LotmFrstActDate) Return ChildInvLotMaster objects filtered by the LotmFrstActDate column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmfrstactdate(string|array<string> $LotmFrstActDate) Return ChildInvLotMaster objects filtered by the LotmFrstActDate column
 * @method     ChildInvLotMaster[]|Collection findByLotmimagyn(string|array<string> $LotmImagYn) Return ChildInvLotMaster objects filtered by the LotmImagYn column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmimagyn(string|array<string> $LotmImagYn) Return ChildInvLotMaster objects filtered by the LotmImagYn column
 * @method     ChildInvLotMaster[]|Collection findByLotmunitwght(string|array<string> $LotmUnitWght) Return ChildInvLotMaster objects filtered by the LotmUnitWght column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmunitwght(string|array<string> $LotmUnitWght) Return ChildInvLotMaster objects filtered by the LotmUnitWght column
 * @method     ChildInvLotMaster[]|Collection findByLotmrevision(string|array<string> $LotmRevision) Return ChildInvLotMaster objects filtered by the LotmRevision column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmrevision(string|array<string> $LotmRevision) Return ChildInvLotMaster objects filtered by the LotmRevision column
 * @method     ChildInvLotMaster[]|Collection findByLotmctry(string|array<string> $LotmCtry) Return ChildInvLotMaster objects filtered by the LotmCtry column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmctry(string|array<string> $LotmCtry) Return ChildInvLotMaster objects filtered by the LotmCtry column
 * @method     ChildInvLotMaster[]|Collection findByLotmcofc(string|array<string> $LotmCOfC) Return ChildInvLotMaster objects filtered by the LotmCOfC column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmcofc(string|array<string> $LotmCOfC) Return ChildInvLotMaster objects filtered by the LotmCOfC column
 * @method     ChildInvLotMaster[]|Collection findByLotmcreatedate(string|array<string> $LotmCreateDate) Return ChildInvLotMaster objects filtered by the LotmCreateDate column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmcreatedate(string|array<string> $LotmCreateDate) Return ChildInvLotMaster objects filtered by the LotmCreateDate column
 * @method     ChildInvLotMaster[]|Collection findByLotmcreatetime(string|array<string> $LotmCreateTime) Return ChildInvLotMaster objects filtered by the LotmCreateTime column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmcreatetime(string|array<string> $LotmCreateTime) Return ChildInvLotMaster objects filtered by the LotmCreateTime column
 * @method     ChildInvLotMaster[]|Collection findByLotmvendid(string|array<string> $LotmVendId) Return ChildInvLotMaster objects filtered by the LotmVendId column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmvendid(string|array<string> $LotmVendId) Return ChildInvLotMaster objects filtered by the LotmVendId column
 * @method     ChildInvLotMaster[]|Collection findByLotmexpiredate(string|array<string> $LotmExpireDate) Return ChildInvLotMaster objects filtered by the LotmExpireDate column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmexpiredate(string|array<string> $LotmExpireDate) Return ChildInvLotMaster objects filtered by the LotmExpireDate column
 * @method     ChildInvLotMaster[]|Collection findByLotmunitcost(string|array<string> $LotmUnitCost) Return ChildInvLotMaster objects filtered by the LotmUnitCost column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmunitcost(string|array<string> $LotmUnitCost) Return ChildInvLotMaster objects filtered by the LotmUnitCost column
 * @method     ChildInvLotMaster[]|Collection findByLotmcntrqty(string|array<string> $LotmCntrQty) Return ChildInvLotMaster objects filtered by the LotmCntrQty column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmcntrqty(string|array<string> $LotmCntrQty) Return ChildInvLotMaster objects filtered by the LotmCntrQty column
 * @method     ChildInvLotMaster[]|Collection findByLotmsrccd(string|array<string> $LotmSrcCd) Return ChildInvLotMaster objects filtered by the LotmSrcCd column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByLotmsrccd(string|array<string> $LotmSrcCd) Return ChildInvLotMaster objects filtered by the LotmSrcCd column
 * @method     ChildInvLotMaster[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvLotMaster objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvLotMaster objects filtered by the DateUpdtd column
 * @method     ChildInvLotMaster[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvLotMaster objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvLotMaster objects filtered by the TimeUpdtd column
 * @method     ChildInvLotMaster[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvLotMaster objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvLotMaster> findByDummy(string|array<string> $dummy) Return ChildInvLotMaster objects filtered by the dummy column
 *
 * @method     ChildInvLotMaster[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvLotMaster> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvLotMasterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvLotMasterQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvLotMaster', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvLotMasterQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvLotMasterQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvLotMasterQuery) {
            return $criteria;
        }
        $query = new ChildInvLotMasterQuery();
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
     * @param array[$InitItemNbr, $LotmLotNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvLotMaster|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvLotMasterTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvLotMaster A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, LotmLotNbr, LotmLotRef, LotmFrstActDate, LotmImagYn, LotmUnitWght, LotmRevision, LotmCtry, LotmCOfC, LotmCreateDate, LotmCreateTime, LotmVendId, LotmExpireDate, LotmUnitCost, LotmCntrQty, LotmSrcCd, DateUpdtd, TimeUpdtd, dummy FROM inv_lot_mast WHERE InitItemNbr = :p0 AND LotmLotNbr = :p1';
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
            /** @var ChildInvLotMaster $obj */
            $obj = new ChildInvLotMaster();
            $obj->hydrate($row);
            InvLotMasterTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvLotMaster|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $key[1], Criteria::EQUAL);

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
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvLotMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvLotMasterTableMap::COL_LOTMLOTNBR, $key[1], Criteria::EQUAL);
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
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmLotNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmlotnbr('fooValue');   // WHERE LotmLotNbr = 'fooValue'
     * $query->filterByLotmlotnbr('%fooValue%', Criteria::LIKE); // WHERE LotmLotNbr LIKE '%fooValue%'
     * $query->filterByLotmlotnbr(['foo', 'bar']); // WHERE LotmLotNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmlotnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmlotnbr($lotmlotnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmlotnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $lotmlotnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmlotref('fooValue');   // WHERE LotmLotRef = 'fooValue'
     * $query->filterByLotmlotref('%fooValue%', Criteria::LIKE); // WHERE LotmLotRef LIKE '%fooValue%'
     * $query->filterByLotmlotref(['foo', 'bar']); // WHERE LotmLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmlotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmlotref($lotmlotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmlotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTREF, $lotmlotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmFrstActDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmfrstactdate('fooValue');   // WHERE LotmFrstActDate = 'fooValue'
     * $query->filterByLotmfrstactdate('%fooValue%', Criteria::LIKE); // WHERE LotmFrstActDate LIKE '%fooValue%'
     * $query->filterByLotmfrstactdate(['foo', 'bar']); // WHERE LotmFrstActDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmfrstactdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmfrstactdate($lotmfrstactdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmfrstactdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMFRSTACTDATE, $lotmfrstactdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmImagYn column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmimagyn('fooValue');   // WHERE LotmImagYn = 'fooValue'
     * $query->filterByLotmimagyn('%fooValue%', Criteria::LIKE); // WHERE LotmImagYn LIKE '%fooValue%'
     * $query->filterByLotmimagyn(['foo', 'bar']); // WHERE LotmImagYn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmimagyn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmimagyn($lotmimagyn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMIMAGYN, $lotmimagyn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmunitwght(1234); // WHERE LotmUnitWght = 1234
     * $query->filterByLotmunitwght(array(12, 34)); // WHERE LotmUnitWght IN (12, 34)
     * $query->filterByLotmunitwght(array('min' => 12)); // WHERE LotmUnitWght > 12
     * </code>
     *
     * @param mixed $lotmunitwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmunitwght($lotmunitwght = null, ?string $comparison = null)
    {
        if (is_array($lotmunitwght)) {
            $useMinMax = false;
            if (isset($lotmunitwght['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmunitwght['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmrevision('fooValue');   // WHERE LotmRevision = 'fooValue'
     * $query->filterByLotmrevision('%fooValue%', Criteria::LIKE); // WHERE LotmRevision LIKE '%fooValue%'
     * $query->filterByLotmrevision(['foo', 'bar']); // WHERE LotmRevision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmrevision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmrevision($lotmrevision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmrevision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMREVISION, $lotmrevision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmctry('fooValue');   // WHERE LotmCtry = 'fooValue'
     * $query->filterByLotmctry('%fooValue%', Criteria::LIKE); // WHERE LotmCtry LIKE '%fooValue%'
     * $query->filterByLotmctry(['foo', 'bar']); // WHERE LotmCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmctry($lotmctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCTRY, $lotmctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmCOfC column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcofc('fooValue');   // WHERE LotmCOfC = 'fooValue'
     * $query->filterByLotmcofc('%fooValue%', Criteria::LIKE); // WHERE LotmCOfC LIKE '%fooValue%'
     * $query->filterByLotmcofc(['foo', 'bar']); // WHERE LotmCOfC IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmcofc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmcofc($lotmcofc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcofc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCOFC, $lotmcofc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmCreateDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcreatedate('fooValue');   // WHERE LotmCreateDate = 'fooValue'
     * $query->filterByLotmcreatedate('%fooValue%', Criteria::LIKE); // WHERE LotmCreateDate LIKE '%fooValue%'
     * $query->filterByLotmcreatedate(['foo', 'bar']); // WHERE LotmCreateDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmcreatedate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmcreatedate($lotmcreatedate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcreatedate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCREATEDATE, $lotmcreatedate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmCreateTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcreatetime('fooValue');   // WHERE LotmCreateTime = 'fooValue'
     * $query->filterByLotmcreatetime('%fooValue%', Criteria::LIKE); // WHERE LotmCreateTime LIKE '%fooValue%'
     * $query->filterByLotmcreatetime(['foo', 'bar']); // WHERE LotmCreateTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmcreatetime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmcreatetime($lotmcreatetime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcreatetime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCREATETIME, $lotmcreatetime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmvendid('fooValue');   // WHERE LotmVendId = 'fooValue'
     * $query->filterByLotmvendid('%fooValue%', Criteria::LIKE); // WHERE LotmVendId LIKE '%fooValue%'
     * $query->filterByLotmvendid(['foo', 'bar']); // WHERE LotmVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmvendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmvendid($lotmvendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmvendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMVENDID, $lotmvendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmexpiredate('fooValue');   // WHERE LotmExpireDate = 'fooValue'
     * $query->filterByLotmexpiredate('%fooValue%', Criteria::LIKE); // WHERE LotmExpireDate LIKE '%fooValue%'
     * $query->filterByLotmexpiredate(['foo', 'bar']); // WHERE LotmExpireDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmexpiredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmexpiredate($lotmexpiredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMEXPIREDATE, $lotmexpiredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmunitcost(1234); // WHERE LotmUnitCost = 1234
     * $query->filterByLotmunitcost(array(12, 34)); // WHERE LotmUnitCost IN (12, 34)
     * $query->filterByLotmunitcost(array('min' => 12)); // WHERE LotmUnitCost > 12
     * </code>
     *
     * @param mixed $lotmunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmunitcost($lotmunitcost = null, ?string $comparison = null)
    {
        if (is_array($lotmunitcost)) {
            $useMinMax = false;
            if (isset($lotmunitcost['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmunitcost['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcntrqty(1234); // WHERE LotmCntrQty = 1234
     * $query->filterByLotmcntrqty(array(12, 34)); // WHERE LotmCntrQty IN (12, 34)
     * $query->filterByLotmcntrqty(array('min' => 12)); // WHERE LotmCntrQty > 12
     * </code>
     *
     * @param mixed $lotmcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmcntrqty($lotmcntrqty = null, ?string $comparison = null)
    {
        if (is_array($lotmcntrqty)) {
            $useMinMax = false;
            if (isset($lotmcntrqty['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmcntrqty['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the LotmSrcCd column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmsrccd('fooValue');   // WHERE LotmSrcCd = 'fooValue'
     * $query->filterByLotmsrccd('%fooValue%', Criteria::LIKE); // WHERE LotmSrcCd LIKE '%fooValue%'
     * $query->filterByLotmsrccd(['foo', 'bar']); // WHERE LotmSrcCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $lotmsrccd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLotmsrccd($lotmsrccd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmsrccd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMSRCCD, $lotmsrccd, $comparison);

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

        $this->addUsingAlias(InvLotMasterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvLotMasterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvLotMasterTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvWhseLot object
     *
     * @param \InvWhseLot|ObjectCollection $invWhseLot the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvWhseLot($invWhseLot, ?string $comparison = null)
    {
        if ($invWhseLot instanceof \InvWhseLot) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invWhseLot->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invWhseLot->getInltlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvWhseLot() only accepts arguments of type \InvWhseLot');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseLot relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvWhseLot(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseLot');

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
            $this->addJoinObject($join, 'InvWhseLot');
        }

        return $this;
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseLotQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseLot', '\InvWhseLotQuery');
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @param callable(\InvWhseLotQuery):\InvWhseLotQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvWhseLotQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvWhseLotQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvWhseLot table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvWhseLotQuery The inner query object of the EXISTS statement
     */
    public function useInvWhseLotExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT EXISTS query.
     *
     * @see useInvWhseLotExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvWhseLotNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvWhseLotQuery The inner query object of the IN statement
     */
    public function useInInvWhseLotQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT IN query.
     *
     * @see useInvWhseLotInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvWhseLotQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotTag object
     *
     * @param \InvLotTag|ObjectCollection $invLotTag the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotTag($invLotTag, ?string $comparison = null)
    {
        if ($invLotTag instanceof \InvLotTag) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invLotTag->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invLotTag->getIntglotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvLotTag() only accepts arguments of type \InvLotTag');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotTag relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotTag(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotTag');

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
            $this->addJoinObject($join, 'InvLotTag');
        }

        return $this;
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotTagQuery A secondary query class using the current class as primary query
     */
    public function useInvLotTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotTag', '\InvLotTagQuery');
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @param callable(\InvLotTagQuery):\InvLotTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotTagQuery The inner query object of the EXISTS statement
     */
    public function useInvLotTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT EXISTS query.
     *
     * @see useInvLotTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotTagQuery The inner query object of the IN statement
     */
    public function useInInvLotTagQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT IN query.
     *
     * @see useInvLotTagInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotTagQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, ?string $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invTransferLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invTransferLotserial->getInsdlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @param callable(\InvTransferLotserialQuery):\InvTransferLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT IN query.
     *
     * @see useInvTransferLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPreAllocatedLotserial object
     *
     * @param \InvTransferPreAllocatedLotserial|ObjectCollection $invTransferPreAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial, ?string $comparison = null)
    {
        if ($invTransferPreAllocatedLotserial instanceof \InvTransferPreAllocatedLotserial) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invTransferPreAllocatedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invTransferPreAllocatedLotserial->getInidlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPreAllocatedLotserial() only accepts arguments of type \InvTransferPreAllocatedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPreAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPreAllocatedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPreAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPreAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPreAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPreAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPreAllocatedLotserial', '\InvTransferPreAllocatedLotserialQuery');
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @param callable(\InvTransferPreAllocatedLotserialQuery):\InvTransferPreAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPreAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPreAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPreAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPreAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, ?string $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invTransferPickedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invTransferPickedLotserial->getInpdlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @param callable(\InvTransferPickedLotserialQuery):\InvTransferPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoAllocatedLotserial object
     *
     * @param \SoAllocatedLotserial|ObjectCollection $soAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoAllocatedLotserial($soAllocatedLotserial, ?string $comparison = null)
    {
        if ($soAllocatedLotserial instanceof \SoAllocatedLotserial) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $soAllocatedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $soAllocatedLotserial->getOeidlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoAllocatedLotserial() only accepts arguments of type \SoAllocatedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoAllocatedLotserial');

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
            $this->addJoinObject($join, 'SoAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoAllocatedLotserial', '\SoAllocatedLotserialQuery');
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @param callable(\SoAllocatedLotserialQuery):\SoAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useSoAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT IN query.
     *
     * @see useSoAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoPickedLotserial object
     *
     * @param \SoPickedLotserial|ObjectCollection $soPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoPickedLotserial($soPickedLotserial, ?string $comparison = null)
    {
        if ($soPickedLotserial instanceof \SoPickedLotserial) {
            $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $soPickedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $soPickedLotserial->getOepdlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoPickedLotserial() only accepts arguments of type \SoPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoPickedLotserial');

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
            $this->addJoinObject($join, 'SoPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoPickedLotserial', '\SoPickedLotserialQuery');
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @param callable(\SoPickedLotserialQuery):\SoPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT EXISTS query.
     *
     * @see useSoPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT IN query.
     *
     * @see useSoPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvLotMaster $invLotMaster Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invLotMaster = null)
    {
        if ($invLotMaster) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvLotMasterTableMap::COL_INITITEMNBR), $invLotMaster->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvLotMasterTableMap::COL_LOTMLOTNBR), $invLotMaster->getLotmlotnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_lot_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvLotMasterTableMap::clearInstancePool();
            InvLotMasterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvLotMasterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvLotMasterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvLotMasterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
