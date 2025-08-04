<?php

namespace Base;

use \ApTermsCode as ChildApTermsCode;
use \ApTermsCodeQuery as ChildApTermsCodeQuery;
use \Exception;
use \PDO;
use Map\ApTermsCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ap_term_code` table.
 *
 * @method     ChildApTermsCodeQuery orderByAptmtermcode($order = Criteria::ASC) Order by the AptmTermCode column
 * @method     ChildApTermsCodeQuery orderByAptmtermdesc($order = Criteria::ASC) Order by the AptmTermDesc column
 * @method     ChildApTermsCodeQuery orderByAptmmethod($order = Criteria::ASC) Order by the AptmMethod column
 * @method     ChildApTermsCodeQuery orderByAptmexpiredate($order = Criteria::ASC) Order by the AptmExpireDate column
 * @method     ChildApTermsCodeQuery orderByAptmsplit1($order = Criteria::ASC) Order by the AptmSplit1 column
 * @method     ChildApTermsCodeQuery orderByAptmorderpct1($order = Criteria::ASC) Order by the AptmOrderPct1 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscpct1($order = Criteria::ASC) Order by the AptmDiscPct1 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdays1($order = Criteria::ASC) Order by the AptmDiscDays1 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscday1($order = Criteria::ASC) Order by the AptmDiscDay1 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdate1($order = Criteria::ASC) Order by the AptmDiscDate1 column
 * @method     ChildApTermsCodeQuery orderByAptmduedays1($order = Criteria::ASC) Order by the AptmDueDays1 column
 * @method     ChildApTermsCodeQuery orderByAptmdueday1($order = Criteria::ASC) Order by the AptmDueDay1 column
 * @method     ChildApTermsCodeQuery orderByAptmplusmonths1($order = Criteria::ASC) Order by the AptmPlusMonths1 column
 * @method     ChildApTermsCodeQuery orderByAptmduedate1($order = Criteria::ASC) Order by the AptmDueDate1 column
 * @method     ChildApTermsCodeQuery orderByAptmplusyear1($order = Criteria::ASC) Order by the AptmPlusYear1 column
 * @method     ChildApTermsCodeQuery orderByAptmsplit2($order = Criteria::ASC) Order by the AptmSplit2 column
 * @method     ChildApTermsCodeQuery orderByAptmorderpct2($order = Criteria::ASC) Order by the AptmOrderPct2 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscpct2($order = Criteria::ASC) Order by the AptmDiscPct2 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdays2($order = Criteria::ASC) Order by the AptmDiscDays2 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscday2($order = Criteria::ASC) Order by the AptmDiscDay2 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdate2($order = Criteria::ASC) Order by the AptmDiscDate2 column
 * @method     ChildApTermsCodeQuery orderByAptmduedays2($order = Criteria::ASC) Order by the AptmDueDays2 column
 * @method     ChildApTermsCodeQuery orderByAptmdueday2($order = Criteria::ASC) Order by the AptmDueDay2 column
 * @method     ChildApTermsCodeQuery orderByAptmplusmonths2($order = Criteria::ASC) Order by the AptmPlusMonths2 column
 * @method     ChildApTermsCodeQuery orderByAptmduedate2($order = Criteria::ASC) Order by the AptmDueDate2 column
 * @method     ChildApTermsCodeQuery orderByAptmplusyear2($order = Criteria::ASC) Order by the AptmPlusYear2 column
 * @method     ChildApTermsCodeQuery orderByAptmsplit3($order = Criteria::ASC) Order by the AptmSplit3 column
 * @method     ChildApTermsCodeQuery orderByAptmorderpct3($order = Criteria::ASC) Order by the AptmOrderPct3 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscpct3($order = Criteria::ASC) Order by the AptmDiscPct3 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdays3($order = Criteria::ASC) Order by the AptmDiscDays3 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscday3($order = Criteria::ASC) Order by the AptmDiscDay3 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdate3($order = Criteria::ASC) Order by the AptmDiscDate3 column
 * @method     ChildApTermsCodeQuery orderByAptmduedays3($order = Criteria::ASC) Order by the AptmDueDays3 column
 * @method     ChildApTermsCodeQuery orderByAptmdueday3($order = Criteria::ASC) Order by the AptmDueDay3 column
 * @method     ChildApTermsCodeQuery orderByAptmplusmonths3($order = Criteria::ASC) Order by the AptmPlusMonths3 column
 * @method     ChildApTermsCodeQuery orderByAptmduedate3($order = Criteria::ASC) Order by the AptmDueDate3 column
 * @method     ChildApTermsCodeQuery orderByAptmplusyear3($order = Criteria::ASC) Order by the AptmPlusYear3 column
 * @method     ChildApTermsCodeQuery orderByAptmsplit4($order = Criteria::ASC) Order by the AptmSplit4 column
 * @method     ChildApTermsCodeQuery orderByAptmorderpct4($order = Criteria::ASC) Order by the AptmOrderPct4 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscpct4($order = Criteria::ASC) Order by the AptmDiscPct4 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdays4($order = Criteria::ASC) Order by the AptmDiscDays4 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscday4($order = Criteria::ASC) Order by the AptmDiscDay4 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdate4($order = Criteria::ASC) Order by the AptmDiscDate4 column
 * @method     ChildApTermsCodeQuery orderByAptmduedays4($order = Criteria::ASC) Order by the AptmDueDays4 column
 * @method     ChildApTermsCodeQuery orderByAptmdueday4($order = Criteria::ASC) Order by the AptmDueDay4 column
 * @method     ChildApTermsCodeQuery orderByAptmplusmonths4($order = Criteria::ASC) Order by the AptmPlusMonths4 column
 * @method     ChildApTermsCodeQuery orderByAptmduedate4($order = Criteria::ASC) Order by the AptmDueDate4 column
 * @method     ChildApTermsCodeQuery orderByAptmplusyear4($order = Criteria::ASC) Order by the AptmPlusYear4 column
 * @method     ChildApTermsCodeQuery orderByAptmsplit5($order = Criteria::ASC) Order by the AptmSplit5 column
 * @method     ChildApTermsCodeQuery orderByAptmorderpct5($order = Criteria::ASC) Order by the AptmOrderPct5 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscpct5($order = Criteria::ASC) Order by the AptmDiscPct5 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdays5($order = Criteria::ASC) Order by the AptmDiscDays5 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscday5($order = Criteria::ASC) Order by the AptmDiscDay5 column
 * @method     ChildApTermsCodeQuery orderByAptmdiscdate5($order = Criteria::ASC) Order by the AptmDiscDate5 column
 * @method     ChildApTermsCodeQuery orderByAptmduedays5($order = Criteria::ASC) Order by the AptmDueDays5 column
 * @method     ChildApTermsCodeQuery orderByAptmdueday5($order = Criteria::ASC) Order by the AptmDueDay5 column
 * @method     ChildApTermsCodeQuery orderByAptmplusmonths5($order = Criteria::ASC) Order by the AptmPlusMonths5 column
 * @method     ChildApTermsCodeQuery orderByAptmduedate5($order = Criteria::ASC) Order by the AptmDueDate5 column
 * @method     ChildApTermsCodeQuery orderByAptmplusyear5($order = Criteria::ASC) Order by the AptmPlusYear5 column
 * @method     ChildApTermsCodeQuery orderByAptmdayfrom1($order = Criteria::ASC) Order by the AptmDayFrom1 column
 * @method     ChildApTermsCodeQuery orderByAptmdaythru1($order = Criteria::ASC) Order by the AptmDayThru1 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscpct1($order = Criteria::ASC) Order by the AptmEomDiscPct1 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscday1($order = Criteria::ASC) Order by the AptmEomDiscDay1 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscmonths1($order = Criteria::ASC) Order by the AptmEomDiscMonths1 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdueday1($order = Criteria::ASC) Order by the AptmEomDueDay1 column
 * @method     ChildApTermsCodeQuery orderByAptmeomplusmonths1($order = Criteria::ASC) Order by the AptmEomPlusMonths1 column
 * @method     ChildApTermsCodeQuery orderByAptmdayfrom2($order = Criteria::ASC) Order by the AptmDayFrom2 column
 * @method     ChildApTermsCodeQuery orderByAptmdaythru2($order = Criteria::ASC) Order by the AptmDayThru2 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscpct2($order = Criteria::ASC) Order by the AptmEomDiscPct2 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscday2($order = Criteria::ASC) Order by the AptmEomDiscDay2 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscmonths2($order = Criteria::ASC) Order by the AptmEomDiscMonths2 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdueday2($order = Criteria::ASC) Order by the AptmEomDueDay2 column
 * @method     ChildApTermsCodeQuery orderByAptmeomplusmonths2($order = Criteria::ASC) Order by the AptmEomPlusMonths2 column
 * @method     ChildApTermsCodeQuery orderByAptmdayfrom3($order = Criteria::ASC) Order by the AptmDayFrom3 column
 * @method     ChildApTermsCodeQuery orderByAptmdaythru3($order = Criteria::ASC) Order by the AptmDayThru3 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscpct3($order = Criteria::ASC) Order by the AptmEomDiscPct3 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscday3($order = Criteria::ASC) Order by the AptmEomDiscDay3 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdiscmonths3($order = Criteria::ASC) Order by the AptmEomDiscMonths3 column
 * @method     ChildApTermsCodeQuery orderByAptmeomdueday3($order = Criteria::ASC) Order by the AptmEomDueDay3 column
 * @method     ChildApTermsCodeQuery orderByAptmeomplusmonths3($order = Criteria::ASC) Order by the AptmEomPlusMonths3 column
 * @method     ChildApTermsCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApTermsCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApTermsCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApTermsCodeQuery groupByAptmtermcode() Group by the AptmTermCode column
 * @method     ChildApTermsCodeQuery groupByAptmtermdesc() Group by the AptmTermDesc column
 * @method     ChildApTermsCodeQuery groupByAptmmethod() Group by the AptmMethod column
 * @method     ChildApTermsCodeQuery groupByAptmexpiredate() Group by the AptmExpireDate column
 * @method     ChildApTermsCodeQuery groupByAptmsplit1() Group by the AptmSplit1 column
 * @method     ChildApTermsCodeQuery groupByAptmorderpct1() Group by the AptmOrderPct1 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscpct1() Group by the AptmDiscPct1 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdays1() Group by the AptmDiscDays1 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscday1() Group by the AptmDiscDay1 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdate1() Group by the AptmDiscDate1 column
 * @method     ChildApTermsCodeQuery groupByAptmduedays1() Group by the AptmDueDays1 column
 * @method     ChildApTermsCodeQuery groupByAptmdueday1() Group by the AptmDueDay1 column
 * @method     ChildApTermsCodeQuery groupByAptmplusmonths1() Group by the AptmPlusMonths1 column
 * @method     ChildApTermsCodeQuery groupByAptmduedate1() Group by the AptmDueDate1 column
 * @method     ChildApTermsCodeQuery groupByAptmplusyear1() Group by the AptmPlusYear1 column
 * @method     ChildApTermsCodeQuery groupByAptmsplit2() Group by the AptmSplit2 column
 * @method     ChildApTermsCodeQuery groupByAptmorderpct2() Group by the AptmOrderPct2 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscpct2() Group by the AptmDiscPct2 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdays2() Group by the AptmDiscDays2 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscday2() Group by the AptmDiscDay2 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdate2() Group by the AptmDiscDate2 column
 * @method     ChildApTermsCodeQuery groupByAptmduedays2() Group by the AptmDueDays2 column
 * @method     ChildApTermsCodeQuery groupByAptmdueday2() Group by the AptmDueDay2 column
 * @method     ChildApTermsCodeQuery groupByAptmplusmonths2() Group by the AptmPlusMonths2 column
 * @method     ChildApTermsCodeQuery groupByAptmduedate2() Group by the AptmDueDate2 column
 * @method     ChildApTermsCodeQuery groupByAptmplusyear2() Group by the AptmPlusYear2 column
 * @method     ChildApTermsCodeQuery groupByAptmsplit3() Group by the AptmSplit3 column
 * @method     ChildApTermsCodeQuery groupByAptmorderpct3() Group by the AptmOrderPct3 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscpct3() Group by the AptmDiscPct3 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdays3() Group by the AptmDiscDays3 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscday3() Group by the AptmDiscDay3 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdate3() Group by the AptmDiscDate3 column
 * @method     ChildApTermsCodeQuery groupByAptmduedays3() Group by the AptmDueDays3 column
 * @method     ChildApTermsCodeQuery groupByAptmdueday3() Group by the AptmDueDay3 column
 * @method     ChildApTermsCodeQuery groupByAptmplusmonths3() Group by the AptmPlusMonths3 column
 * @method     ChildApTermsCodeQuery groupByAptmduedate3() Group by the AptmDueDate3 column
 * @method     ChildApTermsCodeQuery groupByAptmplusyear3() Group by the AptmPlusYear3 column
 * @method     ChildApTermsCodeQuery groupByAptmsplit4() Group by the AptmSplit4 column
 * @method     ChildApTermsCodeQuery groupByAptmorderpct4() Group by the AptmOrderPct4 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscpct4() Group by the AptmDiscPct4 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdays4() Group by the AptmDiscDays4 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscday4() Group by the AptmDiscDay4 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdate4() Group by the AptmDiscDate4 column
 * @method     ChildApTermsCodeQuery groupByAptmduedays4() Group by the AptmDueDays4 column
 * @method     ChildApTermsCodeQuery groupByAptmdueday4() Group by the AptmDueDay4 column
 * @method     ChildApTermsCodeQuery groupByAptmplusmonths4() Group by the AptmPlusMonths4 column
 * @method     ChildApTermsCodeQuery groupByAptmduedate4() Group by the AptmDueDate4 column
 * @method     ChildApTermsCodeQuery groupByAptmplusyear4() Group by the AptmPlusYear4 column
 * @method     ChildApTermsCodeQuery groupByAptmsplit5() Group by the AptmSplit5 column
 * @method     ChildApTermsCodeQuery groupByAptmorderpct5() Group by the AptmOrderPct5 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscpct5() Group by the AptmDiscPct5 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdays5() Group by the AptmDiscDays5 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscday5() Group by the AptmDiscDay5 column
 * @method     ChildApTermsCodeQuery groupByAptmdiscdate5() Group by the AptmDiscDate5 column
 * @method     ChildApTermsCodeQuery groupByAptmduedays5() Group by the AptmDueDays5 column
 * @method     ChildApTermsCodeQuery groupByAptmdueday5() Group by the AptmDueDay5 column
 * @method     ChildApTermsCodeQuery groupByAptmplusmonths5() Group by the AptmPlusMonths5 column
 * @method     ChildApTermsCodeQuery groupByAptmduedate5() Group by the AptmDueDate5 column
 * @method     ChildApTermsCodeQuery groupByAptmplusyear5() Group by the AptmPlusYear5 column
 * @method     ChildApTermsCodeQuery groupByAptmdayfrom1() Group by the AptmDayFrom1 column
 * @method     ChildApTermsCodeQuery groupByAptmdaythru1() Group by the AptmDayThru1 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscpct1() Group by the AptmEomDiscPct1 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscday1() Group by the AptmEomDiscDay1 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscmonths1() Group by the AptmEomDiscMonths1 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdueday1() Group by the AptmEomDueDay1 column
 * @method     ChildApTermsCodeQuery groupByAptmeomplusmonths1() Group by the AptmEomPlusMonths1 column
 * @method     ChildApTermsCodeQuery groupByAptmdayfrom2() Group by the AptmDayFrom2 column
 * @method     ChildApTermsCodeQuery groupByAptmdaythru2() Group by the AptmDayThru2 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscpct2() Group by the AptmEomDiscPct2 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscday2() Group by the AptmEomDiscDay2 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscmonths2() Group by the AptmEomDiscMonths2 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdueday2() Group by the AptmEomDueDay2 column
 * @method     ChildApTermsCodeQuery groupByAptmeomplusmonths2() Group by the AptmEomPlusMonths2 column
 * @method     ChildApTermsCodeQuery groupByAptmdayfrom3() Group by the AptmDayFrom3 column
 * @method     ChildApTermsCodeQuery groupByAptmdaythru3() Group by the AptmDayThru3 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscpct3() Group by the AptmEomDiscPct3 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscday3() Group by the AptmEomDiscDay3 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdiscmonths3() Group by the AptmEomDiscMonths3 column
 * @method     ChildApTermsCodeQuery groupByAptmeomdueday3() Group by the AptmEomDueDay3 column
 * @method     ChildApTermsCodeQuery groupByAptmeomplusmonths3() Group by the AptmEomPlusMonths3 column
 * @method     ChildApTermsCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApTermsCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApTermsCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApTermsCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApTermsCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApTermsCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApTermsCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApTermsCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApTermsCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApTermsCodeQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApTermsCodeQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApTermsCodeQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApTermsCodeQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApTermsCodeQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTermsCodeQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTermsCodeQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApTermsCode|null findOne(?ConnectionInterface $con = null) Return the first ChildApTermsCode matching the query
 * @method     ChildApTermsCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildApTermsCode matching the query, or a new ChildApTermsCode object populated from the query conditions when no match is found
 *
 * @method     ChildApTermsCode|null findOneByAptmtermcode(string $AptmTermCode) Return the first ChildApTermsCode filtered by the AptmTermCode column
 * @method     ChildApTermsCode|null findOneByAptmtermdesc(string $AptmTermDesc) Return the first ChildApTermsCode filtered by the AptmTermDesc column
 * @method     ChildApTermsCode|null findOneByAptmmethod(string $AptmMethod) Return the first ChildApTermsCode filtered by the AptmMethod column
 * @method     ChildApTermsCode|null findOneByAptmexpiredate(string $AptmExpireDate) Return the first ChildApTermsCode filtered by the AptmExpireDate column
 * @method     ChildApTermsCode|null findOneByAptmsplit1(string $AptmSplit1) Return the first ChildApTermsCode filtered by the AptmSplit1 column
 * @method     ChildApTermsCode|null findOneByAptmorderpct1(string $AptmOrderPct1) Return the first ChildApTermsCode filtered by the AptmOrderPct1 column
 * @method     ChildApTermsCode|null findOneByAptmdiscpct1(string $AptmDiscPct1) Return the first ChildApTermsCode filtered by the AptmDiscPct1 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdays1(int $AptmDiscDays1) Return the first ChildApTermsCode filtered by the AptmDiscDays1 column
 * @method     ChildApTermsCode|null findOneByAptmdiscday1(string $AptmDiscDay1) Return the first ChildApTermsCode filtered by the AptmDiscDay1 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdate1(string $AptmDiscDate1) Return the first ChildApTermsCode filtered by the AptmDiscDate1 column
 * @method     ChildApTermsCode|null findOneByAptmduedays1(int $AptmDueDays1) Return the first ChildApTermsCode filtered by the AptmDueDays1 column
 * @method     ChildApTermsCode|null findOneByAptmdueday1(string $AptmDueDay1) Return the first ChildApTermsCode filtered by the AptmDueDay1 column
 * @method     ChildApTermsCode|null findOneByAptmplusmonths1(int $AptmPlusMonths1) Return the first ChildApTermsCode filtered by the AptmPlusMonths1 column
 * @method     ChildApTermsCode|null findOneByAptmduedate1(string $AptmDueDate1) Return the first ChildApTermsCode filtered by the AptmDueDate1 column
 * @method     ChildApTermsCode|null findOneByAptmplusyear1(string $AptmPlusYear1) Return the first ChildApTermsCode filtered by the AptmPlusYear1 column
 * @method     ChildApTermsCode|null findOneByAptmsplit2(string $AptmSplit2) Return the first ChildApTermsCode filtered by the AptmSplit2 column
 * @method     ChildApTermsCode|null findOneByAptmorderpct2(string $AptmOrderPct2) Return the first ChildApTermsCode filtered by the AptmOrderPct2 column
 * @method     ChildApTermsCode|null findOneByAptmdiscpct2(string $AptmDiscPct2) Return the first ChildApTermsCode filtered by the AptmDiscPct2 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdays2(int $AptmDiscDays2) Return the first ChildApTermsCode filtered by the AptmDiscDays2 column
 * @method     ChildApTermsCode|null findOneByAptmdiscday2(string $AptmDiscDay2) Return the first ChildApTermsCode filtered by the AptmDiscDay2 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdate2(string $AptmDiscDate2) Return the first ChildApTermsCode filtered by the AptmDiscDate2 column
 * @method     ChildApTermsCode|null findOneByAptmduedays2(int $AptmDueDays2) Return the first ChildApTermsCode filtered by the AptmDueDays2 column
 * @method     ChildApTermsCode|null findOneByAptmdueday2(string $AptmDueDay2) Return the first ChildApTermsCode filtered by the AptmDueDay2 column
 * @method     ChildApTermsCode|null findOneByAptmplusmonths2(int $AptmPlusMonths2) Return the first ChildApTermsCode filtered by the AptmPlusMonths2 column
 * @method     ChildApTermsCode|null findOneByAptmduedate2(string $AptmDueDate2) Return the first ChildApTermsCode filtered by the AptmDueDate2 column
 * @method     ChildApTermsCode|null findOneByAptmplusyear2(string $AptmPlusYear2) Return the first ChildApTermsCode filtered by the AptmPlusYear2 column
 * @method     ChildApTermsCode|null findOneByAptmsplit3(string $AptmSplit3) Return the first ChildApTermsCode filtered by the AptmSplit3 column
 * @method     ChildApTermsCode|null findOneByAptmorderpct3(string $AptmOrderPct3) Return the first ChildApTermsCode filtered by the AptmOrderPct3 column
 * @method     ChildApTermsCode|null findOneByAptmdiscpct3(string $AptmDiscPct3) Return the first ChildApTermsCode filtered by the AptmDiscPct3 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdays3(int $AptmDiscDays3) Return the first ChildApTermsCode filtered by the AptmDiscDays3 column
 * @method     ChildApTermsCode|null findOneByAptmdiscday3(string $AptmDiscDay3) Return the first ChildApTermsCode filtered by the AptmDiscDay3 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdate3(string $AptmDiscDate3) Return the first ChildApTermsCode filtered by the AptmDiscDate3 column
 * @method     ChildApTermsCode|null findOneByAptmduedays3(int $AptmDueDays3) Return the first ChildApTermsCode filtered by the AptmDueDays3 column
 * @method     ChildApTermsCode|null findOneByAptmdueday3(string $AptmDueDay3) Return the first ChildApTermsCode filtered by the AptmDueDay3 column
 * @method     ChildApTermsCode|null findOneByAptmplusmonths3(int $AptmPlusMonths3) Return the first ChildApTermsCode filtered by the AptmPlusMonths3 column
 * @method     ChildApTermsCode|null findOneByAptmduedate3(string $AptmDueDate3) Return the first ChildApTermsCode filtered by the AptmDueDate3 column
 * @method     ChildApTermsCode|null findOneByAptmplusyear3(string $AptmPlusYear3) Return the first ChildApTermsCode filtered by the AptmPlusYear3 column
 * @method     ChildApTermsCode|null findOneByAptmsplit4(string $AptmSplit4) Return the first ChildApTermsCode filtered by the AptmSplit4 column
 * @method     ChildApTermsCode|null findOneByAptmorderpct4(string $AptmOrderPct4) Return the first ChildApTermsCode filtered by the AptmOrderPct4 column
 * @method     ChildApTermsCode|null findOneByAptmdiscpct4(string $AptmDiscPct4) Return the first ChildApTermsCode filtered by the AptmDiscPct4 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdays4(int $AptmDiscDays4) Return the first ChildApTermsCode filtered by the AptmDiscDays4 column
 * @method     ChildApTermsCode|null findOneByAptmdiscday4(string $AptmDiscDay4) Return the first ChildApTermsCode filtered by the AptmDiscDay4 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdate4(string $AptmDiscDate4) Return the first ChildApTermsCode filtered by the AptmDiscDate4 column
 * @method     ChildApTermsCode|null findOneByAptmduedays4(int $AptmDueDays4) Return the first ChildApTermsCode filtered by the AptmDueDays4 column
 * @method     ChildApTermsCode|null findOneByAptmdueday4(string $AptmDueDay4) Return the first ChildApTermsCode filtered by the AptmDueDay4 column
 * @method     ChildApTermsCode|null findOneByAptmplusmonths4(int $AptmPlusMonths4) Return the first ChildApTermsCode filtered by the AptmPlusMonths4 column
 * @method     ChildApTermsCode|null findOneByAptmduedate4(string $AptmDueDate4) Return the first ChildApTermsCode filtered by the AptmDueDate4 column
 * @method     ChildApTermsCode|null findOneByAptmplusyear4(string $AptmPlusYear4) Return the first ChildApTermsCode filtered by the AptmPlusYear4 column
 * @method     ChildApTermsCode|null findOneByAptmsplit5(string $AptmSplit5) Return the first ChildApTermsCode filtered by the AptmSplit5 column
 * @method     ChildApTermsCode|null findOneByAptmorderpct5(string $AptmOrderPct5) Return the first ChildApTermsCode filtered by the AptmOrderPct5 column
 * @method     ChildApTermsCode|null findOneByAptmdiscpct5(string $AptmDiscPct5) Return the first ChildApTermsCode filtered by the AptmDiscPct5 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdays5(int $AptmDiscDays5) Return the first ChildApTermsCode filtered by the AptmDiscDays5 column
 * @method     ChildApTermsCode|null findOneByAptmdiscday5(string $AptmDiscDay5) Return the first ChildApTermsCode filtered by the AptmDiscDay5 column
 * @method     ChildApTermsCode|null findOneByAptmdiscdate5(string $AptmDiscDate5) Return the first ChildApTermsCode filtered by the AptmDiscDate5 column
 * @method     ChildApTermsCode|null findOneByAptmduedays5(int $AptmDueDays5) Return the first ChildApTermsCode filtered by the AptmDueDays5 column
 * @method     ChildApTermsCode|null findOneByAptmdueday5(string $AptmDueDay5) Return the first ChildApTermsCode filtered by the AptmDueDay5 column
 * @method     ChildApTermsCode|null findOneByAptmplusmonths5(int $AptmPlusMonths5) Return the first ChildApTermsCode filtered by the AptmPlusMonths5 column
 * @method     ChildApTermsCode|null findOneByAptmduedate5(string $AptmDueDate5) Return the first ChildApTermsCode filtered by the AptmDueDate5 column
 * @method     ChildApTermsCode|null findOneByAptmplusyear5(string $AptmPlusYear5) Return the first ChildApTermsCode filtered by the AptmPlusYear5 column
 * @method     ChildApTermsCode|null findOneByAptmdayfrom1(int $AptmDayFrom1) Return the first ChildApTermsCode filtered by the AptmDayFrom1 column
 * @method     ChildApTermsCode|null findOneByAptmdaythru1(int $AptmDayThru1) Return the first ChildApTermsCode filtered by the AptmDayThru1 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscpct1(string $AptmEomDiscPct1) Return the first ChildApTermsCode filtered by the AptmEomDiscPct1 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscday1(int $AptmEomDiscDay1) Return the first ChildApTermsCode filtered by the AptmEomDiscDay1 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscmonths1(int $AptmEomDiscMonths1) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths1 column
 * @method     ChildApTermsCode|null findOneByAptmeomdueday1(int $AptmEomDueDay1) Return the first ChildApTermsCode filtered by the AptmEomDueDay1 column
 * @method     ChildApTermsCode|null findOneByAptmeomplusmonths1(int $AptmEomPlusMonths1) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths1 column
 * @method     ChildApTermsCode|null findOneByAptmdayfrom2(int $AptmDayFrom2) Return the first ChildApTermsCode filtered by the AptmDayFrom2 column
 * @method     ChildApTermsCode|null findOneByAptmdaythru2(int $AptmDayThru2) Return the first ChildApTermsCode filtered by the AptmDayThru2 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscpct2(string $AptmEomDiscPct2) Return the first ChildApTermsCode filtered by the AptmEomDiscPct2 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscday2(int $AptmEomDiscDay2) Return the first ChildApTermsCode filtered by the AptmEomDiscDay2 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscmonths2(int $AptmEomDiscMonths2) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths2 column
 * @method     ChildApTermsCode|null findOneByAptmeomdueday2(int $AptmEomDueDay2) Return the first ChildApTermsCode filtered by the AptmEomDueDay2 column
 * @method     ChildApTermsCode|null findOneByAptmeomplusmonths2(int $AptmEomPlusMonths2) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths2 column
 * @method     ChildApTermsCode|null findOneByAptmdayfrom3(int $AptmDayFrom3) Return the first ChildApTermsCode filtered by the AptmDayFrom3 column
 * @method     ChildApTermsCode|null findOneByAptmdaythru3(int $AptmDayThru3) Return the first ChildApTermsCode filtered by the AptmDayThru3 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscpct3(string $AptmEomDiscPct3) Return the first ChildApTermsCode filtered by the AptmEomDiscPct3 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscday3(int $AptmEomDiscDay3) Return the first ChildApTermsCode filtered by the AptmEomDiscDay3 column
 * @method     ChildApTermsCode|null findOneByAptmeomdiscmonths3(int $AptmEomDiscMonths3) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths3 column
 * @method     ChildApTermsCode|null findOneByAptmeomdueday3(int $AptmEomDueDay3) Return the first ChildApTermsCode filtered by the AptmEomDueDay3 column
 * @method     ChildApTermsCode|null findOneByAptmeomplusmonths3(int $AptmEomPlusMonths3) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths3 column
 * @method     ChildApTermsCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildApTermsCode filtered by the DateUpdtd column
 * @method     ChildApTermsCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTermsCode filtered by the TimeUpdtd column
 * @method     ChildApTermsCode|null findOneByDummy(string $dummy) Return the first ChildApTermsCode filtered by the dummy column
 *
 * @method     ChildApTermsCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildApTermsCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOne(?ConnectionInterface $con = null) Return the first ChildApTermsCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTermsCode requireOneByAptmtermcode(string $AptmTermCode) Return the first ChildApTermsCode filtered by the AptmTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmtermdesc(string $AptmTermDesc) Return the first ChildApTermsCode filtered by the AptmTermDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmmethod(string $AptmMethod) Return the first ChildApTermsCode filtered by the AptmMethod column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmexpiredate(string $AptmExpireDate) Return the first ChildApTermsCode filtered by the AptmExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmsplit1(string $AptmSplit1) Return the first ChildApTermsCode filtered by the AptmSplit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmorderpct1(string $AptmOrderPct1) Return the first ChildApTermsCode filtered by the AptmOrderPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscpct1(string $AptmDiscPct1) Return the first ChildApTermsCode filtered by the AptmDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdays1(int $AptmDiscDays1) Return the first ChildApTermsCode filtered by the AptmDiscDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscday1(string $AptmDiscDay1) Return the first ChildApTermsCode filtered by the AptmDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdate1(string $AptmDiscDate1) Return the first ChildApTermsCode filtered by the AptmDiscDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedays1(int $AptmDueDays1) Return the first ChildApTermsCode filtered by the AptmDueDays1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdueday1(string $AptmDueDay1) Return the first ChildApTermsCode filtered by the AptmDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusmonths1(int $AptmPlusMonths1) Return the first ChildApTermsCode filtered by the AptmPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedate1(string $AptmDueDate1) Return the first ChildApTermsCode filtered by the AptmDueDate1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusyear1(string $AptmPlusYear1) Return the first ChildApTermsCode filtered by the AptmPlusYear1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmsplit2(string $AptmSplit2) Return the first ChildApTermsCode filtered by the AptmSplit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmorderpct2(string $AptmOrderPct2) Return the first ChildApTermsCode filtered by the AptmOrderPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscpct2(string $AptmDiscPct2) Return the first ChildApTermsCode filtered by the AptmDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdays2(int $AptmDiscDays2) Return the first ChildApTermsCode filtered by the AptmDiscDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscday2(string $AptmDiscDay2) Return the first ChildApTermsCode filtered by the AptmDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdate2(string $AptmDiscDate2) Return the first ChildApTermsCode filtered by the AptmDiscDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedays2(int $AptmDueDays2) Return the first ChildApTermsCode filtered by the AptmDueDays2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdueday2(string $AptmDueDay2) Return the first ChildApTermsCode filtered by the AptmDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusmonths2(int $AptmPlusMonths2) Return the first ChildApTermsCode filtered by the AptmPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedate2(string $AptmDueDate2) Return the first ChildApTermsCode filtered by the AptmDueDate2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusyear2(string $AptmPlusYear2) Return the first ChildApTermsCode filtered by the AptmPlusYear2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmsplit3(string $AptmSplit3) Return the first ChildApTermsCode filtered by the AptmSplit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmorderpct3(string $AptmOrderPct3) Return the first ChildApTermsCode filtered by the AptmOrderPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscpct3(string $AptmDiscPct3) Return the first ChildApTermsCode filtered by the AptmDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdays3(int $AptmDiscDays3) Return the first ChildApTermsCode filtered by the AptmDiscDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscday3(string $AptmDiscDay3) Return the first ChildApTermsCode filtered by the AptmDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdate3(string $AptmDiscDate3) Return the first ChildApTermsCode filtered by the AptmDiscDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedays3(int $AptmDueDays3) Return the first ChildApTermsCode filtered by the AptmDueDays3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdueday3(string $AptmDueDay3) Return the first ChildApTermsCode filtered by the AptmDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusmonths3(int $AptmPlusMonths3) Return the first ChildApTermsCode filtered by the AptmPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedate3(string $AptmDueDate3) Return the first ChildApTermsCode filtered by the AptmDueDate3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusyear3(string $AptmPlusYear3) Return the first ChildApTermsCode filtered by the AptmPlusYear3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmsplit4(string $AptmSplit4) Return the first ChildApTermsCode filtered by the AptmSplit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmorderpct4(string $AptmOrderPct4) Return the first ChildApTermsCode filtered by the AptmOrderPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscpct4(string $AptmDiscPct4) Return the first ChildApTermsCode filtered by the AptmDiscPct4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdays4(int $AptmDiscDays4) Return the first ChildApTermsCode filtered by the AptmDiscDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscday4(string $AptmDiscDay4) Return the first ChildApTermsCode filtered by the AptmDiscDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdate4(string $AptmDiscDate4) Return the first ChildApTermsCode filtered by the AptmDiscDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedays4(int $AptmDueDays4) Return the first ChildApTermsCode filtered by the AptmDueDays4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdueday4(string $AptmDueDay4) Return the first ChildApTermsCode filtered by the AptmDueDay4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusmonths4(int $AptmPlusMonths4) Return the first ChildApTermsCode filtered by the AptmPlusMonths4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedate4(string $AptmDueDate4) Return the first ChildApTermsCode filtered by the AptmDueDate4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusyear4(string $AptmPlusYear4) Return the first ChildApTermsCode filtered by the AptmPlusYear4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmsplit5(string $AptmSplit5) Return the first ChildApTermsCode filtered by the AptmSplit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmorderpct5(string $AptmOrderPct5) Return the first ChildApTermsCode filtered by the AptmOrderPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscpct5(string $AptmDiscPct5) Return the first ChildApTermsCode filtered by the AptmDiscPct5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdays5(int $AptmDiscDays5) Return the first ChildApTermsCode filtered by the AptmDiscDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscday5(string $AptmDiscDay5) Return the first ChildApTermsCode filtered by the AptmDiscDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdiscdate5(string $AptmDiscDate5) Return the first ChildApTermsCode filtered by the AptmDiscDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedays5(int $AptmDueDays5) Return the first ChildApTermsCode filtered by the AptmDueDays5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdueday5(string $AptmDueDay5) Return the first ChildApTermsCode filtered by the AptmDueDay5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusmonths5(int $AptmPlusMonths5) Return the first ChildApTermsCode filtered by the AptmPlusMonths5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmduedate5(string $AptmDueDate5) Return the first ChildApTermsCode filtered by the AptmDueDate5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmplusyear5(string $AptmPlusYear5) Return the first ChildApTermsCode filtered by the AptmPlusYear5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdayfrom1(int $AptmDayFrom1) Return the first ChildApTermsCode filtered by the AptmDayFrom1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdaythru1(int $AptmDayThru1) Return the first ChildApTermsCode filtered by the AptmDayThru1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscpct1(string $AptmEomDiscPct1) Return the first ChildApTermsCode filtered by the AptmEomDiscPct1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscday1(int $AptmEomDiscDay1) Return the first ChildApTermsCode filtered by the AptmEomDiscDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscmonths1(int $AptmEomDiscMonths1) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdueday1(int $AptmEomDueDay1) Return the first ChildApTermsCode filtered by the AptmEomDueDay1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomplusmonths1(int $AptmEomPlusMonths1) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdayfrom2(int $AptmDayFrom2) Return the first ChildApTermsCode filtered by the AptmDayFrom2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdaythru2(int $AptmDayThru2) Return the first ChildApTermsCode filtered by the AptmDayThru2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscpct2(string $AptmEomDiscPct2) Return the first ChildApTermsCode filtered by the AptmEomDiscPct2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscday2(int $AptmEomDiscDay2) Return the first ChildApTermsCode filtered by the AptmEomDiscDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscmonths2(int $AptmEomDiscMonths2) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdueday2(int $AptmEomDueDay2) Return the first ChildApTermsCode filtered by the AptmEomDueDay2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomplusmonths2(int $AptmEomPlusMonths2) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdayfrom3(int $AptmDayFrom3) Return the first ChildApTermsCode filtered by the AptmDayFrom3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmdaythru3(int $AptmDayThru3) Return the first ChildApTermsCode filtered by the AptmDayThru3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscpct3(string $AptmEomDiscPct3) Return the first ChildApTermsCode filtered by the AptmEomDiscPct3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscday3(int $AptmEomDiscDay3) Return the first ChildApTermsCode filtered by the AptmEomDiscDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdiscmonths3(int $AptmEomDiscMonths3) Return the first ChildApTermsCode filtered by the AptmEomDiscMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomdueday3(int $AptmEomDueDay3) Return the first ChildApTermsCode filtered by the AptmEomDueDay3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByAptmeomplusmonths3(int $AptmEomPlusMonths3) Return the first ChildApTermsCode filtered by the AptmEomPlusMonths3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApTermsCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTermsCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTermsCode requireOneByDummy(string $dummy) Return the first ChildApTermsCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTermsCode[]|Collection find(?ConnectionInterface $con = null) Return ChildApTermsCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildApTermsCode> find(?ConnectionInterface $con = null) Return ChildApTermsCode objects based on current ModelCriteria
 *
 * @method     ChildApTermsCode[]|Collection findByAptmtermcode(string|array<string> $AptmTermCode) Return ChildApTermsCode objects filtered by the AptmTermCode column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmtermcode(string|array<string> $AptmTermCode) Return ChildApTermsCode objects filtered by the AptmTermCode column
 * @method     ChildApTermsCode[]|Collection findByAptmtermdesc(string|array<string> $AptmTermDesc) Return ChildApTermsCode objects filtered by the AptmTermDesc column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmtermdesc(string|array<string> $AptmTermDesc) Return ChildApTermsCode objects filtered by the AptmTermDesc column
 * @method     ChildApTermsCode[]|Collection findByAptmmethod(string|array<string> $AptmMethod) Return ChildApTermsCode objects filtered by the AptmMethod column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmmethod(string|array<string> $AptmMethod) Return ChildApTermsCode objects filtered by the AptmMethod column
 * @method     ChildApTermsCode[]|Collection findByAptmexpiredate(string|array<string> $AptmExpireDate) Return ChildApTermsCode objects filtered by the AptmExpireDate column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmexpiredate(string|array<string> $AptmExpireDate) Return ChildApTermsCode objects filtered by the AptmExpireDate column
 * @method     ChildApTermsCode[]|Collection findByAptmsplit1(string|array<string> $AptmSplit1) Return ChildApTermsCode objects filtered by the AptmSplit1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmsplit1(string|array<string> $AptmSplit1) Return ChildApTermsCode objects filtered by the AptmSplit1 column
 * @method     ChildApTermsCode[]|Collection findByAptmorderpct1(string|array<string> $AptmOrderPct1) Return ChildApTermsCode objects filtered by the AptmOrderPct1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmorderpct1(string|array<string> $AptmOrderPct1) Return ChildApTermsCode objects filtered by the AptmOrderPct1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscpct1(string|array<string> $AptmDiscPct1) Return ChildApTermsCode objects filtered by the AptmDiscPct1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscpct1(string|array<string> $AptmDiscPct1) Return ChildApTermsCode objects filtered by the AptmDiscPct1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdays1(int|array<int> $AptmDiscDays1) Return ChildApTermsCode objects filtered by the AptmDiscDays1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdays1(int|array<int> $AptmDiscDays1) Return ChildApTermsCode objects filtered by the AptmDiscDays1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscday1(string|array<string> $AptmDiscDay1) Return ChildApTermsCode objects filtered by the AptmDiscDay1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscday1(string|array<string> $AptmDiscDay1) Return ChildApTermsCode objects filtered by the AptmDiscDay1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdate1(string|array<string> $AptmDiscDate1) Return ChildApTermsCode objects filtered by the AptmDiscDate1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdate1(string|array<string> $AptmDiscDate1) Return ChildApTermsCode objects filtered by the AptmDiscDate1 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedays1(int|array<int> $AptmDueDays1) Return ChildApTermsCode objects filtered by the AptmDueDays1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedays1(int|array<int> $AptmDueDays1) Return ChildApTermsCode objects filtered by the AptmDueDays1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdueday1(string|array<string> $AptmDueDay1) Return ChildApTermsCode objects filtered by the AptmDueDay1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdueday1(string|array<string> $AptmDueDay1) Return ChildApTermsCode objects filtered by the AptmDueDay1 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusmonths1(int|array<int> $AptmPlusMonths1) Return ChildApTermsCode objects filtered by the AptmPlusMonths1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusmonths1(int|array<int> $AptmPlusMonths1) Return ChildApTermsCode objects filtered by the AptmPlusMonths1 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedate1(string|array<string> $AptmDueDate1) Return ChildApTermsCode objects filtered by the AptmDueDate1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedate1(string|array<string> $AptmDueDate1) Return ChildApTermsCode objects filtered by the AptmDueDate1 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusyear1(string|array<string> $AptmPlusYear1) Return ChildApTermsCode objects filtered by the AptmPlusYear1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusyear1(string|array<string> $AptmPlusYear1) Return ChildApTermsCode objects filtered by the AptmPlusYear1 column
 * @method     ChildApTermsCode[]|Collection findByAptmsplit2(string|array<string> $AptmSplit2) Return ChildApTermsCode objects filtered by the AptmSplit2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmsplit2(string|array<string> $AptmSplit2) Return ChildApTermsCode objects filtered by the AptmSplit2 column
 * @method     ChildApTermsCode[]|Collection findByAptmorderpct2(string|array<string> $AptmOrderPct2) Return ChildApTermsCode objects filtered by the AptmOrderPct2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmorderpct2(string|array<string> $AptmOrderPct2) Return ChildApTermsCode objects filtered by the AptmOrderPct2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscpct2(string|array<string> $AptmDiscPct2) Return ChildApTermsCode objects filtered by the AptmDiscPct2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscpct2(string|array<string> $AptmDiscPct2) Return ChildApTermsCode objects filtered by the AptmDiscPct2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdays2(int|array<int> $AptmDiscDays2) Return ChildApTermsCode objects filtered by the AptmDiscDays2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdays2(int|array<int> $AptmDiscDays2) Return ChildApTermsCode objects filtered by the AptmDiscDays2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscday2(string|array<string> $AptmDiscDay2) Return ChildApTermsCode objects filtered by the AptmDiscDay2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscday2(string|array<string> $AptmDiscDay2) Return ChildApTermsCode objects filtered by the AptmDiscDay2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdate2(string|array<string> $AptmDiscDate2) Return ChildApTermsCode objects filtered by the AptmDiscDate2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdate2(string|array<string> $AptmDiscDate2) Return ChildApTermsCode objects filtered by the AptmDiscDate2 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedays2(int|array<int> $AptmDueDays2) Return ChildApTermsCode objects filtered by the AptmDueDays2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedays2(int|array<int> $AptmDueDays2) Return ChildApTermsCode objects filtered by the AptmDueDays2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdueday2(string|array<string> $AptmDueDay2) Return ChildApTermsCode objects filtered by the AptmDueDay2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdueday2(string|array<string> $AptmDueDay2) Return ChildApTermsCode objects filtered by the AptmDueDay2 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusmonths2(int|array<int> $AptmPlusMonths2) Return ChildApTermsCode objects filtered by the AptmPlusMonths2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusmonths2(int|array<int> $AptmPlusMonths2) Return ChildApTermsCode objects filtered by the AptmPlusMonths2 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedate2(string|array<string> $AptmDueDate2) Return ChildApTermsCode objects filtered by the AptmDueDate2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedate2(string|array<string> $AptmDueDate2) Return ChildApTermsCode objects filtered by the AptmDueDate2 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusyear2(string|array<string> $AptmPlusYear2) Return ChildApTermsCode objects filtered by the AptmPlusYear2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusyear2(string|array<string> $AptmPlusYear2) Return ChildApTermsCode objects filtered by the AptmPlusYear2 column
 * @method     ChildApTermsCode[]|Collection findByAptmsplit3(string|array<string> $AptmSplit3) Return ChildApTermsCode objects filtered by the AptmSplit3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmsplit3(string|array<string> $AptmSplit3) Return ChildApTermsCode objects filtered by the AptmSplit3 column
 * @method     ChildApTermsCode[]|Collection findByAptmorderpct3(string|array<string> $AptmOrderPct3) Return ChildApTermsCode objects filtered by the AptmOrderPct3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmorderpct3(string|array<string> $AptmOrderPct3) Return ChildApTermsCode objects filtered by the AptmOrderPct3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscpct3(string|array<string> $AptmDiscPct3) Return ChildApTermsCode objects filtered by the AptmDiscPct3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscpct3(string|array<string> $AptmDiscPct3) Return ChildApTermsCode objects filtered by the AptmDiscPct3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdays3(int|array<int> $AptmDiscDays3) Return ChildApTermsCode objects filtered by the AptmDiscDays3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdays3(int|array<int> $AptmDiscDays3) Return ChildApTermsCode objects filtered by the AptmDiscDays3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscday3(string|array<string> $AptmDiscDay3) Return ChildApTermsCode objects filtered by the AptmDiscDay3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscday3(string|array<string> $AptmDiscDay3) Return ChildApTermsCode objects filtered by the AptmDiscDay3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdate3(string|array<string> $AptmDiscDate3) Return ChildApTermsCode objects filtered by the AptmDiscDate3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdate3(string|array<string> $AptmDiscDate3) Return ChildApTermsCode objects filtered by the AptmDiscDate3 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedays3(int|array<int> $AptmDueDays3) Return ChildApTermsCode objects filtered by the AptmDueDays3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedays3(int|array<int> $AptmDueDays3) Return ChildApTermsCode objects filtered by the AptmDueDays3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdueday3(string|array<string> $AptmDueDay3) Return ChildApTermsCode objects filtered by the AptmDueDay3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdueday3(string|array<string> $AptmDueDay3) Return ChildApTermsCode objects filtered by the AptmDueDay3 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusmonths3(int|array<int> $AptmPlusMonths3) Return ChildApTermsCode objects filtered by the AptmPlusMonths3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusmonths3(int|array<int> $AptmPlusMonths3) Return ChildApTermsCode objects filtered by the AptmPlusMonths3 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedate3(string|array<string> $AptmDueDate3) Return ChildApTermsCode objects filtered by the AptmDueDate3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedate3(string|array<string> $AptmDueDate3) Return ChildApTermsCode objects filtered by the AptmDueDate3 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusyear3(string|array<string> $AptmPlusYear3) Return ChildApTermsCode objects filtered by the AptmPlusYear3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusyear3(string|array<string> $AptmPlusYear3) Return ChildApTermsCode objects filtered by the AptmPlusYear3 column
 * @method     ChildApTermsCode[]|Collection findByAptmsplit4(string|array<string> $AptmSplit4) Return ChildApTermsCode objects filtered by the AptmSplit4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmsplit4(string|array<string> $AptmSplit4) Return ChildApTermsCode objects filtered by the AptmSplit4 column
 * @method     ChildApTermsCode[]|Collection findByAptmorderpct4(string|array<string> $AptmOrderPct4) Return ChildApTermsCode objects filtered by the AptmOrderPct4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmorderpct4(string|array<string> $AptmOrderPct4) Return ChildApTermsCode objects filtered by the AptmOrderPct4 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscpct4(string|array<string> $AptmDiscPct4) Return ChildApTermsCode objects filtered by the AptmDiscPct4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscpct4(string|array<string> $AptmDiscPct4) Return ChildApTermsCode objects filtered by the AptmDiscPct4 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdays4(int|array<int> $AptmDiscDays4) Return ChildApTermsCode objects filtered by the AptmDiscDays4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdays4(int|array<int> $AptmDiscDays4) Return ChildApTermsCode objects filtered by the AptmDiscDays4 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscday4(string|array<string> $AptmDiscDay4) Return ChildApTermsCode objects filtered by the AptmDiscDay4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscday4(string|array<string> $AptmDiscDay4) Return ChildApTermsCode objects filtered by the AptmDiscDay4 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdate4(string|array<string> $AptmDiscDate4) Return ChildApTermsCode objects filtered by the AptmDiscDate4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdate4(string|array<string> $AptmDiscDate4) Return ChildApTermsCode objects filtered by the AptmDiscDate4 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedays4(int|array<int> $AptmDueDays4) Return ChildApTermsCode objects filtered by the AptmDueDays4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedays4(int|array<int> $AptmDueDays4) Return ChildApTermsCode objects filtered by the AptmDueDays4 column
 * @method     ChildApTermsCode[]|Collection findByAptmdueday4(string|array<string> $AptmDueDay4) Return ChildApTermsCode objects filtered by the AptmDueDay4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdueday4(string|array<string> $AptmDueDay4) Return ChildApTermsCode objects filtered by the AptmDueDay4 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusmonths4(int|array<int> $AptmPlusMonths4) Return ChildApTermsCode objects filtered by the AptmPlusMonths4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusmonths4(int|array<int> $AptmPlusMonths4) Return ChildApTermsCode objects filtered by the AptmPlusMonths4 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedate4(string|array<string> $AptmDueDate4) Return ChildApTermsCode objects filtered by the AptmDueDate4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedate4(string|array<string> $AptmDueDate4) Return ChildApTermsCode objects filtered by the AptmDueDate4 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusyear4(string|array<string> $AptmPlusYear4) Return ChildApTermsCode objects filtered by the AptmPlusYear4 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusyear4(string|array<string> $AptmPlusYear4) Return ChildApTermsCode objects filtered by the AptmPlusYear4 column
 * @method     ChildApTermsCode[]|Collection findByAptmsplit5(string|array<string> $AptmSplit5) Return ChildApTermsCode objects filtered by the AptmSplit5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmsplit5(string|array<string> $AptmSplit5) Return ChildApTermsCode objects filtered by the AptmSplit5 column
 * @method     ChildApTermsCode[]|Collection findByAptmorderpct5(string|array<string> $AptmOrderPct5) Return ChildApTermsCode objects filtered by the AptmOrderPct5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmorderpct5(string|array<string> $AptmOrderPct5) Return ChildApTermsCode objects filtered by the AptmOrderPct5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscpct5(string|array<string> $AptmDiscPct5) Return ChildApTermsCode objects filtered by the AptmDiscPct5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscpct5(string|array<string> $AptmDiscPct5) Return ChildApTermsCode objects filtered by the AptmDiscPct5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdays5(int|array<int> $AptmDiscDays5) Return ChildApTermsCode objects filtered by the AptmDiscDays5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdays5(int|array<int> $AptmDiscDays5) Return ChildApTermsCode objects filtered by the AptmDiscDays5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscday5(string|array<string> $AptmDiscDay5) Return ChildApTermsCode objects filtered by the AptmDiscDay5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscday5(string|array<string> $AptmDiscDay5) Return ChildApTermsCode objects filtered by the AptmDiscDay5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdiscdate5(string|array<string> $AptmDiscDate5) Return ChildApTermsCode objects filtered by the AptmDiscDate5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdiscdate5(string|array<string> $AptmDiscDate5) Return ChildApTermsCode objects filtered by the AptmDiscDate5 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedays5(int|array<int> $AptmDueDays5) Return ChildApTermsCode objects filtered by the AptmDueDays5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedays5(int|array<int> $AptmDueDays5) Return ChildApTermsCode objects filtered by the AptmDueDays5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdueday5(string|array<string> $AptmDueDay5) Return ChildApTermsCode objects filtered by the AptmDueDay5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdueday5(string|array<string> $AptmDueDay5) Return ChildApTermsCode objects filtered by the AptmDueDay5 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusmonths5(int|array<int> $AptmPlusMonths5) Return ChildApTermsCode objects filtered by the AptmPlusMonths5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusmonths5(int|array<int> $AptmPlusMonths5) Return ChildApTermsCode objects filtered by the AptmPlusMonths5 column
 * @method     ChildApTermsCode[]|Collection findByAptmduedate5(string|array<string> $AptmDueDate5) Return ChildApTermsCode objects filtered by the AptmDueDate5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmduedate5(string|array<string> $AptmDueDate5) Return ChildApTermsCode objects filtered by the AptmDueDate5 column
 * @method     ChildApTermsCode[]|Collection findByAptmplusyear5(string|array<string> $AptmPlusYear5) Return ChildApTermsCode objects filtered by the AptmPlusYear5 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmplusyear5(string|array<string> $AptmPlusYear5) Return ChildApTermsCode objects filtered by the AptmPlusYear5 column
 * @method     ChildApTermsCode[]|Collection findByAptmdayfrom1(int|array<int> $AptmDayFrom1) Return ChildApTermsCode objects filtered by the AptmDayFrom1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdayfrom1(int|array<int> $AptmDayFrom1) Return ChildApTermsCode objects filtered by the AptmDayFrom1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdaythru1(int|array<int> $AptmDayThru1) Return ChildApTermsCode objects filtered by the AptmDayThru1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdaythru1(int|array<int> $AptmDayThru1) Return ChildApTermsCode objects filtered by the AptmDayThru1 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscpct1(string|array<string> $AptmEomDiscPct1) Return ChildApTermsCode objects filtered by the AptmEomDiscPct1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscpct1(string|array<string> $AptmEomDiscPct1) Return ChildApTermsCode objects filtered by the AptmEomDiscPct1 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscday1(int|array<int> $AptmEomDiscDay1) Return ChildApTermsCode objects filtered by the AptmEomDiscDay1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscday1(int|array<int> $AptmEomDiscDay1) Return ChildApTermsCode objects filtered by the AptmEomDiscDay1 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscmonths1(int|array<int> $AptmEomDiscMonths1) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscmonths1(int|array<int> $AptmEomDiscMonths1) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths1 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdueday1(int|array<int> $AptmEomDueDay1) Return ChildApTermsCode objects filtered by the AptmEomDueDay1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdueday1(int|array<int> $AptmEomDueDay1) Return ChildApTermsCode objects filtered by the AptmEomDueDay1 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomplusmonths1(int|array<int> $AptmEomPlusMonths1) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths1 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomplusmonths1(int|array<int> $AptmEomPlusMonths1) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths1 column
 * @method     ChildApTermsCode[]|Collection findByAptmdayfrom2(int|array<int> $AptmDayFrom2) Return ChildApTermsCode objects filtered by the AptmDayFrom2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdayfrom2(int|array<int> $AptmDayFrom2) Return ChildApTermsCode objects filtered by the AptmDayFrom2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdaythru2(int|array<int> $AptmDayThru2) Return ChildApTermsCode objects filtered by the AptmDayThru2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdaythru2(int|array<int> $AptmDayThru2) Return ChildApTermsCode objects filtered by the AptmDayThru2 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscpct2(string|array<string> $AptmEomDiscPct2) Return ChildApTermsCode objects filtered by the AptmEomDiscPct2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscpct2(string|array<string> $AptmEomDiscPct2) Return ChildApTermsCode objects filtered by the AptmEomDiscPct2 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscday2(int|array<int> $AptmEomDiscDay2) Return ChildApTermsCode objects filtered by the AptmEomDiscDay2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscday2(int|array<int> $AptmEomDiscDay2) Return ChildApTermsCode objects filtered by the AptmEomDiscDay2 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscmonths2(int|array<int> $AptmEomDiscMonths2) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscmonths2(int|array<int> $AptmEomDiscMonths2) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths2 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdueday2(int|array<int> $AptmEomDueDay2) Return ChildApTermsCode objects filtered by the AptmEomDueDay2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdueday2(int|array<int> $AptmEomDueDay2) Return ChildApTermsCode objects filtered by the AptmEomDueDay2 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomplusmonths2(int|array<int> $AptmEomPlusMonths2) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths2 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomplusmonths2(int|array<int> $AptmEomPlusMonths2) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths2 column
 * @method     ChildApTermsCode[]|Collection findByAptmdayfrom3(int|array<int> $AptmDayFrom3) Return ChildApTermsCode objects filtered by the AptmDayFrom3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdayfrom3(int|array<int> $AptmDayFrom3) Return ChildApTermsCode objects filtered by the AptmDayFrom3 column
 * @method     ChildApTermsCode[]|Collection findByAptmdaythru3(int|array<int> $AptmDayThru3) Return ChildApTermsCode objects filtered by the AptmDayThru3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmdaythru3(int|array<int> $AptmDayThru3) Return ChildApTermsCode objects filtered by the AptmDayThru3 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscpct3(string|array<string> $AptmEomDiscPct3) Return ChildApTermsCode objects filtered by the AptmEomDiscPct3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscpct3(string|array<string> $AptmEomDiscPct3) Return ChildApTermsCode objects filtered by the AptmEomDiscPct3 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscday3(int|array<int> $AptmEomDiscDay3) Return ChildApTermsCode objects filtered by the AptmEomDiscDay3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscday3(int|array<int> $AptmEomDiscDay3) Return ChildApTermsCode objects filtered by the AptmEomDiscDay3 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdiscmonths3(int|array<int> $AptmEomDiscMonths3) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdiscmonths3(int|array<int> $AptmEomDiscMonths3) Return ChildApTermsCode objects filtered by the AptmEomDiscMonths3 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomdueday3(int|array<int> $AptmEomDueDay3) Return ChildApTermsCode objects filtered by the AptmEomDueDay3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomdueday3(int|array<int> $AptmEomDueDay3) Return ChildApTermsCode objects filtered by the AptmEomDueDay3 column
 * @method     ChildApTermsCode[]|Collection findByAptmeomplusmonths3(int|array<int> $AptmEomPlusMonths3) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths3 column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByAptmeomplusmonths3(int|array<int> $AptmEomPlusMonths3) Return ChildApTermsCode objects filtered by the AptmEomPlusMonths3 column
 * @method     ChildApTermsCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApTermsCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApTermsCode objects filtered by the DateUpdtd column
 * @method     ChildApTermsCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApTermsCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApTermsCode objects filtered by the TimeUpdtd column
 * @method     ChildApTermsCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildApTermsCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildApTermsCode> findByDummy(string|array<string> $dummy) Return ChildApTermsCode objects filtered by the dummy column
 *
 * @method     ChildApTermsCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildApTermsCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ApTermsCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApTermsCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApTermsCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApTermsCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApTermsCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildApTermsCodeQuery) {
            return $criteria;
        }
        $query = new ChildApTermsCodeQuery();
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
     * @return ChildApTermsCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApTermsCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildApTermsCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT AptmTermCode, AptmTermDesc, AptmMethod, AptmExpireDate, AptmSplit1, AptmOrderPct1, AptmDiscPct1, AptmDiscDays1, AptmDiscDay1, AptmDiscDate1, AptmDueDays1, AptmDueDay1, AptmPlusMonths1, AptmDueDate1, AptmPlusYear1, AptmSplit2, AptmOrderPct2, AptmDiscPct2, AptmDiscDays2, AptmDiscDay2, AptmDiscDate2, AptmDueDays2, AptmDueDay2, AptmPlusMonths2, AptmDueDate2, AptmPlusYear2, AptmSplit3, AptmOrderPct3, AptmDiscPct3, AptmDiscDays3, AptmDiscDay3, AptmDiscDate3, AptmDueDays3, AptmDueDay3, AptmPlusMonths3, AptmDueDate3, AptmPlusYear3, AptmSplit4, AptmOrderPct4, AptmDiscPct4, AptmDiscDays4, AptmDiscDay4, AptmDiscDate4, AptmDueDays4, AptmDueDay4, AptmPlusMonths4, AptmDueDate4, AptmPlusYear4, AptmSplit5, AptmOrderPct5, AptmDiscPct5, AptmDiscDays5, AptmDiscDay5, AptmDiscDate5, AptmDueDays5, AptmDueDay5, AptmPlusMonths5, AptmDueDate5, AptmPlusYear5, AptmDayFrom1, AptmDayThru1, AptmEomDiscPct1, AptmEomDiscDay1, AptmEomDiscMonths1, AptmEomDueDay1, AptmEomPlusMonths1, AptmDayFrom2, AptmDayThru2, AptmEomDiscPct2, AptmEomDiscDay2, AptmEomDiscMonths2, AptmEomDueDay2, AptmEomPlusMonths2, AptmDayFrom3, AptmDayThru3, AptmEomDiscPct3, AptmEomDiscDay3, AptmEomDiscMonths3, AptmEomDueDay3, AptmEomPlusMonths3, DateUpdtd, TimeUpdtd, dummy FROM ap_term_code WHERE AptmTermCode = :p0';
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
            /** @var ChildApTermsCode $obj */
            $obj = new ChildApTermsCode();
            $obj->hydrate($row);
            ApTermsCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildApTermsCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the AptmTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmtermcode('fooValue');   // WHERE AptmTermCode = 'fooValue'
     * $query->filterByAptmtermcode('%fooValue%', Criteria::LIKE); // WHERE AptmTermCode LIKE '%fooValue%'
     * $query->filterByAptmtermcode(['foo', 'bar']); // WHERE AptmTermCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmtermcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmtermcode($aptmtermcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMCODE, $aptmtermcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmTermDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmtermdesc('fooValue');   // WHERE AptmTermDesc = 'fooValue'
     * $query->filterByAptmtermdesc('%fooValue%', Criteria::LIKE); // WHERE AptmTermDesc LIKE '%fooValue%'
     * $query->filterByAptmtermdesc(['foo', 'bar']); // WHERE AptmTermDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmtermdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmtermdesc($aptmtermdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmtermdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMDESC, $aptmtermdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmmethod('fooValue');   // WHERE AptmMethod = 'fooValue'
     * $query->filterByAptmmethod('%fooValue%', Criteria::LIKE); // WHERE AptmMethod LIKE '%fooValue%'
     * $query->filterByAptmmethod(['foo', 'bar']); // WHERE AptmMethod IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmmethod The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmmethod($aptmmethod = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmmethod)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMMETHOD, $aptmmethod, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmexpiredate('fooValue');   // WHERE AptmExpireDate = 'fooValue'
     * $query->filterByAptmexpiredate('%fooValue%', Criteria::LIKE); // WHERE AptmExpireDate LIKE '%fooValue%'
     * $query->filterByAptmexpiredate(['foo', 'bar']); // WHERE AptmExpireDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmexpiredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmexpiredate($aptmexpiredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEXPIREDATE, $aptmexpiredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmSplit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmsplit1('fooValue');   // WHERE AptmSplit1 = 'fooValue'
     * $query->filterByAptmsplit1('%fooValue%', Criteria::LIKE); // WHERE AptmSplit1 LIKE '%fooValue%'
     * $query->filterByAptmsplit1(['foo', 'bar']); // WHERE AptmSplit1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmsplit1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmsplit1($aptmsplit1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmsplit1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMSPLIT1, $aptmsplit1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmOrderPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmorderpct1(1234); // WHERE AptmOrderPct1 = 1234
     * $query->filterByAptmorderpct1(array(12, 34)); // WHERE AptmOrderPct1 IN (12, 34)
     * $query->filterByAptmorderpct1(array('min' => 12)); // WHERE AptmOrderPct1 > 12
     * </code>
     *
     * @param mixed $aptmorderpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmorderpct1($aptmorderpct1 = null, ?string $comparison = null)
    {
        if (is_array($aptmorderpct1)) {
            $useMinMax = false;
            if (isset($aptmorderpct1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT1, $aptmorderpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmorderpct1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT1, $aptmorderpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT1, $aptmorderpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscpct1(1234); // WHERE AptmDiscPct1 = 1234
     * $query->filterByAptmdiscpct1(array(12, 34)); // WHERE AptmDiscPct1 IN (12, 34)
     * $query->filterByAptmdiscpct1(array('min' => 12)); // WHERE AptmDiscPct1 > 12
     * </code>
     *
     * @param mixed $aptmdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscpct1($aptmdiscpct1 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscpct1)) {
            $useMinMax = false;
            if (isset($aptmdiscpct1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT1, $aptmdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscpct1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT1, $aptmdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT1, $aptmdiscpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDays1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdays1(1234); // WHERE AptmDiscDays1 = 1234
     * $query->filterByAptmdiscdays1(array(12, 34)); // WHERE AptmDiscDays1 IN (12, 34)
     * $query->filterByAptmdiscdays1(array('min' => 12)); // WHERE AptmDiscDays1 > 12
     * </code>
     *
     * @param mixed $aptmdiscdays1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdays1($aptmdiscdays1 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscdays1)) {
            $useMinMax = false;
            if (isset($aptmdiscdays1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS1, $aptmdiscdays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscdays1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS1, $aptmdiscdays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS1, $aptmdiscdays1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscday1('fooValue');   // WHERE AptmDiscDay1 = 'fooValue'
     * $query->filterByAptmdiscday1('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDay1 LIKE '%fooValue%'
     * $query->filterByAptmdiscday1(['foo', 'bar']); // WHERE AptmDiscDay1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscday1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscday1($aptmdiscday1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscday1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAY1, $aptmdiscday1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdate1('fooValue');   // WHERE AptmDiscDate1 = 'fooValue'
     * $query->filterByAptmdiscdate1('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDate1 LIKE '%fooValue%'
     * $query->filterByAptmdiscdate1(['foo', 'bar']); // WHERE AptmDiscDate1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscdate1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdate1($aptmdiscdate1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscdate1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDATE1, $aptmdiscdate1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDays1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedays1(1234); // WHERE AptmDueDays1 = 1234
     * $query->filterByAptmduedays1(array(12, 34)); // WHERE AptmDueDays1 IN (12, 34)
     * $query->filterByAptmduedays1(array('min' => 12)); // WHERE AptmDueDays1 > 12
     * </code>
     *
     * @param mixed $aptmduedays1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedays1($aptmduedays1 = null, ?string $comparison = null)
    {
        if (is_array($aptmduedays1)) {
            $useMinMax = false;
            if (isset($aptmduedays1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS1, $aptmduedays1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmduedays1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS1, $aptmduedays1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS1, $aptmduedays1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdueday1('fooValue');   // WHERE AptmDueDay1 = 'fooValue'
     * $query->filterByAptmdueday1('%fooValue%', Criteria::LIKE); // WHERE AptmDueDay1 LIKE '%fooValue%'
     * $query->filterByAptmdueday1(['foo', 'bar']); // WHERE AptmDueDay1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdueday1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdueday1($aptmdueday1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdueday1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAY1, $aptmdueday1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusmonths1(1234); // WHERE AptmPlusMonths1 = 1234
     * $query->filterByAptmplusmonths1(array(12, 34)); // WHERE AptmPlusMonths1 IN (12, 34)
     * $query->filterByAptmplusmonths1(array('min' => 12)); // WHERE AptmPlusMonths1 > 12
     * </code>
     *
     * @param mixed $aptmplusmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusmonths1($aptmplusmonths1 = null, ?string $comparison = null)
    {
        if (is_array($aptmplusmonths1)) {
            $useMinMax = false;
            if (isset($aptmplusmonths1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1, $aptmplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmplusmonths1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1, $aptmplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS1, $aptmplusmonths1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedate1('fooValue');   // WHERE AptmDueDate1 = 'fooValue'
     * $query->filterByAptmduedate1('%fooValue%', Criteria::LIKE); // WHERE AptmDueDate1 LIKE '%fooValue%'
     * $query->filterByAptmduedate1(['foo', 'bar']); // WHERE AptmDueDate1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmduedate1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedate1($aptmduedate1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmduedate1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDATE1, $aptmduedate1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusYear1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusyear1('fooValue');   // WHERE AptmPlusYear1 = 'fooValue'
     * $query->filterByAptmplusyear1('%fooValue%', Criteria::LIKE); // WHERE AptmPlusYear1 LIKE '%fooValue%'
     * $query->filterByAptmplusyear1(['foo', 'bar']); // WHERE AptmPlusYear1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmplusyear1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusyear1($aptmplusyear1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmplusyear1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSYEAR1, $aptmplusyear1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmSplit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmsplit2('fooValue');   // WHERE AptmSplit2 = 'fooValue'
     * $query->filterByAptmsplit2('%fooValue%', Criteria::LIKE); // WHERE AptmSplit2 LIKE '%fooValue%'
     * $query->filterByAptmsplit2(['foo', 'bar']); // WHERE AptmSplit2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmsplit2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmsplit2($aptmsplit2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmsplit2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMSPLIT2, $aptmsplit2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmOrderPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmorderpct2(1234); // WHERE AptmOrderPct2 = 1234
     * $query->filterByAptmorderpct2(array(12, 34)); // WHERE AptmOrderPct2 IN (12, 34)
     * $query->filterByAptmorderpct2(array('min' => 12)); // WHERE AptmOrderPct2 > 12
     * </code>
     *
     * @param mixed $aptmorderpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmorderpct2($aptmorderpct2 = null, ?string $comparison = null)
    {
        if (is_array($aptmorderpct2)) {
            $useMinMax = false;
            if (isset($aptmorderpct2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT2, $aptmorderpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmorderpct2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT2, $aptmorderpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT2, $aptmorderpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscpct2(1234); // WHERE AptmDiscPct2 = 1234
     * $query->filterByAptmdiscpct2(array(12, 34)); // WHERE AptmDiscPct2 IN (12, 34)
     * $query->filterByAptmdiscpct2(array('min' => 12)); // WHERE AptmDiscPct2 > 12
     * </code>
     *
     * @param mixed $aptmdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscpct2($aptmdiscpct2 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscpct2)) {
            $useMinMax = false;
            if (isset($aptmdiscpct2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT2, $aptmdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscpct2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT2, $aptmdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT2, $aptmdiscpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDays2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdays2(1234); // WHERE AptmDiscDays2 = 1234
     * $query->filterByAptmdiscdays2(array(12, 34)); // WHERE AptmDiscDays2 IN (12, 34)
     * $query->filterByAptmdiscdays2(array('min' => 12)); // WHERE AptmDiscDays2 > 12
     * </code>
     *
     * @param mixed $aptmdiscdays2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdays2($aptmdiscdays2 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscdays2)) {
            $useMinMax = false;
            if (isset($aptmdiscdays2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS2, $aptmdiscdays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscdays2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS2, $aptmdiscdays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS2, $aptmdiscdays2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscday2('fooValue');   // WHERE AptmDiscDay2 = 'fooValue'
     * $query->filterByAptmdiscday2('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDay2 LIKE '%fooValue%'
     * $query->filterByAptmdiscday2(['foo', 'bar']); // WHERE AptmDiscDay2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscday2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscday2($aptmdiscday2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscday2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAY2, $aptmdiscday2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdate2('fooValue');   // WHERE AptmDiscDate2 = 'fooValue'
     * $query->filterByAptmdiscdate2('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDate2 LIKE '%fooValue%'
     * $query->filterByAptmdiscdate2(['foo', 'bar']); // WHERE AptmDiscDate2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscdate2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdate2($aptmdiscdate2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscdate2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDATE2, $aptmdiscdate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDays2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedays2(1234); // WHERE AptmDueDays2 = 1234
     * $query->filterByAptmduedays2(array(12, 34)); // WHERE AptmDueDays2 IN (12, 34)
     * $query->filterByAptmduedays2(array('min' => 12)); // WHERE AptmDueDays2 > 12
     * </code>
     *
     * @param mixed $aptmduedays2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedays2($aptmduedays2 = null, ?string $comparison = null)
    {
        if (is_array($aptmduedays2)) {
            $useMinMax = false;
            if (isset($aptmduedays2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS2, $aptmduedays2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmduedays2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS2, $aptmduedays2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS2, $aptmduedays2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdueday2('fooValue');   // WHERE AptmDueDay2 = 'fooValue'
     * $query->filterByAptmdueday2('%fooValue%', Criteria::LIKE); // WHERE AptmDueDay2 LIKE '%fooValue%'
     * $query->filterByAptmdueday2(['foo', 'bar']); // WHERE AptmDueDay2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdueday2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdueday2($aptmdueday2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdueday2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAY2, $aptmdueday2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusmonths2(1234); // WHERE AptmPlusMonths2 = 1234
     * $query->filterByAptmplusmonths2(array(12, 34)); // WHERE AptmPlusMonths2 IN (12, 34)
     * $query->filterByAptmplusmonths2(array('min' => 12)); // WHERE AptmPlusMonths2 > 12
     * </code>
     *
     * @param mixed $aptmplusmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusmonths2($aptmplusmonths2 = null, ?string $comparison = null)
    {
        if (is_array($aptmplusmonths2)) {
            $useMinMax = false;
            if (isset($aptmplusmonths2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2, $aptmplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmplusmonths2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2, $aptmplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS2, $aptmplusmonths2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedate2('fooValue');   // WHERE AptmDueDate2 = 'fooValue'
     * $query->filterByAptmduedate2('%fooValue%', Criteria::LIKE); // WHERE AptmDueDate2 LIKE '%fooValue%'
     * $query->filterByAptmduedate2(['foo', 'bar']); // WHERE AptmDueDate2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmduedate2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedate2($aptmduedate2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmduedate2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDATE2, $aptmduedate2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusYear2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusyear2('fooValue');   // WHERE AptmPlusYear2 = 'fooValue'
     * $query->filterByAptmplusyear2('%fooValue%', Criteria::LIKE); // WHERE AptmPlusYear2 LIKE '%fooValue%'
     * $query->filterByAptmplusyear2(['foo', 'bar']); // WHERE AptmPlusYear2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmplusyear2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusyear2($aptmplusyear2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmplusyear2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSYEAR2, $aptmplusyear2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmSplit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmsplit3('fooValue');   // WHERE AptmSplit3 = 'fooValue'
     * $query->filterByAptmsplit3('%fooValue%', Criteria::LIKE); // WHERE AptmSplit3 LIKE '%fooValue%'
     * $query->filterByAptmsplit3(['foo', 'bar']); // WHERE AptmSplit3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmsplit3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmsplit3($aptmsplit3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmsplit3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMSPLIT3, $aptmsplit3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmOrderPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmorderpct3(1234); // WHERE AptmOrderPct3 = 1234
     * $query->filterByAptmorderpct3(array(12, 34)); // WHERE AptmOrderPct3 IN (12, 34)
     * $query->filterByAptmorderpct3(array('min' => 12)); // WHERE AptmOrderPct3 > 12
     * </code>
     *
     * @param mixed $aptmorderpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmorderpct3($aptmorderpct3 = null, ?string $comparison = null)
    {
        if (is_array($aptmorderpct3)) {
            $useMinMax = false;
            if (isset($aptmorderpct3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT3, $aptmorderpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmorderpct3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT3, $aptmorderpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT3, $aptmorderpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscpct3(1234); // WHERE AptmDiscPct3 = 1234
     * $query->filterByAptmdiscpct3(array(12, 34)); // WHERE AptmDiscPct3 IN (12, 34)
     * $query->filterByAptmdiscpct3(array('min' => 12)); // WHERE AptmDiscPct3 > 12
     * </code>
     *
     * @param mixed $aptmdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscpct3($aptmdiscpct3 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscpct3)) {
            $useMinMax = false;
            if (isset($aptmdiscpct3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT3, $aptmdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscpct3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT3, $aptmdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT3, $aptmdiscpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDays3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdays3(1234); // WHERE AptmDiscDays3 = 1234
     * $query->filterByAptmdiscdays3(array(12, 34)); // WHERE AptmDiscDays3 IN (12, 34)
     * $query->filterByAptmdiscdays3(array('min' => 12)); // WHERE AptmDiscDays3 > 12
     * </code>
     *
     * @param mixed $aptmdiscdays3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdays3($aptmdiscdays3 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscdays3)) {
            $useMinMax = false;
            if (isset($aptmdiscdays3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS3, $aptmdiscdays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscdays3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS3, $aptmdiscdays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS3, $aptmdiscdays3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscday3('fooValue');   // WHERE AptmDiscDay3 = 'fooValue'
     * $query->filterByAptmdiscday3('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDay3 LIKE '%fooValue%'
     * $query->filterByAptmdiscday3(['foo', 'bar']); // WHERE AptmDiscDay3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscday3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscday3($aptmdiscday3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscday3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAY3, $aptmdiscday3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdate3('fooValue');   // WHERE AptmDiscDate3 = 'fooValue'
     * $query->filterByAptmdiscdate3('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDate3 LIKE '%fooValue%'
     * $query->filterByAptmdiscdate3(['foo', 'bar']); // WHERE AptmDiscDate3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscdate3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdate3($aptmdiscdate3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscdate3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDATE3, $aptmdiscdate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDays3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedays3(1234); // WHERE AptmDueDays3 = 1234
     * $query->filterByAptmduedays3(array(12, 34)); // WHERE AptmDueDays3 IN (12, 34)
     * $query->filterByAptmduedays3(array('min' => 12)); // WHERE AptmDueDays3 > 12
     * </code>
     *
     * @param mixed $aptmduedays3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedays3($aptmduedays3 = null, ?string $comparison = null)
    {
        if (is_array($aptmduedays3)) {
            $useMinMax = false;
            if (isset($aptmduedays3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS3, $aptmduedays3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmduedays3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS3, $aptmduedays3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS3, $aptmduedays3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdueday3('fooValue');   // WHERE AptmDueDay3 = 'fooValue'
     * $query->filterByAptmdueday3('%fooValue%', Criteria::LIKE); // WHERE AptmDueDay3 LIKE '%fooValue%'
     * $query->filterByAptmdueday3(['foo', 'bar']); // WHERE AptmDueDay3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdueday3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdueday3($aptmdueday3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdueday3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAY3, $aptmdueday3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusmonths3(1234); // WHERE AptmPlusMonths3 = 1234
     * $query->filterByAptmplusmonths3(array(12, 34)); // WHERE AptmPlusMonths3 IN (12, 34)
     * $query->filterByAptmplusmonths3(array('min' => 12)); // WHERE AptmPlusMonths3 > 12
     * </code>
     *
     * @param mixed $aptmplusmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusmonths3($aptmplusmonths3 = null, ?string $comparison = null)
    {
        if (is_array($aptmplusmonths3)) {
            $useMinMax = false;
            if (isset($aptmplusmonths3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3, $aptmplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmplusmonths3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3, $aptmplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS3, $aptmplusmonths3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDate3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedate3('fooValue');   // WHERE AptmDueDate3 = 'fooValue'
     * $query->filterByAptmduedate3('%fooValue%', Criteria::LIKE); // WHERE AptmDueDate3 LIKE '%fooValue%'
     * $query->filterByAptmduedate3(['foo', 'bar']); // WHERE AptmDueDate3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmduedate3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedate3($aptmduedate3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmduedate3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDATE3, $aptmduedate3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusYear3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusyear3('fooValue');   // WHERE AptmPlusYear3 = 'fooValue'
     * $query->filterByAptmplusyear3('%fooValue%', Criteria::LIKE); // WHERE AptmPlusYear3 LIKE '%fooValue%'
     * $query->filterByAptmplusyear3(['foo', 'bar']); // WHERE AptmPlusYear3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmplusyear3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusyear3($aptmplusyear3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmplusyear3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSYEAR3, $aptmplusyear3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmSplit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmsplit4('fooValue');   // WHERE AptmSplit4 = 'fooValue'
     * $query->filterByAptmsplit4('%fooValue%', Criteria::LIKE); // WHERE AptmSplit4 LIKE '%fooValue%'
     * $query->filterByAptmsplit4(['foo', 'bar']); // WHERE AptmSplit4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmsplit4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmsplit4($aptmsplit4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmsplit4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMSPLIT4, $aptmsplit4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmOrderPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmorderpct4(1234); // WHERE AptmOrderPct4 = 1234
     * $query->filterByAptmorderpct4(array(12, 34)); // WHERE AptmOrderPct4 IN (12, 34)
     * $query->filterByAptmorderpct4(array('min' => 12)); // WHERE AptmOrderPct4 > 12
     * </code>
     *
     * @param mixed $aptmorderpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmorderpct4($aptmorderpct4 = null, ?string $comparison = null)
    {
        if (is_array($aptmorderpct4)) {
            $useMinMax = false;
            if (isset($aptmorderpct4['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT4, $aptmorderpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmorderpct4['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT4, $aptmorderpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT4, $aptmorderpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscPct4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscpct4(1234); // WHERE AptmDiscPct4 = 1234
     * $query->filterByAptmdiscpct4(array(12, 34)); // WHERE AptmDiscPct4 IN (12, 34)
     * $query->filterByAptmdiscpct4(array('min' => 12)); // WHERE AptmDiscPct4 > 12
     * </code>
     *
     * @param mixed $aptmdiscpct4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscpct4($aptmdiscpct4 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscpct4)) {
            $useMinMax = false;
            if (isset($aptmdiscpct4['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT4, $aptmdiscpct4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscpct4['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT4, $aptmdiscpct4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT4, $aptmdiscpct4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDays4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdays4(1234); // WHERE AptmDiscDays4 = 1234
     * $query->filterByAptmdiscdays4(array(12, 34)); // WHERE AptmDiscDays4 IN (12, 34)
     * $query->filterByAptmdiscdays4(array('min' => 12)); // WHERE AptmDiscDays4 > 12
     * </code>
     *
     * @param mixed $aptmdiscdays4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdays4($aptmdiscdays4 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscdays4)) {
            $useMinMax = false;
            if (isset($aptmdiscdays4['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS4, $aptmdiscdays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscdays4['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS4, $aptmdiscdays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS4, $aptmdiscdays4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDay4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscday4('fooValue');   // WHERE AptmDiscDay4 = 'fooValue'
     * $query->filterByAptmdiscday4('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDay4 LIKE '%fooValue%'
     * $query->filterByAptmdiscday4(['foo', 'bar']); // WHERE AptmDiscDay4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscday4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscday4($aptmdiscday4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscday4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAY4, $aptmdiscday4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdate4('fooValue');   // WHERE AptmDiscDate4 = 'fooValue'
     * $query->filterByAptmdiscdate4('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDate4 LIKE '%fooValue%'
     * $query->filterByAptmdiscdate4(['foo', 'bar']); // WHERE AptmDiscDate4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscdate4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdate4($aptmdiscdate4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscdate4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDATE4, $aptmdiscdate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDays4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedays4(1234); // WHERE AptmDueDays4 = 1234
     * $query->filterByAptmduedays4(array(12, 34)); // WHERE AptmDueDays4 IN (12, 34)
     * $query->filterByAptmduedays4(array('min' => 12)); // WHERE AptmDueDays4 > 12
     * </code>
     *
     * @param mixed $aptmduedays4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedays4($aptmduedays4 = null, ?string $comparison = null)
    {
        if (is_array($aptmduedays4)) {
            $useMinMax = false;
            if (isset($aptmduedays4['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS4, $aptmduedays4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmduedays4['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS4, $aptmduedays4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS4, $aptmduedays4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDay4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdueday4('fooValue');   // WHERE AptmDueDay4 = 'fooValue'
     * $query->filterByAptmdueday4('%fooValue%', Criteria::LIKE); // WHERE AptmDueDay4 LIKE '%fooValue%'
     * $query->filterByAptmdueday4(['foo', 'bar']); // WHERE AptmDueDay4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdueday4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdueday4($aptmdueday4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdueday4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAY4, $aptmdueday4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusMonths4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusmonths4(1234); // WHERE AptmPlusMonths4 = 1234
     * $query->filterByAptmplusmonths4(array(12, 34)); // WHERE AptmPlusMonths4 IN (12, 34)
     * $query->filterByAptmplusmonths4(array('min' => 12)); // WHERE AptmPlusMonths4 > 12
     * </code>
     *
     * @param mixed $aptmplusmonths4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusmonths4($aptmplusmonths4 = null, ?string $comparison = null)
    {
        if (is_array($aptmplusmonths4)) {
            $useMinMax = false;
            if (isset($aptmplusmonths4['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4, $aptmplusmonths4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmplusmonths4['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4, $aptmplusmonths4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS4, $aptmplusmonths4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDate4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedate4('fooValue');   // WHERE AptmDueDate4 = 'fooValue'
     * $query->filterByAptmduedate4('%fooValue%', Criteria::LIKE); // WHERE AptmDueDate4 LIKE '%fooValue%'
     * $query->filterByAptmduedate4(['foo', 'bar']); // WHERE AptmDueDate4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmduedate4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedate4($aptmduedate4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmduedate4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDATE4, $aptmduedate4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusYear4 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusyear4('fooValue');   // WHERE AptmPlusYear4 = 'fooValue'
     * $query->filterByAptmplusyear4('%fooValue%', Criteria::LIKE); // WHERE AptmPlusYear4 LIKE '%fooValue%'
     * $query->filterByAptmplusyear4(['foo', 'bar']); // WHERE AptmPlusYear4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmplusyear4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusyear4($aptmplusyear4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmplusyear4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSYEAR4, $aptmplusyear4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmSplit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmsplit5('fooValue');   // WHERE AptmSplit5 = 'fooValue'
     * $query->filterByAptmsplit5('%fooValue%', Criteria::LIKE); // WHERE AptmSplit5 LIKE '%fooValue%'
     * $query->filterByAptmsplit5(['foo', 'bar']); // WHERE AptmSplit5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmsplit5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmsplit5($aptmsplit5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmsplit5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMSPLIT5, $aptmsplit5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmOrderPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmorderpct5(1234); // WHERE AptmOrderPct5 = 1234
     * $query->filterByAptmorderpct5(array(12, 34)); // WHERE AptmOrderPct5 IN (12, 34)
     * $query->filterByAptmorderpct5(array('min' => 12)); // WHERE AptmOrderPct5 > 12
     * </code>
     *
     * @param mixed $aptmorderpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmorderpct5($aptmorderpct5 = null, ?string $comparison = null)
    {
        if (is_array($aptmorderpct5)) {
            $useMinMax = false;
            if (isset($aptmorderpct5['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT5, $aptmorderpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmorderpct5['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT5, $aptmorderpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMORDERPCT5, $aptmorderpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscPct5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscpct5(1234); // WHERE AptmDiscPct5 = 1234
     * $query->filterByAptmdiscpct5(array(12, 34)); // WHERE AptmDiscPct5 IN (12, 34)
     * $query->filterByAptmdiscpct5(array('min' => 12)); // WHERE AptmDiscPct5 > 12
     * </code>
     *
     * @param mixed $aptmdiscpct5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscpct5($aptmdiscpct5 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscpct5)) {
            $useMinMax = false;
            if (isset($aptmdiscpct5['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT5, $aptmdiscpct5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscpct5['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT5, $aptmdiscpct5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCPCT5, $aptmdiscpct5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDays5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdays5(1234); // WHERE AptmDiscDays5 = 1234
     * $query->filterByAptmdiscdays5(array(12, 34)); // WHERE AptmDiscDays5 IN (12, 34)
     * $query->filterByAptmdiscdays5(array('min' => 12)); // WHERE AptmDiscDays5 > 12
     * </code>
     *
     * @param mixed $aptmdiscdays5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdays5($aptmdiscdays5 = null, ?string $comparison = null)
    {
        if (is_array($aptmdiscdays5)) {
            $useMinMax = false;
            if (isset($aptmdiscdays5['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS5, $aptmdiscdays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdiscdays5['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS5, $aptmdiscdays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAYS5, $aptmdiscdays5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDay5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscday5('fooValue');   // WHERE AptmDiscDay5 = 'fooValue'
     * $query->filterByAptmdiscday5('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDay5 LIKE '%fooValue%'
     * $query->filterByAptmdiscday5(['foo', 'bar']); // WHERE AptmDiscDay5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscday5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscday5($aptmdiscday5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscday5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDAY5, $aptmdiscday5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDiscDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdiscdate5('fooValue');   // WHERE AptmDiscDate5 = 'fooValue'
     * $query->filterByAptmdiscdate5('%fooValue%', Criteria::LIKE); // WHERE AptmDiscDate5 LIKE '%fooValue%'
     * $query->filterByAptmdiscdate5(['foo', 'bar']); // WHERE AptmDiscDate5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdiscdate5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdiscdate5($aptmdiscdate5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdiscdate5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDISCDATE5, $aptmdiscdate5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDays5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedays5(1234); // WHERE AptmDueDays5 = 1234
     * $query->filterByAptmduedays5(array(12, 34)); // WHERE AptmDueDays5 IN (12, 34)
     * $query->filterByAptmduedays5(array('min' => 12)); // WHERE AptmDueDays5 > 12
     * </code>
     *
     * @param mixed $aptmduedays5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedays5($aptmduedays5 = null, ?string $comparison = null)
    {
        if (is_array($aptmduedays5)) {
            $useMinMax = false;
            if (isset($aptmduedays5['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS5, $aptmduedays5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmduedays5['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS5, $aptmduedays5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAYS5, $aptmduedays5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDay5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdueday5('fooValue');   // WHERE AptmDueDay5 = 'fooValue'
     * $query->filterByAptmdueday5('%fooValue%', Criteria::LIKE); // WHERE AptmDueDay5 LIKE '%fooValue%'
     * $query->filterByAptmdueday5(['foo', 'bar']); // WHERE AptmDueDay5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmdueday5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdueday5($aptmdueday5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmdueday5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDAY5, $aptmdueday5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusMonths5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusmonths5(1234); // WHERE AptmPlusMonths5 = 1234
     * $query->filterByAptmplusmonths5(array(12, 34)); // WHERE AptmPlusMonths5 IN (12, 34)
     * $query->filterByAptmplusmonths5(array('min' => 12)); // WHERE AptmPlusMonths5 > 12
     * </code>
     *
     * @param mixed $aptmplusmonths5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusmonths5($aptmplusmonths5 = null, ?string $comparison = null)
    {
        if (is_array($aptmplusmonths5)) {
            $useMinMax = false;
            if (isset($aptmplusmonths5['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5, $aptmplusmonths5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmplusmonths5['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5, $aptmplusmonths5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSMONTHS5, $aptmplusmonths5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDueDate5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmduedate5('fooValue');   // WHERE AptmDueDate5 = 'fooValue'
     * $query->filterByAptmduedate5('%fooValue%', Criteria::LIKE); // WHERE AptmDueDate5 LIKE '%fooValue%'
     * $query->filterByAptmduedate5(['foo', 'bar']); // WHERE AptmDueDate5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmduedate5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmduedate5($aptmduedate5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmduedate5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDUEDATE5, $aptmduedate5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmPlusYear5 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmplusyear5('fooValue');   // WHERE AptmPlusYear5 = 'fooValue'
     * $query->filterByAptmplusyear5('%fooValue%', Criteria::LIKE); // WHERE AptmPlusYear5 LIKE '%fooValue%'
     * $query->filterByAptmplusyear5(['foo', 'bar']); // WHERE AptmPlusYear5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptmplusyear5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmplusyear5($aptmplusyear5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptmplusyear5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMPLUSYEAR5, $aptmplusyear5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayFrom1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdayfrom1(1234); // WHERE AptmDayFrom1 = 1234
     * $query->filterByAptmdayfrom1(array(12, 34)); // WHERE AptmDayFrom1 IN (12, 34)
     * $query->filterByAptmdayfrom1(array('min' => 12)); // WHERE AptmDayFrom1 > 12
     * </code>
     *
     * @param mixed $aptmdayfrom1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdayfrom1($aptmdayfrom1 = null, ?string $comparison = null)
    {
        if (is_array($aptmdayfrom1)) {
            $useMinMax = false;
            if (isset($aptmdayfrom1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM1, $aptmdayfrom1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdayfrom1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM1, $aptmdayfrom1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM1, $aptmdayfrom1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayThru1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdaythru1(1234); // WHERE AptmDayThru1 = 1234
     * $query->filterByAptmdaythru1(array(12, 34)); // WHERE AptmDayThru1 IN (12, 34)
     * $query->filterByAptmdaythru1(array('min' => 12)); // WHERE AptmDayThru1 > 12
     * </code>
     *
     * @param mixed $aptmdaythru1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdaythru1($aptmdaythru1 = null, ?string $comparison = null)
    {
        if (is_array($aptmdaythru1)) {
            $useMinMax = false;
            if (isset($aptmdaythru1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU1, $aptmdaythru1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdaythru1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU1, $aptmdaythru1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU1, $aptmdaythru1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscPct1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscpct1(1234); // WHERE AptmEomDiscPct1 = 1234
     * $query->filterByAptmeomdiscpct1(array(12, 34)); // WHERE AptmEomDiscPct1 IN (12, 34)
     * $query->filterByAptmeomdiscpct1(array('min' => 12)); // WHERE AptmEomDiscPct1 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscpct1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscpct1($aptmeomdiscpct1 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscpct1)) {
            $useMinMax = false;
            if (isset($aptmeomdiscpct1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1, $aptmeomdiscpct1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscpct1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1, $aptmeomdiscpct1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT1, $aptmeomdiscpct1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscday1(1234); // WHERE AptmEomDiscDay1 = 1234
     * $query->filterByAptmeomdiscday1(array(12, 34)); // WHERE AptmEomDiscDay1 IN (12, 34)
     * $query->filterByAptmeomdiscday1(array('min' => 12)); // WHERE AptmEomDiscDay1 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscday1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscday1($aptmeomdiscday1 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscday1)) {
            $useMinMax = false;
            if (isset($aptmeomdiscday1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1, $aptmeomdiscday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscday1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1, $aptmeomdiscday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY1, $aptmeomdiscday1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscmonths1(1234); // WHERE AptmEomDiscMonths1 = 1234
     * $query->filterByAptmeomdiscmonths1(array(12, 34)); // WHERE AptmEomDiscMonths1 IN (12, 34)
     * $query->filterByAptmeomdiscmonths1(array('min' => 12)); // WHERE AptmEomDiscMonths1 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscmonths1($aptmeomdiscmonths1 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscmonths1)) {
            $useMinMax = false;
            if (isset($aptmeomdiscmonths1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1, $aptmeomdiscmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscmonths1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1, $aptmeomdiscmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS1, $aptmeomdiscmonths1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDueDay1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdueday1(1234); // WHERE AptmEomDueDay1 = 1234
     * $query->filterByAptmeomdueday1(array(12, 34)); // WHERE AptmEomDueDay1 IN (12, 34)
     * $query->filterByAptmeomdueday1(array('min' => 12)); // WHERE AptmEomDueDay1 > 12
     * </code>
     *
     * @param mixed $aptmeomdueday1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdueday1($aptmeomdueday1 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdueday1)) {
            $useMinMax = false;
            if (isset($aptmeomdueday1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1, $aptmeomdueday1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdueday1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1, $aptmeomdueday1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY1, $aptmeomdueday1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomPlusMonths1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomplusmonths1(1234); // WHERE AptmEomPlusMonths1 = 1234
     * $query->filterByAptmeomplusmonths1(array(12, 34)); // WHERE AptmEomPlusMonths1 IN (12, 34)
     * $query->filterByAptmeomplusmonths1(array('min' => 12)); // WHERE AptmEomPlusMonths1 > 12
     * </code>
     *
     * @param mixed $aptmeomplusmonths1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomplusmonths1($aptmeomplusmonths1 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomplusmonths1)) {
            $useMinMax = false;
            if (isset($aptmeomplusmonths1['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1, $aptmeomplusmonths1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomplusmonths1['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1, $aptmeomplusmonths1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS1, $aptmeomplusmonths1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayFrom2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdayfrom2(1234); // WHERE AptmDayFrom2 = 1234
     * $query->filterByAptmdayfrom2(array(12, 34)); // WHERE AptmDayFrom2 IN (12, 34)
     * $query->filterByAptmdayfrom2(array('min' => 12)); // WHERE AptmDayFrom2 > 12
     * </code>
     *
     * @param mixed $aptmdayfrom2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdayfrom2($aptmdayfrom2 = null, ?string $comparison = null)
    {
        if (is_array($aptmdayfrom2)) {
            $useMinMax = false;
            if (isset($aptmdayfrom2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM2, $aptmdayfrom2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdayfrom2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM2, $aptmdayfrom2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM2, $aptmdayfrom2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayThru2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdaythru2(1234); // WHERE AptmDayThru2 = 1234
     * $query->filterByAptmdaythru2(array(12, 34)); // WHERE AptmDayThru2 IN (12, 34)
     * $query->filterByAptmdaythru2(array('min' => 12)); // WHERE AptmDayThru2 > 12
     * </code>
     *
     * @param mixed $aptmdaythru2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdaythru2($aptmdaythru2 = null, ?string $comparison = null)
    {
        if (is_array($aptmdaythru2)) {
            $useMinMax = false;
            if (isset($aptmdaythru2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU2, $aptmdaythru2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdaythru2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU2, $aptmdaythru2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU2, $aptmdaythru2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscPct2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscpct2(1234); // WHERE AptmEomDiscPct2 = 1234
     * $query->filterByAptmeomdiscpct2(array(12, 34)); // WHERE AptmEomDiscPct2 IN (12, 34)
     * $query->filterByAptmeomdiscpct2(array('min' => 12)); // WHERE AptmEomDiscPct2 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscpct2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscpct2($aptmeomdiscpct2 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscpct2)) {
            $useMinMax = false;
            if (isset($aptmeomdiscpct2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2, $aptmeomdiscpct2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscpct2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2, $aptmeomdiscpct2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT2, $aptmeomdiscpct2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscday2(1234); // WHERE AptmEomDiscDay2 = 1234
     * $query->filterByAptmeomdiscday2(array(12, 34)); // WHERE AptmEomDiscDay2 IN (12, 34)
     * $query->filterByAptmeomdiscday2(array('min' => 12)); // WHERE AptmEomDiscDay2 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscday2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscday2($aptmeomdiscday2 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscday2)) {
            $useMinMax = false;
            if (isset($aptmeomdiscday2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2, $aptmeomdiscday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscday2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2, $aptmeomdiscday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY2, $aptmeomdiscday2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscmonths2(1234); // WHERE AptmEomDiscMonths2 = 1234
     * $query->filterByAptmeomdiscmonths2(array(12, 34)); // WHERE AptmEomDiscMonths2 IN (12, 34)
     * $query->filterByAptmeomdiscmonths2(array('min' => 12)); // WHERE AptmEomDiscMonths2 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscmonths2($aptmeomdiscmonths2 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscmonths2)) {
            $useMinMax = false;
            if (isset($aptmeomdiscmonths2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2, $aptmeomdiscmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscmonths2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2, $aptmeomdiscmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS2, $aptmeomdiscmonths2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDueDay2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdueday2(1234); // WHERE AptmEomDueDay2 = 1234
     * $query->filterByAptmeomdueday2(array(12, 34)); // WHERE AptmEomDueDay2 IN (12, 34)
     * $query->filterByAptmeomdueday2(array('min' => 12)); // WHERE AptmEomDueDay2 > 12
     * </code>
     *
     * @param mixed $aptmeomdueday2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdueday2($aptmeomdueday2 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdueday2)) {
            $useMinMax = false;
            if (isset($aptmeomdueday2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2, $aptmeomdueday2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdueday2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2, $aptmeomdueday2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY2, $aptmeomdueday2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomPlusMonths2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomplusmonths2(1234); // WHERE AptmEomPlusMonths2 = 1234
     * $query->filterByAptmeomplusmonths2(array(12, 34)); // WHERE AptmEomPlusMonths2 IN (12, 34)
     * $query->filterByAptmeomplusmonths2(array('min' => 12)); // WHERE AptmEomPlusMonths2 > 12
     * </code>
     *
     * @param mixed $aptmeomplusmonths2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomplusmonths2($aptmeomplusmonths2 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomplusmonths2)) {
            $useMinMax = false;
            if (isset($aptmeomplusmonths2['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2, $aptmeomplusmonths2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomplusmonths2['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2, $aptmeomplusmonths2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS2, $aptmeomplusmonths2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayFrom3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdayfrom3(1234); // WHERE AptmDayFrom3 = 1234
     * $query->filterByAptmdayfrom3(array(12, 34)); // WHERE AptmDayFrom3 IN (12, 34)
     * $query->filterByAptmdayfrom3(array('min' => 12)); // WHERE AptmDayFrom3 > 12
     * </code>
     *
     * @param mixed $aptmdayfrom3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdayfrom3($aptmdayfrom3 = null, ?string $comparison = null)
    {
        if (is_array($aptmdayfrom3)) {
            $useMinMax = false;
            if (isset($aptmdayfrom3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM3, $aptmdayfrom3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdayfrom3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM3, $aptmdayfrom3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYFROM3, $aptmdayfrom3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmDayThru3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmdaythru3(1234); // WHERE AptmDayThru3 = 1234
     * $query->filterByAptmdaythru3(array(12, 34)); // WHERE AptmDayThru3 IN (12, 34)
     * $query->filterByAptmdaythru3(array('min' => 12)); // WHERE AptmDayThru3 > 12
     * </code>
     *
     * @param mixed $aptmdaythru3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmdaythru3($aptmdaythru3 = null, ?string $comparison = null)
    {
        if (is_array($aptmdaythru3)) {
            $useMinMax = false;
            if (isset($aptmdaythru3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU3, $aptmdaythru3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmdaythru3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU3, $aptmdaythru3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMDAYTHRU3, $aptmdaythru3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscPct3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscpct3(1234); // WHERE AptmEomDiscPct3 = 1234
     * $query->filterByAptmeomdiscpct3(array(12, 34)); // WHERE AptmEomDiscPct3 IN (12, 34)
     * $query->filterByAptmeomdiscpct3(array('min' => 12)); // WHERE AptmEomDiscPct3 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscpct3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscpct3($aptmeomdiscpct3 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscpct3)) {
            $useMinMax = false;
            if (isset($aptmeomdiscpct3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3, $aptmeomdiscpct3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscpct3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3, $aptmeomdiscpct3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCPCT3, $aptmeomdiscpct3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscday3(1234); // WHERE AptmEomDiscDay3 = 1234
     * $query->filterByAptmeomdiscday3(array(12, 34)); // WHERE AptmEomDiscDay3 IN (12, 34)
     * $query->filterByAptmeomdiscday3(array('min' => 12)); // WHERE AptmEomDiscDay3 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscday3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscday3($aptmeomdiscday3 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscday3)) {
            $useMinMax = false;
            if (isset($aptmeomdiscday3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3, $aptmeomdiscday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscday3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3, $aptmeomdiscday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCDAY3, $aptmeomdiscday3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDiscMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdiscmonths3(1234); // WHERE AptmEomDiscMonths3 = 1234
     * $query->filterByAptmeomdiscmonths3(array(12, 34)); // WHERE AptmEomDiscMonths3 IN (12, 34)
     * $query->filterByAptmeomdiscmonths3(array('min' => 12)); // WHERE AptmEomDiscMonths3 > 12
     * </code>
     *
     * @param mixed $aptmeomdiscmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdiscmonths3($aptmeomdiscmonths3 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdiscmonths3)) {
            $useMinMax = false;
            if (isset($aptmeomdiscmonths3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3, $aptmeomdiscmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdiscmonths3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3, $aptmeomdiscmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDISCMONTHS3, $aptmeomdiscmonths3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomDueDay3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomdueday3(1234); // WHERE AptmEomDueDay3 = 1234
     * $query->filterByAptmeomdueday3(array(12, 34)); // WHERE AptmEomDueDay3 IN (12, 34)
     * $query->filterByAptmeomdueday3(array('min' => 12)); // WHERE AptmEomDueDay3 > 12
     * </code>
     *
     * @param mixed $aptmeomdueday3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomdueday3($aptmeomdueday3 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomdueday3)) {
            $useMinMax = false;
            if (isset($aptmeomdueday3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3, $aptmeomdueday3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomdueday3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3, $aptmeomdueday3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMDUEDAY3, $aptmeomdueday3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptmEomPlusMonths3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAptmeomplusmonths3(1234); // WHERE AptmEomPlusMonths3 = 1234
     * $query->filterByAptmeomplusmonths3(array(12, 34)); // WHERE AptmEomPlusMonths3 IN (12, 34)
     * $query->filterByAptmeomplusmonths3(array('min' => 12)); // WHERE AptmEomPlusMonths3 > 12
     * </code>
     *
     * @param mixed $aptmeomplusmonths3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptmeomplusmonths3($aptmeomplusmonths3 = null, ?string $comparison = null)
    {
        if (is_array($aptmeomplusmonths3)) {
            $useMinMax = false;
            if (isset($aptmeomplusmonths3['min'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3, $aptmeomplusmonths3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aptmeomplusmonths3['max'])) {
                $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3, $aptmeomplusmonths3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMEOMPLUSMONTHS3, $aptmeomplusmonths3, $comparison);

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

        $this->addUsingAlias(ApTermsCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ApTermsCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ApTermsCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            $this
                ->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMCODE, $vendor->getAptmtermcode(), $comparison);

            return $this;
        } elseif ($vendor instanceof ObjectCollection) {
            $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @param callable(\VendorQuery):\VendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Vendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorQuery The inner query object of the EXISTS statement
     */
    public function useVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT EXISTS query.
     *
     * @see useVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Vendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorQuery The inner query object of the IN statement
     */
    public function useInVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT IN query.
     *
     * @see useVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildApTermsCode $apTermsCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($apTermsCode = null)
    {
        if ($apTermsCode) {
            $this->addUsingAlias(ApTermsCodeTableMap::COL_APTMTERMCODE, $apTermsCode->getAptmtermcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_term_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApTermsCodeTableMap::clearInstancePool();
            ApTermsCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApTermsCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApTermsCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApTermsCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApTermsCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
