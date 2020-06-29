<?php

use Base\InvCommissionCode as BaseInvCommissionCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_comm_code' table.
 */
class InvCommissionCode extends BaseInvCommissionCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'IntbCommGrup',
		'code'         => 'IntbCommGrup',
		'description'  => 'IntbCommDesc',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
