<?php

use Base\DplusUser as BaseDplusUser;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_login' table.
 * AKA LOGM
 */
class DplusUser extends BaseDplusUser {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const LENGTH_USERID = 8;

	const ROLES = [
		'ACCTG'  => 'accounting',
		'ADMIN'  => 'administration',
		'MGMT'   => 'management',
		'PURCH'  => 'purchasing',
		'PURMGR' => 'purchasing manager',
		'SLSREP' => 'sales rep',
		'SLSMGR' => 'sales manager',
		'WHSE'   => 'warehouse',
		'WHSMGR' => 'warehouse manager',
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'usrcid',
		'userid'       => 'usrcid',
		'name'         => 'UsrcLoginName',
		'whseid'       => 'intbwhse',
		'group'        => 'usrclogingroup',
		'role'         => 'usrcloginrole',
		'email'        => 'usrcemailaddr',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
