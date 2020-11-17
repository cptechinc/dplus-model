<?php

use Base\SysLoginGroup as BaseSysLoginGroup;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_login_group' table.
 */
class SysLoginGroup extends BaseSysLoginGroup {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'qtbllgrpcode',
		'code'         => 'qtbllgrpcode',
		'description'  => 'qtbllgrpdesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
