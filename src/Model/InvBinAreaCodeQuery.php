<?php

use Base\InvBinAreaCodeQuery as BaseInvBinAreaCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_bina_code' table.
 */
class InvBinAreaCodeQuery extends BaseInvBinAreaCodeQuery {
	use QueryTraits;

	/**
	 * Filter the query on the code column
	 * @param  mixed  $code        string|array
	 * @param  string $comparison  Database Comparison Operator e.g. <=
	 * @return $this|InvBinAreaCodeQuery The current query, for fluid interface
	 */
	public function filterByCode($code, $comparison = null) {
		return $this->filterByIntbbinacode($code, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * @param  mixed  $code        string|array
	 * @param  string $comparison  Database Comparison Operator e.g. <=
	 * @return $this|InvBinAreaCodeQuery The current query, for fluid interface
	 */
	public function filterById($code, $comparison = null) {
		return $this->filterByCode($code, $comparison);
	}
}
