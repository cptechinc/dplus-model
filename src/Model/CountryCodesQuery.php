<?php

use Base\CountryCodeQuery as BaseCountryCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'country_codes' table.
 */
class CountryCodeQuery extends BaseCountryCodeQuery {
	use QueryTraits;
}
