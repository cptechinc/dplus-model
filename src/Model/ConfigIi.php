<?php

use Base\ConfigIi as BaseConfigIi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ii_config' table.
 */
class ConfigIi extends BaseConfigIi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const BREAKDOWNCODES = [
		'K' => 'kit',
		'B' => 'BOM',
		'A' => 'all',
		'N' => 'non inquiry'
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'whereUsedOrQuote'     => 'iitbconfwuorvqw',
		'breakdownInquiryCode' => 'iitbconfinqcode',
		'date'                 => 'dateupdtd',
		'time'                 => 'timeupdtd'
	);

	/**
	 * Return Breakdown Inquiry Description
	 * @return bool
	 */
	public function breakdownInquiryDescription() {
		return self::BREAKDOWNCODES[$this->breakdownInquiryCode];
	}

	/**
	 * Return If BoM Inquiry screen is allowed
	 * @return bool
	 */
	public function allowBreakdownBom() {
		$allowed = ['B', 'A'];
		return in_array($this->breakdownInquiryCode, $allowed);
	}

	/**
	 * Return If Kit Inquiry screen is allowed
	 * @return bool
	 */
	public function allowBreakdownKit() {
		$allowed = ['K', 'A'];
		return in_array($this->breakdownInquiryCode, $allowed);
	}
}
