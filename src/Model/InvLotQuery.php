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
 * @method  InvLotQuery filterByLotserial(string $lotserial)      Filter the Query on the inltlotser column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class InvLotQuery extends BaseInvLotQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
	 * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the InltOnHand column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInltonhand(1234); // WHERE InltOnHand = 1234
	 * $query->filterByInltonhand(array(12, 34)); // WHERE InltOnHand IN (12, 34)
	 * $query->filterByInltonhand(array('min' => 12)); // WHERE InltOnHand > 12
	 * </code>
	 *
	 * @param     mixed $inltonhand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvLotQuery The current query, for fluid interface
	 */

	public function filterByQty($qty, $comparison = null) {
		return $this->filterByInltonhand($qty, $comparison);
	}
}
