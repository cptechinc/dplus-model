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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ii_options` table.
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
 * @method     ChildOptionsIi|null findOne(?ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query
 * @method     ChildOptionsIi findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query, or a new ChildOptionsIi object populated from the query conditions when no match is found
 *
 * @method     ChildOptionsIi|null findOneByIitboptncode(string $IitbOptnCode) Return the first ChildOptionsIi filtered by the IitbOptnCode column
 * @method     ChildOptionsIi|null findOneByIitboptnactavail(string $IitbOptnActAvail) Return the first ChildOptionsIi filtered by the IitbOptnActAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnactwhse(string $IitbOptnActWhse) Return the first ChildOptionsIi filtered by the IitbOptnActWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnactdet(string $IitbOptnActDet) Return the first ChildOptionsIi filtered by the IitbOptnActDet column
 * @method     ChildOptionsIi|null findOneByIitboptnactdaysback(int $IitbOptnActDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnActDaysBack column
 * @method     ChildOptionsIi|null findOneByIitboptnactstrtdate(string $IitbOptnActStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnActStrtDate column
 * @method     ChildOptionsIi|null findOneByIitboptncostavail(string $IitbOptnCostAvail) Return the first ChildOptionsIi filtered by the IitbOptnCostAvail column
 * @method     ChildOptionsIi|null findOneByIitboptncostwhse(string $IitbOptnCostWhse) Return the first ChildOptionsIi filtered by the IitbOptnCostWhse column
 * @method     ChildOptionsIi|null findOneByIitboptncostdet(string $IitbOptnCostDet) Return the first ChildOptionsIi filtered by the IitbOptnCostDet column
 * @method     ChildOptionsIi|null findOneByIitboptngenavail(string $IitbOptnGenAvail) Return the first ChildOptionsIi filtered by the IitbOptnGenAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnktavail(string $IitbOptnKtAvail) Return the first ChildOptionsIi filtered by the IitbOptnKtAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnpricavail(string $IitbOptnPricAvail) Return the first ChildOptionsIi filtered by the IitbOptnPricAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnphavail(string $IitbOptnPhAvail) Return the first ChildOptionsIi filtered by the IitbOptnPhAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnphwhse(string $IitbOptnPhWhse) Return the first ChildOptionsIi filtered by the IitbOptnPhWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnphdet(string $IitbOptnPhDet) Return the first ChildOptionsIi filtered by the IitbOptnPhDet column
 * @method     ChildOptionsIi|null findOneByIitboptnphdaysback(int $IitbOptnPhDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIi|null findOneByIitboptnphstrtdate(string $IitbOptnPhStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIi|null findOneByIitboptnpoavail(string $IitbOptnPoAvail) Return the first ChildOptionsIi filtered by the IitbOptnPoAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnpowhse(string $IitbOptnPoWhse) Return the first ChildOptionsIi filtered by the IitbOptnPoWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnreqravail(string $IitbOptnReqrAvail) Return the first ChildOptionsIi filtered by the IitbOptnReqrAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnreqrwhse(string $IitbOptnReqrWhse) Return the first ChildOptionsIi filtered by the IitbOptnReqrWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnreqrview(string $IitbOptnReqrView) Return the first ChildOptionsIi filtered by the IitbOptnReqrView column
 * @method     ChildOptionsIi|null findOneByIitboptnshavail(string $IitbOptnShAvail) Return the first ChildOptionsIi filtered by the IitbOptnShAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnshwhse(string $IitbOptnShWhse) Return the first ChildOptionsIi filtered by the IitbOptnShWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnshdet(string $IitbOptnShDet) Return the first ChildOptionsIi filtered by the IitbOptnShDet column
 * @method     ChildOptionsIi|null findOneByIitboptnshdaysback(int $IitbOptnShDaysBack) Return the first ChildOptionsIi filtered by the IitbOptnShDaysBack column
 * @method     ChildOptionsIi|null findOneByIitboptnshstrtdate(string $IitbOptnShStrtDate) Return the first ChildOptionsIi filtered by the IitbOptnShStrtDate column
 * @method     ChildOptionsIi|null findOneByIitboptnsoavail(string $IitbOptnSoAvail) Return the first ChildOptionsIi filtered by the IitbOptnSoAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnsowhse(string $IitbOptnSoWhse) Return the first ChildOptionsIi filtered by the IitbOptnSoWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnserlotavail(string $IitbOptnSerlotAvail) Return the first ChildOptionsIi filtered by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnstckavail(string $IitbOptnStckAvail) Return the first ChildOptionsIi filtered by the IitbOptnStckAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnstckwhse(string $IitbOptnStckWhse) Return the first ChildOptionsIi filtered by the IitbOptnStckWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnstckdet(string $IitbOptnStckDet) Return the first ChildOptionsIi filtered by the IitbOptnStckDet column
 * @method     ChildOptionsIi|null findOneByIitboptnsubsupavail(string $IitbOptnSubsupAvail) Return the first ChildOptionsIi filtered by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnsubsupwhse(string $IitbOptnSubsupWhse) Return the first ChildOptionsIi filtered by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIi|null findOneByIitboptnlsavail(string $IitbOptnLsAvail) Return the first ChildOptionsIi filtered by the IitbOptnLsAvail column
 * @method     ChildOptionsIi|null findOneByIitboptnlswhse(string $IitbOptnLsWhse) Return the first ChildOptionsIi filtered by the IitbOptnLsWhse column
 * @method     ChildOptionsIi|null findOneByIitboptndesc1or2(string $IitbOptnDesc1Or2) Return the first ChildOptionsIi filtered by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIi|null findOneByIitboptndelcerts(string $IitbOptnDelCerts) Return the first ChildOptionsIi filtered by the IitbOptnDelCerts column
 * @method     ChildOptionsIi|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsIi filtered by the DateUpdtd column
 * @method     ChildOptionsIi|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsIi filtered by the TimeUpdtd column
 * @method     ChildOptionsIi|null findOneByDummy(string $dummy) Return the first ChildOptionsIi filtered by the dummy column
 *
 * @method     ChildOptionsIi requirePk($key, ?ConnectionInterface $con = null) Return the ChildOptionsIi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsIi requireOne(?ConnectionInterface $con = null) Return the first ChildOptionsIi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildOptionsIi[]|Collection find(?ConnectionInterface $con = null) Return ChildOptionsIi objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildOptionsIi> find(?ConnectionInterface $con = null) Return ChildOptionsIi objects based on current ModelCriteria
 *
 * @method     ChildOptionsIi[]|Collection findByIitboptncode(string|array<string> $IitbOptnCode) Return ChildOptionsIi objects filtered by the IitbOptnCode column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptncode(string|array<string> $IitbOptnCode) Return ChildOptionsIi objects filtered by the IitbOptnCode column
 * @method     ChildOptionsIi[]|Collection findByIitboptnactavail(string|array<string> $IitbOptnActAvail) Return ChildOptionsIi objects filtered by the IitbOptnActAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnactavail(string|array<string> $IitbOptnActAvail) Return ChildOptionsIi objects filtered by the IitbOptnActAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnactwhse(string|array<string> $IitbOptnActWhse) Return ChildOptionsIi objects filtered by the IitbOptnActWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnactwhse(string|array<string> $IitbOptnActWhse) Return ChildOptionsIi objects filtered by the IitbOptnActWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnactdet(string|array<string> $IitbOptnActDet) Return ChildOptionsIi objects filtered by the IitbOptnActDet column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnactdet(string|array<string> $IitbOptnActDet) Return ChildOptionsIi objects filtered by the IitbOptnActDet column
 * @method     ChildOptionsIi[]|Collection findByIitboptnactdaysback(int|array<int> $IitbOptnActDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnActDaysBack column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnactdaysback(int|array<int> $IitbOptnActDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnActDaysBack column
 * @method     ChildOptionsIi[]|Collection findByIitboptnactstrtdate(string|array<string> $IitbOptnActStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnActStrtDate column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnactstrtdate(string|array<string> $IitbOptnActStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnActStrtDate column
 * @method     ChildOptionsIi[]|Collection findByIitboptncostavail(string|array<string> $IitbOptnCostAvail) Return ChildOptionsIi objects filtered by the IitbOptnCostAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptncostavail(string|array<string> $IitbOptnCostAvail) Return ChildOptionsIi objects filtered by the IitbOptnCostAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptncostwhse(string|array<string> $IitbOptnCostWhse) Return ChildOptionsIi objects filtered by the IitbOptnCostWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptncostwhse(string|array<string> $IitbOptnCostWhse) Return ChildOptionsIi objects filtered by the IitbOptnCostWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptncostdet(string|array<string> $IitbOptnCostDet) Return ChildOptionsIi objects filtered by the IitbOptnCostDet column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptncostdet(string|array<string> $IitbOptnCostDet) Return ChildOptionsIi objects filtered by the IitbOptnCostDet column
 * @method     ChildOptionsIi[]|Collection findByIitboptngenavail(string|array<string> $IitbOptnGenAvail) Return ChildOptionsIi objects filtered by the IitbOptnGenAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptngenavail(string|array<string> $IitbOptnGenAvail) Return ChildOptionsIi objects filtered by the IitbOptnGenAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnktavail(string|array<string> $IitbOptnKtAvail) Return ChildOptionsIi objects filtered by the IitbOptnKtAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnktavail(string|array<string> $IitbOptnKtAvail) Return ChildOptionsIi objects filtered by the IitbOptnKtAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnpricavail(string|array<string> $IitbOptnPricAvail) Return ChildOptionsIi objects filtered by the IitbOptnPricAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnpricavail(string|array<string> $IitbOptnPricAvail) Return ChildOptionsIi objects filtered by the IitbOptnPricAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnphavail(string|array<string> $IitbOptnPhAvail) Return ChildOptionsIi objects filtered by the IitbOptnPhAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnphavail(string|array<string> $IitbOptnPhAvail) Return ChildOptionsIi objects filtered by the IitbOptnPhAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnphwhse(string|array<string> $IitbOptnPhWhse) Return ChildOptionsIi objects filtered by the IitbOptnPhWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnphwhse(string|array<string> $IitbOptnPhWhse) Return ChildOptionsIi objects filtered by the IitbOptnPhWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnphdet(string|array<string> $IitbOptnPhDet) Return ChildOptionsIi objects filtered by the IitbOptnPhDet column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnphdet(string|array<string> $IitbOptnPhDet) Return ChildOptionsIi objects filtered by the IitbOptnPhDet column
 * @method     ChildOptionsIi[]|Collection findByIitboptnphdaysback(int|array<int> $IitbOptnPhDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnPhDaysBack column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnphdaysback(int|array<int> $IitbOptnPhDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnPhDaysBack column
 * @method     ChildOptionsIi[]|Collection findByIitboptnphstrtdate(string|array<string> $IitbOptnPhStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnPhStrtDate column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnphstrtdate(string|array<string> $IitbOptnPhStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnPhStrtDate column
 * @method     ChildOptionsIi[]|Collection findByIitboptnpoavail(string|array<string> $IitbOptnPoAvail) Return ChildOptionsIi objects filtered by the IitbOptnPoAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnpoavail(string|array<string> $IitbOptnPoAvail) Return ChildOptionsIi objects filtered by the IitbOptnPoAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnpowhse(string|array<string> $IitbOptnPoWhse) Return ChildOptionsIi objects filtered by the IitbOptnPoWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnpowhse(string|array<string> $IitbOptnPoWhse) Return ChildOptionsIi objects filtered by the IitbOptnPoWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnreqravail(string|array<string> $IitbOptnReqrAvail) Return ChildOptionsIi objects filtered by the IitbOptnReqrAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnreqravail(string|array<string> $IitbOptnReqrAvail) Return ChildOptionsIi objects filtered by the IitbOptnReqrAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnreqrwhse(string|array<string> $IitbOptnReqrWhse) Return ChildOptionsIi objects filtered by the IitbOptnReqrWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnreqrwhse(string|array<string> $IitbOptnReqrWhse) Return ChildOptionsIi objects filtered by the IitbOptnReqrWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnreqrview(string|array<string> $IitbOptnReqrView) Return ChildOptionsIi objects filtered by the IitbOptnReqrView column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnreqrview(string|array<string> $IitbOptnReqrView) Return ChildOptionsIi objects filtered by the IitbOptnReqrView column
 * @method     ChildOptionsIi[]|Collection findByIitboptnshavail(string|array<string> $IitbOptnShAvail) Return ChildOptionsIi objects filtered by the IitbOptnShAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnshavail(string|array<string> $IitbOptnShAvail) Return ChildOptionsIi objects filtered by the IitbOptnShAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnshwhse(string|array<string> $IitbOptnShWhse) Return ChildOptionsIi objects filtered by the IitbOptnShWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnshwhse(string|array<string> $IitbOptnShWhse) Return ChildOptionsIi objects filtered by the IitbOptnShWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnshdet(string|array<string> $IitbOptnShDet) Return ChildOptionsIi objects filtered by the IitbOptnShDet column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnshdet(string|array<string> $IitbOptnShDet) Return ChildOptionsIi objects filtered by the IitbOptnShDet column
 * @method     ChildOptionsIi[]|Collection findByIitboptnshdaysback(int|array<int> $IitbOptnShDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnShDaysBack column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnshdaysback(int|array<int> $IitbOptnShDaysBack) Return ChildOptionsIi objects filtered by the IitbOptnShDaysBack column
 * @method     ChildOptionsIi[]|Collection findByIitboptnshstrtdate(string|array<string> $IitbOptnShStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnShStrtDate column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnshstrtdate(string|array<string> $IitbOptnShStrtDate) Return ChildOptionsIi objects filtered by the IitbOptnShStrtDate column
 * @method     ChildOptionsIi[]|Collection findByIitboptnsoavail(string|array<string> $IitbOptnSoAvail) Return ChildOptionsIi objects filtered by the IitbOptnSoAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnsoavail(string|array<string> $IitbOptnSoAvail) Return ChildOptionsIi objects filtered by the IitbOptnSoAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnsowhse(string|array<string> $IitbOptnSoWhse) Return ChildOptionsIi objects filtered by the IitbOptnSoWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnsowhse(string|array<string> $IitbOptnSoWhse) Return ChildOptionsIi objects filtered by the IitbOptnSoWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnserlotavail(string|array<string> $IitbOptnSerlotAvail) Return ChildOptionsIi objects filtered by the IitbOptnSerlotAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnserlotavail(string|array<string> $IitbOptnSerlotAvail) Return ChildOptionsIi objects filtered by the IitbOptnSerlotAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnstckavail(string|array<string> $IitbOptnStckAvail) Return ChildOptionsIi objects filtered by the IitbOptnStckAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnstckavail(string|array<string> $IitbOptnStckAvail) Return ChildOptionsIi objects filtered by the IitbOptnStckAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnstckwhse(string|array<string> $IitbOptnStckWhse) Return ChildOptionsIi objects filtered by the IitbOptnStckWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnstckwhse(string|array<string> $IitbOptnStckWhse) Return ChildOptionsIi objects filtered by the IitbOptnStckWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnstckdet(string|array<string> $IitbOptnStckDet) Return ChildOptionsIi objects filtered by the IitbOptnStckDet column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnstckdet(string|array<string> $IitbOptnStckDet) Return ChildOptionsIi objects filtered by the IitbOptnStckDet column
 * @method     ChildOptionsIi[]|Collection findByIitboptnsubsupavail(string|array<string> $IitbOptnSubsupAvail) Return ChildOptionsIi objects filtered by the IitbOptnSubsupAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnsubsupavail(string|array<string> $IitbOptnSubsupAvail) Return ChildOptionsIi objects filtered by the IitbOptnSubsupAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnsubsupwhse(string|array<string> $IitbOptnSubsupWhse) Return ChildOptionsIi objects filtered by the IitbOptnSubsupWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnsubsupwhse(string|array<string> $IitbOptnSubsupWhse) Return ChildOptionsIi objects filtered by the IitbOptnSubsupWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptnlsavail(string|array<string> $IitbOptnLsAvail) Return ChildOptionsIi objects filtered by the IitbOptnLsAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnlsavail(string|array<string> $IitbOptnLsAvail) Return ChildOptionsIi objects filtered by the IitbOptnLsAvail column
 * @method     ChildOptionsIi[]|Collection findByIitboptnlswhse(string|array<string> $IitbOptnLsWhse) Return ChildOptionsIi objects filtered by the IitbOptnLsWhse column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptnlswhse(string|array<string> $IitbOptnLsWhse) Return ChildOptionsIi objects filtered by the IitbOptnLsWhse column
 * @method     ChildOptionsIi[]|Collection findByIitboptndesc1or2(string|array<string> $IitbOptnDesc1Or2) Return ChildOptionsIi objects filtered by the IitbOptnDesc1Or2 column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptndesc1or2(string|array<string> $IitbOptnDesc1Or2) Return ChildOptionsIi objects filtered by the IitbOptnDesc1Or2 column
 * @method     ChildOptionsIi[]|Collection findByIitboptndelcerts(string|array<string> $IitbOptnDelCerts) Return ChildOptionsIi objects filtered by the IitbOptnDelCerts column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByIitboptndelcerts(string|array<string> $IitbOptnDelCerts) Return ChildOptionsIi objects filtered by the IitbOptnDelCerts column
 * @method     ChildOptionsIi[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildOptionsIi objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildOptionsIi objects filtered by the DateUpdtd column
 * @method     ChildOptionsIi[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildOptionsIi objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildOptionsIi objects filtered by the TimeUpdtd column
 * @method     ChildOptionsIi[]|Collection findByDummy(string|array<string> $dummy) Return ChildOptionsIi objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildOptionsIi> findByDummy(string|array<string> $dummy) Return ChildOptionsIi objects filtered by the dummy column
 *
 * @method     ChildOptionsIi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildOptionsIi> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class OptionsIiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\OptionsIiQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\OptionsIi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOptionsIiQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOptionsIiQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncode('fooValue');   // WHERE IitbOptnCode = 'fooValue'
     * $query->filterByIitboptncode('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCode LIKE '%fooValue%'
     * $query->filterByIitboptncode(['foo', 'bar']); // WHERE IitbOptnCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptncode($iitboptncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCODE, $iitboptncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnActAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactavail('fooValue');   // WHERE IitbOptnActAvail = 'fooValue'
     * $query->filterByIitboptnactavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActAvail LIKE '%fooValue%'
     * $query->filterByIitboptnactavail(['foo', 'bar']); // WHERE IitbOptnActAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnactavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnactavail($iitboptnactavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTAVAIL, $iitboptnactavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnActWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactwhse('fooValue');   // WHERE IitbOptnActWhse = 'fooValue'
     * $query->filterByIitboptnactwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActWhse LIKE '%fooValue%'
     * $query->filterByIitboptnactwhse(['foo', 'bar']); // WHERE IitbOptnActWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnactwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnactwhse($iitboptnactwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTWHSE, $iitboptnactwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnActDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactdet('fooValue');   // WHERE IitbOptnActDet = 'fooValue'
     * $query->filterByIitboptnactdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActDet LIKE '%fooValue%'
     * $query->filterByIitboptnactdet(['foo', 'bar']); // WHERE IitbOptnActDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnactdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnactdet($iitboptnactdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDET, $iitboptnactdet, $comparison);

        return $this;
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
     * @param mixed $iitboptnactdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnactdaysback($iitboptnactdaysback = null, ?string $comparison = null)
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

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTDAYSBACK, $iitboptnactdaysback, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnActStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnactstrtdate('fooValue');   // WHERE IitbOptnActStrtDate = 'fooValue'
     * $query->filterByIitboptnactstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnActStrtDate LIKE '%fooValue%'
     * $query->filterByIitboptnactstrtdate(['foo', 'bar']); // WHERE IitbOptnActStrtDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnactstrtdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnactstrtdate($iitboptnactstrtdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnactstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNACTSTRTDATE, $iitboptnactstrtdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnCostAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostavail('fooValue');   // WHERE IitbOptnCostAvail = 'fooValue'
     * $query->filterByIitboptncostavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostAvail LIKE '%fooValue%'
     * $query->filterByIitboptncostavail(['foo', 'bar']); // WHERE IitbOptnCostAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptncostavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptncostavail($iitboptncostavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTAVAIL, $iitboptncostavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnCostWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostwhse('fooValue');   // WHERE IitbOptnCostWhse = 'fooValue'
     * $query->filterByIitboptncostwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostWhse LIKE '%fooValue%'
     * $query->filterByIitboptncostwhse(['foo', 'bar']); // WHERE IitbOptnCostWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptncostwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptncostwhse($iitboptncostwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTWHSE, $iitboptncostwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnCostDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptncostdet('fooValue');   // WHERE IitbOptnCostDet = 'fooValue'
     * $query->filterByIitboptncostdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnCostDet LIKE '%fooValue%'
     * $query->filterByIitboptncostdet(['foo', 'bar']); // WHERE IitbOptnCostDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptncostdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptncostdet($iitboptncostdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptncostdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNCOSTDET, $iitboptncostdet, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnGenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptngenavail('fooValue');   // WHERE IitbOptnGenAvail = 'fooValue'
     * $query->filterByIitboptngenavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnGenAvail LIKE '%fooValue%'
     * $query->filterByIitboptngenavail(['foo', 'bar']); // WHERE IitbOptnGenAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptngenavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptngenavail($iitboptngenavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptngenavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNGENAVAIL, $iitboptngenavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnKtAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnktavail('fooValue');   // WHERE IitbOptnKtAvail = 'fooValue'
     * $query->filterByIitboptnktavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnKtAvail LIKE '%fooValue%'
     * $query->filterByIitboptnktavail(['foo', 'bar']); // WHERE IitbOptnKtAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnktavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnktavail($iitboptnktavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnktavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNKTAVAIL, $iitboptnktavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPricAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpricavail('fooValue');   // WHERE IitbOptnPricAvail = 'fooValue'
     * $query->filterByIitboptnpricavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPricAvail LIKE '%fooValue%'
     * $query->filterByIitboptnpricavail(['foo', 'bar']); // WHERE IitbOptnPricAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnpricavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnpricavail($iitboptnpricavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpricavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPRICAVAIL, $iitboptnpricavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPhAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphavail('fooValue');   // WHERE IitbOptnPhAvail = 'fooValue'
     * $query->filterByIitboptnphavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhAvail LIKE '%fooValue%'
     * $query->filterByIitboptnphavail(['foo', 'bar']); // WHERE IitbOptnPhAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnphavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnphavail($iitboptnphavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHAVAIL, $iitboptnphavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPhWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphwhse('fooValue');   // WHERE IitbOptnPhWhse = 'fooValue'
     * $query->filterByIitboptnphwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhWhse LIKE '%fooValue%'
     * $query->filterByIitboptnphwhse(['foo', 'bar']); // WHERE IitbOptnPhWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnphwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnphwhse($iitboptnphwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHWHSE, $iitboptnphwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPhDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphdet('fooValue');   // WHERE IitbOptnPhDet = 'fooValue'
     * $query->filterByIitboptnphdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhDet LIKE '%fooValue%'
     * $query->filterByIitboptnphdet(['foo', 'bar']); // WHERE IitbOptnPhDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnphdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnphdet($iitboptnphdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDET, $iitboptnphdet, $comparison);

        return $this;
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
     * @param mixed $iitboptnphdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnphdaysback($iitboptnphdaysback = null, ?string $comparison = null)
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

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHDAYSBACK, $iitboptnphdaysback, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPhStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnphstrtdate('fooValue');   // WHERE IitbOptnPhStrtDate = 'fooValue'
     * $query->filterByIitboptnphstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPhStrtDate LIKE '%fooValue%'
     * $query->filterByIitboptnphstrtdate(['foo', 'bar']); // WHERE IitbOptnPhStrtDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnphstrtdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnphstrtdate($iitboptnphstrtdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnphstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPHSTRTDATE, $iitboptnphstrtdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpoavail('fooValue');   // WHERE IitbOptnPoAvail = 'fooValue'
     * $query->filterByIitboptnpoavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPoAvail LIKE '%fooValue%'
     * $query->filterByIitboptnpoavail(['foo', 'bar']); // WHERE IitbOptnPoAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnpoavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnpoavail($iitboptnpoavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpoavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPOAVAIL, $iitboptnpoavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnPoWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnpowhse('fooValue');   // WHERE IitbOptnPoWhse = 'fooValue'
     * $query->filterByIitboptnpowhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnPoWhse LIKE '%fooValue%'
     * $query->filterByIitboptnpowhse(['foo', 'bar']); // WHERE IitbOptnPoWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnpowhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnpowhse($iitboptnpowhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnpowhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNPOWHSE, $iitboptnpowhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnReqrAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqravail('fooValue');   // WHERE IitbOptnReqrAvail = 'fooValue'
     * $query->filterByIitboptnreqravail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrAvail LIKE '%fooValue%'
     * $query->filterByIitboptnreqravail(['foo', 'bar']); // WHERE IitbOptnReqrAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnreqravail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnreqravail($iitboptnreqravail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqravail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRAVAIL, $iitboptnreqravail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnReqrWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqrwhse('fooValue');   // WHERE IitbOptnReqrWhse = 'fooValue'
     * $query->filterByIitboptnreqrwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrWhse LIKE '%fooValue%'
     * $query->filterByIitboptnreqrwhse(['foo', 'bar']); // WHERE IitbOptnReqrWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnreqrwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnreqrwhse($iitboptnreqrwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRWHSE, $iitboptnreqrwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnReqrView column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnreqrview('fooValue');   // WHERE IitbOptnReqrView = 'fooValue'
     * $query->filterByIitboptnreqrview('%fooValue%', Criteria::LIKE); // WHERE IitbOptnReqrView LIKE '%fooValue%'
     * $query->filterByIitboptnreqrview(['foo', 'bar']); // WHERE IitbOptnReqrView IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnreqrview The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnreqrview($iitboptnreqrview = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnreqrview)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNREQRVIEW, $iitboptnreqrview, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnShAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshavail('fooValue');   // WHERE IitbOptnShAvail = 'fooValue'
     * $query->filterByIitboptnshavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShAvail LIKE '%fooValue%'
     * $query->filterByIitboptnshavail(['foo', 'bar']); // WHERE IitbOptnShAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnshavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnshavail($iitboptnshavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHAVAIL, $iitboptnshavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnShWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshwhse('fooValue');   // WHERE IitbOptnShWhse = 'fooValue'
     * $query->filterByIitboptnshwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShWhse LIKE '%fooValue%'
     * $query->filterByIitboptnshwhse(['foo', 'bar']); // WHERE IitbOptnShWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnshwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnshwhse($iitboptnshwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHWHSE, $iitboptnshwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnShDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshdet('fooValue');   // WHERE IitbOptnShDet = 'fooValue'
     * $query->filterByIitboptnshdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShDet LIKE '%fooValue%'
     * $query->filterByIitboptnshdet(['foo', 'bar']); // WHERE IitbOptnShDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnshdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnshdet($iitboptnshdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDET, $iitboptnshdet, $comparison);

        return $this;
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
     * @param mixed $iitboptnshdaysback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnshdaysback($iitboptnshdaysback = null, ?string $comparison = null)
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

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHDAYSBACK, $iitboptnshdaysback, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnShStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnshstrtdate('fooValue');   // WHERE IitbOptnShStrtDate = 'fooValue'
     * $query->filterByIitboptnshstrtdate('%fooValue%', Criteria::LIKE); // WHERE IitbOptnShStrtDate LIKE '%fooValue%'
     * $query->filterByIitboptnshstrtdate(['foo', 'bar']); // WHERE IitbOptnShStrtDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnshstrtdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnshstrtdate($iitboptnshstrtdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnshstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSHSTRTDATE, $iitboptnshstrtdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnSoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsoavail('fooValue');   // WHERE IitbOptnSoAvail = 'fooValue'
     * $query->filterByIitboptnsoavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSoAvail LIKE '%fooValue%'
     * $query->filterByIitboptnsoavail(['foo', 'bar']); // WHERE IitbOptnSoAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnsoavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnsoavail($iitboptnsoavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsoavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSOAVAIL, $iitboptnsoavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnSoWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsowhse('fooValue');   // WHERE IitbOptnSoWhse = 'fooValue'
     * $query->filterByIitboptnsowhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSoWhse LIKE '%fooValue%'
     * $query->filterByIitboptnsowhse(['foo', 'bar']); // WHERE IitbOptnSoWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnsowhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnsowhse($iitboptnsowhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsowhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSOWHSE, $iitboptnsowhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnSerlotAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnserlotavail('fooValue');   // WHERE IitbOptnSerlotAvail = 'fooValue'
     * $query->filterByIitboptnserlotavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSerlotAvail LIKE '%fooValue%'
     * $query->filterByIitboptnserlotavail(['foo', 'bar']); // WHERE IitbOptnSerlotAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnserlotavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnserlotavail($iitboptnserlotavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnserlotavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSERLOTAVAIL, $iitboptnserlotavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnStckAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckavail('fooValue');   // WHERE IitbOptnStckAvail = 'fooValue'
     * $query->filterByIitboptnstckavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckAvail LIKE '%fooValue%'
     * $query->filterByIitboptnstckavail(['foo', 'bar']); // WHERE IitbOptnStckAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnstckavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnstckavail($iitboptnstckavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKAVAIL, $iitboptnstckavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnStckWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckwhse('fooValue');   // WHERE IitbOptnStckWhse = 'fooValue'
     * $query->filterByIitboptnstckwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckWhse LIKE '%fooValue%'
     * $query->filterByIitboptnstckwhse(['foo', 'bar']); // WHERE IitbOptnStckWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnstckwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnstckwhse($iitboptnstckwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKWHSE, $iitboptnstckwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnStckDet column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnstckdet('fooValue');   // WHERE IitbOptnStckDet = 'fooValue'
     * $query->filterByIitboptnstckdet('%fooValue%', Criteria::LIKE); // WHERE IitbOptnStckDet LIKE '%fooValue%'
     * $query->filterByIitboptnstckdet(['foo', 'bar']); // WHERE IitbOptnStckDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnstckdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnstckdet($iitboptnstckdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnstckdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSTCKDET, $iitboptnstckdet, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnSubsupAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsubsupavail('fooValue');   // WHERE IitbOptnSubsupAvail = 'fooValue'
     * $query->filterByIitboptnsubsupavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSubsupAvail LIKE '%fooValue%'
     * $query->filterByIitboptnsubsupavail(['foo', 'bar']); // WHERE IitbOptnSubsupAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnsubsupavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnsubsupavail($iitboptnsubsupavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSUBSUPAVAIL, $iitboptnsubsupavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnSubsupWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnsubsupwhse('fooValue');   // WHERE IitbOptnSubsupWhse = 'fooValue'
     * $query->filterByIitboptnsubsupwhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnSubsupWhse LIKE '%fooValue%'
     * $query->filterByIitboptnsubsupwhse(['foo', 'bar']); // WHERE IitbOptnSubsupWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnsubsupwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnsubsupwhse($iitboptnsubsupwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnsubsupwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNSUBSUPWHSE, $iitboptnsubsupwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnLsAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnlsavail('fooValue');   // WHERE IitbOptnLsAvail = 'fooValue'
     * $query->filterByIitboptnlsavail('%fooValue%', Criteria::LIKE); // WHERE IitbOptnLsAvail LIKE '%fooValue%'
     * $query->filterByIitboptnlsavail(['foo', 'bar']); // WHERE IitbOptnLsAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnlsavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnlsavail($iitboptnlsavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlsavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNLSAVAIL, $iitboptnlsavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnLsWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptnlswhse('fooValue');   // WHERE IitbOptnLsWhse = 'fooValue'
     * $query->filterByIitboptnlswhse('%fooValue%', Criteria::LIKE); // WHERE IitbOptnLsWhse LIKE '%fooValue%'
     * $query->filterByIitboptnlswhse(['foo', 'bar']); // WHERE IitbOptnLsWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptnlswhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptnlswhse($iitboptnlswhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptnlswhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNLSWHSE, $iitboptnlswhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnDesc1Or2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptndesc1or2('fooValue');   // WHERE IitbOptnDesc1Or2 = 'fooValue'
     * $query->filterByIitboptndesc1or2('%fooValue%', Criteria::LIKE); // WHERE IitbOptnDesc1Or2 LIKE '%fooValue%'
     * $query->filterByIitboptndesc1or2(['foo', 'bar']); // WHERE IitbOptnDesc1Or2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptndesc1or2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptndesc1or2($iitboptndesc1or2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndesc1or2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNDESC1OR2, $iitboptndesc1or2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IitbOptnDelCerts column
     *
     * Example usage:
     * <code>
     * $query->filterByIitboptndelcerts('fooValue');   // WHERE IitbOptnDelCerts = 'fooValue'
     * $query->filterByIitboptndelcerts('%fooValue%', Criteria::LIKE); // WHERE IitbOptnDelCerts LIKE '%fooValue%'
     * $query->filterByIitboptndelcerts(['foo', 'bar']); // WHERE IitbOptnDelCerts IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $iitboptndelcerts The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIitboptndelcerts($iitboptndelcerts = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iitboptndelcerts)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsIiTableMap::COL_IITBOPTNDELCERTS, $iitboptndelcerts, $comparison);

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

        $this->addUsingAlias(OptionsIiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(OptionsIiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(OptionsIiTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildOptionsIi $optionsIi Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
