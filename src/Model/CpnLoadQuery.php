<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\CpnLoadQuery as BaseCpnLoadQuery;

/**
 * Class for performing query and update operations on the 'load_cpn_header' table.
 */
class CpnLoadQuery extends BaseCpnLoadQuery {
	use QueryTraits;

	/**
	 * Filter the Query by the Load Number field
	 * @param  mixed  $lnbr
	 * @param  string $comparison
	 * @return void
	 */
	public function filterByLnbr($lnbr = null, $comparison = null) {
		return $this->filterByLchdloadnbr($lnbr, $comparison);
	}

	/**
	 * Filter the Query by the Warehouse ID field
	 * @param  mixed  $intbwhse
	 * @param  string $comparison
	 * @return void
	 */
	public function filterByWhseid($intbwhse = null, $comparison = null) {
		return $this->filterByIntbwhse($intbwhse, $comparison);
	}

	/**
	 * Filter the Query by the Ship Date field
	 * @param  mixed  $date
	 * @param  string $comparison
	 * @return void
	 */
	public function filterByShipdate($date = null, $comparison = null) {
		return $this->filterByLchdshipdate($date, $comparison);
	}
}
