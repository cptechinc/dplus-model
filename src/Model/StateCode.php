<?php

use Base\StateCode as BaseStateCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'state_codes' table.
 */
class StateCode extends BaseStateCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'statid',
		'code'          => 'stateid',
		'abbreviation'  => 'stateid',
		'description'   => 'statname',
		'name'          => 'statname',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
