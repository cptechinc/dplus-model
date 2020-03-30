<?php

namespace Base;

use \OptionsIi as ChildOptionsIi;
use \OptionsIiQuery as ChildOptionsIiQuery;
use \Exception;
use \PDO;
use Map\OptionsIiTableMap;
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
 * @method     ChildOptionsIiQuery orderByIitboptncode($order = Criteria::ASC) Order by the IitbOptnCode column
 * @method     ChildOptionsIiQuery orderByIitboptnactavail($order = Criteria::ASC) Order by the IitbOptnActAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnactwhse($order = Criteria::ASC) Order by the IitbOptnActWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnactdet($order = Criteria::ASC) Order by the IitbOptnActDet column
 * @method     ChildOptionsIiQuery orderByIitboptnactdaysback($order = Criteria::ASC) Order by the IitbOptnActDaysBack column
 * @method     ChildOptionsIiQuery orderByIitboptnactstrtdate($order = Criteria::ASC) Order by the IitbOptnActStrtDate column
 * @method     ChildOptionsIiQuery orderByIitboptncostavail($order = Criteria::ASC) Order by the IitbOptnCostAvail column
 * @method     ChildOptionsIiQuery orderByIitboptncostwhse($order = Criteria::ASC) Order by the IitbOptnCostWhse column
 * @method     ChildOptionsIiQuery orderByIitboptncostdet($order = Criteria::ASC) Order by the IitbOptnCostDet column
 * @method     ChildOptionsIiQuery orderByIitboptngenavail($order = Criteria::ASC) Order by the IitbOptnGenAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnktavail($order = Criteria::ASC) Order by the IitbOptnKtAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnpricavail($order = Criteria::ASC) Order by the IitbOptnPricAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnphavail($order = Criteria::ASC) Order by the IitbOptnPhAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnphwhse($order = Criteria::ASC) Order by the IitbOptnPhWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnphdet($order = Criteria::ASC) Order by the IitbOptnPhDet column
 * @method     ChildOptionsIiQuery orderByIitboptnphdaysback($order = Criteria::ASC) Order by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIiQuery orderByIitboptnphstrtdate($order = Criteria::ASC) Order by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIiQuery orderByIitboptnpoavail($order = Criteria::ASC) Order by the IitbOptnPoAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnpowhse($order = Criteria::ASC) Order by the IitbOptnPoWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnreqravail($order = Criteria::ASC) Order by the IitbOptnReqrAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnreqrwhse($order = Criteria::ASC) Order by the IitbOptnReqrWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnreqrview($order = Criteria::ASC) Order by the IitbOptnReqrView column
 * @method     ChildOptionsIiQuery orderByIitboptnshavail($order = Criteria::ASC) Order by the IitbOptnShAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnshwhse($order = Criteria::ASC) Order by the IitbOptnShWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnshdet($order = Criteria::ASC) Order by the IitbOptnShDet column
 * @method     ChildOptionsIiQuery orderByIitboptnshdaysback($order = Criteria::ASC) Order by the IitbOptnShDaysBack column
 * @method     ChildOptionsIiQuery orderByIitboptnshstrtdate($order = Criteria::ASC) Order by the IitbOptnShStrtDate column
 * @method     ChildOptionsIiQuery orderByIitboptnsoavail($order = Criteria::ASC) Order by the IitbOptnSoAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnsowhse($order = Criteria::ASC) Order by the IitbOptnSoWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnserlotavail($order = Criteria::ASC) Order by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnstckavail($order = Criteria::ASC) Order by the IitbOptnStckAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnstckwhse($order = Criteria::ASC) Order by the IitbOptnStckWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnstckdet($order = Criteria::ASC) Order by the IitbOptnStckDet column
 * @method     ChildOptionsIiQuery orderByIitboptnsubsupavail($order = Criteria::ASC) Order by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnsubsupwhse($order = Criteria::ASC) Order by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIiQuery orderByIitboptnlsavail($order = Criteria::ASC) Order by the IitbOptnLsAvail column
 * @method     ChildOptionsIiQuery orderByIitboptnlswhse($order = Criteria::ASC) Order by the IitbOptnLsWhse column
 * @method     ChildOptionsIiQuery orderByIitboptndesc1or2($order = Criteria::ASC) Order by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIiQuery orderByIitboptndelcerts($order = Criteria::ASC) Order by the IitbOptnDelCerts column
 * @method     ChildOptionsIiQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildOptionsIiQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildOptionsIiQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildOptionsIiQuery groupByIitboptncode() Group by the IitbOptnCode column
 * @method     ChildOptionsIiQuery groupByIitboptnactavail() Group by the IitbOptnActAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnactwhse() Group by the IitbOptnActWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnactdet() Group by the IitbOptnActDet column
 * @method     ChildOptionsIiQuery groupByIitboptnactdaysback() Group by the IitbOptnActDaysBack column
 * @method     ChildOptionsIiQuery groupByIitboptnactstrtdate() Group by the IitbOptnActStrtDate column
 * @method     ChildOptionsIiQuery groupByIitboptncostavail() Group by the IitbOptnCostAvail column
 * @method     ChildOptionsIiQuery groupByIitboptncostwhse() Group by the IitbOptnCostWhse column
 * @method     ChildOptionsIiQuery groupByIitboptncostdet() Group by the IitbOptnCostDet column
 * @method     ChildOptionsIiQuery groupByIitboptngenavail() Group by the IitbOptnGenAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnktavail() Group by the IitbOptnKtAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnpricavail() Group by the IitbOptnPricAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnphavail() Group by the IitbOptnPhAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnphwhse() Group by the IitbOptnPhWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnphdet() Group by the IitbOptnPhDet column
 * @method     ChildOptionsIiQuery groupByIitboptnphdaysback() Group by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIiQuery groupByIitboptnphstrtdate() Group by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIiQuery groupByIitboptnpoavail() Group by the IitbOptnPoAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnpowhse() Group by the IitbOptnPoWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnreqravail() Group by the IitbOptnReqrAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnreqrwhse() Group by the IitbOptnReqrWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnreqrview() Group by the IitbOptnReqrView column
 * @method     ChildOptionsIiQuery groupByIitboptnshavail() Group by the IitbOptnShAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnshwhse() Group by the IitbOptnShWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnshdet() Group by the IitbOptnShDet column
 * @method     ChildOptionsIiQuery groupByIitboptnshdaysback() Group by the IitbOptnShDaysBack column
 * @method     ChildOptionsIiQuery groupByIitboptnshstrtdate() Group by the IitbOptnShStrtDate column
 * @method     ChildOptionsIiQuery groupByIitboptnsoavail() Group by the IitbOptnSoAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnsowhse() Group by the IitbOptnSoWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnserlotavail() Group by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnstckavail() Group by the IitbOptnStckAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnstckwhse() Group by the IitbOptnStckWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnstckdet() Group by the IitbOptnStckDet column
 * @method     ChildOptionsIiQuery groupByIitboptnsubsupavail() Group by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnsubsupwhse() Group by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIiQuery groupByIitboptnlsavail() Group by the IitbOptnLsAvail column
 * @method     ChildOptionsIiQuery groupByIitboptnlswhse() Group by the IitbOptnLsWhse column
 * @method     ChildOptionsIiQuery groupByIitboptndesc1or2() Group by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIiQuery groupByIitboptndelcerts() Group by the IitbOptnDelCerts column
 * @method     ChildOptionsIiQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildOptionsIiQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildOptionsIiQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildOptionsIiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildOptionsIiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildOptionsIiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildOptionsIiQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildOptionsIiQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildOptionsIiQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildOptionsIi findOne(ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query
 * @method     ChildOptionsIi findOneOrCreate(ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query, or a new ChildOptionsIi object populated from the query conditions when no match is found
 *
 * @method     ChildOptionsIi findOneByIitboptncode(string $IitbOptnCode) Return the first ChildOptionsIi filtered by the IitbOptnCode column
 * @method     ChildOptionsIi findOneByIitboptnactavail(string $IitbOptnActAvail) Return the first ChildOptionsIi filtered by the IitbOptnActAvail column
 * @method     ChildOptionsIi findOneByIitboptnactwhse(string $IitbOptnActWhse) Return the first ChildOptionsIi filtered by the IitbOptnActWhse column
 * @method     ChildOptionsIi findOneByIitboptnactdet(string $IitbOptnActDet) Return the first ChildOptionsIi filtered by the IitbOptnActDet column
 * @method     ChildOptionsIi findOneByIitboptnactdaysback(int $IitbOptnActDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnActDaysBack column
 * @method     ChildOptionsIi findOneByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnActStrtDate column
 * @method     ChildOptionsIi findOneByIitboptncostavail(string $IitbOptnCostAvail) Return the first ChildOptionsIi filtered by the IitbOptnCostAvail column
 * @method     ChildOptionsIi findOneByIitboptncostwhse(string $IitbOptnCostWhse) Return the first ChildOptionsIi filtered by the IitbOptnCostWhse column
 * @method     ChildOptionsIi findOneByIitboptncostdet(string $IitbOptnCostDet) Return the first ChildOptionsIi filtered by the IitbOptnCostDet column
 * @method     ChildOptionsIi findOneByIitboptngenavail(string $IitbOptnGenAvail) Return the first ChildOptionsIi filtered by the IitbOptnGenAvail column
 * @method     ChildOptionsIi findOneByIitboptnktavail(string $IitbOptnKtAvail) Return the first ChildOptionsIi filtered by the IitbOptnKtAvail column
 * @method     ChildOptionsIi findOneByIitboptnpricavail(string $IitbOptnPricAvail) Return the first ChildOptionsIi filtered by the IitbOptnPricAvail column
 * @method     ChildOptionsIi findOneByIitboptnphavail(string $IitbOptnPhAvail) Return the first ChildOptionsIi filtered by the IitbOptnPhAvail column
 * @method     ChildOptionsIi findOneByIitboptnphwhse(string $IitbOptnPhWhse) Return the first ChildOptionsIi filtered by the IitbOptnPhWhse column
 * @method     ChildOptionsIi findOneByIitboptnphdet(string $IitbOptnPhDet) Return the first ChildOptionsIi filtered by the IitbOptnPhDet column
 * @method     ChildOptionsIi findOneByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIi findOneByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIi findOneByIitboptnpoavail(string $IitbOptnPoAvail) Return the first ChildOptionsIi filtered by the IitbOptnPoAvail column
 * @method     ChildOptionsIi findOneByIitboptnpowhse(string $IitbOptnPoWhse) Return the first ChildOptionsIi filtered by the IitbOptnPoWhse column
 * @method     ChildOptionsIi findOneByIitboptnreqravail(string $IitbOptnReqrAvail) Return the first ChildOptionsIi filtered by the IitbOptnReqrAvail column
 * @method     ChildOptionsIi findOneByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return the first ChildOptionsIi filtered by the IitbOptnReqrWhse column
 * @method     ChildOptionsIi findOneByIitboptnreqrview(string $IitbOptnReqrView) Return the first ChildOptionsIi filtered by the IitbOptnReqrView column
 * @method     ChildOptionsIi findOneByIitboptnshavail(string $IitbOptnShAvail) Return the first ChildOptionsIi filtered by the IitbOptnShAvail column
 * @method     ChildOptionsIi findOneByIitboptnshwhse(string $IitbOptnShWhse) Return the first ChildOptionsIi filtered by the IitbOptnShWhse column
 * @method     ChildOptionsIi findOneByIitboptnshdet(string $IitbOptnShDet) Return the first ChildOptionsIi filtered by the IitbOptnShDet column
 * @method     ChildOptionsIi findOneByIitboptnshdaysback(int $IitbOptnShDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnShDaysBack column
 * @method     ChildOptionsIi findOneByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnShStrtDate column
 * @method     ChildOptionsIi findOneByIitboptnsoavail(string $IitbOptnSoAvail) Return the first ChildOptionsIi filtered by the IitbOptnSoAvail column
 * @method     ChildOptionsIi findOneByIitboptnsowhse(string $IitbOptnSoWhse) Return the first ChildOptionsIi filtered by the IitbOptnSoWhse column
 * @method     ChildOptionsIi findOneByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return the first ChildOptionsIi filtered by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIi findOneByIitboptnstckavail(string $IitbOptnStckAvail) Return the first ChildOptionsIi filtered by the IitbOptnStckAvail column
 * @method     ChildOptionsIi findOneByIitboptnstckwhse(string $IitbOptnStckWhse) Return the first ChildOptionsIi filtered by the IitbOptnStckWhse column
 * @method     ChildOptionsIi findOneByIitboptnstckdet(string $IitbOptnStckDet) Return the first ChildOptionsIi filtered by the IitbOptnStckDet column
 * @method     ChildOptionsIi findOneByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return the first ChildOptionsIi filtered by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIi findOneByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return the first ChildOptionsIi filtered by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIi findOneByIitboptnlsavail(string $IitbOptnLsAvail) Return the first ChildOptionsIi filtered by the IitbOptnLsAvail column
 * @method     ChildOptionsIi findOneByIitboptnlswhse(string $IitbOptnLsWhse) Return the first ChildOptionsIi filtered by the IitbOptnLsWhse column
 * @method     ChildOptionsIi findOneByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return the first ChildOptionsIi filtered by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIi findOneByIitboptndelcerts(string $IitbOptnDelCerts) Return the first ChildOptionsIi filtered by the IitbOptnDelCerts column
 * @method     ChildOptionsIi findOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsIi filtered by the DateUpdtd column
 * @method     ChildOptionsIi findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsIi filtered by the TimeUpdtd column
 * @method     ChildOptionsIi findOneByDummy(string $dummy) Return the first ChildOptionsIi filtered by the dummy column *

 * @method     ChildOptionsIi requirePk($key, ConnectionInterface $con = null) Return the ChildOptionsIi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOne(ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsIi requireOneByIitboptncode(string $IitbOptnCode) Return the first ChildOptionsIi filtered by the IitbOptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnactavail(string $IitbOptnActAvail) Return the first ChildOptionsIi filtered by the IitbOptnActAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnactwhse(string $IitbOptnActWhse) Return the first ChildOptionsIi filtered by the IitbOptnActWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnactdet(string $IitbOptnActDet) Return the first ChildOptionsIi filtered by the IitbOptnActDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnactdaysback(int $IitbOptnActDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnActDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnActStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptncostavail(string $IitbOptnCostAvail) Return the first ChildOptionsIi filtered by the IitbOptnCostAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptncostwhse(string $IitbOptnCostWhse) Return the first ChildOptionsIi filtered by the IitbOptnCostWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptncostdet(string $IitbOptnCostDet) Return the first ChildOptionsIi filtered by the IitbOptnCostDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptngenavail(string $IitbOptnGenAvail) Return the first ChildOptionsIi filtered by the IitbOptnGenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnktavail(string $IitbOptnKtAvail) Return the first ChildOptionsIi filtered by the IitbOptnKtAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnpricavail(string $IitbOptnPricAvail) Return the first ChildOptionsIi filtered by the IitbOptnPricAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnphavail(string $IitbOptnPhAvail) Return the first ChildOptionsIi filtered by the IitbOptnPhAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnphwhse(string $IitbOptnPhWhse) Return the first ChildOptionsIi filtered by the IitbOptnPhWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnphdet(string $IitbOptnPhDet) Return the first ChildOptionsIi filtered by the IitbOptnPhDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnPhDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnPhStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnpoavail(string $IitbOptnPoAvail) Return the first ChildOptionsIi filtered by the IitbOptnPoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnpowhse(string $IitbOptnPoWhse) Return the first ChildOptionsIi filtered by the IitbOptnPoWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnreqravail(string $IitbOptnReqrAvail) Return the first ChildOptionsIi filtered by the IitbOptnReqrAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return the first ChildOptionsIi filtered by the IitbOptnReqrWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnreqrview(string $IitbOptnReqrView) Return the first ChildOptionsIi filtered by the IitbOptnReqrView column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnshavail(string $IitbOptnShAvail) Return the first ChildOptionsIi filtered by the IitbOptnShAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnshwhse(string $IitbOptnShWhse) Return the first ChildOptionsIi filtered by the IitbOptnShWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnshdet(string $IitbOptnShDet) Return the first ChildOptionsIi filtered by the IitbOptnShDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnshdaysback(int $IitbOptnShDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnShDaysBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnShStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnsoavail(string $IitbOptnSoAvail) Return the first ChildOptionsIi filtered by the IitbOptnSoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnsowhse(string $IitbOptnSoWhse) Return the first ChildOptionsIi filtered by the IitbOptnSoWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return the first ChildOptionsIi filtered by the IitbOptnSerlotAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnstckavail(string $IitbOptnStckAvail) Return the first ChildOptionsIi filtered by the IitbOptnStckAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnstckwhse(string $IitbOptnStckWhse) Return the first ChildOptionsIi filtered by the IitbOptnStckWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnstckdet(string $IitbOptnStckDet) Return the first ChildOptionsIi filtered by the IitbOptnStckDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return the first ChildOptionsIi filtered by the IitbOptnSubsupAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return the first ChildOptionsIi filtered by the IitbOptnSubsupWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnlsavail(string $IitbOptnLsAvail) Return the first ChildOptionsIi filtered by the IitbOptnLsAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptnlswhse(string $IitbOptnLsWhse) Return the first ChildOptionsIi filtered by the IitbOptnLsWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return the first ChildOptionsIi filtered by the IitbOptnDesc1Or2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByIitboptndelcerts(string $IitbOptnDelCerts) Return the first ChildOptionsIi filtered by the IitbOptnDelCerts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsIi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsIi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOneByDummy(string $dummy) Return the first ChildOptionsIi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsIi[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildOptionsIi objects based on current ModelCriteria
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptncode(string $IitbOptnCode) Return ChildOptionsIi objects filtered by the IitbOptnCode column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnactavail(string $IitbOptnActAvail) Return ChildOptionsIi objects filtered by the IitbOptnActAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnactwhse(string $IitbOptnActWhse) Return ChildOptionsIi objects filtered by the IitbOptnActWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnactdet(string $IitbOptnActDet) Return ChildOptionsIi objects filtered by the IitbOptnActDet column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnactdaysback(int $IitbOptnActDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnActDaysBack column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnActStrtDate column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptncostavail(string $IitbOptnCostAvail) Return ChildOptionsIi objects filtered by the IitbOptnCostAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptncostwhse(string $IitbOptnCostWhse) Return ChildOptionsIi objects filtered by the IitbOptnCostWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptncostdet(string $IitbOptnCostDet) Return ChildOptionsIi objects filtered by the IitbOptnCostDet column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptngenavail(string $IitbOptnGenAvail) Return ChildOptionsIi objects filtered by the IitbOptnGenAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnktavail(string $IitbOptnKtAvail) Return ChildOptionsIi objects filtered by the IitbOptnKtAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnpricavail(string $IitbOptnPricAvail) Return ChildOptionsIi objects filtered by the IitbOptnPricAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnphavail(string $IitbOptnPhAvail) Return ChildOptionsIi objects filtered by the IitbOptnPhAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnphwhse(string $IitbOptnPhWhse) Return ChildOptionsIi objects filtered by the IitbOptnPhWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnphdet(string $IitbOptnPhDet) Return ChildOptionsIi objects filtered by the IitbOptnPhDet column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnpoavail(string $IitbOptnPoAvail) Return ChildOptionsIi objects filtered by the IitbOptnPoAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnpowhse(string $IitbOptnPoWhse) Return ChildOptionsIi objects filtered by the IitbOptnPoWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnreqravail(string $IitbOptnReqrAvail) Return ChildOptionsIi objects filtered by the IitbOptnReqrAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return ChildOptionsIi objects filtered by the IitbOptnReqrWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnreqrview(string $IitbOptnReqrView) Return ChildOptionsIi objects filtered by the IitbOptnReqrView column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnshavail(string $IitbOptnShAvail) Return ChildOptionsIi objects filtered by the IitbOptnShAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnshwhse(string $IitbOptnShWhse) Return ChildOptionsIi objects filtered by the IitbOptnShWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnshdet(string $IitbOptnShDet) Return ChildOptionsIi objects filtered by the IitbOptnShDet column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnshdaysback(int $IitbOptnShDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnShDaysBack column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnShStrtDate column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnsoavail(string $IitbOptnSoAvail) Return ChildOptionsIi objects filtered by the IitbOptnSoAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnsowhse(string $IitbOptnSoWhse) Return ChildOptionsIi objects filtered by the IitbOptnSoWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return ChildOptionsIi objects filtered by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnstckavail(string $IitbOptnStckAvail) Return ChildOptionsIi objects filtered by the IitbOptnStckAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnstckwhse(string $IitbOptnStckWhse) Return ChildOptionsIi objects filtered by the IitbOptnStckWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnstckdet(string $IitbOptnStckDet) Return ChildOptionsIi objects filtered by the IitbOptnStckDet column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return ChildOptionsIi objects filtered by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return ChildOptionsIi objects filtered by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnlsavail(string $IitbOptnLsAvail) Return ChildOptionsIi objects filtered by the IitbOptnLsAvail column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptnlswhse(string $IitbOptnLsWhse) Return ChildOptionsIi objects filtered by the IitbOptnLsWhse column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return ChildOptionsIi objects filtered by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIi[]|ObjectCollection findByIitboptndelcerts(string $IitbOptnDelCerts) Return ChildOptionsIi objects filtered by the IitbOptnDelCerts column
 * @method     ChildOptionsIi[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildOptionsIi objects filtered by the DateUpdtd column
 * @method     ChildOptionsIi[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildOptionsIi objects filtered by the TimeUpdtd column
 * @method     ChildOptionsIi[]|ObjectCollection findByDummy(string $dummy) Return ChildOptionsIi objects filtered by the dummy column
 * @method     ChildOptionsIi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class OptionsIiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\OptionsIiQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\OptionsIi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOptionsIiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOptionsIiQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildOptionsIiQuery) {
            return $criteria;
        }
        $query = new ChildOptionsIiQuery();
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
     * @return ChildOptionsIi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = OptionsIiTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildOptionsIi A model object, or null if the key is not found
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
            /** @var ChildOptionsIi $obj */
            $obj = new ChildOptionsIi();
            $obj->hydrate($row);
            OptionsIiTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildOptionsIi|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $keys, Criteria::IN);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncode($iitboptncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $iitboptncode, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactavail($iitboptnactavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTAVAIL, $iitboptnactavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactwhse($iitboptnactwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTWHSE, $iitboptnactwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactdet($iitboptnactdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDET, $iitboptnactdet, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactdaysback($iitboptnactdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnactdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnactdaysback['min'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnactdaysback['max'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnactstrtdate($iitboptnactstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE, $iitboptnactstrtdate, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostavail($iitboptncostavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL, $iitboptncostavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostwhse($iitboptncostwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE, $iitboptncostwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptncostdet($iitboptncostdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTDET, $iitboptncostdet, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptngenavail($iitboptngenavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptngenavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNGENAVAIL, $iitboptngenavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnktavail($iitboptnktavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnktavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNKTAVAIL, $iitboptnktavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpricavail($iitboptnpricavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpricavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL, $iitboptnpricavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphavail($iitboptnphavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHAVAIL, $iitboptnphavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphwhse($iitboptnphwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHWHSE, $iitboptnphwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphdet($iitboptnphdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDET, $iitboptnphdet, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphdaysback($iitboptnphdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnphdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnphdaysback['min'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnphdaysback['max'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnphstrtdate($iitboptnphstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE, $iitboptnphstrtdate, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpoavail($iitboptnpoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPOAVAIL, $iitboptnpoavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnpowhse($iitboptnpowhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpowhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPOWHSE, $iitboptnpowhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqravail($iitboptnreqravail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqravail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL, $iitboptnreqravail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqrwhse($iitboptnreqrwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRWHSE, $iitboptnreqrwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnreqrview($iitboptnreqrview = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrview)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRVIEW, $iitboptnreqrview, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshavail($iitboptnshavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHAVAIL, $iitboptnshavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshwhse($iitboptnshwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHWHSE, $iitboptnshwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshdet($iitboptnshdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDET, $iitboptnshdet, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshdaysback($iitboptnshdaysback = null, $comparison = null)
    {
        if (is_array($iitboptnshdaysback)) {
            $useMinMax = false;
            if (isset($iitboptnshdaysback['min'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iitboptnshdaysback['max'])) {
                $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnshstrtdate($iitboptnshstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE, $iitboptnshstrtdate, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsoavail($iitboptnsoavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsoavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSOAVAIL, $iitboptnsoavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsowhse($iitboptnsowhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsowhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSOWHSE, $iitboptnsowhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnserlotavail($iitboptnserlotavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnserlotavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL, $iitboptnserlotavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckavail($iitboptnstckavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL, $iitboptnstckavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckwhse($iitboptnstckwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE, $iitboptnstckwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnstckdet($iitboptnstckdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKDET, $iitboptnstckdet, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsubsupavail($iitboptnsubsupavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL, $iitboptnsubsupavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnsubsupwhse($iitboptnsubsupwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE, $iitboptnsubsupwhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnlsavail($iitboptnlsavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlsavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNLSAVAIL, $iitboptnlsavail, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptnlswhse($iitboptnlswhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlswhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNLSWHSE, $iitboptnlswhse, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptndesc1or2($iitboptndesc1or2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndesc1or2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNDESC1OR2, $iitboptndesc1or2, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByIitboptndelcerts($iitboptndelcerts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndelcerts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNDELCERTS, $iitboptndelcerts, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionsIiTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildOptionsIi $optionsIi Object to remove from the list of results
     *
     * @return $this|ChildOptionsIiQuery The current query, for fluid interface
     */
    public function prune($optionsIi = null)
    {
        if ($optionsIi) {
            $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $optionsIi->getIitboptncode(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OptionsIiTableMap::clearInstancePool();
            OptionsIiTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsIiTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(OptionsIiTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            OptionsIiTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            OptionsIiTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // OptionsIiQuery
