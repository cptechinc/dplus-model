<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\InvPalletLotQuery as BaseInvPalletLotQuery;

/**
 * Class for performing query and update operations on the 'pallet_detail' table.
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
 */
class InvPalletLotQuery extends BaseInvPalletLotQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Plthpalletid column
	 * @param  string $id     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByPalletid($id, $comparison = null) {
		return $this->filterByPlthpalletid($id, $comparison);
	}

	/**
	 * Filter the query on the Pltdlotnbr column
	 * @param  string $id     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByLotserial($id, $comparison = null) {
		return $this->filterByPltdlotnbr($id, $comparison);
	}

	/**
	 * Filter the query on the Pltdlotnbr column
	 * @param  string $id     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByLotnbr($id, $comparison = null) {
		return $this->filterByPltdlotnbr($id, $comparison);
	}
}
