<?php

namespace Base;

use \CustomerTermsCode as ChildCustomerTermsCode;
use \CustomerTermsCodeQuery as ChildCustomerTermsCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerTermsCodeTableMap;
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
 * @method     ChildCustomerTermsCodeQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildCustomerTermsCodeQuery orderByArtmtermdesc($order = Criteria::ASC) Order by the ArtmTermDesc column
 * @method     ChildCustomerTermsCodeQuery orderByArtmmethod($order = Criteria::ASC) Order by the ArtmMethod column
 * @method     ChildCustomerTermsCodeQuery orderByArtmtype($order = Criteria::ASC) Order by the ArtmType column
 * @method     ChildCustomerTermsCodeQuery orderByArtmhold($order = Criteria::ASC) Order by the ArtmHold column
 * @method     ChildCustomerTermsCodeQuery orderByArtmexpiredate($order = Criteria::ASC) Order by the ArtmExpireDate column
 * @method     ChildCustomerTermsCodeQuery orderByArtmfrtallow($order = Criteria::ASC) Order by the ArtmFrtAllow column
 * @method     ChildCustomerTermsCodeQuery orderByArtmccprefix($order = Criteria::ASC) Order by the ArtmCcPrefix column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit1($order = Criteria::ASC) Order by the ArtmSplit1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct1($order = Criteria::ASC) Order by the ArtmOrderPct1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct1($order = Criteria::ASC) Order by the ArtmDiscPct1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays1($order = Criteria::ASC) Order by the ArtmDiscDays1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday1($order = Criteria::ASC) Order by the ArtmDiscDay1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate1($order = Criteria::ASC) Order by the ArtmDiscDate1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays1($order = Criteria::ASC) Order by the ArtmDueDays1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday1($order = Criteria::ASC) Order by the ArtmDueDay1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths1($order = Criteria::ASC) Order by the ArtmPlusMonths1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate1($order = Criteria::ASC) Order by the ArtmDueDate1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear1($order = Criteria::ASC) Order by the ArtmPlusYear1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit2($order = Criteria::ASC) Order by the ArtmSplit2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct2($order = Criteria::ASC) Order by the ArtmOrderPct2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct2($order = Criteria::ASC) Order by the ArtmDiscPct2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays2($order = Criteria::ASC) Order by the ArtmDiscDays2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday2($order = Criteria::ASC) Order by the ArtmDiscDay2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate2($order = Criteria::ASC) Order by the ArtmDiscDate2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays2($order = Criteria::ASC) Order by the ArtmDueDays2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday2($order = Criteria::ASC) Order by the ArtmDueDay2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths2($order = Criteria::ASC) Order by the ArtmPlusMonths2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate2($order = Criteria::ASC) Order by the ArtmDueDate2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear2($order = Criteria::ASC) Order by the ArtmPlusYear2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit3($order = Criteria::ASC) Order by the ArtmSplit3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct3($order = Criteria::ASC) Order by the ArtmOrderPct3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct3($order = Criteria::ASC) Order by the ArtmDiscPct3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays3($order = Criteria::ASC) Order by the ArtmDiscDays3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday3($order = Criteria::ASC) Order by the ArtmDiscDay3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate3($order = Criteria::ASC) Order by the ArtmDiscDate3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays3($order = Criteria::ASC) Order by the ArtmDueDays3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday3($order = Criteria::ASC) Order by the ArtmDueDay3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths3($order = Criteria::ASC) Order by the ArtmPlusMonths3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate3($order = Criteria::ASC) Order by the ArtmDueDate3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear3($order = Criteria::ASC) Order by the ArtmPlusYear3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit4($order = Criteria::ASC) Order by the ArtmSplit4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct4($order = Criteria::ASC) Order by the ArtmOrderPct4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct4($order = Criteria::ASC) Order by the ArtmDiscPct4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays4($order = Criteria::ASC) Order by the ArtmDiscDays4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday4($order = Criteria::ASC) Order by the ArtmDiscDay4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate4($order = Criteria::ASC) Order by the ArtmDiscDate4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays4($order = Criteria::ASC) Order by the ArtmDueDays4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday4($order = Criteria::ASC) Order by the ArtmDueDay4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths4($order = Criteria::ASC) Order by the ArtmPlusMonths4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate4($order = Criteria::ASC) Order by the ArtmDueDate4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear4($order = Criteria::ASC) Order by the ArtmPlusYear4 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit5($order = Criteria::ASC) Order by the ArtmSplit5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct5($order = Criteria::ASC) Order by the ArtmOrderPct5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct5($order = Criteria::ASC) Order by the ArtmDiscPct5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays5($order = Criteria::ASC) Order by the ArtmDiscDays5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday5($order = Criteria::ASC) Order by the ArtmDiscDay5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate5($order = Criteria::ASC) Order by the ArtmDiscDate5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays5($order = Criteria::ASC) Order by the ArtmDueDays5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday5($order = Criteria::ASC) Order by the ArtmDueDay5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths5($order = Criteria::ASC) Order by the ArtmPlusMonths5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate5($order = Criteria::ASC) Order by the ArtmDueDate5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear5($order = Criteria::ASC) Order by the ArtmPlusYear5 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmsplit6($order = Criteria::ASC) Order by the ArtmSplit6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmorderpct6($order = Criteria::ASC) Order by the ArtmOrderPct6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscpct6($order = Criteria::ASC) Order by the ArtmDiscPct6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdays6($order = Criteria::ASC) Order by the ArtmDiscDays6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscday6($order = Criteria::ASC) Order by the ArtmDiscDay6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdiscdate6($order = Criteria::ASC) Order by the ArtmDiscDate6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedays6($order = Criteria::ASC) Order by the ArtmDueDays6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdueday6($order = Criteria::ASC) Order by the ArtmDueDay6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusmonths6($order = Criteria::ASC) Order by the ArtmPlusMonths6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmduedate6($order = Criteria::ASC) Order by the ArtmDueDate6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmplusyear6($order = Criteria::ASC) Order by the ArtmPlusYear6 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdayfrom1($order = Criteria::ASC) Order by the ArtmDayFrom1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdaythru1($order = Criteria::ASC) Order by the ArtmDayThru1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscpct1($order = Criteria::ASC) Order by the ArtmEomDiscPct1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscday1($order = Criteria::ASC) Order by the ArtmEomDiscDay1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscmonths1($order = Criteria::ASC) Order by the ArtmEomDiscMonths1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdueday1($order = Criteria::ASC) Order by the ArtmEomDueDay1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomplusmonths1($order = Criteria::ASC) Order by the ArtmEomPlusMonths1 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdayfrom2($order = Criteria::ASC) Order by the ArtmDayFrom2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdaythru2($order = Criteria::ASC) Order by the ArtmDayThru2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscpct2($order = Criteria::ASC) Order by the ArtmEomDiscPct2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscday2($order = Criteria::ASC) Order by the ArtmEomDiscDay2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscmonths2($order = Criteria::ASC) Order by the ArtmEomDiscMonths2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdueday2($order = Criteria::ASC) Order by the ArtmEomDueDay2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomplusmonths2($order = Criteria::ASC) Order by the ArtmEomPlusMonths2 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdayfrom3($order = Criteria::ASC) Order by the ArtmDayFrom3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmdaythru3($order = Criteria::ASC) Order by the ArtmDayThru3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscpct3($order = Criteria::ASC) Order by the ArtmEomDiscPct3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscday3($order = Criteria::ASC) Order by the ArtmEomDiscDay3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdiscmonths3($order = Criteria::ASC) Order by the ArtmEomDiscMonths3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomdueday3($order = Criteria::ASC) Order by the ArtmEomDueDay3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmeomplusmonths3($order = Criteria::ASC) Order by the ArtmEomPlusMonths3 column
 * @method     ChildCustomerTermsCodeQuery orderByArtmctry($order = Criteria::ASC) Order by the ArtmCtry column
 * @method     ChildCustomerTermsCodeQuery orderByArtmtermgrup($order = Criteria::ASC) Order by the ArtmTermGrup column
 * @method     ChildCustomerTermsCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerTermsCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerTermsCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerTermsCodeQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildCustomerTermsCodeQuery groupByArtmtermdesc() Group by the ArtmTermDesc column
 * @method     ChildCustomerTermsCodeQuery groupByArtmmethod() Group by the ArtmMethod column
 * @method     ChildCustomerTermsCodeQuery groupByArtmtype() Group by the ArtmType column
 * @method     ChildCustomerTermsCodeQuery groupByArtmhold() Group by the ArtmHold column
 * @method     ChildCustomerTermsCodeQuery groupByArtmexpiredate() Group by the ArtmExpireDate column
 * @method     ChildCustomerTermsCodeQuery groupByArtmfrtallow() Group by the ArtmFrtAllow column
 * @method     ChildCustomerTermsCodeQuery groupByArtmccprefix() Group by the ArtmCcPrefix column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit1() Group by the ArtmSplit1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct1() Group by the ArtmOrderPct1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct1() Group by the ArtmDiscPct1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays1() Group by the ArtmDiscDays1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday1() Group by the ArtmDiscDay1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate1() Group by the ArtmDiscDate1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays1() Group by the ArtmDueDays1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday1() Group by the ArtmDueDay1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths1() Group by the ArtmPlusMonths1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate1() Group by the ArtmDueDate1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear1() Group by the ArtmPlusYear1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit2() Group by the ArtmSplit2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct2() Group by the ArtmOrderPct2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct2() Group by the ArtmDiscPct2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays2() Group by the ArtmDiscDays2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday2() Group by the ArtmDiscDay2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate2() Group by the ArtmDiscDate2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays2() Group by the ArtmDueDays2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday2() Group by the ArtmDueDay2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths2() Group by the ArtmPlusMonths2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate2() Group by the ArtmDueDate2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear2() Group by the ArtmPlusYear2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit3() Group by the ArtmSplit3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct3() Group by the ArtmOrderPct3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct3() Group by the ArtmDiscPct3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays3() Group by the ArtmDiscDays3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday3() Group by the ArtmDiscDay3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate3() Group by the ArtmDiscDate3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays3() Group by the ArtmDueDays3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday3() Group by the ArtmDueDay3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths3() Group by the ArtmPlusMonths3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate3() Group by the ArtmDueDate3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear3() Group by the ArtmPlusYear3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit4() Group by the ArtmSplit4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct4() Group by the ArtmOrderPct4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct4() Group by the ArtmDiscPct4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays4() Group by the ArtmDiscDays4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday4() Group by the ArtmDiscDay4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate4() Group by the ArtmDiscDate4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays4() Group by the ArtmDueDays4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday4() Group by the ArtmDueDay4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths4() Group by the ArtmPlusMonths4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate4() Group by the ArtmDueDate4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear4() Group by the ArtmPlusYear4 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit5() Group by the ArtmSplit5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct5() Group by the ArtmOrderPct5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct5() Group by the ArtmDiscPct5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays5() Group by the ArtmDiscDays5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday5() Group by the ArtmDiscDay5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate5() Group by the ArtmDiscDate5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays5() Group by the ArtmDueDays5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday5() Group by the ArtmDueDay5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths5() Group by the ArtmPlusMonths5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate5() Group by the ArtmDueDate5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear5() Group by the ArtmPlusYear5 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmsplit6() Group by the ArtmSplit6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmorderpct6() Group by the ArtmOrderPct6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscpct6() Group by the ArtmDiscPct6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdays6() Group by the ArtmDiscDays6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscday6() Group by the ArtmDiscDay6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdiscdate6() Group by the ArtmDiscDate6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedays6() Group by the ArtmDueDays6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdueday6() Group by the ArtmDueDay6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusmonths6() Group by the ArtmPlusMonths6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmduedate6() Group by the ArtmDueDate6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmplusyear6() Group by the ArtmPlusYear6 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdayfrom1() Group by the ArtmDayFrom1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdaythru1() Group by the ArtmDayThru1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscpct1() Group by the ArtmEomDiscPct1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscday1() Group by the ArtmEomDiscDay1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscmonths1() Group by the ArtmEomDiscMonths1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdueday1() Group by the ArtmEomDueDay1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomplusmonths1() Group by the ArtmEomPlusMonths1 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdayfrom2() Group by the ArtmDayFrom2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdaythru2() Group by the ArtmDayThru2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscpct2() Group by the ArtmEomDiscPct2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscday2() Group by the ArtmEomDiscDay2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscmonths2() Group by the ArtmEomDiscMonths2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdueday2() Group by the ArtmEomDueDay2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomplusmonths2() Group by the ArtmEomPlusMonths2 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdayfrom3() Group by the ArtmDayFrom3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmdaythru3() Group by the ArtmDayThru3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscpct3() Group by the ArtmEomDiscPct3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscday3() Group by the ArtmEomDiscDay3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdiscmonths3() Group by the ArtmEomDiscMonths3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomdueday3() Group by the ArtmEomDueDay3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmeomplusmonths3() Group by the ArtmEomPlusMonths3 column
 * @method     ChildCustomerTermsCodeQuery groupByArtmctry() Group by the ArtmCtry column
 * @method     ChildCustomerTermsCodeQuery groupByArtmtermgrup() Group by the ArtmTermGrup column
 * @method     ChildCustomerTermsCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerTermsCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerTermsCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerTermsCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerTermsCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerTermsCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerTermsCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerTermsCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerTermsCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerTermsCode findOne(ConnectionInterface $con = null) Return the first ChildCustomerTermsCode matching the query
 * @method     ChildCustomerTermsCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerTermsCode matching the query, or a new ChildCustomerTermsCode object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerTermsCode findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildCustomerTermsCode filtered by the ArtmTermCd column
 * @method     ChildCustomerTermsCode findOneByArtmtermdesc(string $ArtmTermDesc) Return the first ChildCustomerTermsCode filtered by the ArtmTermDesc column
 * @method     ChildCustomerTermsCode findOneByArtmmethod(string $ArtmMethod) Return the first ChildCustomerTermsCode filtered by the ArtmMethod column
 * @method     ChildCustomerTermsCode findOneByArtmtype(string $ArtmType) Return the first ChildCustomerTermsCode filtered by the ArtmType column
 * @method     ChildCustomerTermsCode findOneByArtmhold(string $ArtmHold) Return the first ChildCustomerTermsCode filtered by the ArtmHold column
 * @method     ChildCustomerTermsCode findOneByArtmexpiredate(string $ArtmExpireDate) Return the first ChildCustomerTermsCode filtered by the ArtmExpireDate column
 * @method     ChildCustomerTermsCode findOneByArtmfrtallow(string $ArtmFrtAllow) Return the first ChildCustomerTermsCode filtered by the ArtmFrtAllow column
 * @method     ChildCustomerTermsCode findOneByArtmccprefix(string $ArtmCcPrefix) Return the first ChildCustomerTermsCode filtered by the ArtmCcPrefix column
 * @method     ChildCustomerTermsCode findOneByArtmsplit1(string $ArtmSplit1) Return the first ChildCustomerTermsCode filtered by the ArtmSplit1 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct1(string $ArtmOrderPct1) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct1 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct1(string $ArtmDiscPct1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct1 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays1(int $ArtmDiscDays1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays1 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday1(string $ArtmDiscDay1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay1 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate1(string $ArtmDiscDate1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate1 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays1(int $ArtmDueDays1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays1 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday1(string $ArtmDueDay1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay1 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths1(int $ArtmPlusMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths1 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate1(string $ArtmDueDate1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate1 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear1(string $ArtmPlusYear1) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear1 column
 * @method     ChildCustomerTermsCode findOneByArtmsplit2(string $ArtmSplit2) Return the first ChildCustomerTermsCode filtered by the ArtmSplit2 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct2(string $ArtmOrderPct2) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct2 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct2(string $ArtmDiscPct2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct2 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays2(int $ArtmDiscDays2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays2 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday2(string $ArtmDiscDay2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay2 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate2(string $ArtmDiscDate2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate2 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays2(int $ArtmDueDays2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays2 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday2(string $ArtmDueDay2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay2 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths2(int $ArtmPlusMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths2 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate2(string $ArtmDueDate2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate2 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear2(string $ArtmPlusYear2) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear2 column
 * @method     ChildCustomerTermsCode findOneByArtmsplit3(string $ArtmSplit3) Return the first ChildCustomerTermsCode filtered by the ArtmSplit3 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct3(string $ArtmOrderPct3) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct3 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct3(string $ArtmDiscPct3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct3 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays3(int $ArtmDiscDays3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays3 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday3(string $ArtmDiscDay3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay3 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate3(string $ArtmDiscDate3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate3 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays3(int $ArtmDueDays3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays3 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday3(string $ArtmDueDay3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay3 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths3(int $ArtmPlusMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths3 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate3(string $ArtmDueDate3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate3 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear3(string $ArtmPlusYear3) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear3 column
 * @method     ChildCustomerTermsCode findOneByArtmsplit4(string $ArtmSplit4) Return the first ChildCustomerTermsCode filtered by the ArtmSplit4 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct4(string $ArtmOrderPct4) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct4 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct4(string $ArtmDiscPct4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct4 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays4(int $ArtmDiscDays4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays4 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday4(string $ArtmDiscDay4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay4 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate4(string $ArtmDiscDate4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate4 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays4(int $ArtmDueDays4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays4 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday4(string $ArtmDueDay4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay4 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths4(int $ArtmPlusMonths4) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths4 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate4(string $ArtmDueDate4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate4 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear4(string $ArtmPlusYear4) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear4 column
 * @method     ChildCustomerTermsCode findOneByArtmsplit5(string $ArtmSplit5) Return the first ChildCustomerTermsCode filtered by the ArtmSplit5 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct5(string $ArtmOrderPct5) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct5 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct5(string $ArtmDiscPct5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct5 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays5(int $ArtmDiscDays5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays5 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday5(string $ArtmDiscDay5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay5 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate5(string $ArtmDiscDate5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate5 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays5(int $ArtmDueDays5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays5 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday5(string $ArtmDueDay5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay5 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths5(int $ArtmPlusMonths5) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths5 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate5(string $ArtmDueDate5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate5 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear5(string $ArtmPlusYear5) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear5 column
 * @method     ChildCustomerTermsCode findOneByArtmsplit6(string $ArtmSplit6) Return the first ChildCustomerTermsCode filtered by the ArtmSplit6 column
 * @method     ChildCustomerTermsCode findOneByArtmorderpct6(string $ArtmOrderPct6) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct6 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscpct6(string $ArtmDiscPct6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct6 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdays6(int $ArtmDiscDays6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays6 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscday6(string $ArtmDiscDay6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay6 column
 * @method     ChildCustomerTermsCode findOneByArtmdiscdate6(string $ArtmDiscDate6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate6 column
 * @method     ChildCustomerTermsCode findOneByArtmduedays6(int $ArtmDueDays6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays6 column
 * @method     ChildCustomerTermsCode findOneByArtmdueday6(string $ArtmDueDay6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay6 column
 * @method     ChildCustomerTermsCode findOneByArtmplusmonths6(int $ArtmPlusMonths6) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths6 column
 * @method     ChildCustomerTermsCode findOneByArtmduedate6(string $ArtmDueDate6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate6 column
 * @method     ChildCustomerTermsCode findOneByArtmplusyear6(string $ArtmPlusYear6) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear6 column
 * @method     ChildCustomerTermsCode findOneByArtmdayfrom1(int $ArtmDayFrom1) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom1 column
 * @method     ChildCustomerTermsCode findOneByArtmdaythru1(int $ArtmDayThru1) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru1 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct1 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscday1(int $ArtmEomDiscDay1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay1 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths1 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdueday1(int $ArtmEomDueDay1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay1 column
 * @method     ChildCustomerTermsCode findOneByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths1 column
 * @method     ChildCustomerTermsCode findOneByArtmdayfrom2(int $ArtmDayFrom2) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom2 column
 * @method     ChildCustomerTermsCode findOneByArtmdaythru2(int $ArtmDayThru2) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru2 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct2 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscday2(int $ArtmEomDiscDay2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay2 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths2 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdueday2(int $ArtmEomDueDay2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay2 column
 * @method     ChildCustomerTermsCode findOneByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths2 column
 * @method     ChildCustomerTermsCode findOneByArtmdayfrom3(int $ArtmDayFrom3) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom3 column
 * @method     ChildCustomerTermsCode findOneByArtmdaythru3(int $ArtmDayThru3) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru3 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct3 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscday3(int $ArtmEomDiscDay3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay3 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths3 column
 * @method     ChildCustomerTermsCode findOneByArtmeomdueday3(int $ArtmEomDueDay3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay3 column
 * @method     ChildCustomerTermsCode findOneByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths3 column
 * @method     ChildCustomerTermsCode findOneByArtmctry(string $ArtmCtry) Return the first ChildCustomerTermsCode filtered by the ArtmCtry column
 * @method     ChildCustomerTermsCode findOneByArtmtermgrup(string $ArtmTermGrup) Return the first ChildCustomerTermsCode filtered by the ArtmTermGrup column
 * @method     ChildCustomerTermsCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTermsCode filtered by the DateUpdtd column
 * @method     ChildCustomerTermsCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTermsCode filtered by the TimeUpdtd column
 * @method     ChildCustomerTermsCode findOneByDummy(string $dummy) Return the first ChildCustomerTermsCode filtered by the dummy column *

 * @method     ChildCustomerTermsCode requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerTermsCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOne(ConnectionInterface $con = null) Return the first ChildCustomerTermsCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTermsCode requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildCustomerTermsCode filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmtermdesc(string $ArtmTermDesc) Return the first ChildCustomerTermsCode filtered by the ArtmTermDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmmethod(string $ArtmMethod) Return the first ChildCustomerTermsCode filtered by the ArtmMethod column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmtype(string $ArtmType) Return the first ChildCustomerTermsCode filtered by the ArtmType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmhold(string $ArtmHold) Return the first ChildCustomerTermsCode filtered by the ArtmHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmexpiredate(string $ArtmExpireDate) Return the first ChildCustomerTermsCode filtered by the ArtmExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmfrtallow(string $ArtmFrtAllow) Return the first ChildCustomerTermsCode filtered by the ArtmFrtAllow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmccprefix(string $ArtmCcPrefix) Return the first ChildCustomerTermsCode filtered by the ArtmCcPrefix column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit1(string $ArtmSplit1) Return the first ChildCustomerTermsCode filtered by the ArtmSplit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct1(string $ArtmOrderPct1) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct1(string $ArtmDiscPct1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays1(int $ArtmDiscDays1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday1(string $ArtmDiscDay1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate1(string $ArtmDiscDate1) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays1(int $ArtmDueDays1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday1(string $ArtmDueDay1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths1(int $ArtmPlusMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate1(string $ArtmDueDate1) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear1(string $ArtmPlusYear1) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit2(string $ArtmSplit2) Return the first ChildCustomerTermsCode filtered by the ArtmSplit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct2(string $ArtmOrderPct2) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct2(string $ArtmDiscPct2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays2(int $ArtmDiscDays2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday2(string $ArtmDiscDay2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate2(string $ArtmDiscDate2) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays2(int $ArtmDueDays2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday2(string $ArtmDueDay2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths2(int $ArtmPlusMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate2(string $ArtmDueDate2) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear2(string $ArtmPlusYear2) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit3(string $ArtmSplit3) Return the first ChildCustomerTermsCode filtered by the ArtmSplit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct3(string $ArtmOrderPct3) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct3(string $ArtmDiscPct3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays3(int $ArtmDiscDays3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday3(string $ArtmDiscDay3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate3(string $ArtmDiscDate3) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays3(int $ArtmDueDays3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday3(string $ArtmDueDay3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths3(int $ArtmPlusMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate3(string $ArtmDueDate3) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear3(string $ArtmPlusYear3) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit4(string $ArtmSplit4) Return the first ChildCustomerTermsCode filtered by the ArtmSplit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct4(string $ArtmOrderPct4) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct4(string $ArtmDiscPct4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays4(int $ArtmDiscDays4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday4(string $ArtmDiscDay4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate4(string $ArtmDiscDate4) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays4(int $ArtmDueDays4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday4(string $ArtmDueDay4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths4(int $ArtmPlusMonths4) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate4(string $ArtmDueDate4) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear4(string $ArtmPlusYear4) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit5(string $ArtmSplit5) Return the first ChildCustomerTermsCode filtered by the ArtmSplit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct5(string $ArtmOrderPct5) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct5(string $ArtmDiscPct5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays5(int $ArtmDiscDays5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday5(string $ArtmDiscDay5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate5(string $ArtmDiscDate5) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays5(int $ArtmDueDays5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday5(string $ArtmDueDay5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths5(int $ArtmPlusMonths5) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate5(string $ArtmDueDate5) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear5(string $ArtmPlusYear5) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmsplit6(string $ArtmSplit6) Return the first ChildCustomerTermsCode filtered by the ArtmSplit6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmorderpct6(string $ArtmOrderPct6) Return the first ChildCustomerTermsCode filtered by the ArtmOrderPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscpct6(string $ArtmDiscPct6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscPct6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdays6(int $ArtmDiscDays6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDays6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscday6(string $ArtmDiscDay6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDay6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdiscdate6(string $ArtmDiscDate6) Return the first ChildCustomerTermsCode filtered by the ArtmDiscDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedays6(int $ArtmDueDays6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDays6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdueday6(string $ArtmDueDay6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDay6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusmonths6(int $ArtmPlusMonths6) Return the first ChildCustomerTermsCode filtered by the ArtmPlusMonths6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmduedate6(string $ArtmDueDate6) Return the first ChildCustomerTermsCode filtered by the ArtmDueDate6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmplusyear6(string $ArtmPlusYear6) Return the first ChildCustomerTermsCode filtered by the ArtmPlusYear6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdayfrom1(int $ArtmDayFrom1) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdaythru1(int $ArtmDayThru1) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscday1(int $ArtmEomDiscDay1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdueday1(int $ArtmEomDueDay1) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdayfrom2(int $ArtmDayFrom2) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdaythru2(int $ArtmDayThru2) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscday2(int $ArtmEomDiscDay2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdueday2(int $ArtmEomDueDay2) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdayfrom3(int $ArtmDayFrom3) Return the first ChildCustomerTermsCode filtered by the ArtmDayFrom3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmdaythru3(int $ArtmDayThru3) Return the first ChildCustomerTermsCode filtered by the ArtmDayThru3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscday3(int $ArtmEomDiscDay3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDiscMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomdueday3(int $ArtmEomDueDay3) Return the first ChildCustomerTermsCode filtered by the ArtmEomDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return the first ChildCustomerTermsCode filtered by the ArtmEomPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmctry(string $ArtmCtry) Return the first ChildCustomerTermsCode filtered by the ArtmCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByArtmtermgrup(string $ArtmTermGrup) Return the first ChildCustomerTermsCode filtered by the ArtmTermGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTermsCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTermsCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTermsCode requireOneByDummy(string $dummy) Return the first ChildCustomerTermsCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTermsCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerTermsCode objects based on current ModelCriteria
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildCustomerTermsCode objects filtered by the ArtmTermCd column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmtermdesc(string $ArtmTermDesc) Return ChildCustomerTermsCode objects filtered by the ArtmTermDesc column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmmethod(string $ArtmMethod) Return ChildCustomerTermsCode objects filtered by the ArtmMethod column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmtype(string $ArtmType) Return ChildCustomerTermsCode objects filtered by the ArtmType column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmhold(string $ArtmHold) Return ChildCustomerTermsCode objects filtered by the ArtmHold column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmexpiredate(string $ArtmExpireDate) Return ChildCustomerTermsCode objects filtered by the ArtmExpireDate column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmfrtallow(string $ArtmFrtAllow) Return ChildCustomerTermsCode objects filtered by the ArtmFrtAllow column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmccprefix(string $ArtmCcPrefix) Return ChildCustomerTermsCode objects filtered by the ArtmCcPrefix column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit1(string $ArtmSplit1) Return ChildCustomerTermsCode objects filtered by the ArtmSplit1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct1(string $ArtmOrderPct1) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct1(string $ArtmDiscPct1) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays1(int $ArtmDiscDays1) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday1(string $ArtmDiscDay1) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate1(string $ArtmDiscDate1) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays1(int $ArtmDueDays1) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday1(string $ArtmDueDay1) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths1(int $ArtmPlusMonths1) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate1(string $ArtmDueDate1) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear1(string $ArtmPlusYear1) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit2(string $ArtmSplit2) Return ChildCustomerTermsCode objects filtered by the ArtmSplit2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct2(string $ArtmOrderPct2) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct2(string $ArtmDiscPct2) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays2(int $ArtmDiscDays2) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday2(string $ArtmDiscDay2) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate2(string $ArtmDiscDate2) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays2(int $ArtmDueDays2) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday2(string $ArtmDueDay2) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths2(int $ArtmPlusMonths2) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate2(string $ArtmDueDate2) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear2(string $ArtmPlusYear2) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit3(string $ArtmSplit3) Return ChildCustomerTermsCode objects filtered by the ArtmSplit3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct3(string $ArtmOrderPct3) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct3(string $ArtmDiscPct3) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays3(int $ArtmDiscDays3) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday3(string $ArtmDiscDay3) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate3(string $ArtmDiscDate3) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays3(int $ArtmDueDays3) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday3(string $ArtmDueDay3) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths3(int $ArtmPlusMonths3) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate3(string $ArtmDueDate3) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear3(string $ArtmPlusYear3) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit4(string $ArtmSplit4) Return ChildCustomerTermsCode objects filtered by the ArtmSplit4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct4(string $ArtmOrderPct4) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct4(string $ArtmDiscPct4) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays4(int $ArtmDiscDays4) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday4(string $ArtmDiscDay4) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate4(string $ArtmDiscDate4) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays4(int $ArtmDueDays4) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday4(string $ArtmDueDay4) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths4(int $ArtmPlusMonths4) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate4(string $ArtmDueDate4) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear4(string $ArtmPlusYear4) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear4 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit5(string $ArtmSplit5) Return ChildCustomerTermsCode objects filtered by the ArtmSplit5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct5(string $ArtmOrderPct5) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct5(string $ArtmDiscPct5) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays5(int $ArtmDiscDays5) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday5(string $ArtmDiscDay5) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate5(string $ArtmDiscDate5) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays5(int $ArtmDueDays5) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday5(string $ArtmDueDay5) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths5(int $ArtmPlusMonths5) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate5(string $ArtmDueDate5) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear5(string $ArtmPlusYear5) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear5 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmsplit6(string $ArtmSplit6) Return ChildCustomerTermsCode objects filtered by the ArtmSplit6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmorderpct6(string $ArtmOrderPct6) Return ChildCustomerTermsCode objects filtered by the ArtmOrderPct6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscpct6(string $ArtmDiscPct6) Return ChildCustomerTermsCode objects filtered by the ArtmDiscPct6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdays6(int $ArtmDiscDays6) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDays6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscday6(string $ArtmDiscDay6) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDay6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdiscdate6(string $ArtmDiscDate6) Return ChildCustomerTermsCode objects filtered by the ArtmDiscDate6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedays6(int $ArtmDueDays6) Return ChildCustomerTermsCode objects filtered by the ArtmDueDays6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdueday6(string $ArtmDueDay6) Return ChildCustomerTermsCode objects filtered by the ArtmDueDay6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusmonths6(int $ArtmPlusMonths6) Return ChildCustomerTermsCode objects filtered by the ArtmPlusMonths6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmduedate6(string $ArtmDueDate6) Return ChildCustomerTermsCode objects filtered by the ArtmDueDate6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmplusyear6(string $ArtmPlusYear6) Return ChildCustomerTermsCode objects filtered by the ArtmPlusYear6 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdayfrom1(int $ArtmDayFrom1) Return ChildCustomerTermsCode objects filtered by the ArtmDayFrom1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdaythru1(int $ArtmDayThru1) Return ChildCustomerTermsCode objects filtered by the ArtmDayThru1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscpct1(string $ArtmEomDiscPct1) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscPct1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscday1(int $ArtmEomDiscDay1) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscDay1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscmonths1(int $ArtmEomDiscMonths1) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscMonths1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdueday1(int $ArtmEomDueDay1) Return ChildCustomerTermsCode objects filtered by the ArtmEomDueDay1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomplusmonths1(int $ArtmEomPlusMonths1) Return ChildCustomerTermsCode objects filtered by the ArtmEomPlusMonths1 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdayfrom2(int $ArtmDayFrom2) Return ChildCustomerTermsCode objects filtered by the ArtmDayFrom2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdaythru2(int $ArtmDayThru2) Return ChildCustomerTermsCode objects filtered by the ArtmDayThru2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscpct2(string $ArtmEomDiscPct2) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscPct2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscday2(int $ArtmEomDiscDay2) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscDay2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscmonths2(int $ArtmEomDiscMonths2) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscMonths2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdueday2(int $ArtmEomDueDay2) Return ChildCustomerTermsCode objects filtered by the ArtmEomDueDay2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomplusmonths2(int $ArtmEomPlusMonths2) Return ChildCustomerTermsCode objects filtered by the ArtmEomPlusMonths2 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdayfrom3(int $ArtmDayFrom3) Return ChildCustomerTermsCode objects filtered by the ArtmDayFrom3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmdaythru3(int $ArtmDayThru3) Return ChildCustomerTermsCode objects filtered by the ArtmDayThru3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscpct3(string $ArtmEomDiscPct3) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscPct3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscday3(int $ArtmEomDiscDay3) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscDay3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdiscmonths3(int $ArtmEomDiscMonths3) Return ChildCustomerTermsCode objects filtered by the ArtmEomDiscMonths3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomdueday3(int $ArtmEomDueDay3) Return ChildCustomerTermsCode objects filtered by the ArtmEomDueDay3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmeomplusmonths3(int $ArtmEomPlusMonths3) Return ChildCustomerTermsCode objects filtered by the ArtmEomPlusMonths3 column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmctry(string $ArtmCtry) Return ChildCustomerTermsCode objects filtered by the ArtmCtry column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByArtmtermgrup(string $ArtmTermGrup) Return ChildCustomerTermsCode objects filtered by the ArtmTermGrup column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerTermsCode objects filtered by the DateUpdtd column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerTermsCode objects filtered by the TimeUpdtd column
 * @method     ChildCustomerTermsCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerTermsCode objects filtered by the dummy column
 * @method     ChildCustomerTermsCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerTermsCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerTermsCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerTermsCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerTermsCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerTermsCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerTermsCodeQuery) {
            return $criteria;
        }
        $query = new ChildCustomerTermsCodeQuery();
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
     * @return ChildCustomerTermsCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerTermsCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomerTermsCode A model object, or null if the key is not found
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
            /** @var ChildCustomerTermsCode $obj */
            $obj = new ChildCustomerTermsCode();
            $obj->hydrate($row);
            CustomerTermsCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomerTermsCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $keys, Criteria::IN);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermdesc($artmtermdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMDESC, $artmtermdesc, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmmethod($artmmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmmethod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMMETHOD, $artmmethod, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtype($artmtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTYPE, $artmtype, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmhold($artmhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMHOLD, $artmhold, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmexpiredate($artmexpiredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEXPIREDATE, $artmexpiredate, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmfrtallow($artmfrtallow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmfrtallow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMFRTALLOW, $artmfrtallow, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmccprefix($artmccprefix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmccprefix)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMCCPREFIX, $artmccprefix, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit1($artmsplit1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT1, $artmsplit1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct1($artmorderpct1 = null, $comparison = null)
    {
        if (is_array($artmorderpct1)) {
            $useMinMax = false;
            if (isset($artmorderpct1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT1, $artmorderpct1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct1($artmdiscpct1 = null, $comparison = null)
    {
        if (is_array($artmdiscpct1)) {
            $useMinMax = false;
            if (isset($artmdiscpct1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT1, $artmdiscpct1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays1($artmdiscdays1 = null, $comparison = null)
    {
        if (is_array($artmdiscdays1)) {
            $useMinMax = false;
            if (isset($artmdiscdays1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS1, $artmdiscdays1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday1($artmdiscday1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY1, $artmdiscday1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate1($artmdiscdate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE1, $artmdiscdate1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays1($artmduedays1 = null, $comparison = null)
    {
        if (is_array($artmduedays1)) {
            $useMinMax = false;
            if (isset($artmduedays1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS1, $artmduedays1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday1($artmdueday1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY1, $artmdueday1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths1($artmplusmonths1 = null, $comparison = null)
    {
        if (is_array($artmplusmonths1)) {
            $useMinMax = false;
            if (isset($artmplusmonths1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS1, $artmplusmonths1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate1($artmduedate1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE1, $artmduedate1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear1($artmplusyear1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR1, $artmplusyear1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit2($artmsplit2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT2, $artmsplit2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct2($artmorderpct2 = null, $comparison = null)
    {
        if (is_array($artmorderpct2)) {
            $useMinMax = false;
            if (isset($artmorderpct2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT2, $artmorderpct2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct2($artmdiscpct2 = null, $comparison = null)
    {
        if (is_array($artmdiscpct2)) {
            $useMinMax = false;
            if (isset($artmdiscpct2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT2, $artmdiscpct2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays2($artmdiscdays2 = null, $comparison = null)
    {
        if (is_array($artmdiscdays2)) {
            $useMinMax = false;
            if (isset($artmdiscdays2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS2, $artmdiscdays2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday2($artmdiscday2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY2, $artmdiscday2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate2($artmdiscdate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE2, $artmdiscdate2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays2($artmduedays2 = null, $comparison = null)
    {
        if (is_array($artmduedays2)) {
            $useMinMax = false;
            if (isset($artmduedays2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS2, $artmduedays2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday2($artmdueday2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY2, $artmdueday2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths2($artmplusmonths2 = null, $comparison = null)
    {
        if (is_array($artmplusmonths2)) {
            $useMinMax = false;
            if (isset($artmplusmonths2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS2, $artmplusmonths2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate2($artmduedate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE2, $artmduedate2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear2($artmplusyear2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR2, $artmplusyear2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit3($artmsplit3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT3, $artmsplit3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct3($artmorderpct3 = null, $comparison = null)
    {
        if (is_array($artmorderpct3)) {
            $useMinMax = false;
            if (isset($artmorderpct3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT3, $artmorderpct3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct3($artmdiscpct3 = null, $comparison = null)
    {
        if (is_array($artmdiscpct3)) {
            $useMinMax = false;
            if (isset($artmdiscpct3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT3, $artmdiscpct3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays3($artmdiscdays3 = null, $comparison = null)
    {
        if (is_array($artmdiscdays3)) {
            $useMinMax = false;
            if (isset($artmdiscdays3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS3, $artmdiscdays3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday3($artmdiscday3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY3, $artmdiscday3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate3($artmdiscdate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE3, $artmdiscdate3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays3($artmduedays3 = null, $comparison = null)
    {
        if (is_array($artmduedays3)) {
            $useMinMax = false;
            if (isset($artmduedays3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS3, $artmduedays3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday3($artmdueday3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY3, $artmdueday3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths3($artmplusmonths3 = null, $comparison = null)
    {
        if (is_array($artmplusmonths3)) {
            $useMinMax = false;
            if (isset($artmplusmonths3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS3, $artmplusmonths3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate3($artmduedate3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE3, $artmduedate3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear3($artmplusyear3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR3, $artmplusyear3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit4($artmsplit4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT4, $artmsplit4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct4($artmorderpct4 = null, $comparison = null)
    {
        if (is_array($artmorderpct4)) {
            $useMinMax = false;
            if (isset($artmorderpct4['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct4['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT4, $artmorderpct4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct4($artmdiscpct4 = null, $comparison = null)
    {
        if (is_array($artmdiscpct4)) {
            $useMinMax = false;
            if (isset($artmdiscpct4['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct4['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT4, $artmdiscpct4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays4($artmdiscdays4 = null, $comparison = null)
    {
        if (is_array($artmdiscdays4)) {
            $useMinMax = false;
            if (isset($artmdiscdays4['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays4['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS4, $artmdiscdays4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday4($artmdiscday4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY4, $artmdiscday4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate4($artmdiscdate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE4, $artmdiscdate4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays4($artmduedays4 = null, $comparison = null)
    {
        if (is_array($artmduedays4)) {
            $useMinMax = false;
            if (isset($artmduedays4['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays4['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS4, $artmduedays4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday4($artmdueday4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY4, $artmdueday4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths4($artmplusmonths4 = null, $comparison = null)
    {
        if (is_array($artmplusmonths4)) {
            $useMinMax = false;
            if (isset($artmplusmonths4['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths4['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS4, $artmplusmonths4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate4($artmduedate4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE4, $artmduedate4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear4($artmplusyear4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR4, $artmplusyear4, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit5($artmsplit5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT5, $artmsplit5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct5($artmorderpct5 = null, $comparison = null)
    {
        if (is_array($artmorderpct5)) {
            $useMinMax = false;
            if (isset($artmorderpct5['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct5['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT5, $artmorderpct5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct5($artmdiscpct5 = null, $comparison = null)
    {
        if (is_array($artmdiscpct5)) {
            $useMinMax = false;
            if (isset($artmdiscpct5['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct5['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT5, $artmdiscpct5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays5($artmdiscdays5 = null, $comparison = null)
    {
        if (is_array($artmdiscdays5)) {
            $useMinMax = false;
            if (isset($artmdiscdays5['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays5['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS5, $artmdiscdays5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday5($artmdiscday5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY5, $artmdiscday5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate5($artmdiscdate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE5, $artmdiscdate5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays5($artmduedays5 = null, $comparison = null)
    {
        if (is_array($artmduedays5)) {
            $useMinMax = false;
            if (isset($artmduedays5['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays5['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS5, $artmduedays5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday5($artmdueday5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY5, $artmdueday5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths5($artmplusmonths5 = null, $comparison = null)
    {
        if (is_array($artmplusmonths5)) {
            $useMinMax = false;
            if (isset($artmplusmonths5['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths5['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS5, $artmplusmonths5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate5($artmduedate5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE5, $artmduedate5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear5($artmplusyear5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR5, $artmplusyear5, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmsplit6($artmsplit6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmsplit6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMSPLIT6, $artmsplit6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmorderpct6($artmorderpct6 = null, $comparison = null)
    {
        if (is_array($artmorderpct6)) {
            $useMinMax = false;
            if (isset($artmorderpct6['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmorderpct6['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMORDERPCT6, $artmorderpct6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscpct6($artmdiscpct6 = null, $comparison = null)
    {
        if (is_array($artmdiscpct6)) {
            $useMinMax = false;
            if (isset($artmdiscpct6['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscpct6['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCPCT6, $artmdiscpct6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdays6($artmdiscdays6 = null, $comparison = null)
    {
        if (is_array($artmdiscdays6)) {
            $useMinMax = false;
            if (isset($artmdiscdays6['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdiscdays6['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAYS6, $artmdiscdays6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscday6($artmdiscday6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscday6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDAY6, $artmdiscday6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdiscdate6($artmdiscdate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdiscdate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDISCDATE6, $artmdiscdate6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedays6($artmduedays6 = null, $comparison = null)
    {
        if (is_array($artmduedays6)) {
            $useMinMax = false;
            if (isset($artmduedays6['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmduedays6['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAYS6, $artmduedays6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdueday6($artmdueday6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmdueday6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDAY6, $artmdueday6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusmonths6($artmplusmonths6 = null, $comparison = null)
    {
        if (is_array($artmplusmonths6)) {
            $useMinMax = false;
            if (isset($artmplusmonths6['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmplusmonths6['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSMONTHS6, $artmplusmonths6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmduedate6($artmduedate6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmduedate6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDUEDATE6, $artmduedate6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmplusyear6($artmplusyear6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmplusyear6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMPLUSYEAR6, $artmplusyear6, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom1($artmdayfrom1 = null, $comparison = null)
    {
        if (is_array($artmdayfrom1)) {
            $useMinMax = false;
            if (isset($artmdayfrom1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM1, $artmdayfrom1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru1($artmdaythru1 = null, $comparison = null)
    {
        if (is_array($artmdaythru1)) {
            $useMinMax = false;
            if (isset($artmdaythru1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU1, $artmdaythru1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct1($artmeomdiscpct1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct1)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT1, $artmeomdiscpct1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday1($artmeomdiscday1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday1)) {
            $useMinMax = false;
            if (isset($artmeomdiscday1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY1, $artmeomdiscday1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths1($artmeomdiscmonths1 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths1)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS1, $artmeomdiscmonths1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday1($artmeomdueday1 = null, $comparison = null)
    {
        if (is_array($artmeomdueday1)) {
            $useMinMax = false;
            if (isset($artmeomdueday1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY1, $artmeomdueday1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths1($artmeomplusmonths1 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths1)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths1['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths1['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS1, $artmeomplusmonths1, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom2($artmdayfrom2 = null, $comparison = null)
    {
        if (is_array($artmdayfrom2)) {
            $useMinMax = false;
            if (isset($artmdayfrom2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM2, $artmdayfrom2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru2($artmdaythru2 = null, $comparison = null)
    {
        if (is_array($artmdaythru2)) {
            $useMinMax = false;
            if (isset($artmdaythru2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU2, $artmdaythru2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct2($artmeomdiscpct2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct2)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT2, $artmeomdiscpct2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday2($artmeomdiscday2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday2)) {
            $useMinMax = false;
            if (isset($artmeomdiscday2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY2, $artmeomdiscday2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths2($artmeomdiscmonths2 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths2)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS2, $artmeomdiscmonths2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday2($artmeomdueday2 = null, $comparison = null)
    {
        if (is_array($artmeomdueday2)) {
            $useMinMax = false;
            if (isset($artmeomdueday2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY2, $artmeomdueday2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths2($artmeomplusmonths2 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths2)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths2['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths2['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS2, $artmeomplusmonths2, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdayfrom3($artmdayfrom3 = null, $comparison = null)
    {
        if (is_array($artmdayfrom3)) {
            $useMinMax = false;
            if (isset($artmdayfrom3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdayfrom3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYFROM3, $artmdayfrom3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmdaythru3($artmdaythru3 = null, $comparison = null)
    {
        if (is_array($artmdaythru3)) {
            $useMinMax = false;
            if (isset($artmdaythru3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmdaythru3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMDAYTHRU3, $artmdaythru3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscpct3($artmeomdiscpct3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscpct3)) {
            $useMinMax = false;
            if (isset($artmeomdiscpct3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscpct3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCPCT3, $artmeomdiscpct3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscday3($artmeomdiscday3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscday3)) {
            $useMinMax = false;
            if (isset($artmeomdiscday3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscday3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCDAY3, $artmeomdiscday3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdiscmonths3($artmeomdiscmonths3 = null, $comparison = null)
    {
        if (is_array($artmeomdiscmonths3)) {
            $useMinMax = false;
            if (isset($artmeomdiscmonths3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdiscmonths3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDISCMONTHS3, $artmeomdiscmonths3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomdueday3($artmeomdueday3 = null, $comparison = null)
    {
        if (is_array($artmeomdueday3)) {
            $useMinMax = false;
            if (isset($artmeomdueday3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomdueday3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMDUEDAY3, $artmeomdueday3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmeomplusmonths3($artmeomplusmonths3 = null, $comparison = null)
    {
        if (is_array($artmeomplusmonths3)) {
            $useMinMax = false;
            if (isset($artmeomplusmonths3['min'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artmeomplusmonths3['max'])) {
                $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMEOMPLUSMONTHS3, $artmeomplusmonths3, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmctry($artmctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMCTRY, $artmctry, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByArtmtermgrup($artmtermgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMGRUP, $artmtermgrup, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTermsCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerTermsCode $customerTermsCode Object to remove from the list of results
     *
     * @return $this|ChildCustomerTermsCodeQuery The current query, for fluid interface
     */
    public function prune($customerTermsCode = null)
    {
        if ($customerTermsCode) {
            $this->addUsingAlias(CustomerTermsCodeTableMap::COL_ARTMTERMCD, $customerTermsCode->getArtmtermcd(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerTermsCodeTableMap::clearInstancePool();
            CustomerTermsCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTermsCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerTermsCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerTermsCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerTermsCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerTermsCodeQuery
