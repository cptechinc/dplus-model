<?php

namespace Base;

use \ConfigSysd as ChildConfigSysd;
use \ConfigSysdQuery as ChildConfigSysdQuery;
use \Exception;
use \PDO;
use Map\ConfigSysdTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `sys_definition` table.
 *
 * @method     ChildConfigSysdQuery orderByCscpcompnbr($order = Criteria::ASC) Order by the CscpCompNbr column
 * @method     ChildConfigSysdQuery orderByCscpcompid($order = Criteria::ASC) Order by the CscpCompId column
 * @method     ChildConfigSysdQuery orderByCscpcompname($order = Criteria::ASC) Order by the CscpCompName column
 * @method     ChildConfigSysdQuery orderByCscpdspermission($order = Criteria::ASC) Order by the CscpDsPermission column
 * @method     ChildConfigSysdQuery orderByCscprapermission($order = Criteria::ASC) Order by the CscpRaPermission column
 * @method     ChildConfigSysdQuery orderByCscpsrppermission($order = Criteria::ASC) Order by the CscpSrpPermission column
 * @method     ChildConfigSysdQuery orderByCscpemailtype($order = Criteria::ASC) Order by the CscpEmailType column
 * @method     ChildConfigSysdQuery orderByCscpfaxdir($order = Criteria::ASC) Order by the CscpFaxDir column
 * @method     ChildConfigSysdQuery orderByCscpprgdir($order = Criteria::ASC) Order by the CscpPrgDir column
 * @method     ChildConfigSysdQuery orderByCscpfile1dir($order = Criteria::ASC) Order by the CscpFile1Dir column
 * @method     ChildConfigSysdQuery orderByCscpfile2dir($order = Criteria::ASC) Order by the CscpFile2Dir column
 * @method     ChildConfigSysdQuery orderByCscpfile3dir($order = Criteria::ASC) Order by the CscpFile3Dir column
 * @method     ChildConfigSysdQuery orderByCscptempdir($order = Criteria::ASC) Order by the CscpTempDir column
 * @method     ChildConfigSysdQuery orderByCscpworkdir($order = Criteria::ASC) Order by the CscpWorkDir column
 * @method     ChildConfigSysdQuery orderByCscpreptarchdir($order = Criteria::ASC) Order by the CscpReptArchDir column
 * @method     ChildConfigSysdQuery orderByCscpdocinboxdir($order = Criteria::ASC) Order by the CscpDocInboxDir column
 * @method     ChildConfigSysdQuery orderByCscpdocautodir($order = Criteria::ASC) Order by the CscpDocAutoDir column
 * @method     ChildConfigSysdQuery orderByCscpcertsdir($order = Criteria::ASC) Order by the CscpCertsDir column
 * @method     ChildConfigSysdQuery orderByCscpimgproduct($order = Criteria::ASC) Order by the CscpImgProduct column
 * @method     ChildConfigSysdQuery orderByCscpimgdrawings($order = Criteria::ASC) Order by the CscpImgDrawings column
 * @method     ChildConfigSysdQuery orderByCscpimgschematic($order = Criteria::ASC) Order by the CscpImgSchematic column
 * @method     ChildConfigSysdQuery orderByCscpimgconfirm($order = Criteria::ASC) Order by the CscpImgConfirm column
 * @method     ChildConfigSysdQuery orderByCscppcchargedir($order = Criteria::ASC) Order by the CscpPcchargeDir column
 * @method     ChildConfigSysdQuery orderByCscpdevicedir($order = Criteria::ASC) Order by the CscpDeviceDir column
 * @method     ChildConfigSysdQuery orderByCscpecommdir($order = Criteria::ASC) Order by the CscpEcommDir column
 * @method     ChildConfigSysdQuery orderByCscpbrwzbaseip($order = Criteria::ASC) Order by the CscpBrwzBaseIp column
 * @method     ChildConfigSysdQuery orderByCscpdatabasename($order = Criteria::ASC) Order by the CscpDataBaseName column
 * @method     ChildConfigSysdQuery orderByCscpcompdatabasename($order = Criteria::ASC) Order by the CscpCompDataBaseName column
 * @method     ChildConfigSysdQuery orderByCscpfgrndcolor($order = Criteria::ASC) Order by the CscpFgrndColor column
 * @method     ChildConfigSysdQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigSysdQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigSysdQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigSysdQuery groupByCscpcompnbr() Group by the CscpCompNbr column
 * @method     ChildConfigSysdQuery groupByCscpcompid() Group by the CscpCompId column
 * @method     ChildConfigSysdQuery groupByCscpcompname() Group by the CscpCompName column
 * @method     ChildConfigSysdQuery groupByCscpdspermission() Group by the CscpDsPermission column
 * @method     ChildConfigSysdQuery groupByCscprapermission() Group by the CscpRaPermission column
 * @method     ChildConfigSysdQuery groupByCscpsrppermission() Group by the CscpSrpPermission column
 * @method     ChildConfigSysdQuery groupByCscpemailtype() Group by the CscpEmailType column
 * @method     ChildConfigSysdQuery groupByCscpfaxdir() Group by the CscpFaxDir column
 * @method     ChildConfigSysdQuery groupByCscpprgdir() Group by the CscpPrgDir column
 * @method     ChildConfigSysdQuery groupByCscpfile1dir() Group by the CscpFile1Dir column
 * @method     ChildConfigSysdQuery groupByCscpfile2dir() Group by the CscpFile2Dir column
 * @method     ChildConfigSysdQuery groupByCscpfile3dir() Group by the CscpFile3Dir column
 * @method     ChildConfigSysdQuery groupByCscptempdir() Group by the CscpTempDir column
 * @method     ChildConfigSysdQuery groupByCscpworkdir() Group by the CscpWorkDir column
 * @method     ChildConfigSysdQuery groupByCscpreptarchdir() Group by the CscpReptArchDir column
 * @method     ChildConfigSysdQuery groupByCscpdocinboxdir() Group by the CscpDocInboxDir column
 * @method     ChildConfigSysdQuery groupByCscpdocautodir() Group by the CscpDocAutoDir column
 * @method     ChildConfigSysdQuery groupByCscpcertsdir() Group by the CscpCertsDir column
 * @method     ChildConfigSysdQuery groupByCscpimgproduct() Group by the CscpImgProduct column
 * @method     ChildConfigSysdQuery groupByCscpimgdrawings() Group by the CscpImgDrawings column
 * @method     ChildConfigSysdQuery groupByCscpimgschematic() Group by the CscpImgSchematic column
 * @method     ChildConfigSysdQuery groupByCscpimgconfirm() Group by the CscpImgConfirm column
 * @method     ChildConfigSysdQuery groupByCscppcchargedir() Group by the CscpPcchargeDir column
 * @method     ChildConfigSysdQuery groupByCscpdevicedir() Group by the CscpDeviceDir column
 * @method     ChildConfigSysdQuery groupByCscpecommdir() Group by the CscpEcommDir column
 * @method     ChildConfigSysdQuery groupByCscpbrwzbaseip() Group by the CscpBrwzBaseIp column
 * @method     ChildConfigSysdQuery groupByCscpdatabasename() Group by the CscpDataBaseName column
 * @method     ChildConfigSysdQuery groupByCscpcompdatabasename() Group by the CscpCompDataBaseName column
 * @method     ChildConfigSysdQuery groupByCscpfgrndcolor() Group by the CscpFgrndColor column
 * @method     ChildConfigSysdQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigSysdQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigSysdQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigSysdQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigSysdQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigSysdQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigSysdQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigSysdQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigSysdQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigSysd|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigSysd matching the query
 * @method     ChildConfigSysd findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigSysd matching the query, or a new ChildConfigSysd object populated from the query conditions when no match is found
 *
 * @method     ChildConfigSysd|null findOneByCscpcompnbr(int $CscpCompNbr) Return the first ChildConfigSysd filtered by the CscpCompNbr column
 * @method     ChildConfigSysd|null findOneByCscpcompid(string $CscpCompId) Return the first ChildConfigSysd filtered by the CscpCompId column
 * @method     ChildConfigSysd|null findOneByCscpcompname(string $CscpCompName) Return the first ChildConfigSysd filtered by the CscpCompName column
 * @method     ChildConfigSysd|null findOneByCscpdspermission(string $CscpDsPermission) Return the first ChildConfigSysd filtered by the CscpDsPermission column
 * @method     ChildConfigSysd|null findOneByCscprapermission(string $CscpRaPermission) Return the first ChildConfigSysd filtered by the CscpRaPermission column
 * @method     ChildConfigSysd|null findOneByCscpsrppermission(string $CscpSrpPermission) Return the first ChildConfigSysd filtered by the CscpSrpPermission column
 * @method     ChildConfigSysd|null findOneByCscpemailtype(string $CscpEmailType) Return the first ChildConfigSysd filtered by the CscpEmailType column
 * @method     ChildConfigSysd|null findOneByCscpfaxdir(string $CscpFaxDir) Return the first ChildConfigSysd filtered by the CscpFaxDir column
 * @method     ChildConfigSysd|null findOneByCscpprgdir(string $CscpPrgDir) Return the first ChildConfigSysd filtered by the CscpPrgDir column
 * @method     ChildConfigSysd|null findOneByCscpfile1dir(string $CscpFile1Dir) Return the first ChildConfigSysd filtered by the CscpFile1Dir column
 * @method     ChildConfigSysd|null findOneByCscpfile2dir(string $CscpFile2Dir) Return the first ChildConfigSysd filtered by the CscpFile2Dir column
 * @method     ChildConfigSysd|null findOneByCscpfile3dir(string $CscpFile3Dir) Return the first ChildConfigSysd filtered by the CscpFile3Dir column
 * @method     ChildConfigSysd|null findOneByCscptempdir(string $CscpTempDir) Return the first ChildConfigSysd filtered by the CscpTempDir column
 * @method     ChildConfigSysd|null findOneByCscpworkdir(string $CscpWorkDir) Return the first ChildConfigSysd filtered by the CscpWorkDir column
 * @method     ChildConfigSysd|null findOneByCscpreptarchdir(string $CscpReptArchDir) Return the first ChildConfigSysd filtered by the CscpReptArchDir column
 * @method     ChildConfigSysd|null findOneByCscpdocinboxdir(string $CscpDocInboxDir) Return the first ChildConfigSysd filtered by the CscpDocInboxDir column
 * @method     ChildConfigSysd|null findOneByCscpdocautodir(string $CscpDocAutoDir) Return the first ChildConfigSysd filtered by the CscpDocAutoDir column
 * @method     ChildConfigSysd|null findOneByCscpcertsdir(string $CscpCertsDir) Return the first ChildConfigSysd filtered by the CscpCertsDir column
 * @method     ChildConfigSysd|null findOneByCscpimgproduct(string $CscpImgProduct) Return the first ChildConfigSysd filtered by the CscpImgProduct column
 * @method     ChildConfigSysd|null findOneByCscpimgdrawings(string $CscpImgDrawings) Return the first ChildConfigSysd filtered by the CscpImgDrawings column
 * @method     ChildConfigSysd|null findOneByCscpimgschematic(string $CscpImgSchematic) Return the first ChildConfigSysd filtered by the CscpImgSchematic column
 * @method     ChildConfigSysd|null findOneByCscpimgconfirm(string $CscpImgConfirm) Return the first ChildConfigSysd filtered by the CscpImgConfirm column
 * @method     ChildConfigSysd|null findOneByCscppcchargedir(string $CscpPcchargeDir) Return the first ChildConfigSysd filtered by the CscpPcchargeDir column
 * @method     ChildConfigSysd|null findOneByCscpdevicedir(string $CscpDeviceDir) Return the first ChildConfigSysd filtered by the CscpDeviceDir column
 * @method     ChildConfigSysd|null findOneByCscpecommdir(string $CscpEcommDir) Return the first ChildConfigSysd filtered by the CscpEcommDir column
 * @method     ChildConfigSysd|null findOneByCscpbrwzbaseip(string $CscpBrwzBaseIp) Return the first ChildConfigSysd filtered by the CscpBrwzBaseIp column
 * @method     ChildConfigSysd|null findOneByCscpdatabasename(string $CscpDataBaseName) Return the first ChildConfigSysd filtered by the CscpDataBaseName column
 * @method     ChildConfigSysd|null findOneByCscpcompdatabasename(string $CscpCompDataBaseName) Return the first ChildConfigSysd filtered by the CscpCompDataBaseName column
 * @method     ChildConfigSysd|null findOneByCscpfgrndcolor(int $CscpFgrndColor) Return the first ChildConfigSysd filtered by the CscpFgrndColor column
 * @method     ChildConfigSysd|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSysd filtered by the DateUpdtd column
 * @method     ChildConfigSysd|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSysd filtered by the TimeUpdtd column
 * @method     ChildConfigSysd|null findOneByDummy(string $dummy) Return the first ChildConfigSysd filtered by the dummy column
 *
 * @method     ChildConfigSysd requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigSysd by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOne(?ConnectionInterface $con = null) Return the first ChildConfigSysd matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSysd requireOneByCscpcompnbr(int $CscpCompNbr) Return the first ChildConfigSysd filtered by the CscpCompNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpcompid(string $CscpCompId) Return the first ChildConfigSysd filtered by the CscpCompId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpcompname(string $CscpCompName) Return the first ChildConfigSysd filtered by the CscpCompName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpdspermission(string $CscpDsPermission) Return the first ChildConfigSysd filtered by the CscpDsPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscprapermission(string $CscpRaPermission) Return the first ChildConfigSysd filtered by the CscpRaPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpsrppermission(string $CscpSrpPermission) Return the first ChildConfigSysd filtered by the CscpSrpPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpemailtype(string $CscpEmailType) Return the first ChildConfigSysd filtered by the CscpEmailType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpfaxdir(string $CscpFaxDir) Return the first ChildConfigSysd filtered by the CscpFaxDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpprgdir(string $CscpPrgDir) Return the first ChildConfigSysd filtered by the CscpPrgDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpfile1dir(string $CscpFile1Dir) Return the first ChildConfigSysd filtered by the CscpFile1Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpfile2dir(string $CscpFile2Dir) Return the first ChildConfigSysd filtered by the CscpFile2Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpfile3dir(string $CscpFile3Dir) Return the first ChildConfigSysd filtered by the CscpFile3Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscptempdir(string $CscpTempDir) Return the first ChildConfigSysd filtered by the CscpTempDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpworkdir(string $CscpWorkDir) Return the first ChildConfigSysd filtered by the CscpWorkDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpreptarchdir(string $CscpReptArchDir) Return the first ChildConfigSysd filtered by the CscpReptArchDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpdocinboxdir(string $CscpDocInboxDir) Return the first ChildConfigSysd filtered by the CscpDocInboxDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpdocautodir(string $CscpDocAutoDir) Return the first ChildConfigSysd filtered by the CscpDocAutoDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpcertsdir(string $CscpCertsDir) Return the first ChildConfigSysd filtered by the CscpCertsDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpimgproduct(string $CscpImgProduct) Return the first ChildConfigSysd filtered by the CscpImgProduct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpimgdrawings(string $CscpImgDrawings) Return the first ChildConfigSysd filtered by the CscpImgDrawings column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpimgschematic(string $CscpImgSchematic) Return the first ChildConfigSysd filtered by the CscpImgSchematic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpimgconfirm(string $CscpImgConfirm) Return the first ChildConfigSysd filtered by the CscpImgConfirm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscppcchargedir(string $CscpPcchargeDir) Return the first ChildConfigSysd filtered by the CscpPcchargeDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpdevicedir(string $CscpDeviceDir) Return the first ChildConfigSysd filtered by the CscpDeviceDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpecommdir(string $CscpEcommDir) Return the first ChildConfigSysd filtered by the CscpEcommDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpbrwzbaseip(string $CscpBrwzBaseIp) Return the first ChildConfigSysd filtered by the CscpBrwzBaseIp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpdatabasename(string $CscpDataBaseName) Return the first ChildConfigSysd filtered by the CscpDataBaseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpcompdatabasename(string $CscpCompDataBaseName) Return the first ChildConfigSysd filtered by the CscpCompDataBaseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByCscpfgrndcolor(int $CscpFgrndColor) Return the first ChildConfigSysd filtered by the CscpFgrndColor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSysd filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSysd filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSysd requireOneByDummy(string $dummy) Return the first ChildConfigSysd filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSysd[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigSysd objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigSysd> find(?ConnectionInterface $con = null) Return ChildConfigSysd objects based on current ModelCriteria
 *
 * @method     ChildConfigSysd[]|Collection findByCscpcompnbr(int|array<int> $CscpCompNbr) Return ChildConfigSysd objects filtered by the CscpCompNbr column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpcompnbr(int|array<int> $CscpCompNbr) Return ChildConfigSysd objects filtered by the CscpCompNbr column
 * @method     ChildConfigSysd[]|Collection findByCscpcompid(string|array<string> $CscpCompId) Return ChildConfigSysd objects filtered by the CscpCompId column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpcompid(string|array<string> $CscpCompId) Return ChildConfigSysd objects filtered by the CscpCompId column
 * @method     ChildConfigSysd[]|Collection findByCscpcompname(string|array<string> $CscpCompName) Return ChildConfigSysd objects filtered by the CscpCompName column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpcompname(string|array<string> $CscpCompName) Return ChildConfigSysd objects filtered by the CscpCompName column
 * @method     ChildConfigSysd[]|Collection findByCscpdspermission(string|array<string> $CscpDsPermission) Return ChildConfigSysd objects filtered by the CscpDsPermission column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpdspermission(string|array<string> $CscpDsPermission) Return ChildConfigSysd objects filtered by the CscpDsPermission column
 * @method     ChildConfigSysd[]|Collection findByCscprapermission(string|array<string> $CscpRaPermission) Return ChildConfigSysd objects filtered by the CscpRaPermission column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscprapermission(string|array<string> $CscpRaPermission) Return ChildConfigSysd objects filtered by the CscpRaPermission column
 * @method     ChildConfigSysd[]|Collection findByCscpsrppermission(string|array<string> $CscpSrpPermission) Return ChildConfigSysd objects filtered by the CscpSrpPermission column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpsrppermission(string|array<string> $CscpSrpPermission) Return ChildConfigSysd objects filtered by the CscpSrpPermission column
 * @method     ChildConfigSysd[]|Collection findByCscpemailtype(string|array<string> $CscpEmailType) Return ChildConfigSysd objects filtered by the CscpEmailType column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpemailtype(string|array<string> $CscpEmailType) Return ChildConfigSysd objects filtered by the CscpEmailType column
 * @method     ChildConfigSysd[]|Collection findByCscpfaxdir(string|array<string> $CscpFaxDir) Return ChildConfigSysd objects filtered by the CscpFaxDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpfaxdir(string|array<string> $CscpFaxDir) Return ChildConfigSysd objects filtered by the CscpFaxDir column
 * @method     ChildConfigSysd[]|Collection findByCscpprgdir(string|array<string> $CscpPrgDir) Return ChildConfigSysd objects filtered by the CscpPrgDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpprgdir(string|array<string> $CscpPrgDir) Return ChildConfigSysd objects filtered by the CscpPrgDir column
 * @method     ChildConfigSysd[]|Collection findByCscpfile1dir(string|array<string> $CscpFile1Dir) Return ChildConfigSysd objects filtered by the CscpFile1Dir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpfile1dir(string|array<string> $CscpFile1Dir) Return ChildConfigSysd objects filtered by the CscpFile1Dir column
 * @method     ChildConfigSysd[]|Collection findByCscpfile2dir(string|array<string> $CscpFile2Dir) Return ChildConfigSysd objects filtered by the CscpFile2Dir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpfile2dir(string|array<string> $CscpFile2Dir) Return ChildConfigSysd objects filtered by the CscpFile2Dir column
 * @method     ChildConfigSysd[]|Collection findByCscpfile3dir(string|array<string> $CscpFile3Dir) Return ChildConfigSysd objects filtered by the CscpFile3Dir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpfile3dir(string|array<string> $CscpFile3Dir) Return ChildConfigSysd objects filtered by the CscpFile3Dir column
 * @method     ChildConfigSysd[]|Collection findByCscptempdir(string|array<string> $CscpTempDir) Return ChildConfigSysd objects filtered by the CscpTempDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscptempdir(string|array<string> $CscpTempDir) Return ChildConfigSysd objects filtered by the CscpTempDir column
 * @method     ChildConfigSysd[]|Collection findByCscpworkdir(string|array<string> $CscpWorkDir) Return ChildConfigSysd objects filtered by the CscpWorkDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpworkdir(string|array<string> $CscpWorkDir) Return ChildConfigSysd objects filtered by the CscpWorkDir column
 * @method     ChildConfigSysd[]|Collection findByCscpreptarchdir(string|array<string> $CscpReptArchDir) Return ChildConfigSysd objects filtered by the CscpReptArchDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpreptarchdir(string|array<string> $CscpReptArchDir) Return ChildConfigSysd objects filtered by the CscpReptArchDir column
 * @method     ChildConfigSysd[]|Collection findByCscpdocinboxdir(string|array<string> $CscpDocInboxDir) Return ChildConfigSysd objects filtered by the CscpDocInboxDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpdocinboxdir(string|array<string> $CscpDocInboxDir) Return ChildConfigSysd objects filtered by the CscpDocInboxDir column
 * @method     ChildConfigSysd[]|Collection findByCscpdocautodir(string|array<string> $CscpDocAutoDir) Return ChildConfigSysd objects filtered by the CscpDocAutoDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpdocautodir(string|array<string> $CscpDocAutoDir) Return ChildConfigSysd objects filtered by the CscpDocAutoDir column
 * @method     ChildConfigSysd[]|Collection findByCscpcertsdir(string|array<string> $CscpCertsDir) Return ChildConfigSysd objects filtered by the CscpCertsDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpcertsdir(string|array<string> $CscpCertsDir) Return ChildConfigSysd objects filtered by the CscpCertsDir column
 * @method     ChildConfigSysd[]|Collection findByCscpimgproduct(string|array<string> $CscpImgProduct) Return ChildConfigSysd objects filtered by the CscpImgProduct column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpimgproduct(string|array<string> $CscpImgProduct) Return ChildConfigSysd objects filtered by the CscpImgProduct column
 * @method     ChildConfigSysd[]|Collection findByCscpimgdrawings(string|array<string> $CscpImgDrawings) Return ChildConfigSysd objects filtered by the CscpImgDrawings column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpimgdrawings(string|array<string> $CscpImgDrawings) Return ChildConfigSysd objects filtered by the CscpImgDrawings column
 * @method     ChildConfigSysd[]|Collection findByCscpimgschematic(string|array<string> $CscpImgSchematic) Return ChildConfigSysd objects filtered by the CscpImgSchematic column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpimgschematic(string|array<string> $CscpImgSchematic) Return ChildConfigSysd objects filtered by the CscpImgSchematic column
 * @method     ChildConfigSysd[]|Collection findByCscpimgconfirm(string|array<string> $CscpImgConfirm) Return ChildConfigSysd objects filtered by the CscpImgConfirm column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpimgconfirm(string|array<string> $CscpImgConfirm) Return ChildConfigSysd objects filtered by the CscpImgConfirm column
 * @method     ChildConfigSysd[]|Collection findByCscppcchargedir(string|array<string> $CscpPcchargeDir) Return ChildConfigSysd objects filtered by the CscpPcchargeDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscppcchargedir(string|array<string> $CscpPcchargeDir) Return ChildConfigSysd objects filtered by the CscpPcchargeDir column
 * @method     ChildConfigSysd[]|Collection findByCscpdevicedir(string|array<string> $CscpDeviceDir) Return ChildConfigSysd objects filtered by the CscpDeviceDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpdevicedir(string|array<string> $CscpDeviceDir) Return ChildConfigSysd objects filtered by the CscpDeviceDir column
 * @method     ChildConfigSysd[]|Collection findByCscpecommdir(string|array<string> $CscpEcommDir) Return ChildConfigSysd objects filtered by the CscpEcommDir column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpecommdir(string|array<string> $CscpEcommDir) Return ChildConfigSysd objects filtered by the CscpEcommDir column
 * @method     ChildConfigSysd[]|Collection findByCscpbrwzbaseip(string|array<string> $CscpBrwzBaseIp) Return ChildConfigSysd objects filtered by the CscpBrwzBaseIp column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpbrwzbaseip(string|array<string> $CscpBrwzBaseIp) Return ChildConfigSysd objects filtered by the CscpBrwzBaseIp column
 * @method     ChildConfigSysd[]|Collection findByCscpdatabasename(string|array<string> $CscpDataBaseName) Return ChildConfigSysd objects filtered by the CscpDataBaseName column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpdatabasename(string|array<string> $CscpDataBaseName) Return ChildConfigSysd objects filtered by the CscpDataBaseName column
 * @method     ChildConfigSysd[]|Collection findByCscpcompdatabasename(string|array<string> $CscpCompDataBaseName) Return ChildConfigSysd objects filtered by the CscpCompDataBaseName column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpcompdatabasename(string|array<string> $CscpCompDataBaseName) Return ChildConfigSysd objects filtered by the CscpCompDataBaseName column
 * @method     ChildConfigSysd[]|Collection findByCscpfgrndcolor(int|array<int> $CscpFgrndColor) Return ChildConfigSysd objects filtered by the CscpFgrndColor column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByCscpfgrndcolor(int|array<int> $CscpFgrndColor) Return ChildConfigSysd objects filtered by the CscpFgrndColor column
 * @method     ChildConfigSysd[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigSysd objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigSysd objects filtered by the DateUpdtd column
 * @method     ChildConfigSysd[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigSysd objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigSysd objects filtered by the TimeUpdtd column
 * @method     ChildConfigSysd[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigSysd objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigSysd> findByDummy(string|array<string> $dummy) Return ChildConfigSysd objects filtered by the dummy column
 *
 * @method     ChildConfigSysd[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigSysd> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigSysdQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigSysdQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigSysd', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigSysdQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigSysdQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigSysdQuery) {
            return $criteria;
        }
        $query = new ChildConfigSysdQuery();
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
     * @return ChildConfigSysd|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigSysdTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigSysd A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT CscpCompNbr, CscpCompId, CscpCompName, CscpDsPermission, CscpRaPermission, CscpSrpPermission, CscpEmailType, CscpFaxDir, CscpPrgDir, CscpFile1Dir, CscpFile2Dir, CscpFile3Dir, CscpTempDir, CscpWorkDir, CscpReptArchDir, CscpDocInboxDir, CscpDocAutoDir, CscpCertsDir, CscpImgProduct, CscpImgDrawings, CscpImgSchematic, CscpImgConfirm, CscpPcchargeDir, CscpDeviceDir, CscpEcommDir, CscpBrwzBaseIp, CscpDataBaseName, CscpCompDataBaseName, CscpFgrndColor, DateUpdtd, TimeUpdtd, dummy FROM sys_definition WHERE CscpCompNbr = :p0';
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
            /** @var ChildConfigSysd $obj */
            $obj = new ChildConfigSysd();
            $obj->hydrate($row);
            ConfigSysdTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigSysd|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the CscpCompNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompnbr(1234); // WHERE CscpCompNbr = 1234
     * $query->filterByCscpcompnbr(array(12, 34)); // WHERE CscpCompNbr IN (12, 34)
     * $query->filterByCscpcompnbr(array('min' => 12)); // WHERE CscpCompNbr > 12
     * </code>
     *
     * @param mixed $cscpcompnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpcompnbr($cscpcompnbr = null, ?string $comparison = null)
    {
        if (is_array($cscpcompnbr)) {
            $useMinMax = false;
            if (isset($cscpcompnbr['min'])) {
                $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $cscpcompnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cscpcompnbr['max'])) {
                $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $cscpcompnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $cscpcompnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpCompId column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompid('fooValue');   // WHERE CscpCompId = 'fooValue'
     * $query->filterByCscpcompid('%fooValue%', Criteria::LIKE); // WHERE CscpCompId LIKE '%fooValue%'
     * $query->filterByCscpcompid(['foo', 'bar']); // WHERE CscpCompId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpcompid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpcompid($cscpcompid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPID, $cscpcompid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpCompName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompname('fooValue');   // WHERE CscpCompName = 'fooValue'
     * $query->filterByCscpcompname('%fooValue%', Criteria::LIKE); // WHERE CscpCompName LIKE '%fooValue%'
     * $query->filterByCscpcompname(['foo', 'bar']); // WHERE CscpCompName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpcompname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpcompname($cscpcompname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNAME, $cscpcompname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpDsPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdspermission('fooValue');   // WHERE CscpDsPermission = 'fooValue'
     * $query->filterByCscpdspermission('%fooValue%', Criteria::LIKE); // WHERE CscpDsPermission LIKE '%fooValue%'
     * $query->filterByCscpdspermission(['foo', 'bar']); // WHERE CscpDsPermission IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpdspermission The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpdspermission($cscpdspermission = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdspermission)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPDSPERMISSION, $cscpdspermission, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpRaPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscprapermission('fooValue');   // WHERE CscpRaPermission = 'fooValue'
     * $query->filterByCscprapermission('%fooValue%', Criteria::LIKE); // WHERE CscpRaPermission LIKE '%fooValue%'
     * $query->filterByCscprapermission(['foo', 'bar']); // WHERE CscpRaPermission IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscprapermission The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscprapermission($cscprapermission = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscprapermission)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPRAPERMISSION, $cscprapermission, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpSrpPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpsrppermission('fooValue');   // WHERE CscpSrpPermission = 'fooValue'
     * $query->filterByCscpsrppermission('%fooValue%', Criteria::LIKE); // WHERE CscpSrpPermission LIKE '%fooValue%'
     * $query->filterByCscpsrppermission(['foo', 'bar']); // WHERE CscpSrpPermission IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpsrppermission The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpsrppermission($cscpsrppermission = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpsrppermission)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPSRPPERMISSION, $cscpsrppermission, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpEmailType column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpemailtype('fooValue');   // WHERE CscpEmailType = 'fooValue'
     * $query->filterByCscpemailtype('%fooValue%', Criteria::LIKE); // WHERE CscpEmailType LIKE '%fooValue%'
     * $query->filterByCscpemailtype(['foo', 'bar']); // WHERE CscpEmailType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpemailtype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpemailtype($cscpemailtype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpemailtype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPEMAILTYPE, $cscpemailtype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpFaxDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfaxdir('fooValue');   // WHERE CscpFaxDir = 'fooValue'
     * $query->filterByCscpfaxdir('%fooValue%', Criteria::LIKE); // WHERE CscpFaxDir LIKE '%fooValue%'
     * $query->filterByCscpfaxdir(['foo', 'bar']); // WHERE CscpFaxDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpfaxdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpfaxdir($cscpfaxdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfaxdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFAXDIR, $cscpfaxdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpPrgDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpprgdir('fooValue');   // WHERE CscpPrgDir = 'fooValue'
     * $query->filterByCscpprgdir('%fooValue%', Criteria::LIKE); // WHERE CscpPrgDir LIKE '%fooValue%'
     * $query->filterByCscpprgdir(['foo', 'bar']); // WHERE CscpPrgDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpprgdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpprgdir($cscpprgdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpprgdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPPRGDIR, $cscpprgdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpFile1Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile1dir('fooValue');   // WHERE CscpFile1Dir = 'fooValue'
     * $query->filterByCscpfile1dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile1Dir LIKE '%fooValue%'
     * $query->filterByCscpfile1dir(['foo', 'bar']); // WHERE CscpFile1Dir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpfile1dir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpfile1dir($cscpfile1dir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile1dir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFILE1DIR, $cscpfile1dir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpFile2Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile2dir('fooValue');   // WHERE CscpFile2Dir = 'fooValue'
     * $query->filterByCscpfile2dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile2Dir LIKE '%fooValue%'
     * $query->filterByCscpfile2dir(['foo', 'bar']); // WHERE CscpFile2Dir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpfile2dir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpfile2dir($cscpfile2dir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile2dir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFILE2DIR, $cscpfile2dir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpFile3Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile3dir('fooValue');   // WHERE CscpFile3Dir = 'fooValue'
     * $query->filterByCscpfile3dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile3Dir LIKE '%fooValue%'
     * $query->filterByCscpfile3dir(['foo', 'bar']); // WHERE CscpFile3Dir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpfile3dir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpfile3dir($cscpfile3dir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile3dir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFILE3DIR, $cscpfile3dir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpTempDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscptempdir('fooValue');   // WHERE CscpTempDir = 'fooValue'
     * $query->filterByCscptempdir('%fooValue%', Criteria::LIKE); // WHERE CscpTempDir LIKE '%fooValue%'
     * $query->filterByCscptempdir(['foo', 'bar']); // WHERE CscpTempDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscptempdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscptempdir($cscptempdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscptempdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPTEMPDIR, $cscptempdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpWorkDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpworkdir('fooValue');   // WHERE CscpWorkDir = 'fooValue'
     * $query->filterByCscpworkdir('%fooValue%', Criteria::LIKE); // WHERE CscpWorkDir LIKE '%fooValue%'
     * $query->filterByCscpworkdir(['foo', 'bar']); // WHERE CscpWorkDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpworkdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpworkdir($cscpworkdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpworkdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPWORKDIR, $cscpworkdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpReptArchDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpreptarchdir('fooValue');   // WHERE CscpReptArchDir = 'fooValue'
     * $query->filterByCscpreptarchdir('%fooValue%', Criteria::LIKE); // WHERE CscpReptArchDir LIKE '%fooValue%'
     * $query->filterByCscpreptarchdir(['foo', 'bar']); // WHERE CscpReptArchDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpreptarchdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpreptarchdir($cscpreptarchdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpreptarchdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPREPTARCHDIR, $cscpreptarchdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpDocInboxDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdocinboxdir('fooValue');   // WHERE CscpDocInboxDir = 'fooValue'
     * $query->filterByCscpdocinboxdir('%fooValue%', Criteria::LIKE); // WHERE CscpDocInboxDir LIKE '%fooValue%'
     * $query->filterByCscpdocinboxdir(['foo', 'bar']); // WHERE CscpDocInboxDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpdocinboxdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpdocinboxdir($cscpdocinboxdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdocinboxdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPDOCINBOXDIR, $cscpdocinboxdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpDocAutoDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdocautodir('fooValue');   // WHERE CscpDocAutoDir = 'fooValue'
     * $query->filterByCscpdocautodir('%fooValue%', Criteria::LIKE); // WHERE CscpDocAutoDir LIKE '%fooValue%'
     * $query->filterByCscpdocautodir(['foo', 'bar']); // WHERE CscpDocAutoDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpdocautodir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpdocautodir($cscpdocautodir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdocautodir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPDOCAUTODIR, $cscpdocautodir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpCertsDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcertsdir('fooValue');   // WHERE CscpCertsDir = 'fooValue'
     * $query->filterByCscpcertsdir('%fooValue%', Criteria::LIKE); // WHERE CscpCertsDir LIKE '%fooValue%'
     * $query->filterByCscpcertsdir(['foo', 'bar']); // WHERE CscpCertsDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpcertsdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpcertsdir($cscpcertsdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcertsdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCERTSDIR, $cscpcertsdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpImgProduct column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgproduct('fooValue');   // WHERE CscpImgProduct = 'fooValue'
     * $query->filterByCscpimgproduct('%fooValue%', Criteria::LIKE); // WHERE CscpImgProduct LIKE '%fooValue%'
     * $query->filterByCscpimgproduct(['foo', 'bar']); // WHERE CscpImgProduct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpimgproduct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpimgproduct($cscpimgproduct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgproduct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPIMGPRODUCT, $cscpimgproduct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpImgDrawings column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgdrawings('fooValue');   // WHERE CscpImgDrawings = 'fooValue'
     * $query->filterByCscpimgdrawings('%fooValue%', Criteria::LIKE); // WHERE CscpImgDrawings LIKE '%fooValue%'
     * $query->filterByCscpimgdrawings(['foo', 'bar']); // WHERE CscpImgDrawings IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpimgdrawings The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpimgdrawings($cscpimgdrawings = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgdrawings)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPIMGDRAWINGS, $cscpimgdrawings, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpImgSchematic column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgschematic('fooValue');   // WHERE CscpImgSchematic = 'fooValue'
     * $query->filterByCscpimgschematic('%fooValue%', Criteria::LIKE); // WHERE CscpImgSchematic LIKE '%fooValue%'
     * $query->filterByCscpimgschematic(['foo', 'bar']); // WHERE CscpImgSchematic IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpimgschematic The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpimgschematic($cscpimgschematic = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgschematic)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPIMGSCHEMATIC, $cscpimgschematic, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpImgConfirm column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgconfirm('fooValue');   // WHERE CscpImgConfirm = 'fooValue'
     * $query->filterByCscpimgconfirm('%fooValue%', Criteria::LIKE); // WHERE CscpImgConfirm LIKE '%fooValue%'
     * $query->filterByCscpimgconfirm(['foo', 'bar']); // WHERE CscpImgConfirm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpimgconfirm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpimgconfirm($cscpimgconfirm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgconfirm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPIMGCONFIRM, $cscpimgconfirm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpPcchargeDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscppcchargedir('fooValue');   // WHERE CscpPcchargeDir = 'fooValue'
     * $query->filterByCscppcchargedir('%fooValue%', Criteria::LIKE); // WHERE CscpPcchargeDir LIKE '%fooValue%'
     * $query->filterByCscppcchargedir(['foo', 'bar']); // WHERE CscpPcchargeDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscppcchargedir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscppcchargedir($cscppcchargedir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscppcchargedir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPPCCHARGEDIR, $cscppcchargedir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpDeviceDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdevicedir('fooValue');   // WHERE CscpDeviceDir = 'fooValue'
     * $query->filterByCscpdevicedir('%fooValue%', Criteria::LIKE); // WHERE CscpDeviceDir LIKE '%fooValue%'
     * $query->filterByCscpdevicedir(['foo', 'bar']); // WHERE CscpDeviceDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpdevicedir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpdevicedir($cscpdevicedir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdevicedir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPDEVICEDIR, $cscpdevicedir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpEcommDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpecommdir('fooValue');   // WHERE CscpEcommDir = 'fooValue'
     * $query->filterByCscpecommdir('%fooValue%', Criteria::LIKE); // WHERE CscpEcommDir LIKE '%fooValue%'
     * $query->filterByCscpecommdir(['foo', 'bar']); // WHERE CscpEcommDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpecommdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpecommdir($cscpecommdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpecommdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPECOMMDIR, $cscpecommdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpBrwzBaseIp column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpbrwzbaseip('fooValue');   // WHERE CscpBrwzBaseIp = 'fooValue'
     * $query->filterByCscpbrwzbaseip('%fooValue%', Criteria::LIKE); // WHERE CscpBrwzBaseIp LIKE '%fooValue%'
     * $query->filterByCscpbrwzbaseip(['foo', 'bar']); // WHERE CscpBrwzBaseIp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpbrwzbaseip The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpbrwzbaseip($cscpbrwzbaseip = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpbrwzbaseip)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPBRWZBASEIP, $cscpbrwzbaseip, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpDataBaseName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdatabasename('fooValue');   // WHERE CscpDataBaseName = 'fooValue'
     * $query->filterByCscpdatabasename('%fooValue%', Criteria::LIKE); // WHERE CscpDataBaseName LIKE '%fooValue%'
     * $query->filterByCscpdatabasename(['foo', 'bar']); // WHERE CscpDataBaseName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpdatabasename The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpdatabasename($cscpdatabasename = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdatabasename)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPDATABASENAME, $cscpdatabasename, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpCompDataBaseName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompdatabasename('fooValue');   // WHERE CscpCompDataBaseName = 'fooValue'
     * $query->filterByCscpcompdatabasename('%fooValue%', Criteria::LIKE); // WHERE CscpCompDataBaseName LIKE '%fooValue%'
     * $query->filterByCscpcompdatabasename(['foo', 'bar']); // WHERE CscpCompDataBaseName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $cscpcompdatabasename The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpcompdatabasename($cscpcompdatabasename = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompdatabasename)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPDATABASENAME, $cscpcompdatabasename, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CscpFgrndColor column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfgrndcolor(1234); // WHERE CscpFgrndColor = 1234
     * $query->filterByCscpfgrndcolor(array(12, 34)); // WHERE CscpFgrndColor IN (12, 34)
     * $query->filterByCscpfgrndcolor(array('min' => 12)); // WHERE CscpFgrndColor > 12
     * </code>
     *
     * @param mixed $cscpfgrndcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCscpfgrndcolor($cscpfgrndcolor = null, ?string $comparison = null)
    {
        if (is_array($cscpfgrndcolor)) {
            $useMinMax = false;
            if (isset($cscpfgrndcolor['min'])) {
                $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cscpfgrndcolor['max'])) {
                $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor, $comparison);

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

        $this->addUsingAlias(ConfigSysdTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigSysdTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigSysdTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigSysd $configSysd Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configSysd = null)
    {
        if ($configSysd) {
            $this->addUsingAlias(ConfigSysdTableMap::COL_CSCPCOMPNBR, $configSysd->getCscpcompnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_definition table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigSysdTableMap::clearInstancePool();
            ConfigSysdTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysdTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigSysdTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigSysdTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigSysdTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
