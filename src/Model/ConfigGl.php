<?php

use Base\ConfigGl as BaseConfigGl;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'gl_config' table.
 */
class ConfigGl extends BaseConfigGl {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'companyid'    => 'gltbcoid',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
