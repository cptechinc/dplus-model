<?php

use Base\SysLoginRole as BaseSysLoginRole;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_login_role' table.
 */
class SysLoginRole extends BaseSysLoginRole {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'qtblrolecode',
		'code'         => 'qtblrolecode',
		'description'  => 'qtblroledesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
