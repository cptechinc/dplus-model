<?php

use Base\SoFreightRate as BaseSoFreightRate;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_frtrate' table.
 */
class SoFreightRate extends BaseSoFreightRate {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAXLENGTH_CODE = 1;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'           => 'sfrtratecode',
		'code'         => 'sfrtratecode',
		'description'  => 'sfrtratedesc',
		'addon'        => 'sfrtaddon',
		'tripcharge'   => 'sfrttripchrg',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	];
}
