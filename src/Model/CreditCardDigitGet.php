<?php

use Base\CreditCardDigitGet as BaseCreditCardDigitGet;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_crcd' table.
 */
class CreditCardDigitGet extends BaseCreditCardDigitGet {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 1;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                      => 'artbcrcdcode',
		'code'                    => 'artbcrcdcode',
		'description'             => 'artbcrcdname',
		'name'                    => 'artbcrcdname',
		'gl_account'              => 'artbcrcdglacct',
        'custid'                  => 'artbcrcdcustid',
        'charge_gl_account'       => 'artbcrcdchrgglacct',
        'charge_rate'             => 'artbcrcdchrgrate',
        'trans_cost'              => 'artbcrcdchrgtrancost',
        'cc_surcharge_percent'    => 'artbcrcdccsurchgpct',
        'lmcc_surcharge_percent'  => 'artbcrcdlmccsurchgpct',
		'date'		              => 'dateupdtd',
		'time'		              => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
