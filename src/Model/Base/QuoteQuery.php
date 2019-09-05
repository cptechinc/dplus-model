<?php

namespace Base;

use \Quote as ChildQuote;
use \QuoteQuery as ChildQuoteQuery;
use \Exception;
use \PDO;
use Map\QuoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'quote_header' table.
 *
 *
 *
 * @method     ChildQuoteQuery orderByQthdid($order = Criteria::ASC) Order by the QthdId column
 * @method     ChildQuoteQuery orderByQthdstat($order = Criteria::ASC) Order by the QthdStat column
 * @method     ChildQuoteQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildQuoteQuery orderByQthdbtname($order = Criteria::ASC) Order by the QthdBtName column
 * @method     ChildQuoteQuery orderByQthdbtadr1($order = Criteria::ASC) Order by the QthdBtAdr1 column
 * @method     ChildQuoteQuery orderByQthdbtadr2($order = Criteria::ASC) Order by the QthdBtAdr2 column
 * @method     ChildQuoteQuery orderByQthdbtadr3($order = Criteria::ASC) Order by the QthdBtAdr3 column
 * @method     ChildQuoteQuery orderByQthdbtctry($order = Criteria::ASC) Order by the QthdBtCtry column
 * @method     ChildQuoteQuery orderByQthdbtcity($order = Criteria::ASC) Order by the QthdBtCity column
 * @method     ChildQuoteQuery orderByQthdbtstat($order = Criteria::ASC) Order by the QthdBtStat column
 * @method     ChildQuoteQuery orderByQthdbtzipcode($order = Criteria::ASC) Order by the QthdBtZipCode column
 * @method     ChildQuoteQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildQuoteQuery orderByQthdstname($order = Criteria::ASC) Order by the QthdStName column
 * @method     ChildQuoteQuery orderByQthdstadr1($order = Criteria::ASC) Order by the QthdStAdr1 column
 * @method     ChildQuoteQuery orderByQthdstadr2($order = Criteria::ASC) Order by the QthdStAdr2 column
 * @method     ChildQuoteQuery orderByQthdstadr3($order = Criteria::ASC) Order by the QthdStAdr3 column
 * @method     ChildQuoteQuery orderByQthdstctry($order = Criteria::ASC) Order by the QthdStCtry column
 * @method     ChildQuoteQuery orderByQthdstcity($order = Criteria::ASC) Order by the QthdStCity column
 * @method     ChildQuoteQuery orderByQthdststat($order = Criteria::ASC) Order by the QthdStStat column
 * @method     ChildQuoteQuery orderByQthdstzipcode($order = Criteria::ASC) Order by the QthdStZipCode column
 * @method     ChildQuoteQuery orderByQthdcont($order = Criteria::ASC) Order by the QthdCont column
 * @method     ChildQuoteQuery orderByQthdteleintl($order = Criteria::ASC) Order by the QthdTeleIntl column
 * @method     ChildQuoteQuery orderByQthdtelenbr($order = Criteria::ASC) Order by the QthdTeleNbr column
 * @method     ChildQuoteQuery orderByQthdteleext($order = Criteria::ASC) Order by the QthdTeleExt column
 * @method     ChildQuoteQuery orderByQthdfaxintl($order = Criteria::ASC) Order by the QthdFaxIntl column
 * @method     ChildQuoteQuery orderByQthdfaxnbr($order = Criteria::ASC) Order by the QthdFaxNbr column
 * @method     ChildQuoteQuery orderByQthdquotdate($order = Criteria::ASC) Order by the QthdQuotDate column
 * @method     ChildQuoteQuery orderByQthdrevdate($order = Criteria::ASC) Order by the QthdRevDate column
 * @method     ChildQuoteQuery orderByQthdexpdate($order = Criteria::ASC) Order by the QthdExpDate column
 * @method     ChildQuoteQuery orderByArtbpriccode($order = Criteria::ASC) Order by the ArtbPricCode column
 * @method     ChildQuoteQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildQuoteQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildQuoteQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildQuoteQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildQuoteQuery orderByQthdsp1pct($order = Criteria::ASC) Order by the QthdSp1Pct column
 * @method     ChildQuoteQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildQuoteQuery orderByQthdsp2pct($order = Criteria::ASC) Order by the QthdSp2Pct column
 * @method     ChildQuoteQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildQuoteQuery orderByQthdsp3pct($order = Criteria::ASC) Order by the QthdSp3Pct column
 * @method     ChildQuoteQuery orderByQthdexchctry($order = Criteria::ASC) Order by the QthdExchCtry column
 * @method     ChildQuoteQuery orderByQthdexchrate($order = Criteria::ASC) Order by the QthdExchRate column
 * @method     ChildQuoteQuery orderByQthdtaxsub($order = Criteria::ASC) Order by the QthdTaxSub column
 * @method     ChildQuoteQuery orderByQthdnontaxsub($order = Criteria::ASC) Order by the QthdNonTaxSub column
 * @method     ChildQuoteQuery orderByQthdtaxtot($order = Criteria::ASC) Order by the QthdTaxTot column
 * @method     ChildQuoteQuery orderByQthdfrttot($order = Criteria::ASC) Order by the QthdFrtTot column
 * @method     ChildQuoteQuery orderByQthdmisctot($order = Criteria::ASC) Order by the QthdMiscTot column
 * @method     ChildQuoteQuery orderByQthdordrtot($order = Criteria::ASC) Order by the QthdOrdrTot column
 * @method     ChildQuoteQuery orderByQthdcosttot($order = Criteria::ASC) Order by the QthdCostTot column
 * @method     ChildQuoteQuery orderByQthdwghttot($order = Criteria::ASC) Order by the QthdWghtTot column
 * @method     ChildQuoteQuery orderByQthdoldsysqtnbr($order = Criteria::ASC) Order by the QthdOldSysQtNbr column
 * @method     ChildQuoteQuery orderByQthdfob($order = Criteria::ASC) Order by the QthdFob column
 * @method     ChildQuoteQuery orderByQthddeliverydesc($order = Criteria::ASC) Order by the QthdDeliveryDesc column
 * @method     ChildQuoteQuery orderByQthdordercnt($order = Criteria::ASC) Order by the QthdOrderCnt column
 * @method     ChildQuoteQuery orderByQthdlastorder($order = Criteria::ASC) Order by the QthdLastOrder column
 * @method     ChildQuoteQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildQuoteQuery orderByQthdcustpo($order = Criteria::ASC) Order by the QthdCustPo column
 * @method     ChildQuoteQuery orderByQthdemailaddr($order = Criteria::ASC) Order by the QthdEmailAddr column
 * @method     ChildQuoteQuery orderByQthdenteredby($order = Criteria::ASC) Order by the QthdEnteredBy column
 * @method     ChildQuoteQuery orderByQthdentereddate($order = Criteria::ASC) Order by the QthdEnteredDate column
 * @method     ChildQuoteQuery orderByQthdenteredtime($order = Criteria::ASC) Order by the QthdEnteredTime column
 * @method     ChildQuoteQuery orderByQthdprintformat($order = Criteria::ASC) Order by the QthdPrintFormat column
 * @method     ChildQuoteQuery orderByQthdprojectid($order = Criteria::ASC) Order by the QthdProjectId column
 * @method     ChildQuoteQuery orderByQthdrevtime($order = Criteria::ASC) Order by the QthdRevTime column
 * @method     ChildQuoteQuery orderByQthdref($order = Criteria::ASC) Order by the QthdRef column
 * @method     ChildQuoteQuery orderByQthdcareof($order = Criteria::ASC) Order by the QthdCareOf column
 * @method     ChildQuoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildQuoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildQuoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildQuoteQuery groupByQthdid() Group by the QthdId column
 * @method     ChildQuoteQuery groupByQthdstat() Group by the QthdStat column
 * @method     ChildQuoteQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildQuoteQuery groupByQthdbtname() Group by the QthdBtName column
 * @method     ChildQuoteQuery groupByQthdbtadr1() Group by the QthdBtAdr1 column
 * @method     ChildQuoteQuery groupByQthdbtadr2() Group by the QthdBtAdr2 column
 * @method     ChildQuoteQuery groupByQthdbtadr3() Group by the QthdBtAdr3 column
 * @method     ChildQuoteQuery groupByQthdbtctry() Group by the QthdBtCtry column
 * @method     ChildQuoteQuery groupByQthdbtcity() Group by the QthdBtCity column
 * @method     ChildQuoteQuery groupByQthdbtstat() Group by the QthdBtStat column
 * @method     ChildQuoteQuery groupByQthdbtzipcode() Group by the QthdBtZipCode column
 * @method     ChildQuoteQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildQuoteQuery groupByQthdstname() Group by the QthdStName column
 * @method     ChildQuoteQuery groupByQthdstadr1() Group by the QthdStAdr1 column
 * @method     ChildQuoteQuery groupByQthdstadr2() Group by the QthdStAdr2 column
 * @method     ChildQuoteQuery groupByQthdstadr3() Group by the QthdStAdr3 column
 * @method     ChildQuoteQuery groupByQthdstctry() Group by the QthdStCtry column
 * @method     ChildQuoteQuery groupByQthdstcity() Group by the QthdStCity column
 * @method     ChildQuoteQuery groupByQthdststat() Group by the QthdStStat column
 * @method     ChildQuoteQuery groupByQthdstzipcode() Group by the QthdStZipCode column
 * @method     ChildQuoteQuery groupByQthdcont() Group by the QthdCont column
 * @method     ChildQuoteQuery groupByQthdteleintl() Group by the QthdTeleIntl column
 * @method     ChildQuoteQuery groupByQthdtelenbr() Group by the QthdTeleNbr column
 * @method     ChildQuoteQuery groupByQthdteleext() Group by the QthdTeleExt column
 * @method     ChildQuoteQuery groupByQthdfaxintl() Group by the QthdFaxIntl column
 * @method     ChildQuoteQuery groupByQthdfaxnbr() Group by the QthdFaxNbr column
 * @method     ChildQuoteQuery groupByQthdquotdate() Group by the QthdQuotDate column
 * @method     ChildQuoteQuery groupByQthdrevdate() Group by the QthdRevDate column
 * @method     ChildQuoteQuery groupByQthdexpdate() Group by the QthdExpDate column
 * @method     ChildQuoteQuery groupByArtbpriccode() Group by the ArtbPricCode column
 * @method     ChildQuoteQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildQuoteQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildQuoteQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildQuoteQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildQuoteQuery groupByQthdsp1pct() Group by the QthdSp1Pct column
 * @method     ChildQuoteQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildQuoteQuery groupByQthdsp2pct() Group by the QthdSp2Pct column
 * @method     ChildQuoteQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildQuoteQuery groupByQthdsp3pct() Group by the QthdSp3Pct column
 * @method     ChildQuoteQuery groupByQthdexchctry() Group by the QthdExchCtry column
 * @method     ChildQuoteQuery groupByQthdexchrate() Group by the QthdExchRate column
 * @method     ChildQuoteQuery groupByQthdtaxsub() Group by the QthdTaxSub column
 * @method     ChildQuoteQuery groupByQthdnontaxsub() Group by the QthdNonTaxSub column
 * @method     ChildQuoteQuery groupByQthdtaxtot() Group by the QthdTaxTot column
 * @method     ChildQuoteQuery groupByQthdfrttot() Group by the QthdFrtTot column
 * @method     ChildQuoteQuery groupByQthdmisctot() Group by the QthdMiscTot column
 * @method     ChildQuoteQuery groupByQthdordrtot() Group by the QthdOrdrTot column
 * @method     ChildQuoteQuery groupByQthdcosttot() Group by the QthdCostTot column
 * @method     ChildQuoteQuery groupByQthdwghttot() Group by the QthdWghtTot column
 * @method     ChildQuoteQuery groupByQthdoldsysqtnbr() Group by the QthdOldSysQtNbr column
 * @method     ChildQuoteQuery groupByQthdfob() Group by the QthdFob column
 * @method     ChildQuoteQuery groupByQthddeliverydesc() Group by the QthdDeliveryDesc column
 * @method     ChildQuoteQuery groupByQthdordercnt() Group by the QthdOrderCnt column
 * @method     ChildQuoteQuery groupByQthdlastorder() Group by the QthdLastOrder column
 * @method     ChildQuoteQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildQuoteQuery groupByQthdcustpo() Group by the QthdCustPo column
 * @method     ChildQuoteQuery groupByQthdemailaddr() Group by the QthdEmailAddr column
 * @method     ChildQuoteQuery groupByQthdenteredby() Group by the QthdEnteredBy column
 * @method     ChildQuoteQuery groupByQthdentereddate() Group by the QthdEnteredDate column
 * @method     ChildQuoteQuery groupByQthdenteredtime() Group by the QthdEnteredTime column
 * @method     ChildQuoteQuery groupByQthdprintformat() Group by the QthdPrintFormat column
 * @method     ChildQuoteQuery groupByQthdprojectid() Group by the QthdProjectId column
 * @method     ChildQuoteQuery groupByQthdrevtime() Group by the QthdRevTime column
 * @method     ChildQuoteQuery groupByQthdref() Group by the QthdRef column
 * @method     ChildQuoteQuery groupByQthdcareof() Group by the QthdCareOf column
 * @method     ChildQuoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildQuoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildQuoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildQuoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuote findOne(ConnectionInterface $con = null) Return the first ChildQuote matching the query
 * @method     ChildQuote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildQuote matching the query, or a new ChildQuote object populated from the query conditions when no match is found
 *
 * @method     ChildQuote findOneByQthdid(string $QthdId) Return the first ChildQuote filtered by the QthdId column
 * @method     ChildQuote findOneByQthdstat(string $QthdStat) Return the first ChildQuote filtered by the QthdStat column
 * @method     ChildQuote findOneByArcucustid(string $ArcuCustId) Return the first ChildQuote filtered by the ArcuCustId column
 * @method     ChildQuote findOneByQthdbtname(string $QthdBtName) Return the first ChildQuote filtered by the QthdBtName column
 * @method     ChildQuote findOneByQthdbtadr1(string $QthdBtAdr1) Return the first ChildQuote filtered by the QthdBtAdr1 column
 * @method     ChildQuote findOneByQthdbtadr2(string $QthdBtAdr2) Return the first ChildQuote filtered by the QthdBtAdr2 column
 * @method     ChildQuote findOneByQthdbtadr3(string $QthdBtAdr3) Return the first ChildQuote filtered by the QthdBtAdr3 column
 * @method     ChildQuote findOneByQthdbtctry(string $QthdBtCtry) Return the first ChildQuote filtered by the QthdBtCtry column
 * @method     ChildQuote findOneByQthdbtcity(string $QthdBtCity) Return the first ChildQuote filtered by the QthdBtCity column
 * @method     ChildQuote findOneByQthdbtstat(string $QthdBtStat) Return the first ChildQuote filtered by the QthdBtStat column
 * @method     ChildQuote findOneByQthdbtzipcode(string $QthdBtZipCode) Return the first ChildQuote filtered by the QthdBtZipCode column
 * @method     ChildQuote findOneByArstshipid(string $ArstShipId) Return the first ChildQuote filtered by the ArstShipId column
 * @method     ChildQuote findOneByQthdstname(string $QthdStName) Return the first ChildQuote filtered by the QthdStName column
 * @method     ChildQuote findOneByQthdstadr1(string $QthdStAdr1) Return the first ChildQuote filtered by the QthdStAdr1 column
 * @method     ChildQuote findOneByQthdstadr2(string $QthdStAdr2) Return the first ChildQuote filtered by the QthdStAdr2 column
 * @method     ChildQuote findOneByQthdstadr3(string $QthdStAdr3) Return the first ChildQuote filtered by the QthdStAdr3 column
 * @method     ChildQuote findOneByQthdstctry(string $QthdStCtry) Return the first ChildQuote filtered by the QthdStCtry column
 * @method     ChildQuote findOneByQthdstcity(string $QthdStCity) Return the first ChildQuote filtered by the QthdStCity column
 * @method     ChildQuote findOneByQthdststat(string $QthdStStat) Return the first ChildQuote filtered by the QthdStStat column
 * @method     ChildQuote findOneByQthdstzipcode(string $QthdStZipCode) Return the first ChildQuote filtered by the QthdStZipCode column
 * @method     ChildQuote findOneByQthdcont(string $QthdCont) Return the first ChildQuote filtered by the QthdCont column
 * @method     ChildQuote findOneByQthdteleintl(string $QthdTeleIntl) Return the first ChildQuote filtered by the QthdTeleIntl column
 * @method     ChildQuote findOneByQthdtelenbr(string $QthdTeleNbr) Return the first ChildQuote filtered by the QthdTeleNbr column
 * @method     ChildQuote findOneByQthdteleext(string $QthdTeleExt) Return the first ChildQuote filtered by the QthdTeleExt column
 * @method     ChildQuote findOneByQthdfaxintl(string $QthdFaxIntl) Return the first ChildQuote filtered by the QthdFaxIntl column
 * @method     ChildQuote findOneByQthdfaxnbr(string $QthdFaxNbr) Return the first ChildQuote filtered by the QthdFaxNbr column
 * @method     ChildQuote findOneByQthdquotdate(string $QthdQuotDate) Return the first ChildQuote filtered by the QthdQuotDate column
 * @method     ChildQuote findOneByQthdrevdate(string $QthdRevDate) Return the first ChildQuote filtered by the QthdRevDate column
 * @method     ChildQuote findOneByQthdexpdate(string $QthdExpDate) Return the first ChildQuote filtered by the QthdExpDate column
 * @method     ChildQuote findOneByArtbpriccode(string $ArtbPricCode) Return the first ChildQuote filtered by the ArtbPricCode column
 * @method     ChildQuote findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildQuote filtered by the ArtbMtaxCode column
 * @method     ChildQuote findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildQuote filtered by the ArtmTermCd column
 * @method     ChildQuote findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildQuote filtered by the ArtbShipVia column
 * @method     ChildQuote findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildQuote filtered by the ArspSalePer1 column
 * @method     ChildQuote findOneByQthdsp1pct(string $QthdSp1Pct) Return the first ChildQuote filtered by the QthdSp1Pct column
 * @method     ChildQuote findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildQuote filtered by the ArspSalePer2 column
 * @method     ChildQuote findOneByQthdsp2pct(string $QthdSp2Pct) Return the first ChildQuote filtered by the QthdSp2Pct column
 * @method     ChildQuote findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildQuote filtered by the ArspSalePer3 column
 * @method     ChildQuote findOneByQthdsp3pct(string $QthdSp3Pct) Return the first ChildQuote filtered by the QthdSp3Pct column
 * @method     ChildQuote findOneByQthdexchctry(string $QthdExchCtry) Return the first ChildQuote filtered by the QthdExchCtry column
 * @method     ChildQuote findOneByQthdexchrate(string $QthdExchRate) Return the first ChildQuote filtered by the QthdExchRate column
 * @method     ChildQuote findOneByQthdtaxsub(string $QthdTaxSub) Return the first ChildQuote filtered by the QthdTaxSub column
 * @method     ChildQuote findOneByQthdnontaxsub(string $QthdNonTaxSub) Return the first ChildQuote filtered by the QthdNonTaxSub column
 * @method     ChildQuote findOneByQthdtaxtot(string $QthdTaxTot) Return the first ChildQuote filtered by the QthdTaxTot column
 * @method     ChildQuote findOneByQthdfrttot(string $QthdFrtTot) Return the first ChildQuote filtered by the QthdFrtTot column
 * @method     ChildQuote findOneByQthdmisctot(string $QthdMiscTot) Return the first ChildQuote filtered by the QthdMiscTot column
 * @method     ChildQuote findOneByQthdordrtot(string $QthdOrdrTot) Return the first ChildQuote filtered by the QthdOrdrTot column
 * @method     ChildQuote findOneByQthdcosttot(string $QthdCostTot) Return the first ChildQuote filtered by the QthdCostTot column
 * @method     ChildQuote findOneByQthdwghttot(string $QthdWghtTot) Return the first ChildQuote filtered by the QthdWghtTot column
 * @method     ChildQuote findOneByQthdoldsysqtnbr(string $QthdOldSysQtNbr) Return the first ChildQuote filtered by the QthdOldSysQtNbr column
 * @method     ChildQuote findOneByQthdfob(string $QthdFob) Return the first ChildQuote filtered by the QthdFob column
 * @method     ChildQuote findOneByQthddeliverydesc(string $QthdDeliveryDesc) Return the first ChildQuote filtered by the QthdDeliveryDesc column
 * @method     ChildQuote findOneByQthdordercnt(int $QthdOrderCnt) Return the first ChildQuote filtered by the QthdOrderCnt column
 * @method     ChildQuote findOneByQthdlastorder(string $QthdLastOrder) Return the first ChildQuote filtered by the QthdLastOrder column
 * @method     ChildQuote findOneByIntbwhse(string $IntbWhse) Return the first ChildQuote filtered by the IntbWhse column
 * @method     ChildQuote findOneByQthdcustpo(string $QthdCustPo) Return the first ChildQuote filtered by the QthdCustPo column
 * @method     ChildQuote findOneByQthdemailaddr(string $QthdEmailAddr) Return the first ChildQuote filtered by the QthdEmailAddr column
 * @method     ChildQuote findOneByQthdenteredby(string $QthdEnteredBy) Return the first ChildQuote filtered by the QthdEnteredBy column
 * @method     ChildQuote findOneByQthdentereddate(string $QthdEnteredDate) Return the first ChildQuote filtered by the QthdEnteredDate column
 * @method     ChildQuote findOneByQthdenteredtime(string $QthdEnteredTime) Return the first ChildQuote filtered by the QthdEnteredTime column
 * @method     ChildQuote findOneByQthdprintformat(string $QthdPrintFormat) Return the first ChildQuote filtered by the QthdPrintFormat column
 * @method     ChildQuote findOneByQthdprojectid(string $QthdProjectId) Return the first ChildQuote filtered by the QthdProjectId column
 * @method     ChildQuote findOneByQthdrevtime(string $QthdRevTime) Return the first ChildQuote filtered by the QthdRevTime column
 * @method     ChildQuote findOneByQthdref(string $QthdRef) Return the first ChildQuote filtered by the QthdRef column
 * @method     ChildQuote findOneByQthdcareof(string $QthdCareOf) Return the first ChildQuote filtered by the QthdCareOf column
 * @method     ChildQuote findOneByDateupdtd(string $DateUpdtd) Return the first ChildQuote filtered by the DateUpdtd column
 * @method     ChildQuote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuote filtered by the TimeUpdtd column
 * @method     ChildQuote findOneByDummy(string $dummy) Return the first ChildQuote filtered by the dummy column *

 * @method     ChildQuote requirePk($key, ConnectionInterface $con = null) Return the ChildQuote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOne(ConnectionInterface $con = null) Return the first ChildQuote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuote requireOneByQthdid(string $QthdId) Return the first ChildQuote filtered by the QthdId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstat(string $QthdStat) Return the first ChildQuote filtered by the QthdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArcucustid(string $ArcuCustId) Return the first ChildQuote filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtname(string $QthdBtName) Return the first ChildQuote filtered by the QthdBtName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtadr1(string $QthdBtAdr1) Return the first ChildQuote filtered by the QthdBtAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtadr2(string $QthdBtAdr2) Return the first ChildQuote filtered by the QthdBtAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtadr3(string $QthdBtAdr3) Return the first ChildQuote filtered by the QthdBtAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtctry(string $QthdBtCtry) Return the first ChildQuote filtered by the QthdBtCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtcity(string $QthdBtCity) Return the first ChildQuote filtered by the QthdBtCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtstat(string $QthdBtStat) Return the first ChildQuote filtered by the QthdBtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdbtzipcode(string $QthdBtZipCode) Return the first ChildQuote filtered by the QthdBtZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArstshipid(string $ArstShipId) Return the first ChildQuote filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstname(string $QthdStName) Return the first ChildQuote filtered by the QthdStName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstadr1(string $QthdStAdr1) Return the first ChildQuote filtered by the QthdStAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstadr2(string $QthdStAdr2) Return the first ChildQuote filtered by the QthdStAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstadr3(string $QthdStAdr3) Return the first ChildQuote filtered by the QthdStAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstctry(string $QthdStCtry) Return the first ChildQuote filtered by the QthdStCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstcity(string $QthdStCity) Return the first ChildQuote filtered by the QthdStCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdststat(string $QthdStStat) Return the first ChildQuote filtered by the QthdStStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdstzipcode(string $QthdStZipCode) Return the first ChildQuote filtered by the QthdStZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdcont(string $QthdCont) Return the first ChildQuote filtered by the QthdCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdteleintl(string $QthdTeleIntl) Return the first ChildQuote filtered by the QthdTeleIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdtelenbr(string $QthdTeleNbr) Return the first ChildQuote filtered by the QthdTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdteleext(string $QthdTeleExt) Return the first ChildQuote filtered by the QthdTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdfaxintl(string $QthdFaxIntl) Return the first ChildQuote filtered by the QthdFaxIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdfaxnbr(string $QthdFaxNbr) Return the first ChildQuote filtered by the QthdFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdquotdate(string $QthdQuotDate) Return the first ChildQuote filtered by the QthdQuotDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdrevdate(string $QthdRevDate) Return the first ChildQuote filtered by the QthdRevDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdexpdate(string $QthdExpDate) Return the first ChildQuote filtered by the QthdExpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArtbpriccode(string $ArtbPricCode) Return the first ChildQuote filtered by the ArtbPricCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildQuote filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildQuote filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildQuote filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildQuote filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdsp1pct(string $QthdSp1Pct) Return the first ChildQuote filtered by the QthdSp1Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildQuote filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdsp2pct(string $QthdSp2Pct) Return the first ChildQuote filtered by the QthdSp2Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildQuote filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdsp3pct(string $QthdSp3Pct) Return the first ChildQuote filtered by the QthdSp3Pct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdexchctry(string $QthdExchCtry) Return the first ChildQuote filtered by the QthdExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdexchrate(string $QthdExchRate) Return the first ChildQuote filtered by the QthdExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdtaxsub(string $QthdTaxSub) Return the first ChildQuote filtered by the QthdTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdnontaxsub(string $QthdNonTaxSub) Return the first ChildQuote filtered by the QthdNonTaxSub column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdtaxtot(string $QthdTaxTot) Return the first ChildQuote filtered by the QthdTaxTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdfrttot(string $QthdFrtTot) Return the first ChildQuote filtered by the QthdFrtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdmisctot(string $QthdMiscTot) Return the first ChildQuote filtered by the QthdMiscTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdordrtot(string $QthdOrdrTot) Return the first ChildQuote filtered by the QthdOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdcosttot(string $QthdCostTot) Return the first ChildQuote filtered by the QthdCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdwghttot(string $QthdWghtTot) Return the first ChildQuote filtered by the QthdWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdoldsysqtnbr(string $QthdOldSysQtNbr) Return the first ChildQuote filtered by the QthdOldSysQtNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdfob(string $QthdFob) Return the first ChildQuote filtered by the QthdFob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthddeliverydesc(string $QthdDeliveryDesc) Return the first ChildQuote filtered by the QthdDeliveryDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdordercnt(int $QthdOrderCnt) Return the first ChildQuote filtered by the QthdOrderCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdlastorder(string $QthdLastOrder) Return the first ChildQuote filtered by the QthdLastOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByIntbwhse(string $IntbWhse) Return the first ChildQuote filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdcustpo(string $QthdCustPo) Return the first ChildQuote filtered by the QthdCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdemailaddr(string $QthdEmailAddr) Return the first ChildQuote filtered by the QthdEmailAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdenteredby(string $QthdEnteredBy) Return the first ChildQuote filtered by the QthdEnteredBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdentereddate(string $QthdEnteredDate) Return the first ChildQuote filtered by the QthdEnteredDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdenteredtime(string $QthdEnteredTime) Return the first ChildQuote filtered by the QthdEnteredTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdprintformat(string $QthdPrintFormat) Return the first ChildQuote filtered by the QthdPrintFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdprojectid(string $QthdProjectId) Return the first ChildQuote filtered by the QthdProjectId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdrevtime(string $QthdRevTime) Return the first ChildQuote filtered by the QthdRevTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdref(string $QthdRef) Return the first ChildQuote filtered by the QthdRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByQthdcareof(string $QthdCareOf) Return the first ChildQuote filtered by the QthdCareOf column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildQuote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuote requireOneByDummy(string $dummy) Return the first ChildQuote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildQuote objects based on current ModelCriteria
 * @method     ChildQuote[]|ObjectCollection findByQthdid(string $QthdId) Return ChildQuote objects filtered by the QthdId column
 * @method     ChildQuote[]|ObjectCollection findByQthdstat(string $QthdStat) Return ChildQuote objects filtered by the QthdStat column
 * @method     ChildQuote[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildQuote objects filtered by the ArcuCustId column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtname(string $QthdBtName) Return ChildQuote objects filtered by the QthdBtName column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtadr1(string $QthdBtAdr1) Return ChildQuote objects filtered by the QthdBtAdr1 column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtadr2(string $QthdBtAdr2) Return ChildQuote objects filtered by the QthdBtAdr2 column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtadr3(string $QthdBtAdr3) Return ChildQuote objects filtered by the QthdBtAdr3 column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtctry(string $QthdBtCtry) Return ChildQuote objects filtered by the QthdBtCtry column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtcity(string $QthdBtCity) Return ChildQuote objects filtered by the QthdBtCity column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtstat(string $QthdBtStat) Return ChildQuote objects filtered by the QthdBtStat column
 * @method     ChildQuote[]|ObjectCollection findByQthdbtzipcode(string $QthdBtZipCode) Return ChildQuote objects filtered by the QthdBtZipCode column
 * @method     ChildQuote[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildQuote objects filtered by the ArstShipId column
 * @method     ChildQuote[]|ObjectCollection findByQthdstname(string $QthdStName) Return ChildQuote objects filtered by the QthdStName column
 * @method     ChildQuote[]|ObjectCollection findByQthdstadr1(string $QthdStAdr1) Return ChildQuote objects filtered by the QthdStAdr1 column
 * @method     ChildQuote[]|ObjectCollection findByQthdstadr2(string $QthdStAdr2) Return ChildQuote objects filtered by the QthdStAdr2 column
 * @method     ChildQuote[]|ObjectCollection findByQthdstadr3(string $QthdStAdr3) Return ChildQuote objects filtered by the QthdStAdr3 column
 * @method     ChildQuote[]|ObjectCollection findByQthdstctry(string $QthdStCtry) Return ChildQuote objects filtered by the QthdStCtry column
 * @method     ChildQuote[]|ObjectCollection findByQthdstcity(string $QthdStCity) Return ChildQuote objects filtered by the QthdStCity column
 * @method     ChildQuote[]|ObjectCollection findByQthdststat(string $QthdStStat) Return ChildQuote objects filtered by the QthdStStat column
 * @method     ChildQuote[]|ObjectCollection findByQthdstzipcode(string $QthdStZipCode) Return ChildQuote objects filtered by the QthdStZipCode column
 * @method     ChildQuote[]|ObjectCollection findByQthdcont(string $QthdCont) Return ChildQuote objects filtered by the QthdCont column
 * @method     ChildQuote[]|ObjectCollection findByQthdteleintl(string $QthdTeleIntl) Return ChildQuote objects filtered by the QthdTeleIntl column
 * @method     ChildQuote[]|ObjectCollection findByQthdtelenbr(string $QthdTeleNbr) Return ChildQuote objects filtered by the QthdTeleNbr column
 * @method     ChildQuote[]|ObjectCollection findByQthdteleext(string $QthdTeleExt) Return ChildQuote objects filtered by the QthdTeleExt column
 * @method     ChildQuote[]|ObjectCollection findByQthdfaxintl(string $QthdFaxIntl) Return ChildQuote objects filtered by the QthdFaxIntl column
 * @method     ChildQuote[]|ObjectCollection findByQthdfaxnbr(string $QthdFaxNbr) Return ChildQuote objects filtered by the QthdFaxNbr column
 * @method     ChildQuote[]|ObjectCollection findByQthdquotdate(string $QthdQuotDate) Return ChildQuote objects filtered by the QthdQuotDate column
 * @method     ChildQuote[]|ObjectCollection findByQthdrevdate(string $QthdRevDate) Return ChildQuote objects filtered by the QthdRevDate column
 * @method     ChildQuote[]|ObjectCollection findByQthdexpdate(string $QthdExpDate) Return ChildQuote objects filtered by the QthdExpDate column
 * @method     ChildQuote[]|ObjectCollection findByArtbpriccode(string $ArtbPricCode) Return ChildQuote objects filtered by the ArtbPricCode column
 * @method     ChildQuote[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildQuote objects filtered by the ArtbMtaxCode column
 * @method     ChildQuote[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildQuote objects filtered by the ArtmTermCd column
 * @method     ChildQuote[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildQuote objects filtered by the ArtbShipVia column
 * @method     ChildQuote[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildQuote objects filtered by the ArspSalePer1 column
 * @method     ChildQuote[]|ObjectCollection findByQthdsp1pct(string $QthdSp1Pct) Return ChildQuote objects filtered by the QthdSp1Pct column
 * @method     ChildQuote[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildQuote objects filtered by the ArspSalePer2 column
 * @method     ChildQuote[]|ObjectCollection findByQthdsp2pct(string $QthdSp2Pct) Return ChildQuote objects filtered by the QthdSp2Pct column
 * @method     ChildQuote[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildQuote objects filtered by the ArspSalePer3 column
 * @method     ChildQuote[]|ObjectCollection findByQthdsp3pct(string $QthdSp3Pct) Return ChildQuote objects filtered by the QthdSp3Pct column
 * @method     ChildQuote[]|ObjectCollection findByQthdexchctry(string $QthdExchCtry) Return ChildQuote objects filtered by the QthdExchCtry column
 * @method     ChildQuote[]|ObjectCollection findByQthdexchrate(string $QthdExchRate) Return ChildQuote objects filtered by the QthdExchRate column
 * @method     ChildQuote[]|ObjectCollection findByQthdtaxsub(string $QthdTaxSub) Return ChildQuote objects filtered by the QthdTaxSub column
 * @method     ChildQuote[]|ObjectCollection findByQthdnontaxsub(string $QthdNonTaxSub) Return ChildQuote objects filtered by the QthdNonTaxSub column
 * @method     ChildQuote[]|ObjectCollection findByQthdtaxtot(string $QthdTaxTot) Return ChildQuote objects filtered by the QthdTaxTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdfrttot(string $QthdFrtTot) Return ChildQuote objects filtered by the QthdFrtTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdmisctot(string $QthdMiscTot) Return ChildQuote objects filtered by the QthdMiscTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdordrtot(string $QthdOrdrTot) Return ChildQuote objects filtered by the QthdOrdrTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdcosttot(string $QthdCostTot) Return ChildQuote objects filtered by the QthdCostTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdwghttot(string $QthdWghtTot) Return ChildQuote objects filtered by the QthdWghtTot column
 * @method     ChildQuote[]|ObjectCollection findByQthdoldsysqtnbr(string $QthdOldSysQtNbr) Return ChildQuote objects filtered by the QthdOldSysQtNbr column
 * @method     ChildQuote[]|ObjectCollection findByQthdfob(string $QthdFob) Return ChildQuote objects filtered by the QthdFob column
 * @method     ChildQuote[]|ObjectCollection findByQthddeliverydesc(string $QthdDeliveryDesc) Return ChildQuote objects filtered by the QthdDeliveryDesc column
 * @method     ChildQuote[]|ObjectCollection findByQthdordercnt(int $QthdOrderCnt) Return ChildQuote objects filtered by the QthdOrderCnt column
 * @method     ChildQuote[]|ObjectCollection findByQthdlastorder(string $QthdLastOrder) Return ChildQuote objects filtered by the QthdLastOrder column
 * @method     ChildQuote[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildQuote objects filtered by the IntbWhse column
 * @method     ChildQuote[]|ObjectCollection findByQthdcustpo(string $QthdCustPo) Return ChildQuote objects filtered by the QthdCustPo column
 * @method     ChildQuote[]|ObjectCollection findByQthdemailaddr(string $QthdEmailAddr) Return ChildQuote objects filtered by the QthdEmailAddr column
 * @method     ChildQuote[]|ObjectCollection findByQthdenteredby(string $QthdEnteredBy) Return ChildQuote objects filtered by the QthdEnteredBy column
 * @method     ChildQuote[]|ObjectCollection findByQthdentereddate(string $QthdEnteredDate) Return ChildQuote objects filtered by the QthdEnteredDate column
 * @method     ChildQuote[]|ObjectCollection findByQthdenteredtime(string $QthdEnteredTime) Return ChildQuote objects filtered by the QthdEnteredTime column
 * @method     ChildQuote[]|ObjectCollection findByQthdprintformat(string $QthdPrintFormat) Return ChildQuote objects filtered by the QthdPrintFormat column
 * @method     ChildQuote[]|ObjectCollection findByQthdprojectid(string $QthdProjectId) Return ChildQuote objects filtered by the QthdProjectId column
 * @method     ChildQuote[]|ObjectCollection findByQthdrevtime(string $QthdRevTime) Return ChildQuote objects filtered by the QthdRevTime column
 * @method     ChildQuote[]|ObjectCollection findByQthdref(string $QthdRef) Return ChildQuote objects filtered by the QthdRef column
 * @method     ChildQuote[]|ObjectCollection findByQthdcareof(string $QthdCareOf) Return ChildQuote objects filtered by the QthdCareOf column
 * @method     ChildQuote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildQuote objects filtered by the DateUpdtd column
 * @method     ChildQuote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildQuote objects filtered by the TimeUpdtd column
 * @method     ChildQuote[]|ObjectCollection findByDummy(string $dummy) Return ChildQuote objects filtered by the dummy column
 * @method     ChildQuote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class QuoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\QuoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Quote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildQuoteQuery) {
            return $criteria;
        }
        $query = new ChildQuoteQuery();
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
     * @return ChildQuote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuoteTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildQuote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QthdId, QthdStat, ArcuCustId, QthdBtName, QthdBtAdr1, QthdBtAdr2, QthdBtAdr3, QthdBtCtry, QthdBtCity, QthdBtStat, QthdBtZipCode, ArstShipId, QthdStName, QthdStAdr1, QthdStAdr2, QthdStAdr3, QthdStCtry, QthdStCity, QthdStStat, QthdStZipCode, QthdCont, QthdTeleIntl, QthdTeleNbr, QthdTeleExt, QthdFaxIntl, QthdFaxNbr, QthdQuotDate, QthdRevDate, QthdExpDate, ArtbPricCode, ArtbMtaxCode, ArtmTermCd, ArtbShipVia, ArspSalePer1, QthdSp1Pct, ArspSalePer2, QthdSp2Pct, ArspSalePer3, QthdSp3Pct, QthdExchCtry, QthdExchRate, QthdTaxSub, QthdNonTaxSub, QthdTaxTot, QthdFrtTot, QthdMiscTot, QthdOrdrTot, QthdCostTot, QthdWghtTot, QthdOldSysQtNbr, QthdFob, QthdDeliveryDesc, QthdOrderCnt, QthdLastOrder, IntbWhse, QthdCustPo, QthdEmailAddr, QthdEnteredBy, QthdEnteredDate, QthdEnteredTime, QthdPrintFormat, QthdProjectId, QthdRevTime, QthdRef, QthdCareOf, DateUpdtd, TimeUpdtd, dummy FROM quote_header WHERE QthdId = :p0';
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
            /** @var ChildQuote $obj */
            $obj = new ChildQuote();
            $obj->hydrate($row);
            QuoteTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildQuote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the QthdId column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdid('fooValue');   // WHERE QthdId = 'fooValue'
     * $query->filterByQthdid('%fooValue%', Criteria::LIKE); // WHERE QthdId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdid($qthdid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDID, $qthdid, $comparison);
    }

    /**
     * Filter the query on the QthdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstat('fooValue');   // WHERE QthdStat = 'fooValue'
     * $query->filterByQthdstat('%fooValue%', Criteria::LIKE); // WHERE QthdStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstat($qthdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTAT, $qthdstat, $comparison);
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the QthdBtName column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtname('fooValue');   // WHERE QthdBtName = 'fooValue'
     * $query->filterByQthdbtname('%fooValue%', Criteria::LIKE); // WHERE QthdBtName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtname($qthdbtname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTNAME, $qthdbtname, $comparison);
    }

    /**
     * Filter the query on the QthdBtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtadr1('fooValue');   // WHERE QthdBtAdr1 = 'fooValue'
     * $query->filterByQthdbtadr1('%fooValue%', Criteria::LIKE); // WHERE QthdBtAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtadr1($qthdbtadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTADR1, $qthdbtadr1, $comparison);
    }

    /**
     * Filter the query on the QthdBtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtadr2('fooValue');   // WHERE QthdBtAdr2 = 'fooValue'
     * $query->filterByQthdbtadr2('%fooValue%', Criteria::LIKE); // WHERE QthdBtAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtadr2($qthdbtadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTADR2, $qthdbtadr2, $comparison);
    }

    /**
     * Filter the query on the QthdBtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtadr3('fooValue');   // WHERE QthdBtAdr3 = 'fooValue'
     * $query->filterByQthdbtadr3('%fooValue%', Criteria::LIKE); // WHERE QthdBtAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtadr3($qthdbtadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTADR3, $qthdbtadr3, $comparison);
    }

    /**
     * Filter the query on the QthdBtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtctry('fooValue');   // WHERE QthdBtCtry = 'fooValue'
     * $query->filterByQthdbtctry('%fooValue%', Criteria::LIKE); // WHERE QthdBtCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtctry($qthdbtctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTCTRY, $qthdbtctry, $comparison);
    }

    /**
     * Filter the query on the QthdBtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtcity('fooValue');   // WHERE QthdBtCity = 'fooValue'
     * $query->filterByQthdbtcity('%fooValue%', Criteria::LIKE); // WHERE QthdBtCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtcity($qthdbtcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTCITY, $qthdbtcity, $comparison);
    }

    /**
     * Filter the query on the QthdBtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtstat('fooValue');   // WHERE QthdBtStat = 'fooValue'
     * $query->filterByQthdbtstat('%fooValue%', Criteria::LIKE); // WHERE QthdBtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtstat($qthdbtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTSTAT, $qthdbtstat, $comparison);
    }

    /**
     * Filter the query on the QthdBtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdbtzipcode('fooValue');   // WHERE QthdBtZipCode = 'fooValue'
     * $query->filterByQthdbtzipcode('%fooValue%', Criteria::LIKE); // WHERE QthdBtZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdbtzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdbtzipcode($qthdbtzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdbtzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDBTZIPCODE, $qthdbtzipcode, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the QthdStName column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstname('fooValue');   // WHERE QthdStName = 'fooValue'
     * $query->filterByQthdstname('%fooValue%', Criteria::LIKE); // WHERE QthdStName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstname($qthdstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTNAME, $qthdstname, $comparison);
    }

    /**
     * Filter the query on the QthdStAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstadr1('fooValue');   // WHERE QthdStAdr1 = 'fooValue'
     * $query->filterByQthdstadr1('%fooValue%', Criteria::LIKE); // WHERE QthdStAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstadr1($qthdstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTADR1, $qthdstadr1, $comparison);
    }

    /**
     * Filter the query on the QthdStAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstadr2('fooValue');   // WHERE QthdStAdr2 = 'fooValue'
     * $query->filterByQthdstadr2('%fooValue%', Criteria::LIKE); // WHERE QthdStAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstadr2($qthdstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTADR2, $qthdstadr2, $comparison);
    }

    /**
     * Filter the query on the QthdStAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstadr3('fooValue');   // WHERE QthdStAdr3 = 'fooValue'
     * $query->filterByQthdstadr3('%fooValue%', Criteria::LIKE); // WHERE QthdStAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstadr3($qthdstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTADR3, $qthdstadr3, $comparison);
    }

    /**
     * Filter the query on the QthdStCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstctry('fooValue');   // WHERE QthdStCtry = 'fooValue'
     * $query->filterByQthdstctry('%fooValue%', Criteria::LIKE); // WHERE QthdStCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstctry($qthdstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTCTRY, $qthdstctry, $comparison);
    }

    /**
     * Filter the query on the QthdStCity column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstcity('fooValue');   // WHERE QthdStCity = 'fooValue'
     * $query->filterByQthdstcity('%fooValue%', Criteria::LIKE); // WHERE QthdStCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstcity($qthdstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTCITY, $qthdstcity, $comparison);
    }

    /**
     * Filter the query on the QthdStStat column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdststat('fooValue');   // WHERE QthdStStat = 'fooValue'
     * $query->filterByQthdststat('%fooValue%', Criteria::LIKE); // WHERE QthdStStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdststat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdststat($qthdststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTSTAT, $qthdststat, $comparison);
    }

    /**
     * Filter the query on the QthdStZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdstzipcode('fooValue');   // WHERE QthdStZipCode = 'fooValue'
     * $query->filterByQthdstzipcode('%fooValue%', Criteria::LIKE); // WHERE QthdStZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdstzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdstzipcode($qthdstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSTZIPCODE, $qthdstzipcode, $comparison);
    }

    /**
     * Filter the query on the QthdCont column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdcont('fooValue');   // WHERE QthdCont = 'fooValue'
     * $query->filterByQthdcont('%fooValue%', Criteria::LIKE); // WHERE QthdCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdcont($qthdcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDCONT, $qthdcont, $comparison);
    }

    /**
     * Filter the query on the QthdTeleIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdteleintl('fooValue');   // WHERE QthdTeleIntl = 'fooValue'
     * $query->filterByQthdteleintl('%fooValue%', Criteria::LIKE); // WHERE QthdTeleIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdteleintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdteleintl($qthdteleintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdteleintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDTELEINTL, $qthdteleintl, $comparison);
    }

    /**
     * Filter the query on the QthdTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdtelenbr('fooValue');   // WHERE QthdTeleNbr = 'fooValue'
     * $query->filterByQthdtelenbr('%fooValue%', Criteria::LIKE); // WHERE QthdTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdtelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdtelenbr($qthdtelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdtelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDTELENBR, $qthdtelenbr, $comparison);
    }

    /**
     * Filter the query on the QthdTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdteleext('fooValue');   // WHERE QthdTeleExt = 'fooValue'
     * $query->filterByQthdteleext('%fooValue%', Criteria::LIKE); // WHERE QthdTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdteleext($qthdteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDTELEEXT, $qthdteleext, $comparison);
    }

    /**
     * Filter the query on the QthdFaxIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdfaxintl('fooValue');   // WHERE QthdFaxIntl = 'fooValue'
     * $query->filterByQthdfaxintl('%fooValue%', Criteria::LIKE); // WHERE QthdFaxIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdfaxintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdfaxintl($qthdfaxintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdfaxintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDFAXINTL, $qthdfaxintl, $comparison);
    }

    /**
     * Filter the query on the QthdFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdfaxnbr('fooValue');   // WHERE QthdFaxNbr = 'fooValue'
     * $query->filterByQthdfaxnbr('%fooValue%', Criteria::LIKE); // WHERE QthdFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdfaxnbr($qthdfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDFAXNBR, $qthdfaxnbr, $comparison);
    }

    /**
     * Filter the query on the QthdQuotDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdquotdate('fooValue');   // WHERE QthdQuotDate = 'fooValue'
     * $query->filterByQthdquotdate('%fooValue%', Criteria::LIKE); // WHERE QthdQuotDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdquotdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdquotdate($qthdquotdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdquotdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDQUOTDATE, $qthdquotdate, $comparison);
    }

    /**
     * Filter the query on the QthdRevDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdrevdate('fooValue');   // WHERE QthdRevDate = 'fooValue'
     * $query->filterByQthdrevdate('%fooValue%', Criteria::LIKE); // WHERE QthdRevDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdrevdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdrevdate($qthdrevdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdrevdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDREVDATE, $qthdrevdate, $comparison);
    }

    /**
     * Filter the query on the QthdExpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdexpdate('fooValue');   // WHERE QthdExpDate = 'fooValue'
     * $query->filterByQthdexpdate('%fooValue%', Criteria::LIKE); // WHERE QthdExpDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdexpdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdexpdate($qthdexpdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdexpdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDEXPDATE, $qthdexpdate, $comparison);
    }

    /**
     * Filter the query on the ArtbPricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpriccode('fooValue');   // WHERE ArtbPricCode = 'fooValue'
     * $query->filterByArtbpriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbPricCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpriccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArtbpriccode($artbpriccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpriccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARTBPRICCODE, $artbpriccode, $comparison);
    }

    /**
     * Filter the query on the ArtbMtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxcode('fooValue');   // WHERE ArtbMtaxCode = 'fooValue'
     * $query->filterByArtbmtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbmtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbshipvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the QthdSp1Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdsp1pct(1234); // WHERE QthdSp1Pct = 1234
     * $query->filterByQthdsp1pct(array(12, 34)); // WHERE QthdSp1Pct IN (12, 34)
     * $query->filterByQthdsp1pct(array('min' => 12)); // WHERE QthdSp1Pct > 12
     * </code>
     *
     * @param     mixed $qthdsp1pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdsp1pct($qthdsp1pct = null, $comparison = null)
    {
        if (is_array($qthdsp1pct)) {
            $useMinMax = false;
            if (isset($qthdsp1pct['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP1PCT, $qthdsp1pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdsp1pct['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP1PCT, $qthdsp1pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSP1PCT, $qthdsp1pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the QthdSp2Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdsp2pct(1234); // WHERE QthdSp2Pct = 1234
     * $query->filterByQthdsp2pct(array(12, 34)); // WHERE QthdSp2Pct IN (12, 34)
     * $query->filterByQthdsp2pct(array('min' => 12)); // WHERE QthdSp2Pct > 12
     * </code>
     *
     * @param     mixed $qthdsp2pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdsp2pct($qthdsp2pct = null, $comparison = null)
    {
        if (is_array($qthdsp2pct)) {
            $useMinMax = false;
            if (isset($qthdsp2pct['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP2PCT, $qthdsp2pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdsp2pct['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP2PCT, $qthdsp2pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSP2PCT, $qthdsp2pct, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the QthdSp3Pct column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdsp3pct(1234); // WHERE QthdSp3Pct = 1234
     * $query->filterByQthdsp3pct(array(12, 34)); // WHERE QthdSp3Pct IN (12, 34)
     * $query->filterByQthdsp3pct(array('min' => 12)); // WHERE QthdSp3Pct > 12
     * </code>
     *
     * @param     mixed $qthdsp3pct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdsp3pct($qthdsp3pct = null, $comparison = null)
    {
        if (is_array($qthdsp3pct)) {
            $useMinMax = false;
            if (isset($qthdsp3pct['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP3PCT, $qthdsp3pct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdsp3pct['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDSP3PCT, $qthdsp3pct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDSP3PCT, $qthdsp3pct, $comparison);
    }

    /**
     * Filter the query on the QthdExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdexchctry('fooValue');   // WHERE QthdExchCtry = 'fooValue'
     * $query->filterByQthdexchctry('%fooValue%', Criteria::LIKE); // WHERE QthdExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdexchctry($qthdexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDEXCHCTRY, $qthdexchctry, $comparison);
    }

    /**
     * Filter the query on the QthdExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdexchrate(1234); // WHERE QthdExchRate = 1234
     * $query->filterByQthdexchrate(array(12, 34)); // WHERE QthdExchRate IN (12, 34)
     * $query->filterByQthdexchrate(array('min' => 12)); // WHERE QthdExchRate > 12
     * </code>
     *
     * @param     mixed $qthdexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdexchrate($qthdexchrate = null, $comparison = null)
    {
        if (is_array($qthdexchrate)) {
            $useMinMax = false;
            if (isset($qthdexchrate['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDEXCHRATE, $qthdexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdexchrate['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDEXCHRATE, $qthdexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDEXCHRATE, $qthdexchrate, $comparison);
    }

    /**
     * Filter the query on the QthdTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdtaxsub(1234); // WHERE QthdTaxSub = 1234
     * $query->filterByQthdtaxsub(array(12, 34)); // WHERE QthdTaxSub IN (12, 34)
     * $query->filterByQthdtaxsub(array('min' => 12)); // WHERE QthdTaxSub > 12
     * </code>
     *
     * @param     mixed $qthdtaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdtaxsub($qthdtaxsub = null, $comparison = null)
    {
        if (is_array($qthdtaxsub)) {
            $useMinMax = false;
            if (isset($qthdtaxsub['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXSUB, $qthdtaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdtaxsub['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXSUB, $qthdtaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXSUB, $qthdtaxsub, $comparison);
    }

    /**
     * Filter the query on the QthdNonTaxSub column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdnontaxsub(1234); // WHERE QthdNonTaxSub = 1234
     * $query->filterByQthdnontaxsub(array(12, 34)); // WHERE QthdNonTaxSub IN (12, 34)
     * $query->filterByQthdnontaxsub(array('min' => 12)); // WHERE QthdNonTaxSub > 12
     * </code>
     *
     * @param     mixed $qthdnontaxsub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdnontaxsub($qthdnontaxsub = null, $comparison = null)
    {
        if (is_array($qthdnontaxsub)) {
            $useMinMax = false;
            if (isset($qthdnontaxsub['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDNONTAXSUB, $qthdnontaxsub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdnontaxsub['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDNONTAXSUB, $qthdnontaxsub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDNONTAXSUB, $qthdnontaxsub, $comparison);
    }

    /**
     * Filter the query on the QthdTaxTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdtaxtot(1234); // WHERE QthdTaxTot = 1234
     * $query->filterByQthdtaxtot(array(12, 34)); // WHERE QthdTaxTot IN (12, 34)
     * $query->filterByQthdtaxtot(array('min' => 12)); // WHERE QthdTaxTot > 12
     * </code>
     *
     * @param     mixed $qthdtaxtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdtaxtot($qthdtaxtot = null, $comparison = null)
    {
        if (is_array($qthdtaxtot)) {
            $useMinMax = false;
            if (isset($qthdtaxtot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXTOT, $qthdtaxtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdtaxtot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXTOT, $qthdtaxtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDTAXTOT, $qthdtaxtot, $comparison);
    }

    /**
     * Filter the query on the QthdFrtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdfrttot(1234); // WHERE QthdFrtTot = 1234
     * $query->filterByQthdfrttot(array(12, 34)); // WHERE QthdFrtTot IN (12, 34)
     * $query->filterByQthdfrttot(array('min' => 12)); // WHERE QthdFrtTot > 12
     * </code>
     *
     * @param     mixed $qthdfrttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdfrttot($qthdfrttot = null, $comparison = null)
    {
        if (is_array($qthdfrttot)) {
            $useMinMax = false;
            if (isset($qthdfrttot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDFRTTOT, $qthdfrttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdfrttot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDFRTTOT, $qthdfrttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDFRTTOT, $qthdfrttot, $comparison);
    }

    /**
     * Filter the query on the QthdMiscTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdmisctot(1234); // WHERE QthdMiscTot = 1234
     * $query->filterByQthdmisctot(array(12, 34)); // WHERE QthdMiscTot IN (12, 34)
     * $query->filterByQthdmisctot(array('min' => 12)); // WHERE QthdMiscTot > 12
     * </code>
     *
     * @param     mixed $qthdmisctot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdmisctot($qthdmisctot = null, $comparison = null)
    {
        if (is_array($qthdmisctot)) {
            $useMinMax = false;
            if (isset($qthdmisctot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDMISCTOT, $qthdmisctot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdmisctot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDMISCTOT, $qthdmisctot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDMISCTOT, $qthdmisctot, $comparison);
    }

    /**
     * Filter the query on the QthdOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdordrtot(1234); // WHERE QthdOrdrTot = 1234
     * $query->filterByQthdordrtot(array(12, 34)); // WHERE QthdOrdrTot IN (12, 34)
     * $query->filterByQthdordrtot(array('min' => 12)); // WHERE QthdOrdrTot > 12
     * </code>
     *
     * @param     mixed $qthdordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdordrtot($qthdordrtot = null, $comparison = null)
    {
        if (is_array($qthdordrtot)) {
            $useMinMax = false;
            if (isset($qthdordrtot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDORDRTOT, $qthdordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdordrtot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDORDRTOT, $qthdordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDORDRTOT, $qthdordrtot, $comparison);
    }

    /**
     * Filter the query on the QthdCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdcosttot(1234); // WHERE QthdCostTot = 1234
     * $query->filterByQthdcosttot(array(12, 34)); // WHERE QthdCostTot IN (12, 34)
     * $query->filterByQthdcosttot(array('min' => 12)); // WHERE QthdCostTot > 12
     * </code>
     *
     * @param     mixed $qthdcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdcosttot($qthdcosttot = null, $comparison = null)
    {
        if (is_array($qthdcosttot)) {
            $useMinMax = false;
            if (isset($qthdcosttot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDCOSTTOT, $qthdcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdcosttot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDCOSTTOT, $qthdcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDCOSTTOT, $qthdcosttot, $comparison);
    }

    /**
     * Filter the query on the QthdWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdwghttot(1234); // WHERE QthdWghtTot = 1234
     * $query->filterByQthdwghttot(array(12, 34)); // WHERE QthdWghtTot IN (12, 34)
     * $query->filterByQthdwghttot(array('min' => 12)); // WHERE QthdWghtTot > 12
     * </code>
     *
     * @param     mixed $qthdwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdwghttot($qthdwghttot = null, $comparison = null)
    {
        if (is_array($qthdwghttot)) {
            $useMinMax = false;
            if (isset($qthdwghttot['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDWGHTTOT, $qthdwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdwghttot['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDWGHTTOT, $qthdwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDWGHTTOT, $qthdwghttot, $comparison);
    }

    /**
     * Filter the query on the QthdOldSysQtNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdoldsysqtnbr('fooValue');   // WHERE QthdOldSysQtNbr = 'fooValue'
     * $query->filterByQthdoldsysqtnbr('%fooValue%', Criteria::LIKE); // WHERE QthdOldSysQtNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdoldsysqtnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdoldsysqtnbr($qthdoldsysqtnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdoldsysqtnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDOLDSYSQTNBR, $qthdoldsysqtnbr, $comparison);
    }

    /**
     * Filter the query on the QthdFob column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdfob('fooValue');   // WHERE QthdFob = 'fooValue'
     * $query->filterByQthdfob('%fooValue%', Criteria::LIKE); // WHERE QthdFob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdfob The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdfob($qthdfob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdfob)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDFOB, $qthdfob, $comparison);
    }

    /**
     * Filter the query on the QthdDeliveryDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQthddeliverydesc('fooValue');   // WHERE QthdDeliveryDesc = 'fooValue'
     * $query->filterByQthddeliverydesc('%fooValue%', Criteria::LIKE); // WHERE QthdDeliveryDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthddeliverydesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthddeliverydesc($qthddeliverydesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthddeliverydesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDDELIVERYDESC, $qthddeliverydesc, $comparison);
    }

    /**
     * Filter the query on the QthdOrderCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdordercnt(1234); // WHERE QthdOrderCnt = 1234
     * $query->filterByQthdordercnt(array(12, 34)); // WHERE QthdOrderCnt IN (12, 34)
     * $query->filterByQthdordercnt(array('min' => 12)); // WHERE QthdOrderCnt > 12
     * </code>
     *
     * @param     mixed $qthdordercnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdordercnt($qthdordercnt = null, $comparison = null)
    {
        if (is_array($qthdordercnt)) {
            $useMinMax = false;
            if (isset($qthdordercnt['min'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDORDERCNT, $qthdordercnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qthdordercnt['max'])) {
                $this->addUsingAlias(QuoteTableMap::COL_QTHDORDERCNT, $qthdordercnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDORDERCNT, $qthdordercnt, $comparison);
    }

    /**
     * Filter the query on the QthdLastOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdlastorder('fooValue');   // WHERE QthdLastOrder = 'fooValue'
     * $query->filterByQthdlastorder('%fooValue%', Criteria::LIKE); // WHERE QthdLastOrder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdlastorder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdlastorder($qthdlastorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdlastorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDLASTORDER, $qthdlastorder, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the QthdCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdcustpo('fooValue');   // WHERE QthdCustPo = 'fooValue'
     * $query->filterByQthdcustpo('%fooValue%', Criteria::LIKE); // WHERE QthdCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdcustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdcustpo($qthdcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDCUSTPO, $qthdcustpo, $comparison);
    }

    /**
     * Filter the query on the QthdEmailAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdemailaddr('fooValue');   // WHERE QthdEmailAddr = 'fooValue'
     * $query->filterByQthdemailaddr('%fooValue%', Criteria::LIKE); // WHERE QthdEmailAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdemailaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdemailaddr($qthdemailaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdemailaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDEMAILADDR, $qthdemailaddr, $comparison);
    }

    /**
     * Filter the query on the QthdEnteredBy column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdenteredby('fooValue');   // WHERE QthdEnteredBy = 'fooValue'
     * $query->filterByQthdenteredby('%fooValue%', Criteria::LIKE); // WHERE QthdEnteredBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdenteredby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdenteredby($qthdenteredby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdenteredby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDENTEREDBY, $qthdenteredby, $comparison);
    }

    /**
     * Filter the query on the QthdEnteredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdentereddate('fooValue');   // WHERE QthdEnteredDate = 'fooValue'
     * $query->filterByQthdentereddate('%fooValue%', Criteria::LIKE); // WHERE QthdEnteredDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdentereddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdentereddate($qthdentereddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdentereddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDENTEREDDATE, $qthdentereddate, $comparison);
    }

    /**
     * Filter the query on the QthdEnteredTime column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdenteredtime('fooValue');   // WHERE QthdEnteredTime = 'fooValue'
     * $query->filterByQthdenteredtime('%fooValue%', Criteria::LIKE); // WHERE QthdEnteredTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdenteredtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdenteredtime($qthdenteredtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdenteredtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDENTEREDTIME, $qthdenteredtime, $comparison);
    }

    /**
     * Filter the query on the QthdPrintFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdprintformat('fooValue');   // WHERE QthdPrintFormat = 'fooValue'
     * $query->filterByQthdprintformat('%fooValue%', Criteria::LIKE); // WHERE QthdPrintFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdprintformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdprintformat($qthdprintformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdprintformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDPRINTFORMAT, $qthdprintformat, $comparison);
    }

    /**
     * Filter the query on the QthdProjectId column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdprojectid('fooValue');   // WHERE QthdProjectId = 'fooValue'
     * $query->filterByQthdprojectid('%fooValue%', Criteria::LIKE); // WHERE QthdProjectId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdprojectid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdprojectid($qthdprojectid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdprojectid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDPROJECTID, $qthdprojectid, $comparison);
    }

    /**
     * Filter the query on the QthdRevTime column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdrevtime('fooValue');   // WHERE QthdRevTime = 'fooValue'
     * $query->filterByQthdrevtime('%fooValue%', Criteria::LIKE); // WHERE QthdRevTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdrevtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdrevtime($qthdrevtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdrevtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDREVTIME, $qthdrevtime, $comparison);
    }

    /**
     * Filter the query on the QthdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdref('fooValue');   // WHERE QthdRef = 'fooValue'
     * $query->filterByQthdref('%fooValue%', Criteria::LIKE); // WHERE QthdRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdref($qthdref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDREF, $qthdref, $comparison);
    }

    /**
     * Filter the query on the QthdCareOf column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdcareof('fooValue');   // WHERE QthdCareOf = 'fooValue'
     * $query->filterByQthdcareof('%fooValue%', Criteria::LIKE); // WHERE QthdCareOf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdcareof The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByQthdcareof($qthdcareof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdcareof)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_QTHDCAREOF, $qthdcareof, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildQuote $quote Object to remove from the list of results
     *
     * @return $this|ChildQuoteQuery The current query, for fluid interface
     */
    public function prune($quote = null)
    {
        if ($quote) {
            $this->addUsingAlias(QuoteTableMap::COL_QTHDID, $quote->getQthdid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the quote_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuoteTableMap::clearInstancePool();
            QuoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // QuoteQuery
