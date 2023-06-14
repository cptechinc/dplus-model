<?php

use Base\ConfigCi as BaseConfigCi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ci_config' table.
 *
 * Contains CI configurations
 * NOTE: one record will be in the table
 */
class ConfigCi extends BaseConfigCi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const BOOL_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'show_inactive' => 'citbconfshowinactive',
		'ytdstartmonth' => 'citbconfytdstrtmo',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
