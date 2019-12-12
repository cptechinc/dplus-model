<?php

use Base\ConfigIn as BaseConfigIn;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'in_config' table
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigIn extends BaseConfigIn {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'use_controlbin' => 'intbconfusecntrlbin',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
	);

	/**
	 * Return if Company is configured to use Control Bin
	 * @return bool
	 */
	public function use_controlbin() {
		return $this->use_controlbin == 'Y';
	}
}