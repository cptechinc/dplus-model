<?php

use Base\CountryCodes as BaseCountryCodes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'country_codes' table.
 */
class CountryCodes extends BaseCountryCodes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'ctryisoalpha3',
		'code'          => 'ctryisoalpha3',
		'description'   => 'ctrydesc',
		'alpha2'        => 'ctryisoalpha2',
		'numeric'       => 'ctryisonumeric',
		'custom_code'   => 'ctrycustomcode',
		'exchange_rate' => 'ctryexchrate',
		'country_date'  => 'ctrydate',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
