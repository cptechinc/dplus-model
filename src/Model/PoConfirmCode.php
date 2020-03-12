<?php

use Base\PoConfirmCode as BasePoConfirmCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_confirm_code' table.
 */
class PoConfirmCode extends BasePoConfirmCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'potbcnfmcode',
		'code'         => 'potbcnfmcode',
		'description'  => 'potbcnfmdesc',
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
