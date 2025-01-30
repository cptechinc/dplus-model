<?php

use Base\ConfigKt as BaseConfigKt;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'in_config' table
 * NOTE: There will only be one record in the database for the company
 */
class ConfigKt extends BaseConfigKt {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	const OPTIONS_USAGEORFREE = [
		'F' => 'free goods',
		'T' => 'usage tag'
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'key'            => 'ktbconfkey',
		'usageorfree'    => 'kttbconffreeortag',
		'displayinorders' => 'kttbconfeditso',
		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd',
	);

	public function usageorfreefree() {
		return $this->usageorfree == 'F';
	}

	public function usageorfreeusage() {
		return $this->usageorfree == 'T';
	}

	/**
	 * Return if Usage Tag is Free Goods
	 * @return bool
	 */
	public function isFreeUsage() {
		return $this->usageorfree == 'F';
	}

	/**
	 * Return if Usage Tag is Usage
	 * @return bool
	 */
	public function isUsageTag() {
		return $this->usageorfree == 'T';
	}
}
