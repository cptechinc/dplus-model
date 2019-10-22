<?php

use Base\ApTermsCode as BaseApTermsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_term_code' table.
 *
 */
class ApTermsCode extends BaseApTermsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'          => 'aptmtermcode',
		'description'   => 'aptmtermdesc',
	);
}
