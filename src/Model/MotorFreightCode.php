<?php

use Base\MotorFreightCode as BaseMotorFreightCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_mfrt_code' table.
 */
class MotorFreightCode extends BaseMotorFreightCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 20;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'oe2tbmfrtcode',
		'code'          => 'oe2tbmfrtcode',
		'class'         => 'oe2tbmfrtclass',
		'description'   => 'oe2tbmfrtdesc1',
		'description2'  => 'oe2tbmfrtdesc2',
		'description3'  => 'oe2tbmfrtdesc3',
		'description4'  => 'oe2tbmfrtdesc4',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
