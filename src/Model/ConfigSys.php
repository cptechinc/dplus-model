<?php

declare(strict_types=1);

use Base\ConfigSys as BaseConfigSys;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_config' table.
 *
 */
class ConfigSys extends BaseConfigSys {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'           => 'scfgkey',
		'custid'       => 'scfgcustid',
	];
}
