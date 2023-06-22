<?php

use Base\ConfigSoFreight as BaseConfigSoFreight;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'so_frt_config' table.
 * REPRESENTS: Sales Order Freight config
 */
class ConfigSoFreight extends BaseConfigSoFreight {
	use ThrowErrorTrait;
	use MagicMethodTraits;
	
	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'usetable' => 'oetbCon2FrtRateTable',
		'orderamtA' => 'oetbCon2FrghtOrdrAmtA',
	];
}
