<?php

use Base\UserPermissionsItm as BaseUserPermissionsItm;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_itm_perm' table.
 */
class UserPermissionsItm extends BaseUserPermissionsItm {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'userid'     => 'itmpuserid',
		'loginid'    => 'itmpuserid',
		'whse'       => 'itmpwhse',
		'pricing'    => 'itmpprices',
		'costing'    => 'itmpcosts',
		'xrefs'      => 'itmpxrefs',
		'misc'       => 'itmpmisc',
		'packaging'  => 'itmppkg',
		'options'    => 'itmpoptions',
		'date'       => 'dateupdtd',
		'time'       => 'timeupdtd'
	);

	const PERMISSIONS = [
		'whse', 'pricing', 'costing',
		'xrefs', 'misc', 'packaging', 'options'
	];

	/**
	 * Return if Column Value equals the True value
	 * @param  string $col  Column or Alias
	 * @return bool
	 */
	public function is_true($col) {
		if (isset($this->$col)) {
			return $this->$col == self::YN_TRUE;
		}
		return false;
	}

	/**
	 * Return if User has Permission for Pricing
	 * @return bool
	 */
	public function whse() {
		return $this->is_true('whse');
	}

	/**
	 * Return if User has Permission for Pricing
	 * @return bool
	 */
	public function pricing() {
		return $this->is_true('pricing');
	}

	/**
	 * Return if User has Permission for Costing
	 * @return bool
	 */
	public function costing() {
		return $this->is_true('costing');
	}

	/**
	 * Return if User has Permission for Xrefs
	 * @return bool
	 */
	public function xrefs() {
		return $this->is_true('xrefs');
	}

	/**
	 * Return if User has Permission for misc
	 * @return bool
	 */
	public function misc() {
		return $this->is_true('misc');
	}

	/**
	 * Return if User has Permission for Packaging
	 * @return bool
	 */
	public function packaging() {
		return $this->is_true('packaging');
	}

	/**
	 * Return if User has Permission for Options
	 * @return bool
	 */
	public function options() {
		return $this->is_true('options');
	}

	/**
	 * Return Array of Permitted Functions
	 * @return array
	 */
	public function permitted() {
		return array_filter(self::PERMISSIONS, array($this, 'is_true'));
	}
}
