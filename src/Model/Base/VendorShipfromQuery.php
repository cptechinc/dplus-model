<?php

namespace Base;

use \VendorShipfrom as ChildVendorShipfrom;
use \VendorShipfromQuery as ChildVendorShipfromQuery;
use \Exception;
use \PDO;
use Map\VendorShipfromTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_ship_from' table.
 *
 *
 *
 * @method     ChildVendorShipfromQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildVendorShipfromQuery orderByApfmshipid($order = Criteria::ASC) Order by the ApfmShipId column
 * @method     ChildVendorShipfromQuery orderByApfmname($order = Criteria::ASC) Order by the ApfmName column
 * @method     ChildVendorShipfromQuery orderByApfmadr1($order = Criteria::ASC) Order by the ApfmAdr1 column
 * @method     ChildVendorShipfromQuery orderByApfmadr2($order = Criteria::ASC) Order by the ApfmAdr2 column
 * @method     ChildVendorShipfromQuery orderByApfmadr3($order = Criteria::ASC) Order by the ApfmAdr3 column
 * @method     ChildVendorShipfromQuery orderByApfmctry($order = Criteria::ASC) Order by the ApfmCtry column
 * @method     ChildVendorShipfromQuery orderByApfmcity($order = Criteria::ASC) Order by the ApfmCity column
 * @method     ChildVendorShipfromQuery orderByApfmstat($order = Criteria::ASC) Order by the ApfmStat column
 * @method     ChildVendorShipfromQuery orderByApfmzipcode($order = Criteria::ASC) Order by the ApfmZipCode column
 * @method     ChildVendorShipfromQuery orderByApfmcont1($order = Criteria::ASC) Order by the ApfmCont1 column
 * @method     ChildVendorShipfromQuery orderByApfmcont2($order = Criteria::ASC) Order by the ApfmCont2 column
 * @method     ChildVendorShipfromQuery orderByArtbsviacode($order = Criteria::ASC) Order by the ArtbSviaCode column
 * @method     ChildVendorShipfromQuery orderByApfmglacct($order = Criteria::ASC) Order by the ApfmGlAcct column
 * @method     ChildVendorShipfromQuery orderByApfmpurmtd($order = Criteria::ASC) Order by the ApfmPurMtd column
 * @method     ChildVendorShipfromQuery orderByApfmpomtd($order = Criteria::ASC) Order by the ApfmPoMtd column
 * @method     ChildVendorShipfromQuery orderByApfmdateopen($order = Criteria::ASC) Order by the ApfmDateOpen column
 * @method     ChildVendorShipfromQuery orderByApfmlastpurdate($order = Criteria::ASC) Order by the ApfmLastPurDate column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo01($order = Criteria::ASC) Order by the ApfmPur24mo01 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo01($order = Criteria::ASC) Order by the ApfmPo24mo01 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo02($order = Criteria::ASC) Order by the ApfmPur24mo02 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo02($order = Criteria::ASC) Order by the ApfmPo24mo02 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo03($order = Criteria::ASC) Order by the ApfmPur24mo03 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo03($order = Criteria::ASC) Order by the ApfmPo24mo03 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo04($order = Criteria::ASC) Order by the ApfmPur24mo04 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo04($order = Criteria::ASC) Order by the ApfmPo24mo04 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo05($order = Criteria::ASC) Order by the ApfmPur24mo05 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo05($order = Criteria::ASC) Order by the ApfmPo24mo05 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo06($order = Criteria::ASC) Order by the ApfmPur24mo06 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo06($order = Criteria::ASC) Order by the ApfmPo24mo06 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo07($order = Criteria::ASC) Order by the ApfmPur24mo07 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo07($order = Criteria::ASC) Order by the ApfmPo24mo07 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo08($order = Criteria::ASC) Order by the ApfmPur24mo08 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo08($order = Criteria::ASC) Order by the ApfmPo24mo08 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo09($order = Criteria::ASC) Order by the ApfmPur24mo09 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo09($order = Criteria::ASC) Order by the ApfmPo24mo09 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo10($order = Criteria::ASC) Order by the ApfmPur24mo10 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo10($order = Criteria::ASC) Order by the ApfmPo24mo10 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo11($order = Criteria::ASC) Order by the ApfmPur24mo11 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo11($order = Criteria::ASC) Order by the ApfmPo24mo11 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo12($order = Criteria::ASC) Order by the ApfmPur24mo12 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo12($order = Criteria::ASC) Order by the ApfmPo24mo12 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo13($order = Criteria::ASC) Order by the ApfmPur24mo13 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo13($order = Criteria::ASC) Order by the ApfmPo24mo13 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo14($order = Criteria::ASC) Order by the ApfmPur24mo14 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo14($order = Criteria::ASC) Order by the ApfmPo24mo14 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo15($order = Criteria::ASC) Order by the ApfmPur24mo15 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo15($order = Criteria::ASC) Order by the ApfmPo24mo15 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo16($order = Criteria::ASC) Order by the ApfmPur24mo16 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo16($order = Criteria::ASC) Order by the ApfmPo24mo16 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo17($order = Criteria::ASC) Order by the ApfmPur24mo17 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo17($order = Criteria::ASC) Order by the ApfmPo24mo17 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo18($order = Criteria::ASC) Order by the ApfmPur24mo18 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo18($order = Criteria::ASC) Order by the ApfmPo24mo18 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo19($order = Criteria::ASC) Order by the ApfmPur24mo19 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo19($order = Criteria::ASC) Order by the ApfmPo24mo19 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo20($order = Criteria::ASC) Order by the ApfmPur24mo20 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo20($order = Criteria::ASC) Order by the ApfmPo24mo20 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo21($order = Criteria::ASC) Order by the ApfmPur24mo21 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo21($order = Criteria::ASC) Order by the ApfmPo24mo21 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo22($order = Criteria::ASC) Order by the ApfmPur24mo22 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo22($order = Criteria::ASC) Order by the ApfmPo24mo22 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo23($order = Criteria::ASC) Order by the ApfmPur24mo23 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo23($order = Criteria::ASC) Order by the ApfmPo24mo23 column
 * @method     ChildVendorShipfromQuery orderByApfmpur24mo24($order = Criteria::ASC) Order by the ApfmPur24mo24 column
 * @method     ChildVendorShipfromQuery orderByApfmpo24mo24($order = Criteria::ASC) Order by the ApfmPo24mo24 column
 * @method     ChildVendorShipfromQuery orderByApfmouracctnbr($order = Criteria::ASC) Order by the ApfmOurAcctNbr column
 * @method     ChildVendorShipfromQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildVendorShipfromQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildVendorShipfromQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildVendorShipfromQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildVendorShipfromQuery groupByApfmshipid() Group by the ApfmShipId column
 * @method     ChildVendorShipfromQuery groupByApfmname() Group by the ApfmName column
 * @method     ChildVendorShipfromQuery groupByApfmadr1() Group by the ApfmAdr1 column
 * @method     ChildVendorShipfromQuery groupByApfmadr2() Group by the ApfmAdr2 column
 * @method     ChildVendorShipfromQuery groupByApfmadr3() Group by the ApfmAdr3 column
 * @method     ChildVendorShipfromQuery groupByApfmctry() Group by the ApfmCtry column
 * @method     ChildVendorShipfromQuery groupByApfmcity() Group by the ApfmCity column
 * @method     ChildVendorShipfromQuery groupByApfmstat() Group by the ApfmStat column
 * @method     ChildVendorShipfromQuery groupByApfmzipcode() Group by the ApfmZipCode column
 * @method     ChildVendorShipfromQuery groupByApfmcont1() Group by the ApfmCont1 column
 * @method     ChildVendorShipfromQuery groupByApfmcont2() Group by the ApfmCont2 column
 * @method     ChildVendorShipfromQuery groupByArtbsviacode() Group by the ArtbSviaCode column
 * @method     ChildVendorShipfromQuery groupByApfmglacct() Group by the ApfmGlAcct column
 * @method     ChildVendorShipfromQuery groupByApfmpurmtd() Group by the ApfmPurMtd column
 * @method     ChildVendorShipfromQuery groupByApfmpomtd() Group by the ApfmPoMtd column
 * @method     ChildVendorShipfromQuery groupByApfmdateopen() Group by the ApfmDateOpen column
 * @method     ChildVendorShipfromQuery groupByApfmlastpurdate() Group by the ApfmLastPurDate column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo01() Group by the ApfmPur24mo01 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo01() Group by the ApfmPo24mo01 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo02() Group by the ApfmPur24mo02 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo02() Group by the ApfmPo24mo02 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo03() Group by the ApfmPur24mo03 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo03() Group by the ApfmPo24mo03 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo04() Group by the ApfmPur24mo04 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo04() Group by the ApfmPo24mo04 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo05() Group by the ApfmPur24mo05 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo05() Group by the ApfmPo24mo05 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo06() Group by the ApfmPur24mo06 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo06() Group by the ApfmPo24mo06 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo07() Group by the ApfmPur24mo07 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo07() Group by the ApfmPo24mo07 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo08() Group by the ApfmPur24mo08 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo08() Group by the ApfmPo24mo08 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo09() Group by the ApfmPur24mo09 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo09() Group by the ApfmPo24mo09 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo10() Group by the ApfmPur24mo10 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo10() Group by the ApfmPo24mo10 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo11() Group by the ApfmPur24mo11 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo11() Group by the ApfmPo24mo11 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo12() Group by the ApfmPur24mo12 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo12() Group by the ApfmPo24mo12 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo13() Group by the ApfmPur24mo13 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo13() Group by the ApfmPo24mo13 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo14() Group by the ApfmPur24mo14 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo14() Group by the ApfmPo24mo14 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo15() Group by the ApfmPur24mo15 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo15() Group by the ApfmPo24mo15 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo16() Group by the ApfmPur24mo16 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo16() Group by the ApfmPo24mo16 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo17() Group by the ApfmPur24mo17 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo17() Group by the ApfmPo24mo17 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo18() Group by the ApfmPur24mo18 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo18() Group by the ApfmPo24mo18 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo19() Group by the ApfmPur24mo19 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo19() Group by the ApfmPo24mo19 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo20() Group by the ApfmPur24mo20 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo20() Group by the ApfmPo24mo20 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo21() Group by the ApfmPur24mo21 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo21() Group by the ApfmPo24mo21 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo22() Group by the ApfmPur24mo22 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo22() Group by the ApfmPo24mo22 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo23() Group by the ApfmPur24mo23 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo23() Group by the ApfmPo24mo23 column
 * @method     ChildVendorShipfromQuery groupByApfmpur24mo24() Group by the ApfmPur24mo24 column
 * @method     ChildVendorShipfromQuery groupByApfmpo24mo24() Group by the ApfmPo24mo24 column
 * @method     ChildVendorShipfromQuery groupByApfmouracctnbr() Group by the ApfmOurAcctNbr column
 * @method     ChildVendorShipfromQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildVendorShipfromQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildVendorShipfromQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildVendorShipfromQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildVendorShipfromQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildVendorShipfromQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildVendorShipfromQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildVendorShipfromQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildVendorShipfromQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildVendorShipfromQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildVendorShipfromQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildVendorShipfromQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildVendorShipfromQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildVendorShipfromQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildVendorShipfromQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildVendorShipfromQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildVendorShipfrom findOne(ConnectionInterface $con = null) Return the first ChildVendorShipfrom matching the query
 * @method     ChildVendorShipfrom findOneOrCreate(ConnectionInterface $con = null) Return the first ChildVendorShipfrom matching the query, or a new ChildVendorShipfrom object populated from the query conditions when no match is found
 *
 * @method     ChildVendorShipfrom findOneByApvevendid(string $ApveVendId) Return the first ChildVendorShipfrom filtered by the ApveVendId column
 * @method     ChildVendorShipfrom findOneByApfmshipid(string $ApfmShipId) Return the first ChildVendorShipfrom filtered by the ApfmShipId column
 * @method     ChildVendorShipfrom findOneByApfmname(string $ApfmName) Return the first ChildVendorShipfrom filtered by the ApfmName column
 * @method     ChildVendorShipfrom findOneByApfmadr1(string $ApfmAdr1) Return the first ChildVendorShipfrom filtered by the ApfmAdr1 column
 * @method     ChildVendorShipfrom findOneByApfmadr2(string $ApfmAdr2) Return the first ChildVendorShipfrom filtered by the ApfmAdr2 column
 * @method     ChildVendorShipfrom findOneByApfmadr3(string $ApfmAdr3) Return the first ChildVendorShipfrom filtered by the ApfmAdr3 column
 * @method     ChildVendorShipfrom findOneByApfmctry(string $ApfmCtry) Return the first ChildVendorShipfrom filtered by the ApfmCtry column
 * @method     ChildVendorShipfrom findOneByApfmcity(string $ApfmCity) Return the first ChildVendorShipfrom filtered by the ApfmCity column
 * @method     ChildVendorShipfrom findOneByApfmstat(string $ApfmStat) Return the first ChildVendorShipfrom filtered by the ApfmStat column
 * @method     ChildVendorShipfrom findOneByApfmzipcode(string $ApfmZipCode) Return the first ChildVendorShipfrom filtered by the ApfmZipCode column
 * @method     ChildVendorShipfrom findOneByApfmcont1(string $ApfmCont1) Return the first ChildVendorShipfrom filtered by the ApfmCont1 column
 * @method     ChildVendorShipfrom findOneByApfmcont2(string $ApfmCont2) Return the first ChildVendorShipfrom filtered by the ApfmCont2 column
 * @method     ChildVendorShipfrom findOneByArtbsviacode(string $ArtbSviaCode) Return the first ChildVendorShipfrom filtered by the ArtbSviaCode column
 * @method     ChildVendorShipfrom findOneByApfmglacct(string $ApfmGlAcct) Return the first ChildVendorShipfrom filtered by the ApfmGlAcct column
 * @method     ChildVendorShipfrom findOneByApfmpurmtd(string $ApfmPurMtd) Return the first ChildVendorShipfrom filtered by the ApfmPurMtd column
 * @method     ChildVendorShipfrom findOneByApfmpomtd(int $ApfmPoMtd) Return the first ChildVendorShipfrom filtered by the ApfmPoMtd column
 * @method     ChildVendorShipfrom findOneByApfmdateopen(string $ApfmDateOpen) Return the first ChildVendorShipfrom filtered by the ApfmDateOpen column
 * @method     ChildVendorShipfrom findOneByApfmlastpurdate(string $ApfmLastPurDate) Return the first ChildVendorShipfrom filtered by the ApfmLastPurDate column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo01(string $ApfmPur24mo01) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo01 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo01(int $ApfmPo24mo01) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo01 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo02(string $ApfmPur24mo02) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo02 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo02(int $ApfmPo24mo02) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo02 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo03(string $ApfmPur24mo03) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo03 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo03(int $ApfmPo24mo03) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo03 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo04(string $ApfmPur24mo04) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo04 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo04(int $ApfmPo24mo04) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo04 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo05(string $ApfmPur24mo05) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo05 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo05(int $ApfmPo24mo05) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo05 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo06(string $ApfmPur24mo06) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo06 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo06(int $ApfmPo24mo06) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo06 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo07(string $ApfmPur24mo07) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo07 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo07(int $ApfmPo24mo07) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo07 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo08(string $ApfmPur24mo08) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo08 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo08(int $ApfmPo24mo08) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo08 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo09(string $ApfmPur24mo09) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo09 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo09(int $ApfmPo24mo09) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo09 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo10(string $ApfmPur24mo10) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo10 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo10(int $ApfmPo24mo10) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo10 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo11(string $ApfmPur24mo11) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo11 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo11(int $ApfmPo24mo11) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo11 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo12(string $ApfmPur24mo12) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo12 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo12(int $ApfmPo24mo12) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo12 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo13(string $ApfmPur24mo13) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo13 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo13(int $ApfmPo24mo13) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo13 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo14(string $ApfmPur24mo14) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo14 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo14(int $ApfmPo24mo14) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo14 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo15(string $ApfmPur24mo15) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo15 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo15(int $ApfmPo24mo15) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo15 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo16(string $ApfmPur24mo16) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo16 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo16(int $ApfmPo24mo16) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo16 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo17(string $ApfmPur24mo17) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo17 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo17(int $ApfmPo24mo17) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo17 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo18(string $ApfmPur24mo18) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo18 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo18(int $ApfmPo24mo18) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo18 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo19(string $ApfmPur24mo19) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo19 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo19(int $ApfmPo24mo19) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo19 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo20(string $ApfmPur24mo20) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo20 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo20(int $ApfmPo24mo20) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo20 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo21(string $ApfmPur24mo21) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo21 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo21(int $ApfmPo24mo21) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo21 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo22(string $ApfmPur24mo22) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo22 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo22(int $ApfmPo24mo22) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo22 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo23(string $ApfmPur24mo23) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo23 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo23(int $ApfmPo24mo23) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo23 column
 * @method     ChildVendorShipfrom findOneByApfmpur24mo24(string $ApfmPur24mo24) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo24 column
 * @method     ChildVendorShipfrom findOneByApfmpo24mo24(int $ApfmPo24mo24) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo24 column
 * @method     ChildVendorShipfrom findOneByApfmouracctnbr(string $ApfmOurAcctNbr) Return the first ChildVendorShipfrom filtered by the ApfmOurAcctNbr column
 * @method     ChildVendorShipfrom findOneByDateupdtd(string $DateUpdtd) Return the first ChildVendorShipfrom filtered by the DateUpdtd column
 * @method     ChildVendorShipfrom findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildVendorShipfrom filtered by the TimeUpdtd column
 * @method     ChildVendorShipfrom findOneByDummy(string $dummy) Return the first ChildVendorShipfrom filtered by the dummy column *

 * @method     ChildVendorShipfrom requirePk($key, ConnectionInterface $con = null) Return the ChildVendorShipfrom by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOne(ConnectionInterface $con = null) Return the first ChildVendorShipfrom matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildVendorShipfrom requireOneByApvevendid(string $ApveVendId) Return the first ChildVendorShipfrom filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmshipid(string $ApfmShipId) Return the first ChildVendorShipfrom filtered by the ApfmShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmname(string $ApfmName) Return the first ChildVendorShipfrom filtered by the ApfmName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmadr1(string $ApfmAdr1) Return the first ChildVendorShipfrom filtered by the ApfmAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmadr2(string $ApfmAdr2) Return the first ChildVendorShipfrom filtered by the ApfmAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmadr3(string $ApfmAdr3) Return the first ChildVendorShipfrom filtered by the ApfmAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmctry(string $ApfmCtry) Return the first ChildVendorShipfrom filtered by the ApfmCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmcity(string $ApfmCity) Return the first ChildVendorShipfrom filtered by the ApfmCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmstat(string $ApfmStat) Return the first ChildVendorShipfrom filtered by the ApfmStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmzipcode(string $ApfmZipCode) Return the first ChildVendorShipfrom filtered by the ApfmZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmcont1(string $ApfmCont1) Return the first ChildVendorShipfrom filtered by the ApfmCont1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmcont2(string $ApfmCont2) Return the first ChildVendorShipfrom filtered by the ApfmCont2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByArtbsviacode(string $ArtbSviaCode) Return the first ChildVendorShipfrom filtered by the ArtbSviaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmglacct(string $ApfmGlAcct) Return the first ChildVendorShipfrom filtered by the ApfmGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpurmtd(string $ApfmPurMtd) Return the first ChildVendorShipfrom filtered by the ApfmPurMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpomtd(int $ApfmPoMtd) Return the first ChildVendorShipfrom filtered by the ApfmPoMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmdateopen(string $ApfmDateOpen) Return the first ChildVendorShipfrom filtered by the ApfmDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmlastpurdate(string $ApfmLastPurDate) Return the first ChildVendorShipfrom filtered by the ApfmLastPurDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo01(string $ApfmPur24mo01) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo01(int $ApfmPo24mo01) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo02(string $ApfmPur24mo02) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo02(int $ApfmPo24mo02) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo03(string $ApfmPur24mo03) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo03(int $ApfmPo24mo03) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo04(string $ApfmPur24mo04) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo04(int $ApfmPo24mo04) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo05(string $ApfmPur24mo05) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo05(int $ApfmPo24mo05) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo06(string $ApfmPur24mo06) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo06(int $ApfmPo24mo06) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo07(string $ApfmPur24mo07) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo07(int $ApfmPo24mo07) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo08(string $ApfmPur24mo08) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo08(int $ApfmPo24mo08) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo09(string $ApfmPur24mo09) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo09(int $ApfmPo24mo09) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo10(string $ApfmPur24mo10) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo10(int $ApfmPo24mo10) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo11(string $ApfmPur24mo11) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo11(int $ApfmPo24mo11) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo12(string $ApfmPur24mo12) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo12(int $ApfmPo24mo12) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo13(string $ApfmPur24mo13) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo13(int $ApfmPo24mo13) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo14(string $ApfmPur24mo14) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo14(int $ApfmPo24mo14) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo15(string $ApfmPur24mo15) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo15(int $ApfmPo24mo15) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo16(string $ApfmPur24mo16) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo16(int $ApfmPo24mo16) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo17(string $ApfmPur24mo17) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo17(int $ApfmPo24mo17) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo18(string $ApfmPur24mo18) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo18(int $ApfmPo24mo18) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo19(string $ApfmPur24mo19) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo19(int $ApfmPo24mo19) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo20(string $ApfmPur24mo20) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo20(int $ApfmPo24mo20) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo21(string $ApfmPur24mo21) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo21(int $ApfmPo24mo21) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo22(string $ApfmPur24mo22) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo22(int $ApfmPo24mo22) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo23(string $ApfmPur24mo23) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo23(int $ApfmPo24mo23) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpur24mo24(string $ApfmPur24mo24) Return the first ChildVendorShipfrom filtered by the ApfmPur24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmpo24mo24(int $ApfmPo24mo24) Return the first ChildVendorShipfrom filtered by the ApfmPo24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByApfmouracctnbr(string $ApfmOurAcctNbr) Return the first ChildVendorShipfrom filtered by the ApfmOurAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByDateupdtd(string $DateUpdtd) Return the first ChildVendorShipfrom filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildVendorShipfrom filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildVendorShipfrom requireOneByDummy(string $dummy) Return the first ChildVendorShipfrom filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildVendorShipfrom[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildVendorShipfrom objects based on current ModelCriteria
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildVendorShipfrom objects filtered by the ApveVendId column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmshipid(string $ApfmShipId) Return ChildVendorShipfrom objects filtered by the ApfmShipId column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmname(string $ApfmName) Return ChildVendorShipfrom objects filtered by the ApfmName column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmadr1(string $ApfmAdr1) Return ChildVendorShipfrom objects filtered by the ApfmAdr1 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmadr2(string $ApfmAdr2) Return ChildVendorShipfrom objects filtered by the ApfmAdr2 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmadr3(string $ApfmAdr3) Return ChildVendorShipfrom objects filtered by the ApfmAdr3 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmctry(string $ApfmCtry) Return ChildVendorShipfrom objects filtered by the ApfmCtry column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmcity(string $ApfmCity) Return ChildVendorShipfrom objects filtered by the ApfmCity column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmstat(string $ApfmStat) Return ChildVendorShipfrom objects filtered by the ApfmStat column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmzipcode(string $ApfmZipCode) Return ChildVendorShipfrom objects filtered by the ApfmZipCode column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmcont1(string $ApfmCont1) Return ChildVendorShipfrom objects filtered by the ApfmCont1 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmcont2(string $ApfmCont2) Return ChildVendorShipfrom objects filtered by the ApfmCont2 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByArtbsviacode(string $ArtbSviaCode) Return ChildVendorShipfrom objects filtered by the ArtbSviaCode column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmglacct(string $ApfmGlAcct) Return ChildVendorShipfrom objects filtered by the ApfmGlAcct column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpurmtd(string $ApfmPurMtd) Return ChildVendorShipfrom objects filtered by the ApfmPurMtd column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpomtd(int $ApfmPoMtd) Return ChildVendorShipfrom objects filtered by the ApfmPoMtd column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmdateopen(string $ApfmDateOpen) Return ChildVendorShipfrom objects filtered by the ApfmDateOpen column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmlastpurdate(string $ApfmLastPurDate) Return ChildVendorShipfrom objects filtered by the ApfmLastPurDate column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo01(string $ApfmPur24mo01) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo01 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo01(int $ApfmPo24mo01) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo01 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo02(string $ApfmPur24mo02) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo02 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo02(int $ApfmPo24mo02) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo02 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo03(string $ApfmPur24mo03) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo03 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo03(int $ApfmPo24mo03) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo03 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo04(string $ApfmPur24mo04) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo04 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo04(int $ApfmPo24mo04) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo04 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo05(string $ApfmPur24mo05) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo05 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo05(int $ApfmPo24mo05) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo05 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo06(string $ApfmPur24mo06) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo06 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo06(int $ApfmPo24mo06) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo06 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo07(string $ApfmPur24mo07) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo07 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo07(int $ApfmPo24mo07) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo07 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo08(string $ApfmPur24mo08) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo08 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo08(int $ApfmPo24mo08) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo08 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo09(string $ApfmPur24mo09) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo09 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo09(int $ApfmPo24mo09) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo09 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo10(string $ApfmPur24mo10) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo10 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo10(int $ApfmPo24mo10) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo10 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo11(string $ApfmPur24mo11) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo11 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo11(int $ApfmPo24mo11) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo11 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo12(string $ApfmPur24mo12) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo12 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo12(int $ApfmPo24mo12) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo12 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo13(string $ApfmPur24mo13) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo13 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo13(int $ApfmPo24mo13) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo13 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo14(string $ApfmPur24mo14) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo14 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo14(int $ApfmPo24mo14) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo14 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo15(string $ApfmPur24mo15) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo15 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo15(int $ApfmPo24mo15) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo15 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo16(string $ApfmPur24mo16) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo16 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo16(int $ApfmPo24mo16) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo16 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo17(string $ApfmPur24mo17) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo17 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo17(int $ApfmPo24mo17) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo17 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo18(string $ApfmPur24mo18) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo18 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo18(int $ApfmPo24mo18) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo18 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo19(string $ApfmPur24mo19) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo19 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo19(int $ApfmPo24mo19) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo19 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo20(string $ApfmPur24mo20) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo20 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo20(int $ApfmPo24mo20) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo20 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo21(string $ApfmPur24mo21) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo21 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo21(int $ApfmPo24mo21) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo21 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo22(string $ApfmPur24mo22) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo22 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo22(int $ApfmPo24mo22) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo22 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo23(string $ApfmPur24mo23) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo23 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo23(int $ApfmPo24mo23) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo23 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpur24mo24(string $ApfmPur24mo24) Return ChildVendorShipfrom objects filtered by the ApfmPur24mo24 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmpo24mo24(int $ApfmPo24mo24) Return ChildVendorShipfrom objects filtered by the ApfmPo24mo24 column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByApfmouracctnbr(string $ApfmOurAcctNbr) Return ChildVendorShipfrom objects filtered by the ApfmOurAcctNbr column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildVendorShipfrom objects filtered by the DateUpdtd column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildVendorShipfrom objects filtered by the TimeUpdtd column
 * @method     ChildVendorShipfrom[]|ObjectCollection findByDummy(string $dummy) Return ChildVendorShipfrom objects filtered by the dummy column
 * @method     ChildVendorShipfrom[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class VendorShipfromQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\VendorShipfromQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\VendorShipfrom', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildVendorShipfromQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildVendorShipfromQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildVendorShipfromQuery) {
            return $criteria;
        }
        $query = new ChildVendorShipfromQuery();
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
     * @param array[$ApveVendId, $ApfmShipId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildVendorShipfrom|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = VendorShipfromTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildVendorShipfrom A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApfmShipId, ApfmName, ApfmAdr1, ApfmAdr2, ApfmAdr3, ApfmCtry, ApfmCity, ApfmStat, ApfmZipCode, ApfmCont1, ApfmCont2, ArtbSviaCode, ApfmGlAcct, ApfmPurMtd, ApfmPoMtd, ApfmDateOpen, ApfmLastPurDate, ApfmPur24mo01, ApfmPo24mo01, ApfmPur24mo02, ApfmPo24mo02, ApfmPur24mo03, ApfmPo24mo03, ApfmPur24mo04, ApfmPo24mo04, ApfmPur24mo05, ApfmPo24mo05, ApfmPur24mo06, ApfmPo24mo06, ApfmPur24mo07, ApfmPo24mo07, ApfmPur24mo08, ApfmPo24mo08, ApfmPur24mo09, ApfmPo24mo09, ApfmPur24mo10, ApfmPo24mo10, ApfmPur24mo11, ApfmPo24mo11, ApfmPur24mo12, ApfmPo24mo12, ApfmPur24mo13, ApfmPo24mo13, ApfmPur24mo14, ApfmPo24mo14, ApfmPur24mo15, ApfmPo24mo15, ApfmPur24mo16, ApfmPo24mo16, ApfmPur24mo17, ApfmPo24mo17, ApfmPur24mo18, ApfmPo24mo18, ApfmPur24mo19, ApfmPo24mo19, ApfmPur24mo20, ApfmPo24mo20, ApfmPur24mo21, ApfmPo24mo21, ApfmPur24mo22, ApfmPo24mo22, ApfmPur24mo23, ApfmPo24mo23, ApfmPur24mo24, ApfmPo24mo24, ApfmOurAcctNbr, DateUpdtd, TimeUpdtd, dummy FROM ap_ship_from WHERE ApveVendId = :p0 AND ApfmShipId = :p1';
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
            /** @var ChildVendorShipfrom $obj */
            $obj = new ChildVendorShipfrom();
            $obj->hydrate($row);
            VendorShipfromTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildVendorShipfrom|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(VendorShipfromTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(VendorShipfromTableMap::COL_APFMSHIPID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(VendorShipfromTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(VendorShipfromTableMap::COL_APFMSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApfmShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmshipid('fooValue');   // WHERE ApfmShipId = 'fooValue'
     * $query->filterByApfmshipid('%fooValue%', Criteria::LIKE); // WHERE ApfmShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmshipid($apfmshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMSHIPID, $apfmshipid, $comparison);
    }

    /**
     * Filter the query on the ApfmName column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmname('fooValue');   // WHERE ApfmName = 'fooValue'
     * $query->filterByApfmname('%fooValue%', Criteria::LIKE); // WHERE ApfmName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmname($apfmname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMNAME, $apfmname, $comparison);
    }

    /**
     * Filter the query on the ApfmAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmadr1('fooValue');   // WHERE ApfmAdr1 = 'fooValue'
     * $query->filterByApfmadr1('%fooValue%', Criteria::LIKE); // WHERE ApfmAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmadr1($apfmadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMADR1, $apfmadr1, $comparison);
    }

    /**
     * Filter the query on the ApfmAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmadr2('fooValue');   // WHERE ApfmAdr2 = 'fooValue'
     * $query->filterByApfmadr2('%fooValue%', Criteria::LIKE); // WHERE ApfmAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmadr2($apfmadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMADR2, $apfmadr2, $comparison);
    }

    /**
     * Filter the query on the ApfmAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmadr3('fooValue');   // WHERE ApfmAdr3 = 'fooValue'
     * $query->filterByApfmadr3('%fooValue%', Criteria::LIKE); // WHERE ApfmAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmadr3($apfmadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMADR3, $apfmadr3, $comparison);
    }

    /**
     * Filter the query on the ApfmCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmctry('fooValue');   // WHERE ApfmCtry = 'fooValue'
     * $query->filterByApfmctry('%fooValue%', Criteria::LIKE); // WHERE ApfmCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmctry($apfmctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMCTRY, $apfmctry, $comparison);
    }

    /**
     * Filter the query on the ApfmCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmcity('fooValue');   // WHERE ApfmCity = 'fooValue'
     * $query->filterByApfmcity('%fooValue%', Criteria::LIKE); // WHERE ApfmCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmcity($apfmcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMCITY, $apfmcity, $comparison);
    }

    /**
     * Filter the query on the ApfmStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmstat('fooValue');   // WHERE ApfmStat = 'fooValue'
     * $query->filterByApfmstat('%fooValue%', Criteria::LIKE); // WHERE ApfmStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmstat($apfmstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMSTAT, $apfmstat, $comparison);
    }

    /**
     * Filter the query on the ApfmZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmzipcode('fooValue');   // WHERE ApfmZipCode = 'fooValue'
     * $query->filterByApfmzipcode('%fooValue%', Criteria::LIKE); // WHERE ApfmZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmzipcode($apfmzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMZIPCODE, $apfmzipcode, $comparison);
    }

    /**
     * Filter the query on the ApfmCont1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmcont1('fooValue');   // WHERE ApfmCont1 = 'fooValue'
     * $query->filterByApfmcont1('%fooValue%', Criteria::LIKE); // WHERE ApfmCont1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmcont1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmcont1($apfmcont1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmcont1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMCONT1, $apfmcont1, $comparison);
    }

    /**
     * Filter the query on the ApfmCont2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmcont2('fooValue');   // WHERE ApfmCont2 = 'fooValue'
     * $query->filterByApfmcont2('%fooValue%', Criteria::LIKE); // WHERE ApfmCont2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmcont2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmcont2($apfmcont2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmcont2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMCONT2, $apfmcont2, $comparison);
    }

    /**
     * Filter the query on the ArtbSviaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsviacode('fooValue');   // WHERE ArtbSviaCode = 'fooValue'
     * $query->filterByArtbsviacode('%fooValue%', Criteria::LIKE); // WHERE ArtbSviaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsviacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByArtbsviacode($artbsviacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsviacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_ARTBSVIACODE, $artbsviacode, $comparison);
    }

    /**
     * Filter the query on the ApfmGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmglacct('fooValue');   // WHERE ApfmGlAcct = 'fooValue'
     * $query->filterByApfmglacct('%fooValue%', Criteria::LIKE); // WHERE ApfmGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmglacct($apfmglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMGLACCT, $apfmglacct, $comparison);
    }

    /**
     * Filter the query on the ApfmPurMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpurmtd(1234); // WHERE ApfmPurMtd = 1234
     * $query->filterByApfmpurmtd(array(12, 34)); // WHERE ApfmPurMtd IN (12, 34)
     * $query->filterByApfmpurmtd(array('min' => 12)); // WHERE ApfmPurMtd > 12
     * </code>
     *
     * @param     mixed $apfmpurmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpurmtd($apfmpurmtd = null, $comparison = null)
    {
        if (is_array($apfmpurmtd)) {
            $useMinMax = false;
            if (isset($apfmpurmtd['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPURMTD, $apfmpurmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpurmtd['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPURMTD, $apfmpurmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPURMTD, $apfmpurmtd, $comparison);
    }

    /**
     * Filter the query on the ApfmPoMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpomtd(1234); // WHERE ApfmPoMtd = 1234
     * $query->filterByApfmpomtd(array(12, 34)); // WHERE ApfmPoMtd IN (12, 34)
     * $query->filterByApfmpomtd(array('min' => 12)); // WHERE ApfmPoMtd > 12
     * </code>
     *
     * @param     mixed $apfmpomtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpomtd($apfmpomtd = null, $comparison = null)
    {
        if (is_array($apfmpomtd)) {
            $useMinMax = false;
            if (isset($apfmpomtd['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPOMTD, $apfmpomtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpomtd['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPOMTD, $apfmpomtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPOMTD, $apfmpomtd, $comparison);
    }

    /**
     * Filter the query on the ApfmDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmdateopen('fooValue');   // WHERE ApfmDateOpen = 'fooValue'
     * $query->filterByApfmdateopen('%fooValue%', Criteria::LIKE); // WHERE ApfmDateOpen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmdateopen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmdateopen($apfmdateopen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmdateopen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMDATEOPEN, $apfmdateopen, $comparison);
    }

    /**
     * Filter the query on the ApfmLastPurDate column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmlastpurdate('fooValue');   // WHERE ApfmLastPurDate = 'fooValue'
     * $query->filterByApfmlastpurdate('%fooValue%', Criteria::LIKE); // WHERE ApfmLastPurDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmlastpurdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmlastpurdate($apfmlastpurdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmlastpurdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMLASTPURDATE, $apfmlastpurdate, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo01(1234); // WHERE ApfmPur24mo01 = 1234
     * $query->filterByApfmpur24mo01(array(12, 34)); // WHERE ApfmPur24mo01 IN (12, 34)
     * $query->filterByApfmpur24mo01(array('min' => 12)); // WHERE ApfmPur24mo01 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo01($apfmpur24mo01 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo01)) {
            $useMinMax = false;
            if (isset($apfmpur24mo01['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO01, $apfmpur24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo01['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO01, $apfmpur24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO01, $apfmpur24mo01, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo01(1234); // WHERE ApfmPo24mo01 = 1234
     * $query->filterByApfmpo24mo01(array(12, 34)); // WHERE ApfmPo24mo01 IN (12, 34)
     * $query->filterByApfmpo24mo01(array('min' => 12)); // WHERE ApfmPo24mo01 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo01($apfmpo24mo01 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo01)) {
            $useMinMax = false;
            if (isset($apfmpo24mo01['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO01, $apfmpo24mo01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo01['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO01, $apfmpo24mo01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO01, $apfmpo24mo01, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo02(1234); // WHERE ApfmPur24mo02 = 1234
     * $query->filterByApfmpur24mo02(array(12, 34)); // WHERE ApfmPur24mo02 IN (12, 34)
     * $query->filterByApfmpur24mo02(array('min' => 12)); // WHERE ApfmPur24mo02 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo02($apfmpur24mo02 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo02)) {
            $useMinMax = false;
            if (isset($apfmpur24mo02['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO02, $apfmpur24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo02['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO02, $apfmpur24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO02, $apfmpur24mo02, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo02(1234); // WHERE ApfmPo24mo02 = 1234
     * $query->filterByApfmpo24mo02(array(12, 34)); // WHERE ApfmPo24mo02 IN (12, 34)
     * $query->filterByApfmpo24mo02(array('min' => 12)); // WHERE ApfmPo24mo02 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo02($apfmpo24mo02 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo02)) {
            $useMinMax = false;
            if (isset($apfmpo24mo02['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO02, $apfmpo24mo02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo02['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO02, $apfmpo24mo02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO02, $apfmpo24mo02, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo03(1234); // WHERE ApfmPur24mo03 = 1234
     * $query->filterByApfmpur24mo03(array(12, 34)); // WHERE ApfmPur24mo03 IN (12, 34)
     * $query->filterByApfmpur24mo03(array('min' => 12)); // WHERE ApfmPur24mo03 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo03($apfmpur24mo03 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo03)) {
            $useMinMax = false;
            if (isset($apfmpur24mo03['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO03, $apfmpur24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo03['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO03, $apfmpur24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO03, $apfmpur24mo03, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo03(1234); // WHERE ApfmPo24mo03 = 1234
     * $query->filterByApfmpo24mo03(array(12, 34)); // WHERE ApfmPo24mo03 IN (12, 34)
     * $query->filterByApfmpo24mo03(array('min' => 12)); // WHERE ApfmPo24mo03 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo03($apfmpo24mo03 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo03)) {
            $useMinMax = false;
            if (isset($apfmpo24mo03['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO03, $apfmpo24mo03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo03['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO03, $apfmpo24mo03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO03, $apfmpo24mo03, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo04(1234); // WHERE ApfmPur24mo04 = 1234
     * $query->filterByApfmpur24mo04(array(12, 34)); // WHERE ApfmPur24mo04 IN (12, 34)
     * $query->filterByApfmpur24mo04(array('min' => 12)); // WHERE ApfmPur24mo04 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo04($apfmpur24mo04 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo04)) {
            $useMinMax = false;
            if (isset($apfmpur24mo04['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO04, $apfmpur24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo04['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO04, $apfmpur24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO04, $apfmpur24mo04, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo04(1234); // WHERE ApfmPo24mo04 = 1234
     * $query->filterByApfmpo24mo04(array(12, 34)); // WHERE ApfmPo24mo04 IN (12, 34)
     * $query->filterByApfmpo24mo04(array('min' => 12)); // WHERE ApfmPo24mo04 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo04($apfmpo24mo04 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo04)) {
            $useMinMax = false;
            if (isset($apfmpo24mo04['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO04, $apfmpo24mo04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo04['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO04, $apfmpo24mo04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO04, $apfmpo24mo04, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo05(1234); // WHERE ApfmPur24mo05 = 1234
     * $query->filterByApfmpur24mo05(array(12, 34)); // WHERE ApfmPur24mo05 IN (12, 34)
     * $query->filterByApfmpur24mo05(array('min' => 12)); // WHERE ApfmPur24mo05 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo05($apfmpur24mo05 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo05)) {
            $useMinMax = false;
            if (isset($apfmpur24mo05['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO05, $apfmpur24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo05['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO05, $apfmpur24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO05, $apfmpur24mo05, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo05(1234); // WHERE ApfmPo24mo05 = 1234
     * $query->filterByApfmpo24mo05(array(12, 34)); // WHERE ApfmPo24mo05 IN (12, 34)
     * $query->filterByApfmpo24mo05(array('min' => 12)); // WHERE ApfmPo24mo05 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo05($apfmpo24mo05 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo05)) {
            $useMinMax = false;
            if (isset($apfmpo24mo05['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO05, $apfmpo24mo05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo05['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO05, $apfmpo24mo05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO05, $apfmpo24mo05, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo06(1234); // WHERE ApfmPur24mo06 = 1234
     * $query->filterByApfmpur24mo06(array(12, 34)); // WHERE ApfmPur24mo06 IN (12, 34)
     * $query->filterByApfmpur24mo06(array('min' => 12)); // WHERE ApfmPur24mo06 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo06($apfmpur24mo06 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo06)) {
            $useMinMax = false;
            if (isset($apfmpur24mo06['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO06, $apfmpur24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo06['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO06, $apfmpur24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO06, $apfmpur24mo06, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo06(1234); // WHERE ApfmPo24mo06 = 1234
     * $query->filterByApfmpo24mo06(array(12, 34)); // WHERE ApfmPo24mo06 IN (12, 34)
     * $query->filterByApfmpo24mo06(array('min' => 12)); // WHERE ApfmPo24mo06 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo06($apfmpo24mo06 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo06)) {
            $useMinMax = false;
            if (isset($apfmpo24mo06['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO06, $apfmpo24mo06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo06['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO06, $apfmpo24mo06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO06, $apfmpo24mo06, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo07(1234); // WHERE ApfmPur24mo07 = 1234
     * $query->filterByApfmpur24mo07(array(12, 34)); // WHERE ApfmPur24mo07 IN (12, 34)
     * $query->filterByApfmpur24mo07(array('min' => 12)); // WHERE ApfmPur24mo07 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo07($apfmpur24mo07 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo07)) {
            $useMinMax = false;
            if (isset($apfmpur24mo07['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO07, $apfmpur24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo07['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO07, $apfmpur24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO07, $apfmpur24mo07, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo07(1234); // WHERE ApfmPo24mo07 = 1234
     * $query->filterByApfmpo24mo07(array(12, 34)); // WHERE ApfmPo24mo07 IN (12, 34)
     * $query->filterByApfmpo24mo07(array('min' => 12)); // WHERE ApfmPo24mo07 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo07($apfmpo24mo07 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo07)) {
            $useMinMax = false;
            if (isset($apfmpo24mo07['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO07, $apfmpo24mo07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo07['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO07, $apfmpo24mo07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO07, $apfmpo24mo07, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo08(1234); // WHERE ApfmPur24mo08 = 1234
     * $query->filterByApfmpur24mo08(array(12, 34)); // WHERE ApfmPur24mo08 IN (12, 34)
     * $query->filterByApfmpur24mo08(array('min' => 12)); // WHERE ApfmPur24mo08 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo08($apfmpur24mo08 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo08)) {
            $useMinMax = false;
            if (isset($apfmpur24mo08['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO08, $apfmpur24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo08['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO08, $apfmpur24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO08, $apfmpur24mo08, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo08(1234); // WHERE ApfmPo24mo08 = 1234
     * $query->filterByApfmpo24mo08(array(12, 34)); // WHERE ApfmPo24mo08 IN (12, 34)
     * $query->filterByApfmpo24mo08(array('min' => 12)); // WHERE ApfmPo24mo08 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo08($apfmpo24mo08 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo08)) {
            $useMinMax = false;
            if (isset($apfmpo24mo08['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO08, $apfmpo24mo08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo08['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO08, $apfmpo24mo08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO08, $apfmpo24mo08, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo09(1234); // WHERE ApfmPur24mo09 = 1234
     * $query->filterByApfmpur24mo09(array(12, 34)); // WHERE ApfmPur24mo09 IN (12, 34)
     * $query->filterByApfmpur24mo09(array('min' => 12)); // WHERE ApfmPur24mo09 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo09($apfmpur24mo09 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo09)) {
            $useMinMax = false;
            if (isset($apfmpur24mo09['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO09, $apfmpur24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo09['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO09, $apfmpur24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO09, $apfmpur24mo09, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo09(1234); // WHERE ApfmPo24mo09 = 1234
     * $query->filterByApfmpo24mo09(array(12, 34)); // WHERE ApfmPo24mo09 IN (12, 34)
     * $query->filterByApfmpo24mo09(array('min' => 12)); // WHERE ApfmPo24mo09 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo09($apfmpo24mo09 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo09)) {
            $useMinMax = false;
            if (isset($apfmpo24mo09['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO09, $apfmpo24mo09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo09['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO09, $apfmpo24mo09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO09, $apfmpo24mo09, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo10(1234); // WHERE ApfmPur24mo10 = 1234
     * $query->filterByApfmpur24mo10(array(12, 34)); // WHERE ApfmPur24mo10 IN (12, 34)
     * $query->filterByApfmpur24mo10(array('min' => 12)); // WHERE ApfmPur24mo10 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo10($apfmpur24mo10 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo10)) {
            $useMinMax = false;
            if (isset($apfmpur24mo10['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO10, $apfmpur24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo10['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO10, $apfmpur24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO10, $apfmpur24mo10, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo10(1234); // WHERE ApfmPo24mo10 = 1234
     * $query->filterByApfmpo24mo10(array(12, 34)); // WHERE ApfmPo24mo10 IN (12, 34)
     * $query->filterByApfmpo24mo10(array('min' => 12)); // WHERE ApfmPo24mo10 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo10($apfmpo24mo10 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo10)) {
            $useMinMax = false;
            if (isset($apfmpo24mo10['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO10, $apfmpo24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo10['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO10, $apfmpo24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO10, $apfmpo24mo10, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo11(1234); // WHERE ApfmPur24mo11 = 1234
     * $query->filterByApfmpur24mo11(array(12, 34)); // WHERE ApfmPur24mo11 IN (12, 34)
     * $query->filterByApfmpur24mo11(array('min' => 12)); // WHERE ApfmPur24mo11 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo11($apfmpur24mo11 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo11)) {
            $useMinMax = false;
            if (isset($apfmpur24mo11['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO11, $apfmpur24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo11['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO11, $apfmpur24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO11, $apfmpur24mo11, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo11(1234); // WHERE ApfmPo24mo11 = 1234
     * $query->filterByApfmpo24mo11(array(12, 34)); // WHERE ApfmPo24mo11 IN (12, 34)
     * $query->filterByApfmpo24mo11(array('min' => 12)); // WHERE ApfmPo24mo11 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo11($apfmpo24mo11 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo11)) {
            $useMinMax = false;
            if (isset($apfmpo24mo11['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO11, $apfmpo24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo11['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO11, $apfmpo24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO11, $apfmpo24mo11, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo12(1234); // WHERE ApfmPur24mo12 = 1234
     * $query->filterByApfmpur24mo12(array(12, 34)); // WHERE ApfmPur24mo12 IN (12, 34)
     * $query->filterByApfmpur24mo12(array('min' => 12)); // WHERE ApfmPur24mo12 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo12($apfmpur24mo12 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo12)) {
            $useMinMax = false;
            if (isset($apfmpur24mo12['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO12, $apfmpur24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo12['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO12, $apfmpur24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO12, $apfmpur24mo12, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo12(1234); // WHERE ApfmPo24mo12 = 1234
     * $query->filterByApfmpo24mo12(array(12, 34)); // WHERE ApfmPo24mo12 IN (12, 34)
     * $query->filterByApfmpo24mo12(array('min' => 12)); // WHERE ApfmPo24mo12 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo12($apfmpo24mo12 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo12)) {
            $useMinMax = false;
            if (isset($apfmpo24mo12['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO12, $apfmpo24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo12['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO12, $apfmpo24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO12, $apfmpo24mo12, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo13(1234); // WHERE ApfmPur24mo13 = 1234
     * $query->filterByApfmpur24mo13(array(12, 34)); // WHERE ApfmPur24mo13 IN (12, 34)
     * $query->filterByApfmpur24mo13(array('min' => 12)); // WHERE ApfmPur24mo13 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo13($apfmpur24mo13 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo13)) {
            $useMinMax = false;
            if (isset($apfmpur24mo13['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO13, $apfmpur24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo13['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO13, $apfmpur24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO13, $apfmpur24mo13, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo13(1234); // WHERE ApfmPo24mo13 = 1234
     * $query->filterByApfmpo24mo13(array(12, 34)); // WHERE ApfmPo24mo13 IN (12, 34)
     * $query->filterByApfmpo24mo13(array('min' => 12)); // WHERE ApfmPo24mo13 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo13($apfmpo24mo13 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo13)) {
            $useMinMax = false;
            if (isset($apfmpo24mo13['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO13, $apfmpo24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo13['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO13, $apfmpo24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO13, $apfmpo24mo13, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo14(1234); // WHERE ApfmPur24mo14 = 1234
     * $query->filterByApfmpur24mo14(array(12, 34)); // WHERE ApfmPur24mo14 IN (12, 34)
     * $query->filterByApfmpur24mo14(array('min' => 12)); // WHERE ApfmPur24mo14 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo14($apfmpur24mo14 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo14)) {
            $useMinMax = false;
            if (isset($apfmpur24mo14['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO14, $apfmpur24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo14['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO14, $apfmpur24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO14, $apfmpur24mo14, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo14(1234); // WHERE ApfmPo24mo14 = 1234
     * $query->filterByApfmpo24mo14(array(12, 34)); // WHERE ApfmPo24mo14 IN (12, 34)
     * $query->filterByApfmpo24mo14(array('min' => 12)); // WHERE ApfmPo24mo14 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo14($apfmpo24mo14 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo14)) {
            $useMinMax = false;
            if (isset($apfmpo24mo14['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO14, $apfmpo24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo14['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO14, $apfmpo24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO14, $apfmpo24mo14, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo15(1234); // WHERE ApfmPur24mo15 = 1234
     * $query->filterByApfmpur24mo15(array(12, 34)); // WHERE ApfmPur24mo15 IN (12, 34)
     * $query->filterByApfmpur24mo15(array('min' => 12)); // WHERE ApfmPur24mo15 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo15($apfmpur24mo15 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo15)) {
            $useMinMax = false;
            if (isset($apfmpur24mo15['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO15, $apfmpur24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo15['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO15, $apfmpur24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO15, $apfmpur24mo15, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo15(1234); // WHERE ApfmPo24mo15 = 1234
     * $query->filterByApfmpo24mo15(array(12, 34)); // WHERE ApfmPo24mo15 IN (12, 34)
     * $query->filterByApfmpo24mo15(array('min' => 12)); // WHERE ApfmPo24mo15 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo15($apfmpo24mo15 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo15)) {
            $useMinMax = false;
            if (isset($apfmpo24mo15['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO15, $apfmpo24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo15['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO15, $apfmpo24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO15, $apfmpo24mo15, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo16(1234); // WHERE ApfmPur24mo16 = 1234
     * $query->filterByApfmpur24mo16(array(12, 34)); // WHERE ApfmPur24mo16 IN (12, 34)
     * $query->filterByApfmpur24mo16(array('min' => 12)); // WHERE ApfmPur24mo16 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo16($apfmpur24mo16 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo16)) {
            $useMinMax = false;
            if (isset($apfmpur24mo16['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO16, $apfmpur24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo16['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO16, $apfmpur24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO16, $apfmpur24mo16, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo16(1234); // WHERE ApfmPo24mo16 = 1234
     * $query->filterByApfmpo24mo16(array(12, 34)); // WHERE ApfmPo24mo16 IN (12, 34)
     * $query->filterByApfmpo24mo16(array('min' => 12)); // WHERE ApfmPo24mo16 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo16($apfmpo24mo16 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo16)) {
            $useMinMax = false;
            if (isset($apfmpo24mo16['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO16, $apfmpo24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo16['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO16, $apfmpo24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO16, $apfmpo24mo16, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo17(1234); // WHERE ApfmPur24mo17 = 1234
     * $query->filterByApfmpur24mo17(array(12, 34)); // WHERE ApfmPur24mo17 IN (12, 34)
     * $query->filterByApfmpur24mo17(array('min' => 12)); // WHERE ApfmPur24mo17 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo17($apfmpur24mo17 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo17)) {
            $useMinMax = false;
            if (isset($apfmpur24mo17['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO17, $apfmpur24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo17['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO17, $apfmpur24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO17, $apfmpur24mo17, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo17(1234); // WHERE ApfmPo24mo17 = 1234
     * $query->filterByApfmpo24mo17(array(12, 34)); // WHERE ApfmPo24mo17 IN (12, 34)
     * $query->filterByApfmpo24mo17(array('min' => 12)); // WHERE ApfmPo24mo17 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo17($apfmpo24mo17 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo17)) {
            $useMinMax = false;
            if (isset($apfmpo24mo17['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO17, $apfmpo24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo17['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO17, $apfmpo24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO17, $apfmpo24mo17, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo18(1234); // WHERE ApfmPur24mo18 = 1234
     * $query->filterByApfmpur24mo18(array(12, 34)); // WHERE ApfmPur24mo18 IN (12, 34)
     * $query->filterByApfmpur24mo18(array('min' => 12)); // WHERE ApfmPur24mo18 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo18($apfmpur24mo18 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo18)) {
            $useMinMax = false;
            if (isset($apfmpur24mo18['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO18, $apfmpur24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo18['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO18, $apfmpur24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO18, $apfmpur24mo18, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo18(1234); // WHERE ApfmPo24mo18 = 1234
     * $query->filterByApfmpo24mo18(array(12, 34)); // WHERE ApfmPo24mo18 IN (12, 34)
     * $query->filterByApfmpo24mo18(array('min' => 12)); // WHERE ApfmPo24mo18 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo18($apfmpo24mo18 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo18)) {
            $useMinMax = false;
            if (isset($apfmpo24mo18['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO18, $apfmpo24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo18['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO18, $apfmpo24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO18, $apfmpo24mo18, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo19(1234); // WHERE ApfmPur24mo19 = 1234
     * $query->filterByApfmpur24mo19(array(12, 34)); // WHERE ApfmPur24mo19 IN (12, 34)
     * $query->filterByApfmpur24mo19(array('min' => 12)); // WHERE ApfmPur24mo19 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo19($apfmpur24mo19 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo19)) {
            $useMinMax = false;
            if (isset($apfmpur24mo19['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO19, $apfmpur24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo19['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO19, $apfmpur24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO19, $apfmpur24mo19, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo19(1234); // WHERE ApfmPo24mo19 = 1234
     * $query->filterByApfmpo24mo19(array(12, 34)); // WHERE ApfmPo24mo19 IN (12, 34)
     * $query->filterByApfmpo24mo19(array('min' => 12)); // WHERE ApfmPo24mo19 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo19($apfmpo24mo19 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo19)) {
            $useMinMax = false;
            if (isset($apfmpo24mo19['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO19, $apfmpo24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo19['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO19, $apfmpo24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO19, $apfmpo24mo19, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo20(1234); // WHERE ApfmPur24mo20 = 1234
     * $query->filterByApfmpur24mo20(array(12, 34)); // WHERE ApfmPur24mo20 IN (12, 34)
     * $query->filterByApfmpur24mo20(array('min' => 12)); // WHERE ApfmPur24mo20 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo20($apfmpur24mo20 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo20)) {
            $useMinMax = false;
            if (isset($apfmpur24mo20['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO20, $apfmpur24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo20['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO20, $apfmpur24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO20, $apfmpur24mo20, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo20(1234); // WHERE ApfmPo24mo20 = 1234
     * $query->filterByApfmpo24mo20(array(12, 34)); // WHERE ApfmPo24mo20 IN (12, 34)
     * $query->filterByApfmpo24mo20(array('min' => 12)); // WHERE ApfmPo24mo20 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo20($apfmpo24mo20 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo20)) {
            $useMinMax = false;
            if (isset($apfmpo24mo20['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO20, $apfmpo24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo20['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO20, $apfmpo24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO20, $apfmpo24mo20, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo21(1234); // WHERE ApfmPur24mo21 = 1234
     * $query->filterByApfmpur24mo21(array(12, 34)); // WHERE ApfmPur24mo21 IN (12, 34)
     * $query->filterByApfmpur24mo21(array('min' => 12)); // WHERE ApfmPur24mo21 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo21($apfmpur24mo21 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo21)) {
            $useMinMax = false;
            if (isset($apfmpur24mo21['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO21, $apfmpur24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo21['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO21, $apfmpur24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO21, $apfmpur24mo21, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo21(1234); // WHERE ApfmPo24mo21 = 1234
     * $query->filterByApfmpo24mo21(array(12, 34)); // WHERE ApfmPo24mo21 IN (12, 34)
     * $query->filterByApfmpo24mo21(array('min' => 12)); // WHERE ApfmPo24mo21 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo21($apfmpo24mo21 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo21)) {
            $useMinMax = false;
            if (isset($apfmpo24mo21['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO21, $apfmpo24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo21['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO21, $apfmpo24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO21, $apfmpo24mo21, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo22(1234); // WHERE ApfmPur24mo22 = 1234
     * $query->filterByApfmpur24mo22(array(12, 34)); // WHERE ApfmPur24mo22 IN (12, 34)
     * $query->filterByApfmpur24mo22(array('min' => 12)); // WHERE ApfmPur24mo22 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo22($apfmpur24mo22 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo22)) {
            $useMinMax = false;
            if (isset($apfmpur24mo22['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO22, $apfmpur24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo22['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO22, $apfmpur24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO22, $apfmpur24mo22, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo22(1234); // WHERE ApfmPo24mo22 = 1234
     * $query->filterByApfmpo24mo22(array(12, 34)); // WHERE ApfmPo24mo22 IN (12, 34)
     * $query->filterByApfmpo24mo22(array('min' => 12)); // WHERE ApfmPo24mo22 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo22($apfmpo24mo22 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo22)) {
            $useMinMax = false;
            if (isset($apfmpo24mo22['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO22, $apfmpo24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo22['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO22, $apfmpo24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO22, $apfmpo24mo22, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo23(1234); // WHERE ApfmPur24mo23 = 1234
     * $query->filterByApfmpur24mo23(array(12, 34)); // WHERE ApfmPur24mo23 IN (12, 34)
     * $query->filterByApfmpur24mo23(array('min' => 12)); // WHERE ApfmPur24mo23 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo23($apfmpur24mo23 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo23)) {
            $useMinMax = false;
            if (isset($apfmpur24mo23['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO23, $apfmpur24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo23['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO23, $apfmpur24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO23, $apfmpur24mo23, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo23(1234); // WHERE ApfmPo24mo23 = 1234
     * $query->filterByApfmpo24mo23(array(12, 34)); // WHERE ApfmPo24mo23 IN (12, 34)
     * $query->filterByApfmpo24mo23(array('min' => 12)); // WHERE ApfmPo24mo23 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo23($apfmpo24mo23 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo23)) {
            $useMinMax = false;
            if (isset($apfmpo24mo23['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO23, $apfmpo24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo23['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO23, $apfmpo24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO23, $apfmpo24mo23, $comparison);
    }

    /**
     * Filter the query on the ApfmPur24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpur24mo24(1234); // WHERE ApfmPur24mo24 = 1234
     * $query->filterByApfmpur24mo24(array(12, 34)); // WHERE ApfmPur24mo24 IN (12, 34)
     * $query->filterByApfmpur24mo24(array('min' => 12)); // WHERE ApfmPur24mo24 > 12
     * </code>
     *
     * @param     mixed $apfmpur24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpur24mo24($apfmpur24mo24 = null, $comparison = null)
    {
        if (is_array($apfmpur24mo24)) {
            $useMinMax = false;
            if (isset($apfmpur24mo24['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO24, $apfmpur24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpur24mo24['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO24, $apfmpur24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPUR24MO24, $apfmpur24mo24, $comparison);
    }

    /**
     * Filter the query on the ApfmPo24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmpo24mo24(1234); // WHERE ApfmPo24mo24 = 1234
     * $query->filterByApfmpo24mo24(array(12, 34)); // WHERE ApfmPo24mo24 IN (12, 34)
     * $query->filterByApfmpo24mo24(array('min' => 12)); // WHERE ApfmPo24mo24 > 12
     * </code>
     *
     * @param     mixed $apfmpo24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmpo24mo24($apfmpo24mo24 = null, $comparison = null)
    {
        if (is_array($apfmpo24mo24)) {
            $useMinMax = false;
            if (isset($apfmpo24mo24['min'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO24, $apfmpo24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apfmpo24mo24['max'])) {
                $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO24, $apfmpo24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMPO24MO24, $apfmpo24mo24, $comparison);
    }

    /**
     * Filter the query on the ApfmOurAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApfmouracctnbr('fooValue');   // WHERE ApfmOurAcctNbr = 'fooValue'
     * $query->filterByApfmouracctnbr('%fooValue%', Criteria::LIKE); // WHERE ApfmOurAcctNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apfmouracctnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByApfmouracctnbr($apfmouracctnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apfmouracctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_APFMOURACCTNBR, $apfmouracctnbr, $comparison);
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
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VendorShipfromTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(VendorShipfromTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VendorShipfromTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildVendorShipfrom $vendorShipfrom Object to remove from the list of results
     *
     * @return $this|ChildVendorShipfromQuery The current query, for fluid interface
     */
    public function prune($vendorShipfrom = null)
    {
        if ($vendorShipfrom) {
            $this->addCond('pruneCond0', $this->getAliasedColName(VendorShipfromTableMap::COL_APVEVENDID), $vendorShipfrom->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(VendorShipfromTableMap::COL_APFMSHIPID), $vendorShipfrom->getApfmshipid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_ship_from table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VendorShipfromTableMap::clearInstancePool();
            VendorShipfromTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(VendorShipfromTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(VendorShipfromTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            VendorShipfromTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            VendorShipfromTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // VendorShipfromQuery
