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

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'         => 'aptbtypecode',
		'description'  => 'aptbtypedesc'
	);
}
