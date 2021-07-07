<?php

use Base\InvLotQuery as BaseInvLotQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_lot' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByLotserial()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  InvLotQuery filterByLotnbr(string $lotserial)      Filter the Query on the inltlotser column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class InvLotQuery extends BaseInvLotQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}
}
