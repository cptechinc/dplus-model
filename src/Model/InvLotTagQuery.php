<?php

use Base\InvLotTagQuery as BaseInvLotTagQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_tag' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByWorksheetid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  InvLotTagQuery filterByWorksheetid(string $id)      Filter the Query on the intgworkid column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class InvLotTagQuery extends BaseInvLotTagQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 * @param     string $id          The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotTagQuery The current query, for fluid interface
	 */
	public function filterByWorksheet($id, $comparison = null) {
		return $this->filterByIntgworkid($id, $comparison);
	}

	/**
	 * Filter the query on the InitItemNbr column
	 * @param     string $id          The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotTagQuery The current query, for fluid interface
	 */
	public function filterByItemid($id, $comparison = null) {
		return $this->filterByInititemnbr($id, $comparison);
	}

	/**
	 * Filter the query on the lotserial column
	 * @param     string $lotserial  The value to use as filter.
	 * @param     string $comparison   Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotTagQuery The current query, for fluid interface
	 */
	public function filterByLotserial($lotserial, $comparison = null) {
		return $this->filterByLotmlotnbr($lotserial, $comparison);
	}
}
