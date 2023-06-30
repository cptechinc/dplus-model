<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\InvWhseItemBinQuery as BaseInvWhseItemBinQuery;

/**
 * 
 * Class for performing query and update operations on the 'inv_bin_area' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class InvWhseItemBinQuery extends BaseInvWhseItemBinQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Intbwhse column
	 * @param	  string $whseID 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByWhseid($whseID, $comparison = null) {
		return $this->filterByIntbwhse($whseID, $comparison);
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
	
}
