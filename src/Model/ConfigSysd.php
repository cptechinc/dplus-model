<?php

declare(strict_types=1);

use Base\ConfigSysd as BaseConfigSysd;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_definition' table.
 * NOTE: Values are coming from sysd
 */
class ConfigSysd extends BaseConfigSysd {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'companynbr'  => 'cscpcompnbr',
		'companyid'   => 'cscpcompid',
		'companyname' => 'cscpcompname',
		'dirautofile'  =>  'cscpdocautodir',
		'dircerts'     => 'cscpcertsdir',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	];
}
