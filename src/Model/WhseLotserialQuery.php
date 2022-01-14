<?php

use Base\WhseLotserialQuery as BaseWhseLotserialQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_lot' table.
 */
class WhseLotserialQuery extends BaseWhseLotserialQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the InltOnHand column
	 *
	 * @param     mixed $inltonhand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */

	public function filterByQty($qty, $comparison = null) {
		return $this->filterByInltonhand($qty, $comparison);
	}
}
