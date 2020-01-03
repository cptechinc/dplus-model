<?php

use Base\TariffCode as BaseTariffCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_tari_code' table.
 */
class TariffCode extends BaseTariffCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
        'id'           => 'intbtaricode',
        'code'         => 'intbtaricode',
		'number'       => 'intbtarinbr',
		'description'  => 'intbtaridesc',
		'duty_rate'    => 'intbtaridutyratepct',
		'date'         => 'dateupdtd',
        'time'         => 'timeupdtd'
	);

    /**
	 * Return the status description based of the order status
	 *
	 * @return void
	 */
	public function get_country_code($tariffid) {
        return CountryCodesQuery::create()->filterById(TariffCodeCountryQuery::create()->filterById($tariffid));
	}
}
