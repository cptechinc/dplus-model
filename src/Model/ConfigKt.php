<?php

use Base\ConfigKt as BaseConfigKt;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'in_config' table
 * NOTE: There will only be one record in the database for the company
 *
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
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
	);
}
