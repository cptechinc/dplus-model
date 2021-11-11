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
	const YN_TRUE = 'Y';

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
		'name'         => 'usrcloginname',
		'whseid'       => 'intbwhse',
		'groupid'      => 'usrclogingroup',
		'roleid'       => 'usrcloginrole',
		'email'        => 'usrcemailaddr',
		'activeitemsonly' => 'usrcactiveitemsonly',
		'admin'        => 'usrcadmin',
		'storefront'   => 'usrcfront',
		'citydesk'     => 'usrccitydesk',
		'reportadmin'  => 'usrcreptadmin',
		'companyid'    => 'usrcdefcmpy',
		'printerbrowse' => 'usrcbrowseprinter',
		'printerreport' => 'usrcprinter',
		'userwhsefirst' => 'usrcwhsedisplayseq',
		'restrictaccess' => 'usrcrestrictaccess',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

	/**
	 * Return if User should only see Active Items Only
	 * @return bool
	 */
	public function showActiveItemsOnly() {
		return $this->activeitemsonly == self::YN_TRUE;
	}

	/**
	 * Return if User is an Admin
	 * @return bool
	 */
	public function isAdmin() {
		return $this->admin == self::YN_TRUE;
	}

	/**
	 * Return if User is a Store Front User
	 * @return bool
	 */
	public function isStorefront() {
		return $this->storefront == self::YN_TRUE;
	}

	/**
	 * Return if User is a City DeskUser
	 * @return bool
	 */
	public function isCityDesk() {
		return $this->citydesk == self::YN_TRUE;
	}

	/**
	 * Return if User is a Report Admin
	 * @return bool
	 */
	public function isReportAdmin() {
		return $this->reportadmin == self::YN_TRUE;
	}

	/**
	 * Return if User's Whse should be displayed first
	 * @return bool
	 */
	public function displayUserWhseFirst() {
		return $this->userwhsefirst == self::YN_TRUE;
	}

	/**
	 * Return if Only Active Items should be shown for ITEMID GET
	 * @return bool
	 */
	public function displayActiveItemsOnly() {
		return $this->activeitemsonly == self::YN_TRUE;
	}

	/**
	 * Return if User Access should be restricted
	 * @return bool
	 */
	public function restrictAccess() {
		return $this->restrictaccess == self::YN_TRUE;
	}

	/**
	 * Return Warehouse for User
	 * @return Warehouse
	 */
	public function getWhse() {
		return WarehouseQuery::create()->findOneById($this->whseid);
	}

}
