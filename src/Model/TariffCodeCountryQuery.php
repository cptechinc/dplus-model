<?php

use Base\TariffCodeCountryQuery as BaseTariffCodeCountryQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_trco_code' table.
 */
class TariffCodeCountryQuery extends BaseTariffCodeCountryQuery {
    use QueryTraits;

    /**
	 * Filter the query on the Intbtaricode column
	 *
	 * @param  mixed $tariffid      string|array
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	 public function filterById($tariffid) {
		$this->filterByIntbtaricode($tariffid);
        return $this->findOne()->country;
	}
}
