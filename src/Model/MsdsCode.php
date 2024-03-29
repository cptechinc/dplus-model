<?php

use Base\MsdsCode as BaseMsdsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_msds_code' table.
*/
class MsdsCode extends BaseMsdsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'              => 'intbmsdscode',
		'code'            => 'intbmsdscode',
		'description'     => 'intbmsdsdesc',
		'effective_date'  => 'intbmsdsefftdate',
		'effectivedate'   => 'intbmsdsefftdate',
		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
