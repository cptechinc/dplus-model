<?php

use Base\ApTypeCode as BaseApTypeCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_type_code' table.
 *
 */
class ApTypeCode extends BaseApTypeCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'         => 'aptbtypecode',
		'description'  => 'aptbtypedesc',
		'fabricator'   => 'aptbtypefab',
		'production'   => 'aptbtypeprod',
		'competitor'   => 'aptbtypecomp',
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
