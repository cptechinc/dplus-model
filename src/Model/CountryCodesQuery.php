<?php

use Base\CountryCodesQuery as BaseCountryCodesQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'country_codes' table.
 */
class CountryCodesQuery extends BaseCountryCodesQuery {
    use QueryTraits;

    /**
	 * Filter the query on the Intbtaricode column
	 *
	 * @param  mixed $tariffid      string|array
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	 public function filterById($country_code) {
		$this->filterByCtryisoalpha3($country_code);
        return $this->findOne()->description;
	}
}
