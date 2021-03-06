<?php

use Base\CustomerWriteOffCode as BaseCustomerWriteOffCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_woff' table.
 *
 */
class CustomerWriteOffCode extends BaseCustomerWriteOffCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'		   => 'artbwoffcode',
		'code'		   => 'artbwoffcode',
		'description'  => 'artbwoffdesc',
		'yesno' 	   => 'artbwoffyn',
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
