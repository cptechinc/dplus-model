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

	const MAX_LENGTH_CODE = 3;

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
		'percent'      => 'intbtaridutyratepct',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

	/**
	 * Return the Maximum of characters allowed for code
	 * @return int
	 */
	public function get_max_code_length() {
		return self::MAX_LENGTH_CODE;
	}

	/**
	 * Return Countries that this Tariff Code is applied to
	 * @return TariffCodeCountry[]|ObjectCollection
	 */
	public function get_countries() {
		return TariffCodeCountryQuery::create()->filterByCode($this->code)->find();
	}

	/**
	 * Return the Number of Countries that this Tariff Code is applied to
	 * @return int
	 */
	public function count_countries() {
		$q = $this->get_query_tariffcountry();
		return $q->count();
	}

	/**
	 * Return if Tariff Code Applies to Country Code
	 * @param  string $country Country Code
	 * @return bool
	 */
	public function applies_to_country($country) {
		$q = $this->get_query_tariffcountry();
		return boolval($q->filterByCountry($country)->count());
	}

	/**
	 * Returns Query for Tariff Countries
	 * @return TariffCodeCountryQuery
	 */
	private function get_query_tariffcountry() {
		return TariffCodeCountryQuery::create()->filterByCode($this->code);
	}
}
