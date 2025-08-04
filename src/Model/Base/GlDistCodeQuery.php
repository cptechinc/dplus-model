<?php

namespace Base;

use \GlDistCode as ChildGlDistCode;
use \GlDistCodeQuery as ChildGlDistCodeQuery;
use \Exception;
use \PDO;
use Map\GlDistCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `gl_dist_code` table.
 *
 * @method     ChildGlDistCodeQuery orderByGltbdistcode($order = Criteria::ASC) Order by the GltbDistCode column
 * @method     ChildGlDistCodeQuery orderByGltbdistdesc($order = Criteria::ASC) Order by the GltbDistDesc column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr01($order = Criteria::ASC) Order by the GltbDistAcctNbr01 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct01($order = Criteria::ASC) Order by the GltbDistAcctPct01 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr02($order = Criteria::ASC) Order by the GltbDistAcctNbr02 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct02($order = Criteria::ASC) Order by the GltbDistAcctPct02 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr03($order = Criteria::ASC) Order by the GltbDistAcctNbr03 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct03($order = Criteria::ASC) Order by the GltbDistAcctPct03 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr04($order = Criteria::ASC) Order by the GltbDistAcctNbr04 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct04($order = Criteria::ASC) Order by the GltbDistAcctPct04 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr05($order = Criteria::ASC) Order by the GltbDistAcctNbr05 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct05($order = Criteria::ASC) Order by the GltbDistAcctPct05 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr06($order = Criteria::ASC) Order by the GltbDistAcctNbr06 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct06($order = Criteria::ASC) Order by the GltbDistAcctPct06 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr07($order = Criteria::ASC) Order by the GltbDistAcctNbr07 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct07($order = Criteria::ASC) Order by the GltbDistAcctPct07 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr08($order = Criteria::ASC) Order by the GltbDistAcctNbr08 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct08($order = Criteria::ASC) Order by the GltbDistAcctPct08 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr09($order = Criteria::ASC) Order by the GltbDistAcctNbr09 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct09($order = Criteria::ASC) Order by the GltbDistAcctPct09 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr10($order = Criteria::ASC) Order by the GltbDistAcctNbr10 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct10($order = Criteria::ASC) Order by the GltbDistAcctPct10 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr11($order = Criteria::ASC) Order by the GltbDistAcctNbr11 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct11($order = Criteria::ASC) Order by the GltbDistAcctPct11 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctnbr12($order = Criteria::ASC) Order by the GltbDistAcctNbr12 column
 * @method     ChildGlDistCodeQuery orderByGltbdistacctpct12($order = Criteria::ASC) Order by the GltbDistAcctPct12 column
 * @method     ChildGlDistCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildGlDistCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildGlDistCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildGlDistCodeQuery groupByGltbdistcode() Group by the GltbDistCode column
 * @method     ChildGlDistCodeQuery groupByGltbdistdesc() Group by the GltbDistDesc column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr01() Group by the GltbDistAcctNbr01 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct01() Group by the GltbDistAcctPct01 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr02() Group by the GltbDistAcctNbr02 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct02() Group by the GltbDistAcctPct02 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr03() Group by the GltbDistAcctNbr03 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct03() Group by the GltbDistAcctPct03 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr04() Group by the GltbDistAcctNbr04 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct04() Group by the GltbDistAcctPct04 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr05() Group by the GltbDistAcctNbr05 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct05() Group by the GltbDistAcctPct05 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr06() Group by the GltbDistAcctNbr06 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct06() Group by the GltbDistAcctPct06 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr07() Group by the GltbDistAcctNbr07 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct07() Group by the GltbDistAcctPct07 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr08() Group by the GltbDistAcctNbr08 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct08() Group by the GltbDistAcctPct08 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr09() Group by the GltbDistAcctNbr09 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct09() Group by the GltbDistAcctPct09 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr10() Group by the GltbDistAcctNbr10 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct10() Group by the GltbDistAcctPct10 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr11() Group by the GltbDistAcctNbr11 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct11() Group by the GltbDistAcctPct11 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctnbr12() Group by the GltbDistAcctNbr12 column
 * @method     ChildGlDistCodeQuery groupByGltbdistacctpct12() Group by the GltbDistAcctPct12 column
 * @method     ChildGlDistCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildGlDistCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildGlDistCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildGlDistCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildGlDistCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildGlDistCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildGlDistCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildGlDistCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildGlDistCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildGlDistCode|null findOne(?ConnectionInterface $con = null) Return the first ChildGlDistCode matching the query
 * @method     ChildGlDistCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildGlDistCode matching the query, or a new ChildGlDistCode object populated from the query conditions when no match is found
 *
 * @method     ChildGlDistCode|null findOneByGltbdistcode(string $GltbDistCode) Return the first ChildGlDistCode filtered by the GltbDistCode column
 * @method     ChildGlDistCode|null findOneByGltbdistdesc(string $GltbDistDesc) Return the first ChildGlDistCode filtered by the GltbDistDesc column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr01(string $GltbDistAcctNbr01) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr01 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct01(string $GltbDistAcctPct01) Return the first ChildGlDistCode filtered by the GltbDistAcctPct01 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr02(string $GltbDistAcctNbr02) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr02 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct02(string $GltbDistAcctPct02) Return the first ChildGlDistCode filtered by the GltbDistAcctPct02 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr03(string $GltbDistAcctNbr03) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr03 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct03(string $GltbDistAcctPct03) Return the first ChildGlDistCode filtered by the GltbDistAcctPct03 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr04(string $GltbDistAcctNbr04) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr04 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct04(string $GltbDistAcctPct04) Return the first ChildGlDistCode filtered by the GltbDistAcctPct04 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr05(string $GltbDistAcctNbr05) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr05 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct05(string $GltbDistAcctPct05) Return the first ChildGlDistCode filtered by the GltbDistAcctPct05 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr06(string $GltbDistAcctNbr06) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr06 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct06(string $GltbDistAcctPct06) Return the first ChildGlDistCode filtered by the GltbDistAcctPct06 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr07(string $GltbDistAcctNbr07) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr07 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct07(string $GltbDistAcctPct07) Return the first ChildGlDistCode filtered by the GltbDistAcctPct07 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr08(string $GltbDistAcctNbr08) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr08 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct08(string $GltbDistAcctPct08) Return the first ChildGlDistCode filtered by the GltbDistAcctPct08 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr09(string $GltbDistAcctNbr09) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr09 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct09(string $GltbDistAcctPct09) Return the first ChildGlDistCode filtered by the GltbDistAcctPct09 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr10(string $GltbDistAcctNbr10) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr10 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct10(string $GltbDistAcctPct10) Return the first ChildGlDistCode filtered by the GltbDistAcctPct10 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr11(string $GltbDistAcctNbr11) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr11 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct11(string $GltbDistAcctPct11) Return the first ChildGlDistCode filtered by the GltbDistAcctPct11 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctnbr12(string $GltbDistAcctNbr12) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr12 column
 * @method     ChildGlDistCode|null findOneByGltbdistacctpct12(string $GltbDistAcctPct12) Return the first ChildGlDistCode filtered by the GltbDistAcctPct12 column
 * @method     ChildGlDistCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildGlDistCode filtered by the DateUpdtd column
 * @method     ChildGlDistCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlDistCode filtered by the TimeUpdtd column
 * @method     ChildGlDistCode|null findOneByDummy(string $dummy) Return the first ChildGlDistCode filtered by the dummy column
 *
 * @method     ChildGlDistCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildGlDistCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOne(?ConnectionInterface $con = null) Return the first ChildGlDistCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlDistCode requireOneByGltbdistcode(string $GltbDistCode) Return the first ChildGlDistCode filtered by the GltbDistCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistdesc(string $GltbDistDesc) Return the first ChildGlDistCode filtered by the GltbDistDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr01(string $GltbDistAcctNbr01) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct01(string $GltbDistAcctPct01) Return the first ChildGlDistCode filtered by the GltbDistAcctPct01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr02(string $GltbDistAcctNbr02) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct02(string $GltbDistAcctPct02) Return the first ChildGlDistCode filtered by the GltbDistAcctPct02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr03(string $GltbDistAcctNbr03) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct03(string $GltbDistAcctPct03) Return the first ChildGlDistCode filtered by the GltbDistAcctPct03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr04(string $GltbDistAcctNbr04) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct04(string $GltbDistAcctPct04) Return the first ChildGlDistCode filtered by the GltbDistAcctPct04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr05(string $GltbDistAcctNbr05) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct05(string $GltbDistAcctPct05) Return the first ChildGlDistCode filtered by the GltbDistAcctPct05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr06(string $GltbDistAcctNbr06) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct06(string $GltbDistAcctPct06) Return the first ChildGlDistCode filtered by the GltbDistAcctPct06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr07(string $GltbDistAcctNbr07) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct07(string $GltbDistAcctPct07) Return the first ChildGlDistCode filtered by the GltbDistAcctPct07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr08(string $GltbDistAcctNbr08) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct08(string $GltbDistAcctPct08) Return the first ChildGlDistCode filtered by the GltbDistAcctPct08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr09(string $GltbDistAcctNbr09) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct09(string $GltbDistAcctPct09) Return the first ChildGlDistCode filtered by the GltbDistAcctPct09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr10(string $GltbDistAcctNbr10) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct10(string $GltbDistAcctPct10) Return the first ChildGlDistCode filtered by the GltbDistAcctPct10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr11(string $GltbDistAcctNbr11) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct11(string $GltbDistAcctPct11) Return the first ChildGlDistCode filtered by the GltbDistAcctPct11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctnbr12(string $GltbDistAcctNbr12) Return the first ChildGlDistCode filtered by the GltbDistAcctNbr12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByGltbdistacctpct12(string $GltbDistAcctPct12) Return the first ChildGlDistCode filtered by the GltbDistAcctPct12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildGlDistCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlDistCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlDistCode requireOneByDummy(string $dummy) Return the first ChildGlDistCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlDistCode[]|Collection find(?ConnectionInterface $con = null) Return ChildGlDistCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildGlDistCode> find(?ConnectionInterface $con = null) Return ChildGlDistCode objects based on current ModelCriteria
 *
 * @method     ChildGlDistCode[]|Collection findByGltbdistcode(string|array<string> $GltbDistCode) Return ChildGlDistCode objects filtered by the GltbDistCode column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistcode(string|array<string> $GltbDistCode) Return ChildGlDistCode objects filtered by the GltbDistCode column
 * @method     ChildGlDistCode[]|Collection findByGltbdistdesc(string|array<string> $GltbDistDesc) Return ChildGlDistCode objects filtered by the GltbDistDesc column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistdesc(string|array<string> $GltbDistDesc) Return ChildGlDistCode objects filtered by the GltbDistDesc column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr01(string|array<string> $GltbDistAcctNbr01) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr01 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr01(string|array<string> $GltbDistAcctNbr01) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr01 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct01(string|array<string> $GltbDistAcctPct01) Return ChildGlDistCode objects filtered by the GltbDistAcctPct01 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct01(string|array<string> $GltbDistAcctPct01) Return ChildGlDistCode objects filtered by the GltbDistAcctPct01 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr02(string|array<string> $GltbDistAcctNbr02) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr02 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr02(string|array<string> $GltbDistAcctNbr02) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr02 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct02(string|array<string> $GltbDistAcctPct02) Return ChildGlDistCode objects filtered by the GltbDistAcctPct02 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct02(string|array<string> $GltbDistAcctPct02) Return ChildGlDistCode objects filtered by the GltbDistAcctPct02 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr03(string|array<string> $GltbDistAcctNbr03) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr03 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr03(string|array<string> $GltbDistAcctNbr03) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr03 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct03(string|array<string> $GltbDistAcctPct03) Return ChildGlDistCode objects filtered by the GltbDistAcctPct03 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct03(string|array<string> $GltbDistAcctPct03) Return ChildGlDistCode objects filtered by the GltbDistAcctPct03 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr04(string|array<string> $GltbDistAcctNbr04) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr04 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr04(string|array<string> $GltbDistAcctNbr04) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr04 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct04(string|array<string> $GltbDistAcctPct04) Return ChildGlDistCode objects filtered by the GltbDistAcctPct04 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct04(string|array<string> $GltbDistAcctPct04) Return ChildGlDistCode objects filtered by the GltbDistAcctPct04 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr05(string|array<string> $GltbDistAcctNbr05) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr05 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr05(string|array<string> $GltbDistAcctNbr05) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr05 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct05(string|array<string> $GltbDistAcctPct05) Return ChildGlDistCode objects filtered by the GltbDistAcctPct05 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct05(string|array<string> $GltbDistAcctPct05) Return ChildGlDistCode objects filtered by the GltbDistAcctPct05 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr06(string|array<string> $GltbDistAcctNbr06) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr06 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr06(string|array<string> $GltbDistAcctNbr06) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr06 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct06(string|array<string> $GltbDistAcctPct06) Return ChildGlDistCode objects filtered by the GltbDistAcctPct06 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct06(string|array<string> $GltbDistAcctPct06) Return ChildGlDistCode objects filtered by the GltbDistAcctPct06 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr07(string|array<string> $GltbDistAcctNbr07) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr07 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr07(string|array<string> $GltbDistAcctNbr07) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr07 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct07(string|array<string> $GltbDistAcctPct07) Return ChildGlDistCode objects filtered by the GltbDistAcctPct07 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct07(string|array<string> $GltbDistAcctPct07) Return ChildGlDistCode objects filtered by the GltbDistAcctPct07 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr08(string|array<string> $GltbDistAcctNbr08) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr08 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr08(string|array<string> $GltbDistAcctNbr08) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr08 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct08(string|array<string> $GltbDistAcctPct08) Return ChildGlDistCode objects filtered by the GltbDistAcctPct08 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct08(string|array<string> $GltbDistAcctPct08) Return ChildGlDistCode objects filtered by the GltbDistAcctPct08 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr09(string|array<string> $GltbDistAcctNbr09) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr09 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr09(string|array<string> $GltbDistAcctNbr09) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr09 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct09(string|array<string> $GltbDistAcctPct09) Return ChildGlDistCode objects filtered by the GltbDistAcctPct09 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct09(string|array<string> $GltbDistAcctPct09) Return ChildGlDistCode objects filtered by the GltbDistAcctPct09 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr10(string|array<string> $GltbDistAcctNbr10) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr10 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr10(string|array<string> $GltbDistAcctNbr10) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr10 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct10(string|array<string> $GltbDistAcctPct10) Return ChildGlDistCode objects filtered by the GltbDistAcctPct10 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct10(string|array<string> $GltbDistAcctPct10) Return ChildGlDistCode objects filtered by the GltbDistAcctPct10 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr11(string|array<string> $GltbDistAcctNbr11) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr11 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr11(string|array<string> $GltbDistAcctNbr11) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr11 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct11(string|array<string> $GltbDistAcctPct11) Return ChildGlDistCode objects filtered by the GltbDistAcctPct11 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct11(string|array<string> $GltbDistAcctPct11) Return ChildGlDistCode objects filtered by the GltbDistAcctPct11 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctnbr12(string|array<string> $GltbDistAcctNbr12) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr12 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctnbr12(string|array<string> $GltbDistAcctNbr12) Return ChildGlDistCode objects filtered by the GltbDistAcctNbr12 column
 * @method     ChildGlDistCode[]|Collection findByGltbdistacctpct12(string|array<string> $GltbDistAcctPct12) Return ChildGlDistCode objects filtered by the GltbDistAcctPct12 column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByGltbdistacctpct12(string|array<string> $GltbDistAcctPct12) Return ChildGlDistCode objects filtered by the GltbDistAcctPct12 column
 * @method     ChildGlDistCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildGlDistCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildGlDistCode objects filtered by the DateUpdtd column
 * @method     ChildGlDistCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildGlDistCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildGlDistCode objects filtered by the TimeUpdtd column
 * @method     ChildGlDistCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildGlDistCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildGlDistCode> findByDummy(string|array<string> $dummy) Return ChildGlDistCode objects filtered by the dummy column
 *
 * @method     ChildGlDistCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildGlDistCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class GlDistCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\GlDistCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\GlDistCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildGlDistCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildGlDistCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildGlDistCodeQuery) {
            return $criteria;
        }
        $query = new ChildGlDistCodeQuery();
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
     * @return ChildGlDistCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = GlDistCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildGlDistCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GltbDistCode, GltbDistDesc, GltbDistAcctNbr01, GltbDistAcctPct01, GltbDistAcctNbr02, GltbDistAcctPct02, GltbDistAcctNbr03, GltbDistAcctPct03, GltbDistAcctNbr04, GltbDistAcctPct04, GltbDistAcctNbr05, GltbDistAcctPct05, GltbDistAcctNbr06, GltbDistAcctPct06, GltbDistAcctNbr07, GltbDistAcctPct07, GltbDistAcctNbr08, GltbDistAcctPct08, GltbDistAcctNbr09, GltbDistAcctPct09, GltbDistAcctNbr10, GltbDistAcctPct10, GltbDistAcctNbr11, GltbDistAcctPct11, GltbDistAcctNbr12, GltbDistAcctPct12, DateUpdtd, TimeUpdtd, dummy FROM gl_dist_code WHERE GltbDistCode = :p0';
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
            /** @var ChildGlDistCode $obj */
            $obj = new ChildGlDistCode();
            $obj->hydrate($row);
            GlDistCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildGlDistCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the GltbDistCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistcode('fooValue');   // WHERE GltbDistCode = 'fooValue'
     * $query->filterByGltbdistcode('%fooValue%', Criteria::LIKE); // WHERE GltbDistCode LIKE '%fooValue%'
     * $query->filterByGltbdistcode(['foo', 'bar']); // WHERE GltbDistCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistcode($gltbdistcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTCODE, $gltbdistcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistdesc('fooValue');   // WHERE GltbDistDesc = 'fooValue'
     * $query->filterByGltbdistdesc('%fooValue%', Criteria::LIKE); // WHERE GltbDistDesc LIKE '%fooValue%'
     * $query->filterByGltbdistdesc(['foo', 'bar']); // WHERE GltbDistDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistdesc($gltbdistdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTDESC, $gltbdistdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr01 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr01('fooValue');   // WHERE GltbDistAcctNbr01 = 'fooValue'
     * $query->filterByGltbdistacctnbr01('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr01 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr01(['foo', 'bar']); // WHERE GltbDistAcctNbr01 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr01 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr01($gltbdistacctnbr01 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr01)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR01, $gltbdistacctnbr01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct01 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct01(1234); // WHERE GltbDistAcctPct01 = 1234
     * $query->filterByGltbdistacctpct01(array(12, 34)); // WHERE GltbDistAcctPct01 IN (12, 34)
     * $query->filterByGltbdistacctpct01(array('min' => 12)); // WHERE GltbDistAcctPct01 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct01 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct01($gltbdistacctpct01 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct01)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct01['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01, $gltbdistacctpct01['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct01['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01, $gltbdistacctpct01['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT01, $gltbdistacctpct01, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr02 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr02('fooValue');   // WHERE GltbDistAcctNbr02 = 'fooValue'
     * $query->filterByGltbdistacctnbr02('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr02 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr02(['foo', 'bar']); // WHERE GltbDistAcctNbr02 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr02 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr02($gltbdistacctnbr02 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr02)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR02, $gltbdistacctnbr02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct02 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct02(1234); // WHERE GltbDistAcctPct02 = 1234
     * $query->filterByGltbdistacctpct02(array(12, 34)); // WHERE GltbDistAcctPct02 IN (12, 34)
     * $query->filterByGltbdistacctpct02(array('min' => 12)); // WHERE GltbDistAcctPct02 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct02 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct02($gltbdistacctpct02 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct02)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct02['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02, $gltbdistacctpct02['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct02['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02, $gltbdistacctpct02['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT02, $gltbdistacctpct02, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr03 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr03('fooValue');   // WHERE GltbDistAcctNbr03 = 'fooValue'
     * $query->filterByGltbdistacctnbr03('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr03 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr03(['foo', 'bar']); // WHERE GltbDistAcctNbr03 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr03 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr03($gltbdistacctnbr03 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr03)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR03, $gltbdistacctnbr03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct03 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct03(1234); // WHERE GltbDistAcctPct03 = 1234
     * $query->filterByGltbdistacctpct03(array(12, 34)); // WHERE GltbDistAcctPct03 IN (12, 34)
     * $query->filterByGltbdistacctpct03(array('min' => 12)); // WHERE GltbDistAcctPct03 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct03 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct03($gltbdistacctpct03 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct03)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct03['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03, $gltbdistacctpct03['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct03['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03, $gltbdistacctpct03['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT03, $gltbdistacctpct03, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr04 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr04('fooValue');   // WHERE GltbDistAcctNbr04 = 'fooValue'
     * $query->filterByGltbdistacctnbr04('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr04 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr04(['foo', 'bar']); // WHERE GltbDistAcctNbr04 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr04 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr04($gltbdistacctnbr04 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr04)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR04, $gltbdistacctnbr04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct04 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct04(1234); // WHERE GltbDistAcctPct04 = 1234
     * $query->filterByGltbdistacctpct04(array(12, 34)); // WHERE GltbDistAcctPct04 IN (12, 34)
     * $query->filterByGltbdistacctpct04(array('min' => 12)); // WHERE GltbDistAcctPct04 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct04 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct04($gltbdistacctpct04 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct04)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct04['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04, $gltbdistacctpct04['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct04['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04, $gltbdistacctpct04['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT04, $gltbdistacctpct04, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr05 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr05('fooValue');   // WHERE GltbDistAcctNbr05 = 'fooValue'
     * $query->filterByGltbdistacctnbr05('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr05 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr05(['foo', 'bar']); // WHERE GltbDistAcctNbr05 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr05 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr05($gltbdistacctnbr05 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr05)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR05, $gltbdistacctnbr05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct05 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct05(1234); // WHERE GltbDistAcctPct05 = 1234
     * $query->filterByGltbdistacctpct05(array(12, 34)); // WHERE GltbDistAcctPct05 IN (12, 34)
     * $query->filterByGltbdistacctpct05(array('min' => 12)); // WHERE GltbDistAcctPct05 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct05 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct05($gltbdistacctpct05 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct05)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct05['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05, $gltbdistacctpct05['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct05['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05, $gltbdistacctpct05['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT05, $gltbdistacctpct05, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr06 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr06('fooValue');   // WHERE GltbDistAcctNbr06 = 'fooValue'
     * $query->filterByGltbdistacctnbr06('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr06 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr06(['foo', 'bar']); // WHERE GltbDistAcctNbr06 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr06 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr06($gltbdistacctnbr06 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr06)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR06, $gltbdistacctnbr06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct06 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct06(1234); // WHERE GltbDistAcctPct06 = 1234
     * $query->filterByGltbdistacctpct06(array(12, 34)); // WHERE GltbDistAcctPct06 IN (12, 34)
     * $query->filterByGltbdistacctpct06(array('min' => 12)); // WHERE GltbDistAcctPct06 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct06 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct06($gltbdistacctpct06 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct06)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct06['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06, $gltbdistacctpct06['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct06['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06, $gltbdistacctpct06['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT06, $gltbdistacctpct06, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr07 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr07('fooValue');   // WHERE GltbDistAcctNbr07 = 'fooValue'
     * $query->filterByGltbdistacctnbr07('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr07 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr07(['foo', 'bar']); // WHERE GltbDistAcctNbr07 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr07 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr07($gltbdistacctnbr07 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr07)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR07, $gltbdistacctnbr07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct07 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct07(1234); // WHERE GltbDistAcctPct07 = 1234
     * $query->filterByGltbdistacctpct07(array(12, 34)); // WHERE GltbDistAcctPct07 IN (12, 34)
     * $query->filterByGltbdistacctpct07(array('min' => 12)); // WHERE GltbDistAcctPct07 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct07 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct07($gltbdistacctpct07 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct07)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct07['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07, $gltbdistacctpct07['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct07['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07, $gltbdistacctpct07['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT07, $gltbdistacctpct07, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr08 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr08('fooValue');   // WHERE GltbDistAcctNbr08 = 'fooValue'
     * $query->filterByGltbdistacctnbr08('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr08 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr08(['foo', 'bar']); // WHERE GltbDistAcctNbr08 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr08 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr08($gltbdistacctnbr08 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr08)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR08, $gltbdistacctnbr08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct08 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct08(1234); // WHERE GltbDistAcctPct08 = 1234
     * $query->filterByGltbdistacctpct08(array(12, 34)); // WHERE GltbDistAcctPct08 IN (12, 34)
     * $query->filterByGltbdistacctpct08(array('min' => 12)); // WHERE GltbDistAcctPct08 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct08 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct08($gltbdistacctpct08 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct08)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct08['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08, $gltbdistacctpct08['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct08['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08, $gltbdistacctpct08['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT08, $gltbdistacctpct08, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr09 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr09('fooValue');   // WHERE GltbDistAcctNbr09 = 'fooValue'
     * $query->filterByGltbdistacctnbr09('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr09 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr09(['foo', 'bar']); // WHERE GltbDistAcctNbr09 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr09 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr09($gltbdistacctnbr09 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr09)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR09, $gltbdistacctnbr09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct09 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct09(1234); // WHERE GltbDistAcctPct09 = 1234
     * $query->filterByGltbdistacctpct09(array(12, 34)); // WHERE GltbDistAcctPct09 IN (12, 34)
     * $query->filterByGltbdistacctpct09(array('min' => 12)); // WHERE GltbDistAcctPct09 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct09 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct09($gltbdistacctpct09 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct09)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct09['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09, $gltbdistacctpct09['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct09['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09, $gltbdistacctpct09['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT09, $gltbdistacctpct09, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr10('fooValue');   // WHERE GltbDistAcctNbr10 = 'fooValue'
     * $query->filterByGltbdistacctnbr10('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr10 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr10(['foo', 'bar']); // WHERE GltbDistAcctNbr10 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr10 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr10($gltbdistacctnbr10 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr10)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR10, $gltbdistacctnbr10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct10(1234); // WHERE GltbDistAcctPct10 = 1234
     * $query->filterByGltbdistacctpct10(array(12, 34)); // WHERE GltbDistAcctPct10 IN (12, 34)
     * $query->filterByGltbdistacctpct10(array('min' => 12)); // WHERE GltbDistAcctPct10 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct10($gltbdistacctpct10 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct10)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct10['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10, $gltbdistacctpct10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct10['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10, $gltbdistacctpct10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT10, $gltbdistacctpct10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr11 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr11('fooValue');   // WHERE GltbDistAcctNbr11 = 'fooValue'
     * $query->filterByGltbdistacctnbr11('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr11 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr11(['foo', 'bar']); // WHERE GltbDistAcctNbr11 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr11 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr11($gltbdistacctnbr11 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr11)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR11, $gltbdistacctnbr11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct11 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct11(1234); // WHERE GltbDistAcctPct11 = 1234
     * $query->filterByGltbdistacctpct11(array(12, 34)); // WHERE GltbDistAcctPct11 IN (12, 34)
     * $query->filterByGltbdistacctpct11(array('min' => 12)); // WHERE GltbDistAcctPct11 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct11($gltbdistacctpct11 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct11)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct11['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11, $gltbdistacctpct11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct11['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11, $gltbdistacctpct11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT11, $gltbdistacctpct11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctNbr12 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctnbr12('fooValue');   // WHERE GltbDistAcctNbr12 = 'fooValue'
     * $query->filterByGltbdistacctnbr12('%fooValue%', Criteria::LIKE); // WHERE GltbDistAcctNbr12 LIKE '%fooValue%'
     * $query->filterByGltbdistacctnbr12(['foo', 'bar']); // WHERE GltbDistAcctNbr12 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $gltbdistacctnbr12 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctnbr12($gltbdistacctnbr12 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbdistacctnbr12)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTNBR12, $gltbdistacctnbr12, $comparison);

        return $this;
    }

    /**
     * Filter the query on the GltbDistAcctPct12 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbdistacctpct12(1234); // WHERE GltbDistAcctPct12 = 1234
     * $query->filterByGltbdistacctpct12(array(12, 34)); // WHERE GltbDistAcctPct12 IN (12, 34)
     * $query->filterByGltbdistacctpct12(array('min' => 12)); // WHERE GltbDistAcctPct12 > 12
     * </code>
     *
     * @param mixed $gltbdistacctpct12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGltbdistacctpct12($gltbdistacctpct12 = null, ?string $comparison = null)
    {
        if (is_array($gltbdistacctpct12)) {
            $useMinMax = false;
            if (isset($gltbdistacctpct12['min'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12, $gltbdistacctpct12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbdistacctpct12['max'])) {
                $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12, $gltbdistacctpct12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTACCTPCT12, $gltbdistacctpct12, $comparison);

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

        $this->addUsingAlias(GlDistCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(GlDistCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(GlDistCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildGlDistCode $glDistCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($glDistCode = null)
    {
        if ($glDistCode) {
            $this->addUsingAlias(GlDistCodeTableMap::COL_GLTBDISTCODE, $glDistCode->getGltbdistcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_dist_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlDistCodeTableMap::clearInstancePool();
            GlDistCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(GlDistCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(GlDistCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            GlDistCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            GlDistCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
