<?php

use Base\RcyclReceiptLotQuery as BaseRcyclReceiptLotQuery;
use Dplus\Model\QueryTraits;

/**
 * class for performing query and update operations on the 'rcycl_lot_det' table.
 *
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByRnbr()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class RcyclReceiptLotQuery extends BaseRcyclReceiptLotQuery {
    use QueryTraits;

    /**
     * Filter the query on the Rcyhdcntrlnbrr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByRnbr($rnbr = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcyhdcntrlnbr($rnbr, $comparison);
    }

    public function filterByRtype($value = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcyhdrcptbulk($value, $comparison);
    }

    /**
     * Filter the query on the Rcydtrcptline column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLinenbr($rnbr = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcydtrcptline($rnbr, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotnbr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLotserial($rnbr = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotnbr($rnbr, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotdate column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLotdate($rnbr = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotdate($rnbr, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotqty column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByQty($value = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotqty($value, $comparison);
    }

    /**
     * Filter the query on the Inititemnbr column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByItemid($value = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByInititemnbr($value, $comparison);
    }

    /**
     * Filter the query on the Rcysdstatus column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByStatus($value = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdstatus($value, $comparison);
    }

    /**
     * Filter the query on the Rcysdclosedby column
     * @param  mixed   $rnbr        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByClosedBy($value = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdclosedby($value, $comparison);
    }
}
