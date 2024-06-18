<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\InvPalletQuery as BaseInvPalletQuery;

/**
 * Class for performing query and update operations on the 'pallet_header' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: 
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class InvPalletQuery extends BaseInvPalletQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Plthpalletid column
	 * @param  string $id     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterById($id, $comparison = null) {
		return $this->filterByPlthpalletid($id, $comparison);
	}

	/**
	 * Filter the query on the inititemnbr column
	 * @param  string $itemID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the Plthbin column
	 * @param  string $id     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByBin($id, $comparison = null) {
		return $this->filterByPlthbin($id, $comparison);
	}
}
