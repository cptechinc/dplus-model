<?php

namespace Base;

use \ConfigIi as ChildConfigIi;
use \ConfigIiQuery as ChildConfigIiQuery;
use \Exception;
use \PDO;
use Map\ConfigIiTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ii_options' table.
 *
 *
 *
 * @method     ChildConfigIiQuery orderByIitboptncode($order = Criteria::ASC) Order by the IitbOptnCode column
 * @method     ChildConfigIiQuery orderByIitboptnactavail($order = Criteria::ASC) Order by the IitbOptnActAvail column
 * @method     ChildConfigIiQuery orderByIitboptnactwhse($order = Criteria::ASC) Order by the IitbOptnActWhse column
 * @method     ChildConfigIiQuery orderByIitboptnactdet($order = Criteria::ASC) Order by the IitbOptnActDet column
 * @method     ChildConfigIiQuery orderByIitboptnactdaysback($order = Criteria::ASC) Order by the IitbOptnActDaysBack column
 * @method     ChildConfigIiQuery orderByIitboptnactstrtdate($order = Criteria::ASC) Order by the IitbOptnActStrtDate column
 * @method     ChildConfigIiQuery orderByIitboptncostavail($order = Criteria::ASC) Order by the IitbOptnCostAvail column
 * @method     ChildConfigIiQuery orderByIitboptncostwhse($order = Criteria::ASC) Order by the IitbOptnCostWhse column
 * @method     ChildConfigIiQuery orderByIitboptncostdet($order = Criteria::ASC) Order by the IitbOptnCostDet column
 * @method     ChildConfigIiQuery orderByIitboptngenavail($order = Criteria::ASC) Order by the IitbOptnGenAvail column
 * @method     ChildConfigIiQuery orderByIitboptnktavail($order = Criteria::ASC) Order by the IitbOptnKtAvail column
 * @method     ChildConfigIiQuery orderByIitboptnpricavail($order = Criteria::ASC) Order by the IitbOptnPricAvail column
 * @method     ChildConfigIiQuery orderByIitboptnphavail($order = Criteria::ASC) Order by the IitbOptnPhAvail column
 * @method     ChildConfigIiQuery orderByIitboptnphwhse($order = Criteria::ASC) Order by the IitbOptnPhWhse column
 * @method     ChildConfigIiQuery orderByIitboptnphdet($order = Criteria::ASC) Order by the IitbOptnPhDet column
 * @method     ChildConfigIiQuery orderByIitboptnphdaysback($order = Criteria::ASC) Order by the IitbOptnPhDaysBack column
 * @method     ChildConfigIiQuery orderByIitboptnphstrtdate($order = Criteria::ASC) Order by the IitbOptnPhStrtDate column
 * @method     ChildConfigIiQuery orderByIitboptnpoavail($order = Criteria::ASC) Order by the IitbOptnPoAvail column
 * @method     ChildConfigIiQuery orderByIitboptnpowhse($order = Criteria::ASC) Order by the IitbOptnPoWhse column
 * @method     ChildConfigIiQuery orderByIitboptnreqravail($order = Criteria::ASC) Order by the IitbOptnReqrAvail column
 * @method     ChildConfigIiQuery orderByIitboptnreqrwhse($order = Criteria::ASC) Order by the IitbOptnReqrWhse column
 * @method     ChildConfigIiQuery orderByIitboptnreqrview($order = Criteria::ASC) Order by the IitbOptnReqrView column
 * @method     ChildConfigIiQuery orderByIitboptnshavail($order = Criteria::ASC) Order by the IitbOptnShAvail column
 * @method     ChildConfigIiQuery orderByIitboptnshwhse($order = Criteria::ASC) Order by the IitbOptnShWhse column
 * @method     ChildConfigIiQuery orderByIitboptnshdet($order = Criteria::ASC) Order by the IitbOptnShDet column
 * @method     ChildConfigIiQuery orderByIitboptnshdaysback($order = Criteria::ASC) Order by the IitbOptnShDaysBack column
 * @method     ChildConfigIiQuery orderByIitboptnshstrtdate($order = Criteria::ASC) Order by the IitbOptnShStrtDate column
 * @method     ChildConfigIiQuery orderByIitboptnsoavail($order = Criteria::ASC) Order by the IitbOptnSoAvail column
 * @method     ChildConfigIiQuery orderByIitboptnsowhse($order = Criteria::ASC) Order by the IitbOptnSoWhse column
 * @method     ChildConfigIiQuery orderByIitboptnserlotavail($order = Criteria::ASC) Order by the IitbOptnSerlotAvail column
 * @method     ChildConfigIiQuery orderByIitboptnstckavail($order = Criteria::ASC) Order by the IitbOptnStckAvail column
 * @method     ChildConfigIiQuery orderByIitboptnstckwhse($order = Criteria::ASC) Order by the IitbOptnStckWhse column
 * @method     ChildConfigIiQuery orderByIitboptnstckdet($order = Criteria::ASC) Order by the IitbOptnStckDet column
 * @method     ChildConfigIiQuery orderByIitboptnsubsupavail($order = Criteria::ASC) Order by the IitbOptnSubsupAvail column
 * @method     ChildConfigIiQuery orderByIitboptnsubsupwhse($order = Criteria::ASC) Order by the IitbOptnSubsupWhse column
 * @method     ChildConfigIiQuery orderByIitboptnlsavail($order = Criteria::ASC) Order by the IitbOptnLsAvail column
 * @method     ChildConfigIiQuery orderByIitboptnlswhse($order = Criteria::ASC) Order by the IitbOptnLsWhse column
 * @method     ChildConfigIiQuery orderByIitboptndesc1or2($order = Criteria::ASC) Order by the IitbOptnDesc1Or2 column
 * @method     ChildConfigIiQuery orderByIitboptndelcerts($order = Criteria::ASC) Order by the IitbOptnDelCerts column
 * @method     ChildConfigIiQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigIiQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigIiQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigIiQuery groupByIitboptncode() Group by the IitbOptnCode column
 * @method     ChildConfigIiQuery groupByIitboptnactavail() Group by the IitbOptnActAvail column
 * @method     ChildConfigIiQuery groupByIitboptnactwhse() Group by the IitbOptnActWhse column
 * @method     ChildConfigIiQuery groupByIitboptnactdet() Group by the IitbOptnActDet column
 * @method     ChildConfigIiQuery groupByIitboptnactdaysback() Group by the IitbOptnActDaysBack column
 * @method     ChildConfigIiQuery groupByIitboptnactstrtdate() Group by the IitbOptnActStrtDate column
 * @method     ChildConfigIiQuery groupByIitboptncostavail() Group by the IitbOptnCostAvail column
 * @method     ChildConfigIiQuery groupByIitboptncostwhse() Group by the IitbOptnCostWhse column
 * @method     ChildConfigIiQuery groupByIitboptncostdet() Group by the IitbOptnCostDet column
 * @method     ChildConfigIiQuery groupByIitboptngenavail() Group by the IitbOptnGenAvail column
 * @method     ChildConfigIiQuery groupByIitboptnktavail() Group by the IitbOptnKtAvail column
 * @method     ChildConfigIiQuery groupByIitboptnpricavail() Group by the IitbOptnPricAvail column
 * @method     ChildConfigIiQuery groupByIitboptnphavail() Group by the IitbOptnPhAvail column
 * @method     ChildConfigIiQuery groupByIitboptnphwhse() Group by the IitbOptnPhWhse column
 * @method     ChildConfigIiQuery groupByIitboptnphdet() Group by the IitbOptnPhDet column
 * @method     ChildConfigIiQuery groupByIitboptnphdaysback() Group by the IitbOptnPhDaysBack column
 * @method     ChildConfigIiQuery groupByIitboptnphstrtdate() Group by the IitbOptnPhStrtDate column
 * @method     ChildConfigIiQuery groupByIitboptnpoavail() Group by the IitbOptnPoAvail column
 * @method     ChildConfigIiQuery groupByIitboptnpowhse() Group by the IitbOptnPoWhse column
 * @method     ChildConfigIiQuery groupByIitboptnreqravail() Group by the IitbOptnReqrAvail column
 * @method     ChildConfigIiQuery groupByIitboptnreqrwhse() Group by the IitbOptnReqrWhse column
 * @method     ChildConfigIiQuery groupByIitboptnreqrview() Group by the IitbOptnReqrView column
 * @method     ChildConfigIiQuery groupByIitboptnshavail() Group by the IitbOptnShAvail column
 * @method     ChildConfigIiQuery groupByIitboptnshwhse() Group by the IitbOptnShWhse column
 * @method     ChildConfigIiQuery groupByIitboptnshdet() Group by the IitbOptnShDet column
 * @method     ChildConfigIiQuery groupByIitboptnshdaysback() Group by the IitbOptnShDaysBack column
 * @method     ChildConfigIiQuery groupByIitboptnshstrtdate() Group by the IitbOptnShStrtDate column
 * @method     ChildConfigIiQuery groupByIitboptnsoavail() Group by the IitbOptnSoAvail column
 * @method     ChildConfigIiQuery groupByIitboptnsowhse() Group by the IitbOptnSoWhse column
 * @method     ChildConfigIiQuery groupByIitboptnserlotavail() Group by the IitbOptnSerlotAvail column
 * @method     ChildConfigIiQuery groupByIitboptnstckavail() Group by the IitbOptnStckAvail column
 * @method     ChildConfigIiQuery groupByIitboptnstckwhse() Group by the IitbOptnStckWhse column
 * @method     ChildConfigIiQuery groupByIitboptnstckdet() Group by the IitbOptnStckDet column
 * @method     ChildConfigIiQuery groupByIitboptnsubsupavail() Group by the IitbOptnSubsupAvail column
 * @method     ChildConfigIiQuery groupByIitboptnsubsupwhse() Group by the IitbOptnSubsupWhse column
 * @method     ChildConfigIiQuery groupByIitboptnlsavail() Group by the IitbOptnLsAvail column
 * @method     ChildConfigIiQuery groupByIitboptnlswhse() Group by the IitbOptnLsWhse column
 * @method     ChildConfigIiQuery groupByIitboptndesc1or2() Group by the IitbOptnDesc1Or2 column
 * @method     ChildConfigIiQuery groupByIitboptndelcerts() Group by the IitbOptnDelCerts column
 * @method     ChildConfigIiQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigIiQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigIiQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigIiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigIiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigIiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigIiQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigIiQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigIiQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigIi findOne(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query
 * @method     ChildConfigIi findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query, or a new ChildConfigIi object populated from the query conditions when no match is found
 *
 * @method     ChildConfigIi findOneByIitboptncode(string $IitbOptnCode) Return the first ChildConfigIi filtered by the IitbOptnCode column
 * @method     ChildConfigIi findOneByIitboptnactavail(string $IitbOptnActAvail) Return the first ChildConfigIi filtered by the IitbOptnActAvail column
 * @method     ChildConfigIi findOneByIitboptnactwhse(string $IitbOptnActWhse) Return the first ChildConfigIi filtered by the IitbOptnActWhse column
 * @method     ChildConfigIi findOneByIitboptnactdet(string $IitbOptnActDet) Return the first ChildConfigIi filtered by the IitbOptnActDet column
 * @method     ChildConfigIi findOneByIitboptnactdaysback(int $IitbOptnActDaysBack) Return the first ChildConfigIi filtered by the IitbOptnActDaysBack column
 * @method     ChildConfigIi findOneByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return the first ChildConfigIi filtered by the IitbOptnActStrtDate column
 * @method     ChildConfigIi findOneByIitboptncostavail(string $IitbOptnCostAvail) Return the first ChildConfigIi filtered by the IitbOptnCostAvail column
 * @method     ChildConfigIi findOneByIitboptncostwhse(string $IitbOptnCostWhse) Return the first ChildConfigIi filtered by the IitbOptnCostWhse column
 * @method     ChildConfigIi findOneByIitboptncostdet(string $IitbOptnCostDet) Return the first ChildConfigIi filtered by the IitbOptnCostDet column
 * @method     ChildConfigIi findOneByIitboptngenavail(string $IitbOptnGenAvail) Return the first ChildConfigIi filtered by the IitbOptnGenAvail column
 * @method     ChildConfigIi findOneByIitboptnktavail(string $IitbOptnKtAvail) Return the first ChildConfigIi filtered by the IitbOptnKtAvail column
 * @method     ChildConfigIi findOneByIitboptnpricavail(string $IitbOptnPricAvail) Return the first ChildConfigIi filtered by the IitbOptnPricAvail column
 * @method     ChildConfigIi findOneByIitboptnphavail(string $IitbOptnPhAvail) Return the first ChildConfigIi filtered by the IitbOptnPhAvail column
 * @method     ChildConfigIi findOneByIitboptnphwhse(string $IitbOptnPhWhse) Return the first ChildConfigIi filtered by the IitbOptnPhWhse column
 * @method     ChildConfigIi findOneByIitboptnphdet(string $IitbOptnPhDet) Return the first ChildConfigIi filtered by the IitbOptnPhDet column
 * @method     ChildConfigIi findOneByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return the first ChildConfigIi filtered by the IitbOptnPhDaysBack column
 * @method     ChildConfigIi findOneByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return the first ChildConfigIi filtered by the IitbOptnPhStrtDate column
 * @method     ChildConfigIi findOneByIitboptnpoavail(string $IitbOptnPoAvail) Return the first ChildConfigIi filtered by the IitbOptnPoAvail column
 * @method     ChildConfigIi findOneByIitboptnpowhse(string $IitbOptnPoWhse) Return the first ChildConfigIi filtered by the IitbOptnPoWhse column
 * @method     ChildConfigIi findOneByIitboptnreqravail(string $IitbOptnReqrAvail) Return the first ChildConfigIi filtered by the IitbOptnReqrAvail column
 * @method     ChildConfigIi findOneByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return the first ChildConfigIi filtered by the IitbOptnReqrWhse column
 * @method     ChildConfigIi findOneByIitboptnreqrview(string $IitbOptnReqrView) Return the first ChildConfigIi filtered by the IitbOptnReqrView column
 * @method     ChildConfigIi findOneByIitboptnshavail(string $IitbOptnShAvail) Return the first ChildConfigIi filtered by the IitbOptnShAvail column
 * @method     ChildConfigIi findOneByIitboptnshwhse(string $IitbOptnShWhse) Return the first ChildConfigIi filtered by the IitbOptnShWhse column
 * @method     ChildConfigIi findOneByIitboptnshdet(string $IitbOptnShDet) Return the first ChildConfigIi filtered by the IitbOptnShDet column
 * @method     ChildConfigIi findOneByIitboptnshdaysback(int $IitbOptnShDaysBack) Return the first ChildConfigIi filtered by the IitbOptnShDaysBack column
 * @method     ChildConfigIi findOneByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return the first ChildConfigIi filtered by the IitbOptnShStrtDate column
 * @method     ChildConfigIi findOneByIitboptnsoavail(string $IitbOptnSoAvail) Return the first ChildConfigIi filtered by the IitbOptnSoAvail column
 * @method     ChildConfigIi findOneByIitboptnsowhse(string $IitbOptnSoWhse) Return the first ChildConfigIi filtered by the IitbOptnSoWhse column
 * @method     ChildConfigIi findOneByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return the first ChildConfigIi filtered by the IitbOptnSerlotAvail column
 * @method     ChildConfigIi findOneByIitboptnstckavail(string $IitbOptnStckAvail) Return the first ChildConfigIi filtered by the IitbOptnStckAvail column
 * @method     ChildConfigIi findOneByIitboptnstckwhse(string $IitbOptnStckWhse) Return the first ChildConfigIi filtered by the IitbOptnStckWhse column
 * @method     ChildConfigIi findOneByIitboptnstckdet(string $IitbOptnStckDet) Return the first ChildConfigIi filtered by the IitbOptnStckDet column
 * @method     ChildConfigIi findOneByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return the first ChildConfigIi filtered by the IitbOptnSubsupAvail column
 * @method     ChildConfigIi findOneByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return the first ChildConfigIi filtered by the IitbOptnSubsupWhse column
 * @method     ChildConfigIi findOneByIitboptnlsavail(string $IitbOptnLsAvail) Return the first ChildConfigIi filtered by the IitbOptnLsAvail column
 * @method     ChildConfigIi findOneByIitboptnlswhse(string $IitbOptnLsWhse) Return the first ChildConfigIi filtered by the IitbOptnLsWhse column
 * @method     ChildConfigIi findOneByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return the first ChildConfigIi filtered by the IitbOptnDesc1Or2 column
 * @method     ChildConfigIi findOneByIitboptndelcerts(string $IitbOptnDelCerts) Return the first ChildConfigIi filtered by the IitbOptnDelCerts column
 * @method     ChildConfigIi findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIi filtered by the DateUpdtd column
 * @method     ChildConfigIi findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIi filtered by the TimeUpdtd column
 * @method     ChildConfigIi findOneByDummy(string $dummy) Return the first ChildConfigIi filtered by the dummy column *

 * @method     ChildConfigIi requirePk($key, ConnectionInterface $con = null) Return the ChildConfigIi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOne(ConnectionInterface $con = null) Return the first ChildConfigIi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIi requireOneByIitboptncode(string $IitbOptnCode) Return the first ChildConfigIi filtered by the IitbOptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnactavail(string $IitbOptnActAvail) Return the first ChildConfigIi filtered by the IitbOptnActAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnactwhse(string $IitbOptnActWhse) Return the first ChildConfigIi filtered by the IitbOptnActWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnactdet(string $IitbOptnActDet) Return the first ChildConfigIi filtered by the IitbOptnActDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnactdaysback(int $IitbOptnActDaysBack) Return the first ChildConfigIi filtered by the IitbOptnActDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return the first ChildConfigIi filtered by the IitbOptnActStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptncostavail(string $IitbOptnCostAvail) Return the first ChildConfigIi filtered by the IitbOptnCostAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptncostwhse(string $IitbOptnCostWhse) Return the first ChildConfigIi filtered by the IitbOptnCostWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptncostdet(string $IitbOptnCostDet) Return the first ChildConfigIi filtered by the IitbOptnCostDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptngenavail(string $IitbOptnGenAvail) Return the first ChildConfigIi filtered by the IitbOptnGenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnktavail(string $IitbOptnKtAvail) Return the first ChildConfigIi filtered by the IitbOptnKtAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnpricavail(string $IitbOptnPricAvail) Return the first ChildConfigIi filtered by the IitbOptnPricAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnphavail(string $IitbOptnPhAvail) Return the first ChildConfigIi filtered by the IitbOptnPhAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnphwhse(string $IitbOptnPhWhse) Return the first ChildConfigIi filtered by the IitbOptnPhWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnphdet(string $IitbOptnPhDet) Return the first ChildConfigIi filtered by the IitbOptnPhDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return the first ChildConfigIi filtered by the IitbOptnPhDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return the first ChildConfigIi filtered by the IitbOptnPhStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnpoavail(string $IitbOptnPoAvail) Return the first ChildConfigIi filtered by the IitbOptnPoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnpowhse(string $IitbOptnPoWhse) Return the first ChildConfigIi filtered by the IitbOptnPoWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnreqravail(string $IitbOptnReqrAvail) Return the first ChildConfigIi filtered by the IitbOptnReqrAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return the first ChildConfigIi filtered by the IitbOptnReqrWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnreqrview(string $IitbOptnReqrView) Return the first ChildConfigIi filtered by the IitbOptnReqrView column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnshavail(string $IitbOptnShAvail) Return the first ChildConfigIi filtered by the IitbOptnShAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnshwhse(string $IitbOptnShWhse) Return the first ChildConfigIi filtered by the IitbOptnShWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnshdet(string $IitbOptnShDet) Return the first ChildConfigIi filtered by the IitbOptnShDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnshdaysback(int $IitbOptnShDaysBack) Return the first ChildConfigIi filtered by the IitbOptnShDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return the first ChildConfigIi filtered by the IitbOptnShStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnsoavail(string $IitbOptnSoAvail) Return the first ChildConfigIi filtered by the IitbOptnSoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnsowhse(string $IitbOptnSoWhse) Return the first ChildConfigIi filtered by the IitbOptnSoWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return the first ChildConfigIi filtered by the IitbOptnSerlotAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnstckavail(string $IitbOptnStckAvail) Return the first ChildConfigIi filtered by the IitbOptnStckAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnstckwhse(string $IitbOptnStckWhse) Return the first ChildConfigIi filtered by the IitbOptnStckWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnstckdet(string $IitbOptnStckDet) Return the first ChildConfigIi filtered by the IitbOptnStckDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return the first ChildConfigIi filtered by the IitbOptnSubsupAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return the first ChildConfigIi filtered by the IitbOptnSubsupWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnlsavail(string $IitbOptnLsAvail) Return the first ChildConfigIi filtered by the IitbOptnLsAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptnlswhse(string $IitbOptnLsWhse) Return the first ChildConfigIi filtered by the IitbOptnLsWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return the first ChildConfigIi filtered by the IitbOptnDesc1Or2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByIitboptndelcerts(string $IitbOptnDelCerts) Return the first ChildConfigIi filtered by the IitbOptnDelCerts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigIi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigIi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigIi requireOneByDummy(string $dummy) Return the first ChildConfigIi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigIi[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigIi objects based on current ModelCriteria
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptncode(string $IitbOptnCode) Return ChildConfigIi objects filtered by the IitbOptnCode column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnactavail(string $IitbOptnActAvail) Return ChildConfigIi objects filtered by the IitbOptnActAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnactwhse(string $IitbOptnActWhse) Return ChildConfigIi objects filtered by the IitbOptnActWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnactdet(string $IitbOptnActDet) Return ChildConfigIi objects filtered by the IitbOptnActDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnactdaysback(int $IitbOptnActDaysBack) Return ChildConfigIi objects filtered by the IitbOptnActDaysBack column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return ChildConfigIi objects filtered by the IitbOptnActStrtDate column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptncostavail(string $IitbOptnCostAvail) Return ChildConfigIi objects filtered by the IitbOptnCostAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptncostwhse(string $IitbOptnCostWhse) Return ChildConfigIi objects filtered by the IitbOptnCostWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptncostdet(string $IitbOptnCostDet) Return ChildConfigIi objects filtered by the IitbOptnCostDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptngenavail(string $IitbOptnGenAvail) Return ChildConfigIi objects filtered by the IitbOptnGenAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnktavail(string $IitbOptnKtAvail) Return ChildConfigIi objects filtered by the IitbOptnKtAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnpricavail(string $IitbOptnPricAvail) Return ChildConfigIi objects filtered by the IitbOptnPricAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnphavail(string $IitbOptnPhAvail) Return ChildConfigIi objects filtered by the IitbOptnPhAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnphwhse(string $IitbOptnPhWhse) Return ChildConfigIi objects filtered by the IitbOptnPhWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnphdet(string $IitbOptnPhDet) Return ChildConfigIi objects filtered by the IitbOptnPhDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return ChildConfigIi objects filtered by the IitbOptnPhDaysBack column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return ChildConfigIi objects filtered by the IitbOptnPhStrtDate column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnpoavail(string $IitbOptnPoAvail) Return ChildConfigIi objects filtered by the IitbOptnPoAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnpowhse(string $IitbOptnPoWhse) Return ChildConfigIi objects filtered by the IitbOptnPoWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnreqravail(string $IitbOptnReqrAvail) Return ChildConfigIi objects filtered by the IitbOptnReqrAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return ChildConfigIi objects filtered by the IitbOptnReqrWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnreqrview(string $IitbOptnReqrView) Return ChildConfigIi objects filtered by the IitbOptnReqrView column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnshavail(string $IitbOptnShAvail) Return ChildConfigIi objects filtered by the IitbOptnShAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnshwhse(string $IitbOptnShWhse) Return ChildConfigIi objects filtered by the IitbOptnShWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnshdet(string $IitbOptnShDet) Return ChildConfigIi objects filtered by the IitbOptnShDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnshdaysback(int $IitbOptnShDaysBack) Return ChildConfigIi objects filtered by the IitbOptnShDaysBack column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return ChildConfigIi objects filtered by the IitbOptnShStrtDate column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnsoavail(string $IitbOptnSoAvail) Return ChildConfigIi objects filtered by the IitbOptnSoAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnsowhse(string $IitbOptnSoWhse) Return ChildConfigIi objects filtered by the IitbOptnSoWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return ChildConfigIi objects filtered by the IitbOptnSerlotAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnstckavail(string $IitbOptnStckAvail) Return ChildConfigIi objects filtered by the IitbOptnStckAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnstckwhse(string $IitbOptnStckWhse) Return ChildConfigIi objects filtered by the IitbOptnStckWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnstckdet(string $IitbOptnStckDet) Return ChildConfigIi objects filtered by the IitbOptnStckDet column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return ChildConfigIi objects filtered by the IitbOptnSubsupAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return ChildConfigIi objects filtered by the IitbOptnSubsupWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnlsavail(string $IitbOptnLsAvail) Return ChildConfigIi objects filtered by the IitbOptnLsAvail column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptnlswhse(string $IitbOptnLsWhse) Return ChildConfigIi objects filtered by the IitbOptnLsWhse column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return ChildConfigIi objects filtered by the IitbOptnDesc1Or2 column
 * @method     ChildConfigIi[]|ObjectCollection findByIitboptndelcerts(string $IitbOptnDelCerts) Return ChildConfigIi objects filtered by the IitbOptnDelCerts column
 * @method     ChildConfigIi[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigIi objects filtered by the DateUpdtd column
 * @method     ChildConfigIi[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigIi objects filtered by the TimeUpdtd column
 * @method     ChildConfigIi[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigIi objects filtered by the dummy column
 * @method     ChildConfigIi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigIiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigIiQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigIi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigIiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigIiQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigIiQuery) {
            return $criteria;
        }
        $query = new ChildConfigIiQuery();
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
     * @return ChildConfigIi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigIiTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigIi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IitbOptnCode, IitbOptnActAvail, IitbOptnActWhse, IitbOptnActDet, IitbOptnActDaysBack, IitbOptnActStrtDate, IitbOptnCostAvail, IitbOptnCostWhse, IitbOptnCostDet, IitbOptnGenAvail, IitbOptnKtAvail, IitbOptnPricAvail, IitbOptnPhAvail, IitbOptnPhWhse, IitbOptnPhDet, IitbOptnPhDaysBack, IitbOptnPhStrtDate, IitbOptnPoAvail, IitbOptnPoWhse, IitbOptnReqrAvail, IitbOptnReqrWhse, IitbOptnReqrView, IitbOptnShAvail, IitbOptnShWhse, IitbOptnShDet, IitbOptnShDaysBack, IitbOptnShStrtDate, IitbOptnSoAvail, IitbOptnSoWhse, IitbOptnSerlotAvail, IitbOptnStckAvail, IitbOptnStckWhse, IitbOptnStckDet, IitbOptnSubsupAvail, IitbOptnSubsupWhse, IitbOptnLsAvail, IitbOptnLsWhse, IitbOptnDesc1Or2, IitbOptnDelCerts, DateUpdtd, TimeUpdtd, dummy FROM ii_options WHERE IitbOptnCode = :p0';
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
            /** @var ChildConfigIi $obj */
            $obj = new ChildConfigIi();
            $obj->hydrate($row);
            ConfigIiTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigIi|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IitbOptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncode('fooValue');   // WHERE IitbOptnCode = 'fooValue'
     * $query->filterByIitboptncode('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncode($iitboptncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCODE, $iitboptncode, $comparison);
    }

    /**
     * Filter the query on the IitbOptnActAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactavail('fooValue');   // WHERE IitbOptnActAvail = 'fooValue'
     * $query->filterByIitboptnactavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnactavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactavail($iitboptnactavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTAVAIL, $iitboptnactavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnActWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactwhse('fooValue');   // WHERE IitbOptnActWhse = 'fooValue'
     * $query->filterByIitboptnactwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnactwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactwhse($iitboptnactwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTWHSE, $iitboptnactwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnActDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactdet('fooValue');   // WHERE IitbOptnActDet = 'fooValue'
     * $query->filterByIitboptnactdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnactdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactdet($iitboptnactdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTDET, $iitboptnactdet, $comparison);
    }

    /**
     * Filter the query on the IitbOptnActDaysBack column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactdaysback(1234); // WHERE IitbOptnActDaysBack = 1234
     * $query->filterByIitboptnactdaysback(array(12, 34)); // WHERE IitbOptnActDaysBack IN (12, 34)
     * $query->filterByIitboptnactdaysback(array('min' => 12)); // WHERE IitbOptnActDaysBack > 12
     * </code>
     *
     * @param     mixed $iitboptnactdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactdaysback($iitboptnactdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnactdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnactdaysback['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnactdaysback['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback, $comparison);
    }

    /**
     * Filter the query on the IitbOptnActStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactstrtdate('fooValue');   // WHERE IitbOptnActStrtDate = 'fooValue'
     * $query->filterByIitboptnactstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnactstrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactstrtdate($iitboptnactstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNACTSTRTDATE, $iitboptnactstrtdate, $comparison);
    }

    /**
     * Filter the query on the IitbOptnCostAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostavail('fooValue');   // WHERE IitbOptnCostAvail = 'fooValue'
     * $query->filterByIitboptncostavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptncostavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostavail($iitboptncostavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCOSTAVAIL, $iitboptncostavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnCostWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostwhse('fooValue');   // WHERE IitbOptnCostWhse = 'fooValue'
     * $query->filterByIitboptncostwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptncostwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostwhse($iitboptncostwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCOSTWHSE, $iitboptncostwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnCostDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostdet('fooValue');   // WHERE IitbOptnCostDet = 'fooValue'
     * $query->filterByIitboptncostdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptncostdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostdet($iitboptncostdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCOSTDET, $iitboptncostdet, $comparison);
    }

    /**
     * Filter the query on the IitbOptnGenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptngenavail('fooValue');   // WHERE IitbOptnGenAvail = 'fooValue'
     * $query->filterByIitboptngenavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnGenAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptngenavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptngenavail($iitboptngenavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptngenavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNGENAVAIL, $iitboptngenavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnKtAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnktavail('fooValue');   // WHERE IitbOptnKtAvail = 'fooValue'
     * $query->filterByIitboptnktavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnKtAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnktavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnktavail($iitboptnktavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnktavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNKTAVAIL, $iitboptnktavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPricAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpricavail('fooValue');   // WHERE IitbOptnPricAvail = 'fooValue'
     * $query->filterByIitboptnpricavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPricAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnpricavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpricavail($iitboptnpricavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpricavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPRICAVAIL, $iitboptnpricavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPhAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphavail('fooValue');   // WHERE IitbOptnPhAvail = 'fooValue'
     * $query->filterByIitboptnphavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnphavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphavail($iitboptnphavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHAVAIL, $iitboptnphavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPhWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphwhse('fooValue');   // WHERE IitbOptnPhWhse = 'fooValue'
     * $query->filterByIitboptnphwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnphwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphwhse($iitboptnphwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHWHSE, $iitboptnphwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPhDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphdet('fooValue');   // WHERE IitbOptnPhDet = 'fooValue'
     * $query->filterByIitboptnphdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnphdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphdet($iitboptnphdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHDET, $iitboptnphdet, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPhDaysBack column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphdaysback(1234); // WHERE IitbOptnPhDaysBack = 1234
     * $query->filterByIitboptnphdaysback(array(12, 34)); // WHERE IitbOptnPhDaysBack IN (12, 34)
     * $query->filterByIitboptnphdaysback(array('min' => 12)); // WHERE IitbOptnPhDaysBack > 12
     * </code>
     *
     * @param     mixed $iitboptnphdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphdaysback($iitboptnphdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnphdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnphdaysback['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnphdaysback['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPhStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphstrtdate('fooValue');   // WHERE IitbOptnPhStrtDate = 'fooValue'
     * $query->filterByIitboptnphstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnphstrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphstrtdate($iitboptnphstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPHSTRTDATE, $iitboptnphstrtdate, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpoavail('fooValue');   // WHERE IitbOptnPoAvail = 'fooValue'
     * $query->filterByIitboptnpoavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPoAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnpoavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpoavail($iitboptnpoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPOAVAIL, $iitboptnpoavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnPoWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpowhse('fooValue');   // WHERE IitbOptnPoWhse = 'fooValue'
     * $query->filterByIitboptnpowhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPoWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnpowhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpowhse($iitboptnpowhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpowhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNPOWHSE, $iitboptnpowhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnReqrAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqravail('fooValue');   // WHERE IitbOptnReqrAvail = 'fooValue'
     * $query->filterByIitboptnreqravail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnreqravail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqravail($iitboptnreqravail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqravail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNREQRAVAIL, $iitboptnreqravail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnReqrWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqrwhse('fooValue');   // WHERE IitbOptnReqrWhse = 'fooValue'
     * $query->filterByIitboptnreqrwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnreqrwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqrwhse($iitboptnreqrwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNREQRWHSE, $iitboptnreqrwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnReqrView column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqrview('fooValue');   // WHERE IitbOptnReqrView = 'fooValue'
     * $query->filterByIitboptnreqrview('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrView LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnreqrview The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqrview($iitboptnreqrview = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrview)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNREQRVIEW, $iitboptnreqrview, $comparison);
    }

    /**
     * Filter the query on the IitbOptnShAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshavail('fooValue');   // WHERE IitbOptnShAvail = 'fooValue'
     * $query->filterByIitboptnshavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnshavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshavail($iitboptnshavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHAVAIL, $iitboptnshavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnShWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshwhse('fooValue');   // WHERE IitbOptnShWhse = 'fooValue'
     * $query->filterByIitboptnshwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnshwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshwhse($iitboptnshwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHWHSE, $iitboptnshwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnShDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshdet('fooValue');   // WHERE IitbOptnShDet = 'fooValue'
     * $query->filterByIitboptnshdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnshdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshdet($iitboptnshdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHDET, $iitboptnshdet, $comparison);
    }

    /**
     * Filter the query on the IitbOptnShDaysBack column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshdaysback(1234); // WHERE IitbOptnShDaysBack = 1234
     * $query->filterByIitboptnshdaysback(array(12, 34)); // WHERE IitbOptnShDaysBack IN (12, 34)
     * $query->filterByIitboptnshdaysback(array('min' => 12)); // WHERE IitbOptnShDaysBack > 12
     * </code>
     *
     * @param     mixed $iitboptnshdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshdaysback($iitboptnshdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnshdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnshdaysback['min'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnshdaysback['max'])) {
                $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback, $comparison);
    }

    /**
     * Filter the query on the IitbOptnShStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshstrtdate('fooValue');   // WHERE IitbOptnShStrtDate = 'fooValue'
     * $query->filterByIitboptnshstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnshstrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshstrtdate($iitboptnshstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSHSTRTDATE, $iitboptnshstrtdate, $comparison);
    }

    /**
     * Filter the query on the IitbOptnSoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsoavail('fooValue');   // WHERE IitbOptnSoAvail = 'fooValue'
     * $query->filterByIitboptnsoavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSoAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnsoavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsoavail($iitboptnsoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSOAVAIL, $iitboptnsoavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnSoWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsowhse('fooValue');   // WHERE IitbOptnSoWhse = 'fooValue'
     * $query->filterByIitboptnsowhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSoWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnsowhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsowhse($iitboptnsowhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsowhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSOWHSE, $iitboptnsowhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnSerlotAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnserlotavail('fooValue');   // WHERE IitbOptnSerlotAvail = 'fooValue'
     * $query->filterByIitboptnserlotavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSerlotAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnserlotavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnserlotavail($iitboptnserlotavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnserlotavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSERLOTAVAIL, $iitboptnserlotavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnStckAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckavail('fooValue');   // WHERE IitbOptnStckAvail = 'fooValue'
     * $query->filterByIitboptnstckavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnstckavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckavail($iitboptnstckavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSTCKAVAIL, $iitboptnstckavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnStckWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckwhse('fooValue');   // WHERE IitbOptnStckWhse = 'fooValue'
     * $query->filterByIitboptnstckwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnstckwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckwhse($iitboptnstckwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSTCKWHSE, $iitboptnstckwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnStckDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckdet('fooValue');   // WHERE IitbOptnStckDet = 'fooValue'
     * $query->filterByIitboptnstckdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnstckdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckdet($iitboptnstckdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSTCKDET, $iitboptnstckdet, $comparison);
    }

    /**
     * Filter the query on the IitbOptnSubsupAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsubsupavail('fooValue');   // WHERE IitbOptnSubsupAvail = 'fooValue'
     * $query->filterByIitboptnsubsupavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSubsupAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnsubsupavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsubsupavail($iitboptnsubsupavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSUBSUPAVAIL, $iitboptnsubsupavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnSubsupWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsubsupwhse('fooValue');   // WHERE IitbOptnSubsupWhse = 'fooValue'
     * $query->filterByIitboptnsubsupwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSubsupWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnsubsupwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsubsupwhse($iitboptnsubsupwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNSUBSUPWHSE, $iitboptnsubsupwhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnLsAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnlsavail('fooValue');   // WHERE IitbOptnLsAvail = 'fooValue'
     * $query->filterByIitboptnlsavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnLsAvail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnlsavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnlsavail($iitboptnlsavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlsavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNLSAVAIL, $iitboptnlsavail, $comparison);
    }

    /**
     * Filter the query on the IitbOptnLsWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnlswhse('fooValue');   // WHERE IitbOptnLsWhse = 'fooValue'
     * $query->filterByIitboptnlswhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnLsWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptnlswhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnlswhse($iitboptnlswhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlswhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNLSWHSE, $iitboptnlswhse, $comparison);
    }

    /**
     * Filter the query on the IitbOptnDesc1Or2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptndesc1or2('fooValue');   // WHERE IitbOptnDesc1Or2 = 'fooValue'
     * $query->filterByIitboptndesc1or2('%fooValue%', Criteria::LIKE); // WHERE IitbOptnDesc1Or2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptndesc1or2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptndesc1or2($iitboptndesc1or2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndesc1or2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNDESC1OR2, $iitboptndesc1or2, $comparison);
    }

    /**
     * Filter the query on the IitbOptnDelCerts column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptndelcerts('fooValue');   // WHERE IitbOptnDelCerts = 'fooValue'
     * $query->filterByIitboptndelcerts('%fooValue%', Criteria::LIKE); // WHERE IitbOptnDelCerts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iitboptndelcerts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByIitboptndelcerts($iitboptndelcerts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndelcerts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNDELCERTS, $iitboptndelcerts, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigIiTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigIi $configIi Object to remove from the list of results
     *
     * @return $this|ChildConfigIiQuery The current query, for fluid interface
     */
    public function prune($configIi = null)
    {
        if ($configIi) {
            $this->addUsingAlias(ConfigIiTableMap::COL_IITBOPTNCODE, $configIi->getIitboptncode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ii_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigIiTableMap::clearInstancePool();
            ConfigIiTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigIiTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigIiTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigIiTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigIiTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigIiQuery
