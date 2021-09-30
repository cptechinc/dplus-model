<?php

namespace Base;

use \ConfigPm as ChildConfigPm;
use \ConfigPmQuery as ChildConfigPmQuery;
use \Exception;
use \PDO;
use Map\ConfigPmTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'pm_config' table.
 *
 *
 *
 * @method     ChildConfigPmQuery orderByPmtbconfkey($order = Criteria::ASC) Order by the PmtbConfKey column
 * @method     ChildConfigPmQuery orderByPmtbconfbasesystem($order = Criteria::ASC) Order by the PmtbConfBaseSystem column
 * @method     ChildConfigPmQuery orderByPmtbconfadvancedsystem($order = Criteria::ASC) Order by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPmQuery orderByPmtbconfallowneguse($order = Criteria::ASC) Order by the PmtbConfAllowNegUse column
 * @method     ChildConfigPmQuery orderByPmtbconfscrapunused($order = Criteria::ASC) Order by the PmtbConfScrapUnused column
 * @method     ChildConfigPmQuery orderByPmtbconfscrapgl($order = Criteria::ASC) Order by the PmtbConfScrapGl column
 * @method     ChildConfigPmQuery orderByPmtbconfwarnqtytozero($order = Criteria::ASC) Order by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPmQuery orderByPmtbconfvargl($order = Criteria::ASC) Order by the PmtbConfVarGl column
 * @method     ChildConfigPmQuery orderByPmtbconfputbincode($order = Criteria::ASC) Order by the PmtbConfPutBinCode column
 * @method     ChildConfigPmQuery orderByPmtbconfputbindflt($order = Criteria::ASC) Order by the PmtbConfPutBinDflt column
 * @method     ChildConfigPmQuery orderByPmtbconfserialbase($order = Criteria::ASC) Order by the PmtbConfSerialBase column
 * @method     ChildConfigPmQuery orderByPmtbconffgatstan($order = Criteria::ASC) Order by the PmtbConfFgAtStan column
 * @method     ChildConfigPmQuery orderByPmtbconfglfgtomat($order = Criteria::ASC) Order by the PmtbConfGlFgToMat column
 * @method     ChildConfigPmQuery orderByPmtbconfpostdetsum($order = Criteria::ASC) Order by the PmtbConfPostDetSum column
 * @method     ChildConfigPmQuery orderByPmtbconfsort($order = Criteria::ASC) Order by the PmtbConfSort column
 * @method     ChildConfigPmQuery orderByPmtbconflastcost($order = Criteria::ASC) Order by the PmtbConfLastCost column
 * @method     ChildConfigPmQuery orderByPmtbconfaskbom($order = Criteria::ASC) Order by the PmtbConfAskBom column
 * @method     ChildConfigPmQuery orderByPmtbconfdefbom($order = Criteria::ASC) Order by the PmtbConfDefBom column
 * @method     ChildConfigPmQuery orderByPmtbconfautoselectlots($order = Criteria::ASC) Order by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPmQuery orderByPmtbconfallocwhenic($order = Criteria::ASC) Order by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPmQuery orderByPmtbconfusewpc($order = Criteria::ASC) Order by the PmtbConfUseWpc column
 * @method     ChildConfigPmQuery orderByPmtbconfpowgwipinproc($order = Criteria::ASC) Order by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPmQuery orderByPmtbconflrscost($order = Criteria::ASC) Order by the PmtbConfLrsCost column
 * @method     ChildConfigPmQuery orderByPmtbconfvariacctg($order = Criteria::ASC) Order by the PmtbConfVariAcctg column
 * @method     ChildConfigPmQuery orderByPmtbconftakebincode($order = Criteria::ASC) Order by the PmtbConfTakeBinCode column
 * @method     ChildConfigPmQuery orderByPmtbconfusefguom($order = Criteria::ASC) Order by the PmtbConfUseFgUom column
 * @method     ChildConfigPmQuery orderByPmtbconfusenc($order = Criteria::ASC) Order by the PmtbConfUseNc column
 * @method     ChildConfigPmQuery orderByPmtbconfusenegwip($order = Criteria::ASC) Order by the PmtbConfUseNegWip column
 * @method     ChildConfigPmQuery orderByPmtbcon2advwipactentry($order = Criteria::ASC) Order by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPmQuery orderByPmtbcon2machlaborgl($order = Criteria::ASC) Order by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPmQuery orderByPmtbcon2machsetupgl($order = Criteria::ASC) Order by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPmQuery orderByPmtbcon2burdenlaborgl($order = Criteria::ASC) Order by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPmQuery orderByPmtbcon2burdenmachgl($order = Criteria::ASC) Order by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPmQuery orderByPmtbcon2burdenadmingl($order = Criteria::ASC) Order by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPmQuery orderByPmtbcon2setupasoper($order = Criteria::ASC) Order by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPmQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigPmQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigPmQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigPmQuery groupByPmtbconfkey() Group by the PmtbConfKey column
 * @method     ChildConfigPmQuery groupByPmtbconfbasesystem() Group by the PmtbConfBaseSystem column
 * @method     ChildConfigPmQuery groupByPmtbconfadvancedsystem() Group by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPmQuery groupByPmtbconfallowneguse() Group by the PmtbConfAllowNegUse column
 * @method     ChildConfigPmQuery groupByPmtbconfscrapunused() Group by the PmtbConfScrapUnused column
 * @method     ChildConfigPmQuery groupByPmtbconfscrapgl() Group by the PmtbConfScrapGl column
 * @method     ChildConfigPmQuery groupByPmtbconfwarnqtytozero() Group by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPmQuery groupByPmtbconfvargl() Group by the PmtbConfVarGl column
 * @method     ChildConfigPmQuery groupByPmtbconfputbincode() Group by the PmtbConfPutBinCode column
 * @method     ChildConfigPmQuery groupByPmtbconfputbindflt() Group by the PmtbConfPutBinDflt column
 * @method     ChildConfigPmQuery groupByPmtbconfserialbase() Group by the PmtbConfSerialBase column
 * @method     ChildConfigPmQuery groupByPmtbconffgatstan() Group by the PmtbConfFgAtStan column
 * @method     ChildConfigPmQuery groupByPmtbconfglfgtomat() Group by the PmtbConfGlFgToMat column
 * @method     ChildConfigPmQuery groupByPmtbconfpostdetsum() Group by the PmtbConfPostDetSum column
 * @method     ChildConfigPmQuery groupByPmtbconfsort() Group by the PmtbConfSort column
 * @method     ChildConfigPmQuery groupByPmtbconflastcost() Group by the PmtbConfLastCost column
 * @method     ChildConfigPmQuery groupByPmtbconfaskbom() Group by the PmtbConfAskBom column
 * @method     ChildConfigPmQuery groupByPmtbconfdefbom() Group by the PmtbConfDefBom column
 * @method     ChildConfigPmQuery groupByPmtbconfautoselectlots() Group by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPmQuery groupByPmtbconfallocwhenic() Group by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPmQuery groupByPmtbconfusewpc() Group by the PmtbConfUseWpc column
 * @method     ChildConfigPmQuery groupByPmtbconfpowgwipinproc() Group by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPmQuery groupByPmtbconflrscost() Group by the PmtbConfLrsCost column
 * @method     ChildConfigPmQuery groupByPmtbconfvariacctg() Group by the PmtbConfVariAcctg column
 * @method     ChildConfigPmQuery groupByPmtbconftakebincode() Group by the PmtbConfTakeBinCode column
 * @method     ChildConfigPmQuery groupByPmtbconfusefguom() Group by the PmtbConfUseFgUom column
 * @method     ChildConfigPmQuery groupByPmtbconfusenc() Group by the PmtbConfUseNc column
 * @method     ChildConfigPmQuery groupByPmtbconfusenegwip() Group by the PmtbConfUseNegWip column
 * @method     ChildConfigPmQuery groupByPmtbcon2advwipactentry() Group by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPmQuery groupByPmtbcon2machlaborgl() Group by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPmQuery groupByPmtbcon2machsetupgl() Group by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPmQuery groupByPmtbcon2burdenlaborgl() Group by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPmQuery groupByPmtbcon2burdenmachgl() Group by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPmQuery groupByPmtbcon2burdenadmingl() Group by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPmQuery groupByPmtbcon2setupasoper() Group by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPmQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigPmQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigPmQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigPmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigPmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigPmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigPmQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigPmQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigPmQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigPm findOne(ConnectionInterface $con = null) Return the first ChildConfigPm matching the query
 * @method     ChildConfigPm findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigPm matching the query, or a new ChildConfigPm object populated from the query conditions when no match is found
 *
 * @method     ChildConfigPm findOneByPmtbconfkey(int $PmtbConfKey) Return the first ChildConfigPm filtered by the PmtbConfKey column
 * @method     ChildConfigPm findOneByPmtbconfbasesystem(string $PmtbConfBaseSystem) Return the first ChildConfigPm filtered by the PmtbConfBaseSystem column
 * @method     ChildConfigPm findOneByPmtbconfadvancedsystem(string $PmtbConfAdvancedSystem) Return the first ChildConfigPm filtered by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPm findOneByPmtbconfallowneguse(string $PmtbConfAllowNegUse) Return the first ChildConfigPm filtered by the PmtbConfAllowNegUse column
 * @method     ChildConfigPm findOneByPmtbconfscrapunused(string $PmtbConfScrapUnused) Return the first ChildConfigPm filtered by the PmtbConfScrapUnused column
 * @method     ChildConfigPm findOneByPmtbconfscrapgl(string $PmtbConfScrapGl) Return the first ChildConfigPm filtered by the PmtbConfScrapGl column
 * @method     ChildConfigPm findOneByPmtbconfwarnqtytozero(string $PmtbConfWarnQtyToZero) Return the first ChildConfigPm filtered by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPm findOneByPmtbconfvargl(string $PmtbConfVarGl) Return the first ChildConfigPm filtered by the PmtbConfVarGl column
 * @method     ChildConfigPm findOneByPmtbconfputbincode(string $PmtbConfPutBinCode) Return the first ChildConfigPm filtered by the PmtbConfPutBinCode column
 * @method     ChildConfigPm findOneByPmtbconfputbindflt(string $PmtbConfPutBinDflt) Return the first ChildConfigPm filtered by the PmtbConfPutBinDflt column
 * @method     ChildConfigPm findOneByPmtbconfserialbase(string $PmtbConfSerialBase) Return the first ChildConfigPm filtered by the PmtbConfSerialBase column
 * @method     ChildConfigPm findOneByPmtbconffgatstan(string $PmtbConfFgAtStan) Return the first ChildConfigPm filtered by the PmtbConfFgAtStan column
 * @method     ChildConfigPm findOneByPmtbconfglfgtomat(string $PmtbConfGlFgToMat) Return the first ChildConfigPm filtered by the PmtbConfGlFgToMat column
 * @method     ChildConfigPm findOneByPmtbconfpostdetsum(string $PmtbConfPostDetSum) Return the first ChildConfigPm filtered by the PmtbConfPostDetSum column
 * @method     ChildConfigPm findOneByPmtbconfsort(string $PmtbConfSort) Return the first ChildConfigPm filtered by the PmtbConfSort column
 * @method     ChildConfigPm findOneByPmtbconflastcost(string $PmtbConfLastCost) Return the first ChildConfigPm filtered by the PmtbConfLastCost column
 * @method     ChildConfigPm findOneByPmtbconfaskbom(string $PmtbConfAskBom) Return the first ChildConfigPm filtered by the PmtbConfAskBom column
 * @method     ChildConfigPm findOneByPmtbconfdefbom(string $PmtbConfDefBom) Return the first ChildConfigPm filtered by the PmtbConfDefBom column
 * @method     ChildConfigPm findOneByPmtbconfautoselectlots(string $PmtbConfAutoSelectLots) Return the first ChildConfigPm filtered by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPm findOneByPmtbconfallocwhenic(string $PmtbConfAllocWhenIC) Return the first ChildConfigPm filtered by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPm findOneByPmtbconfusewpc(string $PmtbConfUseWpc) Return the first ChildConfigPm filtered by the PmtbConfUseWpc column
 * @method     ChildConfigPm findOneByPmtbconfpowgwipinproc(string $PmtbConfPowgWipInProc) Return the first ChildConfigPm filtered by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPm findOneByPmtbconflrscost(string $PmtbConfLrsCost) Return the first ChildConfigPm filtered by the PmtbConfLrsCost column
 * @method     ChildConfigPm findOneByPmtbconfvariacctg(string $PmtbConfVariAcctg) Return the first ChildConfigPm filtered by the PmtbConfVariAcctg column
 * @method     ChildConfigPm findOneByPmtbconftakebincode(string $PmtbConfTakeBinCode) Return the first ChildConfigPm filtered by the PmtbConfTakeBinCode column
 * @method     ChildConfigPm findOneByPmtbconfusefguom(string $PmtbConfUseFgUom) Return the first ChildConfigPm filtered by the PmtbConfUseFgUom column
 * @method     ChildConfigPm findOneByPmtbconfusenc(string $PmtbConfUseNc) Return the first ChildConfigPm filtered by the PmtbConfUseNc column
 * @method     ChildConfigPm findOneByPmtbconfusenegwip(string $PmtbConfUseNegWip) Return the first ChildConfigPm filtered by the PmtbConfUseNegWip column
 * @method     ChildConfigPm findOneByPmtbcon2advwipactentry(string $PmtbCon2AdvWipActEntry) Return the first ChildConfigPm filtered by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPm findOneByPmtbcon2machlaborgl(string $PmtbCon2MachLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPm findOneByPmtbcon2machsetupgl(string $PmtbCon2MachSetupGl) Return the first ChildConfigPm filtered by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPm findOneByPmtbcon2burdenlaborgl(string $PmtbCon2BurdenLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPm findOneByPmtbcon2burdenmachgl(string $PmtbCon2BurdenMachGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPm findOneByPmtbcon2burdenadmingl(string $PmtbCon2BurdenAdminGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPm findOneByPmtbcon2setupasoper(string $PmtbCon2SetupAsOper) Return the first ChildConfigPm filtered by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPm findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigPm filtered by the DateUpdtd column
 * @method     ChildConfigPm findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigPm filtered by the TimeUpdtd column
 * @method     ChildConfigPm findOneByDummy(string $dummy) Return the first ChildConfigPm filtered by the dummy column *

 * @method     ChildConfigPm requirePk($key, ConnectionInterface $con = null) Return the ChildConfigPm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOne(ConnectionInterface $con = null) Return the first ChildConfigPm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigPm requireOneByPmtbconfkey(int $PmtbConfKey) Return the first ChildConfigPm filtered by the PmtbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfbasesystem(string $PmtbConfBaseSystem) Return the first ChildConfigPm filtered by the PmtbConfBaseSystem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfadvancedsystem(string $PmtbConfAdvancedSystem) Return the first ChildConfigPm filtered by the PmtbConfAdvancedSystem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfallowneguse(string $PmtbConfAllowNegUse) Return the first ChildConfigPm filtered by the PmtbConfAllowNegUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfscrapunused(string $PmtbConfScrapUnused) Return the first ChildConfigPm filtered by the PmtbConfScrapUnused column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfscrapgl(string $PmtbConfScrapGl) Return the first ChildConfigPm filtered by the PmtbConfScrapGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfwarnqtytozero(string $PmtbConfWarnQtyToZero) Return the first ChildConfigPm filtered by the PmtbConfWarnQtyToZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfvargl(string $PmtbConfVarGl) Return the first ChildConfigPm filtered by the PmtbConfVarGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfputbincode(string $PmtbConfPutBinCode) Return the first ChildConfigPm filtered by the PmtbConfPutBinCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfputbindflt(string $PmtbConfPutBinDflt) Return the first ChildConfigPm filtered by the PmtbConfPutBinDflt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfserialbase(string $PmtbConfSerialBase) Return the first ChildConfigPm filtered by the PmtbConfSerialBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconffgatstan(string $PmtbConfFgAtStan) Return the first ChildConfigPm filtered by the PmtbConfFgAtStan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfglfgtomat(string $PmtbConfGlFgToMat) Return the first ChildConfigPm filtered by the PmtbConfGlFgToMat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfpostdetsum(string $PmtbConfPostDetSum) Return the first ChildConfigPm filtered by the PmtbConfPostDetSum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfsort(string $PmtbConfSort) Return the first ChildConfigPm filtered by the PmtbConfSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconflastcost(string $PmtbConfLastCost) Return the first ChildConfigPm filtered by the PmtbConfLastCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfaskbom(string $PmtbConfAskBom) Return the first ChildConfigPm filtered by the PmtbConfAskBom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfdefbom(string $PmtbConfDefBom) Return the first ChildConfigPm filtered by the PmtbConfDefBom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfautoselectlots(string $PmtbConfAutoSelectLots) Return the first ChildConfigPm filtered by the PmtbConfAutoSelectLots column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfallocwhenic(string $PmtbConfAllocWhenIC) Return the first ChildConfigPm filtered by the PmtbConfAllocWhenIC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfusewpc(string $PmtbConfUseWpc) Return the first ChildConfigPm filtered by the PmtbConfUseWpc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfpowgwipinproc(string $PmtbConfPowgWipInProc) Return the first ChildConfigPm filtered by the PmtbConfPowgWipInProc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconflrscost(string $PmtbConfLrsCost) Return the first ChildConfigPm filtered by the PmtbConfLrsCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfvariacctg(string $PmtbConfVariAcctg) Return the first ChildConfigPm filtered by the PmtbConfVariAcctg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconftakebincode(string $PmtbConfTakeBinCode) Return the first ChildConfigPm filtered by the PmtbConfTakeBinCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfusefguom(string $PmtbConfUseFgUom) Return the first ChildConfigPm filtered by the PmtbConfUseFgUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfusenc(string $PmtbConfUseNc) Return the first ChildConfigPm filtered by the PmtbConfUseNc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbconfusenegwip(string $PmtbConfUseNegWip) Return the first ChildConfigPm filtered by the PmtbConfUseNegWip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2advwipactentry(string $PmtbCon2AdvWipActEntry) Return the first ChildConfigPm filtered by the PmtbCon2AdvWipActEntry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2machlaborgl(string $PmtbCon2MachLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2MachLaborGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2machsetupgl(string $PmtbCon2MachSetupGl) Return the first ChildConfigPm filtered by the PmtbCon2MachSetupGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2burdenlaborgl(string $PmtbCon2BurdenLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenLaborGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2burdenmachgl(string $PmtbCon2BurdenMachGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenMachGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2burdenadmingl(string $PmtbCon2BurdenAdminGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenAdminGl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByPmtbcon2setupasoper(string $PmtbCon2SetupAsOper) Return the first ChildConfigPm filtered by the PmtbCon2SetupAsOper column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigPm filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigPm filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOneByDummy(string $dummy) Return the first ChildConfigPm filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigPm[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigPm objects based on current ModelCriteria
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfkey(int $PmtbConfKey) Return ChildConfigPm objects filtered by the PmtbConfKey column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfbasesystem(string $PmtbConfBaseSystem) Return ChildConfigPm objects filtered by the PmtbConfBaseSystem column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfadvancedsystem(string $PmtbConfAdvancedSystem) Return ChildConfigPm objects filtered by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfallowneguse(string $PmtbConfAllowNegUse) Return ChildConfigPm objects filtered by the PmtbConfAllowNegUse column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfscrapunused(string $PmtbConfScrapUnused) Return ChildConfigPm objects filtered by the PmtbConfScrapUnused column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfscrapgl(string $PmtbConfScrapGl) Return ChildConfigPm objects filtered by the PmtbConfScrapGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfwarnqtytozero(string $PmtbConfWarnQtyToZero) Return ChildConfigPm objects filtered by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfvargl(string $PmtbConfVarGl) Return ChildConfigPm objects filtered by the PmtbConfVarGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfputbincode(string $PmtbConfPutBinCode) Return ChildConfigPm objects filtered by the PmtbConfPutBinCode column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfputbindflt(string $PmtbConfPutBinDflt) Return ChildConfigPm objects filtered by the PmtbConfPutBinDflt column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfserialbase(string $PmtbConfSerialBase) Return ChildConfigPm objects filtered by the PmtbConfSerialBase column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconffgatstan(string $PmtbConfFgAtStan) Return ChildConfigPm objects filtered by the PmtbConfFgAtStan column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfglfgtomat(string $PmtbConfGlFgToMat) Return ChildConfigPm objects filtered by the PmtbConfGlFgToMat column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfpostdetsum(string $PmtbConfPostDetSum) Return ChildConfigPm objects filtered by the PmtbConfPostDetSum column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfsort(string $PmtbConfSort) Return ChildConfigPm objects filtered by the PmtbConfSort column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconflastcost(string $PmtbConfLastCost) Return ChildConfigPm objects filtered by the PmtbConfLastCost column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfaskbom(string $PmtbConfAskBom) Return ChildConfigPm objects filtered by the PmtbConfAskBom column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfdefbom(string $PmtbConfDefBom) Return ChildConfigPm objects filtered by the PmtbConfDefBom column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfautoselectlots(string $PmtbConfAutoSelectLots) Return ChildConfigPm objects filtered by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfallocwhenic(string $PmtbConfAllocWhenIC) Return ChildConfigPm objects filtered by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfusewpc(string $PmtbConfUseWpc) Return ChildConfigPm objects filtered by the PmtbConfUseWpc column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfpowgwipinproc(string $PmtbConfPowgWipInProc) Return ChildConfigPm objects filtered by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconflrscost(string $PmtbConfLrsCost) Return ChildConfigPm objects filtered by the PmtbConfLrsCost column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfvariacctg(string $PmtbConfVariAcctg) Return ChildConfigPm objects filtered by the PmtbConfVariAcctg column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconftakebincode(string $PmtbConfTakeBinCode) Return ChildConfigPm objects filtered by the PmtbConfTakeBinCode column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfusefguom(string $PmtbConfUseFgUom) Return ChildConfigPm objects filtered by the PmtbConfUseFgUom column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfusenc(string $PmtbConfUseNc) Return ChildConfigPm objects filtered by the PmtbConfUseNc column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbconfusenegwip(string $PmtbConfUseNegWip) Return ChildConfigPm objects filtered by the PmtbConfUseNegWip column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2advwipactentry(string $PmtbCon2AdvWipActEntry) Return ChildConfigPm objects filtered by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2machlaborgl(string $PmtbCon2MachLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2machsetupgl(string $PmtbCon2MachSetupGl) Return ChildConfigPm objects filtered by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2burdenlaborgl(string $PmtbCon2BurdenLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2burdenmachgl(string $PmtbCon2BurdenMachGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2burdenadmingl(string $PmtbCon2BurdenAdminGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPm[]|ObjectCollection findByPmtbcon2setupasoper(string $PmtbCon2SetupAsOper) Return ChildConfigPm objects filtered by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPm[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigPm objects filtered by the DateUpdtd column
 * @method     ChildConfigPm[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigPm objects filtered by the TimeUpdtd column
 * @method     ChildConfigPm[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigPm objects filtered by the dummy column
 * @method     ChildConfigPm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigPmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigPmQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigPm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigPmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigPmQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigPmQuery) {
            return $criteria;
        }
        $query = new ChildConfigPmQuery();
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
     * @return ChildConfigPm|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigPmTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigPm A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PmtbConfKey, PmtbConfBaseSystem, PmtbConfAdvancedSystem, PmtbConfAllowNegUse, PmtbConfScrapUnused, PmtbConfScrapGl, PmtbConfWarnQtyToZero, PmtbConfVarGl, PmtbConfPutBinCode, PmtbConfPutBinDflt, PmtbConfSerialBase, PmtbConfFgAtStan, PmtbConfGlFgToMat, PmtbConfPostDetSum, PmtbConfSort, PmtbConfLastCost, PmtbConfAskBom, PmtbConfDefBom, PmtbConfAutoSelectLots, PmtbConfAllocWhenIC, PmtbConfUseWpc, PmtbConfPowgWipInProc, PmtbConfLrsCost, PmtbConfVariAcctg, PmtbConfTakeBinCode, PmtbConfUseFgUom, PmtbConfUseNc, PmtbConfUseNegWip, PmtbCon2AdvWipActEntry, PmtbCon2MachLaborGl, PmtbCon2MachSetupGl, PmtbCon2BurdenLaborGl, PmtbCon2BurdenMachGl, PmtbCon2BurdenAdminGl, PmtbCon2SetupAsOper, DateUpdtd, TimeUpdtd, dummy FROM pm_config WHERE PmtbConfKey = :p0';
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
            /** @var ChildConfigPm $obj */
            $obj = new ChildConfigPm();
            $obj->hydrate($row);
            ConfigPmTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigPm|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PmtbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfkey(1234); // WHERE PmtbConfKey = 1234
     * $query->filterByPmtbconfkey(array(12, 34)); // WHERE PmtbConfKey IN (12, 34)
     * $query->filterByPmtbconfkey(array('min' => 12)); // WHERE PmtbConfKey > 12
     * </code>
     *
     * @param     mixed $pmtbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfkey($pmtbconfkey = null, $comparison = null)
    {
        if (is_array($pmtbconfkey)) {
            $useMinMax = false;
            if (isset($pmtbconfkey['min'])) {
                $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $pmtbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pmtbconfkey['max'])) {
                $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $pmtbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $pmtbconfkey, $comparison);
    }

    /**
     * Filter the query on the PmtbConfBaseSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfbasesystem('fooValue');   // WHERE PmtbConfBaseSystem = 'fooValue'
     * $query->filterByPmtbconfbasesystem('%fooValue%', Criteria::LIKE); // WHERE PmtbConfBaseSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfbasesystem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfbasesystem($pmtbconfbasesystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfbasesystem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM, $pmtbconfbasesystem, $comparison);
    }

    /**
     * Filter the query on the PmtbConfAdvancedSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfadvancedsystem('fooValue');   // WHERE PmtbConfAdvancedSystem = 'fooValue'
     * $query->filterByPmtbconfadvancedsystem('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAdvancedSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfadvancedsystem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfadvancedsystem($pmtbconfadvancedsystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfadvancedsystem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM, $pmtbconfadvancedsystem, $comparison);
    }

    /**
     * Filter the query on the PmtbConfAllowNegUse column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfallowneguse('fooValue');   // WHERE PmtbConfAllowNegUse = 'fooValue'
     * $query->filterByPmtbconfallowneguse('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAllowNegUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfallowneguse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfallowneguse($pmtbconfallowneguse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfallowneguse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE, $pmtbconfallowneguse, $comparison);
    }

    /**
     * Filter the query on the PmtbConfScrapUnused column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfscrapunused('fooValue');   // WHERE PmtbConfScrapUnused = 'fooValue'
     * $query->filterByPmtbconfscrapunused('%fooValue%', Criteria::LIKE); // WHERE PmtbConfScrapUnused LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfscrapunused The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfscrapunused($pmtbconfscrapunused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfscrapunused)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED, $pmtbconfscrapunused, $comparison);
    }

    /**
     * Filter the query on the PmtbConfScrapGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfscrapgl('fooValue');   // WHERE PmtbConfScrapGl = 'fooValue'
     * $query->filterByPmtbconfscrapgl('%fooValue%', Criteria::LIKE); // WHERE PmtbConfScrapGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfscrapgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfscrapgl($pmtbconfscrapgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfscrapgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSCRAPGL, $pmtbconfscrapgl, $comparison);
    }

    /**
     * Filter the query on the PmtbConfWarnQtyToZero column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfwarnqtytozero('fooValue');   // WHERE PmtbConfWarnQtyToZero = 'fooValue'
     * $query->filterByPmtbconfwarnqtytozero('%fooValue%', Criteria::LIKE); // WHERE PmtbConfWarnQtyToZero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfwarnqtytozero The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfwarnqtytozero($pmtbconfwarnqtytozero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfwarnqtytozero)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO, $pmtbconfwarnqtytozero, $comparison);
    }

    /**
     * Filter the query on the PmtbConfVarGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfvargl('fooValue');   // WHERE PmtbConfVarGl = 'fooValue'
     * $query->filterByPmtbconfvargl('%fooValue%', Criteria::LIKE); // WHERE PmtbConfVarGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfvargl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfvargl($pmtbconfvargl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfvargl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFVARGL, $pmtbconfvargl, $comparison);
    }

    /**
     * Filter the query on the PmtbConfPutBinCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfputbincode('fooValue');   // WHERE PmtbConfPutBinCode = 'fooValue'
     * $query->filterByPmtbconfputbincode('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPutBinCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfputbincode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfputbincode($pmtbconfputbincode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfputbincode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE, $pmtbconfputbincode, $comparison);
    }

    /**
     * Filter the query on the PmtbConfPutBinDflt column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfputbindflt('fooValue');   // WHERE PmtbConfPutBinDflt = 'fooValue'
     * $query->filterByPmtbconfputbindflt('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPutBinDflt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfputbindflt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfputbindflt($pmtbconfputbindflt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfputbindflt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT, $pmtbconfputbindflt, $comparison);
    }

    /**
     * Filter the query on the PmtbConfSerialBase column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfserialbase('fooValue');   // WHERE PmtbConfSerialBase = 'fooValue'
     * $query->filterByPmtbconfserialbase('%fooValue%', Criteria::LIKE); // WHERE PmtbConfSerialBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfserialbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfserialbase($pmtbconfserialbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfserialbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSERIALBASE, $pmtbconfserialbase, $comparison);
    }

    /**
     * Filter the query on the PmtbConfFgAtStan column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconffgatstan('fooValue');   // WHERE PmtbConfFgAtStan = 'fooValue'
     * $query->filterByPmtbconffgatstan('%fooValue%', Criteria::LIKE); // WHERE PmtbConfFgAtStan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconffgatstan The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconffgatstan($pmtbconffgatstan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconffgatstan)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFFGATSTAN, $pmtbconffgatstan, $comparison);
    }

    /**
     * Filter the query on the PmtbConfGlFgToMat column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfglfgtomat('fooValue');   // WHERE PmtbConfGlFgToMat = 'fooValue'
     * $query->filterByPmtbconfglfgtomat('%fooValue%', Criteria::LIKE); // WHERE PmtbConfGlFgToMat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfglfgtomat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfglfgtomat($pmtbconfglfgtomat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfglfgtomat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT, $pmtbconfglfgtomat, $comparison);
    }

    /**
     * Filter the query on the PmtbConfPostDetSum column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfpostdetsum('fooValue');   // WHERE PmtbConfPostDetSum = 'fooValue'
     * $query->filterByPmtbconfpostdetsum('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPostDetSum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfpostdetsum The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfpostdetsum($pmtbconfpostdetsum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfpostdetsum)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM, $pmtbconfpostdetsum, $comparison);
    }

    /**
     * Filter the query on the PmtbConfSort column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfsort('fooValue');   // WHERE PmtbConfSort = 'fooValue'
     * $query->filterByPmtbconfsort('%fooValue%', Criteria::LIKE); // WHERE PmtbConfSort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfsort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfsort($pmtbconfsort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfsort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSORT, $pmtbconfsort, $comparison);
    }

    /**
     * Filter the query on the PmtbConfLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconflastcost('fooValue');   // WHERE PmtbConfLastCost = 'fooValue'
     * $query->filterByPmtbconflastcost('%fooValue%', Criteria::LIKE); // WHERE PmtbConfLastCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconflastcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconflastcost($pmtbconflastcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconflastcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFLASTCOST, $pmtbconflastcost, $comparison);
    }

    /**
     * Filter the query on the PmtbConfAskBom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfaskbom('fooValue');   // WHERE PmtbConfAskBom = 'fooValue'
     * $query->filterByPmtbconfaskbom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAskBom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfaskbom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfaskbom($pmtbconfaskbom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfaskbom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFASKBOM, $pmtbconfaskbom, $comparison);
    }

    /**
     * Filter the query on the PmtbConfDefBom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfdefbom('fooValue');   // WHERE PmtbConfDefBom = 'fooValue'
     * $query->filterByPmtbconfdefbom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfDefBom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfdefbom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfdefbom($pmtbconfdefbom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfdefbom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFDEFBOM, $pmtbconfdefbom, $comparison);
    }

    /**
     * Filter the query on the PmtbConfAutoSelectLots column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfautoselectlots('fooValue');   // WHERE PmtbConfAutoSelectLots = 'fooValue'
     * $query->filterByPmtbconfautoselectlots('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAutoSelectLots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfautoselectlots The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfautoselectlots($pmtbconfautoselectlots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfautoselectlots)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS, $pmtbconfautoselectlots, $comparison);
    }

    /**
     * Filter the query on the PmtbConfAllocWhenIC column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfallocwhenic('fooValue');   // WHERE PmtbConfAllocWhenIC = 'fooValue'
     * $query->filterByPmtbconfallocwhenic('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAllocWhenIC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfallocwhenic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfallocwhenic($pmtbconfallocwhenic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfallocwhenic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC, $pmtbconfallocwhenic, $comparison);
    }

    /**
     * Filter the query on the PmtbConfUseWpc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusewpc('fooValue');   // WHERE PmtbConfUseWpc = 'fooValue'
     * $query->filterByPmtbconfusewpc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseWpc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfusewpc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfusewpc($pmtbconfusewpc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusewpc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSEWPC, $pmtbconfusewpc, $comparison);
    }

    /**
     * Filter the query on the PmtbConfPowgWipInProc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfpowgwipinproc('fooValue');   // WHERE PmtbConfPowgWipInProc = 'fooValue'
     * $query->filterByPmtbconfpowgwipinproc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPowgWipInProc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfpowgwipinproc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfpowgwipinproc($pmtbconfpowgwipinproc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfpowgwipinproc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC, $pmtbconfpowgwipinproc, $comparison);
    }

    /**
     * Filter the query on the PmtbConfLrsCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconflrscost('fooValue');   // WHERE PmtbConfLrsCost = 'fooValue'
     * $query->filterByPmtbconflrscost('%fooValue%', Criteria::LIKE); // WHERE PmtbConfLrsCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconflrscost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconflrscost($pmtbconflrscost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconflrscost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFLRSCOST, $pmtbconflrscost, $comparison);
    }

    /**
     * Filter the query on the PmtbConfVariAcctg column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfvariacctg('fooValue');   // WHERE PmtbConfVariAcctg = 'fooValue'
     * $query->filterByPmtbconfvariacctg('%fooValue%', Criteria::LIKE); // WHERE PmtbConfVariAcctg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfvariacctg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfvariacctg($pmtbconfvariacctg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfvariacctg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFVARIACCTG, $pmtbconfvariacctg, $comparison);
    }

    /**
     * Filter the query on the PmtbConfTakeBinCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconftakebincode('fooValue');   // WHERE PmtbConfTakeBinCode = 'fooValue'
     * $query->filterByPmtbconftakebincode('%fooValue%', Criteria::LIKE); // WHERE PmtbConfTakeBinCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconftakebincode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconftakebincode($pmtbconftakebincode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconftakebincode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE, $pmtbconftakebincode, $comparison);
    }

    /**
     * Filter the query on the PmtbConfUseFgUom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusefguom('fooValue');   // WHERE PmtbConfUseFgUom = 'fooValue'
     * $query->filterByPmtbconfusefguom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseFgUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfusefguom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfusefguom($pmtbconfusefguom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusefguom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM, $pmtbconfusefguom, $comparison);
    }

    /**
     * Filter the query on the PmtbConfUseNc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusenc('fooValue');   // WHERE PmtbConfUseNc = 'fooValue'
     * $query->filterByPmtbconfusenc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseNc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfusenc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfusenc($pmtbconfusenc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusenc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSENC, $pmtbconfusenc, $comparison);
    }

    /**
     * Filter the query on the PmtbConfUseNegWip column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusenegwip('fooValue');   // WHERE PmtbConfUseNegWip = 'fooValue'
     * $query->filterByPmtbconfusenegwip('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseNegWip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbconfusenegwip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbconfusenegwip($pmtbconfusenegwip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusenegwip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP, $pmtbconfusenegwip, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2AdvWipActEntry column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2advwipactentry('fooValue');   // WHERE PmtbCon2AdvWipActEntry = 'fooValue'
     * $query->filterByPmtbcon2advwipactentry('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2AdvWipActEntry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2advwipactentry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2advwipactentry($pmtbcon2advwipactentry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2advwipactentry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY, $pmtbcon2advwipactentry, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2MachLaborGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2machlaborgl('fooValue');   // WHERE PmtbCon2MachLaborGl = 'fooValue'
     * $query->filterByPmtbcon2machlaborgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2MachLaborGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2machlaborgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2machlaborgl($pmtbcon2machlaborgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2machlaborgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL, $pmtbcon2machlaborgl, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2MachSetupGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2machsetupgl('fooValue');   // WHERE PmtbCon2MachSetupGl = 'fooValue'
     * $query->filterByPmtbcon2machsetupgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2MachSetupGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2machsetupgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2machsetupgl($pmtbcon2machsetupgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2machsetupgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL, $pmtbcon2machsetupgl, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2BurdenLaborGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenlaborgl('fooValue');   // WHERE PmtbCon2BurdenLaborGl = 'fooValue'
     * $query->filterByPmtbcon2burdenlaborgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenLaborGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2burdenlaborgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenlaborgl($pmtbcon2burdenlaborgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenlaborgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL, $pmtbcon2burdenlaborgl, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2BurdenMachGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenmachgl('fooValue');   // WHERE PmtbCon2BurdenMachGl = 'fooValue'
     * $query->filterByPmtbcon2burdenmachgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenMachGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2burdenmachgl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenmachgl($pmtbcon2burdenmachgl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenmachgl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL, $pmtbcon2burdenmachgl, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2BurdenAdminGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenadmingl('fooValue');   // WHERE PmtbCon2BurdenAdminGl = 'fooValue'
     * $query->filterByPmtbcon2burdenadmingl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenAdminGl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2burdenadmingl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenadmingl($pmtbcon2burdenadmingl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenadmingl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL, $pmtbcon2burdenadmingl, $comparison);
    }

    /**
     * Filter the query on the PmtbCon2SetupAsOper column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2setupasoper('fooValue');   // WHERE PmtbCon2SetupAsOper = 'fooValue'
     * $query->filterByPmtbcon2setupasoper('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2SetupAsOper LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbcon2setupasoper The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByPmtbcon2setupasoper($pmtbcon2setupasoper = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2setupasoper)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER, $pmtbcon2setupasoper, $comparison);
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
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigPmTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigPm $configPm Object to remove from the list of results
     *
     * @return $this|ChildConfigPmQuery The current query, for fluid interface
     */
    public function prune($configPm = null)
    {
        if ($configPm) {
            $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $configPm->getPmtbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pm_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigPmTableMap::clearInstancePool();
            ConfigPmTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigPmTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigPmTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigPmTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigPmTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigPmQuery
