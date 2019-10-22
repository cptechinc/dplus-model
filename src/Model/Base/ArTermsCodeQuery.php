<?php

namespace Base;

use \ArTermsCode as ChildArTermsCode;
use \ArTermsCodeQuery as ChildArTermsCodeQuery;
use \Exception;
use \PDO;
use Map\ArTermsCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_term_code' table.
 *
 *
 *
 * @method     ChildArTermsCodeQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildArTermsCodeQuery orderByArtmtermdesc($order = Criteria::ASC) Order by the ArtmTermDesc column
 * @method     ChildArTermsCodeQuery orderByArtmmethod($order = Criteria::ASC) Order by the ArtmMethod column
 * @method     ChildArTermsCodeQuery orderByArtmtype($order = Criteria::ASC) Order by the ArtmType column
 * @method     ChildArTermsCodeQuery orderByArtmhold($order = Criteria::ASC) Order by the ArtmHold column
 * @method     ChildArTermsCodeQuery orderByArtmexpiredate($order = Criteria::ASC) Order by the ArtmExpireDate column
 * @method     ChildArTermsCodeQuery orderByArtmfrtallow($order = Criteria::ASC) Order by the ArtmFrtAllow column
 * @method     ChildArTermsCodeQuery orderByArtmccprefix($order = Criteria::ASC) Order by the ArtmCcPrefix column
 * @method     ChildArTermsCodeQuery orderByArtmsplit1($order = Criteria::ASC) Order by the ArtmSplit1 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct1($order = Criteria::ASC) Order by the ArtmOrderPct1 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct1($order = Criteria::ASC) Order by the ArtmDiscPct1 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays1($order = Criteria::ASC) Order by the ArtmDiscDays1 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday1($order = Criteria::ASC) Order by the ArtmDiscDay1 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate1($order = Criteria::ASC) Order by the ArtmDiscDate1 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays1($order = Criteria::ASC) Order by the ArtmDueDays1 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday1($order = Criteria::ASC) Order by the ArtmDueDay1 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths1($order = Criteria::ASC) Order by the ArtmPlusMonths1 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate1($order = Criteria::ASC) Order by the ArtmDueDate1 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear1($order = Criteria::ASC) Order by the ArtmPlusYear1 column
 * @method     ChildArTermsCodeQuery orderByArtmsplit2($order = Criteria::ASC) Order by the ArtmSplit2 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct2($order = Criteria::ASC) Order by the ArtmOrderPct2 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct2($order = Criteria::ASC) Order by the ArtmDiscPct2 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays2($order = Criteria::ASC) Order by the ArtmDiscDays2 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday2($order = Criteria::ASC) Order by the ArtmDiscDay2 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate2($order = Criteria::ASC) Order by the ArtmDiscDate2 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays2($order = Criteria::ASC) Order by the ArtmDueDays2 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday2($order = Criteria::ASC) Order by the ArtmDueDay2 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths2($order = Criteria::ASC) Order by the ArtmPlusMonths2 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate2($order = Criteria::ASC) Order by the ArtmDueDate2 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear2($order = Criteria::ASC) Order by the ArtmPlusYear2 column
 * @method     ChildArTermsCodeQuery orderByArtmsplit3($order = Criteria::ASC) Order by the ArtmSplit3 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct3($order = Criteria::ASC) Order by the ArtmOrderPct3 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct3($order = Criteria::ASC) Order by the ArtmDiscPct3 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays3($order = Criteria::ASC) Order by the ArtmDiscDays3 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday3($order = Criteria::ASC) Order by the ArtmDiscDay3 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate3($order = Criteria::ASC) Order by the ArtmDiscDate3 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays3($order = Criteria::ASC) Order by the ArtmDueDays3 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday3($order = Criteria::ASC) Order by the ArtmDueDay3 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths3($order = Criteria::ASC) Order by the ArtmPlusMonths3 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate3($order = Criteria::ASC) Order by the ArtmDueDate3 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear3($order = Criteria::ASC) Order by the ArtmPlusYear3 column
 * @method     ChildArTermsCodeQuery orderByArtmsplit4($order = Criteria::ASC) Order by the ArtmSplit4 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct4($order = Criteria::ASC) Order by the ArtmOrderPct4 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct4($order = Criteria::ASC) Order by the ArtmDiscPct4 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays4($order = Criteria::ASC) Order by the ArtmDiscDays4 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday4($order = Criteria::ASC) Order by the ArtmDiscDay4 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate4($order = Criteria::ASC) Order by the ArtmDiscDate4 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays4($order = Criteria::ASC) Order by the ArtmDueDays4 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday4($order = Criteria::ASC) Order by the ArtmDueDay4 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths4($order = Criteria::ASC) Order by the ArtmPlusMonths4 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate4($order = Criteria::ASC) Order by the ArtmDueDate4 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear4($order = Criteria::ASC) Order by the ArtmPlusYear4 column
 * @method     ChildArTermsCodeQuery orderByArtmsplit5($order = Criteria::ASC) Order by the ArtmSplit5 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct5($order = Criteria::ASC) Order by the ArtmOrderPct5 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct5($order = Criteria::ASC) Order by the ArtmDiscPct5 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays5($order = Criteria::ASC) Order by the ArtmDiscDays5 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday5($order = Criteria::ASC) Order by the ArtmDiscDay5 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate5($order = Criteria::ASC) Order by the ArtmDiscDate5 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays5($order = Criteria::ASC) Order by the ArtmDueDays5 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday5($order = Criteria::ASC) Order by the ArtmDueDay5 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths5($order = Criteria::ASC) Order by the ArtmPlusMonths5 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate5($order = Criteria::ASC) Order by the ArtmDueDate5 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear5($order = Criteria::ASC) Order by the ArtmPlusYear5 column
 * @method     ChildArTermsCodeQuery orderByArtmsplit6($order = Criteria::ASC) Order by the ArtmSplit6 column
 * @method     ChildArTermsCodeQuery orderByArtmorderpct6($order = Criteria::ASC) Order by the ArtmOrderPct6 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscpct6($order = Criteria::ASC) Order by the ArtmDiscPct6 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdays6($order = Criteria::ASC) Order by the ArtmDiscDays6 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscday6($order = Criteria::ASC) Order by the ArtmDiscDay6 column
 * @method     ChildArTermsCodeQuery orderByArtmdiscdate6($order = Criteria::ASC) Order by the ArtmDiscDate6 column
 * @method     ChildArTermsCodeQuery orderByArtmduedays6($order = Criteria::ASC) Order by the ArtmDueDays6 column
 * @method     ChildArTermsCodeQuery orderByArtmdueday6($order = Criteria::ASC) Order by the ArtmDueDay6 column
 * @method     ChildArTermsCodeQuery orderByArtmplusmonths6($order = Criteria::ASC) Order by the ArtmPlusMonths6 column
 * @method     ChildArTermsCodeQuery orderByArtmduedate6($order = Criteria::ASC) Order by the ArtmDueDate6 column
 * @method     ChildArTermsCodeQuery orderByArtmplusyear6($order = Criteria::ASC) Order by the ArtmPlusYear6 column
 * @method     ChildArTermsCodeQuery orderByArtmdayfrom1($order = Criteria::ASC) Order by the ArtmDayFrom1 column
 * @method     ChildArTermsCodeQuery orderByArtmdaythru1($order = Criteria::ASC) Order by the ArtmDayThru1 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscpct1($order = Criteria::ASC) Order by the ArtmEomDiscPct1 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscday1($order = Criteria::ASC) Order by the ArtmEomDiscDay1 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscmonths1($order = Criteria::ASC) Order by the ArtmEomDiscMonths1 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdueday1($order = Criteria::ASC) Order by the ArtmEomDueDay1 column
 * @method     ChildArTermsCodeQuery orderByArtmeomplusmonths1($order = Criteria::ASC) Order by the ArtmEomPlusMonths1 column
 * @method     ChildArTermsCodeQuery orderByArtmdayfrom2($order = Criteria::ASC) Order by the ArtmDayFrom2 column
 * @method     ChildArTermsCodeQuery orderByArtmdaythru2($order = Criteria::ASC) Order by the ArtmDayThru2 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscpct2($order = Criteria::ASC) Order by the ArtmEomDiscPct2 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscday2($order = Criteria::ASC) Order by the ArtmEomDiscDay2 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscmonths2($order = Criteria::ASC) Order by the ArtmEomDiscMonths2 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdueday2($order = Criteria::ASC) Order by the ArtmEomDueDay2 column
 * @method     ChildArTermsCodeQuery orderByArtmeomplusmonths2($order = Criteria::ASC) Order by the ArtmEomPlusMonths2 column
 * @method     ChildArTermsCodeQuery orderByArtmdayfrom3($order = Criteria::ASC) Order by the ArtmDayFrom3 column
 * @method     ChildArTermsCodeQuery orderByArtmdaythru3($order = Criteria::ASC) Order by the ArtmDayThru3 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscpct3($order = Criteria::ASC) Order by the ArtmEomDiscPct3 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscday3($order = Criteria::ASC) Order by the ArtmEomDiscDay3 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdiscmonths3($order = Criteria::ASC) Order by the ArtmEomDiscMonths3 column
 * @method     ChildArTermsCodeQuery orderByArtmeomdueday3($order = Criteria::ASC) Order by the ArtmEomDueDay3 column
 * @method     ChildArTermsCodeQuery orderByArtmeomplusmonths3($order = Criteria::ASC) Order by the ArtmEomPlusMonths3 column
 * @method     ChildArTermsCodeQuery orderByArtmctry($order = Criteria::ASC) Order by the ArtmCtry column
 * @method     ChildArTermsCodeQuery orderByArtmtermgrup($order = Criteria::ASC) Order by the ArtmTermGrup column
 * @method     ChildArTermsCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArTermsCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArTermsCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArTermsCodeQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildArTermsCodeQuery groupByArtmtermdesc() Group by the ArtmTermDesc column
 * @method     ChildArTermsCodeQuery groupByArtmmethod() Group by the ArtmMethod column
 * @method     ChildArTermsCodeQuery groupByArtmtype() Group by the ArtmType column
 * @method     ChildArTermsCodeQuery groupByArtmhold() Group by the ArtmHold column
 * @method     ChildArTermsCodeQuery groupByArtmexpiredate() Group by the ArtmExpireDate column
 * @method     ChildArTermsCodeQuery groupByArtmfrtallow() Group by the ArtmFrtAllow column
 * @method     ChildArTermsCodeQuery groupByArtmccprefix() Group by the ArtmCcPrefix column
 * @method     ChildArTermsCodeQuery groupByArtmsplit1() Group by the ArtmSplit1 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct1() Group by the ArtmOrderPct1 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct1() Group by the ArtmDiscPct1 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays1() Group by the ArtmDiscDays1 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday1() Group by the ArtmDiscDay1 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate1() Group by the ArtmDiscDate1 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays1() Group by the ArtmDueDays1 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday1() Group by the ArtmDueDay1 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths1() Group by the ArtmPlusMonths1 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate1() Group by the ArtmDueDate1 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear1() Group by the ArtmPlusYear1 column
 * @method     ChildArTermsCodeQuery groupByArtmsplit2() Group by the ArtmSplit2 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct2() Group by the ArtmOrderPct2 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct2() Group by the ArtmDiscPct2 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays2() Group by the ArtmDiscDays2 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday2() Group by the ArtmDiscDay2 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate2() Group by the ArtmDiscDate2 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays2() Group by the ArtmDueDays2 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday2() Group by the ArtmDueDay2 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths2() Group by the ArtmPlusMonths2 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate2() Group by the ArtmDueDate2 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear2() Group by the ArtmPlusYear2 column
 * @method     ChildArTermsCodeQuery groupByArtmsplit3() Group by the ArtmSplit3 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct3() Group by the ArtmOrderPct3 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct3() Group by the ArtmDiscPct3 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays3() Group by the ArtmDiscDays3 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday3() Group by the ArtmDiscDay3 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate3() Group by the ArtmDiscDate3 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays3() Group by the ArtmDueDays3 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday3() Group by the ArtmDueDay3 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths3() Group by the ArtmPlusMonths3 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate3() Group by the ArtmDueDate3 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear3() Group by the ArtmPlusYear3 column
 * @method     ChildArTermsCodeQuery groupByArtmsplit4() Group by the ArtmSplit4 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct4() Group by the ArtmOrderPct4 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct4() Group by the ArtmDiscPct4 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays4() Group by the ArtmDiscDays4 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday4() Group by the ArtmDiscDay4 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate4() Group by the ArtmDiscDate4 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays4() Group by the ArtmDueDays4 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday4() Group by the ArtmDueDay4 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths4() Group by the ArtmPlusMonths4 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate4() Group by the ArtmDueDate4 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear4() Group by the ArtmPlusYear4 column
 * @method     ChildArTermsCodeQuery groupByArtmsplit5() Group by the ArtmSplit5 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct5() Group by the ArtmOrderPct5 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct5() Group by the ArtmDiscPct5 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays5() Group by the ArtmDiscDays5 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday5() Group by the ArtmDiscDay5 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate5() Group by the ArtmDiscDate5 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays5() Group by the ArtmDueDays5 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday5() Group by the ArtmDueDay5 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths5() Group by the ArtmPlusMonths5 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate5() Group by the ArtmDueDate5 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear5() Group by the ArtmPlusYear5 column
 * @method     ChildArTermsCodeQuery groupByArtmsplit6() Group by the ArtmSplit6 column
 * @method     ChildArTermsCodeQuery groupByArtmorderpct6() Group by the ArtmOrderPct6 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscpct6() Group by the ArtmDiscPct6 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdays6() Group by the ArtmDiscDays6 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscday6() Group by the ArtmDiscDay6 column
 * @method     ChildArTermsCodeQuery groupByArtmdiscdate6() Group by the ArtmDiscDate6 column
 * @method     ChildArTermsCodeQuery groupByArtmduedays6() Group by the ArtmDueDays6 column
 * @method     ChildArTermsCodeQuery groupByArtmdueday6() Group by the ArtmDueDay6 column
 * @method     ChildArTermsCodeQuery groupByArtmplusmonths6() Group by the ArtmPlusMonths6 column
 * @method     ChildArTermsCodeQuery groupByArtmduedate6() Group by the ArtmDueDate6 column
 * @method     ChildArTermsCodeQuery groupByArtmplusyear6() Group by the ArtmPlusYear6 column
 * @method     ChildArTermsCodeQuery groupByArtmdayfrom1() Group by the ArtmDayFrom1 column
 * @method     ChildArTermsCodeQuery groupByArtmdaythru1() Group by the ArtmDayThru1 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscpct1() Group by the ArtmEomDiscPct1 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscday1() Group by the ArtmEomDiscDay1 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscmonths1() Group by the ArtmEomDiscMonths1 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdueday1() Group by the ArtmEomDueDay1 column
 * @method     ChildArTermsCodeQuery groupByArtmeomplusmonths1() Group by the ArtmEomPlusMonths1 column
 * @method     ChildArTermsCodeQuery groupByArtmdayfrom2() Group by the ArtmDayFrom2 column
 * @method     ChildArTermsCodeQuery groupByArtmdaythru2() Group by the ArtmDayThru2 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscpct2() Group by the ArtmEomDiscPct2 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscday2() Group by the ArtmEomDiscDay2 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscmonths2() Group by the ArtmEomDiscMonths2 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdueday2() Group by the ArtmEomDueDay2 column
 * @method     ChildArTermsCodeQuery groupByArtmeomplusmonths2() Group by the ArtmEomPlusMonths2 column
 * @method     ChildArTermsCodeQuery groupByArtmdayfrom3() Group by the ArtmDayFrom3 column
 * @method     ChildArTermsCodeQuery groupByArtmdaythru3() Group by the ArtmDayThru3 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscpct3() Group by the ArtmEomDiscPct3 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscday3() Group by the ArtmEomDiscDay3 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdiscmonths3() Group by the ArtmEomDiscMonths3 column
 * @method     ChildArTermsCodeQuery groupByArtmeomdueday3() Group by the ArtmEomDueDay3 column
 * @method     ChildArTermsCodeQuery groupByArtmeomplusmonths3() Group by the ArtmEomPlusMonths3 column
 * @method     ChildArTermsCodeQuery groupByArtmctry() Group by the ArtmCtry column
 * @method     ChildArTermsCodeQuery groupByArtmtermgrup() Group by the ArtmTermGrup column
 * @method     ChildArTermsCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArTermsCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArTermsCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArTermsCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArTermsCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArTermsCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArTermsCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArTermsCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArTermsCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArTermsCode findOne(ConnectionInterface $con = null) Return the first ChildArTermsCode matching the query
 * @method     ChildArTermsCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArTermsCode matching the query, or a new ChildArTermsCode object populated from the query conditions when no match is found
 *
 * @method     ChildArTermsCode findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildArTermsCode filtered by the ArtmTermCd column
 * @method     ChildArTermsCode findOneByArtmtermdesc(string $ArtmTermDesc) Return the first ChildArTermsCode filtered by the ArtmTermDesc column
 * @method     ChildArTermsCode findOneByArtmmethod(string $ArtmMethod) Return the first ChildArTermsCode filtered by the ArtmMethod column
 * @method     ChildArTermsCode findOneByArtmtype(string $ArtmType) Return the first ChildArTermsCode filtered by the ArtmType column
 * @method     ChildArTermsCode findOneByArtmhold(string $ArtmHold) Return the first ChildArTermsCode filtered by the ArtmHold column
 * @method     ChildArTermsCode findOneByArtmexpiredate(string $ArtmExpireDate) Return the first ChildArTermsCode filtered by the ArtmExpireDate column
 * @method     ChildArTermsCode findOneByArtmfrtallow(string $ArtmFrtAllow) Return the first ChildArTermsCode filtered by the ArtmFrtAllow column
 * @method     ChildArTermsCode findOneByArtmccprefix(string $ArtmCcPrefix) Return the first ChildArTermsCode filtered by the ArtmCcPrefix column
 * @method     ChildArTermsCode findOneByArtmsplit1(string $ArtmSplit1) Return the first ChildArTermsCode filtered by the ArtmSplit1 column
 * @method     ChildArTermsCode findOneByArtmorderpct1(string $ArtmOrderPct1) Return the first ChildArTermsCode filtered by the ArtmOrderPct1 column
 * @method     ChildArTermsCode findOneByArtmdiscpct1(string $ArtmDiscPct1) Return the first ChildArTermsCode filtered by the ArtmDiscPct1 column
 * @method     ChildArTermsCode findOneByArtmdiscdays1(int $ArtmDiscDays1) Return the first ChildArTermsCode filtered by the ArtmDiscDays1 column
 * @method     ChildArTermsCode findOneByArtmdiscday1(string $ArtmDiscDay1) Return the first ChildArTermsCode filtered by the ArtmDiscDay1 column
 * @method     ChildArTermsCode findOneByArtmdiscdate1(string $ArtmDiscDate1) Return the first ChildArTermsCode filtered by the ArtmDiscDate1 column
 * @method     ChildArTermsCode findOneByArtmduedays1(int $ArtmDueDays1) Return the first ChildArTermsCode filtered by the ArtmDueDays1 column
 * @method     ChildArTermsCode findOneByArtmdueday1(string $ArtmDueDay1) Return the first ChildArTermsCode filtered by the ArtmDueDay1 column
 * @method     ChildArTermsCode findOneByArtmplusmonths1(int $ArtmPlusMonths1) Return the first ChildArTermsCode filtered by the ArtmPlusMonths1 column
 * @method     ChildArTermsCode findOneByArtmduedate1(string $ArtmDueDate1) Return the first ChildArTermsCode filtered by the ArtmDueDate1 column
 * @method     ChildArTermsCode findOneByArtmplusyear1(string $ArtmPlusYear1) Return the first ChildArTermsCode filtered by the ArtmPlusYear1 column
 * @method     ChildArTermsCode findOneByArtmsplit2(string $ArtmSplit2) Return the first ChildArTermsCode filtered by the ArtmSplit2 column
 * @method     ChildArTermsCode findOneByArtmorderpct2(string $ArtmOrderPct2) Return the first ChildArTermsCode filtered by the ArtmOrderPct2 column
 * @method     ChildArTermsCode findOneByArtmdiscpct2(string $ArtmDiscPct2) Return the first ChildArTermsCode filtered by the ArtmDiscPct2 column
 * @method     ChildArTermsCode findOneByArtmdiscdays2(int $ArtmDiscDays2) Return the first ChildArTermsCode filtered by the ArtmDiscDays2 column
 * @method     ChildArTermsCode findOneByArtmdiscday2(string $ArtmDiscDay2) Return the first ChildArTermsCode filtered by the ArtmDiscDay2 column
 * @method     ChildArTermsCode findOneByArtmdiscdate2(string $ArtmDiscDate2) Return the first ChildArTermsCode filtered by the ArtmDiscDate2 column
 * @method     ChildArTermsCode findOneByArtmduedays2(int $ArtmDueDays2) Return the first ChildArTermsCode filtered by the ArtmDueDays2 column
 * @method     ChildArTermsCode findOneByArtmdueday2(string $ArtmDueDay2) Return the first ChildArTermsCode filtered by the ArtmDueDay2 column
 * @method     ChildArTermsCode findOneByArtmplusmonths2(int $ArtmPlusMonths2) Return the first ChildArTermsCode filtered by the ArtmPlusMonths2 column
 * @method     ChildArTermsCode findOneByArtmduedate2(string $ArtmDueDate2) Return the first ChildArTermsCode filtered by the ArtmDueDate2 column
 * @method     ChildArTermsCode findOneByArtmplusyear2(string $ArtmPlusYear2) Return the first ChildArTermsCode filtered by the ArtmPlusYear2 column
 * @method     ChildArTermsCode findOneByArtmsplit3(string $ArtmSplit3) Return the first ChildArTermsCode filtered by the ArtmSplit3 column
 * @method     ChildArTermsCode findOneByArtmorderpct3(string $ArtmOrderPct3) Return the first ChildArTermsCode filtered by the ArtmOrderPct3 column
 * @method     ChildArTermsCode findOneByArtmdiscpct3(string $ArtmDiscPct3) Return the first ChildArTermsCode filtered by the ArtmDiscPct3 column
 * @method     ChildArTermsCode findOneByArtmdiscdays3(int $ArtmDiscDays3) Return the first ChildArTermsCode filtered by the ArtmDiscDays3 column
 * @method     ChildArTermsCode findOneByArtmdiscday3(string $ArtmDiscDay3) Return the first ChildArTermsCode filtered by the ArtmDiscDay3 column
 * @method     ChildArTermsCode findOneByArtmdiscdate3(string $ArtmDiscDate3) Return the first ChildArTermsCode filtered by the ArtmDiscDate3 column
 * @method     ChildArTermsCode findOneByArtmduedays3(int $ArtmDueDays3) Return the first ChildArTermsCode filtered by the ArtmDueDays3 column
 * @method     ChildArTermsCode findOneByArtmdueday3(string $ArtmDueDay3) Return the first ChildArTermsCode filtered by the ArtmDueDay3 column
 * @method     ChildArTermsCode findOneByArtmplusmonths3(int $ArtmPlusMonths3) Return the first ChildArTermsCode filtered by the ArtmPlusMonths3 column
 * @method     ChildArTermsCode findOneByArtmduedate3(string $ArtmDueDate3) Return the first ChildArTermsCode filtered by the ArtmDueDate3 column
 * @method     ChildArTermsCode findOneByArtmplusyear3(string $ArtmPlusYear3) Return the first ChildArTermsCode filtered by the ArtmPlusYear3 column
 * @method     ChildArTermsCode findOneByArtmsplit4(string $ArtmSplit4) Return the first ChildArTermsCode filtered by the ArtmSplit4 column
 * @method     ChildArTermsCode findOneByArtmorderpct4(string $ArtmOrderPct4) Return the first ChildArTermsCode filtered by the ArtmOrderPct4 column
 * @method     ChildArTermsCode findOneByArtmdiscpct4(string $ArtmDiscPct4) Return the first ChildArTermsCode filtered by the ArtmDiscPct4 column
 * @method     ChildArTermsCode findOneByArtmdiscdays4(int $ArtmDiscDays4) Return the first ChildArTermsCode filtered by the ArtmDiscDays4 column
 * @method     ChildArTermsCode findOneByArtmdiscday4(string $ArtmDiscDay4) Return the first ChildArTermsCode filtered by the ArtmDiscDay4 column
 * @method     ChildArTermsCode findOneByArtmdiscdate4(string $ArtmDiscDate4) Return the first ChildArTermsCode filtered by the ArtmDiscDate4 column
 * @method     ChildArTermsCode findOneByArtmduedays4(int $ArtmDueDays4) Return the first ChildArTermsCode filtered by the ArtmDueDays4 column
 * @method     ChildArTermsCode findOneByArtmdueday4(string $ArtmDueDay4) Return the first ChildArTermsCode filtered by the ArtmDueDay4 column
 * @method     ChildArTermsCode findOneByArtmplusmonths4(int $ArtmPlusMonths4) Return the first ChildArTermsCode filtered by the ArtmPlusMonths4 column
 * @method     ChildArTermsCode findOneByArtmduedate4(string $ArtmDueDate4) Return the first ChildArTermsCode filtered by the ArtmDueDate4 column
 * @method     ChildArTermsCode findOneByArtmplusyear4(string $ArtmPlusYear4) Return the first ChildArTermsCode filtered by the ArtmPlusYear4 column
 * @method     ChildArTermsCode findOneByArtmsplit5(string $ArtmSplit5) Return the first ChildArTermsCode filtered by the ArtmSplit5 column
 * @method     ChildArTermsCode findOneByArtmorderpct5(string $ArtmOrderPct5) Return the first ChildArTermsCode filtered by the ArtmOrderPct5 column
 * @method     ChildArTermsCode findOneByArtmdiscpct5(string $ArtmDiscPct5) Return the first ChildArTermsCode filtered by the ArtmDiscPct5 column
 * @method     ChildArTermsCode findOneByArtmdiscdays5(int $ArtmDiscDays5) Return the first ChildArTermsCode filtered by the ArtmDiscDays5 column
 * @method     ChildArTermsCode findOneByArtmdiscday5(string $ArtmDiscDay5) Return the first ChildArTermsCode filtered by the ArtmDiscDay5 column
 * @method     ChildArTermsCode findOneByArtmdiscdate5(string $ArtmDiscDate5) Return the first ChildArTermsCode filtered by the ArtmDiscDate5 column
 * @method     ChildArTermsCode findOneByArtmduedays5(int $ArtmDueDays5) Return the first ChildArTermsCode filtered by the ArtmDueDays5 column
 * @method     ChildArTermsCode findOneByArtmdueday5(string $ArtmDueDay5) Return the first ChildArTermsCode filtered by the ArtmDueDay5 column
 * @method     ChildArTermsCode findOneByArtmplusmonths5(int $ArtmPlusMonths5) Return the first ChildArTermsCode filtered by the ArtmPlusMonths5 column
 * @method     ChildArTermsCode findOneByArtmduedate5(string $ArtmDueDate5) Return the first ChildArTermsCode filtered by the ArtmDueDate5 column
 * @method     ChildArTermsCode findOneByArtmplusyear5(string $ArtmPlusYear5) Return the first ChildArTermsCode filtered by the ArtmPlusYear5 column
 * @method     ChildArTermsCode findOneByArtmsplit6(string $ArtmSplit6) Return the first ChildArTermsCode filtered by the ArtmSplit6 column
 * @method     ChildArTermsCode findOneByArtmorderpct6(string $ArtmOrderPct6) Return the first ChildArTermsCode filtered by the ArtmOrderPct6 column
 * @method     ChildArTermsCode findOneByArtmdiscpct6(string $ArtmDiscPct6) Return the first ChildArTermsCode filtered by the ArtmDiscPct6 column
 * @method     ChildArTermsCode findOneByArtmdiscdays6(int $ArtmDiscDays6) Return the first ChildArTermsCode filtered by the ArtmDiscDays6 column
 * @method     ChildArTermsCode findOneByArtmdiscday6(string $ArtmDiscDay6) Return the first ChildArTermsCode filtered by the ArtmDiscDay6 column
 * @method     ChildArTermsCode findOneByArtmdiscdate6(string $ArtmDiscDate6) Return the first ChildArTermsCode filtered by the ArtmDiscDate6 column
 * @method     ChildArTermsCode findOneByArtmduedays6(int $ArtmDueDays6) Return the first ChildArTermsCode filtered by the ArtmDueDays6 column
 * @method     ChildArTermsCode findOneByArtmdueday6(string $ArtmDueDay6) Return the first ChildArTermsCode filtered by the ArtmDueDay6 column
 * @method     ChildArTermsCode findOneByArtmplusmonths6(int $ArtmPlusMonths6) Return the first ChildArTermsCode filtered by the ArtmPlusMonths6 column
 * @method     ChildArTermsCode findOneByArtmduedate6(string $ArtmDueDate6) Return the first ChildArTermsCode filtered by the ArtmDueDate6 column
 * @method     ChildArTermsCode findOneByArtmplusyear6(string $ArtmPlusYear6) Return the first ChildArTermsCode filtered by the ArtmPlusYear6 column
 * @method     ChildArTermsCode findOneByArtmdayfrom1(int $ArtmDayFrom1) Return the first ChildArTermsCode filtered by the ArtmDayFrom1 column
 * @method     ChildArTermsCode findOneByArtmdaythru1(int $ArtmDayThru1) Return the first ChildArTermsCode filtered by the ArtmDayThru1 column
 * @method     ChildArTermsCode findOneByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct1 column
 * @method     ChildArTermsCode findOneByArtmeomdiscday1(int $ArtmEomDiscDay1) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay1 column
 * @method     ChildArTermsCode findOneByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths1 column
 * @method     ChildArTermsCode findOneByArtmeomdueday1(int $ArtmEomDueDay1) Return the first ChildArTermsCode filtered by the ArtmEomDueDay1 column
 * @method     ChildArTermsCode findOneByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths1 column
 * @method     ChildArTermsCode findOneByArtmdayfrom2(int $ArtmDayFrom2) Return the first ChildArTermsCode filtered by the ArtmDayFrom2 column
 * @method     ChildArTermsCode findOneByArtmdaythru2(int $ArtmDayThru2) Return the first ChildArTermsCode filtered by the ArtmDayThru2 column
 * @method     ChildArTermsCode findOneByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct2 column
 * @method     ChildArTermsCode findOneByArtmeomdiscday2(int $ArtmEomDiscDay2) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay2 column
 * @method     ChildArTermsCode findOneByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths2 column
 * @method     ChildArTermsCode findOneByArtmeomdueday2(int $ArtmEomDueDay2) Return the first ChildArTermsCode filtered by the ArtmEomDueDay2 column
 * @method     ChildArTermsCode findOneByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths2 column
 * @method     ChildArTermsCode findOneByArtmdayfrom3(int $ArtmDayFrom3) Return the first ChildArTermsCode filtered by the ArtmDayFrom3 column
 * @method     ChildArTermsCode findOneByArtmdaythru3(int $ArtmDayThru3) Return the first ChildArTermsCode filtered by the ArtmDayThru3 column
 * @method     ChildArTermsCode findOneByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct3 column
 * @method     ChildArTermsCode findOneByArtmeomdiscday3(int $ArtmEomDiscDay3) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay3 column
 * @method     ChildArTermsCode findOneByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths3 column
 * @method     ChildArTermsCode findOneByArtmeomdueday3(int $ArtmEomDueDay3) Return the first ChildArTermsCode filtered by the ArtmEomDueDay3 column
 * @method     ChildArTermsCode findOneByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths3 column
 * @method     ChildArTermsCode findOneByArtmctry(string $ArtmCtry) Return the first ChildArTermsCode filtered by the ArtmCtry column
 * @method     ChildArTermsCode findOneByArtmtermgrup(string $ArtmTermGrup) Return the first ChildArTermsCode filtered by the ArtmTermGrup column
 * @method     ChildArTermsCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildArTermsCode filtered by the DateUpdtd column
 * @method     ChildArTermsCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTermsCode filtered by the TimeUpdtd column
 * @method     ChildArTermsCode findOneByDummy(string $dummy) Return the first ChildArTermsCode filtered by the dummy column *

 * @method     ChildArTermsCode requirePk($key, ConnectionInterface $con = null) Return the ChildArTermsCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOne(ConnectionInterface $con = null) Return the first ChildArTermsCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTermsCode requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildArTermsCode filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmtermdesc(string $ArtmTermDesc) Return the first ChildArTermsCode filtered by the ArtmTermDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmmethod(string $ArtmMethod) Return the first ChildArTermsCode filtered by the ArtmMethod column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmtype(string $ArtmType) Return the first ChildArTermsCode filtered by the ArtmType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmhold(string $ArtmHold) Return the first ChildArTermsCode filtered by the ArtmHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmexpiredate(string $ArtmExpireDate) Return the first ChildArTermsCode filtered by the ArtmExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmfrtallow(string $ArtmFrtAllow) Return the first ChildArTermsCode filtered by the ArtmFrtAllow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmccprefix(string $ArtmCcPrefix) Return the first ChildArTermsCode filtered by the ArtmCcPrefix column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit1(string $ArtmSplit1) Return the first ChildArTermsCode filtered by the ArtmSplit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct1(string $ArtmOrderPct1) Return the first ChildArTermsCode filtered by the ArtmOrderPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct1(string $ArtmDiscPct1) Return the first ChildArTermsCode filtered by the ArtmDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays1(int $ArtmDiscDays1) Return the first ChildArTermsCode filtered by the ArtmDiscDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday1(string $ArtmDiscDay1) Return the first ChildArTermsCode filtered by the ArtmDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate1(string $ArtmDiscDate1) Return the first ChildArTermsCode filtered by the ArtmDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays1(int $ArtmDueDays1) Return the first ChildArTermsCode filtered by the ArtmDueDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday1(string $ArtmDueDay1) Return the first ChildArTermsCode filtered by the ArtmDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths1(int $ArtmPlusMonths1) Return the first ChildArTermsCode filtered by the ArtmPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate1(string $ArtmDueDate1) Return the first ChildArTermsCode filtered by the ArtmDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear1(string $ArtmPlusYear1) Return the first ChildArTermsCode filtered by the ArtmPlusYear1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit2(string $ArtmSplit2) Return the first ChildArTermsCode filtered by the ArtmSplit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct2(string $ArtmOrderPct2) Return the first ChildArTermsCode filtered by the ArtmOrderPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct2(string $ArtmDiscPct2) Return the first ChildArTermsCode filtered by the ArtmDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays2(int $ArtmDiscDays2) Return the first ChildArTermsCode filtered by the ArtmDiscDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday2(string $ArtmDiscDay2) Return the first ChildArTermsCode filtered by the ArtmDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate2(string $ArtmDiscDate2) Return the first ChildArTermsCode filtered by the ArtmDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays2(int $ArtmDueDays2) Return the first ChildArTermsCode filtered by the ArtmDueDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday2(string $ArtmDueDay2) Return the first ChildArTermsCode filtered by the ArtmDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths2(int $ArtmPlusMonths2) Return the first ChildArTermsCode filtered by the ArtmPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate2(string $ArtmDueDate2) Return the first ChildArTermsCode filtered by the ArtmDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear2(string $ArtmPlusYear2) Return the first ChildArTermsCode filtered by the ArtmPlusYear2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit3(string $ArtmSplit3) Return the first ChildArTermsCode filtered by the ArtmSplit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct3(string $ArtmOrderPct3) Return the first ChildArTermsCode filtered by the ArtmOrderPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct3(string $ArtmDiscPct3) Return the first ChildArTermsCode filtered by the ArtmDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays3(int $ArtmDiscDays3) Return the first ChildArTermsCode filtered by the ArtmDiscDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday3(string $ArtmDiscDay3) Return the first ChildArTermsCode filtered by the ArtmDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate3(string $ArtmDiscDate3) Return the first ChildArTermsCode filtered by the ArtmDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays3(int $ArtmDueDays3) Return the first ChildArTermsCode filtered by the ArtmDueDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday3(string $ArtmDueDay3) Return the first ChildArTermsCode filtered by the ArtmDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths3(int $ArtmPlusMonths3) Return the first ChildArTermsCode filtered by the ArtmPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate3(string $ArtmDueDate3) Return the first ChildArTermsCode filtered by the ArtmDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear3(string $ArtmPlusYear3) Return the first ChildArTermsCode filtered by the ArtmPlusYear3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit4(string $ArtmSplit4) Return the first ChildArTermsCode filtered by the ArtmSplit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct4(string $ArtmOrderPct4) Return the first ChildArTermsCode filtered by the ArtmOrderPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct4(string $ArtmDiscPct4) Return the first ChildArTermsCode filtered by the ArtmDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays4(int $ArtmDiscDays4) Return the first ChildArTermsCode filtered by the ArtmDiscDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday4(string $ArtmDiscDay4) Return the first ChildArTermsCode filtered by the ArtmDiscDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate4(string $ArtmDiscDate4) Return the first ChildArTermsCode filtered by the ArtmDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays4(int $ArtmDueDays4) Return the first ChildArTermsCode filtered by the ArtmDueDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday4(string $ArtmDueDay4) Return the first ChildArTermsCode filtered by the ArtmDueDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths4(int $ArtmPlusMonths4) Return the first ChildArTermsCode filtered by the ArtmPlusMonths4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate4(string $ArtmDueDate4) Return the first ChildArTermsCode filtered by the ArtmDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear4(string $ArtmPlusYear4) Return the first ChildArTermsCode filtered by the ArtmPlusYear4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit5(string $ArtmSplit5) Return the first ChildArTermsCode filtered by the ArtmSplit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct5(string $ArtmOrderPct5) Return the first ChildArTermsCode filtered by the ArtmOrderPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct5(string $ArtmDiscPct5) Return the first ChildArTermsCode filtered by the ArtmDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays5(int $ArtmDiscDays5) Return the first ChildArTermsCode filtered by the ArtmDiscDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday5(string $ArtmDiscDay5) Return the first ChildArTermsCode filtered by the ArtmDiscDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate5(string $ArtmDiscDate5) Return the first ChildArTermsCode filtered by the ArtmDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays5(int $ArtmDueDays5) Return the first ChildArTermsCode filtered by the ArtmDueDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday5(string $ArtmDueDay5) Return the first ChildArTermsCode filtered by the ArtmDueDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths5(int $ArtmPlusMonths5) Return the first ChildArTermsCode filtered by the ArtmPlusMonths5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate5(string $ArtmDueDate5) Return the first ChildArTermsCode filtered by the ArtmDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear5(string $ArtmPlusYear5) Return the first ChildArTermsCode filtered by the ArtmPlusYear5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmsplit6(string $ArtmSplit6) Return the first ChildArTermsCode filtered by the ArtmSplit6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmorderpct6(string $ArtmOrderPct6) Return the first ChildArTermsCode filtered by the ArtmOrderPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscpct6(string $ArtmDiscPct6) Return the first ChildArTermsCode filtered by the ArtmDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdays6(int $ArtmDiscDays6) Return the first ChildArTermsCode filtered by the ArtmDiscDays6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscday6(string $ArtmDiscDay6) Return the first ChildArTermsCode filtered by the ArtmDiscDay6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdiscdate6(string $ArtmDiscDate6) Return the first ChildArTermsCode filtered by the ArtmDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedays6(int $ArtmDueDays6) Return the first ChildArTermsCode filtered by the ArtmDueDays6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdueday6(string $ArtmDueDay6) Return the first ChildArTermsCode filtered by the ArtmDueDay6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusmonths6(int $ArtmPlusMonths6) Return the first ChildArTermsCode filtered by the ArtmPlusMonths6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmduedate6(string $ArtmDueDate6) Return the first ChildArTermsCode filtered by the ArtmDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmplusyear6(string $ArtmPlusYear6) Return the first ChildArTermsCode filtered by the ArtmPlusYear6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdayfrom1(int $ArtmDayFrom1) Return the first ChildArTermsCode filtered by the ArtmDayFrom1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdaythru1(int $ArtmDayThru1) Return the first ChildArTermsCode filtered by the ArtmDayThru1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscday1(int $ArtmEomDiscDay1) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdueday1(int $ArtmEomDueDay1) Return the first ChildArTermsCode filtered by the ArtmEomDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdayfrom2(int $ArtmDayFrom2) Return the first ChildArTermsCode filtered by the ArtmDayFrom2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdaythru2(int $ArtmDayThru2) Return the first ChildArTermsCode filtered by the ArtmDayThru2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscday2(int $ArtmEomDiscDay2) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdueday2(int $ArtmEomDueDay2) Return the first ChildArTermsCode filtered by the ArtmEomDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdayfrom3(int $ArtmDayFrom3) Return the first ChildArTermsCode filtered by the ArtmDayFrom3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmdaythru3(int $ArtmDayThru3) Return the first ChildArTermsCode filtered by the ArtmDayThru3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return the first ChildArTermsCode filtered by the ArtmEomDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscday3(int $ArtmEomDiscDay3) Return the first ChildArTermsCode filtered by the ArtmEomDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return the first ChildArTermsCode filtered by the ArtmEomDiscMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomdueday3(int $ArtmEomDueDay3) Return the first ChildArTermsCode filtered by the ArtmEomDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return the first ChildArTermsCode filtered by the ArtmEomPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmctry(string $ArtmCtry) Return the first ChildArTermsCode filtered by the ArtmCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByArtmtermgrup(string $ArtmTermGrup) Return the first ChildArTermsCode filtered by the ArtmTermGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArTermsCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTermsCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsCode requireOneByDummy(string $dummy) Return the first ChildArTermsCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTermsCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArTermsCode objects based on current ModelCriteria
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildArTermsCode objects filtered by the ArtmTermCd column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmtermdesc(string $ArtmTermDesc) Return ChildArTermsCode objects filtered by the ArtmTermDesc column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmmethod(string $ArtmMethod) Return ChildArTermsCode objects filtered by the ArtmMethod column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmtype(string $ArtmType) Return ChildArTermsCode objects filtered by the ArtmType column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmhold(string $ArtmHold) Return ChildArTermsCode objects filtered by the ArtmHold column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmexpiredate(string $ArtmExpireDate) Return ChildArTermsCode objects filtered by the ArtmExpireDate column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmfrtallow(string $ArtmFrtAllow) Return ChildArTermsCode objects filtered by the ArtmFrtAllow column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmccprefix(string $ArtmCcPrefix) Return ChildArTermsCode objects filtered by the ArtmCcPrefix column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit1(string $ArtmSplit1) Return ChildArTermsCode objects filtered by the ArtmSplit1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct1(string $ArtmOrderPct1) Return ChildArTermsCode objects filtered by the ArtmOrderPct1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct1(string $ArtmDiscPct1) Return ChildArTermsCode objects filtered by the ArtmDiscPct1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays1(int $ArtmDiscDays1) Return ChildArTermsCode objects filtered by the ArtmDiscDays1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday1(string $ArtmDiscDay1) Return ChildArTermsCode objects filtered by the ArtmDiscDay1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate1(string $ArtmDiscDate1) Return ChildArTermsCode objects filtered by the ArtmDiscDate1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays1(int $ArtmDueDays1) Return ChildArTermsCode objects filtered by the ArtmDueDays1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday1(string $ArtmDueDay1) Return ChildArTermsCode objects filtered by the ArtmDueDay1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths1(int $ArtmPlusMonths1) Return ChildArTermsCode objects filtered by the ArtmPlusMonths1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate1(string $ArtmDueDate1) Return ChildArTermsCode objects filtered by the ArtmDueDate1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear1(string $ArtmPlusYear1) Return ChildArTermsCode objects filtered by the ArtmPlusYear1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit2(string $ArtmSplit2) Return ChildArTermsCode objects filtered by the ArtmSplit2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct2(string $ArtmOrderPct2) Return ChildArTermsCode objects filtered by the ArtmOrderPct2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct2(string $ArtmDiscPct2) Return ChildArTermsCode objects filtered by the ArtmDiscPct2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays2(int $ArtmDiscDays2) Return ChildArTermsCode objects filtered by the ArtmDiscDays2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday2(string $ArtmDiscDay2) Return ChildArTermsCode objects filtered by the ArtmDiscDay2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate2(string $ArtmDiscDate2) Return ChildArTermsCode objects filtered by the ArtmDiscDate2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays2(int $ArtmDueDays2) Return ChildArTermsCode objects filtered by the ArtmDueDays2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday2(string $ArtmDueDay2) Return ChildArTermsCode objects filtered by the ArtmDueDay2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths2(int $ArtmPlusMonths2) Return ChildArTermsCode objects filtered by the ArtmPlusMonths2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate2(string $ArtmDueDate2) Return ChildArTermsCode objects filtered by the ArtmDueDate2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear2(string $ArtmPlusYear2) Return ChildArTermsCode objects filtered by the ArtmPlusYear2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit3(string $ArtmSplit3) Return ChildArTermsCode objects filtered by the ArtmSplit3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct3(string $ArtmOrderPct3) Return ChildArTermsCode objects filtered by the ArtmOrderPct3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct3(string $ArtmDiscPct3) Return ChildArTermsCode objects filtered by the ArtmDiscPct3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays3(int $ArtmDiscDays3) Return ChildArTermsCode objects filtered by the ArtmDiscDays3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday3(string $ArtmDiscDay3) Return ChildArTermsCode objects filtered by the ArtmDiscDay3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate3(string $ArtmDiscDate3) Return ChildArTermsCode objects filtered by the ArtmDiscDate3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays3(int $ArtmDueDays3) Return ChildArTermsCode objects filtered by the ArtmDueDays3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday3(string $ArtmDueDay3) Return ChildArTermsCode objects filtered by the ArtmDueDay3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths3(int $ArtmPlusMonths3) Return ChildArTermsCode objects filtered by the ArtmPlusMonths3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate3(string $ArtmDueDate3) Return ChildArTermsCode objects filtered by the ArtmDueDate3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear3(string $ArtmPlusYear3) Return ChildArTermsCode objects filtered by the ArtmPlusYear3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit4(string $ArtmSplit4) Return ChildArTermsCode objects filtered by the ArtmSplit4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct4(string $ArtmOrderPct4) Return ChildArTermsCode objects filtered by the ArtmOrderPct4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct4(string $ArtmDiscPct4) Return ChildArTermsCode objects filtered by the ArtmDiscPct4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays4(int $ArtmDiscDays4) Return ChildArTermsCode objects filtered by the ArtmDiscDays4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday4(string $ArtmDiscDay4) Return ChildArTermsCode objects filtered by the ArtmDiscDay4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate4(string $ArtmDiscDate4) Return ChildArTermsCode objects filtered by the ArtmDiscDate4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays4(int $ArtmDueDays4) Return ChildArTermsCode objects filtered by the ArtmDueDays4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday4(string $ArtmDueDay4) Return ChildArTermsCode objects filtered by the ArtmDueDay4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths4(int $ArtmPlusMonths4) Return ChildArTermsCode objects filtered by the ArtmPlusMonths4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate4(string $ArtmDueDate4) Return ChildArTermsCode objects filtered by the ArtmDueDate4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear4(string $ArtmPlusYear4) Return ChildArTermsCode objects filtered by the ArtmPlusYear4 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit5(string $ArtmSplit5) Return ChildArTermsCode objects filtered by the ArtmSplit5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct5(string $ArtmOrderPct5) Return ChildArTermsCode objects filtered by the ArtmOrderPct5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct5(string $ArtmDiscPct5) Return ChildArTermsCode objects filtered by the ArtmDiscPct5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays5(int $ArtmDiscDays5) Return ChildArTermsCode objects filtered by the ArtmDiscDays5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday5(string $ArtmDiscDay5) Return ChildArTermsCode objects filtered by the ArtmDiscDay5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate5(string $ArtmDiscDate5) Return ChildArTermsCode objects filtered by the ArtmDiscDate5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays5(int $ArtmDueDays5) Return ChildArTermsCode objects filtered by the ArtmDueDays5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday5(string $ArtmDueDay5) Return ChildArTermsCode objects filtered by the ArtmDueDay5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths5(int $ArtmPlusMonths5) Return ChildArTermsCode objects filtered by the ArtmPlusMonths5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate5(string $ArtmDueDate5) Return ChildArTermsCode objects filtered by the ArtmDueDate5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear5(string $ArtmPlusYear5) Return ChildArTermsCode objects filtered by the ArtmPlusYear5 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmsplit6(string $ArtmSplit6) Return ChildArTermsCode objects filtered by the ArtmSplit6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmorderpct6(string $ArtmOrderPct6) Return ChildArTermsCode objects filtered by the ArtmOrderPct6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscpct6(string $ArtmDiscPct6) Return ChildArTermsCode objects filtered by the ArtmDiscPct6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdays6(int $ArtmDiscDays6) Return ChildArTermsCode objects filtered by the ArtmDiscDays6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscday6(string $ArtmDiscDay6) Return ChildArTermsCode objects filtered by the ArtmDiscDay6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdiscdate6(string $ArtmDiscDate6) Return ChildArTermsCode objects filtered by the ArtmDiscDate6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedays6(int $ArtmDueDays6) Return ChildArTermsCode objects filtered by the ArtmDueDays6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdueday6(string $ArtmDueDay6) Return ChildArTermsCode objects filtered by the ArtmDueDay6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusmonths6(int $ArtmPlusMonths6) Return ChildArTermsCode objects filtered by the ArtmPlusMonths6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmduedate6(string $ArtmDueDate6) Return ChildArTermsCode objects filtered by the ArtmDueDate6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmplusyear6(string $ArtmPlusYear6) Return ChildArTermsCode objects filtered by the ArtmPlusYear6 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdayfrom1(int $ArtmDayFrom1) Return ChildArTermsCode objects filtered by the ArtmDayFrom1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdaythru1(int $ArtmDayThru1) Return ChildArTermsCode objects filtered by the ArtmDayThru1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return ChildArTermsCode objects filtered by the ArtmEomDiscPct1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscday1(int $ArtmEomDiscDay1) Return ChildArTermsCode objects filtered by the ArtmEomDiscDay1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return ChildArTermsCode objects filtered by the ArtmEomDiscMonths1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdueday1(int $ArtmEomDueDay1) Return ChildArTermsCode objects filtered by the ArtmEomDueDay1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return ChildArTermsCode objects filtered by the ArtmEomPlusMonths1 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdayfrom2(int $ArtmDayFrom2) Return ChildArTermsCode objects filtered by the ArtmDayFrom2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdaythru2(int $ArtmDayThru2) Return ChildArTermsCode objects filtered by the ArtmDayThru2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return ChildArTermsCode objects filtered by the ArtmEomDiscPct2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscday2(int $ArtmEomDiscDay2) Return ChildArTermsCode objects filtered by the ArtmEomDiscDay2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return ChildArTermsCode objects filtered by the ArtmEomDiscMonths2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdueday2(int $ArtmEomDueDay2) Return ChildArTermsCode objects filtered by the ArtmEomDueDay2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return ChildArTermsCode objects filtered by the ArtmEomPlusMonths2 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdayfrom3(int $ArtmDayFrom3) Return ChildArTermsCode objects filtered by the ArtmDayFrom3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmdaythru3(int $ArtmDayThru3) Return ChildArTermsCode objects filtered by the ArtmDayThru3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return ChildArTermsCode objects filtered by the ArtmEomDiscPct3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscday3(int $ArtmEomDiscDay3) Return ChildArTermsCode objects filtered by the ArtmEomDiscDay3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return ChildArTermsCode objects filtered by the ArtmEomDiscMonths3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomdueday3(int $ArtmEomDueDay3) Return ChildArTermsCode objects filtered by the ArtmEomDueDay3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return ChildArTermsCode objects filtered by the ArtmEomPlusMonths3 column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmctry(string $ArtmCtry) Return ChildArTermsCode objects filtered by the ArtmCtry column
 * @method     ChildArTermsCode[]|ObjectCollection findByArtmtermgrup(string $ArtmTermGrup) Return ChildArTermsCode objects filtered by the ArtmTermGrup column
 * @method     ChildArTermsCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArTermsCode objects filtered by the DateUpdtd column
 * @method     ChildArTermsCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArTermsCode objects filtered by the TimeUpdtd column
 * @method     ChildArTermsCode[]|ObjectCollection findByDummy(string $dummy) Return ChildArTermsCode objects filtered by the dummy column
 * @method     ChildArTermsCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArTermsCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArTermsCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArTermsCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArTermsCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArTermsCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArTermsCodeQuery) {
            return $criteria;
        }
        $query = new ChildArTermsCodeQuery();
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
     * @return ChildArTermsCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArTermsCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArTermsCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArTermsCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtmTermCd, ArtmTermDesc, ArtmMethod, ArtmType, ArtmHold, ArtmExpireDate, ArtmFrtAllow, ArtmCcPrefix, ArtmSplit1, ArtmOrderPct1, ArtmDiscPct1, ArtmDiscDays1, ArtmDiscDay1, ArtmDiscDate1, ArtmDueDays1, ArtmDueDay1, ArtmPlusMonths1, ArtmDueDate1, ArtmPlusYear1, ArtmSplit2, ArtmOrderPct2, ArtmDiscPct2, ArtmDiscDays2, ArtmDiscDay2, ArtmDiscDate2, ArtmDueDays2, ArtmDueDay2, ArtmPlusMonths2, ArtmDueDate2, ArtmPlusYear2, ArtmSplit3, ArtmOrderPct3, ArtmDiscPct3, ArtmDiscDays3, ArtmDiscDay3, ArtmDiscDate3, ArtmDueDays3, ArtmDueDay3, ArtmPlusMonths3, ArtmDueDate3, ArtmPlusYear3, ArtmSplit4, ArtmOrderPct4, ArtmDiscPct4, ArtmDiscDays4, ArtmDiscDay4, ArtmDiscDate4, ArtmDueDays4, ArtmDueDay4, ArtmPlusMonths4, ArtmDueDate4, ArtmPlusYear4, ArtmSplit5, ArtmOrderPct5, ArtmDiscPct5, ArtmDiscDays5, ArtmDiscDay5, ArtmDiscDate5, ArtmDueDays5, ArtmDueDay5, ArtmPlusMonths5, ArtmDueDate5, ArtmPlusYear5, ArtmSplit6, ArtmOrderPct6, ArtmDiscPct6, ArtmDiscDays6, ArtmDiscDay6, ArtmDiscDate6, ArtmDueDays6, ArtmDueDay6, ArtmPlusMonths6, ArtmDueDate6, ArtmPlusYear6, ArtmDayFrom1, ArtmDayThru1, ArtmEomDiscPct1, ArtmEomDiscDay1, ArtmEomDiscMonths1, ArtmEomDueDay1, ArtmEomPlusMonths1, ArtmDayFrom2, ArtmDayThru2, ArtmEomDiscPct2, ArtmEomDiscDay2, ArtmEomDiscMonths2, ArtmEomDueDay2, ArtmEomPlusMonths2, ArtmDayFrom3, ArtmDayThru3, ArtmEomDiscPct3, ArtmEomDiscDay3, ArtmEomDiscMonths3, ArtmEomDueDay3, ArtmEomPlusMonths3, ArtmCtry, ArtmTermGrup, DateUpdtd, TimeUpdtd, dummy FROM ar_term_code WHERE ArtmTermCd = :p0';
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
            /** @var ChildArTermsCode $obj */
            $obj = new ChildArTermsCode();
            $obj->hydrate($row);
            ArTermsCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArTermsCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMCD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMCD, $keys, Criteria::IN);
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
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the ArtmTermDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermdesc('fooValue');   // WHERE ArtmTermDesc = 'fooValue'
     * $query->filterByArtmtermdesc('%fooValue%', Criteria::LIKE); // WHERE ArtmTermDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermdesc($artmtermdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMDESC, $artmtermdesc, $comparison);
    }

    /**
     * Filter the query on the ArtmMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmmethod('fooValue');   // WHERE ArtmMethod = 'fooValue'
     * $query->filterByArtmmethod('%fooValue%', Criteria::LIKE); // WHERE ArtmMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmmethod The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmmethod($artmmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmmethod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMMETHOD, $artmmethod, $comparison);
    }

    /**
     * Filter the query on the ArtmType column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtype('fooValue');   // WHERE ArtmType = 'fooValue'
     * $query->filterByArtmtype('%fooValue%', Criteria::LIKE); // WHERE ArtmType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtype($artmtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTYPE, $artmtype, $comparison);
    }

    /**
     * Filter the query on the ArtmHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmhold('fooValue');   // WHERE ArtmHold = 'fooValue'
     * $query->filterByArtmhold('%fooValue%', Criteria::LIKE); // WHERE ArtmHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmhold($artmhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMHOLD, $artmhold, $comparison);
    }

    /**
     * Filter the query on the ArtmExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmexpiredate('fooValue');   // WHERE ArtmExpireDate = 'fooValue'
     * $query->filterByArtmexpiredate('%fooValue%', Criteria::LIKE); // WHERE ArtmExpireDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmexpiredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmexpiredate($artmexpiredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEXPIREDATE, $artmexpiredate, $comparison);
    }

    /**
     * Filter the query on the ArtmFrtAllow column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmfrtallow('fooValue');   // WHERE ArtmFrtAllow = 'fooValue'
     * $query->filterByArtmfrtallow('%fooValue%', Criteria::LIKE); // WHERE ArtmFrtAllow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmfrtallow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmfrtallow($artmfrtallow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmfrtallow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMFRTALLOW, $artmfrtallow, $comparison);
    }

    /**
     * Filter the query on the ArtmCcPrefix column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmccprefix('fooValue');   // WHERE ArtmCcPrefix = 'fooValue'
     * $query->filterByArtmccprefix('%fooValue%', Criteria::LIKE); // WHERE ArtmCcPrefix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmccprefix The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmccprefix($artmccprefix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmccprefix)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMCCPREFIX, $artmccprefix, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit1('fooValue');   // WHERE ArtmSplit1 = 'fooValue'
     * $query->filterByArtmsplit1('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit1($artmsplit1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT1, $artmsplit1, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct1(1234); // WHERE ArtmOrderPct1 = 1234
     * $query->filterByArtmorderpct1(array(12, 34)); // WHERE ArtmOrderPct1 IN (12, 34)
     * $query->filterByArtmorderpct1(array('min' => 12)); // WHERE ArtmOrderPct1 > 12
     * </code>
     *
     * @param     mixed $artmorderpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct1($artmorderpct1 = null, $comparison = null)
    {
        if (is_array($artmorderpct1)) {
            $useMinMax = false;
            if (isset($artmorderpct1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct1(1234); // WHERE ArtmDiscPct1 = 1234
     * $query->filterByArtmdiscpct1(array(12, 34)); // WHERE ArtmDiscPct1 IN (12, 34)
     * $query->filterByArtmdiscpct1(array('min' => 12)); // WHERE ArtmDiscPct1 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct1($artmdiscpct1 = null, $comparison = null)
    {
        if (is_array($artmdiscpct1)) {
            $useMinMax = false;
            if (isset($artmdiscpct1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays1(1234); // WHERE ArtmDiscDays1 = 1234
     * $query->filterByArtmdiscdays1(array(12, 34)); // WHERE ArtmDiscDays1 IN (12, 34)
     * $query->filterByArtmdiscdays1(array('min' => 12)); // WHERE ArtmDiscDays1 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays1($artmdiscdays1 = null, $comparison = null)
    {
        if (is_array($artmdiscdays1)) {
            $useMinMax = false;
            if (isset($artmdiscdays1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday1('fooValue');   // WHERE ArtmDiscDay1 = 'fooValue'
     * $query->filterByArtmdiscday1('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday1($artmdiscday1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY1, $artmdiscday1, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate1('fooValue');   // WHERE ArtmDiscDate1 = 'fooValue'
     * $query->filterByArtmdiscdate1('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate1($artmdiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE1, $artmdiscdate1, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays1(1234); // WHERE ArtmDueDays1 = 1234
     * $query->filterByArtmduedays1(array(12, 34)); // WHERE ArtmDueDays1 IN (12, 34)
     * $query->filterByArtmduedays1(array('min' => 12)); // WHERE ArtmDueDays1 > 12
     * </code>
     *
     * @param     mixed $artmduedays1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays1($artmduedays1 = null, $comparison = null)
    {
        if (is_array($artmduedays1)) {
            $useMinMax = false;
            if (isset($artmduedays1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday1('fooValue');   // WHERE ArtmDueDay1 = 'fooValue'
     * $query->filterByArtmdueday1('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday1($artmdueday1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY1, $artmdueday1, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths1(1234); // WHERE ArtmPlusMonths1 = 1234
     * $query->filterByArtmplusmonths1(array(12, 34)); // WHERE ArtmPlusMonths1 IN (12, 34)
     * $query->filterByArtmplusmonths1(array('min' => 12)); // WHERE ArtmPlusMonths1 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths1($artmplusmonths1 = null, $comparison = null)
    {
        if (is_array($artmplusmonths1)) {
            $useMinMax = false;
            if (isset($artmplusmonths1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate1('fooValue');   // WHERE ArtmDueDate1 = 'fooValue'
     * $query->filterByArtmduedate1('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate1($artmduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE1, $artmduedate1, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear1('fooValue');   // WHERE ArtmPlusYear1 = 'fooValue'
     * $query->filterByArtmplusyear1('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear1($artmplusyear1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR1, $artmplusyear1, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit2('fooValue');   // WHERE ArtmSplit2 = 'fooValue'
     * $query->filterByArtmsplit2('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit2($artmsplit2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT2, $artmsplit2, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct2(1234); // WHERE ArtmOrderPct2 = 1234
     * $query->filterByArtmorderpct2(array(12, 34)); // WHERE ArtmOrderPct2 IN (12, 34)
     * $query->filterByArtmorderpct2(array('min' => 12)); // WHERE ArtmOrderPct2 > 12
     * </code>
     *
     * @param     mixed $artmorderpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct2($artmorderpct2 = null, $comparison = null)
    {
        if (is_array($artmorderpct2)) {
            $useMinMax = false;
            if (isset($artmorderpct2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct2(1234); // WHERE ArtmDiscPct2 = 1234
     * $query->filterByArtmdiscpct2(array(12, 34)); // WHERE ArtmDiscPct2 IN (12, 34)
     * $query->filterByArtmdiscpct2(array('min' => 12)); // WHERE ArtmDiscPct2 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct2($artmdiscpct2 = null, $comparison = null)
    {
        if (is_array($artmdiscpct2)) {
            $useMinMax = false;
            if (isset($artmdiscpct2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays2(1234); // WHERE ArtmDiscDays2 = 1234
     * $query->filterByArtmdiscdays2(array(12, 34)); // WHERE ArtmDiscDays2 IN (12, 34)
     * $query->filterByArtmdiscdays2(array('min' => 12)); // WHERE ArtmDiscDays2 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays2($artmdiscdays2 = null, $comparison = null)
    {
        if (is_array($artmdiscdays2)) {
            $useMinMax = false;
            if (isset($artmdiscdays2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday2('fooValue');   // WHERE ArtmDiscDay2 = 'fooValue'
     * $query->filterByArtmdiscday2('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday2($artmdiscday2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY2, $artmdiscday2, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate2('fooValue');   // WHERE ArtmDiscDate2 = 'fooValue'
     * $query->filterByArtmdiscdate2('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate2($artmdiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE2, $artmdiscdate2, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays2(1234); // WHERE ArtmDueDays2 = 1234
     * $query->filterByArtmduedays2(array(12, 34)); // WHERE ArtmDueDays2 IN (12, 34)
     * $query->filterByArtmduedays2(array('min' => 12)); // WHERE ArtmDueDays2 > 12
     * </code>
     *
     * @param     mixed $artmduedays2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays2($artmduedays2 = null, $comparison = null)
    {
        if (is_array($artmduedays2)) {
            $useMinMax = false;
            if (isset($artmduedays2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday2('fooValue');   // WHERE ArtmDueDay2 = 'fooValue'
     * $query->filterByArtmdueday2('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday2($artmdueday2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY2, $artmdueday2, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths2(1234); // WHERE ArtmPlusMonths2 = 1234
     * $query->filterByArtmplusmonths2(array(12, 34)); // WHERE ArtmPlusMonths2 IN (12, 34)
     * $query->filterByArtmplusmonths2(array('min' => 12)); // WHERE ArtmPlusMonths2 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths2($artmplusmonths2 = null, $comparison = null)
    {
        if (is_array($artmplusmonths2)) {
            $useMinMax = false;
            if (isset($artmplusmonths2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate2('fooValue');   // WHERE ArtmDueDate2 = 'fooValue'
     * $query->filterByArtmduedate2('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate2($artmduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE2, $artmduedate2, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear2('fooValue');   // WHERE ArtmPlusYear2 = 'fooValue'
     * $query->filterByArtmplusyear2('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear2($artmplusyear2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR2, $artmplusyear2, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit3('fooValue');   // WHERE ArtmSplit3 = 'fooValue'
     * $query->filterByArtmsplit3('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit3($artmsplit3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT3, $artmsplit3, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct3(1234); // WHERE ArtmOrderPct3 = 1234
     * $query->filterByArtmorderpct3(array(12, 34)); // WHERE ArtmOrderPct3 IN (12, 34)
     * $query->filterByArtmorderpct3(array('min' => 12)); // WHERE ArtmOrderPct3 > 12
     * </code>
     *
     * @param     mixed $artmorderpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct3($artmorderpct3 = null, $comparison = null)
    {
        if (is_array($artmorderpct3)) {
            $useMinMax = false;
            if (isset($artmorderpct3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct3(1234); // WHERE ArtmDiscPct3 = 1234
     * $query->filterByArtmdiscpct3(array(12, 34)); // WHERE ArtmDiscPct3 IN (12, 34)
     * $query->filterByArtmdiscpct3(array('min' => 12)); // WHERE ArtmDiscPct3 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct3($artmdiscpct3 = null, $comparison = null)
    {
        if (is_array($artmdiscpct3)) {
            $useMinMax = false;
            if (isset($artmdiscpct3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays3(1234); // WHERE ArtmDiscDays3 = 1234
     * $query->filterByArtmdiscdays3(array(12, 34)); // WHERE ArtmDiscDays3 IN (12, 34)
     * $query->filterByArtmdiscdays3(array('min' => 12)); // WHERE ArtmDiscDays3 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays3($artmdiscdays3 = null, $comparison = null)
    {
        if (is_array($artmdiscdays3)) {
            $useMinMax = false;
            if (isset($artmdiscdays3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday3('fooValue');   // WHERE ArtmDiscDay3 = 'fooValue'
     * $query->filterByArtmdiscday3('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday3($artmdiscday3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY3, $artmdiscday3, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate3('fooValue');   // WHERE ArtmDiscDate3 = 'fooValue'
     * $query->filterByArtmdiscdate3('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate3($artmdiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE3, $artmdiscdate3, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays3(1234); // WHERE ArtmDueDays3 = 1234
     * $query->filterByArtmduedays3(array(12, 34)); // WHERE ArtmDueDays3 IN (12, 34)
     * $query->filterByArtmduedays3(array('min' => 12)); // WHERE ArtmDueDays3 > 12
     * </code>
     *
     * @param     mixed $artmduedays3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays3($artmduedays3 = null, $comparison = null)
    {
        if (is_array($artmduedays3)) {
            $useMinMax = false;
            if (isset($artmduedays3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday3('fooValue');   // WHERE ArtmDueDay3 = 'fooValue'
     * $query->filterByArtmdueday3('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday3($artmdueday3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY3, $artmdueday3, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths3(1234); // WHERE ArtmPlusMonths3 = 1234
     * $query->filterByArtmplusmonths3(array(12, 34)); // WHERE ArtmPlusMonths3 IN (12, 34)
     * $query->filterByArtmplusmonths3(array('min' => 12)); // WHERE ArtmPlusMonths3 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths3($artmplusmonths3 = null, $comparison = null)
    {
        if (is_array($artmplusmonths3)) {
            $useMinMax = false;
            if (isset($artmplusmonths3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate3('fooValue');   // WHERE ArtmDueDate3 = 'fooValue'
     * $query->filterByArtmduedate3('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate3($artmduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE3, $artmduedate3, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear3('fooValue');   // WHERE ArtmPlusYear3 = 'fooValue'
     * $query->filterByArtmplusyear3('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear3($artmplusyear3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR3, $artmplusyear3, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit4('fooValue');   // WHERE ArtmSplit4 = 'fooValue'
     * $query->filterByArtmsplit4('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit4($artmsplit4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT4, $artmsplit4, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct4(1234); // WHERE ArtmOrderPct4 = 1234
     * $query->filterByArtmorderpct4(array(12, 34)); // WHERE ArtmOrderPct4 IN (12, 34)
     * $query->filterByArtmorderpct4(array('min' => 12)); // WHERE ArtmOrderPct4 > 12
     * </code>
     *
     * @param     mixed $artmorderpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct4($artmorderpct4 = null, $comparison = null)
    {
        if (is_array($artmorderpct4)) {
            $useMinMax = false;
            if (isset($artmorderpct4['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct4['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct4(1234); // WHERE ArtmDiscPct4 = 1234
     * $query->filterByArtmdiscpct4(array(12, 34)); // WHERE ArtmDiscPct4 IN (12, 34)
     * $query->filterByArtmdiscpct4(array('min' => 12)); // WHERE ArtmDiscPct4 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct4($artmdiscpct4 = null, $comparison = null)
    {
        if (is_array($artmdiscpct4)) {
            $useMinMax = false;
            if (isset($artmdiscpct4['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct4['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays4(1234); // WHERE ArtmDiscDays4 = 1234
     * $query->filterByArtmdiscdays4(array(12, 34)); // WHERE ArtmDiscDays4 IN (12, 34)
     * $query->filterByArtmdiscdays4(array('min' => 12)); // WHERE ArtmDiscDays4 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays4($artmdiscdays4 = null, $comparison = null)
    {
        if (is_array($artmdiscdays4)) {
            $useMinMax = false;
            if (isset($artmdiscdays4['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays4['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday4('fooValue');   // WHERE ArtmDiscDay4 = 'fooValue'
     * $query->filterByArtmdiscday4('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday4($artmdiscday4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY4, $artmdiscday4, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate4('fooValue');   // WHERE ArtmDiscDate4 = 'fooValue'
     * $query->filterByArtmdiscdate4('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate4($artmdiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE4, $artmdiscdate4, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays4(1234); // WHERE ArtmDueDays4 = 1234
     * $query->filterByArtmduedays4(array(12, 34)); // WHERE ArtmDueDays4 IN (12, 34)
     * $query->filterByArtmduedays4(array('min' => 12)); // WHERE ArtmDueDays4 > 12
     * </code>
     *
     * @param     mixed $artmduedays4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays4($artmduedays4 = null, $comparison = null)
    {
        if (is_array($artmduedays4)) {
            $useMinMax = false;
            if (isset($artmduedays4['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays4['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday4('fooValue');   // WHERE ArtmDueDay4 = 'fooValue'
     * $query->filterByArtmdueday4('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday4($artmdueday4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY4, $artmdueday4, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths4(1234); // WHERE ArtmPlusMonths4 = 1234
     * $query->filterByArtmplusmonths4(array(12, 34)); // WHERE ArtmPlusMonths4 IN (12, 34)
     * $query->filterByArtmplusmonths4(array('min' => 12)); // WHERE ArtmPlusMonths4 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths4($artmplusmonths4 = null, $comparison = null)
    {
        if (is_array($artmplusmonths4)) {
            $useMinMax = false;
            if (isset($artmplusmonths4['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths4['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate4('fooValue');   // WHERE ArtmDueDate4 = 'fooValue'
     * $query->filterByArtmduedate4('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate4($artmduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE4, $artmduedate4, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear4('fooValue');   // WHERE ArtmPlusYear4 = 'fooValue'
     * $query->filterByArtmplusyear4('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear4($artmplusyear4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR4, $artmplusyear4, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit5('fooValue');   // WHERE ArtmSplit5 = 'fooValue'
     * $query->filterByArtmsplit5('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit5($artmsplit5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT5, $artmsplit5, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct5(1234); // WHERE ArtmOrderPct5 = 1234
     * $query->filterByArtmorderpct5(array(12, 34)); // WHERE ArtmOrderPct5 IN (12, 34)
     * $query->filterByArtmorderpct5(array('min' => 12)); // WHERE ArtmOrderPct5 > 12
     * </code>
     *
     * @param     mixed $artmorderpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct5($artmorderpct5 = null, $comparison = null)
    {
        if (is_array($artmorderpct5)) {
            $useMinMax = false;
            if (isset($artmorderpct5['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct5['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct5(1234); // WHERE ArtmDiscPct5 = 1234
     * $query->filterByArtmdiscpct5(array(12, 34)); // WHERE ArtmDiscPct5 IN (12, 34)
     * $query->filterByArtmdiscpct5(array('min' => 12)); // WHERE ArtmDiscPct5 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct5($artmdiscpct5 = null, $comparison = null)
    {
        if (is_array($artmdiscpct5)) {
            $useMinMax = false;
            if (isset($artmdiscpct5['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct5['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays5(1234); // WHERE ArtmDiscDays5 = 1234
     * $query->filterByArtmdiscdays5(array(12, 34)); // WHERE ArtmDiscDays5 IN (12, 34)
     * $query->filterByArtmdiscdays5(array('min' => 12)); // WHERE ArtmDiscDays5 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays5($artmdiscdays5 = null, $comparison = null)
    {
        if (is_array($artmdiscdays5)) {
            $useMinMax = false;
            if (isset($artmdiscdays5['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays5['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday5('fooValue');   // WHERE ArtmDiscDay5 = 'fooValue'
     * $query->filterByArtmdiscday5('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday5($artmdiscday5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY5, $artmdiscday5, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate5('fooValue');   // WHERE ArtmDiscDate5 = 'fooValue'
     * $query->filterByArtmdiscdate5('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate5($artmdiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE5, $artmdiscdate5, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays5(1234); // WHERE ArtmDueDays5 = 1234
     * $query->filterByArtmduedays5(array(12, 34)); // WHERE ArtmDueDays5 IN (12, 34)
     * $query->filterByArtmduedays5(array('min' => 12)); // WHERE ArtmDueDays5 > 12
     * </code>
     *
     * @param     mixed $artmduedays5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays5($artmduedays5 = null, $comparison = null)
    {
        if (is_array($artmduedays5)) {
            $useMinMax = false;
            if (isset($artmduedays5['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays5['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday5('fooValue');   // WHERE ArtmDueDay5 = 'fooValue'
     * $query->filterByArtmdueday5('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday5($artmdueday5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY5, $artmdueday5, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths5(1234); // WHERE ArtmPlusMonths5 = 1234
     * $query->filterByArtmplusmonths5(array(12, 34)); // WHERE ArtmPlusMonths5 IN (12, 34)
     * $query->filterByArtmplusmonths5(array('min' => 12)); // WHERE ArtmPlusMonths5 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths5($artmplusmonths5 = null, $comparison = null)
    {
        if (is_array($artmplusmonths5)) {
            $useMinMax = false;
            if (isset($artmplusmonths5['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths5['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate5('fooValue');   // WHERE ArtmDueDate5 = 'fooValue'
     * $query->filterByArtmduedate5('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate5($artmduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE5, $artmduedate5, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear5('fooValue');   // WHERE ArtmPlusYear5 = 'fooValue'
     * $query->filterByArtmplusyear5('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear5($artmplusyear5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR5, $artmplusyear5, $comparison);
    }

    /**
     * Filter the query on the ArtmSplit6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmsplit6('fooValue');   // WHERE ArtmSplit6 = 'fooValue'
     * $query->filterByArtmsplit6('%fooValue%', Criteria::LIKE); // WHERE ArtmSplit6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmsplit6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit6($artmsplit6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMSPLIT6, $artmsplit6, $comparison);
    }

    /**
     * Filter the query on the ArtmOrderPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmorderpct6(1234); // WHERE ArtmOrderPct6 = 1234
     * $query->filterByArtmorderpct6(array(12, 34)); // WHERE ArtmOrderPct6 IN (12, 34)
     * $query->filterByArtmorderpct6(array('min' => 12)); // WHERE ArtmOrderPct6 > 12
     * </code>
     *
     * @param     mixed $artmorderpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct6($artmorderpct6 = null, $comparison = null)
    {
        if (is_array($artmorderpct6)) {
            $useMinMax = false;
            if (isset($artmorderpct6['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct6['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscPct6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscpct6(1234); // WHERE ArtmDiscPct6 = 1234
     * $query->filterByArtmdiscpct6(array(12, 34)); // WHERE ArtmDiscPct6 IN (12, 34)
     * $query->filterByArtmdiscpct6(array('min' => 12)); // WHERE ArtmDiscPct6 > 12
     * </code>
     *
     * @param     mixed $artmdiscpct6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct6($artmdiscpct6 = null, $comparison = null)
    {
        if (is_array($artmdiscpct6)) {
            $useMinMax = false;
            if (isset($artmdiscpct6['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct6['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDays6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdays6(1234); // WHERE ArtmDiscDays6 = 1234
     * $query->filterByArtmdiscdays6(array(12, 34)); // WHERE ArtmDiscDays6 IN (12, 34)
     * $query->filterByArtmdiscdays6(array('min' => 12)); // WHERE ArtmDiscDays6 > 12
     * </code>
     *
     * @param     mixed $artmdiscdays6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays6($artmdiscdays6 = null, $comparison = null)
    {
        if (is_array($artmdiscdays6)) {
            $useMinMax = false;
            if (isset($artmdiscdays6['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays6['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDay6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscday6('fooValue');   // WHERE ArtmDiscDay6 = 'fooValue'
     * $query->filterByArtmdiscday6('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDay6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscday6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday6($artmdiscday6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDAY6, $artmdiscday6, $comparison);
    }

    /**
     * Filter the query on the ArtmDiscDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdiscdate6('fooValue');   // WHERE ArtmDiscDate6 = 'fooValue'
     * $query->filterByArtmdiscdate6('%fooValue%', Criteria::LIKE); // WHERE ArtmDiscDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdiscdate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate6($artmdiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDISCDATE6, $artmdiscdate6, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDays6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedays6(1234); // WHERE ArtmDueDays6 = 1234
     * $query->filterByArtmduedays6(array(12, 34)); // WHERE ArtmDueDays6 IN (12, 34)
     * $query->filterByArtmduedays6(array('min' => 12)); // WHERE ArtmDueDays6 > 12
     * </code>
     *
     * @param     mixed $artmduedays6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays6($artmduedays6 = null, $comparison = null)
    {
        if (is_array($artmduedays6)) {
            $useMinMax = false;
            if (isset($artmduedays6['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays6['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDay6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdueday6('fooValue');   // WHERE ArtmDueDay6 = 'fooValue'
     * $query->filterByArtmdueday6('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDay6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmdueday6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday6($artmdueday6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDAY6, $artmdueday6, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusMonths6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusmonths6(1234); // WHERE ArtmPlusMonths6 = 1234
     * $query->filterByArtmplusmonths6(array(12, 34)); // WHERE ArtmPlusMonths6 IN (12, 34)
     * $query->filterByArtmplusmonths6(array('min' => 12)); // WHERE ArtmPlusMonths6 > 12
     * </code>
     *
     * @param     mixed $artmplusmonths6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths6($artmplusmonths6 = null, $comparison = null)
    {
        if (is_array($artmplusmonths6)) {
            $useMinMax = false;
            if (isset($artmplusmonths6['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths6['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6, $comparison);
    }

    /**
     * Filter the query on the ArtmDueDate6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmduedate6('fooValue');   // WHERE ArtmDueDate6 = 'fooValue'
     * $query->filterByArtmduedate6('%fooValue%', Criteria::LIKE); // WHERE ArtmDueDate6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmduedate6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate6($artmduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDUEDATE6, $artmduedate6, $comparison);
    }

    /**
     * Filter the query on the ArtmPlusYear6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmplusyear6('fooValue');   // WHERE ArtmPlusYear6 = 'fooValue'
     * $query->filterByArtmplusyear6('%fooValue%', Criteria::LIKE); // WHERE ArtmPlusYear6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmplusyear6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear6($artmplusyear6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMPLUSYEAR6, $artmplusyear6, $comparison);
    }

    /**
     * Filter the query on the ArtmDayFrom1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdayfrom1(1234); // WHERE ArtmDayFrom1 = 1234
     * $query->filterByArtmdayfrom1(array(12, 34)); // WHERE ArtmDayFrom1 IN (12, 34)
     * $query->filterByArtmdayfrom1(array('min' => 12)); // WHERE ArtmDayFrom1 > 12
     * </code>
     *
     * @param     mixed $artmdayfrom1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom1($artmdayfrom1 = null, $comparison = null)
    {
        if (is_array($artmdayfrom1)) {
            $useMinMax = false;
            if (isset($artmdayfrom1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1, $comparison);
    }

    /**
     * Filter the query on the ArtmDayThru1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdaythru1(1234); // WHERE ArtmDayThru1 = 1234
     * $query->filterByArtmdaythru1(array(12, 34)); // WHERE ArtmDayThru1 IN (12, 34)
     * $query->filterByArtmdaythru1(array('min' => 12)); // WHERE ArtmDayThru1 > 12
     * </code>
     *
     * @param     mixed $artmdaythru1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru1($artmdaythru1 = null, $comparison = null)
    {
        if (is_array($artmdaythru1)) {
            $useMinMax = false;
            if (isset($artmdaythru1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscpct1(1234); // WHERE ArtmEomDiscPct1 = 1234
     * $query->filterByArtmeomdiscpct1(array(12, 34)); // WHERE ArtmEomDiscPct1 IN (12, 34)
     * $query->filterByArtmeomdiscpct1(array('min' => 12)); // WHERE ArtmEomDiscPct1 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct1($artmeomdiscpct1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct1)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscday1(1234); // WHERE ArtmEomDiscDay1 = 1234
     * $query->filterByArtmeomdiscday1(array(12, 34)); // WHERE ArtmEomDiscDay1 IN (12, 34)
     * $query->filterByArtmeomdiscday1(array('min' => 12)); // WHERE ArtmEomDiscDay1 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscday1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday1($artmeomdiscday1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday1)) {
            $useMinMax = false;
            if (isset($artmeomdiscday1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscmonths1(1234); // WHERE ArtmEomDiscMonths1 = 1234
     * $query->filterByArtmeomdiscmonths1(array(12, 34)); // WHERE ArtmEomDiscMonths1 IN (12, 34)
     * $query->filterByArtmeomdiscmonths1(array('min' => 12)); // WHERE ArtmEomDiscMonths1 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths1($artmeomdiscmonths1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths1)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDueDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdueday1(1234); // WHERE ArtmEomDueDay1 = 1234
     * $query->filterByArtmeomdueday1(array(12, 34)); // WHERE ArtmEomDueDay1 IN (12, 34)
     * $query->filterByArtmeomdueday1(array('min' => 12)); // WHERE ArtmEomDueDay1 > 12
     * </code>
     *
     * @param     mixed $artmeomdueday1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday1($artmeomdueday1 = null, $comparison = null)
    {
        if (is_array($artmeomdueday1)) {
            $useMinMax = false;
            if (isset($artmeomdueday1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1, $comparison);
    }

    /**
     * Filter the query on the ArtmEomPlusMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomplusmonths1(1234); // WHERE ArtmEomPlusMonths1 = 1234
     * $query->filterByArtmeomplusmonths1(array(12, 34)); // WHERE ArtmEomPlusMonths1 IN (12, 34)
     * $query->filterByArtmeomplusmonths1(array('min' => 12)); // WHERE ArtmEomPlusMonths1 > 12
     * </code>
     *
     * @param     mixed $artmeomplusmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths1($artmeomplusmonths1 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths1)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths1['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths1['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1, $comparison);
    }

    /**
     * Filter the query on the ArtmDayFrom2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdayfrom2(1234); // WHERE ArtmDayFrom2 = 1234
     * $query->filterByArtmdayfrom2(array(12, 34)); // WHERE ArtmDayFrom2 IN (12, 34)
     * $query->filterByArtmdayfrom2(array('min' => 12)); // WHERE ArtmDayFrom2 > 12
     * </code>
     *
     * @param     mixed $artmdayfrom2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom2($artmdayfrom2 = null, $comparison = null)
    {
        if (is_array($artmdayfrom2)) {
            $useMinMax = false;
            if (isset($artmdayfrom2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2, $comparison);
    }

    /**
     * Filter the query on the ArtmDayThru2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdaythru2(1234); // WHERE ArtmDayThru2 = 1234
     * $query->filterByArtmdaythru2(array(12, 34)); // WHERE ArtmDayThru2 IN (12, 34)
     * $query->filterByArtmdaythru2(array('min' => 12)); // WHERE ArtmDayThru2 > 12
     * </code>
     *
     * @param     mixed $artmdaythru2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru2($artmdaythru2 = null, $comparison = null)
    {
        if (is_array($artmdaythru2)) {
            $useMinMax = false;
            if (isset($artmdaythru2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscpct2(1234); // WHERE ArtmEomDiscPct2 = 1234
     * $query->filterByArtmeomdiscpct2(array(12, 34)); // WHERE ArtmEomDiscPct2 IN (12, 34)
     * $query->filterByArtmeomdiscpct2(array('min' => 12)); // WHERE ArtmEomDiscPct2 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct2($artmeomdiscpct2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct2)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscday2(1234); // WHERE ArtmEomDiscDay2 = 1234
     * $query->filterByArtmeomdiscday2(array(12, 34)); // WHERE ArtmEomDiscDay2 IN (12, 34)
     * $query->filterByArtmeomdiscday2(array('min' => 12)); // WHERE ArtmEomDiscDay2 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscday2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday2($artmeomdiscday2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday2)) {
            $useMinMax = false;
            if (isset($artmeomdiscday2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscmonths2(1234); // WHERE ArtmEomDiscMonths2 = 1234
     * $query->filterByArtmeomdiscmonths2(array(12, 34)); // WHERE ArtmEomDiscMonths2 IN (12, 34)
     * $query->filterByArtmeomdiscmonths2(array('min' => 12)); // WHERE ArtmEomDiscMonths2 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths2($artmeomdiscmonths2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths2)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDueDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdueday2(1234); // WHERE ArtmEomDueDay2 = 1234
     * $query->filterByArtmeomdueday2(array(12, 34)); // WHERE ArtmEomDueDay2 IN (12, 34)
     * $query->filterByArtmeomdueday2(array('min' => 12)); // WHERE ArtmEomDueDay2 > 12
     * </code>
     *
     * @param     mixed $artmeomdueday2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday2($artmeomdueday2 = null, $comparison = null)
    {
        if (is_array($artmeomdueday2)) {
            $useMinMax = false;
            if (isset($artmeomdueday2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2, $comparison);
    }

    /**
     * Filter the query on the ArtmEomPlusMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomplusmonths2(1234); // WHERE ArtmEomPlusMonths2 = 1234
     * $query->filterByArtmeomplusmonths2(array(12, 34)); // WHERE ArtmEomPlusMonths2 IN (12, 34)
     * $query->filterByArtmeomplusmonths2(array('min' => 12)); // WHERE ArtmEomPlusMonths2 > 12
     * </code>
     *
     * @param     mixed $artmeomplusmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths2($artmeomplusmonths2 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths2)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths2['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths2['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2, $comparison);
    }

    /**
     * Filter the query on the ArtmDayFrom3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdayfrom3(1234); // WHERE ArtmDayFrom3 = 1234
     * $query->filterByArtmdayfrom3(array(12, 34)); // WHERE ArtmDayFrom3 IN (12, 34)
     * $query->filterByArtmdayfrom3(array('min' => 12)); // WHERE ArtmDayFrom3 > 12
     * </code>
     *
     * @param     mixed $artmdayfrom3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom3($artmdayfrom3 = null, $comparison = null)
    {
        if (is_array($artmdayfrom3)) {
            $useMinMax = false;
            if (isset($artmdayfrom3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3, $comparison);
    }

    /**
     * Filter the query on the ArtmDayThru3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmdaythru3(1234); // WHERE ArtmDayThru3 = 1234
     * $query->filterByArtmdaythru3(array(12, 34)); // WHERE ArtmDayThru3 IN (12, 34)
     * $query->filterByArtmdaythru3(array('min' => 12)); // WHERE ArtmDayThru3 > 12
     * </code>
     *
     * @param     mixed $artmdaythru3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru3($artmdaythru3 = null, $comparison = null)
    {
        if (is_array($artmdaythru3)) {
            $useMinMax = false;
            if (isset($artmdaythru3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscpct3(1234); // WHERE ArtmEomDiscPct3 = 1234
     * $query->filterByArtmeomdiscpct3(array(12, 34)); // WHERE ArtmEomDiscPct3 IN (12, 34)
     * $query->filterByArtmeomdiscpct3(array('min' => 12)); // WHERE ArtmEomDiscPct3 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct3($artmeomdiscpct3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct3)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscday3(1234); // WHERE ArtmEomDiscDay3 = 1234
     * $query->filterByArtmeomdiscday3(array(12, 34)); // WHERE ArtmEomDiscDay3 IN (12, 34)
     * $query->filterByArtmeomdiscday3(array('min' => 12)); // WHERE ArtmEomDiscDay3 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscday3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday3($artmeomdiscday3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday3)) {
            $useMinMax = false;
            if (isset($artmeomdiscday3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDiscMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdiscmonths3(1234); // WHERE ArtmEomDiscMonths3 = 1234
     * $query->filterByArtmeomdiscmonths3(array(12, 34)); // WHERE ArtmEomDiscMonths3 IN (12, 34)
     * $query->filterByArtmeomdiscmonths3(array('min' => 12)); // WHERE ArtmEomDiscMonths3 > 12
     * </code>
     *
     * @param     mixed $artmeomdiscmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths3($artmeomdiscmonths3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths3)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3, $comparison);
    }

    /**
     * Filter the query on the ArtmEomDueDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomdueday3(1234); // WHERE ArtmEomDueDay3 = 1234
     * $query->filterByArtmeomdueday3(array(12, 34)); // WHERE ArtmEomDueDay3 IN (12, 34)
     * $query->filterByArtmeomdueday3(array('min' => 12)); // WHERE ArtmEomDueDay3 > 12
     * </code>
     *
     * @param     mixed $artmeomdueday3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday3($artmeomdueday3 = null, $comparison = null)
    {
        if (is_array($artmeomdueday3)) {
            $useMinMax = false;
            if (isset($artmeomdueday3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3, $comparison);
    }

    /**
     * Filter the query on the ArtmEomPlusMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmeomplusmonths3(1234); // WHERE ArtmEomPlusMonths3 = 1234
     * $query->filterByArtmeomplusmonths3(array(12, 34)); // WHERE ArtmEomPlusMonths3 IN (12, 34)
     * $query->filterByArtmeomplusmonths3(array('min' => 12)); // WHERE ArtmEomPlusMonths3 > 12
     * </code>
     *
     * @param     mixed $artmeomplusmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths3($artmeomplusmonths3 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths3)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths3['min'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths3['max'])) {
                $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3, $comparison);
    }

    /**
     * Filter the query on the ArtmCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmctry('fooValue');   // WHERE ArtmCtry = 'fooValue'
     * $query->filterByArtmctry('%fooValue%', Criteria::LIKE); // WHERE ArtmCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmctry($artmctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMCTRY, $artmctry, $comparison);
    }

    /**
     * Filter the query on the ArtmTermGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermgrup('fooValue');   // WHERE ArtmTermGrup = 'fooValue'
     * $query->filterByArtmtermgrup('%fooValue%', Criteria::LIKE); // WHERE ArtmTermGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermgrup($artmtermgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMGRUP, $artmtermgrup, $comparison);
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
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArTermsCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArTermsCode $arTermsCode Object to remove from the list of results
     *
     * @return $this|ChildArTermsCodeQuery The current query, for fluid interface
     */
    public function prune($arTermsCode = null)
    {
        if ($arTermsCode) {
            $this->addUsingAlias(ArTermsCodeTableMap::COL_ARTMTERMCD, $arTermsCode->getArtmtermcd(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_term_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArTermsCodeTableMap::clearInstancePool();
            ArTermsCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArTermsCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArTermsCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArTermsCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArTermsCodeQuery
