<?php

use Base\CountryCode as BaseCountryCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'country_codes' table.
 */
class CountryCode extends BaseCountryCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'ctryisoalpha3',
		'code'          => 'ctryisoalpha3',
		'iso3'          => 'ctryisoalpha3',
		'description'   => 'ctrydesc',
		'alpha2'        => 'ctryisoalpha2',
		'iso2'          => 'ctryisoalpha2',
		'numeric'       => 'ctryisonumeric',
		'custom_code'   => 'ctrycustomcode',
		'custom'        => 'ctrycustomcode',
		'exchange_rate' => 'ctryexchrate',
		'country_date'  => 'ctrydate',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
