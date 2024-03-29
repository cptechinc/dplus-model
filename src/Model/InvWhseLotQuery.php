<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\InvWhseLotQuery as BaseInvWhseLotQuery;

/**
 * Class for performing query and update operations on the 'inv_inv_lot' table.
 */
class InvWhseLotQuery extends BaseInvWhseLotQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InltBin column
	 * @param	  string $binID 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByBinid($binID, $comparison = null) {
		return $this->filterByInltbin($binID, $comparison);
	}

	/**
	 * Filter the query on the InitItemNbr column
	 * @param	  string $inititemnbr The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the InltOnHand column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */

	public function filterByQty($qty, $comparison = null) {
		return $this->filterByInltonhand($qty, $comparison);
	}

	/**
	 * Filter the query on the InltOnHand column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyOnHand($qty, $comparison = null) {
		return $this->filterByInltonhand($qty, $comparison);
	}

	/**
	 * Filter the query on the InltinTran column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyInTransit($qty, $comparison = null) {
		return $this->filterByInltintran($qty, $comparison);
	}

	/**
	 * Filter the query on the Inltship column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyShipped($qty, $comparison = null) {
		return $this->filterByInltship($qty, $comparison);
	}

	/**
	 * Filter the query on the InltinShip column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyInShip($qty, $comparison = null) {
		return $this->filterByInltinship($qty, $comparison);
	}

	/**
	 * Filter the query on the InltAllow column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyAllocated($qty, $comparison = null) {
		return $this->filterByInltallo($qty, $comparison);
	}

	/**
	 * Filter the query on the InltResv column
	 * @param	  mixed $inltonhand The value to use as filter.
	 *				Use scalar values for equality.
	 *				Use array values for in_array() equivalent.
	 *				Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByQtyReserved($qty, $comparison = null) {
		return $this->filterByInltresv($qty, $comparison);
	}
	

	/**
	 * Filter the query on the InltLotSer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInltlotser('fooValue');	 // WHERE InltLotSer = 'fooValue'
	 * $query->filterByInltlotser('%fooValue%', Criteria::LIKE); // WHERE InltLotSer LIKE '%fooValue%'
	 * </code>
	 *
	 * @param	  string $inltlotser The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvWhseLotQuery The current query, for fluid interface
	 */
	public function filterByLotserial($inltlotser = null, $comparison = null) {
		return $this->filterByInltlotser($inltlotser, $comparison);
	}
}
