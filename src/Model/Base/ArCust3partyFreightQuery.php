<?php

namespace Base;

use \ArCust3partyFreight as ChildArCust3partyFreight;
use \ArCust3partyFreightQuery as ChildArCust3partyFreightQuery;
use \Exception;
use \PDO;
use Map\ArCust3partyFreightTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_3party` table.
 *
 * @method     ChildArCust3partyFreightQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArCust3partyFreightQuery orderByAr3pacctnbr($order = Criteria::ASC) Order by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pname($order = Criteria::ASC) Order by the Ar3pName column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr1($order = Criteria::ASC) Order by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr2($order = Criteria::ASC) Order by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreightQuery orderByAr3padr3($order = Criteria::ASC) Order by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreightQuery orderByAr3pctry($order = Criteria::ASC) Order by the Ar3pCtry column
 * @method     ChildArCust3partyFreightQuery orderByAr3pcity($order = Criteria::ASC) Order by the Ar3pCity column
 * @method     ChildArCust3partyFreightQuery orderByAr3pstat($order = Criteria::ASC) Order by the Ar3pStat column
 * @method     ChildArCust3partyFreightQuery orderByAr3pzipcode($order = Criteria::ASC) Order by the Ar3pZipCode column
 * @method     ChildArCust3partyFreightQuery orderByAr3pintl($order = Criteria::ASC) Order by the Ar3pIntl column
 * @method     ChildArCust3partyFreightQuery orderByAr3ptelenbr($order = Criteria::ASC) Order by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pteleext($order = Criteria::ASC) Order by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreightQuery orderByAr3pitelnbr($order = Criteria::ASC) Order by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pitelext($order = Criteria::ASC) Order by the Ar3pItelExt column
 * @method     ChildArCust3partyFreightQuery orderByAr3pfaxnbr($order = Criteria::ASC) Order by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreightQuery orderByAr3pifaxnbr($order = Criteria::ASC) Order by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreightQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCust3partyFreightQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCust3partyFreightQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCust3partyFreightQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArCust3partyFreightQuery groupByAr3pacctnbr() Group by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pname() Group by the Ar3pName column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr1() Group by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr2() Group by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreightQuery groupByAr3padr3() Group by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreightQuery groupByAr3pctry() Group by the Ar3pCtry column
 * @method     ChildArCust3partyFreightQuery groupByAr3pcity() Group by the Ar3pCity column
 * @method     ChildArCust3partyFreightQuery groupByAr3pstat() Group by the Ar3pStat column
 * @method     ChildArCust3partyFreightQuery groupByAr3pzipcode() Group by the Ar3pZipCode column
 * @method     ChildArCust3partyFreightQuery groupByAr3pintl() Group by the Ar3pIntl column
 * @method     ChildArCust3partyFreightQuery groupByAr3ptelenbr() Group by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pteleext() Group by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreightQuery groupByAr3pitelnbr() Group by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pitelext() Group by the Ar3pItelExt column
 * @method     ChildArCust3partyFreightQuery groupByAr3pfaxnbr() Group by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreightQuery groupByAr3pifaxnbr() Group by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreightQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCust3partyFreightQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCust3partyFreightQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCust3partyFreightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCust3partyFreightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCust3partyFreightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCust3partyFreightQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCust3partyFreightQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCust3partyFreightQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCust3partyFreightQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArCust3partyFreightQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArCust3partyFreightQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCust3partyFreightQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArCust3partyFreight|null findOne(?ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query
 * @method     ChildArCust3partyFreight findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query, or a new ChildArCust3partyFreight object populated from the query conditions when no match is found
 *
 * @method     ChildArCust3partyFreight|null findOneByArcucustid(string $ArcuCustId) Return the first ChildArCust3partyFreight filtered by the ArcuCustId column
 * @method     ChildArCust3partyFreight|null findOneByAr3pacctnbr(string $Ar3pAcctNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreight|null findOneByAr3pname(string $Ar3pName) Return the first ChildArCust3partyFreight filtered by the Ar3pName column
 * @method     ChildArCust3partyFreight|null findOneByAr3padr1(string $Ar3pAdr1) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreight|null findOneByAr3padr2(string $Ar3pAdr2) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreight|null findOneByAr3padr3(string $Ar3pAdr3) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreight|null findOneByAr3pctry(string $Ar3pCtry) Return the first ChildArCust3partyFreight filtered by the Ar3pCtry column
 * @method     ChildArCust3partyFreight|null findOneByAr3pcity(string $Ar3pCity) Return the first ChildArCust3partyFreight filtered by the Ar3pCity column
 * @method     ChildArCust3partyFreight|null findOneByAr3pstat(string $Ar3pStat) Return the first ChildArCust3partyFreight filtered by the Ar3pStat column
 * @method     ChildArCust3partyFreight|null findOneByAr3pzipcode(string $Ar3pZipCode) Return the first ChildArCust3partyFreight filtered by the Ar3pZipCode column
 * @method     ChildArCust3partyFreight|null findOneByAr3pintl(string $Ar3pIntl) Return the first ChildArCust3partyFreight filtered by the Ar3pIntl column
 * @method     ChildArCust3partyFreight|null findOneByAr3ptelenbr(string $Ar3pTeleNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreight|null findOneByAr3pteleext(string $Ar3pTeleExt) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreight|null findOneByAr3pitelnbr(string $Ar3pItelNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreight|null findOneByAr3pitelext(string $Ar3pItelExt) Return the first ChildArCust3partyFreight filtered by the Ar3pItelExt column
 * @method     ChildArCust3partyFreight|null findOneByAr3pfaxnbr(string $Ar3pFaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreight|null findOneByAr3pifaxnbr(string $Ar3pIfaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreight|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCust3partyFreight filtered by the DateUpdtd column
 * @method     ChildArCust3partyFreight|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCust3partyFreight filtered by the TimeUpdtd column
 * @method     ChildArCust3partyFreight|null findOneByDummy(string $dummy) Return the first ChildArCust3partyFreight filtered by the dummy column
 *
 * @method     ChildArCust3partyFreight requirePk($key, ?ConnectionInterface $con = null) Return the ChildArCust3partyFreight by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOne(?ConnectionInterface $con = null) Return the first ChildArCust3partyFreight matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCust3partyFreight requireOneByArcucustid(string $ArcuCustId) Return the first ChildArCust3partyFreight filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pacctnbr(string $Ar3pAcctNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pname(string $Ar3pName) Return the first ChildArCust3partyFreight filtered by the Ar3pName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr1(string $Ar3pAdr1) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr2(string $Ar3pAdr2) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3padr3(string $Ar3pAdr3) Return the first ChildArCust3partyFreight filtered by the Ar3pAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pctry(string $Ar3pCtry) Return the first ChildArCust3partyFreight filtered by the Ar3pCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pcity(string $Ar3pCity) Return the first ChildArCust3partyFreight filtered by the Ar3pCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pstat(string $Ar3pStat) Return the first ChildArCust3partyFreight filtered by the Ar3pStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pzipcode(string $Ar3pZipCode) Return the first ChildArCust3partyFreight filtered by the Ar3pZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pintl(string $Ar3pIntl) Return the first ChildArCust3partyFreight filtered by the Ar3pIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3ptelenbr(string $Ar3pTeleNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pteleext(string $Ar3pTeleExt) Return the first ChildArCust3partyFreight filtered by the Ar3pTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pitelnbr(string $Ar3pItelNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pItelNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pitelext(string $Ar3pItelExt) Return the first ChildArCust3partyFreight filtered by the Ar3pItelExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pfaxnbr(string $Ar3pFaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByAr3pifaxnbr(string $Ar3pIfaxNbr) Return the first ChildArCust3partyFreight filtered by the Ar3pIfaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCust3partyFreight filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCust3partyFreight filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCust3partyFreight requireOneByDummy(string $dummy) Return the first ChildArCust3partyFreight filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCust3partyFreight[]|Collection find(?ConnectionInterface $con = null) Return ChildArCust3partyFreight objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> find(?ConnectionInterface $con = null) Return ChildArCust3partyFreight objects based on current ModelCriteria
 *
 * @method     ChildArCust3partyFreight[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildArCust3partyFreight objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByArcucustid(string|array<string> $ArcuCustId) Return ChildArCust3partyFreight objects filtered by the ArcuCustId column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pacctnbr(string|array<string> $Ar3pAcctNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pAcctNbr column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pacctnbr(string|array<string> $Ar3pAcctNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pAcctNbr column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pname(string|array<string> $Ar3pName) Return ChildArCust3partyFreight objects filtered by the Ar3pName column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pname(string|array<string> $Ar3pName) Return ChildArCust3partyFreight objects filtered by the Ar3pName column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3padr1(string|array<string> $Ar3pAdr1) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr1 column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3padr1(string|array<string> $Ar3pAdr1) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr1 column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3padr2(string|array<string> $Ar3pAdr2) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr2 column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3padr2(string|array<string> $Ar3pAdr2) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr2 column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3padr3(string|array<string> $Ar3pAdr3) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr3 column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3padr3(string|array<string> $Ar3pAdr3) Return ChildArCust3partyFreight objects filtered by the Ar3pAdr3 column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pctry(string|array<string> $Ar3pCtry) Return ChildArCust3partyFreight objects filtered by the Ar3pCtry column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pctry(string|array<string> $Ar3pCtry) Return ChildArCust3partyFreight objects filtered by the Ar3pCtry column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pcity(string|array<string> $Ar3pCity) Return ChildArCust3partyFreight objects filtered by the Ar3pCity column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pcity(string|array<string> $Ar3pCity) Return ChildArCust3partyFreight objects filtered by the Ar3pCity column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pstat(string|array<string> $Ar3pStat) Return ChildArCust3partyFreight objects filtered by the Ar3pStat column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pstat(string|array<string> $Ar3pStat) Return ChildArCust3partyFreight objects filtered by the Ar3pStat column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pzipcode(string|array<string> $Ar3pZipCode) Return ChildArCust3partyFreight objects filtered by the Ar3pZipCode column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pzipcode(string|array<string> $Ar3pZipCode) Return ChildArCust3partyFreight objects filtered by the Ar3pZipCode column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pintl(string|array<string> $Ar3pIntl) Return ChildArCust3partyFreight objects filtered by the Ar3pIntl column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pintl(string|array<string> $Ar3pIntl) Return ChildArCust3partyFreight objects filtered by the Ar3pIntl column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3ptelenbr(string|array<string> $Ar3pTeleNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleNbr column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3ptelenbr(string|array<string> $Ar3pTeleNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleNbr column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pteleext(string|array<string> $Ar3pTeleExt) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleExt column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pteleext(string|array<string> $Ar3pTeleExt) Return ChildArCust3partyFreight objects filtered by the Ar3pTeleExt column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pitelnbr(string|array<string> $Ar3pItelNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pItelNbr column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pitelnbr(string|array<string> $Ar3pItelNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pItelNbr column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pitelext(string|array<string> $Ar3pItelExt) Return ChildArCust3partyFreight objects filtered by the Ar3pItelExt column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pitelext(string|array<string> $Ar3pItelExt) Return ChildArCust3partyFreight objects filtered by the Ar3pItelExt column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pfaxnbr(string|array<string> $Ar3pFaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pFaxNbr column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pfaxnbr(string|array<string> $Ar3pFaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pFaxNbr column
 * @method     ChildArCust3partyFreight[]|Collection findByAr3pifaxnbr(string|array<string> $Ar3pIfaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pIfaxNbr column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByAr3pifaxnbr(string|array<string> $Ar3pIfaxNbr) Return ChildArCust3partyFreight objects filtered by the Ar3pIfaxNbr column
 * @method     ChildArCust3partyFreight[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCust3partyFreight objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCust3partyFreight objects filtered by the DateUpdtd column
 * @method     ChildArCust3partyFreight[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCust3partyFreight objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCust3partyFreight objects filtered by the TimeUpdtd column
 * @method     ChildArCust3partyFreight[]|Collection findByDummy(string|array<string> $dummy) Return ChildArCust3partyFreight objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArCust3partyFreight> findByDummy(string|array<string> $dummy) Return ChildArCust3partyFreight objects filtered by the dummy column
 *
 * @method     ChildArCust3partyFreight[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArCust3partyFreight> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArCust3partyFreightQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCust3partyFreightQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCust3partyFreight', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCust3partyFreightQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCust3partyFreightQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArCust3partyFreightQuery) {
            return $criteria;
        }
        $query = new ChildArCust3partyFreightQuery();
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
     * @param array[$ArcuCustId, $Ar3pAcctNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArCust3partyFreight|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCust3partyFreightTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildArCust3partyFreight A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, Ar3pAcctNbr, Ar3pName, Ar3pAdr1, Ar3pAdr2, Ar3pAdr3, Ar3pCtry, Ar3pCity, Ar3pStat, Ar3pZipCode, Ar3pIntl, Ar3pTeleNbr, Ar3pTeleExt, Ar3pItelNbr, Ar3pItelExt, Ar3pFaxNbr, Ar3pIfaxNbr, DateUpdtd, TimeUpdtd, dummy FROM ar_3party WHERE ArcuCustId = :p0 AND Ar3pAcctNbr = :p1';
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
            /** @var ChildArCust3partyFreight $obj */
            $obj = new ChildArCust3partyFreight();
            $obj->hydrate($row);
            ArCust3partyFreightTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildArCust3partyFreight|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pacctnbr('fooValue');   // WHERE Ar3pAcctNbr = 'fooValue'
     * $query->filterByAr3pacctnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pAcctNbr LIKE '%fooValue%'
     * $query->filterByAr3pacctnbr(['foo', 'bar']); // WHERE Ar3pAcctNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pacctnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pacctnbr($ar3pacctnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PACCTNBR, $ar3pacctnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pName column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pname('fooValue');   // WHERE Ar3pName = 'fooValue'
     * $query->filterByAr3pname('%fooValue%', Criteria::LIKE); // WHERE Ar3pName LIKE '%fooValue%'
     * $query->filterByAr3pname(['foo', 'bar']); // WHERE Ar3pName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pname($ar3pname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PNAME, $ar3pname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr1('fooValue');   // WHERE Ar3pAdr1 = 'fooValue'
     * $query->filterByAr3padr1('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr1 LIKE '%fooValue%'
     * $query->filterByAr3padr1(['foo', 'bar']); // WHERE Ar3pAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3padr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3padr1($ar3padr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR1, $ar3padr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr2('fooValue');   // WHERE Ar3pAdr2 = 'fooValue'
     * $query->filterByAr3padr2('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr2 LIKE '%fooValue%'
     * $query->filterByAr3padr2(['foo', 'bar']); // WHERE Ar3pAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3padr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3padr2($ar3padr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR2, $ar3padr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3padr3('fooValue');   // WHERE Ar3pAdr3 = 'fooValue'
     * $query->filterByAr3padr3('%fooValue%', Criteria::LIKE); // WHERE Ar3pAdr3 LIKE '%fooValue%'
     * $query->filterByAr3padr3(['foo', 'bar']); // WHERE Ar3pAdr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3padr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3padr3($ar3padr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3padr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PADR3, $ar3padr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pctry('fooValue');   // WHERE Ar3pCtry = 'fooValue'
     * $query->filterByAr3pctry('%fooValue%', Criteria::LIKE); // WHERE Ar3pCtry LIKE '%fooValue%'
     * $query->filterByAr3pctry(['foo', 'bar']); // WHERE Ar3pCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pctry($ar3pctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PCTRY, $ar3pctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pCity column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pcity('fooValue');   // WHERE Ar3pCity = 'fooValue'
     * $query->filterByAr3pcity('%fooValue%', Criteria::LIKE); // WHERE Ar3pCity LIKE '%fooValue%'
     * $query->filterByAr3pcity(['foo', 'bar']); // WHERE Ar3pCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pcity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pcity($ar3pcity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pcity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PCITY, $ar3pcity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pStat column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pstat('fooValue');   // WHERE Ar3pStat = 'fooValue'
     * $query->filterByAr3pstat('%fooValue%', Criteria::LIKE); // WHERE Ar3pStat LIKE '%fooValue%'
     * $query->filterByAr3pstat(['foo', 'bar']); // WHERE Ar3pStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pstat($ar3pstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PSTAT, $ar3pstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pzipcode('fooValue');   // WHERE Ar3pZipCode = 'fooValue'
     * $query->filterByAr3pzipcode('%fooValue%', Criteria::LIKE); // WHERE Ar3pZipCode LIKE '%fooValue%'
     * $query->filterByAr3pzipcode(['foo', 'bar']); // WHERE Ar3pZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pzipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pzipcode($ar3pzipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PZIPCODE, $ar3pzipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pintl('fooValue');   // WHERE Ar3pIntl = 'fooValue'
     * $query->filterByAr3pintl('%fooValue%', Criteria::LIKE); // WHERE Ar3pIntl LIKE '%fooValue%'
     * $query->filterByAr3pintl(['foo', 'bar']); // WHERE Ar3pIntl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pintl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pintl($ar3pintl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pintl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PINTL, $ar3pintl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3ptelenbr('fooValue');   // WHERE Ar3pTeleNbr = 'fooValue'
     * $query->filterByAr3ptelenbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pTeleNbr LIKE '%fooValue%'
     * $query->filterByAr3ptelenbr(['foo', 'bar']); // WHERE Ar3pTeleNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3ptelenbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3ptelenbr($ar3ptelenbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3ptelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PTELENBR, $ar3ptelenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pteleext('fooValue');   // WHERE Ar3pTeleExt = 'fooValue'
     * $query->filterByAr3pteleext('%fooValue%', Criteria::LIKE); // WHERE Ar3pTeleExt LIKE '%fooValue%'
     * $query->filterByAr3pteleext(['foo', 'bar']); // WHERE Ar3pTeleExt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pteleext The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pteleext($ar3pteleext = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pteleext)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PTELEEXT, $ar3pteleext, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pItelNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pitelnbr('fooValue');   // WHERE Ar3pItelNbr = 'fooValue'
     * $query->filterByAr3pitelnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pItelNbr LIKE '%fooValue%'
     * $query->filterByAr3pitelnbr(['foo', 'bar']); // WHERE Ar3pItelNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pitelnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pitelnbr($ar3pitelnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pitelnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PITELNBR, $ar3pitelnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pItelExt column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pitelext('fooValue');   // WHERE Ar3pItelExt = 'fooValue'
     * $query->filterByAr3pitelext('%fooValue%', Criteria::LIKE); // WHERE Ar3pItelExt LIKE '%fooValue%'
     * $query->filterByAr3pitelext(['foo', 'bar']); // WHERE Ar3pItelExt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pitelext The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pitelext($ar3pitelext = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pitelext)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PITELEXT, $ar3pitelext, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pfaxnbr('fooValue');   // WHERE Ar3pFaxNbr = 'fooValue'
     * $query->filterByAr3pfaxnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pFaxNbr LIKE '%fooValue%'
     * $query->filterByAr3pfaxnbr(['foo', 'bar']); // WHERE Ar3pFaxNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pfaxnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pfaxnbr($ar3pfaxnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PFAXNBR, $ar3pfaxnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Ar3pIfaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByAr3pifaxnbr('fooValue');   // WHERE Ar3pIfaxNbr = 'fooValue'
     * $query->filterByAr3pifaxnbr('%fooValue%', Criteria::LIKE); // WHERE Ar3pIfaxNbr LIKE '%fooValue%'
     * $query->filterByAr3pifaxnbr(['foo', 'bar']); // WHERE Ar3pIfaxNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ar3pifaxnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAr3pifaxnbr($ar3pifaxnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar3pifaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_AR3PIFAXNBR, $ar3pifaxnbr, $comparison);

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

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArCust3partyFreightTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ArCust3partyFreightTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArCust3partyFreight $arCust3partyFreight Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arCust3partyFreight = null)
    {
        if ($arCust3partyFreight) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArCust3partyFreightTableMap::COL_ARCUCUSTID), $arCust3partyFreight->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArCust3partyFreightTableMap::COL_AR3PACCTNBR), $arCust3partyFreight->getAr3pacctnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_3party table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCust3partyFreightTableMap::clearInstancePool();
            ArCust3partyFreightTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCust3partyFreightTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCust3partyFreightTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCust3partyFreightTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCust3partyFreightTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
