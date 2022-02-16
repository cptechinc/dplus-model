<?php

namespace Base;

use \GlDates as ChildGlDates;
use \GlDatesQuery as ChildGlDatesQuery;
use \Exception;
use \PDO;
use Map\GlDatesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'gl_dates' table.
 *
 *
 *
 * @method     ChildGlDatesQuery orderByGldkey($order = Criteria::ASC) Order by the GldKey column
 * @method     ChildGlDatesQuery orderByGldfrom1($order = Criteria::ASC) Order by the GldFrom1 column
 * @method     ChildGlDatesQuery orderByGldthru1($order = Criteria::ASC) Order by the GldThru1 column
 * @method     ChildGlDatesQuery orderByGldfrom2($order = Criteria::ASC) Order by the GldFrom2 column
 * @method     ChildGlDatesQuery orderByGldthru2($order = Criteria::ASC) Order by the GldThru2 column
 * @method     ChildGlDatesQuery orderByGldfrom3($order = Criteria::ASC) Order by the GldFrom3 column
 * @method     ChildGlDatesQuery orderByGldthru3($order = Criteria::ASC) Order by the GldThru3 column
 * @method     ChildGlDatesQuery orderByGldfrom4($order = Criteria::ASC) Order by the GldFrom4 column
 * @method     ChildGlDatesQuery orderByGldthru4($order = Criteria::ASC) Order by the GldThru4 column
 * @method     ChildGlDatesQuery orderByGldfrom5($order = Criteria::ASC) Order by the GldFrom5 column
 * @method     ChildGlDatesQuery orderByGldthru5($order = Criteria::ASC) Order by the GldThru5 column
 * @method     ChildGlDatesQuery orderByGldfrom6($order = Criteria::ASC) Order by the GldFrom6 column
 * @method     ChildGlDatesQuery orderByGldthru6($order = Criteria::ASC) Order by the GldThru6 column
 * @method     ChildGlDatesQuery orderByGldfrom7($order = Criteria::ASC) Order by the GldFrom7 column
 * @method     ChildGlDatesQuery orderByGldthru7($order = Criteria::ASC) Order by the GldThru7 column
 * @method     ChildGlDatesQuery orderByGldfrom8($order = Criteria::ASC) Order by the GldFrom8 column
 * @method     ChildGlDatesQuery orderByGldthru8($order = Criteria::ASC) Order by the GldThru8 column
 * @method     ChildGlDatesQuery orderByGldfrom9($order = Criteria::ASC) Order by the GldFrom9 column
 * @method     ChildGlDatesQuery orderByGldthru9($order = Criteria::ASC) Order by the GldThru9 column
 * @method     ChildGlDatesQuery orderByGldfrom10($order = Criteria::ASC) Order by the GldFrom10 column
 * @method     ChildGlDatesQuery orderByGldthru10($order = Criteria::ASC) Order by the GldThru10 column
 * @method     ChildGlDatesQuery orderByGldfrom11($order = Criteria::ASC) Order by the GldFrom11 column
 * @method     ChildGlDatesQuery orderByGldthru11($order = Criteria::ASC) Order by the GldThru11 column
 * @method     ChildGlDatesQuery orderByGldfrom12($order = Criteria::ASC) Order by the GldFrom12 column
 * @method     ChildGlDatesQuery orderByGldthru12($order = Criteria::ASC) Order by the GldThru12 column
 * @method     ChildGlDatesQuery orderByGldfrom13($order = Criteria::ASC) Order by the GldFrom13 column
 * @method     ChildGlDatesQuery orderByGldthru13($order = Criteria::ASC) Order by the GldThru13 column
 * @method     ChildGlDatesQuery orderByGldfrom14($order = Criteria::ASC) Order by the GldFrom14 column
 * @method     ChildGlDatesQuery orderByGldthru14($order = Criteria::ASC) Order by the GldThru14 column
 * @method     ChildGlDatesQuery orderByGldfrom15($order = Criteria::ASC) Order by the GldFrom15 column
 * @method     ChildGlDatesQuery orderByGldthru15($order = Criteria::ASC) Order by the GldThru15 column
 * @method     ChildGlDatesQuery orderByGldfrom16($order = Criteria::ASC) Order by the GldFrom16 column
 * @method     ChildGlDatesQuery orderByGldthru16($order = Criteria::ASC) Order by the GldThru16 column
 * @method     ChildGlDatesQuery orderByGldfrom17($order = Criteria::ASC) Order by the GldFrom17 column
 * @method     ChildGlDatesQuery orderByGldthru17($order = Criteria::ASC) Order by the GldThru17 column
 * @method     ChildGlDatesQuery orderByGldfrom18($order = Criteria::ASC) Order by the GldFrom18 column
 * @method     ChildGlDatesQuery orderByGldthru18($order = Criteria::ASC) Order by the GldThru18 column
 * @method     ChildGlDatesQuery orderByGldfrom19($order = Criteria::ASC) Order by the GldFrom19 column
 * @method     ChildGlDatesQuery orderByGldthru19($order = Criteria::ASC) Order by the GldThru19 column
 * @method     ChildGlDatesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildGlDatesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildGlDatesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildGlDatesQuery groupByGldkey() Group by the GldKey column
 * @method     ChildGlDatesQuery groupByGldfrom1() Group by the GldFrom1 column
 * @method     ChildGlDatesQuery groupByGldthru1() Group by the GldThru1 column
 * @method     ChildGlDatesQuery groupByGldfrom2() Group by the GldFrom2 column
 * @method     ChildGlDatesQuery groupByGldthru2() Group by the GldThru2 column
 * @method     ChildGlDatesQuery groupByGldfrom3() Group by the GldFrom3 column
 * @method     ChildGlDatesQuery groupByGldthru3() Group by the GldThru3 column
 * @method     ChildGlDatesQuery groupByGldfrom4() Group by the GldFrom4 column
 * @method     ChildGlDatesQuery groupByGldthru4() Group by the GldThru4 column
 * @method     ChildGlDatesQuery groupByGldfrom5() Group by the GldFrom5 column
 * @method     ChildGlDatesQuery groupByGldthru5() Group by the GldThru5 column
 * @method     ChildGlDatesQuery groupByGldfrom6() Group by the GldFrom6 column
 * @method     ChildGlDatesQuery groupByGldthru6() Group by the GldThru6 column
 * @method     ChildGlDatesQuery groupByGldfrom7() Group by the GldFrom7 column
 * @method     ChildGlDatesQuery groupByGldthru7() Group by the GldThru7 column
 * @method     ChildGlDatesQuery groupByGldfrom8() Group by the GldFrom8 column
 * @method     ChildGlDatesQuery groupByGldthru8() Group by the GldThru8 column
 * @method     ChildGlDatesQuery groupByGldfrom9() Group by the GldFrom9 column
 * @method     ChildGlDatesQuery groupByGldthru9() Group by the GldThru9 column
 * @method     ChildGlDatesQuery groupByGldfrom10() Group by the GldFrom10 column
 * @method     ChildGlDatesQuery groupByGldthru10() Group by the GldThru10 column
 * @method     ChildGlDatesQuery groupByGldfrom11() Group by the GldFrom11 column
 * @method     ChildGlDatesQuery groupByGldthru11() Group by the GldThru11 column
 * @method     ChildGlDatesQuery groupByGldfrom12() Group by the GldFrom12 column
 * @method     ChildGlDatesQuery groupByGldthru12() Group by the GldThru12 column
 * @method     ChildGlDatesQuery groupByGldfrom13() Group by the GldFrom13 column
 * @method     ChildGlDatesQuery groupByGldthru13() Group by the GldThru13 column
 * @method     ChildGlDatesQuery groupByGldfrom14() Group by the GldFrom14 column
 * @method     ChildGlDatesQuery groupByGldthru14() Group by the GldThru14 column
 * @method     ChildGlDatesQuery groupByGldfrom15() Group by the GldFrom15 column
 * @method     ChildGlDatesQuery groupByGldthru15() Group by the GldThru15 column
 * @method     ChildGlDatesQuery groupByGldfrom16() Group by the GldFrom16 column
 * @method     ChildGlDatesQuery groupByGldthru16() Group by the GldThru16 column
 * @method     ChildGlDatesQuery groupByGldfrom17() Group by the GldFrom17 column
 * @method     ChildGlDatesQuery groupByGldthru17() Group by the GldThru17 column
 * @method     ChildGlDatesQuery groupByGldfrom18() Group by the GldFrom18 column
 * @method     ChildGlDatesQuery groupByGldthru18() Group by the GldThru18 column
 * @method     ChildGlDatesQuery groupByGldfrom19() Group by the GldFrom19 column
 * @method     ChildGlDatesQuery groupByGldthru19() Group by the GldThru19 column
 * @method     ChildGlDatesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildGlDatesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildGlDatesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildGlDatesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildGlDatesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildGlDatesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildGlDatesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildGlDatesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildGlDatesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildGlDates findOne(ConnectionInterface $con = null) Return the first ChildGlDates matching the query
 * @method     ChildGlDates findOneOrCreate(ConnectionInterface $con = null) Return the first ChildGlDates matching the query, or a new ChildGlDates object populated from the query conditions when no match is found
 *
 * @method     ChildGlDates findOneByGldkey(string $GldKey) Return the first ChildGlDates filtered by the GldKey column
 * @method     ChildGlDates findOneByGldfrom1(string $GldFrom1) Return the first ChildGlDates filtered by the GldFrom1 column
 * @method     ChildGlDates findOneByGldthru1(string $GldThru1) Return the first ChildGlDates filtered by the GldThru1 column
 * @method     ChildGlDates findOneByGldfrom2(string $GldFrom2) Return the first ChildGlDates filtered by the GldFrom2 column
 * @method     ChildGlDates findOneByGldthru2(string $GldThru2) Return the first ChildGlDates filtered by the GldThru2 column
 * @method     ChildGlDates findOneByGldfrom3(string $GldFrom3) Return the first ChildGlDates filtered by the GldFrom3 column
 * @method     ChildGlDates findOneByGldthru3(string $GldThru3) Return the first ChildGlDates filtered by the GldThru3 column
 * @method     ChildGlDates findOneByGldfrom4(string $GldFrom4) Return the first ChildGlDates filtered by the GldFrom4 column
 * @method     ChildGlDates findOneByGldthru4(string $GldThru4) Return the first ChildGlDates filtered by the GldThru4 column
 * @method     ChildGlDates findOneByGldfrom5(string $GldFrom5) Return the first ChildGlDates filtered by the GldFrom5 column
 * @method     ChildGlDates findOneByGldthru5(string $GldThru5) Return the first ChildGlDates filtered by the GldThru5 column
 * @method     ChildGlDates findOneByGldfrom6(string $GldFrom6) Return the first ChildGlDates filtered by the GldFrom6 column
 * @method     ChildGlDates findOneByGldthru6(string $GldThru6) Return the first ChildGlDates filtered by the GldThru6 column
 * @method     ChildGlDates findOneByGldfrom7(string $GldFrom7) Return the first ChildGlDates filtered by the GldFrom7 column
 * @method     ChildGlDates findOneByGldthru7(string $GldThru7) Return the first ChildGlDates filtered by the GldThru7 column
 * @method     ChildGlDates findOneByGldfrom8(string $GldFrom8) Return the first ChildGlDates filtered by the GldFrom8 column
 * @method     ChildGlDates findOneByGldthru8(string $GldThru8) Return the first ChildGlDates filtered by the GldThru8 column
 * @method     ChildGlDates findOneByGldfrom9(string $GldFrom9) Return the first ChildGlDates filtered by the GldFrom9 column
 * @method     ChildGlDates findOneByGldthru9(string $GldThru9) Return the first ChildGlDates filtered by the GldThru9 column
 * @method     ChildGlDates findOneByGldfrom10(string $GldFrom10) Return the first ChildGlDates filtered by the GldFrom10 column
 * @method     ChildGlDates findOneByGldthru10(string $GldThru10) Return the first ChildGlDates filtered by the GldThru10 column
 * @method     ChildGlDates findOneByGldfrom11(string $GldFrom11) Return the first ChildGlDates filtered by the GldFrom11 column
 * @method     ChildGlDates findOneByGldthru11(string $GldThru11) Return the first ChildGlDates filtered by the GldThru11 column
 * @method     ChildGlDates findOneByGldfrom12(string $GldFrom12) Return the first ChildGlDates filtered by the GldFrom12 column
 * @method     ChildGlDates findOneByGldthru12(string $GldThru12) Return the first ChildGlDates filtered by the GldThru12 column
 * @method     ChildGlDates findOneByGldfrom13(string $GldFrom13) Return the first ChildGlDates filtered by the GldFrom13 column
 * @method     ChildGlDates findOneByGldthru13(string $GldThru13) Return the first ChildGlDates filtered by the GldThru13 column
 * @method     ChildGlDates findOneByGldfrom14(string $GldFrom14) Return the first ChildGlDates filtered by the GldFrom14 column
 * @method     ChildGlDates findOneByGldthru14(string $GldThru14) Return the first ChildGlDates filtered by the GldThru14 column
 * @method     ChildGlDates findOneByGldfrom15(string $GldFrom15) Return the first ChildGlDates filtered by the GldFrom15 column
 * @method     ChildGlDates findOneByGldthru15(string $GldThru15) Return the first ChildGlDates filtered by the GldThru15 column
 * @method     ChildGlDates findOneByGldfrom16(string $GldFrom16) Return the first ChildGlDates filtered by the GldFrom16 column
 * @method     ChildGlDates findOneByGldthru16(string $GldThru16) Return the first ChildGlDates filtered by the GldThru16 column
 * @method     ChildGlDates findOneByGldfrom17(string $GldFrom17) Return the first ChildGlDates filtered by the GldFrom17 column
 * @method     ChildGlDates findOneByGldthru17(string $GldThru17) Return the first ChildGlDates filtered by the GldThru17 column
 * @method     ChildGlDates findOneByGldfrom18(string $GldFrom18) Return the first ChildGlDates filtered by the GldFrom18 column
 * @method     ChildGlDates findOneByGldthru18(string $GldThru18) Return the first ChildGlDates filtered by the GldThru18 column
 * @method     ChildGlDates findOneByGldfrom19(string $GldFrom19) Return the first ChildGlDates filtered by the GldFrom19 column
 * @method     ChildGlDates findOneByGldthru19(string $GldThru19) Return the first ChildGlDates filtered by the GldThru19 column
 * @method     ChildGlDates findOneByDateupdtd(string $DateUpdtd) Return the first ChildGlDates filtered by the DateUpdtd column
 * @method     ChildGlDates findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlDates filtered by the TimeUpdtd column
 * @method     ChildGlDates findOneByDummy(string $dummy) Return the first ChildGlDates filtered by the dummy column *

 * @method     ChildGlDates requirePk($key, ConnectionInterface $con = null) Return the ChildGlDates by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOne(ConnectionInterface $con = null) Return the first ChildGlDates matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlDates requireOneByGldkey(string $GldKey) Return the first ChildGlDates filtered by the GldKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom1(string $GldFrom1) Return the first ChildGlDates filtered by the GldFrom1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru1(string $GldThru1) Return the first ChildGlDates filtered by the GldThru1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom2(string $GldFrom2) Return the first ChildGlDates filtered by the GldFrom2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru2(string $GldThru2) Return the first ChildGlDates filtered by the GldThru2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom3(string $GldFrom3) Return the first ChildGlDates filtered by the GldFrom3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru3(string $GldThru3) Return the first ChildGlDates filtered by the GldThru3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom4(string $GldFrom4) Return the first ChildGlDates filtered by the GldFrom4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru4(string $GldThru4) Return the first ChildGlDates filtered by the GldThru4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom5(string $GldFrom5) Return the first ChildGlDates filtered by the GldFrom5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru5(string $GldThru5) Return the first ChildGlDates filtered by the GldThru5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom6(string $GldFrom6) Return the first ChildGlDates filtered by the GldFrom6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru6(string $GldThru6) Return the first ChildGlDates filtered by the GldThru6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom7(string $GldFrom7) Return the first ChildGlDates filtered by the GldFrom7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru7(string $GldThru7) Return the first ChildGlDates filtered by the GldThru7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom8(string $GldFrom8) Return the first ChildGlDates filtered by the GldFrom8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru8(string $GldThru8) Return the first ChildGlDates filtered by the GldThru8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom9(string $GldFrom9) Return the first ChildGlDates filtered by the GldFrom9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru9(string $GldThru9) Return the first ChildGlDates filtered by the GldThru9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom10(string $GldFrom10) Return the first ChildGlDates filtered by the GldFrom10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru10(string $GldThru10) Return the first ChildGlDates filtered by the GldThru10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom11(string $GldFrom11) Return the first ChildGlDates filtered by the GldFrom11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru11(string $GldThru11) Return the first ChildGlDates filtered by the GldThru11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom12(string $GldFrom12) Return the first ChildGlDates filtered by the GldFrom12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru12(string $GldThru12) Return the first ChildGlDates filtered by the GldThru12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom13(string $GldFrom13) Return the first ChildGlDates filtered by the GldFrom13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru13(string $GldThru13) Return the first ChildGlDates filtered by the GldThru13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom14(string $GldFrom14) Return the first ChildGlDates filtered by the GldFrom14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru14(string $GldThru14) Return the first ChildGlDates filtered by the GldThru14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom15(string $GldFrom15) Return the first ChildGlDates filtered by the GldFrom15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru15(string $GldThru15) Return the first ChildGlDates filtered by the GldThru15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom16(string $GldFrom16) Return the first ChildGlDates filtered by the GldFrom16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru16(string $GldThru16) Return the first ChildGlDates filtered by the GldThru16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom17(string $GldFrom17) Return the first ChildGlDates filtered by the GldFrom17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru17(string $GldThru17) Return the first ChildGlDates filtered by the GldThru17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom18(string $GldFrom18) Return the first ChildGlDates filtered by the GldFrom18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru18(string $GldThru18) Return the first ChildGlDates filtered by the GldThru18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldfrom19(string $GldFrom19) Return the first ChildGlDates filtered by the GldFrom19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByGldthru19(string $GldThru19) Return the first ChildGlDates filtered by the GldThru19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByDateupdtd(string $DateUpdtd) Return the first ChildGlDates filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlDates filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDates requireOneByDummy(string $dummy) Return the first ChildGlDates filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlDates[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildGlDates objects based on current ModelCriteria
 * @method     ChildGlDates[]|ObjectCollection findByGldkey(string $GldKey) Return ChildGlDates objects filtered by the GldKey column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom1(string $GldFrom1) Return ChildGlDates objects filtered by the GldFrom1 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru1(string $GldThru1) Return ChildGlDates objects filtered by the GldThru1 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom2(string $GldFrom2) Return ChildGlDates objects filtered by the GldFrom2 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru2(string $GldThru2) Return ChildGlDates objects filtered by the GldThru2 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom3(string $GldFrom3) Return ChildGlDates objects filtered by the GldFrom3 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru3(string $GldThru3) Return ChildGlDates objects filtered by the GldThru3 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom4(string $GldFrom4) Return ChildGlDates objects filtered by the GldFrom4 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru4(string $GldThru4) Return ChildGlDates objects filtered by the GldThru4 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom5(string $GldFrom5) Return ChildGlDates objects filtered by the GldFrom5 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru5(string $GldThru5) Return ChildGlDates objects filtered by the GldThru5 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom6(string $GldFrom6) Return ChildGlDates objects filtered by the GldFrom6 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru6(string $GldThru6) Return ChildGlDates objects filtered by the GldThru6 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom7(string $GldFrom7) Return ChildGlDates objects filtered by the GldFrom7 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru7(string $GldThru7) Return ChildGlDates objects filtered by the GldThru7 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom8(string $GldFrom8) Return ChildGlDates objects filtered by the GldFrom8 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru8(string $GldThru8) Return ChildGlDates objects filtered by the GldThru8 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom9(string $GldFrom9) Return ChildGlDates objects filtered by the GldFrom9 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru9(string $GldThru9) Return ChildGlDates objects filtered by the GldThru9 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom10(string $GldFrom10) Return ChildGlDates objects filtered by the GldFrom10 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru10(string $GldThru10) Return ChildGlDates objects filtered by the GldThru10 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom11(string $GldFrom11) Return ChildGlDates objects filtered by the GldFrom11 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru11(string $GldThru11) Return ChildGlDates objects filtered by the GldThru11 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom12(string $GldFrom12) Return ChildGlDates objects filtered by the GldFrom12 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru12(string $GldThru12) Return ChildGlDates objects filtered by the GldThru12 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom13(string $GldFrom13) Return ChildGlDates objects filtered by the GldFrom13 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru13(string $GldThru13) Return ChildGlDates objects filtered by the GldThru13 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom14(string $GldFrom14) Return ChildGlDates objects filtered by the GldFrom14 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru14(string $GldThru14) Return ChildGlDates objects filtered by the GldThru14 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom15(string $GldFrom15) Return ChildGlDates objects filtered by the GldFrom15 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru15(string $GldThru15) Return ChildGlDates objects filtered by the GldThru15 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom16(string $GldFrom16) Return ChildGlDates objects filtered by the GldFrom16 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru16(string $GldThru16) Return ChildGlDates objects filtered by the GldThru16 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom17(string $GldFrom17) Return ChildGlDates objects filtered by the GldFrom17 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru17(string $GldThru17) Return ChildGlDates objects filtered by the GldThru17 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom18(string $GldFrom18) Return ChildGlDates objects filtered by the GldFrom18 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru18(string $GldThru18) Return ChildGlDates objects filtered by the GldThru18 column
 * @method     ChildGlDates[]|ObjectCollection findByGldfrom19(string $GldFrom19) Return ChildGlDates objects filtered by the GldFrom19 column
 * @method     ChildGlDates[]|ObjectCollection findByGldthru19(string $GldThru19) Return ChildGlDates objects filtered by the GldThru19 column
 * @method     ChildGlDates[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildGlDates objects filtered by the DateUpdtd column
 * @method     ChildGlDates[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildGlDates objects filtered by the TimeUpdtd column
 * @method     ChildGlDates[]|ObjectCollection findByDummy(string $dummy) Return ChildGlDates objects filtered by the dummy column
 * @method     ChildGlDates[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class GlDatesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\GlDatesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\GlDates', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildGlDatesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildGlDatesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildGlDatesQuery) {
            return $criteria;
        }
        $query = new ChildGlDatesQuery();
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
     * @return ChildGlDates|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(GlDatesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = GlDatesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildGlDates A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GldKey, GldFrom1, GldThru1, GldFrom2, GldThru2, GldFrom3, GldThru3, GldFrom4, GldThru4, GldFrom5, GldThru5, GldFrom6, GldThru6, GldFrom7, GldThru7, GldFrom8, GldThru8, GldFrom9, GldThru9, GldFrom10, GldThru10, GldFrom11, GldThru11, GldFrom12, GldThru12, GldFrom13, GldThru13, GldFrom14, GldThru14, GldFrom15, GldThru15, GldFrom16, GldThru16, GldFrom17, GldThru17, GldFrom18, GldThru18, GldFrom19, GldThru19, DateUpdtd, TimeUpdtd, dummy FROM gl_dates WHERE GldKey = :p0';
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
            /** @var ChildGlDates $obj */
            $obj = new ChildGlDates();
            $obj->hydrate($row);
            GlDatesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildGlDates|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GldKey column
     *
     * Example usage:
     * <code>
     * $query->filterByGldkey('fooValue');   // WHERE GldKey = 'fooValue'
     * $query->filterByGldkey('%fooValue%', Criteria::LIKE); // WHERE GldKey LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldkey The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldkey($gldkey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldkey)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDKEY, $gldkey, $comparison);
    }

    /**
     * Filter the query on the GldFrom1 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom1('fooValue');   // WHERE GldFrom1 = 'fooValue'
     * $query->filterByGldfrom1('%fooValue%', Criteria::LIKE); // WHERE GldFrom1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom1($gldfrom1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM1, $gldfrom1, $comparison);
    }

    /**
     * Filter the query on the GldThru1 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru1('fooValue');   // WHERE GldThru1 = 'fooValue'
     * $query->filterByGldthru1('%fooValue%', Criteria::LIKE); // WHERE GldThru1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru1($gldthru1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU1, $gldthru1, $comparison);
    }

    /**
     * Filter the query on the GldFrom2 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom2('fooValue');   // WHERE GldFrom2 = 'fooValue'
     * $query->filterByGldfrom2('%fooValue%', Criteria::LIKE); // WHERE GldFrom2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom2($gldfrom2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM2, $gldfrom2, $comparison);
    }

    /**
     * Filter the query on the GldThru2 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru2('fooValue');   // WHERE GldThru2 = 'fooValue'
     * $query->filterByGldthru2('%fooValue%', Criteria::LIKE); // WHERE GldThru2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru2($gldthru2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU2, $gldthru2, $comparison);
    }

    /**
     * Filter the query on the GldFrom3 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom3('fooValue');   // WHERE GldFrom3 = 'fooValue'
     * $query->filterByGldfrom3('%fooValue%', Criteria::LIKE); // WHERE GldFrom3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom3($gldfrom3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM3, $gldfrom3, $comparison);
    }

    /**
     * Filter the query on the GldThru3 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru3('fooValue');   // WHERE GldThru3 = 'fooValue'
     * $query->filterByGldthru3('%fooValue%', Criteria::LIKE); // WHERE GldThru3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru3($gldthru3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU3, $gldthru3, $comparison);
    }

    /**
     * Filter the query on the GldFrom4 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom4('fooValue');   // WHERE GldFrom4 = 'fooValue'
     * $query->filterByGldfrom4('%fooValue%', Criteria::LIKE); // WHERE GldFrom4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom4($gldfrom4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM4, $gldfrom4, $comparison);
    }

    /**
     * Filter the query on the GldThru4 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru4('fooValue');   // WHERE GldThru4 = 'fooValue'
     * $query->filterByGldthru4('%fooValue%', Criteria::LIKE); // WHERE GldThru4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru4($gldthru4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU4, $gldthru4, $comparison);
    }

    /**
     * Filter the query on the GldFrom5 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom5('fooValue');   // WHERE GldFrom5 = 'fooValue'
     * $query->filterByGldfrom5('%fooValue%', Criteria::LIKE); // WHERE GldFrom5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom5($gldfrom5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM5, $gldfrom5, $comparison);
    }

    /**
     * Filter the query on the GldThru5 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru5('fooValue');   // WHERE GldThru5 = 'fooValue'
     * $query->filterByGldthru5('%fooValue%', Criteria::LIKE); // WHERE GldThru5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru5($gldthru5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU5, $gldthru5, $comparison);
    }

    /**
     * Filter the query on the GldFrom6 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom6('fooValue');   // WHERE GldFrom6 = 'fooValue'
     * $query->filterByGldfrom6('%fooValue%', Criteria::LIKE); // WHERE GldFrom6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom6($gldfrom6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM6, $gldfrom6, $comparison);
    }

    /**
     * Filter the query on the GldThru6 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru6('fooValue');   // WHERE GldThru6 = 'fooValue'
     * $query->filterByGldthru6('%fooValue%', Criteria::LIKE); // WHERE GldThru6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru6($gldthru6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU6, $gldthru6, $comparison);
    }

    /**
     * Filter the query on the GldFrom7 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom7('fooValue');   // WHERE GldFrom7 = 'fooValue'
     * $query->filterByGldfrom7('%fooValue%', Criteria::LIKE); // WHERE GldFrom7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom7($gldfrom7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM7, $gldfrom7, $comparison);
    }

    /**
     * Filter the query on the GldThru7 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru7('fooValue');   // WHERE GldThru7 = 'fooValue'
     * $query->filterByGldthru7('%fooValue%', Criteria::LIKE); // WHERE GldThru7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru7($gldthru7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU7, $gldthru7, $comparison);
    }

    /**
     * Filter the query on the GldFrom8 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom8('fooValue');   // WHERE GldFrom8 = 'fooValue'
     * $query->filterByGldfrom8('%fooValue%', Criteria::LIKE); // WHERE GldFrom8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom8($gldfrom8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM8, $gldfrom8, $comparison);
    }

    /**
     * Filter the query on the GldThru8 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru8('fooValue');   // WHERE GldThru8 = 'fooValue'
     * $query->filterByGldthru8('%fooValue%', Criteria::LIKE); // WHERE GldThru8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru8($gldthru8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU8, $gldthru8, $comparison);
    }

    /**
     * Filter the query on the GldFrom9 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom9('fooValue');   // WHERE GldFrom9 = 'fooValue'
     * $query->filterByGldfrom9('%fooValue%', Criteria::LIKE); // WHERE GldFrom9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom9($gldfrom9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM9, $gldfrom9, $comparison);
    }

    /**
     * Filter the query on the GldThru9 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru9('fooValue');   // WHERE GldThru9 = 'fooValue'
     * $query->filterByGldthru9('%fooValue%', Criteria::LIKE); // WHERE GldThru9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru9($gldthru9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU9, $gldthru9, $comparison);
    }

    /**
     * Filter the query on the GldFrom10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom10('fooValue');   // WHERE GldFrom10 = 'fooValue'
     * $query->filterByGldfrom10('%fooValue%', Criteria::LIKE); // WHERE GldFrom10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom10($gldfrom10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM10, $gldfrom10, $comparison);
    }

    /**
     * Filter the query on the GldThru10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru10('fooValue');   // WHERE GldThru10 = 'fooValue'
     * $query->filterByGldthru10('%fooValue%', Criteria::LIKE); // WHERE GldThru10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru10($gldthru10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU10, $gldthru10, $comparison);
    }

    /**
     * Filter the query on the GldFrom11 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom11('fooValue');   // WHERE GldFrom11 = 'fooValue'
     * $query->filterByGldfrom11('%fooValue%', Criteria::LIKE); // WHERE GldFrom11 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom11 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom11($gldfrom11 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom11)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM11, $gldfrom11, $comparison);
    }

    /**
     * Filter the query on the GldThru11 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru11('fooValue');   // WHERE GldThru11 = 'fooValue'
     * $query->filterByGldthru11('%fooValue%', Criteria::LIKE); // WHERE GldThru11 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru11 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru11($gldthru11 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru11)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU11, $gldthru11, $comparison);
    }

    /**
     * Filter the query on the GldFrom12 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom12('fooValue');   // WHERE GldFrom12 = 'fooValue'
     * $query->filterByGldfrom12('%fooValue%', Criteria::LIKE); // WHERE GldFrom12 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom12 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom12($gldfrom12 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom12)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM12, $gldfrom12, $comparison);
    }

    /**
     * Filter the query on the GldThru12 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru12('fooValue');   // WHERE GldThru12 = 'fooValue'
     * $query->filterByGldthru12('%fooValue%', Criteria::LIKE); // WHERE GldThru12 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru12 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru12($gldthru12 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru12)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU12, $gldthru12, $comparison);
    }

    /**
     * Filter the query on the GldFrom13 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom13('fooValue');   // WHERE GldFrom13 = 'fooValue'
     * $query->filterByGldfrom13('%fooValue%', Criteria::LIKE); // WHERE GldFrom13 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom13 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom13($gldfrom13 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom13)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM13, $gldfrom13, $comparison);
    }

    /**
     * Filter the query on the GldThru13 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru13('fooValue');   // WHERE GldThru13 = 'fooValue'
     * $query->filterByGldthru13('%fooValue%', Criteria::LIKE); // WHERE GldThru13 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru13 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru13($gldthru13 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru13)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU13, $gldthru13, $comparison);
    }

    /**
     * Filter the query on the GldFrom14 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom14('fooValue');   // WHERE GldFrom14 = 'fooValue'
     * $query->filterByGldfrom14('%fooValue%', Criteria::LIKE); // WHERE GldFrom14 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom14 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom14($gldfrom14 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom14)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM14, $gldfrom14, $comparison);
    }

    /**
     * Filter the query on the GldThru14 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru14('fooValue');   // WHERE GldThru14 = 'fooValue'
     * $query->filterByGldthru14('%fooValue%', Criteria::LIKE); // WHERE GldThru14 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru14 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru14($gldthru14 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru14)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU14, $gldthru14, $comparison);
    }

    /**
     * Filter the query on the GldFrom15 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom15('fooValue');   // WHERE GldFrom15 = 'fooValue'
     * $query->filterByGldfrom15('%fooValue%', Criteria::LIKE); // WHERE GldFrom15 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom15 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom15($gldfrom15 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom15)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM15, $gldfrom15, $comparison);
    }

    /**
     * Filter the query on the GldThru15 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru15('fooValue');   // WHERE GldThru15 = 'fooValue'
     * $query->filterByGldthru15('%fooValue%', Criteria::LIKE); // WHERE GldThru15 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru15 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru15($gldthru15 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru15)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU15, $gldthru15, $comparison);
    }

    /**
     * Filter the query on the GldFrom16 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom16('fooValue');   // WHERE GldFrom16 = 'fooValue'
     * $query->filterByGldfrom16('%fooValue%', Criteria::LIKE); // WHERE GldFrom16 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom16 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom16($gldfrom16 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom16)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM16, $gldfrom16, $comparison);
    }

    /**
     * Filter the query on the GldThru16 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru16('fooValue');   // WHERE GldThru16 = 'fooValue'
     * $query->filterByGldthru16('%fooValue%', Criteria::LIKE); // WHERE GldThru16 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru16 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru16($gldthru16 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru16)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU16, $gldthru16, $comparison);
    }

    /**
     * Filter the query on the GldFrom17 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom17('fooValue');   // WHERE GldFrom17 = 'fooValue'
     * $query->filterByGldfrom17('%fooValue%', Criteria::LIKE); // WHERE GldFrom17 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom17 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom17($gldfrom17 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom17)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM17, $gldfrom17, $comparison);
    }

    /**
     * Filter the query on the GldThru17 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru17('fooValue');   // WHERE GldThru17 = 'fooValue'
     * $query->filterByGldthru17('%fooValue%', Criteria::LIKE); // WHERE GldThru17 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru17 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru17($gldthru17 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru17)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU17, $gldthru17, $comparison);
    }

    /**
     * Filter the query on the GldFrom18 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom18('fooValue');   // WHERE GldFrom18 = 'fooValue'
     * $query->filterByGldfrom18('%fooValue%', Criteria::LIKE); // WHERE GldFrom18 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom18 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom18($gldfrom18 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom18)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM18, $gldfrom18, $comparison);
    }

    /**
     * Filter the query on the GldThru18 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru18('fooValue');   // WHERE GldThru18 = 'fooValue'
     * $query->filterByGldthru18('%fooValue%', Criteria::LIKE); // WHERE GldThru18 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru18 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru18($gldthru18 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru18)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU18, $gldthru18, $comparison);
    }

    /**
     * Filter the query on the GldFrom19 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldfrom19('fooValue');   // WHERE GldFrom19 = 'fooValue'
     * $query->filterByGldfrom19('%fooValue%', Criteria::LIKE); // WHERE GldFrom19 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldfrom19 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldfrom19($gldfrom19 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldfrom19)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDFROM19, $gldfrom19, $comparison);
    }

    /**
     * Filter the query on the GldThru19 column
     *
     * Example usage:
     * <code>
     * $query->filterByGldthru19('fooValue');   // WHERE GldThru19 = 'fooValue'
     * $query->filterByGldthru19('%fooValue%', Criteria::LIKE); // WHERE GldThru19 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gldthru19 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByGldthru19($gldthru19 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gldthru19)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_GLDTHRU19, $gldthru19, $comparison);
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
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlDatesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildGlDates $glDates Object to remove from the list of results
     *
     * @return $this|ChildGlDatesQuery The current query, for fluid interface
     */
    public function prune($glDates = null)
    {
        if ($glDates) {
            $this->addUsingAlias(GlDatesTableMap::COL_GLDKEY, $glDates->getGldkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_dates table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlDatesTableMap::clearInstancePool();
            GlDatesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDatesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(GlDatesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            GlDatesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            GlDatesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // GlDatesQuery
