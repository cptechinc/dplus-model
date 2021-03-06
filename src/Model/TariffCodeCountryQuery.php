<?php

use Base\TariffCodeCountryQuery as BaseTariffCodeCountryQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_trco_code' table.
 */
class TariffCodeCountryQuery extends BaseTariffCodeCountryQuery {
	use QueryTraits;

	/**
	 * Filter the query on the IntbTrcoCtry column
	 * @param  mixed  $country              The value to use as filter.
	 * @param  string $comparison           Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|TariffCodeCountryQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null) {
		return $this->filterByIntbtrcoctry($country, $comparison);
	}
}
