<?php

use Base\SoRgaCode as BaseSoRgaCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_rgas_code' table.
 */
class SoRgaCode extends BaseSoRgaCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'oetbrgascode',
		'code'             => 'oetbrgascode',
		'description'      => 'oetbrgasdesc',
		'whseid'           => 'oetbrgaswhse',
		'acctnbr'          => 'oetbrgasshipacctnbr',
		'date'		       => 'dateupdtd',
		'time'		       => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
