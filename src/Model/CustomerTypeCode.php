<?php

use Base\CustomerTypeCode as BaseCustomerTypeCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_type' table.
 *
 */
class CustomerTypeCode extends BaseCustomerTypeCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'        => 'artbtypecode',
		'description' => 'artbctypeesc'
	);
}
