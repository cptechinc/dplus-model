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

    public function filterByRtype($rtype = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcyhdrcptbulk($rtype, $comparison);
    }

    /**
     * Filter the query on the Rcydtrcptline column
     * @param  mixed   $linenbr     The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLinenbr($linenbr = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcydtrcptline($linenbr, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotnbr column
     * @param  mixed   $lotserial   The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLotserial($lotserial = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotnbr($lotserial, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotdate column
     * @param  mixed   $date        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByLotdate($date = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotdate($date, $comparison);
    }

    /**
     * Filter the query on the Rcysdlotqty column
     * @param  mixed   $qty        The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByQty($qty = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdlotqty($qty, $comparison);
    }

    /**
     * Filter the query on the Inititemnbr column
     * @param  mixed   $itemid      The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByItemid($itemid = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByInititemnbr($itemid, $comparison);
    }

    /**
     * Filter the query on the Rcysdstatus column
     * @param  mixed   $status      The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdstatus($status, $comparison);
    }

    /**
     * Filter the query on the Rcysdclosedby column
     * @param  mixed   $closedby    The value to use as filter.
     * @param  string  $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
     * @return self                 The current query, for fluid interface
     */
    public function filterByClosedBy($closedby = null, $comparison = null) : RcyclReceiptLotQuery
    {
        return $this->filterByRcysdclosedby($closedby, $comparison);
    }
}
