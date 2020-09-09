<?php

use Base\SoEditPermissions as BaseSoEditPermissions;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_controls' table.
 * PURPOSE: Sales Order Edit Permissions for User
 */
class SoEditPermissions extends BaseSoEditPermissions {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'userid'       => 'oetbcpercode',
		'name'         => 'oetbcpername',
		'canceled'     => 'oetbcpercanc',
		'new'          => 'oetbcpernew',
		'picked'       => 'oetbcperpick',
		'verified'     => 'oetbcperver',
		'invoiced'     => 'oetbcperinv',
		'advancedata'  => 'oetbcperadvcdata',
		'posadmin'     => 'oetbcperposadmin'
	);

	public function allow($status) {
		$func = "allow_$status";
		if (method_exists($this, $func)) {
			return $this->$func;
		}
		return false;
	}

	/**
	 * Return if Allow Editing if Order is Canceled
	 * @return bool
	 */
	public function allow_canceled() {
		return $this->canceled == self::YN_TRUE;
	}

	/**
	 * Return if Allow Editing if Order is New
	 * @return bool
	 */
	public function allow_new() {
		return $this->new == self::YN_TRUE;
	}

	/**
	 * Return if Allow Editing if Order is Picked
	 * @return bool
	 */
	public function allow_picked() {
		return $this->picked == self::YN_TRUE;
	}

	/**
	 * Return if Allow Editing if Order is Verified
	 * @return bool
	 */
	public function allow_verified() {
		return $this->verified == self::YN_TRUE;
	}

	/**
	 * Return if Allow Editing if Order is Invoiced
	 * @return bool
	 */
	public function allow_invoiced() {
		return $this->invoice == self::YN_TRUE;
	}
}
