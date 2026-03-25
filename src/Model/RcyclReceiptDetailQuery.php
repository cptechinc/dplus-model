<?php

use Base\RcyclReceiptDetailQuery as BaseRcyclReceiptDetailQuery;
use Dplus\Model\QueryTraits;

/**
 * class for performing query and update operations on the 'rcycl_det' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByRnbr()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  RcyclReceiptDetailQuery filterByRnbr(string $id)      Return the query filtered by the rcyhdrcptnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class RcyclReceiptDetailQuery extends BaseRcyclReceiptDetailQuery {
    use QueryTraits;

    /**
     * Filter the query on the Rcyhdcntrlnbr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByRnbr($rnbr = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcyhdcntrlnbr($rnbr, $comparison);
    }
    
    public function filterByRtype($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcyhdrcptbulk($value, $comparison);
    }

    /**
     * Filter the query on the Rcydtrcptline column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLinenbr($rnbr = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcydtrcptline($rnbr, $comparison);
    }

    /**
     * Filter the query on the Rcydtrcptqty column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByQtyRcvd($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcydtrcptqty($value, $comparison);
    }

    /**
     * Filter the query on the Rcydtrcptqty column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByQty($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcydtrcptqty($value, $comparison);
    }

    /**
     * Filter the query on the Inititemnbr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByItemid($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByInititemnbr($value, $comparison);
    }

    /**
     * Filter the query on the Rcydtstatus column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByStatus($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcydtstatus($value, $comparison);
    }

    /**
     * Filter the query on the Rcydtclosedby column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByClosedBy($value = null, $comparison = null) : RcyclReceiptDetailQuery
    {
        return $this->filterByRcydtclosedby($value, $comparison);
    }
}
