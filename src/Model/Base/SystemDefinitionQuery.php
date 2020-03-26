<?php

namespace Base;

use \SystemDefinition as ChildSystemDefinition;
use \SystemDefinitionQuery as ChildSystemDefinitionQuery;
use \Exception;
use \PDO;
use Map\SystemDefinitionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_definition' table.
 *
 *
 *
 * @method     ChildSystemDefinitionQuery orderByCscpcompnbr($order = Criteria::ASC) Order by the CscpCompNbr column
 * @method     ChildSystemDefinitionQuery orderByCscpcompid($order = Criteria::ASC) Order by the CscpCompId column
 * @method     ChildSystemDefinitionQuery orderByCscpcompname($order = Criteria::ASC) Order by the CscpCompName column
 * @method     ChildSystemDefinitionQuery orderByCscpdspermission($order = Criteria::ASC) Order by the CscpDsPermission column
 * @method     ChildSystemDefinitionQuery orderByCscprapermission($order = Criteria::ASC) Order by the CscpRaPermission column
 * @method     ChildSystemDefinitionQuery orderByCscpsrppermission($order = Criteria::ASC) Order by the CscpSrpPermission column
 * @method     ChildSystemDefinitionQuery orderByCscpemailtype($order = Criteria::ASC) Order by the CscpEmailType column
 * @method     ChildSystemDefinitionQuery orderByCscpfaxdir($order = Criteria::ASC) Order by the CscpFaxDir column
 * @method     ChildSystemDefinitionQuery orderByCscpprgdir($order = Criteria::ASC) Order by the CscpPrgDir column
 * @method     ChildSystemDefinitionQuery orderByCscpfile1dir($order = Criteria::ASC) Order by the CscpFile1Dir column
 * @method     ChildSystemDefinitionQuery orderByCscpfile2dir($order = Criteria::ASC) Order by the CscpFile2Dir column
 * @method     ChildSystemDefinitionQuery orderByCscpfile3dir($order = Criteria::ASC) Order by the CscpFile3Dir column
 * @method     ChildSystemDefinitionQuery orderByCscptempdir($order = Criteria::ASC) Order by the CscpTempDir column
 * @method     ChildSystemDefinitionQuery orderByCscpworkdir($order = Criteria::ASC) Order by the CscpWorkDir column
 * @method     ChildSystemDefinitionQuery orderByCscpreptarchdir($order = Criteria::ASC) Order by the CscpReptArchDir column
 * @method     ChildSystemDefinitionQuery orderByCscpdocinboxdir($order = Criteria::ASC) Order by the CscpDocInboxDir column
 * @method     ChildSystemDefinitionQuery orderByCscpdocautodir($order = Criteria::ASC) Order by the CscpDocAutoDir column
 * @method     ChildSystemDefinitionQuery orderByCscpcertsdir($order = Criteria::ASC) Order by the CscpCertsDir column
 * @method     ChildSystemDefinitionQuery orderByCscpimgproduct($order = Criteria::ASC) Order by the CscpImgProduct column
 * @method     ChildSystemDefinitionQuery orderByCscpimgdrawings($order = Criteria::ASC) Order by the CscpImgDrawings column
 * @method     ChildSystemDefinitionQuery orderByCscpimgschematic($order = Criteria::ASC) Order by the CscpImgSchematic column
 * @method     ChildSystemDefinitionQuery orderByCscpimgconfirm($order = Criteria::ASC) Order by the CscpImgConfirm column
 * @method     ChildSystemDefinitionQuery orderByCscppcchargedir($order = Criteria::ASC) Order by the CscpPcchargeDir column
 * @method     ChildSystemDefinitionQuery orderByCscpdevicedir($order = Criteria::ASC) Order by the CscpDeviceDir column
 * @method     ChildSystemDefinitionQuery orderByCscpecommdir($order = Criteria::ASC) Order by the CscpEcommDir column
 * @method     ChildSystemDefinitionQuery orderByCscpbrwzbaseip($order = Criteria::ASC) Order by the CscpBrwzBaseIp column
 * @method     ChildSystemDefinitionQuery orderByCscpdatabasename($order = Criteria::ASC) Order by the CscpDataBaseName column
 * @method     ChildSystemDefinitionQuery orderByCscpcompdatabasename($order = Criteria::ASC) Order by the CscpCompDataBaseName column
 * @method     ChildSystemDefinitionQuery orderByCscpfgrndcolor($order = Criteria::ASC) Order by the CscpFgrndColor column
 * @method     ChildSystemDefinitionQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSystemDefinitionQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSystemDefinitionQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSystemDefinitionQuery groupByCscpcompnbr() Group by the CscpCompNbr column
 * @method     ChildSystemDefinitionQuery groupByCscpcompid() Group by the CscpCompId column
 * @method     ChildSystemDefinitionQuery groupByCscpcompname() Group by the CscpCompName column
 * @method     ChildSystemDefinitionQuery groupByCscpdspermission() Group by the CscpDsPermission column
 * @method     ChildSystemDefinitionQuery groupByCscprapermission() Group by the CscpRaPermission column
 * @method     ChildSystemDefinitionQuery groupByCscpsrppermission() Group by the CscpSrpPermission column
 * @method     ChildSystemDefinitionQuery groupByCscpemailtype() Group by the CscpEmailType column
 * @method     ChildSystemDefinitionQuery groupByCscpfaxdir() Group by the CscpFaxDir column
 * @method     ChildSystemDefinitionQuery groupByCscpprgdir() Group by the CscpPrgDir column
 * @method     ChildSystemDefinitionQuery groupByCscpfile1dir() Group by the CscpFile1Dir column
 * @method     ChildSystemDefinitionQuery groupByCscpfile2dir() Group by the CscpFile2Dir column
 * @method     ChildSystemDefinitionQuery groupByCscpfile3dir() Group by the CscpFile3Dir column
 * @method     ChildSystemDefinitionQuery groupByCscptempdir() Group by the CscpTempDir column
 * @method     ChildSystemDefinitionQuery groupByCscpworkdir() Group by the CscpWorkDir column
 * @method     ChildSystemDefinitionQuery groupByCscpreptarchdir() Group by the CscpReptArchDir column
 * @method     ChildSystemDefinitionQuery groupByCscpdocinboxdir() Group by the CscpDocInboxDir column
 * @method     ChildSystemDefinitionQuery groupByCscpdocautodir() Group by the CscpDocAutoDir column
 * @method     ChildSystemDefinitionQuery groupByCscpcertsdir() Group by the CscpCertsDir column
 * @method     ChildSystemDefinitionQuery groupByCscpimgproduct() Group by the CscpImgProduct column
 * @method     ChildSystemDefinitionQuery groupByCscpimgdrawings() Group by the CscpImgDrawings column
 * @method     ChildSystemDefinitionQuery groupByCscpimgschematic() Group by the CscpImgSchematic column
 * @method     ChildSystemDefinitionQuery groupByCscpimgconfirm() Group by the CscpImgConfirm column
 * @method     ChildSystemDefinitionQuery groupByCscppcchargedir() Group by the CscpPcchargeDir column
 * @method     ChildSystemDefinitionQuery groupByCscpdevicedir() Group by the CscpDeviceDir column
 * @method     ChildSystemDefinitionQuery groupByCscpecommdir() Group by the CscpEcommDir column
 * @method     ChildSystemDefinitionQuery groupByCscpbrwzbaseip() Group by the CscpBrwzBaseIp column
 * @method     ChildSystemDefinitionQuery groupByCscpdatabasename() Group by the CscpDataBaseName column
 * @method     ChildSystemDefinitionQuery groupByCscpcompdatabasename() Group by the CscpCompDataBaseName column
 * @method     ChildSystemDefinitionQuery groupByCscpfgrndcolor() Group by the CscpFgrndColor column
 * @method     ChildSystemDefinitionQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSystemDefinitionQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSystemDefinitionQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSystemDefinitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSystemDefinitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSystemDefinitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSystemDefinitionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSystemDefinitionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSystemDefinitionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSystemDefinition findOne(ConnectionInterface $con = null) Return the first ChildSystemDefinition matching the query
 * @method     ChildSystemDefinition findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSystemDefinition matching the query, or a new ChildSystemDefinition object populated from the query conditions when no match is found
 *
 * @method     ChildSystemDefinition findOneByCscpcompnbr(int $CscpCompNbr) Return the first ChildSystemDefinition filtered by the CscpCompNbr column
 * @method     ChildSystemDefinition findOneByCscpcompid(string $CscpCompId) Return the first ChildSystemDefinition filtered by the CscpCompId column
 * @method     ChildSystemDefinition findOneByCscpcompname(string $CscpCompName) Return the first ChildSystemDefinition filtered by the CscpCompName column
 * @method     ChildSystemDefinition findOneByCscpdspermission(string $CscpDsPermission) Return the first ChildSystemDefinition filtered by the CscpDsPermission column
 * @method     ChildSystemDefinition findOneByCscprapermission(string $CscpRaPermission) Return the first ChildSystemDefinition filtered by the CscpRaPermission column
 * @method     ChildSystemDefinition findOneByCscpsrppermission(string $CscpSrpPermission) Return the first ChildSystemDefinition filtered by the CscpSrpPermission column
 * @method     ChildSystemDefinition findOneByCscpemailtype(string $CscpEmailType) Return the first ChildSystemDefinition filtered by the CscpEmailType column
 * @method     ChildSystemDefinition findOneByCscpfaxdir(string $CscpFaxDir) Return the first ChildSystemDefinition filtered by the CscpFaxDir column
 * @method     ChildSystemDefinition findOneByCscpprgdir(string $CscpPrgDir) Return the first ChildSystemDefinition filtered by the CscpPrgDir column
 * @method     ChildSystemDefinition findOneByCscpfile1dir(string $CscpFile1Dir) Return the first ChildSystemDefinition filtered by the CscpFile1Dir column
 * @method     ChildSystemDefinition findOneByCscpfile2dir(string $CscpFile2Dir) Return the first ChildSystemDefinition filtered by the CscpFile2Dir column
 * @method     ChildSystemDefinition findOneByCscpfile3dir(string $CscpFile3Dir) Return the first ChildSystemDefinition filtered by the CscpFile3Dir column
 * @method     ChildSystemDefinition findOneByCscptempdir(string $CscpTempDir) Return the first ChildSystemDefinition filtered by the CscpTempDir column
 * @method     ChildSystemDefinition findOneByCscpworkdir(string $CscpWorkDir) Return the first ChildSystemDefinition filtered by the CscpWorkDir column
 * @method     ChildSystemDefinition findOneByCscpreptarchdir(string $CscpReptArchDir) Return the first ChildSystemDefinition filtered by the CscpReptArchDir column
 * @method     ChildSystemDefinition findOneByCscpdocinboxdir(string $CscpDocInboxDir) Return the first ChildSystemDefinition filtered by the CscpDocInboxDir column
 * @method     ChildSystemDefinition findOneByCscpdocautodir(string $CscpDocAutoDir) Return the first ChildSystemDefinition filtered by the CscpDocAutoDir column
 * @method     ChildSystemDefinition findOneByCscpcertsdir(string $CscpCertsDir) Return the first ChildSystemDefinition filtered by the CscpCertsDir column
 * @method     ChildSystemDefinition findOneByCscpimgproduct(string $CscpImgProduct) Return the first ChildSystemDefinition filtered by the CscpImgProduct column
 * @method     ChildSystemDefinition findOneByCscpimgdrawings(string $CscpImgDrawings) Return the first ChildSystemDefinition filtered by the CscpImgDrawings column
 * @method     ChildSystemDefinition findOneByCscpimgschematic(string $CscpImgSchematic) Return the first ChildSystemDefinition filtered by the CscpImgSchematic column
 * @method     ChildSystemDefinition findOneByCscpimgconfirm(string $CscpImgConfirm) Return the first ChildSystemDefinition filtered by the CscpImgConfirm column
 * @method     ChildSystemDefinition findOneByCscppcchargedir(string $CscpPcchargeDir) Return the first ChildSystemDefinition filtered by the CscpPcchargeDir column
 * @method     ChildSystemDefinition findOneByCscpdevicedir(string $CscpDeviceDir) Return the first ChildSystemDefinition filtered by the CscpDeviceDir column
 * @method     ChildSystemDefinition findOneByCscpecommdir(string $CscpEcommDir) Return the first ChildSystemDefinition filtered by the CscpEcommDir column
 * @method     ChildSystemDefinition findOneByCscpbrwzbaseip(string $CscpBrwzBaseIp) Return the first ChildSystemDefinition filtered by the CscpBrwzBaseIp column
 * @method     ChildSystemDefinition findOneByCscpdatabasename(string $CscpDataBaseName) Return the first ChildSystemDefinition filtered by the CscpDataBaseName column
 * @method     ChildSystemDefinition findOneByCscpcompdatabasename(string $CscpCompDataBaseName) Return the first ChildSystemDefinition filtered by the CscpCompDataBaseName column
 * @method     ChildSystemDefinition findOneByCscpfgrndcolor(int $CscpFgrndColor) Return the first ChildSystemDefinition filtered by the CscpFgrndColor column
 * @method     ChildSystemDefinition findOneByDateupdtd(string $DateUpdtd) Return the first ChildSystemDefinition filtered by the DateUpdtd column
 * @method     ChildSystemDefinition findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSystemDefinition filtered by the TimeUpdtd column
 * @method     ChildSystemDefinition findOneByDummy(string $dummy) Return the first ChildSystemDefinition filtered by the dummy column *

 * @method     ChildSystemDefinition requirePk($key, ConnectionInterface $con = null) Return the ChildSystemDefinition by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOne(ConnectionInterface $con = null) Return the first ChildSystemDefinition matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSystemDefinition requireOneByCscpcompnbr(int $CscpCompNbr) Return the first ChildSystemDefinition filtered by the CscpCompNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpcompid(string $CscpCompId) Return the first ChildSystemDefinition filtered by the CscpCompId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpcompname(string $CscpCompName) Return the first ChildSystemDefinition filtered by the CscpCompName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpdspermission(string $CscpDsPermission) Return the first ChildSystemDefinition filtered by the CscpDsPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscprapermission(string $CscpRaPermission) Return the first ChildSystemDefinition filtered by the CscpRaPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpsrppermission(string $CscpSrpPermission) Return the first ChildSystemDefinition filtered by the CscpSrpPermission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpemailtype(string $CscpEmailType) Return the first ChildSystemDefinition filtered by the CscpEmailType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpfaxdir(string $CscpFaxDir) Return the first ChildSystemDefinition filtered by the CscpFaxDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpprgdir(string $CscpPrgDir) Return the first ChildSystemDefinition filtered by the CscpPrgDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpfile1dir(string $CscpFile1Dir) Return the first ChildSystemDefinition filtered by the CscpFile1Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpfile2dir(string $CscpFile2Dir) Return the first ChildSystemDefinition filtered by the CscpFile2Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpfile3dir(string $CscpFile3Dir) Return the first ChildSystemDefinition filtered by the CscpFile3Dir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscptempdir(string $CscpTempDir) Return the first ChildSystemDefinition filtered by the CscpTempDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpworkdir(string $CscpWorkDir) Return the first ChildSystemDefinition filtered by the CscpWorkDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpreptarchdir(string $CscpReptArchDir) Return the first ChildSystemDefinition filtered by the CscpReptArchDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpdocinboxdir(string $CscpDocInboxDir) Return the first ChildSystemDefinition filtered by the CscpDocInboxDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpdocautodir(string $CscpDocAutoDir) Return the first ChildSystemDefinition filtered by the CscpDocAutoDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpcertsdir(string $CscpCertsDir) Return the first ChildSystemDefinition filtered by the CscpCertsDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpimgproduct(string $CscpImgProduct) Return the first ChildSystemDefinition filtered by the CscpImgProduct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpimgdrawings(string $CscpImgDrawings) Return the first ChildSystemDefinition filtered by the CscpImgDrawings column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpimgschematic(string $CscpImgSchematic) Return the first ChildSystemDefinition filtered by the CscpImgSchematic column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpimgconfirm(string $CscpImgConfirm) Return the first ChildSystemDefinition filtered by the CscpImgConfirm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscppcchargedir(string $CscpPcchargeDir) Return the first ChildSystemDefinition filtered by the CscpPcchargeDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpdevicedir(string $CscpDeviceDir) Return the first ChildSystemDefinition filtered by the CscpDeviceDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpecommdir(string $CscpEcommDir) Return the first ChildSystemDefinition filtered by the CscpEcommDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpbrwzbaseip(string $CscpBrwzBaseIp) Return the first ChildSystemDefinition filtered by the CscpBrwzBaseIp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpdatabasename(string $CscpDataBaseName) Return the first ChildSystemDefinition filtered by the CscpDataBaseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpcompdatabasename(string $CscpCompDataBaseName) Return the first ChildSystemDefinition filtered by the CscpCompDataBaseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByCscpfgrndcolor(int $CscpFgrndColor) Return the first ChildSystemDefinition filtered by the CscpFgrndColor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSystemDefinition filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSystemDefinition filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSystemDefinition requireOneByDummy(string $dummy) Return the first ChildSystemDefinition filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSystemDefinition[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSystemDefinition objects based on current ModelCriteria
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpcompnbr(int $CscpCompNbr) Return ChildSystemDefinition objects filtered by the CscpCompNbr column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpcompid(string $CscpCompId) Return ChildSystemDefinition objects filtered by the CscpCompId column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpcompname(string $CscpCompName) Return ChildSystemDefinition objects filtered by the CscpCompName column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpdspermission(string $CscpDsPermission) Return ChildSystemDefinition objects filtered by the CscpDsPermission column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscprapermission(string $CscpRaPermission) Return ChildSystemDefinition objects filtered by the CscpRaPermission column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpsrppermission(string $CscpSrpPermission) Return ChildSystemDefinition objects filtered by the CscpSrpPermission column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpemailtype(string $CscpEmailType) Return ChildSystemDefinition objects filtered by the CscpEmailType column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpfaxdir(string $CscpFaxDir) Return ChildSystemDefinition objects filtered by the CscpFaxDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpprgdir(string $CscpPrgDir) Return ChildSystemDefinition objects filtered by the CscpPrgDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpfile1dir(string $CscpFile1Dir) Return ChildSystemDefinition objects filtered by the CscpFile1Dir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpfile2dir(string $CscpFile2Dir) Return ChildSystemDefinition objects filtered by the CscpFile2Dir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpfile3dir(string $CscpFile3Dir) Return ChildSystemDefinition objects filtered by the CscpFile3Dir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscptempdir(string $CscpTempDir) Return ChildSystemDefinition objects filtered by the CscpTempDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpworkdir(string $CscpWorkDir) Return ChildSystemDefinition objects filtered by the CscpWorkDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpreptarchdir(string $CscpReptArchDir) Return ChildSystemDefinition objects filtered by the CscpReptArchDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpdocinboxdir(string $CscpDocInboxDir) Return ChildSystemDefinition objects filtered by the CscpDocInboxDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpdocautodir(string $CscpDocAutoDir) Return ChildSystemDefinition objects filtered by the CscpDocAutoDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpcertsdir(string $CscpCertsDir) Return ChildSystemDefinition objects filtered by the CscpCertsDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpimgproduct(string $CscpImgProduct) Return ChildSystemDefinition objects filtered by the CscpImgProduct column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpimgdrawings(string $CscpImgDrawings) Return ChildSystemDefinition objects filtered by the CscpImgDrawings column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpimgschematic(string $CscpImgSchematic) Return ChildSystemDefinition objects filtered by the CscpImgSchematic column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpimgconfirm(string $CscpImgConfirm) Return ChildSystemDefinition objects filtered by the CscpImgConfirm column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscppcchargedir(string $CscpPcchargeDir) Return ChildSystemDefinition objects filtered by the CscpPcchargeDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpdevicedir(string $CscpDeviceDir) Return ChildSystemDefinition objects filtered by the CscpDeviceDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpecommdir(string $CscpEcommDir) Return ChildSystemDefinition objects filtered by the CscpEcommDir column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpbrwzbaseip(string $CscpBrwzBaseIp) Return ChildSystemDefinition objects filtered by the CscpBrwzBaseIp column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpdatabasename(string $CscpDataBaseName) Return ChildSystemDefinition objects filtered by the CscpDataBaseName column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpcompdatabasename(string $CscpCompDataBaseName) Return ChildSystemDefinition objects filtered by the CscpCompDataBaseName column
 * @method     ChildSystemDefinition[]|ObjectCollection findByCscpfgrndcolor(int $CscpFgrndColor) Return ChildSystemDefinition objects filtered by the CscpFgrndColor column
 * @method     ChildSystemDefinition[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSystemDefinition objects filtered by the DateUpdtd column
 * @method     ChildSystemDefinition[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSystemDefinition objects filtered by the TimeUpdtd column
 * @method     ChildSystemDefinition[]|ObjectCollection findByDummy(string $dummy) Return ChildSystemDefinition objects filtered by the dummy column
 * @method     ChildSystemDefinition[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SystemDefinitionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SystemDefinitionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SystemDefinition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSystemDefinitionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSystemDefinitionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSystemDefinitionQuery) {
            return $criteria;
        }
        $query = new ChildSystemDefinitionQuery();
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
     * @return ChildSystemDefinition|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SystemDefinitionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SystemDefinitionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSystemDefinition A model object, or null if the key is not found
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
            /** @var ChildSystemDefinition $obj */
            $obj = new ChildSystemDefinition();
            $obj->hydrate($row);
            SystemDefinitionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSystemDefinition|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $keys, Criteria::IN);
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
     * @param     mixed $cscpcompnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpcompnbr($cscpcompnbr = null, $comparison = null)
    {
        if (is_array($cscpcompnbr)) {
            $useMinMax = false;
            if (isset($cscpcompnbr['min'])) {
                $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $cscpcompnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cscpcompnbr['max'])) {
                $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $cscpcompnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $cscpcompnbr, $comparison);
    }

    /**
     * Filter the query on the CscpCompId column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompid('fooValue');   // WHERE CscpCompId = 'fooValue'
     * $query->filterByCscpcompid('%fooValue%', Criteria::LIKE); // WHERE CscpCompId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpcompid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpcompid($cscpcompid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPID, $cscpcompid, $comparison);
    }

    /**
     * Filter the query on the CscpCompName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompname('fooValue');   // WHERE CscpCompName = 'fooValue'
     * $query->filterByCscpcompname('%fooValue%', Criteria::LIKE); // WHERE CscpCompName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpcompname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpcompname($cscpcompname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNAME, $cscpcompname, $comparison);
    }

    /**
     * Filter the query on the CscpDsPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdspermission('fooValue');   // WHERE CscpDsPermission = 'fooValue'
     * $query->filterByCscpdspermission('%fooValue%', Criteria::LIKE); // WHERE CscpDsPermission LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpdspermission The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpdspermission($cscpdspermission = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdspermission)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPDSPERMISSION, $cscpdspermission, $comparison);
    }

    /**
     * Filter the query on the CscpRaPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscprapermission('fooValue');   // WHERE CscpRaPermission = 'fooValue'
     * $query->filterByCscprapermission('%fooValue%', Criteria::LIKE); // WHERE CscpRaPermission LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscprapermission The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscprapermission($cscprapermission = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscprapermission)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPRAPERMISSION, $cscprapermission, $comparison);
    }

    /**
     * Filter the query on the CscpSrpPermission column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpsrppermission('fooValue');   // WHERE CscpSrpPermission = 'fooValue'
     * $query->filterByCscpsrppermission('%fooValue%', Criteria::LIKE); // WHERE CscpSrpPermission LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpsrppermission The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpsrppermission($cscpsrppermission = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpsrppermission)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPSRPPERMISSION, $cscpsrppermission, $comparison);
    }

    /**
     * Filter the query on the CscpEmailType column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpemailtype('fooValue');   // WHERE CscpEmailType = 'fooValue'
     * $query->filterByCscpemailtype('%fooValue%', Criteria::LIKE); // WHERE CscpEmailType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpemailtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpemailtype($cscpemailtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpemailtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPEMAILTYPE, $cscpemailtype, $comparison);
    }

    /**
     * Filter the query on the CscpFaxDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfaxdir('fooValue');   // WHERE CscpFaxDir = 'fooValue'
     * $query->filterByCscpfaxdir('%fooValue%', Criteria::LIKE); // WHERE CscpFaxDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpfaxdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpfaxdir($cscpfaxdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfaxdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFAXDIR, $cscpfaxdir, $comparison);
    }

    /**
     * Filter the query on the CscpPrgDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpprgdir('fooValue');   // WHERE CscpPrgDir = 'fooValue'
     * $query->filterByCscpprgdir('%fooValue%', Criteria::LIKE); // WHERE CscpPrgDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpprgdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpprgdir($cscpprgdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpprgdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPPRGDIR, $cscpprgdir, $comparison);
    }

    /**
     * Filter the query on the CscpFile1Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile1dir('fooValue');   // WHERE CscpFile1Dir = 'fooValue'
     * $query->filterByCscpfile1dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile1Dir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpfile1dir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpfile1dir($cscpfile1dir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile1dir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFILE1DIR, $cscpfile1dir, $comparison);
    }

    /**
     * Filter the query on the CscpFile2Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile2dir('fooValue');   // WHERE CscpFile2Dir = 'fooValue'
     * $query->filterByCscpfile2dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile2Dir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpfile2dir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpfile2dir($cscpfile2dir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile2dir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFILE2DIR, $cscpfile2dir, $comparison);
    }

    /**
     * Filter the query on the CscpFile3Dir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpfile3dir('fooValue');   // WHERE CscpFile3Dir = 'fooValue'
     * $query->filterByCscpfile3dir('%fooValue%', Criteria::LIKE); // WHERE CscpFile3Dir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpfile3dir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpfile3dir($cscpfile3dir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpfile3dir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFILE3DIR, $cscpfile3dir, $comparison);
    }

    /**
     * Filter the query on the CscpTempDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscptempdir('fooValue');   // WHERE CscpTempDir = 'fooValue'
     * $query->filterByCscptempdir('%fooValue%', Criteria::LIKE); // WHERE CscpTempDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscptempdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscptempdir($cscptempdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscptempdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPTEMPDIR, $cscptempdir, $comparison);
    }

    /**
     * Filter the query on the CscpWorkDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpworkdir('fooValue');   // WHERE CscpWorkDir = 'fooValue'
     * $query->filterByCscpworkdir('%fooValue%', Criteria::LIKE); // WHERE CscpWorkDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpworkdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpworkdir($cscpworkdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpworkdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPWORKDIR, $cscpworkdir, $comparison);
    }

    /**
     * Filter the query on the CscpReptArchDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpreptarchdir('fooValue');   // WHERE CscpReptArchDir = 'fooValue'
     * $query->filterByCscpreptarchdir('%fooValue%', Criteria::LIKE); // WHERE CscpReptArchDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpreptarchdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpreptarchdir($cscpreptarchdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpreptarchdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPREPTARCHDIR, $cscpreptarchdir, $comparison);
    }

    /**
     * Filter the query on the CscpDocInboxDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdocinboxdir('fooValue');   // WHERE CscpDocInboxDir = 'fooValue'
     * $query->filterByCscpdocinboxdir('%fooValue%', Criteria::LIKE); // WHERE CscpDocInboxDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpdocinboxdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpdocinboxdir($cscpdocinboxdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdocinboxdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPDOCINBOXDIR, $cscpdocinboxdir, $comparison);
    }

    /**
     * Filter the query on the CscpDocAutoDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdocautodir('fooValue');   // WHERE CscpDocAutoDir = 'fooValue'
     * $query->filterByCscpdocautodir('%fooValue%', Criteria::LIKE); // WHERE CscpDocAutoDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpdocautodir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpdocautodir($cscpdocautodir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdocautodir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPDOCAUTODIR, $cscpdocautodir, $comparison);
    }

    /**
     * Filter the query on the CscpCertsDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcertsdir('fooValue');   // WHERE CscpCertsDir = 'fooValue'
     * $query->filterByCscpcertsdir('%fooValue%', Criteria::LIKE); // WHERE CscpCertsDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpcertsdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpcertsdir($cscpcertsdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcertsdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCERTSDIR, $cscpcertsdir, $comparison);
    }

    /**
     * Filter the query on the CscpImgProduct column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgproduct('fooValue');   // WHERE CscpImgProduct = 'fooValue'
     * $query->filterByCscpimgproduct('%fooValue%', Criteria::LIKE); // WHERE CscpImgProduct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpimgproduct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpimgproduct($cscpimgproduct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgproduct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPIMGPRODUCT, $cscpimgproduct, $comparison);
    }

    /**
     * Filter the query on the CscpImgDrawings column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgdrawings('fooValue');   // WHERE CscpImgDrawings = 'fooValue'
     * $query->filterByCscpimgdrawings('%fooValue%', Criteria::LIKE); // WHERE CscpImgDrawings LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpimgdrawings The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpimgdrawings($cscpimgdrawings = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgdrawings)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPIMGDRAWINGS, $cscpimgdrawings, $comparison);
    }

    /**
     * Filter the query on the CscpImgSchematic column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgschematic('fooValue');   // WHERE CscpImgSchematic = 'fooValue'
     * $query->filterByCscpimgschematic('%fooValue%', Criteria::LIKE); // WHERE CscpImgSchematic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpimgschematic The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpimgschematic($cscpimgschematic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgschematic)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPIMGSCHEMATIC, $cscpimgschematic, $comparison);
    }

    /**
     * Filter the query on the CscpImgConfirm column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpimgconfirm('fooValue');   // WHERE CscpImgConfirm = 'fooValue'
     * $query->filterByCscpimgconfirm('%fooValue%', Criteria::LIKE); // WHERE CscpImgConfirm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpimgconfirm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpimgconfirm($cscpimgconfirm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpimgconfirm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPIMGCONFIRM, $cscpimgconfirm, $comparison);
    }

    /**
     * Filter the query on the CscpPcchargeDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscppcchargedir('fooValue');   // WHERE CscpPcchargeDir = 'fooValue'
     * $query->filterByCscppcchargedir('%fooValue%', Criteria::LIKE); // WHERE CscpPcchargeDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscppcchargedir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscppcchargedir($cscppcchargedir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscppcchargedir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPPCCHARGEDIR, $cscppcchargedir, $comparison);
    }

    /**
     * Filter the query on the CscpDeviceDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdevicedir('fooValue');   // WHERE CscpDeviceDir = 'fooValue'
     * $query->filterByCscpdevicedir('%fooValue%', Criteria::LIKE); // WHERE CscpDeviceDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpdevicedir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpdevicedir($cscpdevicedir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdevicedir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPDEVICEDIR, $cscpdevicedir, $comparison);
    }

    /**
     * Filter the query on the CscpEcommDir column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpecommdir('fooValue');   // WHERE CscpEcommDir = 'fooValue'
     * $query->filterByCscpecommdir('%fooValue%', Criteria::LIKE); // WHERE CscpEcommDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpecommdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpecommdir($cscpecommdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpecommdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPECOMMDIR, $cscpecommdir, $comparison);
    }

    /**
     * Filter the query on the CscpBrwzBaseIp column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpbrwzbaseip('fooValue');   // WHERE CscpBrwzBaseIp = 'fooValue'
     * $query->filterByCscpbrwzbaseip('%fooValue%', Criteria::LIKE); // WHERE CscpBrwzBaseIp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpbrwzbaseip The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpbrwzbaseip($cscpbrwzbaseip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpbrwzbaseip)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPBRWZBASEIP, $cscpbrwzbaseip, $comparison);
    }

    /**
     * Filter the query on the CscpDataBaseName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpdatabasename('fooValue');   // WHERE CscpDataBaseName = 'fooValue'
     * $query->filterByCscpdatabasename('%fooValue%', Criteria::LIKE); // WHERE CscpDataBaseName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpdatabasename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpdatabasename($cscpdatabasename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpdatabasename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPDATABASENAME, $cscpdatabasename, $comparison);
    }

    /**
     * Filter the query on the CscpCompDataBaseName column
     *
     * Example usage:
     * <code>
     * $query->filterByCscpcompdatabasename('fooValue');   // WHERE CscpCompDataBaseName = 'fooValue'
     * $query->filterByCscpcompdatabasename('%fooValue%', Criteria::LIKE); // WHERE CscpCompDataBaseName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cscpcompdatabasename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpcompdatabasename($cscpcompdatabasename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cscpcompdatabasename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPDATABASENAME, $cscpcompdatabasename, $comparison);
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
     * @param     mixed $cscpfgrndcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByCscpfgrndcolor($cscpfgrndcolor = null, $comparison = null)
    {
        if (is_array($cscpfgrndcolor)) {
            $useMinMax = false;
            if (isset($cscpfgrndcolor['min'])) {
                $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cscpfgrndcolor['max'])) {
                $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPFGRNDCOLOR, $cscpfgrndcolor, $comparison);
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
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SystemDefinitionTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSystemDefinition $systemDefinition Object to remove from the list of results
     *
     * @return $this|ChildSystemDefinitionQuery The current query, for fluid interface
     */
    public function prune($systemDefinition = null)
    {
        if ($systemDefinition) {
            $this->addUsingAlias(SystemDefinitionTableMap::COL_CSCPCOMPNBR, $systemDefinition->getCscpcompnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_definition table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SystemDefinitionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SystemDefinitionTableMap::clearInstancePool();
            SystemDefinitionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SystemDefinitionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SystemDefinitionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SystemDefinitionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SystemDefinitionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SystemDefinitionQuery
