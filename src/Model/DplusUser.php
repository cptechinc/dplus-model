<?php

use Base\DplusUser as BaseDplusUser;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_login' table.
 * AKA LOGM
 * RELATIONSHIPS: SysLoginGroup, SysLoginRole
 */
class DplusUser extends BaseDplusUser {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const LENGTH_USERID = 8;
	const YN_TRUE = 'Y';
	const NOTIFY_TRUE = 'X';

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

	const SENDTIMES = [
		'N' => 'Now',
		'O' => 'Off Peak',
		'A' => 'At Date/Time'
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
		'allowprocessdelete' => 'usrcallowprocremoval',
		'password'     => 'usrcpswd',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		// Fax Fields
		'faxname'    => 'usrcfaxname',
		'faxcompany' => 'usrcfaxcompany',
		'faxarea'    => 'usrcfaxarea',
		'faxfirst3'  => 'usrcfaxfrst3',
		'faxlast4'   => 'usrcfaxlast4',
		// Phone Fields
		'phonearea'    => 'usrcphonearea',
		'phonefirst3'  => 'usrcphonefrst3',
		'phonelast4'   => 'usrcphonelast4',
		'phoneext'     => 'usrcphoneext',
		'coversheet'   => 'usrccoversheet',
		'faxsubject'   => 'usrcsubject',
		'notifysuccess' => 'usrcnotifys',
		'notifyfailure' => 'usrcnotifyf',
		'sendtime'      => 'usrcsendtime',
		// Foreign Key Relationships
		'role'         => 'sysLoginRole',
		'group'        => 'sysLoginGroup',
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
	 * Return if User is allowed to delete process
	 * @return bool
	 */
	public function allowProcessDelete() {
		return $this->allowprocessdelete == self::YN_TRUE;
	}

	/**
	 * Return Warehouse for User
	 * @return Warehouse
	 */
	public function getWhse() {
		return WarehouseQuery::create()->findOneById($this->whseid);
	}

	/**
	 * Return if User should be Notified on Fax Success
	 * @return bool
	 */
	public function notifySuccess() {
		return $this->notifysuccess == self::NOTIFY_TRUE;
	}

	/**
	 * Return if User should be Notified on Fax Failure
	 * @return bool
	 */
	public function notifyFailure() {
		return $this->notifyfailure == self::NOTIFY_TRUE;
	}

	/**
	 * Return Fax
	 * @param string $glue
	 * @return string
	 */
	public function fax($glue = '') {
		return implode($glue, [$this->faxarea, $this->faxfirst3, $this->faxlast4]);
	}

	/**
	 * Return Phone
	 * @param string $glue
	 * @return string
	 */
	public function phone($glue = '') {
		return implode($glue, [$this->phonearea, $this->phonefirst3, $this->phonelast4]);
	}
}
