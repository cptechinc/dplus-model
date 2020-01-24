<?php

use Base\InvPriceCode as BaseInvPriceCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_pric_code' table.
 */
class InvPriceCode extends BaseInvPriceCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'             => 'intbpricgrup',
		'code'           => 'intbpricgrup',
		'description'    => 'intbpricdesc',
		'sales_program'  => 'intbpricsaleprog',
		'cost_precent'   => 'intbpriccostpct',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
