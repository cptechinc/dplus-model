<?php

use Base\CustomerCommissionCode as BaseCustomerCommissionCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_comm' table.
 *
 */
class CustomerCommissionCode extends BaseCustomerCommissionCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'artbcommcode',
		'code'         => 'artbcommcode',
		'description'  => 'artbcommdesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
