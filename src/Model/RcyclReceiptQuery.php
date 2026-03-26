<?php

use Base\RcyclReceiptQuery as BaseRcyclReceiptQuery;
use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'rcycl_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByRnbr()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  RcyclReceipt findOneByRnbr(string $id)      Return the first RcyclReceipt filtered by the rcyhdrcptnbr column
 *
 * FindByXXX()
 *
 */
class RcyclReceiptQuery extends BaseRcyclReceiptQuery {
    use QueryTraits;

    /**
     * Filter the query on the Rcyhdcntrlnbr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByRnbr($rnbr = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdcntrlnbr($rnbr, $comparison);
    }

    public function filterByRtype($rtype = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdrcptbulk($rtype, $comparison);
    }

    /**
     * Filter the query on the artbgenrid column
     * @param  mixed   $generatorid The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByGeneratorid($generatorid = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByArtbgenrid($generatorid, $comparison);
    }

    /**
     * Filter the query on the arcucustid column
     * @param  mixed   $custid      The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByCustid($custid = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByArcucustid($custid, $comparison);
    }

    /**
     * Filter the query on the rcyhdstatus column
     * @param  mixed   $value       The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByStatus($value = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdstatus($value, $comparison);
    }

    /**
     * Filter the query on the rcyhdenteredby column
     * @param  mixed   $enteredby   The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByEnteredBy($enteredby = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdenteredby($enteredby, $comparison);
    }

    /**
     * Filter the query on the rcyhdclosedby column
     * @param  mixed   $closedby    The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByClosedBy($closedby = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdclosedby($closedby, $comparison);
    }
}
