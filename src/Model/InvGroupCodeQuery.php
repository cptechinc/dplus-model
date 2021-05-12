<?php

use Base\InvGroupCodeQuery as BaseInvGroupCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_grup_code' table.
 */
class InvGroupCodeQuery extends BaseInvGroupCodeQuery {
	use QueryTraits;

	/**
	 * Filter the query on the IntbGrup column
	 * @param  string $intbgrup   The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterById($intbgrup = null, $comparison = null) {
		return $this->filterByIntbgrup($intbgrup, $comparison);
	}
}
