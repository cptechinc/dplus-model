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

    public function filterByRcptOrBulk($value = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdrcptbulk($value, $comparison);
    }

    /**
     * Filter the query on the artbgenrid column
     * @param  mixed   $id          The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByGeneratorid($id = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByArtbgenrid($id, $comparison);
    }

    /**
     * Filter the query on the arcucustid column
     * @param  mixed   $value       The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByCustid($value = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByArcucustid($value, $comparison);
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
     * @param  mixed   $value       The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByEnteredBy($value = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdenteredby($value, $comparison);
    }

    /**
     * Filter the query on the rcyhdclosedby column
     * @param  mixed   $value       The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByClosedBy($value = null, $comparison = null) : RcyclReceiptQuery
    {
        return $this->filterByRcyhdclosedby($value, $comparison);
    }
}
