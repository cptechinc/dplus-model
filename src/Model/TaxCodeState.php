<?php

use Base\TaxCodeState as BaseTaxCodeState;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_txst' table.
 */
class TaxCodeState extends BaseTaxCodeState {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'artbtxsttaxcode',
		'code'         => 'artbtxsttaxcode',
		'state'        => 'artbstate',
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
