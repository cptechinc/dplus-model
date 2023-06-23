<?php

namespace Base;

use \DplusUser as ChildDplusUser;
use \DplusUserQuery as ChildDplusUserQuery;
use \Exception;
use \PDO;
use Map\DplusUserTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_login' table.
 *
 *
 *
 * @method     ChildDplusUserQuery orderByUsrcid($order = Criteria::ASC) Order by the UsrcId column
 * @method     ChildDplusUserQuery orderByUsrcloginname($order = Criteria::ASC) Order by the UsrcLoginName column
 * @method     ChildDplusUserQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildDplusUserQuery orderByUsrcdefcmpy($order = Criteria::ASC) Order by the UsrcDefCmpy column
 * @method     ChildDplusUserQuery orderByUsrcadmin($order = Criteria::ASC) Order by the UsrcAdmin column
 * @method     ChildDplusUserQuery orderByUsrcfront($order = Criteria::ASC) Order by the UsrcFront column
 * @method     ChildDplusUserQuery orderByUsrccitydesk($order = Criteria::ASC) Order by the UsrcCityDesk column
 * @method     ChildDplusUserQuery orderByUsrcreptadmin($order = Criteria::ASC) Order by the UsrcReptAdmin column
 * @method     ChildDplusUserQuery orderByUsrcprinter($order = Criteria::ASC) Order by the UsrcPrinter column
 * @method     ChildDplusUserQuery orderByUsrcpitch($order = Criteria::ASC) Order by the UsrcPitch column
 * @method     ChildDplusUserQuery orderByUsrcbrowseprinter($order = Criteria::ASC) Order by the UsrcBrowsePrinter column
 * @method     ChildDplusUserQuery orderByUsrcwhsedisplayseq($order = Criteria::ASC) Order by the UsrcWhseDisplaySeq column
 * @method     ChildDplusUserQuery orderByUsrcactiveitemsonly($order = Criteria::ASC) Order by the UsrcActiveItemsOnly column
 * @method     ChildDplusUserQuery orderByUsrcrestrictaccess($order = Criteria::ASC) Order by the UsrcRestrictAccess column
 * @method     ChildDplusUserQuery orderByUsrclogingroup($order = Criteria::ASC) Order by the UsrcLoginGroup column
 * @method     ChildDplusUserQuery orderByUsrcloginrole($order = Criteria::ASC) Order by the UsrcLoginRole column
 * @method     ChildDplusUserQuery orderByUsrcallowprocremoval($order = Criteria::ASC) Order by the UsrcAllowProcRemoval column
 * @method     ChildDplusUserQuery orderByUsrcacallowwarredit($order = Criteria::ASC) Order by the UsrcAcAllowWarrEdit column
 * @method     ChildDplusUserQuery orderByUsrcisprodmgr($order = Criteria::ASC) Order by the UsrcIsProdMgr column
 * @method     ChildDplusUserQuery orderByUsrclmallowcrosswhse($order = Criteria::ASC) Order by the UsrcLmAllowCrossWhse column
 * @method     ChildDplusUserQuery orderByUsrcpswd($order = Criteria::ASC) Order by the UsrcPswd column
 * @method     ChildDplusUserQuery orderByUsrcfaxname($order = Criteria::ASC) Order by the UsrcFaxName column
 * @method     ChildDplusUserQuery orderByUsrcfaxcompany($order = Criteria::ASC) Order by the UsrcFaxCompany column
 * @method     ChildDplusUserQuery orderByUsrcfaxarea($order = Criteria::ASC) Order by the UsrcFaxArea column
 * @method     ChildDplusUserQuery orderByUsrcfaxfrst3($order = Criteria::ASC) Order by the UsrcFaxFrst3 column
 * @method     ChildDplusUserQuery orderByUsrcfaxlast4($order = Criteria::ASC) Order by the UsrcFaxLast4 column
 * @method     ChildDplusUserQuery orderByUsrcphonearea($order = Criteria::ASC) Order by the UsrcPhoneArea column
 * @method     ChildDplusUserQuery orderByUsrcphonefrst3($order = Criteria::ASC) Order by the UsrcPhoneFrst3 column
 * @method     ChildDplusUserQuery orderByUsrcphonelast4($order = Criteria::ASC) Order by the UsrcPhoneLast4 column
 * @method     ChildDplusUserQuery orderByUsrcphoneext($order = Criteria::ASC) Order by the UsrcPhoneExt column
 * @method     ChildDplusUserQuery orderByUsrcsendtime($order = Criteria::ASC) Order by the UsrcSendTime column
 * @method     ChildDplusUserQuery orderByUsrccoversheet($order = Criteria::ASC) Order by the UsrcCoverSheet column
 * @method     ChildDplusUserQuery orderByUsrcsubject($order = Criteria::ASC) Order by the UsrcSubject column
 * @method     ChildDplusUserQuery orderByUsrcnotifys($order = Criteria::ASC) Order by the UsrcNotifyS column
 * @method     ChildDplusUserQuery orderByUsrcnotifyf($order = Criteria::ASC) Order by the UsrcNotifyF column
 * @method     ChildDplusUserQuery orderByUsrcemailaddr($order = Criteria::ASC) Order by the UsrcEmailAddr column
 * @method     ChildDplusUserQuery orderByUsrcscalewhseid($order = Criteria::ASC) Order by the UsrcScaleWhseId column
 * @method     ChildDplusUserQuery orderByUsrcscaledevnbr($order = Criteria::ASC) Order by the UsrcScaleDevNbr column
 * @method     ChildDplusUserQuery orderByUsrcccscanwhseid($order = Criteria::ASC) Order by the UsrcCcscanWhseId column
 * @method     ChildDplusUserQuery orderByUsrcccscandevnbr($order = Criteria::ASC) Order by the UsrcCcscanDevNbr column
 * @method     ChildDplusUserQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildDplusUserQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildDplusUserQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildDplusUserQuery groupByUsrcid() Group by the UsrcId column
 * @method     ChildDplusUserQuery groupByUsrcloginname() Group by the UsrcLoginName column
 * @method     ChildDplusUserQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildDplusUserQuery groupByUsrcdefcmpy() Group by the UsrcDefCmpy column
 * @method     ChildDplusUserQuery groupByUsrcadmin() Group by the UsrcAdmin column
 * @method     ChildDplusUserQuery groupByUsrcfront() Group by the UsrcFront column
 * @method     ChildDplusUserQuery groupByUsrccitydesk() Group by the UsrcCityDesk column
 * @method     ChildDplusUserQuery groupByUsrcreptadmin() Group by the UsrcReptAdmin column
 * @method     ChildDplusUserQuery groupByUsrcprinter() Group by the UsrcPrinter column
 * @method     ChildDplusUserQuery groupByUsrcpitch() Group by the UsrcPitch column
 * @method     ChildDplusUserQuery groupByUsrcbrowseprinter() Group by the UsrcBrowsePrinter column
 * @method     ChildDplusUserQuery groupByUsrcwhsedisplayseq() Group by the UsrcWhseDisplaySeq column
 * @method     ChildDplusUserQuery groupByUsrcactiveitemsonly() Group by the UsrcActiveItemsOnly column
 * @method     ChildDplusUserQuery groupByUsrcrestrictaccess() Group by the UsrcRestrictAccess column
 * @method     ChildDplusUserQuery groupByUsrclogingroup() Group by the UsrcLoginGroup column
 * @method     ChildDplusUserQuery groupByUsrcloginrole() Group by the UsrcLoginRole column
 * @method     ChildDplusUserQuery groupByUsrcallowprocremoval() Group by the UsrcAllowProcRemoval column
 * @method     ChildDplusUserQuery groupByUsrcacallowwarredit() Group by the UsrcAcAllowWarrEdit column
 * @method     ChildDplusUserQuery groupByUsrcisprodmgr() Group by the UsrcIsProdMgr column
 * @method     ChildDplusUserQuery groupByUsrclmallowcrosswhse() Group by the UsrcLmAllowCrossWhse column
 * @method     ChildDplusUserQuery groupByUsrcpswd() Group by the UsrcPswd column
 * @method     ChildDplusUserQuery groupByUsrcfaxname() Group by the UsrcFaxName column
 * @method     ChildDplusUserQuery groupByUsrcfaxcompany() Group by the UsrcFaxCompany column
 * @method     ChildDplusUserQuery groupByUsrcfaxarea() Group by the UsrcFaxArea column
 * @method     ChildDplusUserQuery groupByUsrcfaxfrst3() Group by the UsrcFaxFrst3 column
 * @method     ChildDplusUserQuery groupByUsrcfaxlast4() Group by the UsrcFaxLast4 column
 * @method     ChildDplusUserQuery groupByUsrcphonearea() Group by the UsrcPhoneArea column
 * @method     ChildDplusUserQuery groupByUsrcphonefrst3() Group by the UsrcPhoneFrst3 column
 * @method     ChildDplusUserQuery groupByUsrcphonelast4() Group by the UsrcPhoneLast4 column
 * @method     ChildDplusUserQuery groupByUsrcphoneext() Group by the UsrcPhoneExt column
 * @method     ChildDplusUserQuery groupByUsrcsendtime() Group by the UsrcSendTime column
 * @method     ChildDplusUserQuery groupByUsrccoversheet() Group by the UsrcCoverSheet column
 * @method     ChildDplusUserQuery groupByUsrcsubject() Group by the UsrcSubject column
 * @method     ChildDplusUserQuery groupByUsrcnotifys() Group by the UsrcNotifyS column
 * @method     ChildDplusUserQuery groupByUsrcnotifyf() Group by the UsrcNotifyF column
 * @method     ChildDplusUserQuery groupByUsrcemailaddr() Group by the UsrcEmailAddr column
 * @method     ChildDplusUserQuery groupByUsrcscalewhseid() Group by the UsrcScaleWhseId column
 * @method     ChildDplusUserQuery groupByUsrcscaledevnbr() Group by the UsrcScaleDevNbr column
 * @method     ChildDplusUserQuery groupByUsrcccscanwhseid() Group by the UsrcCcscanWhseId column
 * @method     ChildDplusUserQuery groupByUsrcccscandevnbr() Group by the UsrcCcscanDevNbr column
 * @method     ChildDplusUserQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildDplusUserQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildDplusUserQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildDplusUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildDplusUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildDplusUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildDplusUserQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildDplusUserQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildDplusUserQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildDplusUserQuery leftJoinSysLoginGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysLoginGroup relation
 * @method     ChildDplusUserQuery rightJoinSysLoginGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysLoginGroup relation
 * @method     ChildDplusUserQuery innerJoinSysLoginGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SysLoginGroup relation
 *
 * @method     ChildDplusUserQuery joinWithSysLoginGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SysLoginGroup relation
 *
 * @method     ChildDplusUserQuery leftJoinWithSysLoginGroup() Adds a LEFT JOIN clause and with to the query using the SysLoginGroup relation
 * @method     ChildDplusUserQuery rightJoinWithSysLoginGroup() Adds a RIGHT JOIN clause and with to the query using the SysLoginGroup relation
 * @method     ChildDplusUserQuery innerJoinWithSysLoginGroup() Adds a INNER JOIN clause and with to the query using the SysLoginGroup relation
 *
 * @method     ChildDplusUserQuery leftJoinSysLoginRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the SysLoginRole relation
 * @method     ChildDplusUserQuery rightJoinSysLoginRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SysLoginRole relation
 * @method     ChildDplusUserQuery innerJoinSysLoginRole($relationAlias = null) Adds a INNER JOIN clause to the query using the SysLoginRole relation
 *
 * @method     ChildDplusUserQuery joinWithSysLoginRole($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SysLoginRole relation
 *
 * @method     ChildDplusUserQuery leftJoinWithSysLoginRole() Adds a LEFT JOIN clause and with to the query using the SysLoginRole relation
 * @method     ChildDplusUserQuery rightJoinWithSysLoginRole() Adds a RIGHT JOIN clause and with to the query using the SysLoginRole relation
 * @method     ChildDplusUserQuery innerJoinWithSysLoginRole() Adds a INNER JOIN clause and with to the query using the SysLoginRole relation
 *
 * @method     ChildDplusUserQuery leftJoinInvLotTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotTag relation
 * @method     ChildDplusUserQuery rightJoinInvLotTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotTag relation
 * @method     ChildDplusUserQuery innerJoinInvLotTag($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotTag relation
 *
 * @method     ChildDplusUserQuery joinWithInvLotTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotTag relation
 *
 * @method     ChildDplusUserQuery leftJoinWithInvLotTag() Adds a LEFT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildDplusUserQuery rightJoinWithInvLotTag() Adds a RIGHT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildDplusUserQuery innerJoinWithInvLotTag() Adds a INNER JOIN clause and with to the query using the InvLotTag relation
 *
 * @method     ChildDplusUserQuery leftJoinUserPermissionsItm($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserPermissionsItm relation
 * @method     ChildDplusUserQuery rightJoinUserPermissionsItm($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserPermissionsItm relation
 * @method     ChildDplusUserQuery innerJoinUserPermissionsItm($relationAlias = null) Adds a INNER JOIN clause to the query using the UserPermissionsItm relation
 *
 * @method     ChildDplusUserQuery joinWithUserPermissionsItm($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UserPermissionsItm relation
 *
 * @method     ChildDplusUserQuery leftJoinWithUserPermissionsItm() Adds a LEFT JOIN clause and with to the query using the UserPermissionsItm relation
 * @method     ChildDplusUserQuery rightJoinWithUserPermissionsItm() Adds a RIGHT JOIN clause and with to the query using the UserPermissionsItm relation
 * @method     ChildDplusUserQuery innerJoinWithUserPermissionsItm() Adds a INNER JOIN clause and with to the query using the UserPermissionsItm relation
 *
 * @method     ChildDplusUserQuery leftJoinUserLastPrintJob($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserLastPrintJob relation
 * @method     ChildDplusUserQuery rightJoinUserLastPrintJob($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserLastPrintJob relation
 * @method     ChildDplusUserQuery innerJoinUserLastPrintJob($relationAlias = null) Adds a INNER JOIN clause to the query using the UserLastPrintJob relation
 *
 * @method     ChildDplusUserQuery joinWithUserLastPrintJob($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UserLastPrintJob relation
 *
 * @method     ChildDplusUserQuery leftJoinWithUserLastPrintJob() Adds a LEFT JOIN clause and with to the query using the UserLastPrintJob relation
 * @method     ChildDplusUserQuery rightJoinWithUserLastPrintJob() Adds a RIGHT JOIN clause and with to the query using the UserLastPrintJob relation
 * @method     ChildDplusUserQuery innerJoinWithUserLastPrintJob() Adds a INNER JOIN clause and with to the query using the UserLastPrintJob relation
 *
 * @method     \SysLoginGroupQuery|\SysLoginRoleQuery|\InvLotTagQuery|\UserPermissionsItmQuery|\UserLastPrintJobQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildDplusUser findOne(ConnectionInterface $con = null) Return the first ChildDplusUser matching the query
 * @method     ChildDplusUser findOneOrCreate(ConnectionInterface $con = null) Return the first ChildDplusUser matching the query, or a new ChildDplusUser object populated from the query conditions when no match is found
 *
 * @method     ChildDplusUser findOneByUsrcid(string $UsrcId) Return the first ChildDplusUser filtered by the UsrcId column
 * @method     ChildDplusUser findOneByUsrcloginname(string $UsrcLoginName) Return the first ChildDplusUser filtered by the UsrcLoginName column
 * @method     ChildDplusUser findOneByIntbwhse(string $IntbWhse) Return the first ChildDplusUser filtered by the IntbWhse column
 * @method     ChildDplusUser findOneByUsrcdefcmpy(string $UsrcDefCmpy) Return the first ChildDplusUser filtered by the UsrcDefCmpy column
 * @method     ChildDplusUser findOneByUsrcadmin(string $UsrcAdmin) Return the first ChildDplusUser filtered by the UsrcAdmin column
 * @method     ChildDplusUser findOneByUsrcfront(string $UsrcFront) Return the first ChildDplusUser filtered by the UsrcFront column
 * @method     ChildDplusUser findOneByUsrccitydesk(string $UsrcCityDesk) Return the first ChildDplusUser filtered by the UsrcCityDesk column
 * @method     ChildDplusUser findOneByUsrcreptadmin(string $UsrcReptAdmin) Return the first ChildDplusUser filtered by the UsrcReptAdmin column
 * @method     ChildDplusUser findOneByUsrcprinter(string $UsrcPrinter) Return the first ChildDplusUser filtered by the UsrcPrinter column
 * @method     ChildDplusUser findOneByUsrcpitch(string $UsrcPitch) Return the first ChildDplusUser filtered by the UsrcPitch column
 * @method     ChildDplusUser findOneByUsrcbrowseprinter(string $UsrcBrowsePrinter) Return the first ChildDplusUser filtered by the UsrcBrowsePrinter column
 * @method     ChildDplusUser findOneByUsrcwhsedisplayseq(string $UsrcWhseDisplaySeq) Return the first ChildDplusUser filtered by the UsrcWhseDisplaySeq column
 * @method     ChildDplusUser findOneByUsrcactiveitemsonly(string $UsrcActiveItemsOnly) Return the first ChildDplusUser filtered by the UsrcActiveItemsOnly column
 * @method     ChildDplusUser findOneByUsrcrestrictaccess(string $UsrcRestrictAccess) Return the first ChildDplusUser filtered by the UsrcRestrictAccess column
 * @method     ChildDplusUser findOneByUsrclogingroup(string $UsrcLoginGroup) Return the first ChildDplusUser filtered by the UsrcLoginGroup column
 * @method     ChildDplusUser findOneByUsrcloginrole(string $UsrcLoginRole) Return the first ChildDplusUser filtered by the UsrcLoginRole column
 * @method     ChildDplusUser findOneByUsrcallowprocremoval(string $UsrcAllowProcRemoval) Return the first ChildDplusUser filtered by the UsrcAllowProcRemoval column
 * @method     ChildDplusUser findOneByUsrcacallowwarredit(string $UsrcAcAllowWarrEdit) Return the first ChildDplusUser filtered by the UsrcAcAllowWarrEdit column
 * @method     ChildDplusUser findOneByUsrcisprodmgr(string $UsrcIsProdMgr) Return the first ChildDplusUser filtered by the UsrcIsProdMgr column
 * @method     ChildDplusUser findOneByUsrclmallowcrosswhse(string $UsrcLmAllowCrossWhse) Return the first ChildDplusUser filtered by the UsrcLmAllowCrossWhse column
 * @method     ChildDplusUser findOneByUsrcpswd(string $UsrcPswd) Return the first ChildDplusUser filtered by the UsrcPswd column
 * @method     ChildDplusUser findOneByUsrcfaxname(string $UsrcFaxName) Return the first ChildDplusUser filtered by the UsrcFaxName column
 * @method     ChildDplusUser findOneByUsrcfaxcompany(string $UsrcFaxCompany) Return the first ChildDplusUser filtered by the UsrcFaxCompany column
 * @method     ChildDplusUser findOneByUsrcfaxarea(string $UsrcFaxArea) Return the first ChildDplusUser filtered by the UsrcFaxArea column
 * @method     ChildDplusUser findOneByUsrcfaxfrst3(string $UsrcFaxFrst3) Return the first ChildDplusUser filtered by the UsrcFaxFrst3 column
 * @method     ChildDplusUser findOneByUsrcfaxlast4(string $UsrcFaxLast4) Return the first ChildDplusUser filtered by the UsrcFaxLast4 column
 * @method     ChildDplusUser findOneByUsrcphonearea(string $UsrcPhoneArea) Return the first ChildDplusUser filtered by the UsrcPhoneArea column
 * @method     ChildDplusUser findOneByUsrcphonefrst3(string $UsrcPhoneFrst3) Return the first ChildDplusUser filtered by the UsrcPhoneFrst3 column
 * @method     ChildDplusUser findOneByUsrcphonelast4(string $UsrcPhoneLast4) Return the first ChildDplusUser filtered by the UsrcPhoneLast4 column
 * @method     ChildDplusUser findOneByUsrcphoneext(string $UsrcPhoneExt) Return the first ChildDplusUser filtered by the UsrcPhoneExt column
 * @method     ChildDplusUser findOneByUsrcsendtime(string $UsrcSendTime) Return the first ChildDplusUser filtered by the UsrcSendTime column
 * @method     ChildDplusUser findOneByUsrccoversheet(string $UsrcCoverSheet) Return the first ChildDplusUser filtered by the UsrcCoverSheet column
 * @method     ChildDplusUser findOneByUsrcsubject(string $UsrcSubject) Return the first ChildDplusUser filtered by the UsrcSubject column
 * @method     ChildDplusUser findOneByUsrcnotifys(string $UsrcNotifyS) Return the first ChildDplusUser filtered by the UsrcNotifyS column
 * @method     ChildDplusUser findOneByUsrcnotifyf(string $UsrcNotifyF) Return the first ChildDplusUser filtered by the UsrcNotifyF column
 * @method     ChildDplusUser findOneByUsrcemailaddr(string $UsrcEmailAddr) Return the first ChildDplusUser filtered by the UsrcEmailAddr column
 * @method     ChildDplusUser findOneByUsrcscalewhseid(string $UsrcScaleWhseId) Return the first ChildDplusUser filtered by the UsrcScaleWhseId column
 * @method     ChildDplusUser findOneByUsrcscaledevnbr(string $UsrcScaleDevNbr) Return the first ChildDplusUser filtered by the UsrcScaleDevNbr column
 * @method     ChildDplusUser findOneByUsrcccscanwhseid(string $UsrcCcscanWhseId) Return the first ChildDplusUser filtered by the UsrcCcscanWhseId column
 * @method     ChildDplusUser findOneByUsrcccscandevnbr(string $UsrcCcscanDevNbr) Return the first ChildDplusUser filtered by the UsrcCcscanDevNbr column
 * @method     ChildDplusUser findOneByDateupdtd(string $DateUpdtd) Return the first ChildDplusUser filtered by the DateUpdtd column
 * @method     ChildDplusUser findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDplusUser filtered by the TimeUpdtd column
 * @method     ChildDplusUser findOneByDummy(string $dummy) Return the first ChildDplusUser filtered by the dummy column *

 * @method     ChildDplusUser requirePk($key, ConnectionInterface $con = null) Return the ChildDplusUser by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOne(ConnectionInterface $con = null) Return the first ChildDplusUser matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDplusUser requireOneByUsrcid(string $UsrcId) Return the first ChildDplusUser filtered by the UsrcId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcloginname(string $UsrcLoginName) Return the first ChildDplusUser filtered by the UsrcLoginName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByIntbwhse(string $IntbWhse) Return the first ChildDplusUser filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcdefcmpy(string $UsrcDefCmpy) Return the first ChildDplusUser filtered by the UsrcDefCmpy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcadmin(string $UsrcAdmin) Return the first ChildDplusUser filtered by the UsrcAdmin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfront(string $UsrcFront) Return the first ChildDplusUser filtered by the UsrcFront column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrccitydesk(string $UsrcCityDesk) Return the first ChildDplusUser filtered by the UsrcCityDesk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcreptadmin(string $UsrcReptAdmin) Return the first ChildDplusUser filtered by the UsrcReptAdmin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcprinter(string $UsrcPrinter) Return the first ChildDplusUser filtered by the UsrcPrinter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcpitch(string $UsrcPitch) Return the first ChildDplusUser filtered by the UsrcPitch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcbrowseprinter(string $UsrcBrowsePrinter) Return the first ChildDplusUser filtered by the UsrcBrowsePrinter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcwhsedisplayseq(string $UsrcWhseDisplaySeq) Return the first ChildDplusUser filtered by the UsrcWhseDisplaySeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcactiveitemsonly(string $UsrcActiveItemsOnly) Return the first ChildDplusUser filtered by the UsrcActiveItemsOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcrestrictaccess(string $UsrcRestrictAccess) Return the first ChildDplusUser filtered by the UsrcRestrictAccess column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrclogingroup(string $UsrcLoginGroup) Return the first ChildDplusUser filtered by the UsrcLoginGroup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcloginrole(string $UsrcLoginRole) Return the first ChildDplusUser filtered by the UsrcLoginRole column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcallowprocremoval(string $UsrcAllowProcRemoval) Return the first ChildDplusUser filtered by the UsrcAllowProcRemoval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcacallowwarredit(string $UsrcAcAllowWarrEdit) Return the first ChildDplusUser filtered by the UsrcAcAllowWarrEdit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcisprodmgr(string $UsrcIsProdMgr) Return the first ChildDplusUser filtered by the UsrcIsProdMgr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrclmallowcrosswhse(string $UsrcLmAllowCrossWhse) Return the first ChildDplusUser filtered by the UsrcLmAllowCrossWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcpswd(string $UsrcPswd) Return the first ChildDplusUser filtered by the UsrcPswd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfaxname(string $UsrcFaxName) Return the first ChildDplusUser filtered by the UsrcFaxName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfaxcompany(string $UsrcFaxCompany) Return the first ChildDplusUser filtered by the UsrcFaxCompany column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfaxarea(string $UsrcFaxArea) Return the first ChildDplusUser filtered by the UsrcFaxArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfaxfrst3(string $UsrcFaxFrst3) Return the first ChildDplusUser filtered by the UsrcFaxFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcfaxlast4(string $UsrcFaxLast4) Return the first ChildDplusUser filtered by the UsrcFaxLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcphonearea(string $UsrcPhoneArea) Return the first ChildDplusUser filtered by the UsrcPhoneArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcphonefrst3(string $UsrcPhoneFrst3) Return the first ChildDplusUser filtered by the UsrcPhoneFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcphonelast4(string $UsrcPhoneLast4) Return the first ChildDplusUser filtered by the UsrcPhoneLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcphoneext(string $UsrcPhoneExt) Return the first ChildDplusUser filtered by the UsrcPhoneExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcsendtime(string $UsrcSendTime) Return the first ChildDplusUser filtered by the UsrcSendTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrccoversheet(string $UsrcCoverSheet) Return the first ChildDplusUser filtered by the UsrcCoverSheet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcsubject(string $UsrcSubject) Return the first ChildDplusUser filtered by the UsrcSubject column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcnotifys(string $UsrcNotifyS) Return the first ChildDplusUser filtered by the UsrcNotifyS column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcnotifyf(string $UsrcNotifyF) Return the first ChildDplusUser filtered by the UsrcNotifyF column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcemailaddr(string $UsrcEmailAddr) Return the first ChildDplusUser filtered by the UsrcEmailAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcscalewhseid(string $UsrcScaleWhseId) Return the first ChildDplusUser filtered by the UsrcScaleWhseId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcscaledevnbr(string $UsrcScaleDevNbr) Return the first ChildDplusUser filtered by the UsrcScaleDevNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcccscanwhseid(string $UsrcCcscanWhseId) Return the first ChildDplusUser filtered by the UsrcCcscanWhseId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByUsrcccscandevnbr(string $UsrcCcscanDevNbr) Return the first ChildDplusUser filtered by the UsrcCcscanDevNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByDateupdtd(string $DateUpdtd) Return the first ChildDplusUser filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDplusUser filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDplusUser requireOneByDummy(string $dummy) Return the first ChildDplusUser filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDplusUser[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildDplusUser objects based on current ModelCriteria
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcid(string $UsrcId) Return ChildDplusUser objects filtered by the UsrcId column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcloginname(string $UsrcLoginName) Return ChildDplusUser objects filtered by the UsrcLoginName column
 * @method     ChildDplusUser[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildDplusUser objects filtered by the IntbWhse column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcdefcmpy(string $UsrcDefCmpy) Return ChildDplusUser objects filtered by the UsrcDefCmpy column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcadmin(string $UsrcAdmin) Return ChildDplusUser objects filtered by the UsrcAdmin column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfront(string $UsrcFront) Return ChildDplusUser objects filtered by the UsrcFront column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrccitydesk(string $UsrcCityDesk) Return ChildDplusUser objects filtered by the UsrcCityDesk column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcreptadmin(string $UsrcReptAdmin) Return ChildDplusUser objects filtered by the UsrcReptAdmin column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcprinter(string $UsrcPrinter) Return ChildDplusUser objects filtered by the UsrcPrinter column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcpitch(string $UsrcPitch) Return ChildDplusUser objects filtered by the UsrcPitch column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcbrowseprinter(string $UsrcBrowsePrinter) Return ChildDplusUser objects filtered by the UsrcBrowsePrinter column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcwhsedisplayseq(string $UsrcWhseDisplaySeq) Return ChildDplusUser objects filtered by the UsrcWhseDisplaySeq column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcactiveitemsonly(string $UsrcActiveItemsOnly) Return ChildDplusUser objects filtered by the UsrcActiveItemsOnly column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcrestrictaccess(string $UsrcRestrictAccess) Return ChildDplusUser objects filtered by the UsrcRestrictAccess column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrclogingroup(string $UsrcLoginGroup) Return ChildDplusUser objects filtered by the UsrcLoginGroup column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcloginrole(string $UsrcLoginRole) Return ChildDplusUser objects filtered by the UsrcLoginRole column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcallowprocremoval(string $UsrcAllowProcRemoval) Return ChildDplusUser objects filtered by the UsrcAllowProcRemoval column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcacallowwarredit(string $UsrcAcAllowWarrEdit) Return ChildDplusUser objects filtered by the UsrcAcAllowWarrEdit column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcisprodmgr(string $UsrcIsProdMgr) Return ChildDplusUser objects filtered by the UsrcIsProdMgr column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrclmallowcrosswhse(string $UsrcLmAllowCrossWhse) Return ChildDplusUser objects filtered by the UsrcLmAllowCrossWhse column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcpswd(string $UsrcPswd) Return ChildDplusUser objects filtered by the UsrcPswd column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfaxname(string $UsrcFaxName) Return ChildDplusUser objects filtered by the UsrcFaxName column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfaxcompany(string $UsrcFaxCompany) Return ChildDplusUser objects filtered by the UsrcFaxCompany column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfaxarea(string $UsrcFaxArea) Return ChildDplusUser objects filtered by the UsrcFaxArea column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfaxfrst3(string $UsrcFaxFrst3) Return ChildDplusUser objects filtered by the UsrcFaxFrst3 column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcfaxlast4(string $UsrcFaxLast4) Return ChildDplusUser objects filtered by the UsrcFaxLast4 column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcphonearea(string $UsrcPhoneArea) Return ChildDplusUser objects filtered by the UsrcPhoneArea column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcphonefrst3(string $UsrcPhoneFrst3) Return ChildDplusUser objects filtered by the UsrcPhoneFrst3 column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcphonelast4(string $UsrcPhoneLast4) Return ChildDplusUser objects filtered by the UsrcPhoneLast4 column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcphoneext(string $UsrcPhoneExt) Return ChildDplusUser objects filtered by the UsrcPhoneExt column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcsendtime(string $UsrcSendTime) Return ChildDplusUser objects filtered by the UsrcSendTime column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrccoversheet(string $UsrcCoverSheet) Return ChildDplusUser objects filtered by the UsrcCoverSheet column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcsubject(string $UsrcSubject) Return ChildDplusUser objects filtered by the UsrcSubject column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcnotifys(string $UsrcNotifyS) Return ChildDplusUser objects filtered by the UsrcNotifyS column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcnotifyf(string $UsrcNotifyF) Return ChildDplusUser objects filtered by the UsrcNotifyF column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcemailaddr(string $UsrcEmailAddr) Return ChildDplusUser objects filtered by the UsrcEmailAddr column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcscalewhseid(string $UsrcScaleWhseId) Return ChildDplusUser objects filtered by the UsrcScaleWhseId column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcscaledevnbr(string $UsrcScaleDevNbr) Return ChildDplusUser objects filtered by the UsrcScaleDevNbr column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcccscanwhseid(string $UsrcCcscanWhseId) Return ChildDplusUser objects filtered by the UsrcCcscanWhseId column
 * @method     ChildDplusUser[]|ObjectCollection findByUsrcccscandevnbr(string $UsrcCcscanDevNbr) Return ChildDplusUser objects filtered by the UsrcCcscanDevNbr column
 * @method     ChildDplusUser[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildDplusUser objects filtered by the DateUpdtd column
 * @method     ChildDplusUser[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildDplusUser objects filtered by the TimeUpdtd column
 * @method     ChildDplusUser[]|ObjectCollection findByDummy(string $dummy) Return ChildDplusUser objects filtered by the dummy column
 * @method     ChildDplusUser[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class DplusUserQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DplusUserQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\DplusUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDplusUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDplusUserQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildDplusUserQuery) {
            return $criteria;
        }
        $query = new ChildDplusUserQuery();
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
     * @return ChildDplusUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(DplusUserTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = DplusUserTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildDplusUser A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT UsrcId, UsrcLoginName, IntbWhse, UsrcDefCmpy, UsrcAdmin, UsrcFront, UsrcCityDesk, UsrcReptAdmin, UsrcPrinter, UsrcPitch, UsrcBrowsePrinter, UsrcWhseDisplaySeq, UsrcActiveItemsOnly, UsrcRestrictAccess, UsrcLoginGroup, UsrcLoginRole, UsrcAllowProcRemoval, UsrcAcAllowWarrEdit, UsrcIsProdMgr, UsrcLmAllowCrossWhse, UsrcPswd, UsrcFaxName, UsrcFaxCompany, UsrcFaxArea, UsrcFaxFrst3, UsrcFaxLast4, UsrcPhoneArea, UsrcPhoneFrst3, UsrcPhoneLast4, UsrcPhoneExt, UsrcSendTime, UsrcCoverSheet, UsrcSubject, UsrcNotifyS, UsrcNotifyF, UsrcEmailAddr, UsrcScaleWhseId, UsrcScaleDevNbr, UsrcCcscanWhseId, UsrcCcscanDevNbr, DateUpdtd, TimeUpdtd, dummy FROM sys_login WHERE UsrcId = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildDplusUser $obj */
            $obj = new ChildDplusUser();
            $obj->hydrate($row);
            DplusUserTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildDplusUser|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the UsrcId column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcid('fooValue');   // WHERE UsrcId = 'fooValue'
     * $query->filterByUsrcid('%fooValue%', Criteria::LIKE); // WHERE UsrcId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcid($usrcid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCID, $usrcid, $comparison);
    }

    /**
     * Filter the query on the UsrcLoginName column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcloginname('fooValue');   // WHERE UsrcLoginName = 'fooValue'
     * $query->filterByUsrcloginname('%fooValue%', Criteria::LIKE); // WHERE UsrcLoginName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcloginname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcloginname($usrcloginname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcloginname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCLOGINNAME, $usrcloginname, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the UsrcDefCmpy column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcdefcmpy('fooValue');   // WHERE UsrcDefCmpy = 'fooValue'
     * $query->filterByUsrcdefcmpy('%fooValue%', Criteria::LIKE); // WHERE UsrcDefCmpy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcdefcmpy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcdefcmpy($usrcdefcmpy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcdefcmpy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCDEFCMPY, $usrcdefcmpy, $comparison);
    }

    /**
     * Filter the query on the UsrcAdmin column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcadmin('fooValue');   // WHERE UsrcAdmin = 'fooValue'
     * $query->filterByUsrcadmin('%fooValue%', Criteria::LIKE); // WHERE UsrcAdmin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcadmin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcadmin($usrcadmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcadmin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCADMIN, $usrcadmin, $comparison);
    }

    /**
     * Filter the query on the UsrcFront column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfront('fooValue');   // WHERE UsrcFront = 'fooValue'
     * $query->filterByUsrcfront('%fooValue%', Criteria::LIKE); // WHERE UsrcFront LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfront The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfront($usrcfront = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfront)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFRONT, $usrcfront, $comparison);
    }

    /**
     * Filter the query on the UsrcCityDesk column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrccitydesk('fooValue');   // WHERE UsrcCityDesk = 'fooValue'
     * $query->filterByUsrccitydesk('%fooValue%', Criteria::LIKE); // WHERE UsrcCityDesk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrccitydesk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrccitydesk($usrccitydesk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrccitydesk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCCITYDESK, $usrccitydesk, $comparison);
    }

    /**
     * Filter the query on the UsrcReptAdmin column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcreptadmin('fooValue');   // WHERE UsrcReptAdmin = 'fooValue'
     * $query->filterByUsrcreptadmin('%fooValue%', Criteria::LIKE); // WHERE UsrcReptAdmin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcreptadmin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcreptadmin($usrcreptadmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcreptadmin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCREPTADMIN, $usrcreptadmin, $comparison);
    }

    /**
     * Filter the query on the UsrcPrinter column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcprinter('fooValue');   // WHERE UsrcPrinter = 'fooValue'
     * $query->filterByUsrcprinter('%fooValue%', Criteria::LIKE); // WHERE UsrcPrinter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcprinter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcprinter($usrcprinter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcprinter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPRINTER, $usrcprinter, $comparison);
    }

    /**
     * Filter the query on the UsrcPitch column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcpitch('fooValue');   // WHERE UsrcPitch = 'fooValue'
     * $query->filterByUsrcpitch('%fooValue%', Criteria::LIKE); // WHERE UsrcPitch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcpitch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcpitch($usrcpitch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcpitch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPITCH, $usrcpitch, $comparison);
    }

    /**
     * Filter the query on the UsrcBrowsePrinter column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcbrowseprinter('fooValue');   // WHERE UsrcBrowsePrinter = 'fooValue'
     * $query->filterByUsrcbrowseprinter('%fooValue%', Criteria::LIKE); // WHERE UsrcBrowsePrinter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcbrowseprinter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcbrowseprinter($usrcbrowseprinter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcbrowseprinter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCBROWSEPRINTER, $usrcbrowseprinter, $comparison);
    }

    /**
     * Filter the query on the UsrcWhseDisplaySeq column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcwhsedisplayseq('fooValue');   // WHERE UsrcWhseDisplaySeq = 'fooValue'
     * $query->filterByUsrcwhsedisplayseq('%fooValue%', Criteria::LIKE); // WHERE UsrcWhseDisplaySeq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcwhsedisplayseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcwhsedisplayseq($usrcwhsedisplayseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcwhsedisplayseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ, $usrcwhsedisplayseq, $comparison);
    }

    /**
     * Filter the query on the UsrcActiveItemsOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcactiveitemsonly('fooValue');   // WHERE UsrcActiveItemsOnly = 'fooValue'
     * $query->filterByUsrcactiveitemsonly('%fooValue%', Criteria::LIKE); // WHERE UsrcActiveItemsOnly LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcactiveitemsonly The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcactiveitemsonly($usrcactiveitemsonly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcactiveitemsonly)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCACTIVEITEMSONLY, $usrcactiveitemsonly, $comparison);
    }

    /**
     * Filter the query on the UsrcRestrictAccess column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcrestrictaccess('fooValue');   // WHERE UsrcRestrictAccess = 'fooValue'
     * $query->filterByUsrcrestrictaccess('%fooValue%', Criteria::LIKE); // WHERE UsrcRestrictAccess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcrestrictaccess The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcrestrictaccess($usrcrestrictaccess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcrestrictaccess)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCRESTRICTACCESS, $usrcrestrictaccess, $comparison);
    }

    /**
     * Filter the query on the UsrcLoginGroup column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrclogingroup('fooValue');   // WHERE UsrcLoginGroup = 'fooValue'
     * $query->filterByUsrclogingroup('%fooValue%', Criteria::LIKE); // WHERE UsrcLoginGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrclogingroup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrclogingroup($usrclogingroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrclogingroup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCLOGINGROUP, $usrclogingroup, $comparison);
    }

    /**
     * Filter the query on the UsrcLoginRole column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcloginrole('fooValue');   // WHERE UsrcLoginRole = 'fooValue'
     * $query->filterByUsrcloginrole('%fooValue%', Criteria::LIKE); // WHERE UsrcLoginRole LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcloginrole The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcloginrole($usrcloginrole = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcloginrole)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCLOGINROLE, $usrcloginrole, $comparison);
    }

    /**
     * Filter the query on the UsrcAllowProcRemoval column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcallowprocremoval('fooValue');   // WHERE UsrcAllowProcRemoval = 'fooValue'
     * $query->filterByUsrcallowprocremoval('%fooValue%', Criteria::LIKE); // WHERE UsrcAllowProcRemoval LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcallowprocremoval The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcallowprocremoval($usrcallowprocremoval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcallowprocremoval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCALLOWPROCREMOVAL, $usrcallowprocremoval, $comparison);
    }

    /**
     * Filter the query on the UsrcAcAllowWarrEdit column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcacallowwarredit('fooValue');   // WHERE UsrcAcAllowWarrEdit = 'fooValue'
     * $query->filterByUsrcacallowwarredit('%fooValue%', Criteria::LIKE); // WHERE UsrcAcAllowWarrEdit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcacallowwarredit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcacallowwarredit($usrcacallowwarredit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcacallowwarredit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCACALLOWWARREDIT, $usrcacallowwarredit, $comparison);
    }

    /**
     * Filter the query on the UsrcIsProdMgr column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcisprodmgr('fooValue');   // WHERE UsrcIsProdMgr = 'fooValue'
     * $query->filterByUsrcisprodmgr('%fooValue%', Criteria::LIKE); // WHERE UsrcIsProdMgr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcisprodmgr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcisprodmgr($usrcisprodmgr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcisprodmgr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCISPRODMGR, $usrcisprodmgr, $comparison);
    }

    /**
     * Filter the query on the UsrcLmAllowCrossWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrclmallowcrosswhse('fooValue');   // WHERE UsrcLmAllowCrossWhse = 'fooValue'
     * $query->filterByUsrclmallowcrosswhse('%fooValue%', Criteria::LIKE); // WHERE UsrcLmAllowCrossWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrclmallowcrosswhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrclmallowcrosswhse($usrclmallowcrosswhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrclmallowcrosswhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE, $usrclmallowcrosswhse, $comparison);
    }

    /**
     * Filter the query on the UsrcPswd column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcpswd('fooValue');   // WHERE UsrcPswd = 'fooValue'
     * $query->filterByUsrcpswd('%fooValue%', Criteria::LIKE); // WHERE UsrcPswd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcpswd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcpswd($usrcpswd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcpswd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPSWD, $usrcpswd, $comparison);
    }

    /**
     * Filter the query on the UsrcFaxName column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfaxname('fooValue');   // WHERE UsrcFaxName = 'fooValue'
     * $query->filterByUsrcfaxname('%fooValue%', Criteria::LIKE); // WHERE UsrcFaxName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfaxname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfaxname($usrcfaxname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfaxname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFAXNAME, $usrcfaxname, $comparison);
    }

    /**
     * Filter the query on the UsrcFaxCompany column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfaxcompany('fooValue');   // WHERE UsrcFaxCompany = 'fooValue'
     * $query->filterByUsrcfaxcompany('%fooValue%', Criteria::LIKE); // WHERE UsrcFaxCompany LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfaxcompany The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfaxcompany($usrcfaxcompany = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfaxcompany)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFAXCOMPANY, $usrcfaxcompany, $comparison);
    }

    /**
     * Filter the query on the UsrcFaxArea column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfaxarea('fooValue');   // WHERE UsrcFaxArea = 'fooValue'
     * $query->filterByUsrcfaxarea('%fooValue%', Criteria::LIKE); // WHERE UsrcFaxArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfaxarea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfaxarea($usrcfaxarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfaxarea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFAXAREA, $usrcfaxarea, $comparison);
    }

    /**
     * Filter the query on the UsrcFaxFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfaxfrst3('fooValue');   // WHERE UsrcFaxFrst3 = 'fooValue'
     * $query->filterByUsrcfaxfrst3('%fooValue%', Criteria::LIKE); // WHERE UsrcFaxFrst3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfaxfrst3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfaxfrst3($usrcfaxfrst3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfaxfrst3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFAXFRST3, $usrcfaxfrst3, $comparison);
    }

    /**
     * Filter the query on the UsrcFaxLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcfaxlast4('fooValue');   // WHERE UsrcFaxLast4 = 'fooValue'
     * $query->filterByUsrcfaxlast4('%fooValue%', Criteria::LIKE); // WHERE UsrcFaxLast4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcfaxlast4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcfaxlast4($usrcfaxlast4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcfaxlast4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCFAXLAST4, $usrcfaxlast4, $comparison);
    }

    /**
     * Filter the query on the UsrcPhoneArea column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcphonearea('fooValue');   // WHERE UsrcPhoneArea = 'fooValue'
     * $query->filterByUsrcphonearea('%fooValue%', Criteria::LIKE); // WHERE UsrcPhoneArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcphonearea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcphonearea($usrcphonearea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcphonearea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPHONEAREA, $usrcphonearea, $comparison);
    }

    /**
     * Filter the query on the UsrcPhoneFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcphonefrst3('fooValue');   // WHERE UsrcPhoneFrst3 = 'fooValue'
     * $query->filterByUsrcphonefrst3('%fooValue%', Criteria::LIKE); // WHERE UsrcPhoneFrst3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcphonefrst3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcphonefrst3($usrcphonefrst3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcphonefrst3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPHONEFRST3, $usrcphonefrst3, $comparison);
    }

    /**
     * Filter the query on the UsrcPhoneLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcphonelast4('fooValue');   // WHERE UsrcPhoneLast4 = 'fooValue'
     * $query->filterByUsrcphonelast4('%fooValue%', Criteria::LIKE); // WHERE UsrcPhoneLast4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcphonelast4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcphonelast4($usrcphonelast4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcphonelast4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPHONELAST4, $usrcphonelast4, $comparison);
    }

    /**
     * Filter the query on the UsrcPhoneExt column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcphoneext('fooValue');   // WHERE UsrcPhoneExt = 'fooValue'
     * $query->filterByUsrcphoneext('%fooValue%', Criteria::LIKE); // WHERE UsrcPhoneExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcphoneext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcphoneext($usrcphoneext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcphoneext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCPHONEEXT, $usrcphoneext, $comparison);
    }

    /**
     * Filter the query on the UsrcSendTime column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcsendtime('fooValue');   // WHERE UsrcSendTime = 'fooValue'
     * $query->filterByUsrcsendtime('%fooValue%', Criteria::LIKE); // WHERE UsrcSendTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcsendtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcsendtime($usrcsendtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcsendtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCSENDTIME, $usrcsendtime, $comparison);
    }

    /**
     * Filter the query on the UsrcCoverSheet column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrccoversheet('fooValue');   // WHERE UsrcCoverSheet = 'fooValue'
     * $query->filterByUsrccoversheet('%fooValue%', Criteria::LIKE); // WHERE UsrcCoverSheet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrccoversheet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrccoversheet($usrccoversheet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrccoversheet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCCOVERSHEET, $usrccoversheet, $comparison);
    }

    /**
     * Filter the query on the UsrcSubject column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcsubject('fooValue');   // WHERE UsrcSubject = 'fooValue'
     * $query->filterByUsrcsubject('%fooValue%', Criteria::LIKE); // WHERE UsrcSubject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcsubject The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcsubject($usrcsubject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcsubject)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCSUBJECT, $usrcsubject, $comparison);
    }

    /**
     * Filter the query on the UsrcNotifyS column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcnotifys('fooValue');   // WHERE UsrcNotifyS = 'fooValue'
     * $query->filterByUsrcnotifys('%fooValue%', Criteria::LIKE); // WHERE UsrcNotifyS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcnotifys The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcnotifys($usrcnotifys = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcnotifys)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCNOTIFYS, $usrcnotifys, $comparison);
    }

    /**
     * Filter the query on the UsrcNotifyF column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcnotifyf('fooValue');   // WHERE UsrcNotifyF = 'fooValue'
     * $query->filterByUsrcnotifyf('%fooValue%', Criteria::LIKE); // WHERE UsrcNotifyF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcnotifyf The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcnotifyf($usrcnotifyf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcnotifyf)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCNOTIFYF, $usrcnotifyf, $comparison);
    }

    /**
     * Filter the query on the UsrcEmailAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcemailaddr('fooValue');   // WHERE UsrcEmailAddr = 'fooValue'
     * $query->filterByUsrcemailaddr('%fooValue%', Criteria::LIKE); // WHERE UsrcEmailAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcemailaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcemailaddr($usrcemailaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcemailaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCEMAILADDR, $usrcemailaddr, $comparison);
    }

    /**
     * Filter the query on the UsrcScaleWhseId column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcscalewhseid('fooValue');   // WHERE UsrcScaleWhseId = 'fooValue'
     * $query->filterByUsrcscalewhseid('%fooValue%', Criteria::LIKE); // WHERE UsrcScaleWhseId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcscalewhseid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcscalewhseid($usrcscalewhseid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcscalewhseid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCSCALEWHSEID, $usrcscalewhseid, $comparison);
    }

    /**
     * Filter the query on the UsrcScaleDevNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcscaledevnbr('fooValue');   // WHERE UsrcScaleDevNbr = 'fooValue'
     * $query->filterByUsrcscaledevnbr('%fooValue%', Criteria::LIKE); // WHERE UsrcScaleDevNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcscaledevnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcscaledevnbr($usrcscaledevnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcscaledevnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCSCALEDEVNBR, $usrcscaledevnbr, $comparison);
    }

    /**
     * Filter the query on the UsrcCcscanWhseId column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcccscanwhseid('fooValue');   // WHERE UsrcCcscanWhseId = 'fooValue'
     * $query->filterByUsrcccscanwhseid('%fooValue%', Criteria::LIKE); // WHERE UsrcCcscanWhseId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcccscanwhseid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcccscanwhseid($usrcccscanwhseid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcccscanwhseid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCCCSCANWHSEID, $usrcccscanwhseid, $comparison);
    }

    /**
     * Filter the query on the UsrcCcscanDevNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcccscandevnbr('fooValue');   // WHERE UsrcCcscanDevNbr = 'fooValue'
     * $query->filterByUsrcccscandevnbr('%fooValue%', Criteria::LIKE); // WHERE UsrcCcscanDevNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcccscandevnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUsrcccscandevnbr($usrcccscandevnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcccscandevnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_USRCCCSCANDEVNBR, $usrcccscandevnbr, $comparison);
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
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DplusUserTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SysLoginGroup object
     *
     * @param \SysLoginGroup|ObjectCollection $sysLoginGroup The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterBySysLoginGroup($sysLoginGroup, $comparison = null)
    {
        if ($sysLoginGroup instanceof \SysLoginGroup) {
            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCLOGINGROUP, $sysLoginGroup->getQtbllgrpcode(), $comparison);
        } elseif ($sysLoginGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCLOGINGROUP, $sysLoginGroup->toKeyValue('PrimaryKey', 'Qtbllgrpcode'), $comparison);
        } else {
            throw new PropelException('filterBySysLoginGroup() only accepts arguments of type \SysLoginGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysLoginGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function joinSysLoginGroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysLoginGroup');

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
            $this->addJoinObject($join, 'SysLoginGroup');
        }

        return $this;
    }

    /**
     * Use the SysLoginGroup relation SysLoginGroup object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SysLoginGroupQuery A secondary query class using the current class as primary query
     */
    public function useSysLoginGroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysLoginGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysLoginGroup', '\SysLoginGroupQuery');
    }

    /**
     * Filter the query by a related \SysLoginRole object
     *
     * @param \SysLoginRole|ObjectCollection $sysLoginRole The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterBySysLoginRole($sysLoginRole, $comparison = null)
    {
        if ($sysLoginRole instanceof \SysLoginRole) {
            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCLOGINROLE, $sysLoginRole->getQtblrolecode(), $comparison);
        } elseif ($sysLoginRole instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCLOGINROLE, $sysLoginRole->toKeyValue('PrimaryKey', 'Qtblrolecode'), $comparison);
        } else {
            throw new PropelException('filterBySysLoginRole() only accepts arguments of type \SysLoginRole or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SysLoginRole relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function joinSysLoginRole($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SysLoginRole');

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
            $this->addJoinObject($join, 'SysLoginRole');
        }

        return $this;
    }

    /**
     * Use the SysLoginRole relation SysLoginRole object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SysLoginRoleQuery A secondary query class using the current class as primary query
     */
    public function useSysLoginRoleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSysLoginRole($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SysLoginRole', '\SysLoginRoleQuery');
    }

    /**
     * Filter the query by a related \InvLotTag object
     *
     * @param \InvLotTag|ObjectCollection $invLotTag the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByInvLotTag($invLotTag, $comparison = null)
    {
        if ($invLotTag instanceof \InvLotTag) {
            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCID, $invLotTag->getIntguserid(), $comparison);
        } elseif ($invLotTag instanceof ObjectCollection) {
            return $this
                ->useInvLotTagQuery()
                ->filterByPrimaryKeys($invLotTag->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvLotTag() only accepts arguments of type \InvLotTag or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotTag relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function joinInvLotTag($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \UserPermissionsItm object
     *
     * @param \UserPermissionsItm|ObjectCollection $userPermissionsItm the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUserPermissionsItm($userPermissionsItm, $comparison = null)
    {
        if ($userPermissionsItm instanceof \UserPermissionsItm) {
            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCID, $userPermissionsItm->getItmpuserid(), $comparison);
        } elseif ($userPermissionsItm instanceof ObjectCollection) {
            return $this
                ->useUserPermissionsItmQuery()
                ->filterByPrimaryKeys($userPermissionsItm->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserPermissionsItm() only accepts arguments of type \UserPermissionsItm or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserPermissionsItm relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function joinUserPermissionsItm($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserPermissionsItm');

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
            $this->addJoinObject($join, 'UserPermissionsItm');
        }

        return $this;
    }

    /**
     * Use the UserPermissionsItm relation UserPermissionsItm object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UserPermissionsItmQuery A secondary query class using the current class as primary query
     */
    public function useUserPermissionsItmQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserPermissionsItm($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserPermissionsItm', '\UserPermissionsItmQuery');
    }

    /**
     * Filter the query by a related \UserLastPrintJob object
     *
     * @param \UserLastPrintJob|ObjectCollection $userLastPrintJob the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildDplusUserQuery The current query, for fluid interface
     */
    public function filterByUserLastPrintJob($userLastPrintJob, $comparison = null)
    {
        if ($userLastPrintJob instanceof \UserLastPrintJob) {
            return $this
                ->addUsingAlias(DplusUserTableMap::COL_USRCID, $userLastPrintJob->getUsrcid(), $comparison);
        } elseif ($userLastPrintJob instanceof ObjectCollection) {
            return $this
                ->useUserLastPrintJobQuery()
                ->filterByPrimaryKeys($userLastPrintJob->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserLastPrintJob() only accepts arguments of type \UserLastPrintJob or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserLastPrintJob relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function joinUserLastPrintJob($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserLastPrintJob');

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
            $this->addJoinObject($join, 'UserLastPrintJob');
        }

        return $this;
    }

    /**
     * Use the UserLastPrintJob relation UserLastPrintJob object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UserLastPrintJobQuery A secondary query class using the current class as primary query
     */
    public function useUserLastPrintJobQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserLastPrintJob($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserLastPrintJob', '\UserLastPrintJobQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildDplusUser $dplusUser Object to remove from the list of results
     *
     * @return $this|ChildDplusUserQuery The current query, for fluid interface
     */
    public function prune($dplusUser = null)
    {
        if ($dplusUser) {
            $this->addUsingAlias(DplusUserTableMap::COL_USRCID, $dplusUser->getUsrcid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_login table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DplusUserTableMap::clearInstancePool();
            DplusUserTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(DplusUserTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            DplusUserTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            DplusUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // DplusUserQuery
