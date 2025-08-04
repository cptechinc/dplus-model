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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `pm_config` table.
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
 * @method     ChildConfigPm|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigPm matching the query
 * @method     ChildConfigPm findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigPm matching the query, or a new ChildConfigPm object populated from the query conditions when no match is found
 *
 * @method     ChildConfigPm|null findOneByPmtbconfkey(int $PmtbConfKey) Return the first ChildConfigPm filtered by the PmtbConfKey column
 * @method     ChildConfigPm|null findOneByPmtbconfbasesystem(string $PmtbConfBaseSystem) Return the first ChildConfigPm filtered by the PmtbConfBaseSystem column
 * @method     ChildConfigPm|null findOneByPmtbconfadvancedsystem(string $PmtbConfAdvancedSystem) Return the first ChildConfigPm filtered by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPm|null findOneByPmtbconfallowneguse(string $PmtbConfAllowNegUse) Return the first ChildConfigPm filtered by the PmtbConfAllowNegUse column
 * @method     ChildConfigPm|null findOneByPmtbconfscrapunused(string $PmtbConfScrapUnused) Return the first ChildConfigPm filtered by the PmtbConfScrapUnused column
 * @method     ChildConfigPm|null findOneByPmtbconfscrapgl(string $PmtbConfScrapGl) Return the first ChildConfigPm filtered by the PmtbConfScrapGl column
 * @method     ChildConfigPm|null findOneByPmtbconfwarnqtytozero(string $PmtbConfWarnQtyToZero) Return the first ChildConfigPm filtered by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPm|null findOneByPmtbconfvargl(string $PmtbConfVarGl) Return the first ChildConfigPm filtered by the PmtbConfVarGl column
 * @method     ChildConfigPm|null findOneByPmtbconfputbincode(string $PmtbConfPutBinCode) Return the first ChildConfigPm filtered by the PmtbConfPutBinCode column
 * @method     ChildConfigPm|null findOneByPmtbconfputbindflt(string $PmtbConfPutBinDflt) Return the first ChildConfigPm filtered by the PmtbConfPutBinDflt column
 * @method     ChildConfigPm|null findOneByPmtbconfserialbase(string $PmtbConfSerialBase) Return the first ChildConfigPm filtered by the PmtbConfSerialBase column
 * @method     ChildConfigPm|null findOneByPmtbconffgatstan(string $PmtbConfFgAtStan) Return the first ChildConfigPm filtered by the PmtbConfFgAtStan column
 * @method     ChildConfigPm|null findOneByPmtbconfglfgtomat(string $PmtbConfGlFgToMat) Return the first ChildConfigPm filtered by the PmtbConfGlFgToMat column
 * @method     ChildConfigPm|null findOneByPmtbconfpostdetsum(string $PmtbConfPostDetSum) Return the first ChildConfigPm filtered by the PmtbConfPostDetSum column
 * @method     ChildConfigPm|null findOneByPmtbconfsort(string $PmtbConfSort) Return the first ChildConfigPm filtered by the PmtbConfSort column
 * @method     ChildConfigPm|null findOneByPmtbconflastcost(string $PmtbConfLastCost) Return the first ChildConfigPm filtered by the PmtbConfLastCost column
 * @method     ChildConfigPm|null findOneByPmtbconfaskbom(string $PmtbConfAskBom) Return the first ChildConfigPm filtered by the PmtbConfAskBom column
 * @method     ChildConfigPm|null findOneByPmtbconfdefbom(string $PmtbConfDefBom) Return the first ChildConfigPm filtered by the PmtbConfDefBom column
 * @method     ChildConfigPm|null findOneByPmtbconfautoselectlots(string $PmtbConfAutoSelectLots) Return the first ChildConfigPm filtered by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPm|null findOneByPmtbconfallocwhenic(string $PmtbConfAllocWhenIC) Return the first ChildConfigPm filtered by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPm|null findOneByPmtbconfusewpc(string $PmtbConfUseWpc) Return the first ChildConfigPm filtered by the PmtbConfUseWpc column
 * @method     ChildConfigPm|null findOneByPmtbconfpowgwipinproc(string $PmtbConfPowgWipInProc) Return the first ChildConfigPm filtered by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPm|null findOneByPmtbconflrscost(string $PmtbConfLrsCost) Return the first ChildConfigPm filtered by the PmtbConfLrsCost column
 * @method     ChildConfigPm|null findOneByPmtbconfvariacctg(string $PmtbConfVariAcctg) Return the first ChildConfigPm filtered by the PmtbConfVariAcctg column
 * @method     ChildConfigPm|null findOneByPmtbconftakebincode(string $PmtbConfTakeBinCode) Return the first ChildConfigPm filtered by the PmtbConfTakeBinCode column
 * @method     ChildConfigPm|null findOneByPmtbconfusefguom(string $PmtbConfUseFgUom) Return the first ChildConfigPm filtered by the PmtbConfUseFgUom column
 * @method     ChildConfigPm|null findOneByPmtbconfusenc(string $PmtbConfUseNc) Return the first ChildConfigPm filtered by the PmtbConfUseNc column
 * @method     ChildConfigPm|null findOneByPmtbconfusenegwip(string $PmtbConfUseNegWip) Return the first ChildConfigPm filtered by the PmtbConfUseNegWip column
 * @method     ChildConfigPm|null findOneByPmtbcon2advwipactentry(string $PmtbCon2AdvWipActEntry) Return the first ChildConfigPm filtered by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPm|null findOneByPmtbcon2machlaborgl(string $PmtbCon2MachLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPm|null findOneByPmtbcon2machsetupgl(string $PmtbCon2MachSetupGl) Return the first ChildConfigPm filtered by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPm|null findOneByPmtbcon2burdenlaborgl(string $PmtbCon2BurdenLaborGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPm|null findOneByPmtbcon2burdenmachgl(string $PmtbCon2BurdenMachGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPm|null findOneByPmtbcon2burdenadmingl(string $PmtbCon2BurdenAdminGl) Return the first ChildConfigPm filtered by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPm|null findOneByPmtbcon2setupasoper(string $PmtbCon2SetupAsOper) Return the first ChildConfigPm filtered by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPm|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigPm filtered by the DateUpdtd column
 * @method     ChildConfigPm|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigPm filtered by the TimeUpdtd column
 * @method     ChildConfigPm|null findOneByDummy(string $dummy) Return the first ChildConfigPm filtered by the dummy column
 *
 * @method     ChildConfigPm requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigPm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigPm requireOne(?ConnectionInterface $con = null) Return the first ChildConfigPm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigPm[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigPm objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigPm> find(?ConnectionInterface $con = null) Return ChildConfigPm objects based on current ModelCriteria
 *
 * @method     ChildConfigPm[]|Collection findByPmtbconfkey(int|array<int> $PmtbConfKey) Return ChildConfigPm objects filtered by the PmtbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfkey(int|array<int> $PmtbConfKey) Return ChildConfigPm objects filtered by the PmtbConfKey column
 * @method     ChildConfigPm[]|Collection findByPmtbconfbasesystem(string|array<string> $PmtbConfBaseSystem) Return ChildConfigPm objects filtered by the PmtbConfBaseSystem column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfbasesystem(string|array<string> $PmtbConfBaseSystem) Return ChildConfigPm objects filtered by the PmtbConfBaseSystem column
 * @method     ChildConfigPm[]|Collection findByPmtbconfadvancedsystem(string|array<string> $PmtbConfAdvancedSystem) Return ChildConfigPm objects filtered by the PmtbConfAdvancedSystem column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfadvancedsystem(string|array<string> $PmtbConfAdvancedSystem) Return ChildConfigPm objects filtered by the PmtbConfAdvancedSystem column
 * @method     ChildConfigPm[]|Collection findByPmtbconfallowneguse(string|array<string> $PmtbConfAllowNegUse) Return ChildConfigPm objects filtered by the PmtbConfAllowNegUse column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfallowneguse(string|array<string> $PmtbConfAllowNegUse) Return ChildConfigPm objects filtered by the PmtbConfAllowNegUse column
 * @method     ChildConfigPm[]|Collection findByPmtbconfscrapunused(string|array<string> $PmtbConfScrapUnused) Return ChildConfigPm objects filtered by the PmtbConfScrapUnused column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfscrapunused(string|array<string> $PmtbConfScrapUnused) Return ChildConfigPm objects filtered by the PmtbConfScrapUnused column
 * @method     ChildConfigPm[]|Collection findByPmtbconfscrapgl(string|array<string> $PmtbConfScrapGl) Return ChildConfigPm objects filtered by the PmtbConfScrapGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfscrapgl(string|array<string> $PmtbConfScrapGl) Return ChildConfigPm objects filtered by the PmtbConfScrapGl column
 * @method     ChildConfigPm[]|Collection findByPmtbconfwarnqtytozero(string|array<string> $PmtbConfWarnQtyToZero) Return ChildConfigPm objects filtered by the PmtbConfWarnQtyToZero column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfwarnqtytozero(string|array<string> $PmtbConfWarnQtyToZero) Return ChildConfigPm objects filtered by the PmtbConfWarnQtyToZero column
 * @method     ChildConfigPm[]|Collection findByPmtbconfvargl(string|array<string> $PmtbConfVarGl) Return ChildConfigPm objects filtered by the PmtbConfVarGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfvargl(string|array<string> $PmtbConfVarGl) Return ChildConfigPm objects filtered by the PmtbConfVarGl column
 * @method     ChildConfigPm[]|Collection findByPmtbconfputbincode(string|array<string> $PmtbConfPutBinCode) Return ChildConfigPm objects filtered by the PmtbConfPutBinCode column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfputbincode(string|array<string> $PmtbConfPutBinCode) Return ChildConfigPm objects filtered by the PmtbConfPutBinCode column
 * @method     ChildConfigPm[]|Collection findByPmtbconfputbindflt(string|array<string> $PmtbConfPutBinDflt) Return ChildConfigPm objects filtered by the PmtbConfPutBinDflt column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfputbindflt(string|array<string> $PmtbConfPutBinDflt) Return ChildConfigPm objects filtered by the PmtbConfPutBinDflt column
 * @method     ChildConfigPm[]|Collection findByPmtbconfserialbase(string|array<string> $PmtbConfSerialBase) Return ChildConfigPm objects filtered by the PmtbConfSerialBase column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfserialbase(string|array<string> $PmtbConfSerialBase) Return ChildConfigPm objects filtered by the PmtbConfSerialBase column
 * @method     ChildConfigPm[]|Collection findByPmtbconffgatstan(string|array<string> $PmtbConfFgAtStan) Return ChildConfigPm objects filtered by the PmtbConfFgAtStan column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconffgatstan(string|array<string> $PmtbConfFgAtStan) Return ChildConfigPm objects filtered by the PmtbConfFgAtStan column
 * @method     ChildConfigPm[]|Collection findByPmtbconfglfgtomat(string|array<string> $PmtbConfGlFgToMat) Return ChildConfigPm objects filtered by the PmtbConfGlFgToMat column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfglfgtomat(string|array<string> $PmtbConfGlFgToMat) Return ChildConfigPm objects filtered by the PmtbConfGlFgToMat column
 * @method     ChildConfigPm[]|Collection findByPmtbconfpostdetsum(string|array<string> $PmtbConfPostDetSum) Return ChildConfigPm objects filtered by the PmtbConfPostDetSum column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfpostdetsum(string|array<string> $PmtbConfPostDetSum) Return ChildConfigPm objects filtered by the PmtbConfPostDetSum column
 * @method     ChildConfigPm[]|Collection findByPmtbconfsort(string|array<string> $PmtbConfSort) Return ChildConfigPm objects filtered by the PmtbConfSort column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfsort(string|array<string> $PmtbConfSort) Return ChildConfigPm objects filtered by the PmtbConfSort column
 * @method     ChildConfigPm[]|Collection findByPmtbconflastcost(string|array<string> $PmtbConfLastCost) Return ChildConfigPm objects filtered by the PmtbConfLastCost column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconflastcost(string|array<string> $PmtbConfLastCost) Return ChildConfigPm objects filtered by the PmtbConfLastCost column
 * @method     ChildConfigPm[]|Collection findByPmtbconfaskbom(string|array<string> $PmtbConfAskBom) Return ChildConfigPm objects filtered by the PmtbConfAskBom column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfaskbom(string|array<string> $PmtbConfAskBom) Return ChildConfigPm objects filtered by the PmtbConfAskBom column
 * @method     ChildConfigPm[]|Collection findByPmtbconfdefbom(string|array<string> $PmtbConfDefBom) Return ChildConfigPm objects filtered by the PmtbConfDefBom column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfdefbom(string|array<string> $PmtbConfDefBom) Return ChildConfigPm objects filtered by the PmtbConfDefBom column
 * @method     ChildConfigPm[]|Collection findByPmtbconfautoselectlots(string|array<string> $PmtbConfAutoSelectLots) Return ChildConfigPm objects filtered by the PmtbConfAutoSelectLots column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfautoselectlots(string|array<string> $PmtbConfAutoSelectLots) Return ChildConfigPm objects filtered by the PmtbConfAutoSelectLots column
 * @method     ChildConfigPm[]|Collection findByPmtbconfallocwhenic(string|array<string> $PmtbConfAllocWhenIC) Return ChildConfigPm objects filtered by the PmtbConfAllocWhenIC column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfallocwhenic(string|array<string> $PmtbConfAllocWhenIC) Return ChildConfigPm objects filtered by the PmtbConfAllocWhenIC column
 * @method     ChildConfigPm[]|Collection findByPmtbconfusewpc(string|array<string> $PmtbConfUseWpc) Return ChildConfigPm objects filtered by the PmtbConfUseWpc column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfusewpc(string|array<string> $PmtbConfUseWpc) Return ChildConfigPm objects filtered by the PmtbConfUseWpc column
 * @method     ChildConfigPm[]|Collection findByPmtbconfpowgwipinproc(string|array<string> $PmtbConfPowgWipInProc) Return ChildConfigPm objects filtered by the PmtbConfPowgWipInProc column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfpowgwipinproc(string|array<string> $PmtbConfPowgWipInProc) Return ChildConfigPm objects filtered by the PmtbConfPowgWipInProc column
 * @method     ChildConfigPm[]|Collection findByPmtbconflrscost(string|array<string> $PmtbConfLrsCost) Return ChildConfigPm objects filtered by the PmtbConfLrsCost column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconflrscost(string|array<string> $PmtbConfLrsCost) Return ChildConfigPm objects filtered by the PmtbConfLrsCost column
 * @method     ChildConfigPm[]|Collection findByPmtbconfvariacctg(string|array<string> $PmtbConfVariAcctg) Return ChildConfigPm objects filtered by the PmtbConfVariAcctg column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfvariacctg(string|array<string> $PmtbConfVariAcctg) Return ChildConfigPm objects filtered by the PmtbConfVariAcctg column
 * @method     ChildConfigPm[]|Collection findByPmtbconftakebincode(string|array<string> $PmtbConfTakeBinCode) Return ChildConfigPm objects filtered by the PmtbConfTakeBinCode column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconftakebincode(string|array<string> $PmtbConfTakeBinCode) Return ChildConfigPm objects filtered by the PmtbConfTakeBinCode column
 * @method     ChildConfigPm[]|Collection findByPmtbconfusefguom(string|array<string> $PmtbConfUseFgUom) Return ChildConfigPm objects filtered by the PmtbConfUseFgUom column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfusefguom(string|array<string> $PmtbConfUseFgUom) Return ChildConfigPm objects filtered by the PmtbConfUseFgUom column
 * @method     ChildConfigPm[]|Collection findByPmtbconfusenc(string|array<string> $PmtbConfUseNc) Return ChildConfigPm objects filtered by the PmtbConfUseNc column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfusenc(string|array<string> $PmtbConfUseNc) Return ChildConfigPm objects filtered by the PmtbConfUseNc column
 * @method     ChildConfigPm[]|Collection findByPmtbconfusenegwip(string|array<string> $PmtbConfUseNegWip) Return ChildConfigPm objects filtered by the PmtbConfUseNegWip column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbconfusenegwip(string|array<string> $PmtbConfUseNegWip) Return ChildConfigPm objects filtered by the PmtbConfUseNegWip column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2advwipactentry(string|array<string> $PmtbCon2AdvWipActEntry) Return ChildConfigPm objects filtered by the PmtbCon2AdvWipActEntry column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2advwipactentry(string|array<string> $PmtbCon2AdvWipActEntry) Return ChildConfigPm objects filtered by the PmtbCon2AdvWipActEntry column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2machlaborgl(string|array<string> $PmtbCon2MachLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2MachLaborGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2machlaborgl(string|array<string> $PmtbCon2MachLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2MachLaborGl column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2machsetupgl(string|array<string> $PmtbCon2MachSetupGl) Return ChildConfigPm objects filtered by the PmtbCon2MachSetupGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2machsetupgl(string|array<string> $PmtbCon2MachSetupGl) Return ChildConfigPm objects filtered by the PmtbCon2MachSetupGl column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2burdenlaborgl(string|array<string> $PmtbCon2BurdenLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenLaborGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2burdenlaborgl(string|array<string> $PmtbCon2BurdenLaborGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenLaborGl column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2burdenmachgl(string|array<string> $PmtbCon2BurdenMachGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenMachGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2burdenmachgl(string|array<string> $PmtbCon2BurdenMachGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenMachGl column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2burdenadmingl(string|array<string> $PmtbCon2BurdenAdminGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenAdminGl column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2burdenadmingl(string|array<string> $PmtbCon2BurdenAdminGl) Return ChildConfigPm objects filtered by the PmtbCon2BurdenAdminGl column
 * @method     ChildConfigPm[]|Collection findByPmtbcon2setupasoper(string|array<string> $PmtbCon2SetupAsOper) Return ChildConfigPm objects filtered by the PmtbCon2SetupAsOper column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByPmtbcon2setupasoper(string|array<string> $PmtbCon2SetupAsOper) Return ChildConfigPm objects filtered by the PmtbCon2SetupAsOper column
 * @method     ChildConfigPm[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigPm objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigPm objects filtered by the DateUpdtd column
 * @method     ChildConfigPm[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigPm objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigPm objects filtered by the TimeUpdtd column
 * @method     ChildConfigPm[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigPm objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigPm> findByDummy(string|array<string> $dummy) Return ChildConfigPm objects filtered by the dummy column
 *
 * @method     ChildConfigPm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigPm> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigPmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigPmQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigPm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigPmQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigPmQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $keys, Criteria::IN);

        return $this;
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
     * @param mixed $pmtbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfkey($pmtbconfkey = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFKEY, $pmtbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfBaseSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfbasesystem('fooValue');   // WHERE PmtbConfBaseSystem = 'fooValue'
     * $query->filterByPmtbconfbasesystem('%fooValue%', Criteria::LIKE); // WHERE PmtbConfBaseSystem LIKE '%fooValue%'
     * $query->filterByPmtbconfbasesystem(['foo', 'bar']); // WHERE PmtbConfBaseSystem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfbasesystem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfbasesystem($pmtbconfbasesystem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfbasesystem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFBASESYSTEM, $pmtbconfbasesystem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfAdvancedSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfadvancedsystem('fooValue');   // WHERE PmtbConfAdvancedSystem = 'fooValue'
     * $query->filterByPmtbconfadvancedsystem('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAdvancedSystem LIKE '%fooValue%'
     * $query->filterByPmtbconfadvancedsystem(['foo', 'bar']); // WHERE PmtbConfAdvancedSystem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfadvancedsystem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfadvancedsystem($pmtbconfadvancedsystem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfadvancedsystem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFADVANCEDSYSTEM, $pmtbconfadvancedsystem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfAllowNegUse column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfallowneguse('fooValue');   // WHERE PmtbConfAllowNegUse = 'fooValue'
     * $query->filterByPmtbconfallowneguse('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAllowNegUse LIKE '%fooValue%'
     * $query->filterByPmtbconfallowneguse(['foo', 'bar']); // WHERE PmtbConfAllowNegUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfallowneguse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfallowneguse($pmtbconfallowneguse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfallowneguse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFALLOWNEGUSE, $pmtbconfallowneguse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfScrapUnused column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfscrapunused('fooValue');   // WHERE PmtbConfScrapUnused = 'fooValue'
     * $query->filterByPmtbconfscrapunused('%fooValue%', Criteria::LIKE); // WHERE PmtbConfScrapUnused LIKE '%fooValue%'
     * $query->filterByPmtbconfscrapunused(['foo', 'bar']); // WHERE PmtbConfScrapUnused IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfscrapunused The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfscrapunused($pmtbconfscrapunused = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfscrapunused)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSCRAPUNUSED, $pmtbconfscrapunused, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfScrapGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfscrapgl('fooValue');   // WHERE PmtbConfScrapGl = 'fooValue'
     * $query->filterByPmtbconfscrapgl('%fooValue%', Criteria::LIKE); // WHERE PmtbConfScrapGl LIKE '%fooValue%'
     * $query->filterByPmtbconfscrapgl(['foo', 'bar']); // WHERE PmtbConfScrapGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfscrapgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfscrapgl($pmtbconfscrapgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfscrapgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSCRAPGL, $pmtbconfscrapgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfWarnQtyToZero column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfwarnqtytozero('fooValue');   // WHERE PmtbConfWarnQtyToZero = 'fooValue'
     * $query->filterByPmtbconfwarnqtytozero('%fooValue%', Criteria::LIKE); // WHERE PmtbConfWarnQtyToZero LIKE '%fooValue%'
     * $query->filterByPmtbconfwarnqtytozero(['foo', 'bar']); // WHERE PmtbConfWarnQtyToZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfwarnqtytozero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfwarnqtytozero($pmtbconfwarnqtytozero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfwarnqtytozero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFWARNQTYTOZERO, $pmtbconfwarnqtytozero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfVarGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfvargl('fooValue');   // WHERE PmtbConfVarGl = 'fooValue'
     * $query->filterByPmtbconfvargl('%fooValue%', Criteria::LIKE); // WHERE PmtbConfVarGl LIKE '%fooValue%'
     * $query->filterByPmtbconfvargl(['foo', 'bar']); // WHERE PmtbConfVarGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfvargl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfvargl($pmtbconfvargl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfvargl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFVARGL, $pmtbconfvargl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfPutBinCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfputbincode('fooValue');   // WHERE PmtbConfPutBinCode = 'fooValue'
     * $query->filterByPmtbconfputbincode('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPutBinCode LIKE '%fooValue%'
     * $query->filterByPmtbconfputbincode(['foo', 'bar']); // WHERE PmtbConfPutBinCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfputbincode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfputbincode($pmtbconfputbincode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfputbincode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPUTBINCODE, $pmtbconfputbincode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfPutBinDflt column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfputbindflt('fooValue');   // WHERE PmtbConfPutBinDflt = 'fooValue'
     * $query->filterByPmtbconfputbindflt('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPutBinDflt LIKE '%fooValue%'
     * $query->filterByPmtbconfputbindflt(['foo', 'bar']); // WHERE PmtbConfPutBinDflt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfputbindflt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfputbindflt($pmtbconfputbindflt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfputbindflt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPUTBINDFLT, $pmtbconfputbindflt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfSerialBase column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfserialbase('fooValue');   // WHERE PmtbConfSerialBase = 'fooValue'
     * $query->filterByPmtbconfserialbase('%fooValue%', Criteria::LIKE); // WHERE PmtbConfSerialBase LIKE '%fooValue%'
     * $query->filterByPmtbconfserialbase(['foo', 'bar']); // WHERE PmtbConfSerialBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfserialbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfserialbase($pmtbconfserialbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfserialbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSERIALBASE, $pmtbconfserialbase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfFgAtStan column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconffgatstan('fooValue');   // WHERE PmtbConfFgAtStan = 'fooValue'
     * $query->filterByPmtbconffgatstan('%fooValue%', Criteria::LIKE); // WHERE PmtbConfFgAtStan LIKE '%fooValue%'
     * $query->filterByPmtbconffgatstan(['foo', 'bar']); // WHERE PmtbConfFgAtStan IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconffgatstan The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconffgatstan($pmtbconffgatstan = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconffgatstan)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFFGATSTAN, $pmtbconffgatstan, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfGlFgToMat column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfglfgtomat('fooValue');   // WHERE PmtbConfGlFgToMat = 'fooValue'
     * $query->filterByPmtbconfglfgtomat('%fooValue%', Criteria::LIKE); // WHERE PmtbConfGlFgToMat LIKE '%fooValue%'
     * $query->filterByPmtbconfglfgtomat(['foo', 'bar']); // WHERE PmtbConfGlFgToMat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfglfgtomat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfglfgtomat($pmtbconfglfgtomat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfglfgtomat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFGLFGTOMAT, $pmtbconfglfgtomat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfPostDetSum column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfpostdetsum('fooValue');   // WHERE PmtbConfPostDetSum = 'fooValue'
     * $query->filterByPmtbconfpostdetsum('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPostDetSum LIKE '%fooValue%'
     * $query->filterByPmtbconfpostdetsum(['foo', 'bar']); // WHERE PmtbConfPostDetSum IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfpostdetsum The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfpostdetsum($pmtbconfpostdetsum = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfpostdetsum)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPOSTDETSUM, $pmtbconfpostdetsum, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfSort column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfsort('fooValue');   // WHERE PmtbConfSort = 'fooValue'
     * $query->filterByPmtbconfsort('%fooValue%', Criteria::LIKE); // WHERE PmtbConfSort LIKE '%fooValue%'
     * $query->filterByPmtbconfsort(['foo', 'bar']); // WHERE PmtbConfSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfsort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfsort($pmtbconfsort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfsort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFSORT, $pmtbconfsort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconflastcost('fooValue');   // WHERE PmtbConfLastCost = 'fooValue'
     * $query->filterByPmtbconflastcost('%fooValue%', Criteria::LIKE); // WHERE PmtbConfLastCost LIKE '%fooValue%'
     * $query->filterByPmtbconflastcost(['foo', 'bar']); // WHERE PmtbConfLastCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconflastcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconflastcost($pmtbconflastcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconflastcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFLASTCOST, $pmtbconflastcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfAskBom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfaskbom('fooValue');   // WHERE PmtbConfAskBom = 'fooValue'
     * $query->filterByPmtbconfaskbom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAskBom LIKE '%fooValue%'
     * $query->filterByPmtbconfaskbom(['foo', 'bar']); // WHERE PmtbConfAskBom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfaskbom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfaskbom($pmtbconfaskbom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfaskbom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFASKBOM, $pmtbconfaskbom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfDefBom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfdefbom('fooValue');   // WHERE PmtbConfDefBom = 'fooValue'
     * $query->filterByPmtbconfdefbom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfDefBom LIKE '%fooValue%'
     * $query->filterByPmtbconfdefbom(['foo', 'bar']); // WHERE PmtbConfDefBom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfdefbom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfdefbom($pmtbconfdefbom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfdefbom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFDEFBOM, $pmtbconfdefbom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfAutoSelectLots column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfautoselectlots('fooValue');   // WHERE PmtbConfAutoSelectLots = 'fooValue'
     * $query->filterByPmtbconfautoselectlots('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAutoSelectLots LIKE '%fooValue%'
     * $query->filterByPmtbconfautoselectlots(['foo', 'bar']); // WHERE PmtbConfAutoSelectLots IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfautoselectlots The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfautoselectlots($pmtbconfautoselectlots = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfautoselectlots)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFAUTOSELECTLOTS, $pmtbconfautoselectlots, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfAllocWhenIC column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfallocwhenic('fooValue');   // WHERE PmtbConfAllocWhenIC = 'fooValue'
     * $query->filterByPmtbconfallocwhenic('%fooValue%', Criteria::LIKE); // WHERE PmtbConfAllocWhenIC LIKE '%fooValue%'
     * $query->filterByPmtbconfallocwhenic(['foo', 'bar']); // WHERE PmtbConfAllocWhenIC IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfallocwhenic The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfallocwhenic($pmtbconfallocwhenic = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfallocwhenic)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFALLOCWHENIC, $pmtbconfallocwhenic, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfUseWpc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusewpc('fooValue');   // WHERE PmtbConfUseWpc = 'fooValue'
     * $query->filterByPmtbconfusewpc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseWpc LIKE '%fooValue%'
     * $query->filterByPmtbconfusewpc(['foo', 'bar']); // WHERE PmtbConfUseWpc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfusewpc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfusewpc($pmtbconfusewpc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusewpc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSEWPC, $pmtbconfusewpc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfPowgWipInProc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfpowgwipinproc('fooValue');   // WHERE PmtbConfPowgWipInProc = 'fooValue'
     * $query->filterByPmtbconfpowgwipinproc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfPowgWipInProc LIKE '%fooValue%'
     * $query->filterByPmtbconfpowgwipinproc(['foo', 'bar']); // WHERE PmtbConfPowgWipInProc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfpowgwipinproc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfpowgwipinproc($pmtbconfpowgwipinproc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfpowgwipinproc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFPOWGWIPINPROC, $pmtbconfpowgwipinproc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfLrsCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconflrscost('fooValue');   // WHERE PmtbConfLrsCost = 'fooValue'
     * $query->filterByPmtbconflrscost('%fooValue%', Criteria::LIKE); // WHERE PmtbConfLrsCost LIKE '%fooValue%'
     * $query->filterByPmtbconflrscost(['foo', 'bar']); // WHERE PmtbConfLrsCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconflrscost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconflrscost($pmtbconflrscost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconflrscost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFLRSCOST, $pmtbconflrscost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfVariAcctg column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfvariacctg('fooValue');   // WHERE PmtbConfVariAcctg = 'fooValue'
     * $query->filterByPmtbconfvariacctg('%fooValue%', Criteria::LIKE); // WHERE PmtbConfVariAcctg LIKE '%fooValue%'
     * $query->filterByPmtbconfvariacctg(['foo', 'bar']); // WHERE PmtbConfVariAcctg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfvariacctg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfvariacctg($pmtbconfvariacctg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfvariacctg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFVARIACCTG, $pmtbconfvariacctg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfTakeBinCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconftakebincode('fooValue');   // WHERE PmtbConfTakeBinCode = 'fooValue'
     * $query->filterByPmtbconftakebincode('%fooValue%', Criteria::LIKE); // WHERE PmtbConfTakeBinCode LIKE '%fooValue%'
     * $query->filterByPmtbconftakebincode(['foo', 'bar']); // WHERE PmtbConfTakeBinCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconftakebincode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconftakebincode($pmtbconftakebincode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconftakebincode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFTAKEBINCODE, $pmtbconftakebincode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfUseFgUom column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusefguom('fooValue');   // WHERE PmtbConfUseFgUom = 'fooValue'
     * $query->filterByPmtbconfusefguom('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseFgUom LIKE '%fooValue%'
     * $query->filterByPmtbconfusefguom(['foo', 'bar']); // WHERE PmtbConfUseFgUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfusefguom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfusefguom($pmtbconfusefguom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusefguom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSEFGUOM, $pmtbconfusefguom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfUseNc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusenc('fooValue');   // WHERE PmtbConfUseNc = 'fooValue'
     * $query->filterByPmtbconfusenc('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseNc LIKE '%fooValue%'
     * $query->filterByPmtbconfusenc(['foo', 'bar']); // WHERE PmtbConfUseNc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfusenc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfusenc($pmtbconfusenc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusenc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSENC, $pmtbconfusenc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbConfUseNegWip column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbconfusenegwip('fooValue');   // WHERE PmtbConfUseNegWip = 'fooValue'
     * $query->filterByPmtbconfusenegwip('%fooValue%', Criteria::LIKE); // WHERE PmtbConfUseNegWip LIKE '%fooValue%'
     * $query->filterByPmtbconfusenegwip(['foo', 'bar']); // WHERE PmtbConfUseNegWip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbconfusenegwip The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbconfusenegwip($pmtbconfusenegwip = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbconfusenegwip)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCONFUSENEGWIP, $pmtbconfusenegwip, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2AdvWipActEntry column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2advwipactentry('fooValue');   // WHERE PmtbCon2AdvWipActEntry = 'fooValue'
     * $query->filterByPmtbcon2advwipactentry('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2AdvWipActEntry LIKE '%fooValue%'
     * $query->filterByPmtbcon2advwipactentry(['foo', 'bar']); // WHERE PmtbCon2AdvWipActEntry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2advwipactentry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2advwipactentry($pmtbcon2advwipactentry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2advwipactentry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2ADVWIPACTENTRY, $pmtbcon2advwipactentry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2MachLaborGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2machlaborgl('fooValue');   // WHERE PmtbCon2MachLaborGl = 'fooValue'
     * $query->filterByPmtbcon2machlaborgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2MachLaborGl LIKE '%fooValue%'
     * $query->filterByPmtbcon2machlaborgl(['foo', 'bar']); // WHERE PmtbCon2MachLaborGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2machlaborgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2machlaborgl($pmtbcon2machlaborgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2machlaborgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2MACHLABORGL, $pmtbcon2machlaborgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2MachSetupGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2machsetupgl('fooValue');   // WHERE PmtbCon2MachSetupGl = 'fooValue'
     * $query->filterByPmtbcon2machsetupgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2MachSetupGl LIKE '%fooValue%'
     * $query->filterByPmtbcon2machsetupgl(['foo', 'bar']); // WHERE PmtbCon2MachSetupGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2machsetupgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2machsetupgl($pmtbcon2machsetupgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2machsetupgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2MACHSETUPGL, $pmtbcon2machsetupgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2BurdenLaborGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenlaborgl('fooValue');   // WHERE PmtbCon2BurdenLaborGl = 'fooValue'
     * $query->filterByPmtbcon2burdenlaborgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenLaborGl LIKE '%fooValue%'
     * $query->filterByPmtbcon2burdenlaborgl(['foo', 'bar']); // WHERE PmtbCon2BurdenLaborGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2burdenlaborgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenlaborgl($pmtbcon2burdenlaborgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenlaborgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENLABORGL, $pmtbcon2burdenlaborgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2BurdenMachGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenmachgl('fooValue');   // WHERE PmtbCon2BurdenMachGl = 'fooValue'
     * $query->filterByPmtbcon2burdenmachgl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenMachGl LIKE '%fooValue%'
     * $query->filterByPmtbcon2burdenmachgl(['foo', 'bar']); // WHERE PmtbCon2BurdenMachGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2burdenmachgl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenmachgl($pmtbcon2burdenmachgl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenmachgl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENMACHGL, $pmtbcon2burdenmachgl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2BurdenAdminGl column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2burdenadmingl('fooValue');   // WHERE PmtbCon2BurdenAdminGl = 'fooValue'
     * $query->filterByPmtbcon2burdenadmingl('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2BurdenAdminGl LIKE '%fooValue%'
     * $query->filterByPmtbcon2burdenadmingl(['foo', 'bar']); // WHERE PmtbCon2BurdenAdminGl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2burdenadmingl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2burdenadmingl($pmtbcon2burdenadmingl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2burdenadmingl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2BURDENADMINGL, $pmtbcon2burdenadmingl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbCon2SetupAsOper column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbcon2setupasoper('fooValue');   // WHERE PmtbCon2SetupAsOper = 'fooValue'
     * $query->filterByPmtbcon2setupasoper('%fooValue%', Criteria::LIKE); // WHERE PmtbCon2SetupAsOper LIKE '%fooValue%'
     * $query->filterByPmtbcon2setupasoper(['foo', 'bar']); // WHERE PmtbCon2SetupAsOper IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbcon2setupasoper The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbcon2setupasoper($pmtbcon2setupasoper = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbcon2setupasoper)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigPmTableMap::COL_PMTBCON2SETUPASOPER, $pmtbcon2setupasoper, $comparison);

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

        $this->addUsingAlias(ConfigPmTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigPmTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigPmTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigPm $configPm Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
