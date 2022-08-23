<?php

use Base\ArCustTaxCode as BaseArCustTaxCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_ctax' table.
 */
class ArCustTaxCode extends BaseArCustTaxCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'artbctaxcode',
		'code'         => 'artbctaxdode',
		'description'  => 'artbctaxdesc',
		'code1'        => 'artbctaxcode1',
		'code2'        => 'artbctaxcode2',
        'code3'        => 'artbctaxcode3',
        'code4'        => 'artbctaxcode4',
        'code5'        => 'artbctaxcode5',
        'code6'        => 'artbctaxcode6',
        'code7'        => 'artbctaxcode7',
        'code8'        => 'artbctaxcode8',
        'code9'        => 'artbctaxcode9',
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
