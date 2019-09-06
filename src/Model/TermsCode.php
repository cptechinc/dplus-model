<?php

use Base\TermsCode as BaseTermsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

 /**
 * Class for representing a row from the 'ar_term_code' table.
 */
class TermsCode extends BaseTermsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'           => 'artmtermcd',
		'description'    => 'artmtermdesc',
		'method'         => 'artmmethod',
		'type'           => 'artmtype',
		'hold'           => 'artmhold',
		'expiredate'     => 'artmexpiredate',
		'allowfreight'   => 'artmfrtallow',
		'ccprefix'       => 'artmccprefix',
		'orderpercent_1' => 'artmorderpct1',
		'discdays_1'     => 'artmdiscday1',
		'duedays_1'      => 'artmduedays1',
	);
}
