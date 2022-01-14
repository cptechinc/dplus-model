<?php

use Base\InvLotMasterQuery as BaseInvLotMasterQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_lot_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByLotserial()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  InvLotMasterQuery filterByLotnbr(string $lotserial)      Filter the Query on the inltlotser column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class InvLotMasterQuery extends BaseInvLotMasterQuery {
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
	 * Filter the query on the lotnbr column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self
	 */
	public function filterByLotnbr($lotnbr, $comparison = null) {
		return $this->filterByLotmlotnbr($lotnbr, $comparison);
	}
}
